<?php


class support extends MY_Controller
{
    public $tb_tickets = "sp_tickets";
    public $tb_users = "sp_users";
    public $tb_tickets_messages = "sp_tickets_messages";
    public $tb_account_manager = "sp_account_manager";
    public $tb_tickets_faqs = "sp_tickets_faqs";
    public $module_name = NULL;
    public function __construct()
    {
        parent::__construct();
        _permission(get_class($this) . "_enable");
        $this->load->model(get_class($this) . "_model", "model");
        $module_path = get_module_directory(__DIR__);
        include $module_path . "libraries/vendor/autoload.php";
        $this->module_name = get_module_config($this, "name");
        $this->module_icon = get_module_config($this, "icon");
        $this->uiduser = _u("ids");
        $this->admininfo = $this->model->get("*", $this->tb_users, "ids = '" . $this->uiduser . "'");
    }
    public function check()
    {
        return true;
    }
    public function index($page = "", $ids = "")
    {
        if (!$this->check()) {
            if (is_ajax()) {
                ms(["status" => "error", "message" => "invalid license"]);
            } else {
                echo "<p style=\"color:darkred\">invalid licence click to <a href=\"/\">return</a></p>";
                return NULL;
            }
        }
        if ($this->admininfo->role == 0) {
            $this->db->from($this->tb_tickets);
            $this->db->where("user = '" . $this->uiduser . "'", NULL, false);
            $this->db->order_by("id", "desc");
            $query = $this->db->get();
            $result = $query->result();
        } else {
            $this->db->from($this->tb_tickets);
            $this->db->order_by("id", "desc");
            $query = $this->db->get();
            $result = $query->result();
        }
        $page_type = is_ajax() ? false : true;
        $data = [];
        switch ($page) {
            case "new":
                
            case "ticket":
                if (access_ticket($ids)) {
                    
                    $item = $this->model->get("*", $this->tb_tickets, "id = '" . $ids . "'");
                    $messages = $this->model->fetch("*", $this->tb_tickets_messages, "ticket = '" . $ids . "'");
                    $userinfo = $this->model->get("*", $this->tb_users, "ids = '" . $item->user . "'");
                    $data["result"] = $item;
                    $data["messages"] = $messages;
                    $data["admininfo"] = $this->admininfo;
                    $data["userinfo"] = $userinfo;
                   /* print_r($data);
                	die();*/
                }
                break;
            case "status":
                if (access_ticket($ids)) {
                    $messages = $this->model->get("*", $this->tb_tickets, "id = '" . $ids . "'");
                    if ($messages->status == 0) {
                        $data = ["status" => "1"];
                        $this->model->update($this->tb_tickets, $data, ["id" => $ids]);
                        ms(["status" => "success", "message" => __("Ticket has been opened")]);
                    } else {
                        if ($messages->status == 1) {
                            $data = ["status" => "0"];
                            $this->model->update($this->tb_tickets, $data, ["id" => $ids]);
                            ms(["status" => "success", "message" => __("Ticket has been closed")]);
                        }
                    }
                }
                break;
            case "notify":
                if (access_ticket($ids)) {
                    $messages = $this->model->get("*", $this->tb_tickets, "id = '" . $ids . "'");
                    if ($messages->notify == 0) {
                        $data = ["notify" => "1"];
                        $this->model->update($this->tb_tickets, $data, ["id" => $ids]);
                        ms(["status" => "success", "message" => __("Active Notifications for this Ticket")]);
                    } else {
                        if ($messages->notify == 1) {
                            $data = ["notify" => "0"];
                            $this->model->update($this->tb_tickets, $data, ["id" => $ids]);
                            ms(["status" => "success", "message" => __("Deactivated Notifications for this Ticket")]);
                        }
                    }
                }
                break;
            case "delete":
                if ($this->admininfo->role != 0) {
                    $this->model->delete($this->tb_tickets, ["id" => $ids]);
                    $this->model->delete($this->tb_tickets_messages, ["ticket" => $ids]);
                    ms(["status" => "success", "message" => __("Ticket successfully removed.")]);
                }
                break;
            case "delete_faq":
                if ($this->admininfo->role != 0) {
                    $this->model->delete($this->tb_tickets_faqs, ["id" => $ids]);
                    ms(["status" => "success", "message" => __("FAQ successfully removed.")]);
                }
                break;
            default:
        }
                $page = page($this, "pages", "general", $page, $data, $page_type);
                if (!is_ajax()) {
                    $views = ["subheader" => view("main/subheader", ["result" => $result, "module_name" => $this->module_name, "module_icon" => $this->module_icon], true), "column_one" => view("main/sidebar", ["result" => $result], true), "column_two" => view("main/content", ["view" => $page], true)];
                    views(["title" => $this->module_name, "fragment" => "fragment_two", "views" => $views]);
                } else {
                    _e($page, false);
                }
       
    }
    public function save($ids = "")
    {
        if (!$this->check()) {
            ms(["status" => "error", "message" => "invalid license"]);
        }
        $category = post("category");
        $title = post("title");
        $new_ticket = post("new_ticket");
        $account_id = _u("id");
        if (empty($category) || empty($title) || empty($new_ticket)) {
            ms(["status" => "error", "message" => __("Please complete all fields.")]);
        }
        $this->model->insert($this->tb_tickets, ["user" => $this->uiduser, "account_id" => $account_id, "title" => $title, "category" => $category, "status" => 1, "notify" => 1, "changed" => now(), "created" => now()]);
        $lastid = $this->db->insert_id();
        $this->model->insert($this->tb_tickets_messages, ["user" => $this->uiduser, "account_id" => $account_id, "text" => htmlspecialchars($new_ticket, ENT_QUOTES), "ticket" => $lastid, "created" => now()]);
        if (get_option("support_email_create", 0) && $this->admininfo->role == 0) {
            $result = send_mail_ticket("create", $this->uiduser, $new_ticket, $lastid, get_option("support_email", "example@gmail.com"));
            if ($result["status"] == "error") {
                ms($result);
            }
        }
        ms(["status" => "success", "message" => __("Ticket created successfully.")]);
    }
    public function reply($ids = "")
    {
        if (!$this->check()) {
            ms(["status" => "error", "message" => "invalid license"]);
        }
        if (!access_ticket($ids)) {
            ms(["status" => "error", "message" => __("Error")]);
        }
        $reply_ticket = post("reply_ticket");
        $account_id = _u("id");
        if (empty($reply_ticket)) {
            ms(["status" => "error", "message" => __("Please complete all fields.")]);
        }
        $this->model->insert($this->tb_tickets_messages, ["user" => $this->uiduser, "account_id" => $account_id, "text" => htmlspecialchars($reply_ticket, ENT_QUOTES), "ticket" => $ids, "created" => now()]);
        if (get_option("support_email_reply", 0)) {
            $ticket = $this->model->get("*", $this->tb_tickets, "id = '" . $ids . "'");
            if ($this->admininfo->role == 0) {
                if ($ticket->notify == 1) {
                    $result = send_mail_ticket("reply", $this->uiduser, $reply_ticket, $ids, get_option("support_email", "example@gmail.com"));
                    if ($result["status"] == "error") {
                        ms($result);
                    }
                }
            } else {
                $emailreceptor = get_email_ids($ticket->user);
                $result = send_mail_ticket("reply", $this->uiduser, $reply_ticket, $ids, $emailreceptor);
                if ($result["status"] == "error") {
                    ms($result);
                }
            }
        }
        ms(["status" => "success", "message" => __("Ticket reply successfully.")]);
    }
    public function delete()
    {
        $ids = post("id");
        if (empty($ids)) {
            ms(["status" => "error", "message" => __("Please select an item to delete")]);
        }
        if (!access_ticket($id)) {
            ms(["status" => "error", "message" => __("Error")]);
        }
        if (is_array($ids)) {
            foreach ($ids as $id) {
                $this->model->delete($this->tb_tickets, ["ids" => $id]);
            }
        } else {
            if (is_string($ids)) {
                $this->model->delete($this->tb_tickets, ["ids" => $ids]);
            }
        }
        ms(["status" => "success", "message" => __("Success")]);
    }
    public function faqs()
    {
        if (!$this->check()) {
            if (is_ajax()) {
                ms(["status" => "error", "message" => "invalid license"]);
            } else {
                echo "<p style=\"color:darkred\">invalid licence click to <a href=\"/\">return</a></p>";
                return NULL;
            }
        }
        $page_type = is_ajax() ? false : true;
        $data = [];
        $this->db->from($this->tb_tickets_faqs);
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        $faqs = $query->result();
        $data["faqs"] = $faqs;
        $data["admininfo"] = $this->admininfo;
        $views = ["subheader" => view("main/subheader", ["module_name" => __("Frequent Questions"), "module_icon" => "fas fa-book"], true), "column_one" => page($this, "pages", "faqs", "", $data)];
        views(["title" => $this->module_name, "fragment" => "fragment_one", "views" => $views]);
    }
    public function create($ids = "")
    {
        if (!$this->check()) {
            ms(["status" => "error", "message" => "invalid license"]);
        }
        $title = post("title");
        $new_faq = post("new_faq");
        $account_id = _u("id");
        if (empty($title) || empty($new_faq)) {
            ms(["status" => "error", "message" => __("Please complete all fields.")]);
        }
        $this->model->insert($this->tb_tickets_faqs, ["user" => $this->uiduser, "account_id" => $account_id, "title" => $title, "text" => $new_faq, "status" => 1, "changed" => now(), "created" => now()]);
        ms(["status" => "success", "message" => __("FAQ created successfully.")]);
    }
}
?>
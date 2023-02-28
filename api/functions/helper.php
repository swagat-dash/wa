

<?php
goto D1569c134f;
A8fb8a31d5:
if (!function_exists("tNUcvSZDvI")) {
    function tNUcvSZDvI($url, $data = array())
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, count($data));
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
}
goto Ca4b42e662;
Bb9e22335b:
if (!function_exists("tNUcvSZDvY")) {
    function tNUcvSZDvY($url = '')
    {
        goto E20464cc20;
        dc2fa189d2:
        tNUcvSZDvT(["status" => "error", "message" => "Cannot get file type"]);
        goto Efd24dd67d;
        E20464cc20:
        $headers = @get_headers(urldecode($url), 1);
        goto e4a87f2f75;
        Fd84d987c4:
        tNUcvSZDvT(["status" => "error", "message" => "Cannot find the media"]);
        goto Fa59cf97b0;
        e4a87f2f75:
        if ($headers) {
            goto Ae2589c0f0;
        }
        goto Fd84d987c4;
        Efd24dd67d:
        Dd4521e1e1:
        goto cd004433b4;
        D6423417c5:
        $base64 = "data:" . $type . ";base64," . base64_encode($data);
        goto Ab0219ab8e;
        cd004433b4:
        $type = $headers["Content-Type"];
        goto Fde518e839;
        a25e909556:
        if (!(!isset($headers["Content-Type"]) || empty($headers["Content-Type"]))) {
            goto Dd4521e1e1;
        }
        goto dc2fa189d2;
        Ab0219ab8e:
        return $base64;
        goto A91c725c17;
        Fa59cf97b0:
        Ae2589c0f0:
        goto a25e909556;
        Fde518e839:
        $data = @file_get_contents($url);
        goto D6423417c5;
        A91c725c17:
    }
}
goto ef0abe3a5f;
Ba5f51a2b6:
if (!function_exists("pr")) {
    function pr($data, $type = 0)
    {
        goto D730edcf94;
        Cbee757acd:
        print_r($data);
        goto C72ca2b5aa;
        Ddbe19b4d7:
        exit;
        goto cec7e61e1d;
        Df6a110689:
        if (!($type != 0)) {
            goto aa7c73cadc;
        }
        goto Ddbe19b4d7;
        C72ca2b5aa:
        print "</pre>";
        goto Df6a110689;
        cec7e61e1d:
        aa7c73cadc:
        goto C0bef53427;
        D730edcf94:
        print "<pre>";
        goto Cbee757acd;
        C0bef53427:
    }
}
goto A19e031354;
A19e031354:
if (!function_exists("tNUcvSZDvR")) {
    function tNUcvSZDvR()
    {
        return strtoupper(uniqid());
    }
}
goto caa2da4160;
d5f45e4474:
if (!function_exists("tNUcvSZDvQ")) {
    function tNUcvSZDvQ()
    {
        goto Daed6b139e;
        be524ae3da:
        e594051400:
        goto B6312c3daa;
        Daed6b139e:
        if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
            goto Dabb67eed3;
        }
        goto F70f1b53d4;
        B6e64f46ee:
        goto Ab7da4a32b;
        goto be524ae3da;
        F70f1b53d4:
        if (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
            goto e594051400;
        }
        goto De69a8d4cb;
        f6b3ef10b7:
        goto Ab7da4a32b;
        goto ef25c8d1c1;
        d426e833cd:
        Ab7da4a32b:
        goto bebf710d42;
        B6312c3daa:
        $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
        goto d426e833cd;
        bebf710d42:
        return $ip;
        goto E2fc0e39d7;
        De69a8d4cb:
        $ip = $_SERVER["REMOTE_ADDR"];
        goto f6b3ef10b7;
        Acf64233de:
        $ip = $_SERVER["HTTP_CLIENT_IP"];
        goto B6e64f46ee;
        ef25c8d1c1:
        Dabb67eed3:
        goto Acf64233de;
        E2fc0e39d7:
    }
}
goto Ba5f51a2b6;
ef0abe3a5f:
if (!function_exists("tNUcvSZDvU")) {
    function tNUcvSZDvU($url)
    {
        goto F3c0171cfe;
        cd4660f261:
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        goto de64ec9577;
        fd87b4156d:
        curl_close($ch);
        goto fb3d37df33;
        de64ec9577:
        curl_setopt($ch, CURLOPT_HEADER, false);
        goto Af2c61e843;
        A0be551c08:
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
        goto Cb69014088;
        b84da7750d:
        $headers = array("Accept:text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8", "Accept-Language: en-US,fr;q=0.8;q=0.6,en;q=0.4,ar;q=0.2", "Accept-Encoding: gzip,deflate", "Accept-Charset: utf-8;q=0.7,*;q=0.7", "cookie:datr=; locale=en_US; sb=; pl=n; lu=gA; c_user=; xs=; act=; presence=");
        goto E1cd3f86dd;
        fb3d37df33:
        return $result;
        goto De914b66e4;
        F3c0171cfe:
        $user_agent = "Mozilla/5.0 (iPhone; U; CPU like Mac OS X; en) AppleWebKit/420.1 (KHTML, like Gecko) Version/3.0 Mobile/3B48b Safari/419.3";
        goto b84da7750d;
        ff5913c9c8:
        curl_setopt($ch, CURLOPT_POST, false);
        goto ef4c89d96e;
        Af2c61e843:
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        goto fb28eecd87;
        fb28eecd87:
        curl_setopt($ch, CURLOPT_ENCODING, '');
        goto dbae43d330;
        eff78e63b5:
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        goto efd9b514ac;
        Cb69014088:
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        goto E6a2e506de;
        dbae43d330:
        curl_setopt($ch, CURLOPT_AUTOREFERER, true);
        goto A0be551c08;
        b52e2c2ee3:
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        goto d6dba24c4c;
        efd9b514ac:
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        goto ff5913c9c8;
        E6a2e506de:
        curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
        goto b52e2c2ee3;
        ef4c89d96e:
        curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
        goto cd4660f261;
        d6dba24c4c:
        $result = curl_exec($ch);
        goto fd87b4156d;
        Bf5c9a34c3:
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        goto eff78e63b5;
        E1cd3f86dd:
        $ch = curl_init($url);
        goto Bf5c9a34c3;
        De914b66e4:
    }
}
goto A8fb8a31d5;
caa2da4160:
if (!function_exists("ids")) {
    function ids()
    {
        return md5(tNUcvSZDvR());
    }
}
goto Eed32d08cf;
Ca4b42e662:
if (!function_exists("tNUcvSZDvO")) {
    function tNUcvSZDvO($db)
    {
        goto c6b1732f10;
        D3c9f7fbe2:
        $team_id = isset($_GET["access_token"]) ? $_GET["access_token"] : false;
        goto Dbf0d15c71;
        Ff84067773:
        Cc703c9f7c:
        goto a5b1f38e3f;
        a5b1f38e3f:
        return $team[0];
        goto Cee6c87c89;
        Dbf0d15c71:
        $team = $tb_team->select()->where("ids", $team_id)->get();
        goto a27c6228bf;
        Ca13629852:
        tNUcvSZDvT(["status" => "error", "message" => "Access token does not exist"]);
        goto Ff84067773;
        c6b1732f10:
        $tb_team = $db->table("sp_team");
        goto D3c9f7fbe2;
        a27c6228bf:
        if (!empty($team)) {
            goto Cc703c9f7c;
        }
        goto Ca13629852;
        Cee6c87c89:
    }
}
goto a1ed8e8368;
Eed32d08cf:
if (!function_exists("tNUcvSZDvT")) {
    function tNUcvSZDvT($array)
    {
        print_r(json_encode($array));
        exit(0);
    }
}
goto Bb9e22335b;
D1569c134f:
if (!function_exists("tNUcvSZDvW")) {
    function tNUcvSZDvW()
    {
        goto C1cea5aba8;
        D3faf11751:
        if (!($license_text != $today)) {
            goto d7cc732eec;
        }
        goto c1de339f3c;
        F402abab01:
        if ($result) {
            goto B21a11ff1b;
        }
         goto B21a11ff1b;
        goto f1ebcdb055;
        Eb6e82a77a:
        B21a11ff1b:
        goto aaba668750;
        df057e3f99:
        A9e213f507:
        goto dcc7a5c16b;
        Ab1e8b7e31:
        $connection = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4", DB_USER, DB_PASS);
        goto c5aaeeebe6;
        ffa381210c:
        $license_open = @fopen($license_file, "r") or die("Unable to open file!");
        goto E368c1c569;
        Aba1ebb809:
        $purchase_code = $license[0]["purchase_code"];
        goto C0c8d24971;
        c172d90af7:
        goto A9e213f507;
        goto A6822ab045;
        Fd484f6654:
        a697bf3111:
        goto C8f3e2c2ef;
        b132326f3c:
        fopen($license_file, "w");
        goto A6bc96ab92;
        d14ba1fef4:
        $license_file = realpath(str_replace("//", "/", __DIR__ . "/../../assets/tmp/")) . "/" . $random;
        goto E117787f6a;
        C1cea5aba8:
        require "vendor/autoload.php";
        goto Ff10b41faa;
        E117787f6a:
        if (file_exists($license_file)) {
            goto b3fd7bb813;
        }
        goto b132326f3c;
        dcc7a5c16b:
        d7cc732eec:
        goto b5f1709eb5;
        C8f3e2c2ef:
        $stream_opts = ["ssl" => ["verify_peer" => false, "verify_peer_name" => false]];
        goto ae32639fc6;
        b9d3b5629c:
            goto ae32639fc6;
        tNUcvSZDvT(["status" => "error", "message" => "License Invalidated 1"]);
        goto df057e3f99;
        A9ba1ce58a:
        goto B63e8ca1bf;
        goto Eb6e82a77a;
        ae32639fc6:
        $result = @file_get_contents("https://mydomain.com/check?p=" . $purchase_code . "&d=" . $domain . "&i=" . tNUcvSZDvQ(), false, stream_context_create($stream_opts));
        goto F402abab01;
        f1ebcdb055:
        tNUcvSZDvT(["status" => "error", "message" => "License Invalidated 2"]);
        goto A9ba1ce58a;
        A38dee34cb:
        tNUcvSZDvT(["status" => "error", "message" => "License Invalidated 3"]);
        goto Fd484f6654;
        dcbe2839f4:
        $random = md5("waapi");
        goto d14ba1fef4;
        D7d59c1aa9:
        $license_text = @file_get_contents($license_file);
        goto D3faf11751;
        Bcbf96d427:
        if (!(strlen($purchase_code) != 36)) {
            goto a697bf3111;
        }
        goto A38dee34cb;
        E368c1c569:
        if (!file_exists($license_file)) {
            goto Ff82f5b3e5;
        }
        goto D7d59c1aa9;
        e792178cd9:
        if (empty($license)) {
            goto Ce1868d452;
        }
        goto Aba1ebb809;
        aaba668750:
        file_put_contents($license_file, $today);
        goto a33ca00808;
        c5aaeeebe6:
        $h = new \ClanCats\Hydrahon\Builder("mysql", function ($query, $queryString, $queryParameters) use ($connection) {
            goto b345f1efd9;
            b345f1efd9:
            $statement = $connection->prepare($queryString);
            goto a7eebadede;
            Dca2bdebf6:
            return $statement->fetchAll(\PDO::FETCH_ASSOC);
            goto A49a00e5dd;
            e27fea0e80:
            if (!$query instanceof \ClanCats\Hydrahon\Query\Sql\FetchableInterface) {
                goto D64fbe001c;
            }
            goto Dca2bdebf6;
            A49a00e5dd:
            D64fbe001c:
            goto Fb219d96b9;
            a7eebadede:
            $statement->execute($queryParameters);
            goto e27fea0e80;
            Fb219d96b9:
        });
        goto D296c465b1;
        c1de339f3c:
        $license = $h->table("sp_purchase_manager")->select("*")->where("item_id", "26102021")->get();
        goto e792178cd9;
        A6bc96ab92:
        b3fd7bb813:
        goto ffa381210c;
        C0c8d24971:
        $domain = urlencode("https://" . $_SERVER["SERVER_NAME"]);
        goto Bcbf96d427;
        D296c465b1:
        $today = md5("waapi" . date("F j, Y"));
        goto dcbe2839f4;
        A6822ab045:
        Ce1868d452:
        goto b9d3b5629c;
        a4adc39480:
        return $h;
        goto c735505069;
        Ff10b41faa:
        $config = (require "../app/config.php");
        goto Ab1e8b7e31;
        b5f1709eb5:
        Ff82f5b3e5:
        goto a4adc39480;
        a33ca00808:
        B63e8ca1bf:
        goto c172d90af7;
        c735505069:
    }
}
goto d5f45e4474;
a1ed8e8368:
if (!function_exists("tNUcvSZDvP")) {
    function tNUcvSZDvP($db, $path)
    {
        goto E4ab5903ed;
        Ac24ffc976:
        if (!empty($option)) {
            goto E0c99e36ca;
        }
        goto de9ea00de8;
        de9ea00de8:
        tNUcvSZDvT(["status" => "error", "message" => "Cannot connect to server. Please try again later"]);
        goto b27bcbb04e;
        ef68117002:
        $option = $tb_option->select()->where("name", "whatsapp_server_url")->get();
        goto Ac24ffc976;
        c85d78605e:
        return $option[0]["value"] . $path;
        goto d2c551811f;
        b27bcbb04e:
        E0c99e36ca:
        goto c85d78605e;
        E4ab5903ed:
        $tb_option = $db->table("sp_options");
        goto ef68117002;
        d2c551811f:
    }
} ?>


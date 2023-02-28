<style>
    .alert {
    position: relative;
    padding-left: 50px;
    font-weight: normal;
    border: none;
    border-radius: 4px;
    position: relative;
    padding: 1rem 1rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: 0.25rem;
}
.alert.alert-info {
    color: #055160;
    background-color: #cff4fc;
    border-color: #b6effb;
}
</style>

<div class="p-25 wa-chatbot-import">
	<h4 class="mb-4 align-items-center d-flex">
		<div class="d-block d-lg-none mr-2">
			<a href="javascript:void(0);" class="user-chat-remove wa-back-submenu text-muted fs-16 p-2">
				<i class="ri-arrow-left-s-line"></i>
			</a>
		</div>
		<div><?php _e("Import Chatbot")?></div>
	</h4>
    
    <form id="chatbot_import">
        <input type="hidden" name="instance_id" value="<?php _e($instance_id); ?>">
        <input type="file" name="file" class="form-control" style="border-radius: 0.25rem;">
        <button type="submit" class="mt-2 btn btn-success"><?php _e('Upload File'); ?></button>
    </form>
</div>
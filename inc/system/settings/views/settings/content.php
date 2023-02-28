<form>
    <div class="m-b-40">
        <h5 class="fs-16 fw-4 text-info m-b-20"><i class="fas fa-caret-right"></i> <?php _e('General Settings')?></h5>
        <div class="form-group">
            <label for="website_title"><?php _e('Website title')?></label>
            <input type="text" class="form-control" id="website_title" name="website_title" value="<?php _e( get_option('website_title', 'Stackposts - Social Marketing Tool') )?>">
        </div>
        <div class="form-group">
            <label for="website_desc"><?php _e('Website description')?></label>
            <input type="text" class="form-control" id="website_desc" name="website_desc" value="<?php _e( get_option('website_desc', '#1 Marketing Platform for Social Network') )?>">
        </div>
        <div class="form-group">
            <label for="website_keywords"><?php _e('Website keyword')?></label>
            <input type="text" class="form-control" id="website_keywords" name="website_keywords" value="<?php _e( get_option('website_keywords', 'social network, marketing, brands, businesses, agencies, individuals') )?>">
        </div>
        <div class="form-group">
            <label for="website_favicon"><?php _e('Website favicon')?></label>
            <div class="input-group">
                <input type="text" class="form-control" id="website_favicon" name="website_favicon" value="<?php _e( get_option('website_favicon', get_url("inc/themes/backend/default/assets/img/favicon.png")) )?>">
                <div class="input-group-append">
                    <button class="btn btn-info btnOpenFileManager" data-id="website_favicon" data-select="single" type="button"><i class="far fa-folder-open"></i></button>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="website_mark"><?php _e('Website mark')?></label>
            <div class="input-group">
                <input type="text" class="form-control" id="website_mark" name="website_mark" value="<?php _e( get_option('website_mark', get_url("inc/themes/backend/default/assets/img/logo.png")) )?>">
                <div class="input-group-append">
                    <button class="btn btn-info btnOpenFileManager" data-id="website_mark" data-select="single" type="button"><i class="far fa-folder-open"></i></button>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="website_white"><?php _e('Website logo white')?></label>
            <div class="input-group">
                <input type="text" class="form-control" id="website_white" name="website_white" value="<?php _e( get_option('website_white', get_url("inc/themes/backend/default/assets/img/logo-white.png")) )?>">
                <div class="input-group-append">
                    <button class="btn btn-info btnOpenFileManager" data-id="website_white" data-select="single" type="button"><i class="far fa-folder-open"></i></button>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="website_black"><?php _e('Website logo black')?></label>
            <div class="input-group">
                <input type="text" class="form-control" id="website_black" name="website_black" value="<?php _e( get_option('website_black', get_url("inc/themes/backend/default/assets/img/logo-black.png")) )?>">
                <div class="input-group-append">
                    <button class="btn btn-info btnOpenFileManager" data-id="website_black" data-select="single" type="button"><i class="far fa-folder-open"></i></button>
                </div>
            </div>
        </div>
    </div>
    
   
    <div class="m-b-40">
        <h5 class="fs-16 fw-4 text-info m-b-20"><i class="fas fa-caret-right"></i> <?php _e('Formats')?></h5>
        <div class="form-group">
            <label for="website_black"><?php _e('Date')?></label>
            <select class="form-control" name="format_date">

                <option class="d/m/Y" <?php _e( get_option('format_date', 'd/m/Y') == 'd/m/Y'?'selected':'' )?> >d/m/Y</option>
                <option class="d M, Y" <?php _e( get_option('format_date', 'd/m/Y') == 'd M, Y'?'selected':'' )?> >d M, Y</option>
                <option class="m/d/Y" <?php _e( get_option('format_date', 'd/m/Y') == 'm/d/Y'?'selected':'' )?>>m/d/Y</option>
                <option class="Y-m-d" <?php _e( get_option('format_date', 'd/m/Y') == 'Y-m-d'?'selected':'' )?>>Y-m-d</option>
            </select>
        </div>
        <div class="form-group">
            <label for="website_black"><?php _e('Datetime')?></label>
            <select class="form-control" name="format_datetime">
                <option class="d/m/Y g:i A" <?php _e( get_option('format_datetime', 'd/m/Y g:i A') == 'd/m/Y g:i A'?'selected':'' )?>>d/m/Y g:i A</option>
                <option class="m/d/Y g:i A" <?php _e( get_option('format_datetime', 'd/m/Y g:i A') == 'm/d/Y g:i A'?'selected':'' )?>>m/d/Y g:i A</option>
                <option class="d/m/Y H:i" <?php _e( get_option('format_datetime', 'd/m/Y g:i A') == 'd/m/Y H:i'?'selected':'' )?>>d/m/Y H:i</option>
                <option class="m/d/Y H:i" <?php _e( get_option('format_datetime', 'd/m/Y g:i A') == 'm/d/Y H:i'?'selected':'' )?>>m/d/Y H:i</option>
                <option class="Y-m-d g:i A" <?php _e( get_option('format_datetime', 'd/m/Y g:i A') == 'Y-m-d g:i A'?'selected':'' )?>>Y-m-d g:i A</option>
                <option class="Y-m-d H:i" <?php _e( get_option('format_datetime', 'd/m/Y g:i A') == 'Y-m-d H:i'?'selected':'' )?>>Y-m-d H:i</option>
            </select>
        </div>
    </div>
    
    
     <!--OTP Integration-->
    <div class="m-b-40">
        <h5 class="fs-16 fw-4 text-info m-b-20"><i class="fas fa-caret-right"></i> <?php _e('OTP (API Integration)')?></h5>
        <div class="form-group">
            <label for="website_title"><?php _e('API Url')?></label>
            <input type="text" placeholder="<?php _e(PATH)?>" class="form-control" id="apiurl" name="apiurl" value="<?php _e(PATH)?>" disabled>
        </div>
        <div class="form-group">
            <label for="website_title"><?php _e('Instance ID')?></label>
            <input type="text" placeholder="Enter your Instance ID" class="form-control" id="apiinstance" name="apiinstance" value="<?php _e( get_option('apiinstance', '633EDB5B935FC') )?>">
        </div>
        <div class="form-group">
            <label for="website_title"><?php _e('Token')?></label>
            <input type="text" placeholder="Enter you Token" class="form-control" id="apitoken" name="apitoken" value="<?php _e( get_option('apitoken', 'e9e72818f56b9b56bd2a5ffa0606dec5') )?>">
        </div>
        <div class="form-group">
            <label for="website_title"><?php _e('Your Message')?></label>
            <input type="text" placeholder="Your OTP is:" class="form-control" id="otpmessages" name="otpmessages" value="<?php _e( get_option('otpmessages', 'Your OTP is:') )?>">
        </div>
    </div>

   
    <button type="submit" class="btn btn-info"><?php _e('Submit')?></button>
</form>
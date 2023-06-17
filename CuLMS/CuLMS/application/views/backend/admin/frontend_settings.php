<div class="row ">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> <?php echo get_phrase('website_settings'); ?></h4>
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title"><?php echo get_phrase('website_settings');?></h4>

                <form class="required-form" action="<?php echo site_url('admin/frontend_settings/frontend_update'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="banner_title"><?php echo get_phrase('banner_title'); ?><span class="required">*</span></label>
                        <input type="text" name = "banner_title" id = "banner_title" class="form-control" value="<?php echo get_frontend_settings('banner_title');  ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="banner_sub_title"><?php echo get_phrase('banner_sub_title'); ?><span class="required">*</span></label>
                        <input type="text" name = "banner_sub_title" id = "banner_sub_title" class="form-control" value="<?php echo get_frontend_settings('banner_sub_title');  ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="about_us"><?php echo get_phrase('about_us'); ?></label>
                        <textarea name="about_us" id = "about_us" class="form-control" rows="5"><?php echo get_frontend_settings('about_us'); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="terms_and_condition"><?php echo get_phrase('terms_and_condition'); ?></label>
                        <textarea name="terms_and_condition" id ="terms_and_condition" class="form-control" rows="5"><?php echo get_frontend_settings('terms_and_condition'); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="privacy_policy"><?php echo get_phrase('privacy_policy'); ?></label>
                        <textarea name="privacy_policy" id = "privacy_policy" class="form-control" rows="5"><?php echo get_frontend_settings('privacy_policy'); ?></textarea>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <button type="button" class="btn btn-primary btn-block" onclick="checkRequiredFields()"><?php echo get_phrase('update_settings'); ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  $(document).ready(function () {
    initSummerNote(['#about_us', '#terms_and_condition', '#privacy_policy']);
  });
</script>

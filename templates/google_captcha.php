<div class="border p-3 mb-3 rounded">
    <div class="row">
        <div class="col-md-6 form-group">
            <label for="captcha"> <?php esc_html_e( 'Captcha Display', 'advsign' ); ?>	</label>
            <div>
                <input type="radio" name="google_captcha" id="google_captcha1" value="option1" checked>
                <label class="form-check-label" for="social_icon_size1">
                    <?php esc_html_e( 'Yes', 'advsign' ); ?> 
                </label>
            </div>
            <div>
                <input type="radio" name="google_captcha" id="google_captcha2" value="option2">
                <label class="form-check-label" for="social_icon_size2">
                    <?php esc_html_e( 'No', 'advsign' ); ?> 
                </label>
            </div>
        </div>
    </div>
</div>
<div class="border p-3 mb-3 rounded">
    <div class="row">
        <div class="col-md-6 form-group">
            <label for="captcha_version"> <?php esc_html_e( 'Choose Google Captcha Version', 'advsign' ); ?></label>
            <div>
                <input type="radio" name="captcha_version" id="captcha_version1" value="option1" checked>
                <label class="form-check-label" for="captcha_version2">
                    <?php esc_html_e( 'v2', 'advsign' ); ?> 
                </label>
            </div>
            <div>
                <input type="radio" name="captcha_version" id="captcha_version2" value="option2">
                <label class="form-check-label" for="captcha_version3">
                    <?php esc_html_e( 'v3', 'advsign' ); ?> 
                </label>
            </div>
        </div>
    </div>
</div>
<div class="border p-3 mb-3 rounded">
    <div class="form-group">
        <label for="site_key"><?php esc_html_e( 'Site Key', 'advsign' ); ?></label>
        <input type="text" class="form-control" id="site_key" aria-describedby="logo_link_url">
    </div>
</div>
<div class="border p-3 mb-3 rounded">
    <div class="form-group">
        <label for="secret_key"><?php esc_html_e( 'Secret Key', 'advsign' ); ?></label>
        <input type="text" class="form-control" id="secret_key" aria-describedby="logo_link_url">
    </div>
</div>
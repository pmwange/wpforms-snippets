/**
 * Change the captcha theme for the Google Checkbox v2 reCAPTCHA
 * @link https://wpforms.com/developers/how-to-change-the-captcha-theme-on-google-checkbox-v2-recaptcha/
 */
function wpf_dev_change_captcha_theme( ) {
?> 
<script type="text/javascript"> 
    jQuery(function($){ 
     $('.wpforms-submit').attr('data-abc', 'my-custom-value'); 
    }); 
</script>
<?php
} 
add_action( 'wpforms_wp_footer_end', 'wpf_dev_change_captcha_theme', 30 );

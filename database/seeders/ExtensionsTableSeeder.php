<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExtensionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('extensions')->delete();
        
        \DB::table('extensions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'act' => 'tawk-chat',
                'name' => 'Tawk.to',
                'description' => 'Key location is shown bellow',
                'image' => 'tawky_big.png',
                'script' => '<script>
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src="https://embed.tawk.to/{{app_key}}";
s1.charset="UTF-8";
s1.setAttribute("crossorigin","*");
s0.parentNode.insertBefore(s1,s0);
})();
</script>',
                'shortcode' => '{"app_key":{"title":"App Key","value":"------"}}',
                'support' => 'twak.png',
                'status' => 0,
                'deleted_at' => NULL,
                'created_at' => '2019-10-19 02:16:05',
                'updated_at' => '2021-05-18 08:37:12',
            ),
            1 => 
            array (
                'id' => 2,
                'act' => 'google-recaptcha2',
                'name' => 'Google Recaptcha 2',
                'description' => 'Key location is shown bellow',
                'image' => 'recaptcha3.png',
                'script' => '
<script src="https://www.google.com/recaptcha/api.js"></script>
<div class="g-recaptcha" data-sitekey="{{sitekey}}" data-callback="verifyCaptcha"></div>
<div id="g-recaptcha-error"></div>',
                'shortcode' => '{"sitekey":{"title":"Site Key","value":"6Lfpm3cUAAAAAGIjbEJKhJNKS4X1Gns9ANjh8MfH"}}',
                'support' => 'recaptcha.png',
                'status' => 0,
                'deleted_at' => NULL,
                'created_at' => '2019-10-19 02:16:05',
                'updated_at' => '2022-03-07 13:22:07',
            ),
            2 => 
            array (
                'id' => 3,
                'act' => 'custom-captcha',
                'name' => 'Custom Captcha',
                'description' => 'Just Put Any Random String',
                'image' => 'customcaptcha.png',
                'script' => NULL,
                'shortcode' => '{"random_key":{"title":"Random String","value":"SecureString"}}',
                'support' => 'na',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-10-19 02:16:05',
                'updated_at' => '2022-06-14 22:34:37',
            ),
            3 => 
            array (
                'id' => 4,
                'act' => 'google-analytics',
                'name' => 'Google Analytics',
                'description' => 'Key location is shown bellow',
                'image' => 'google_analytics.png',
                'script' => '<script async src="https://www.googletagmanager.com/gtag/js?id={{app_key}}"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag("js", new Date());

gtag("config", "{{app_key}}");
</script>',
                'shortcode' => '{"app_key":{"title":"App Key","value":"------"}}',
                'support' => 'ganalytics.png',
                'status' => 0,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2021-05-04 13:19:12',
            ),
            4 => 
            array (
                'id' => 5,
                'act' => 'fb-comment',
                'name' => 'Facebook Comment ',
                'description' => 'Key location is shown bellow',
                'image' => 'Facebook.png',
                'script' => '<div id="fb-root"></div><script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v4.0&appId={{app_key}}&autoLogAppEvents=1"></script>',
                'shortcode' => '{"app_key":{"title":"App Key","value":"----"}}',
                'support' => 'fb_com.PNG',
                'status' => 0,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-03-05 13:48:01',
            ),
        ));
        
        
    }
}
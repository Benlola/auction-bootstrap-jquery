<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GeneralSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('general_settings')->delete();

        \DB::table('general_settings')->insert(array (
            0 =>
            array (
                'id' => 1,
                'sitename' => 'Bid Manager',
                'cur_text' => 'USD',
                'cur_sym' => '$',
                'email_from' => 'info@bidmanager.com',
                'email_template' => '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!--[if !mso]><!-->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
<style type="text/css">
.ReadMsgBody { width: 100%; background-color: #ffffff; }
.ExternalClass { width: 100%; background-color: #ffffff; }
.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }
html { width: 100%; }
body { -webkit-text-size-adjust: none; -ms-text-size-adjust: none; margin: 0; padding: 0; }
table { border-spacing: 0; table-layout: fixed; margin: 0 auto;border-collapse: collapse; }
table table table { table-layout: auto; }
.yshortcuts a { border-bottom: none !important; }
img:hover { opacity: 0.9 !important; }
a { color: #0087ff; text-decoration: none; }
.textbutton a { font-family: \'open sans\', arial, sans-serif !important;}
.btn-link a { color:#FFFFFF !important;}

@media only screen and (max-width: 480px) {
body { width: auto !important; }
*[class="table-inner"] { width: 90% !important; text-align: center !important; }
*[class="table-full"] { width: 100% !important; text-align: center !important; }
/* image */
img[class="img1"] { width: 100% !important; height: auto !important; }
}
</style>



<table bgcolor="#414a51" width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<tbody><tr>
<td height="50"></td>
</tr>
<tr>
<td align="center" style="text-align:center;vertical-align:top;font-size:0;">
<table align="center" border="0" cellpadding="0" cellspacing="0">
<tbody><tr>
<td align="center" width="600">
<!--header-->
<table class="table-inner" width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
<tbody><tr>
<td bgcolor="#0087ff" style="border-top-left-radius:6px; border-top-right-radius:6px;text-align:center;vertical-align:top;font-size:0;" align="center">
<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
<tbody><tr>
<td height="20"></td>
</tr>
<tr>
<td align="center" style="font-family: \'Open sans\', Arial, sans-serif; color:#FFFFFF; font-size:16px; font-weight: bold;">This is a System Generated Email</td>
</tr>
<tr>
<td height="20"></td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
<!--end header-->
<table class="table-inner" width="95%" border="0" cellspacing="0" cellpadding="0">
<tbody><tr>
<td bgcolor="#FFFFFF" align="center" style="text-align:center;vertical-align:top;font-size:0;">
<table align="center" width="90%" border="0" cellspacing="0" cellpadding="0">
<tbody><tr>
<td height="35"></td>
</tr>
<!--logo-->
<tr>
<td align="center" style="vertical-align:top;font-size:0;">
<a href="#">
<img style="display:block; line-height:0px; font-size:0px; border:0px;" src="https://benlola.com/wp-content/uploads/2022/04/logo-no-background-png.png" alt="img">
</a>
</td>
</tr>
<!--end logo-->
<tr>
<td height="40"></td>
</tr>
<!--headline-->
<tr>
<td align="center" style="font-family: \'Open Sans\', Arial, sans-serif; font-size: 22px;color:#414a51;font-weight: bold;">Hello {{fullname}} ({{username}})</td>
</tr>
<!--end headline-->
<tr>
<td align="center" style="text-align:center;vertical-align:top;font-size:0;">
<table width="40" border="0" align="center" cellpadding="0" cellspacing="0">
<tbody><tr>
<td height="20" style=" border-bottom:3px solid #0087ff;"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td height="20"></td>
</tr>
<!--content-->
<tr>
<td align="left" style="font-family: \'Open sans\', Arial, sans-serif; color:#7f8c8d; font-size:16px; line-height: 28px;">{{message}}</td>
</tr>
<!--end content-->
<tr>
<td height="40"></td>
</tr>

</tbody></table>
</td>
</tr>
<tr>
<td height="45" align="center" bgcolor="#f4f4f4" style="border-bottom-left-radius:6px;border-bottom-right-radius:6px;">
<table align="center" width="90%" border="0" cellspacing="0" cellpadding="0">
<tbody><tr>
<td height="10"></td>
</tr>
<!--preference-->
<tr>
<td class="preference-link" align="center" style="font-family: \'Open sans\', Arial, sans-serif; color:#95a5a6; font-size:14px;">
© 2021 <a href="#">Website Name</a> . All Rights Reserved.
</td>
</tr>
<!--end preference-->
<tr>
<td height="10"></td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td height="60"></td>
</tr>
</tbody></table>',
                'sms_api' => 'hi {{name}}, {{message}}',
                'base_color' => '214ab0',
                'mail_config' => '{"name":"php"}',
                'sms_config' => '{"clickatell_api_key":"----------------------------","infobip_username":"--------------","infobip_password":"----------------------","message_bird_api_key":"-------------------","account_sid":"AC67afdacf2dacff5f163134883db92c24","auth_token":"77726b242830fb28f52fb08c648dd7a6","from":"+17739011523","apiv2_key":"dfsfgdfgh","name":"clickatell"}',
                'merchant_profile' => '{"name":"Our Shop","mobile":"88004054545","address":"New Yoka","image":"6224ad83e6f471646570883.jpg","cover_image":"6224ad83f31601646570883.jpg"}',
                'ev' => 0,
                'en' => 1,
                'sv' => 0,
                'sn' => 1,
                'force_ssl' => 1,
                'secure_password' => 0,
                'agree' => 1,
                'registration' => 1,
                'active_template' => 'basic',
                'sys_version' => '{"version":"1.1","details":"Best Auction App"}',
                'created_at' => NULL,
                'updated_at' => '2022-06-15 21:16:07',
            ),
        ));


    }
}

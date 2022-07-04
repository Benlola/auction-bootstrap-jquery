<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmailLogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('email_logs')->delete();

        \DB::table('email_logs')->insert(array (
            0 =>
            array (
                'id' => 1,
                'user_id' => 3,
                'merchant_id' => 0,
                'mail_sender' => 'php',
                'email_from' => 'Auction Bid System info@auctionbidsystem.com',
                'email_to' => 'kobex@mailinator.com',
                'subject' => 'Your Account has been Credited',
                'message' => '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
<img style="display:block; line-height:0px; font-size:0px; border:0px;" src="https://i.imgur.com/Z1qtvtV.png" alt="img">
</a>
</td>
</tr>
<!--end logo-->
<tr>
<td height="40"></td>
</tr>
<!--headline-->
<tr>
<td align="center" style="font-family: \'Open Sans\', Arial, sans-serif; font-size: 22px;color:#414a51;font-weight: bold;">Hello Vincent Tate (naguhe)</td>
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
<td align="left" style="font-family: \'Open sans\', Arial, sans-serif; color:#7f8c8d; font-size:16px; line-height: 28px;"><div>2,500.00 USD has been added to your account .</div><div><br></div><div>Transaction Number : W35FMHF2WX5N</div><div><br></div>Your Current Balance is : <font size="3"><b>2,500.00&nbsp; USD&nbsp;</b></font></td>
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
                'created_at' => '2022-06-14 22:35:34',
                'updated_at' => '2022-06-14 22:35:34',
            ),
            1 =>
            array (
                'id' => 2,
                'user_id' => 0,
                'merchant_id' => 1,
                'mail_sender' => 'php',
                'email_from' => 'Auction Bid System info@auctionbidsystem.com',
                'email_to' => 'vygafazej@mailinator.com',
                'subject' => 'Your Product has been Bided Successfully',
                'message' => '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
<img style="display:block; line-height:0px; font-size:0px; border:0px;" src="https://i.imgur.com/Z1qtvtV.png" alt="img">
</a>
</td>
</tr>
<!--end logo-->
<tr>
<td height="40"></td>
</tr>
<!--headline-->
<tr>
<td align="center" style="font-family: \'Open Sans\', Arial, sans-serif; font-size: 22px;color:#414a51;font-weight: bold;">Hello Shad Vega (badevob)</td>
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
<td align="left" style="font-family: \'Open sans\', Arial, sans-serif; color:#7f8c8d; font-size:16px; line-height: 28px;"><div>Your product has been bided by <b>170.00 USD</b> successfully.<br></div>
<div><b><br></b></div>
<div><b>Details of your Bid :<br></b></div>
<div><br></div>
<div>Product: Porshe Cayene</div>
<div>Product price : 150.00 USD</div>
<div>Bid price : 170.00 USD</div>

<div><br></div>

<div>Transaction Number : FU38MHKR92DA</div>
<div>
<font size="5"><b><br></b></font>
</div>
<div>
<font size="5">Your current Balance is <b>{{ post_balance }} {{ currency }}</b></font>
</div>
<div><br></div>
<div><br><br><br></div></td>
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
                'created_at' => '2022-06-14 22:39:44',
                'updated_at' => '2022-06-14 22:39:44',
            ),
            2 =>
            array (
                'id' => 3,
                'user_id' => 3,
                'merchant_id' => 0,
                'mail_sender' => 'php',
                'email_from' => 'Auction Bid System info@auctionbidsystem.com',
                'email_to' => 'kobex@mailinator.com',
                'subject' => 'Deposit Request Submitted Successfully',
                'message' => '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
<img style="display:block; line-height:0px; font-size:0px; border:0px;" src="https://i.imgur.com/Z1qtvtV.png" alt="img">
</a>
</td>
</tr>
<!--end logo-->
<tr>
<td height="40"></td>
</tr>
<!--headline-->
<tr>
<td align="center" style="font-family: \'Open Sans\', Arial, sans-serif; font-size: 22px;color:#414a51;font-weight: bold;">Hello Vincent Tate (naguhe)</td>
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
<td align="left" style="font-family: \'Open sans\', Arial, sans-serif; color:#7f8c8d; font-size:16px; line-height: 28px;"><div>Your deposit request of <b>2,500.00 USD</b> is via&nbsp; <b>Payoneer </b>submitted successfully<b> .<br></b></div><div><b><br></b></div><div><b>Details of your Deposit :<br></b></div><div><br></div><div>Amount : 2,500.00 USD</div><div>Charge: <font color="#FF0000">10.00 USD</font></div><div><br></div><div>Conversion Rate : 1 USD = 1.00 USD</div><div>Payable : 2,510.00 USD <br></div><div>Pay via :&nbsp; Payoneer</div><div><br></div><div>Transaction Number : E2TJ2S1HCB4K</div><div><br></div><div><br></div></td>
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
                'created_at' => '2022-06-15 06:50:10',
                'updated_at' => '2022-06-15 06:50:10',
            ),
            3 =>
            array (
                'id' => 4,
                'user_id' => 3,
                'merchant_id' => 0,
                'mail_sender' => 'php',
                'email_from' => 'Auction Bid System info@auctionbidsystem.com',
                'email_to' => 'kobex@mailinator.com',
                'subject' => 'Your Deposit is Approved',
                'message' => '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
<img style="display:block; line-height:0px; font-size:0px; border:0px;" src="https://i.imgur.com/Z1qtvtV.png" alt="img">
</a>
</td>
</tr>
<!--end logo-->
<tr>
<td height="40"></td>
</tr>
<!--headline-->
<tr>
<td align="center" style="font-family: \'Open Sans\', Arial, sans-serif; font-size: 22px;color:#414a51;font-weight: bold;">Hello Vincent Tate (naguhe)</td>
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
<td align="left" style="font-family: \'Open sans\', Arial, sans-serif; color:#7f8c8d; font-size:16px; line-height: 28px;"><div>Your deposit request of <b>2,500.00 USD</b> is via&nbsp; <b>Payoneer </b>is Approved .<b><br></b></div><div><b><br></b></div><div><b>Details of your Deposit :<br></b></div><div><br></div><div>Amount : 2,500.00 USD</div><div>Charge: <font color="#FF0000">10.00 USD</font></div><div><br></div><div>Conversion Rate : 1 USD = 1.00 USD</div><div>Payable : 2,510.00 USD <br></div><div>Paid via :&nbsp; Payoneer</div><div><br></div><div>Transaction Number : E2TJ2S1HCB4K</div><div><font size="5"><b><br></b></font></div><div><font size="5">Your current Balance is <b>4,830.00 USD</b></font></div><div><br></div><div><br><br></div></td>
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
                'created_at' => '2022-06-15 06:51:06',
                'updated_at' => '2022-06-15 06:51:06',
            ),
            4 =>
            array (
                'id' => 5,
                'user_id' => 3,
                'merchant_id' => 0,
                'mail_sender' => 'php',
                'email_from' => 'Auction Bid System info@auctionbidsystem.com',
                'email_to' => 'kobex@mailinator.com',
                'subject' => 'Deposit Request Submitted Successfully',
                'message' => '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
<img style="display:block; line-height:0px; font-size:0px; border:0px;" src="https://i.imgur.com/Z1qtvtV.png" alt="img">
</a>
</td>
</tr>
<!--end logo-->
<tr>
<td height="40"></td>
</tr>
<!--headline-->
<tr>
<td align="center" style="font-family: \'Open Sans\', Arial, sans-serif; font-size: 22px;color:#414a51;font-weight: bold;">Hello Vincent Tate (naguhe)</td>
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
<td align="left" style="font-family: \'Open sans\', Arial, sans-serif; color:#7f8c8d; font-size:16px; line-height: 28px;"><div>Your deposit request of <b>2,000.00 USD</b> is via&nbsp; <b>Bank Wire </b>submitted successfully<b> .<br></b></div><div><b><br></b></div><div><b>Details of your Deposit :<br></b></div><div><br></div><div>Amount : 2,000.00 USD</div><div>Charge: <font color="#FF0000">30.00 USD</font></div><div><br></div><div>Conversion Rate : 1 USD = 1.00 USD</div><div>Payable : 2,030.00 USD <br></div><div>Pay via :&nbsp; Bank Wire</div><div><br></div><div>Transaction Number : 8QWHHDW1Q4MP</div><div><br></div><div><br></div></td>
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
                'created_at' => '2022-06-15 07:45:30',
                'updated_at' => '2022-06-15 07:45:30',
            ),
            5 =>
            array (
                'id' => 6,
                'user_id' => 3,
                'merchant_id' => 0,
                'mail_sender' => 'php',
                'email_from' => 'Auction Bid System info@auctionbidsystem.com',
                'email_to' => 'kobex@mailinator.com',
                'subject' => 'Your Deposit is Approved',
                'message' => '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
<img style="display:block; line-height:0px; font-size:0px; border:0px;" src="https://i.imgur.com/Z1qtvtV.png" alt="img">
</a>
</td>
</tr>
<!--end logo-->
<tr>
<td height="40"></td>
</tr>
<!--headline-->
<tr>
<td align="center" style="font-family: \'Open Sans\', Arial, sans-serif; font-size: 22px;color:#414a51;font-weight: bold;">Hello Vincent Tate (naguhe)</td>
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
<td align="left" style="font-family: \'Open sans\', Arial, sans-serif; color:#7f8c8d; font-size:16px; line-height: 28px;"><div>Your deposit request of <b>2,000.00 USD</b> is via&nbsp; <b>Bank Wire </b>is Approved .<b><br></b></div><div><b><br></b></div><div><b>Details of your Deposit :<br></b></div><div><br></div><div>Amount : 2,000.00 USD</div><div>Charge: <font color="#FF0000">30.00 USD</font></div><div><br></div><div>Conversion Rate : 1 USD = 1.00 USD</div><div>Payable : 2,030.00 USD <br></div><div>Paid via :&nbsp; Bank Wire</div><div><br></div><div>Transaction Number : 8QWHHDW1Q4MP</div><div><font size="5"><b><br></b></font></div><div><font size="5">Your current Balance is <b>6,830.00 USD</b></font></div><div><br></div><div><br><br></div></td>
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
                'created_at' => '2022-06-15 07:45:56',
                'updated_at' => '2022-06-15 07:45:56',
            ),
            6 =>
            array (
                'id' => 7,
                'user_id' => 0,
                'merchant_id' => 2,
                'mail_sender' => 'php',
                'email_from' => 'Auction Bid System info@auctionbidsystem.com',
                'email_to' => 'seller@mailinator.com',
                'subject' => 'Your Product has been Bided Successfully',
                'message' => '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
<img style="display:block; line-height:0px; font-size:0px; border:0px;" src="https://i.imgur.com/Z1qtvtV.png" alt="img">
</a>
</td>
</tr>
<!--end logo-->
<tr>
<td height="40"></td>
</tr>
<!--headline-->
<tr>
<td align="center" style="font-family: \'Open Sans\', Arial, sans-serif; font-size: 22px;color:#414a51;font-weight: bold;">Hello Seller Seller (seller)</td>
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
<td align="left" style="font-family: \'Open sans\', Arial, sans-serif; color:#7f8c8d; font-size:16px; line-height: 28px;"><div>Your product has been bided by <b>2,000.00 USD</b> successfully.<br></div>
<div><b><br></b></div>
<div><b>Details of your Bid :<br></b></div>
<div><br></div>
<div>Product: Porshe</div>
<div>Product price : 10.00 USD</div>
<div>Bid price : 2,000.00 USD</div>

<div><br></div>

<div>Transaction Number : 9D15YA8B4Q83</div>
<div>
<font size="5"><b><br></b></font>
</div>
<div>
<font size="5">Your current Balance is <b>{{ post_balance }} {{ currency }}</b></font>
</div>
<div><br></div>
<div><br><br><br></div></td>
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
                'created_at' => '2022-06-15 08:31:15',
                'updated_at' => '2022-06-15 08:31:15',
            ),
            7 =>
            array (
                'id' => 8,
                'user_id' => 4,
                'merchant_id' => 0,
                'mail_sender' => 'php',
                'email_from' => 'Auction Bid System info@auctionbidsystem.com',
                'email_to' => 'savariuser@demo.com',
                'subject' => 'Deposit Request Submitted Successfully',
                'message' => '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
<img style="display:block; line-height:0px; font-size:0px; border:0px;" src="https://i.imgur.com/Z1qtvtV.png" alt="img">
</a>
</td>
</tr>
<!--end logo-->
<tr>
<td height="40"></td>
</tr>
<!--headline-->
<tr>
<td align="center" style="font-family: \'Open Sans\', Arial, sans-serif; font-size: 22px;color:#414a51;font-weight: bold;">Hello safari user (safariuser)</td>
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
<td align="left" style="font-family: \'Open sans\', Arial, sans-serif; color:#7f8c8d; font-size:16px; line-height: 28px;"><div>Your deposit request of <b>50,000.00 USD</b> is via&nbsp; <b>Payoneer </b>submitted successfully<b> .<br></b></div><div><b><br></b></div><div><b>Details of your Deposit :<br></b></div><div><br></div><div>Amount : 50,000.00 USD</div><div>Charge: <font color="#FF0000">10.00 USD</font></div><div><br></div><div>Conversion Rate : 1 USD = 1.00 USD</div><div>Payable : 50,010.00 USD <br></div><div>Pay via :&nbsp; Payoneer</div><div><br></div><div>Transaction Number : Y7TRWKTOB1GB</div><div><br></div><div><br></div></td>
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
                'created_at' => '2022-06-15 09:27:27',
                'updated_at' => '2022-06-15 09:27:27',
            ),
            8 =>
            array (
                'id' => 9,
                'user_id' => 4,
                'merchant_id' => 0,
                'mail_sender' => 'php',
                'email_from' => 'Auction Bid System info@auctionbidsystem.com',
                'email_to' => 'savariuser@demo.com',
                'subject' => 'Your Deposit is Approved',
                'message' => '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
<img style="display:block; line-height:0px; font-size:0px; border:0px;" src="https://i.imgur.com/Z1qtvtV.png" alt="img">
</a>
</td>
</tr>
<!--end logo-->
<tr>
<td height="40"></td>
</tr>
<!--headline-->
<tr>
<td align="center" style="font-family: \'Open Sans\', Arial, sans-serif; font-size: 22px;color:#414a51;font-weight: bold;">Hello safari user (safariuser)</td>
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
<td align="left" style="font-family: \'Open sans\', Arial, sans-serif; color:#7f8c8d; font-size:16px; line-height: 28px;"><div>Your deposit request of <b>50,000.00 USD</b> is via&nbsp; <b>Payoneer </b>is Approved .<b><br></b></div><div><b><br></b></div><div><b>Details of your Deposit :<br></b></div><div><br></div><div>Amount : 50,000.00 USD</div><div>Charge: <font color="#FF0000">10.00 USD</font></div><div><br></div><div>Conversion Rate : 1 USD = 1.00 USD</div><div>Payable : 50,010.00 USD <br></div><div>Paid via :&nbsp; Payoneer</div><div><br></div><div>Transaction Number : Y7TRWKTOB1GB</div><div><font size="5"><b><br></b></font></div><div><font size="5">Your current Balance is <b>50,000.00 USD</b></font></div><div><br></div><div><br><br></div></td>
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
                'created_at' => '2022-06-15 09:27:45',
                'updated_at' => '2022-06-15 09:27:45',
            ),
        ));


    }
}

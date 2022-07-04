<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FrontendsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('frontends')->delete();

        \DB::table('frontends')->insert(array (
            0 =>
            array (
                'id' => 1,
                'data_keys' => 'seo.data',
                'data_values' => '{"seo_image":"1","keywords":["bid","auction","bidding","bidding platform","auction bidding","product bidding","car","jewerly"],"description":"Auction Bid Laravel is a multivendor auction bidding platform for your product.","social_title":"Auction Bid Laravel - Multivendor Auction Bidding Platform","social_description":"Auction Bid Laravel is a multivendor auction bidding platform for your product.","image":"62a9095a7a94a1655245146.png"}',
                'created_at' => '2020-07-05 02:42:52',
                'updated_at' => '2022-06-14 22:19:52',
            ),
            1 =>
            array (
                'id' => 24,
                'data_keys' => 'about.content',
                'data_values' => '{"has_image":"1","heading":"Know About US","subheading":"Praesentium ipsam modi nostrum, quibusdam voluptas minus qui quas dicta consequuntur placeat animi cumque","description":"Libero exercitationem fugit dignissimos facilis suscipit voluptatibus error consectetur amet sed necessitatibus in dolor, ut non. Temporibus, maiores? Reprehenderit quae inventore obcaecati! Libero exercitationem fugit dignissimos facilis suscipit voluptatibus error consectetur amet sed necessitatibus in dolor, ut non. Temporibus, maiores? Reprehenderit quae inventore obcaecati!","video_url":"https:\\/\\/www.youtube.com\\/watch?v=WOb4cj7izpE","about_image":"6212259ed1dbb1645356446.jpg"}',
                'created_at' => '2020-10-28 02:51:20',
                'updated_at' => '2022-02-20 13:00:11',
            ),
            2 =>
            array (
                'id' => 25,
                'data_keys' => 'blog.content',
                'data_values' => '{"heading":"Recent Posts","subheading":"Praesentium ipsam modi nostrum, quibusdam voluptas minus qui quas dicta consequuntur placeat animi cumque"}',
                'created_at' => '2020-10-28 02:51:34',
                'updated_at' => '2022-02-26 07:54:57',
            ),
            3 =>
            array (
                'id' => 26,
                'data_keys' => 'blog.element',
            'data_values' => '{"has_image":["1"],"title":"In the same way that starting to read more can make you a better writer","description_nic":"<p style=\\"margin-bottom:25px;color:rgb(164,189,206);font-family:Nunito, sans-serif;font-size:16px;background-color:rgb(0,19,41);\\">Website performance, or how fast web pages load onto a client\\u2019s browser can impact user satisfaction and visitor retention. Google also factors website performance in its ranking algorithm. Our designers and developers use best practice tools and techniques when it comes to building websites such as image optimisation, using content delivery networks and other enhancements to ensure fast loading times for both desktop and mobile.digital solutions company. Mettro\\u2019s web designers, developers, user experience designers, SEO specialists, and marketing experts are adept at fusing vision, design, and technology to provide you with custom digital solutions that will help you achieve your business goals.<\\/p><p style=\\"margin-bottom:25px;color:rgb(164,189,206);font-family:Nunito, sans-serif;font-size:16px;background-color:rgb(0,19,41);\\">We are a full-service web design, web development and digital solutions company. Mettro\\u2019s web designers, developers, user experience designers, SEO specialists, and marketing experts are adept at fusing vision, design, and technology to provide you with custom digital solutions that will help you achieve your business goals.<\\/p><p style=\\"margin-bottom:25px;color:rgb(164,189,206);font-family:Nunito, sans-serif;font-size:16px;background-color:rgb(0,19,41);\\">Website performance, or how fast web pages load onto a client\\u2019s browser can impact user satisfaction and visitor retention. Google also factors website performance in its ranking algorithm. Our designers and developers use best practice tools and techniques when it comes to building websites such as image optimisation, using content delivery networks and other enhancements to ensure fast loading times for both desktop and mobile..<\\/p><blockquote class=\\"mb-3 d-block\\" style=\\"background:rgba(1,28,61,0.9);padding:25px 20px;border-left:2px solid rgba(1,28,61,0.9);font-style:italic;color:rgb(164,189,206);font-family:Nunito, sans-serif;\\">Website performance, or how fast web pages load onto a client\\u2019s browser can impnetworks and other enhancements to ensure fast loading times for both desktop and mobile.<p class=\\"m-0\\" style=\\"margin-bottom:25px;font-size:20px;font-weight:600;margin-top:12px;\\">--- John Doe<\\/p><\\/blockquote><p style=\\"margin-bottom:25px;color:rgb(164,189,206);font-family:Nunito, sans-serif;font-size:16px;background-color:rgb(0,19,41);\\">We are a full-service web design, web development and digital solutions company. Mettro\\u2019s web designers, developers, user experience designers, SEO specialists, and marketing experts are adept at fusing vision, design, and technology to provide you with custom digital solutions that will help you achieve your business goals.<\\/p>","blog_image":"6219c1f7553b71645855223.jpg"}',
                'created_at' => '2020-10-28 02:57:19',
                'updated_at' => '2022-02-26 08:00:23',
            ),
            4 =>
            array (
                'id' => 27,
                'data_keys' => 'contact_us.content',
            'data_values' => '{"title":"Get In Touch With Us","short_details":"Dolor sit amet, consectetur adipiscing elit. Et luctus nisl volutpat arcu nibh blandit.","email_address":"contact@demo.com","contact_details":"4553 Woodville Hwy, New York, USA","contact_number":"(123) 456 - 7890"}',
                'created_at' => '2020-10-28 02:59:19',
                'updated_at' => '2022-03-03 12:12:37',
            ),
            5 =>
            array (
                'id' => 28,
                'data_keys' => 'counter.content',
                'data_values' => '{"heading":"Latest News","subheading":"Register New Account"}',
                'created_at' => '2020-10-28 03:04:02',
                'updated_at' => '2020-10-28 03:04:02',
            ),
            6 =>
            array (
                'id' => 30,
                'data_keys' => 'blog.element',
            'data_values' => '{"has_image":["1"],"title":"Maddison will learn from casino mistake","description_nic":"<p style=\\"margin-bottom:25px;color:rgb(164,189,206);font-family:Nunito, sans-serif;font-size:16px;background-color:rgb(0,19,41);\\">Website performance, or how fast web pages load onto a client\\u2019s browser can impact user satisfaction and visitor retention. Google also factors website performance in its ranking algorithm. Our designers and developers use best practice tools and techniques when it comes to building websites such as image optimisation, using content delivery networks and other enhancements to ensure fast loading times for both desktop and mobile.digital solutions company. Mettro\\u2019s web designers, developers, user experience designers, SEO specialists, and marketing experts are adept at fusing vision, design, and technology to provide you with custom digital solutions that will help you achieve your business goals.<\\/p><p style=\\"margin-bottom:25px;color:rgb(164,189,206);font-family:Nunito, sans-serif;font-size:16px;background-color:rgb(0,19,41);\\">We are a full-service web design, web development and digital solutions company. Mettro\\u2019s web designers, developers, user experience designers, SEO specialists, and marketing experts are adept at fusing vision, design, and technology to provide you with custom digital solutions that will help you achieve your business goals.<\\/p><p style=\\"margin-bottom:25px;color:rgb(164,189,206);font-family:Nunito, sans-serif;font-size:16px;background-color:rgb(0,19,41);\\">Website performance, or how fast web pages load onto a client\\u2019s browser can impact user satisfaction and visitor retention. Google also factors website performance in its ranking algorithm. Our designers and developers use best practice tools and techniques when it comes to building websites such as image optimisation, using content delivery networks and other enhancements to ensure fast loading times for both desktop and mobile..<\\/p><blockquote class=\\"mb-3 d-block\\" style=\\"background:rgba(1,28,61,0.9);padding:25px 20px;border-left:2px solid rgba(1,28,61,0.9);font-style:italic;color:rgb(164,189,206);font-family:Nunito, sans-serif;\\">Website performance, or how fast web pages load onto a client\\u2019s browser can impnetworks and other enhancements to ensure fast loading times for both desktop and mobile.<p class=\\"m-0\\" style=\\"margin-bottom:25px;font-size:20px;font-weight:600;margin-top:12px;\\">--- John Doe<\\/p><\\/blockquote><p style=\\"margin-bottom:25px;color:rgb(164,189,206);font-family:Nunito, sans-serif;font-size:16px;background-color:rgb(0,19,41);\\">We are a full-service web design, web development and digital solutions company. Mettro\\u2019s web designers, developers, user experience designers, SEO specialists, and marketing experts are adept at fusing vision, design, and technology to provide you with custom digital solutions that will help you achieve your business goals.<\\/p>","blog_image":"6219c1edf2da01645855213.jpg"}',
                'created_at' => '2020-10-31 02:39:05',
                'updated_at' => '2022-02-26 08:00:14',
            ),
            7 =>
            array (
                'id' => 31,
                'data_keys' => 'social_icon.element',
                'data_values' => '{"title":"Facebook","social_icon":"<i class=\\"las la-expand\\"><\\/i>","url":"https:\\/\\/www.google.com\\/"}',
                'created_at' => '2020-11-12 06:07:30',
                'updated_at' => '2021-05-12 08:56:59',
            ),
            8 =>
            array (
                'id' => 33,
                'data_keys' => 'feature.content',
                'data_values' => '{"heading":"asdf","subheading":"asdf"}',
                'created_at' => '2021-01-04 01:40:54',
                'updated_at' => '2021-01-04 01:40:55',
            ),
            9 =>
            array (
                'id' => 34,
                'data_keys' => 'feature.element',
                'data_values' => '{"title":"24\\/7 Online Support","feature_icon":"<i class=\\"las la-headset\\"><\\/i>"}',
                'created_at' => '2021-01-04 01:41:02',
                'updated_at' => '2022-02-01 10:18:01',
            ),
            10 =>
            array (
                'id' => 35,
                'data_keys' => 'service.element',
                'data_values' => '{"trx_type":"withdraw","service_icon":"<i class=\\"las la-highlighter\\"><\\/i>","title":"asdfasdf","description":"asdfasdfasdfasdf"}',
                'created_at' => '2021-03-06 03:12:10',
                'updated_at' => '2021-03-06 03:12:10',
            ),
            11 =>
            array (
                'id' => 36,
                'data_keys' => 'service.content',
                'data_values' => '{"trx_type":"withdraw","heading":"asdf fffff","subheading":"asdf asdfasdf"}',
                'created_at' => '2021-03-06 03:27:34',
                'updated_at' => '2021-03-06 04:19:39',
            ),
            12 =>
            array (
                'id' => 39,
                'data_keys' => 'banner.content',
                'data_values' => '{"has_image":"1","heading":"Multivendor Auction Bidding Platform","subheading":"Dolor sit amet consectetur adipisicing elit. Eligendi sit commodi ex, id recusandae rerum quae optio quaerat totam consequuntur ad illo ducimus magnam nulla.","button":"Become a user","button_url":"register","link":"Become a Merchant","link_url":"merchant\\/register","background_image":"61f8f23878ae61643704888.jpg"}',
                'created_at' => '2021-05-02 09:09:30',
                'updated_at' => '2022-03-07 15:58:15',
            ),
            13 =>
            array (
                'id' => 41,
                'data_keys' => 'cookie.data',
                'data_values' => '{"link":"#","description":"<font color=\\"#000\\" face=\\"Exo, sans-serif\\"><span style=\\"font-size: 18px;\\">We may use cookies or any other tracking technologies when you visit our website, including any other media form, mobile website, or mobile application related or connected to help customize the Site and improve your experience.<\\/span><\\/font><br>","status":1}',
                'created_at' => '2020-07-05 02:42:52',
                'updated_at' => '2022-03-03 12:26:19',
            ),
            14 =>
            array (
                'id' => 42,
                'data_keys' => 'policy_pages.element',
            'data_values' => '{"title":"Privacy Policy","details":"<div class=\\"mb-5\\" style=\\"color:#dcf3ff;font-family:Nunito, sans-serif;margin-bottom:3rem;\\">\\r\\n    <h3 class=\\"mb-3\\" style=\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:#a4bdce;\\">What\\r\\n        information do we collect?<\\/h3>\\r\\n    <p class=\\"font-18\\" style=\\"margin-right:0px;margin-left:0px;font-size:18px;\\">We gather data from you when you\\r\\n        register on our site, submit a request, buy any services, react to an overview, or round out a structure. At the\\r\\n        point when requesting any assistance or enrolling on our site, as suitable, you might be approached to enter\\r\\n        your: name, email address, or telephone number. You may, nonetheless, visit our site anonymously.<\\/p>\\r\\n<\\/div>\\r\\n<div class=\\"mb-5\\" style=\\"color:#dcf3ff;font-family:Nunito, sans-serif;margin-bottom:3rem;\\">\\r\\n    <h3 class=\\"mb-3\\" style=\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:#a4bdce;\\">How do\\r\\n        we protect your information?<\\/h3>\\r\\n    <p class=\\"font-18\\" style=\\"margin-right:0px;margin-left:0px;font-size:18px;\\">All provided delicate\\/credit data is\\r\\n        sent through Stripe.<br \\/>After an exchange, your private data (credit cards, social security numbers, financials,\\r\\n        and so on) won\'t be put away on our workers.<\\/p>\\r\\n<\\/div>\\r\\n<div class=\\"mb-5\\" style=\\"color:#dcf3ff;font-family:Nunito, sans-serif;margin-bottom:3rem;\\">\\r\\n    <h3 class=\\"mb-3\\" style=\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:#a4bdce;\\">Do we\\r\\n        disclose any information to outside parties?<\\/h3>\\r\\n    <p class=\\"font-18\\" style=\\"margin-right:0px;margin-left:0px;font-size:18px;\\">We don\'t sell, exchange, or in any case\\r\\n        move to outside gatherings by and by recognizable data. This does exclude confided in outsiders who help us in\\r\\n        working our site, leading our business, or adjusting you, since those gatherings consent to keep this data\\r\\n        private. We may likewise deliver your data when we accept discharge is suitable to follow the law, implement our\\r\\n        site strategies, or ensure our own or others\' rights, property, or wellbeing.<\\/p>\\r\\n<\\/div>\\r\\n<div class=\\"mb-5\\" style=\\"color:#dcf3ff;font-family:Nunito, sans-serif;margin-bottom:3rem;\\">\\r\\n    <h3 class=\\"mb-3\\" style=\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:#a4bdce;\\">\\r\\n        Children\'s Online Privacy Protection Act Compliance<\\/h3>\\r\\n    <p class=\\"font-18\\" style=\\"margin-right:0px;margin-left:0px;font-size:18px;\\">We are consistent with the prerequisites\\r\\n        of COPPA (Children\'s Online Privacy Protection Act), we don\'t gather any data from anybody under 13 years old.\\r\\n        Our site, items, and administrations are completely coordinated to individuals who are in any event 13 years of\\r\\n        age or more established.<\\/p>\\r\\n<\\/div>\\r\\n<div class=\\"mb-5\\" style=\\"color:#dcf3ff;font-family:Nunito, sans-serif;margin-bottom:3rem;\\">\\r\\n    <h3 class=\\"mb-3\\" style=\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:#a4bdce;\\">Changes\\r\\n        to our Privacy Policy<\\/h3>\\r\\n    <p class=\\"font-18\\" style=\\"margin-right:0px;margin-left:0px;font-size:18px;\\">If we decide to change our privacy\\r\\n        policy, we will post those changes on this page.<\\/p>\\r\\n<\\/div>\\r\\n<div class=\\"mb-5\\" style=\\"color:#dcf3ff;font-family:Nunito, sans-serif;margin-bottom:3rem;\\">\\r\\n    <h3 class=\\"mb-3\\" style=\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:#a4bdce;\\">How long\\r\\n        we retain your information?<\\/h3>\\r\\n    <p class=\\"font-18\\" style=\\"margin-right:0px;margin-left:0px;font-size:18px;\\">At the point when you register for our\\r\\n        site, we cycle and keep your information we have about you however long you don\'t erase the record or withdraw\\r\\n        yourself (subject to laws and guidelines).<\\/p>\\r\\n<\\/div>\\r\\n<div class=\\"mb-5\\" style=\\"color:#dcf3ff;font-family:Nunito, sans-serif;margin-bottom:3rem;\\">\\r\\n    <h3 class=\\"mb-3\\" style=\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:#a4bdce;\\">What we\\r\\n        don\\u2019t do with your data<\\/h3>\\r\\n    <p class=\\"font-18\\" style=\\"margin-right:0px;margin-left:0px;font-size:18px;\\">We don\'t and will never share, unveil,\\r\\n        sell, or in any case give your information to different organizations for the promoting of their items or\\r\\n        administrations.<\\/p>\\r\\n<\\/div>"}',
                'created_at' => '2021-06-09 11:50:42',
                'updated_at' => '2022-03-03 11:35:27',
            ),
            15 =>
            array (
                'id' => 43,
                'data_keys' => 'policy_pages.element',
            'data_values' => '{"title":"Terms of Service","details":"<div class=\\"mb-5\\" style=\\"color:#dcf3ff;font-family:Nunito, sans-serif;margin-bottom:3rem;\\"><p class=\\"font-18\\" style=\\"margin-right:0px;margin-left:0px;font-size:18px;\\">We claim all authority to dismiss,\\r\\nend,\\r\\nor handicap any help with or without cause per administrator discretion. This is a Complete independent facilitating,\\r\\non the off chance that you misuse our ticket or Livechat or emotionally supportive network by submitting solicitations or protests we will impair your record. The solitary time you should reach us about the seaward facilitating is if there is an issue with the worker. We have not many substance limitations and everything is as per laws and guidelines. Try not to join on the off chance that you intend to do anything contrary to the guidelines,\\r\\nwe do check these things and we will know,\\r\\ndon\'t burn through our own and your time by joining on the off chance that you figure you will have the option to sneak by us and break the terms.<\\/p><\\/div><div class=\\"mb-5\\" style=\\"color:#dcf3ff;font-family:Nunito, sans-serif;margin-bottom:3rem;\\"><ul class=\\"font-18\\" style=\\"padding-left:15px;list-style-type:disc;font-size:18px;\\"><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">Configuration requests - If you have a fully managed dedicated server with us then we offer custom PHP\\/MySQL configurations, firewalls for dedicated IPs, DNS, and httpd configurations.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">Software requests - Cpanel Extension Installation will be granted as long as it does not interfere with the security, stability, and performance of other users on the server.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">Emergency Support - We do not provide emergency support \\/ Phone Support \\/ LiveChat Support. Support may take some hours sometimes.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">Webmaster help - We do not offer any support for webmaster related issues and difficulty including coding, &amp; installs, Error solving. if there is an issue where a library or configuration of the server then we can help you if it\'s possible from our end.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">Backups - We keep backups but we are not responsible for data loss,\\r\\nyou are fully responsible for all backups.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">We Don\'t support any child porn or such material.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">No spam-related sites or material, such as email lists, mass mail programs, and scripts, etc.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">No harassing material that may cause people to retaliate against you.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">No phishing pages.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">You may not run any exploitation script from the server. reason can be terminated immediately.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">If Anyone attempting to hack or exploit the server by using your script or hosting, we will terminate your account to keep safe other users.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">Malicious Botnets are strictly forbidden.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">Spam, mass mailing, or email marketing in any way are strictly forbidden here.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">Malicious hacking materials, trojans, viruses, &amp; malicious bots running or for download are forbidden.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">Resource and cronjob abuse is forbidden and will result in suspension or termination.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">Php\\/CGI proxies are strictly forbidden.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">CGI-IRC is strictly forbidden.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">No fake or disposal mailers, mass mailing, mail bombers, SMS bombers, etc.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">NO CREDIT OR REFUND will be granted for interruptions of service, due to User Agreement violations.<\\/li><\\/ul><\\/div><div class=\\"mb-5\\" style=\\"color:#dcf3ff;font-family:Nunito, sans-serif;margin-bottom:3rem;\\"><h3 class=\\"mb-3\\" style=\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;\\">Terms &amp; Conditions for Users<\\/h3><p class=\\"font-18\\" style=\\"margin-right:0px;margin-left:0px;font-size:18px;\\">Before getting to this site, you are consenting to be limited by these site Terms and Conditions of Use, every single appropriate law, and guidelines, and concur that you are answerable for consistency with any material neighborhood laws. If you disagree with any of these terms, you are restricted from utilizing or getting to this site.<\\/p><\\/div><div class=\\"mb-5\\" style=\\"color:#dcf3ff;font-family:Nunito, sans-serif;margin-bottom:3rem;\\"><h3 class=\\"mb-3\\" style=\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;\\">Support<\\/h3><p class=\\"font-18\\" style=\\"margin-right:0px;margin-left:0px;font-size:18px;\\">Whenever you have downloaded our item, you may get in touch with us for help through email and we will give a valiant effort to determine your issue. We will attempt to answer using the Email for more modest bug fixes, after which we will refresh the center bundle. Content help is offered to confirmed clients by Tickets as it were. Backing demands made by email and Livechat.<\\/p><p class=\\"my-3 font-18 font-weight-bold\\" style=\\"margin-right:0px;margin-left:0px;font-size:18px;\\">On the off chance that your help requires extra adjustment of the System, at that point, you have two alternatives:<\\/p><ul class=\\"font-18\\" style=\\"padding-left:15px;list-style-type:disc;font-size:18px;\\"><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">Hang tight for additional update discharge.<\\/li><li style=\\"margin-top:0px;margin-right:0px;margin-left:0px;\\">Or on the other hand, enlist a specialist (We offer customization for extra charges).<\\/li><\\/ul><\\/div><div class=\\"mb-5\\" style=\\"color:#dcf3ff;font-family:Nunito, sans-serif;margin-bottom:3rem;\\"><h3 class=\\"mb-3\\" style=\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;\\">Ownership<\\/h3><p class=\\"font-18\\" style=\\"margin-right:0px;margin-left:0px;font-size:18px;\\">You may not guarantee scholarly or selective possession of any of our items, altered or unmodified. All items are property, we created them. Our items are given \\"with no guarantees\\" without guarantee of any sort, either communicated or suggested. On no occasion will our juridical individual be subject to any harms including, however not restricted to, immediate, roundabout, extraordinary, accidental, or significant harms or different misfortunes emerging out of the utilization of or powerlessness to utilize our items.<\\/p><\\/div><div class=\\"mb-5\\" style=\\"color:#dcf3ff;font-family:Nunito, sans-serif;margin-bottom:3rem;\\"><h3 class=\\"mb-3\\" style=\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;\\">Warranty<\\/h3><p class=\\"font-18\\" style=\\"margin-right:0px;margin-left:0px;font-size:18px;\\">We don\'t offer any guarantee or assurance of these Services in any way. When our Services have been modified we can\'t ensure they will work with all outsider plugins, modules, or internet browsers. Program similarity ought to be tried against the show formats on the demo worker. If you don\'t mind guarantee that the programs you use will work with the component,\\r\\nas we can not ensure that our systems will work with all program mixes.<\\/p><\\/div><div class=\\"mb-5\\" style=\\"color:#dcf3ff;font-family:Nunito, sans-serif;margin-bottom:3rem;\\"><h3 class=\\"mb-3\\" style=\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;\\">Unauthorized\\/Illegal Usage<\\/h3><p class=\\"font-18\\" style=\\"margin-right:0px;margin-left:0px;font-size:18px;\\">You may not utilize our things for any illicit or unapproved reason or may you,\\r\\nin the utilization of the stage,\\r\\ndisregard any laws in your locale (counting yet not restricted to copyright laws) just as the laws of your nation and International law. Specifically,\\r\\nit is disallowed to utilize the things on our foundation for pages that advance: brutality,\\r\\nillegal intimidation,\\r\\nhard sexual entertainment,\\r\\nbigotry,\\r\\nobscenity content or warez programming joins.<br \\/><br \\/>You can\'t imitate, copy, duplicate, sell, exchange or adventure any of our segment, utilization of the offered on our things, or admittance to the administration without the express composed consent by us or item proprietor.<br \\/><br \\/>Our Members are liable for all substance posted on the discussion and demo and movement that happens under your record.<br \\/><br \\/>We hold the chance of hindering your participation account quickly if we will think about a particularly not allowed conduct.<br \\/><br \\/>If you make a record on our site, you are liable for keeping up the security of your record, and you are completely answerable for all exercises that happen under the record and some other activities taken regarding the record. You should quickly inform us, of any unapproved employments of your record or some other penetrates of security.<\\/p><\\/div><div class=\\"mb-5\\" style=\\"color:#dcf3ff;font-family:Nunito, sans-serif;margin-bottom:3rem;\\"><h3 class=\\"mb-3\\" style=\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;\\">Fiverr, Seoclerks Sellers Or Affiliates<\\/h3><p class=\\"font-18\\" style=\\"margin-right:0px;margin-left:0px;font-size:18px;\\">We do NOT ensure full SEO campaign conveyance within 24 hours. We make no assurance for conveyance time by any means. We give our best assessment to orders during the putting in of requests, anyway, these are gauges. We won\'t be considered liable for loss of assets,\\r\\nnegative surveys or you being prohibited for late conveyance. If you are selling on a site that requires time touchy outcomes,\\r\\nutilize Our SEO Services at your own risk.<\\/p><\\/div><div class=\\"mb-5\\" style=\\"color:#dcf3ff;font-family:Nunito, sans-serif;margin-bottom:3rem;\\"><h3 class=\\"mb-3\\" style=\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;\\">Payment\\/Refund Policy<\\/h3><p class=\\"font-18\\" style=\\"margin-right:0px;margin-left:0px;font-size:18px;\\">No refund or cash back will be made. After a deposit has been finished,\\r\\nit is extremely unlikely to invert it. You should utilize your equilibrium on requests our administrations,\\r\\nHosting,\\r\\nSEO campaign. You concur that once you complete a deposit,\\r\\nyou won\'t document a debate or a chargeback against us in any way, shape, or form.<br \\/><br \\/>If you document a debate or chargeback against us after a deposit, we claim all authority to end every single future request, prohibit you from our site. False action, for example, utilizing unapproved or taken charge cards will prompt the end of your record. There are no special cases.<\\/p><\\/div><div class=\\"mb-5\\" style=\\"color:#dcf3ff;font-family:Nunito, sans-serif;margin-bottom:3rem;\\"><h3 class=\\"mb-3\\" style=\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;\\">Free Balance \\/ Coupon Policy<\\/h3><p class=\\"font-18\\" style=\\"margin-right:0px;margin-left:0px;font-size:18px;\\">We offer numerous approaches to get FREE Balance, Coupons and Deposit offers yet we generally reserve the privilege to audit it and deduct it from your record offset with any explanation we may it is a sort of misuse. If we choose to deduct a few or all of free Balance from your record balance, and your record balance becomes negative, at that point the record will naturally be suspended. If your record is suspended because of a negative Balance you can request to make a custom payment to settle your equilibrium to actuate your record.<\\/p><\\/div>"}',
                'created_at' => '2021-06-09 11:51:18',
                'updated_at' => '2022-03-03 11:37:36',
            ),
            16 =>
            array (
                'id' => 44,
                'data_keys' => 'feature.element',
                'data_values' => '{"title":"Many Payment Gatways","feature_icon":"<i class=\\"las la-wallet\\"><\\/i>"}',
                'created_at' => '2022-02-01 10:18:18',
                'updated_at' => '2022-02-01 10:18:18',
            ),
            17 =>
            array (
                'id' => 45,
                'data_keys' => 'feature.element',
                'data_values' => '{"title":"100% Money Back Guarantee","feature_icon":"<i class=\\"las la-dollar-sign\\"><\\/i>"}',
                'created_at' => '2022-02-01 10:18:37',
                'updated_at' => '2022-02-01 10:18:37',
            ),
            18 =>
            array (
                'id' => 46,
                'data_keys' => 'feature.element',
                'data_values' => '{"title":"Worldwide Free Shipping","feature_icon":"<i class=\\"las la-shipping-fast\\"><\\/i>"}',
                'created_at' => '2022-02-01 10:18:52',
                'updated_at' => '2022-02-01 10:18:52',
            ),
            19 =>
            array (
                'id' => 47,
                'data_keys' => 'categories.content',
                'data_values' => '{"heading":"Auction Categories","subheading":"Praesentium ipsam modi nostrum, quibusdam voluptas minus qui quas dicta consequuntur placeat animi cumque"}',
                'created_at' => '2022-02-01 10:25:09',
                'updated_at' => '2022-02-01 10:25:09',
            ),
            20 =>
            array (
                'id' => 48,
                'data_keys' => 'categories.element',
                'data_values' => '{"heading":"Sports","icon":"<i class=\\"las la-chess-knight\\"><\\/i>"}',
                'created_at' => '2022-02-01 10:26:03',
                'updated_at' => '2022-02-01 10:26:03',
            ),
            21 =>
            array (
                'id' => 49,
                'data_keys' => 'categories.element',
                'data_values' => '{"heading":"Electronics","icon":"<i class=\\"las la-mobile-alt\\"><\\/i>"}',
                'created_at' => '2022-02-01 10:26:17',
                'updated_at' => '2022-02-01 10:26:17',
            ),
            22 =>
            array (
                'id' => 50,
                'data_keys' => 'categories.element',
                'data_values' => '{"heading":"Watches","icon":"<i class=\\"las la-hourglass-start\\"><\\/i>"}',
                'created_at' => '2022-02-01 10:26:26',
                'updated_at' => '2022-02-01 10:26:26',
            ),
            23 =>
            array (
                'id' => 51,
                'data_keys' => 'categories.element',
                'data_values' => '{"heading":"Vehicles, Marine","icon":"<i class=\\"las la-car-side\\"><\\/i>"}',
                'created_at' => '2022-02-01 10:26:50',
                'updated_at' => '2022-02-01 10:26:50',
            ),
            24 =>
            array (
                'id' => 52,
                'data_keys' => 'categories.element',
                'data_values' => '{"heading":"Real Estate","icon":"<i class=\\"las la-place-of-worship\\"><\\/i>"}',
                'created_at' => '2022-02-01 10:27:10',
                'updated_at' => '2022-02-01 10:27:10',
            ),
            25 =>
            array (
                'id' => 53,
                'data_keys' => 'categories.element',
                'data_values' => '{"heading":"Jewelry","icon":"<i class=\\"las la-flask\\"><\\/i>"}',
                'created_at' => '2022-02-01 10:27:33',
                'updated_at' => '2022-02-01 10:27:33',
            ),
            26 =>
            array (
                'id' => 54,
                'data_keys' => 'categories.element',
                'data_values' => '{"heading":"Industrial Machinery","icon":"<i class=\\"las la-industry\\"><\\/i>"}',
                'created_at' => '2022-02-01 10:27:40',
                'updated_at' => '2022-02-01 10:27:40',
            ),
            27 =>
            array (
                'id' => 55,
                'data_keys' => 'categories.element',
                'data_values' => '{"heading":"Farm &amp; Agriculture","icon":"<i class=\\"las la-home\\"><\\/i>"}',
                'created_at' => '2022-02-01 10:28:18',
                'updated_at' => '2022-02-01 10:28:18',
            ),
            28 =>
            array (
                'id' => 56,
                'data_keys' => 'categories.element',
                'data_values' => '{"heading":"Dolls, Bears &amp; Toys","icon":"<i class=\\"las la-universal-access\\"><\\/i>"}',
                'created_at' => '2022-02-01 10:28:26',
                'updated_at' => '2022-02-01 10:28:26',
            ),
            29 =>
            array (
                'id' => 57,
                'data_keys' => 'categories.element',
                'data_values' => '{"heading":"Decorative Art","icon":"<i class=\\"las la-holly-berry\\"><\\/i>"}',
                'created_at' => '2022-02-01 10:28:45',
                'updated_at' => '2022-02-01 10:28:53',
            ),
            30 =>
            array (
                'id' => 58,
                'data_keys' => 'winner.content',
                'data_values' => '{"heading":"Our Latest Winners","subheading":"Praesentium ipsam modi nostrum, quibusdam voluptas minus qui quas dicta consequuntur placeat animi cumque","has_image":"1","image":"61f8fe1524b391643707925.png"}',
                'created_at' => '2022-02-01 11:01:48',
                'updated_at' => '2022-02-01 11:02:13',
            ),
            31 =>
            array (
                'id' => 59,
                'data_keys' => 'how_to_bid.content',
                'data_values' => '{"heading":"How To Bid","subheading":"Praesentium ipsam modi nostrum, quibusdam voluptas minus qui quas dicta consequuntur placeat animi cumque"}',
                'created_at' => '2022-02-01 11:12:30',
                'updated_at' => '2022-02-01 11:12:30',
            ),
            32 =>
            array (
                'id' => 60,
                'data_keys' => 'how_to_bid.element',
                'data_values' => '{"heading":"Win Your Bid","icon":"<i class=\\"las la-trophy\\"><\\/i>"}',
                'created_at' => '2022-02-01 11:14:42',
                'updated_at' => '2022-02-01 11:14:42',
            ),
            33 =>
            array (
                'id' => 61,
                'data_keys' => 'how_to_bid.element',
                'data_values' => '{"heading":"Make Bid Product","icon":"<i class=\\"las la-gavel\\"><\\/i>"}',
                'created_at' => '2022-02-01 11:14:55',
                'updated_at' => '2022-02-01 11:14:55',
            ),
            34 =>
            array (
                'id' => 62,
                'data_keys' => 'how_to_bid.element',
                'data_values' => '{"heading":"Choose Products","icon":"<i class=\\"las la-hand-pointer\\"><\\/i>"}',
                'created_at' => '2022-02-01 11:15:07',
                'updated_at' => '2022-02-01 11:15:07',
            ),
            35 =>
            array (
                'id' => 63,
                'data_keys' => 'testimonial.content',
                'data_values' => '{"heading":"Auction Winners Say","subheading":"Praesentium ipsam modi nostrum, quibusdam voluptas minus qui quas dicta consequuntur placeat animi cumque"}',
                'created_at' => '2022-02-01 11:19:29',
                'updated_at' => '2022-02-01 11:19:29',
            ),
            36 =>
            array (
                'id' => 64,
                'data_keys' => 'testimonial.element',
                'data_values' => '{"name":"Mabrur Rashid Banna","designation":"Businessman","star":"4","description":"Fugiat expedita eius quas consectetur culpa. Neque veniam et molestias laborum non corporis aperiam optio culpa. Fuga ipsum harum aliquam quod nisi nostrum nam quis, ipsam excepturi qui dignissimos quidem","has_image":"1","user_image":"61f903ddab6a31643709405.jpg"}',
                'created_at' => '2022-02-01 11:26:45',
                'updated_at' => '2022-02-22 15:22:33',
            ),
            37 =>
            array (
                'id' => 65,
                'data_keys' => 'testimonial.element',
                'data_values' => '{"name":"Mabrur Rashid Banna","designation":"Sportsman","star":"5","description":"Fugiat expedita eius quas consectetur culpa. Neque veniam et molestias laborum non corporis aperiam optio culpa. Fuga ipsum harum aliquam quod nisi nostrum nam quis, ipsam excepturi qui dignissimos quidem.","has_image":"1","user_image":"61f9040db8c6b1643709453.jpg"}',
                'created_at' => '2022-02-01 11:27:33',
                'updated_at' => '2022-02-22 15:22:15',
            ),
            38 =>
            array (
                'id' => 66,
                'data_keys' => 'testimonial.element',
                'data_values' => '{"name":"John Doe","designation":"Businessman","star":"5","description":"Fugiat expedita eius quas consectetur culpa. Neque veniam et molestias laborum non corporis aperiam optio culpa. Fuga ipsum harum aliquam quod nisi nostrum nam quis, ipsam excepturi qui dignissimos quidem.","has_image":"1","user_image":"61f904417d5061643709505.jpg"}',
                'created_at' => '2022-02-01 11:28:25',
                'updated_at' => '2022-02-22 15:22:21',
            ),
            39 =>
            array (
                'id' => 67,
                'data_keys' => 'testimonial.element',
                'data_values' => '{"name":"Mr David Roy","designation":"Businessman","star":"4","description":"Fugiat expedita eius quas consectetur culpa. Neque veniam et molestias laborum non corporis aperiam optio culpa. Fuga ipsum harum aliquam quod nisi nostrum nam quis, ipsam excepturi qui dignissimos quidem.","has_image":"1","user_image":"61f9046e9dc841643709550.jpg"}',
                'created_at' => '2022-02-01 11:29:10',
                'updated_at' => '2022-02-22 15:22:28',
            ),
            40 =>
            array (
                'id' => 68,
                'data_keys' => 'sponsors.element',
                'data_values' => '{"has_image":"1","image":"621c6e3f062971646030399.png"}',
                'created_at' => '2022-02-01 11:34:38',
                'updated_at' => '2022-02-28 08:39:59',
            ),
            41 =>
            array (
                'id' => 69,
                'data_keys' => 'sponsors.element',
                'data_values' => '{"has_image":"1","image":"621c6e6d55ced1646030445.png"}',
                'created_at' => '2022-02-01 11:34:43',
                'updated_at' => '2022-02-28 08:40:45',
            ),
            42 =>
            array (
                'id' => 70,
                'data_keys' => 'sponsors.element',
                'data_values' => '{"has_image":"1","image":"621c6e73ab3711646030451.png"}',
                'created_at' => '2022-02-01 11:34:48',
                'updated_at' => '2022-02-28 08:40:51',
            ),
            43 =>
            array (
                'id' => 71,
                'data_keys' => 'sponsors.element',
                'data_values' => '{"has_image":"1","image":"621c6e7a527ef1646030458.png"}',
                'created_at' => '2022-02-01 11:34:54',
                'updated_at' => '2022-02-28 08:40:58',
            ),
            44 =>
            array (
                'id' => 72,
                'data_keys' => 'sponsors.element',
                'data_values' => '{"has_image":"1","image":"621c6e7fcb3651646030463.png"}',
                'created_at' => '2022-02-01 11:34:58',
                'updated_at' => '2022-02-28 08:41:03',
            ),
            45 =>
            array (
                'id' => 73,
                'data_keys' => 'sponsors.element',
                'data_values' => '{"has_image":"1","image":"621c6e85bb9d11646030469.png"}',
                'created_at' => '2022-02-01 11:35:03',
                'updated_at' => '2022-02-28 08:41:09',
            ),
            46 =>
            array (
                'id' => 74,
                'data_keys' => 'auth.content',
                'data_values' => '{"has_image":"1","background_image":"61f90fbb32a711643712443.png"}',
                'created_at' => '2022-02-01 12:17:23',
                'updated_at' => '2022-02-01 12:17:23',
            ),
            47 =>
            array (
                'id' => 75,
                'data_keys' => 'header.content',
                'data_values' => '{"email":"demo@demo.com","mobile":"959-595-959"}',
                'created_at' => '2022-02-20 09:55:56',
                'updated_at' => '2022-02-20 09:57:57',
            ),
            48 =>
            array (
                'id' => 76,
                'data_keys' => 'faq.content',
                'data_values' => '{"heading":"Frequently Asked Questions","subheading":"Praesentium ipsam modi nostrum, quibusdam voluptas minus qui quas dicta consequuntur placeat animi cumque"}',
                'created_at' => '2022-02-20 10:45:20',
                'updated_at' => '2022-02-20 10:45:20',
            ),
            49 =>
            array (
                'id' => 77,
                'data_keys' => 'faq.element',
            'data_values' => '{"question":"Eligendi, aut ut sunt amet aperiam cum doloremque ?","answer":"<div class=\\"faq__title\\" style=\\"padding:20px 45px 20px 20px;margin-right:20px;color:rgb(164,189,206);font-family:Nunito, sans-serif;\\"><h5 class=\\"title\\" style=\\"line-height:1.2;font-size:20px;color:rgb(193,81,204);font-family:Jost, sans-serif;\\"><\\/h5><p style=\\"margin-top:-12px;margin-bottom:20px;color:rgb(164,189,206);font-size:16px;font-family:Nunito, sans-serif;background-color:rgb(0,19,41);\\"><span class=\\"text--base\\" style=\\"font-weight:bolder;font-family:Jost, sans-serif;color:rgb(193,81,204);\\">irst :\\u00a0<\\/span>Obcaecati aperiam cumque corporis, deleniti officiis deserunt cum dignissimos totam corrupti natus amet. deleniti officiis deserunt cum dignissimos totam corrupti natus amet.<\\/p><p style=\\"margin-top:-12px;color:rgb(164,189,206);font-size:16px;font-family:Nunito, sans-serif;background-color:rgb(0,19,41);margin-bottom:-7px;\\"><span class=\\"text--base\\" style=\\"font-weight:bolder;font-family:Jost, sans-serif;color:rgb(193,81,204);\\">Second :\\u00a0<\\/span>Obcaecati aperiam cumque corporis, deleniti officiis deserunt cum dignissimos totam corrupti natus amet. deleniti officiis deserunt cum dignissimos totam corrupti natus amet.<\\/p><\\/div>"}',
                'created_at' => '2022-02-20 10:45:45',
                'updated_at' => '2022-03-06 09:19:06',
            ),
            50 =>
            array (
                'id' => 78,
                'data_keys' => 'faq.element',
            'data_values' => '{"question":"Aut ut sunt amet aperiam cum doloremque distinctio ?","answer":"<p style=\\"margin-top:-12px;margin-bottom:20px;color:rgb(164,189,206);font-family:Nunito, sans-serif;font-size:16px;background-color:rgb(0,19,41);\\"><span class=\\"text--base\\" style=\\"font-weight:bolder;font-family:Jost, sans-serif;color:rgb(193,81,204);\\">First :\\u00a0<\\/span>Obcaecati aperiam cumque corporis, deleniti officiis deserunt cum dignissimos totam corrupti natus amet. deleniti officiis deserunt cum dignissimos totam corrupti natus amet.<\\/p><p style=\\"margin-top:-12px;color:rgb(164,189,206);font-family:Nunito, sans-serif;font-size:16px;background-color:rgb(0,19,41);margin-bottom:-7px;\\"><span class=\\"text--base\\" style=\\"font-weight:bolder;font-family:Jost, sans-serif;color:rgb(193,81,204);\\">Second :\\u00a0<\\/span>Obcaecati aperiam cumque corporis, deleniti officiis deserunt cum dignissimos totam corrupti natus amet. deleniti officiis deserunt cum dignissimos totam corrupti natus amet.<\\/p>"}',
                'created_at' => '2022-02-20 10:47:20',
                'updated_at' => '2022-03-06 09:19:26',
            ),
            51 =>
            array (
                'id' => 79,
                'data_keys' => 'faq.element',
            'data_values' => '{"question":"Cum asperiores eligendi, aut ut sunt amet aperiam cum?","answer":"<p style=\\"margin-top:-12px;margin-bottom:20px;color:rgb(164,189,206);font-family:Nunito, sans-serif;font-size:16px;background-color:rgb(0,19,41);\\"><span class=\\"text--base\\" style=\\"font-weight:bolder;font-family:Jost, sans-serif;color:rgb(193,81,204);\\">irst :\\u00a0<\\/span>Obcaecati aperiam cumque corporis, deleniti officiis deserunt cum dignissimos totam corrupti natus amet. deleniti officiis deserunt cum dignissimos totam corrupti natus amet.<\\/p><p style=\\"margin-top:-12px;color:rgb(164,189,206);font-family:Nunito, sans-serif;font-size:16px;background-color:rgb(0,19,41);margin-bottom:-7px;\\"><span class=\\"text--base\\" style=\\"font-weight:bolder;font-family:Jost, sans-serif;color:rgb(193,81,204);\\">Second :\\u00a0<\\/span>Obcaecati aperiam cumque corporis, deleniti officiis deserunt cum dignissimos totam corrupti natus amet. deleniti officiis deserunt cum dignissimos totam corrupti natus amet.<\\/p>"}',
                'created_at' => '2022-02-20 10:47:33',
                'updated_at' => '2022-03-06 09:19:42',
            ),
            52 =>
            array (
                'id' => 80,
                'data_keys' => 'faq.element',
            'data_values' => '{"question":"Adipisicing elit. Et quia ipsa quidem, ea in consectetur?","answer":"<p style=\\"margin-top:-12px;margin-bottom:20px;color:rgb(164,189,206);font-family:Nunito, sans-serif;font-size:16px;background-color:rgb(0,19,41);\\"><span class=\\"text--base\\" style=\\"font-weight:bolder;font-family:Jost, sans-serif;color:rgb(193,81,204);\\">First :\\u00a0<\\/span>Obcaecati aperiam cumque corporis, deleniti officiis deserunt cum dignissimos totam corrupti natus amet. deleniti officiis deserunt cum dignissimos totam corrupti natus amet.<\\/p><p style=\\"margin-top:-12px;color:rgb(164,189,206);font-family:Nunito, sans-serif;font-size:16px;background-color:rgb(0,19,41);margin-bottom:-7px;\\"><span class=\\"text--base\\" style=\\"font-weight:bolder;font-family:Jost, sans-serif;color:rgb(193,81,204);\\">Second :\\u00a0<\\/span>Obcaecati aperiam cumque corporis, deleniti officiis deserunt cum dignissimos totam corrupti natus amet. deleniti officiis deserunt cum dignissimos totam corrupti natus amet.<\\/p>"}',
                'created_at' => '2022-02-20 11:05:19',
                'updated_at' => '2022-03-06 09:19:50',
            ),
            53 =>
            array (
                'id' => 81,
                'data_keys' => 'faq.element',
            'data_values' => '{"question":"Officiis iste minima, nemo, qui veritatis velit nesciunt?","answer":"<p style=\\"margin-top:-12px;margin-bottom:20px;color:rgb(164,189,206);font-size:16px;font-family:Nunito, sans-serif;background-color:rgb(0,19,41);\\"><span class=\\"text--base\\" style=\\"font-weight:bolder;font-family:Jost, sans-serif;color:rgb(193,81,204);\\">First :\\u00a0<\\/span>Obcaecati aperiam cumque corporis, deleniti officiis deserunt cum dignissimos totam corrupti natus amet. deleniti officiis deserunt cum dignissimos totam corrupti natus amet.<\\/p><p style=\\"margin-top:-12px;color:rgb(164,189,206);font-size:16px;font-family:Nunito, sans-serif;background-color:rgb(0,19,41);margin-bottom:-7px;\\"><span class=\\"text--base\\" style=\\"font-weight:bolder;font-family:Jost, sans-serif;color:rgb(193,81,204);\\">Second :\\u00a0<\\/span>Obcaecati aperiam cumque corporis, deleniti officiis deserunt cum dignissimos totam corrupti natus amet. deleniti officiis deserunt cum dignissimos totam corrupti natus amet.<\\/p>"}',
                'created_at' => '2022-02-20 11:07:42',
                'updated_at' => '2022-03-06 09:19:56',
            ),
            54 =>
            array (
                'id' => 82,
                'data_keys' => 'faq.element',
            'data_values' => '{"question":"Aut ut sunt amet aperiam cum doloremque distinctio?","answer":"<p style=\\"margin-top:-12px;margin-bottom:20px;color:rgb(164,189,206);font-size:16px;font-family:Nunito, sans-serif;background-color:rgb(0,19,41);\\"><span class=\\"text--base\\" style=\\"font-weight:bolder;font-family:Jost, sans-serif;color:rgb(193,81,204);\\">First :\\u00a0<\\/span>Obcaecati aperiam cumque corporis, deleniti officiis deserunt cum dignissimos totam corrupti natus amet. deleniti officiis deserunt cum dignissimos totam corrupti natus amet.<\\/p><p style=\\"margin-top:-12px;color:rgb(164,189,206);font-size:16px;font-family:Nunito, sans-serif;background-color:rgb(0,19,41);margin-bottom:-7px;\\"><span class=\\"text--base\\" style=\\"font-weight:bolder;font-family:Jost, sans-serif;color:rgb(193,81,204);\\">Second :\\u00a0<\\/span>Obcaecati aperiam cumque corporis, deleniti officiis deserunt cum dignissimos totam corrupti natus amet. deleniti officiis deserunt cum dignissimos totam corrupti natus amet.<\\/p>"}',
                'created_at' => '2022-02-20 11:07:53',
                'updated_at' => '2022-03-06 09:20:06',
            ),
            55 =>
            array (
                'id' => 83,
                'data_keys' => 'faq.element',
            'data_values' => '{"question":"Distinctio asperiores eligendi, aut ut sunt amet aperiam?","answer":"<p style=\\"margin-top:-12px;margin-bottom:20px;color:rgb(164,189,206);font-size:16px;font-family:Nunito, sans-serif;background-color:rgb(0,19,41);\\"><span class=\\"text--base\\" style=\\"font-weight:bolder;font-family:Jost, sans-serif;color:rgb(193,81,204);\\">First :\\u00a0<\\/span>Obcaecati aperiam cumque corporis, deleniti officiis deserunt cum dignissimos totam corrupti natus amet. deleniti officiis deserunt cum dignissimos totam corrupti natus amet.<\\/p><p style=\\"margin-top:-12px;color:rgb(164,189,206);font-size:16px;font-family:Nunito, sans-serif;background-color:rgb(0,19,41);margin-bottom:-7px;\\"><span class=\\"text--base\\" style=\\"font-weight:bolder;font-family:Jost, sans-serif;color:rgb(193,81,204);\\">Second :\\u00a0<\\/span>Obcaecati aperiam cumque corporis, deleniti officiis deserunt cum dignissimos totam corrupti natus amet. deleniti officiis deserunt cum dignissimos totam corrupti natus amet.<\\/p>"}',
                'created_at' => '2022-02-20 11:07:59',
                'updated_at' => '2022-03-06 09:20:18',
            ),
            56 =>
            array (
                'id' => 84,
                'data_keys' => 'faq.element',
            'data_values' => '{"question":"Nulla dolore provident? Enim iste odio, eaque, adipisci?","answer":"<p style=\\"margin-top:-12px;margin-bottom:20px;color:rgb(164,189,206);font-size:16px;font-family:Nunito, sans-serif;background-color:rgb(0,19,41);\\"><span class=\\"text--base\\" style=\\"font-weight:bolder;font-family:Jost, sans-serif;color:rgb(193,81,204);\\">First :\\u00a0<\\/span>Obcaecati aperiam cumque corporis, deleniti officiis deserunt cum dignissimos totam corrupti natus amet. deleniti officiis deserunt cum dignissimos totam corrupti natus amet.<\\/p><p style=\\"margin-top:-12px;color:rgb(164,189,206);font-size:16px;font-family:Nunito, sans-serif;background-color:rgb(0,19,41);margin-bottom:-7px;\\"><span class=\\"text--base\\" style=\\"font-weight:bolder;font-family:Jost, sans-serif;color:rgb(193,81,204);\\">Second :\\u00a0<\\/span>Obcaecati aperiam cumque corporis, deleniti officiis deserunt cum dignissimos totam corrupti natus amet. deleniti officiis deserunt cum dignissimos totam corrupti natus amet.<\\/p>"}',
                'created_at' => '2022-02-20 11:08:06',
                'updated_at' => '2022-03-06 09:20:25',
            ),
            57 =>
            array (
                'id' => 85,
                'data_keys' => 'faq.element',
            'data_values' => '{"question":"Minus nisi deserunt ea rerum ipsam ipsum eum. Quis tene?","answer":"<p style=\\"margin-top:-12px;margin-bottom:20px;color:rgb(164,189,206);font-size:16px;font-family:Nunito, sans-serif;background-color:rgb(0,19,41);\\"><span class=\\"text--base\\" style=\\"font-weight:bolder;font-family:Jost, sans-serif;color:rgb(193,81,204);\\">First :\\u00a0<\\/span>Obcaecati aperiam cumque corporis, deleniti officiis deserunt cum dignissimos totam corrupti natus amet. deleniti officiis deserunt cum dignissimos totam corrupti natus amet.<\\/p><p style=\\"margin-top:-12px;color:rgb(164,189,206);font-size:16px;font-family:Nunito, sans-serif;background-color:rgb(0,19,41);margin-bottom:-7px;\\"><span class=\\"text--base\\" style=\\"font-weight:bolder;font-family:Jost, sans-serif;color:rgb(193,81,204);\\">Second :\\u00a0<\\/span>Obcaecati aperiam cumque corporis, deleniti officiis deserunt cum dignissimos totam corrupti natus amet. deleniti officiis deserunt cum dignissimos totam corrupti natus amet.<\\/p>"}',
                'created_at' => '2022-02-20 11:08:18',
                'updated_at' => '2022-03-06 09:20:31',
            ),
            58 =>
            array (
                'id' => 86,
                'data_keys' => 'about.element',
                'data_values' => '{"about_list":"Cum debitis delectus nulla minima placeat."}',
                'created_at' => '2022-02-20 12:58:17',
                'updated_at' => '2022-02-20 12:58:17',
            ),
            59 =>
            array (
                'id' => 87,
                'data_keys' => 'about.element',
                'data_values' => '{"about_list":"Nisi perspiciatis id explicabo aliquam"}',
                'created_at' => '2022-02-20 12:58:28',
                'updated_at' => '2022-02-20 12:58:28',
            ),
            60 =>
            array (
                'id' => 88,
                'data_keys' => 'about.element',
                'data_values' => '{"about_list":"Repellendus qui in quae earum rerum ad officia."}',
                'created_at' => '2022-02-20 12:58:41',
                'updated_at' => '2022-02-20 12:58:41',
            ),
            61 =>
            array (
                'id' => 89,
                'data_keys' => 'counter.element',
                'data_values' => '{"title":"Average Rating","counter_digit":"4.5","counter_icon":"<i class=\\"lar la-smile\\"><\\/i>"}',
                'created_at' => '2022-02-20 13:49:16',
                'updated_at' => '2022-02-20 13:49:16',
            ),
            62 =>
            array (
                'id' => 90,
                'data_keys' => 'counter.element',
                'data_values' => '{"title":"Winner Client","counter_digit":"120","counter_icon":"<i class=\\"las la-user-friends\\"><\\/i>"}',
                'created_at' => '2022-02-20 13:50:01',
                'updated_at' => '2022-02-20 13:50:01',
            ),
            63 =>
            array (
                'id' => 91,
                'data_keys' => 'counter.element',
                'data_values' => '{"title":"Total Bid","counter_digit":"700","counter_icon":"<i class=\\"las la-store-alt\\"><\\/i>"}',
                'created_at' => '2022-02-20 13:53:52',
                'updated_at' => '2022-02-20 13:53:52',
            ),
            64 =>
            array (
                'id' => 92,
                'data_keys' => 'counter.element',
                'data_values' => '{"title":"Satisfied Client","counter_digit":"3000","counter_icon":"<i class=\\"las la-users\\"><\\/i>"}',
                'created_at' => '2022-02-20 13:54:19',
                'updated_at' => '2022-02-20 13:54:19',
            ),
            65 =>
            array (
                'id' => 93,
                'data_keys' => 'quick_banner.element',
                'data_values' => '{"has_image":"1","button":"Bid Now","url":"category\\/4\\/industrial-machinery","image":"6214e510d32891645536528.jpg"}',
                'created_at' => '2022-02-22 14:58:48',
                'updated_at' => '2022-03-06 09:13:06',
            ),
            66 =>
            array (
                'id' => 94,
                'data_keys' => 'quick_banner.element',
                'data_values' => '{"has_image":"1","button":"Bid Now","url":"category\\/2\\/dolls-bears-and-toys","image":"6214e5251a1661645536549.jpg"}',
                'created_at' => '2022-02-22 14:59:09',
                'updated_at' => '2022-03-06 09:13:20',
            ),
            67 =>
            array (
                'id' => 95,
                'data_keys' => 'quick_banner.element',
                'data_values' => '{"has_image":"1","button":"Bid Now","url":"category\\/3\\/farm-and-agriculture","image":"6214e52e0f82b1645536558.jpg"}',
                'created_at' => '2022-02-22 14:59:18',
                'updated_at' => '2022-03-06 09:14:07',
            ),
            68 =>
            array (
                'id' => 96,
                'data_keys' => 'login.content',
                'data_values' => '{"has_image":"1","background_image":"62172609a21711645684233.png"}',
                'created_at' => '2022-02-24 08:30:33',
                'updated_at' => '2022-02-24 08:30:34',
            ),
            69 =>
            array (
                'id' => 97,
                'data_keys' => 'register.content',
                'data_values' => '{"has_image":"1","background_image":"6217262fbae031645684271.png"}',
                'created_at' => '2022-02-24 08:31:11',
                'updated_at' => '2022-02-24 08:31:12',
            ),
            70 =>
            array (
                'id' => 98,
                'data_keys' => '2fa_verify.content',
                'data_values' => '{"has_image":"1","background_image":"6217279c829dc1645684636.png"}',
                'created_at' => '2022-02-24 08:37:16',
                'updated_at' => '2022-02-24 08:37:16',
            ),
            71 =>
            array (
                'id' => 99,
                'data_keys' => 'code_verify.content',
                'data_values' => '{"has_image":"1","background_image":"621727a336e2e1645684643.png"}',
                'created_at' => '2022-02-24 08:37:23',
                'updated_at' => '2022-02-24 08:37:23',
            ),
            72 =>
            array (
                'id' => 100,
                'data_keys' => 'email_verify.content',
                'data_values' => '{"has_image":"1","background_image":"621727ab9dce11645684651.png"}',
                'created_at' => '2022-02-24 08:37:31',
                'updated_at' => '2022-02-24 08:37:32',
            ),
            73 =>
            array (
                'id' => 101,
                'data_keys' => 'reset_password.content',
                'data_values' => '{"has_image":"1","background_image":"621727b1dfa8d1645684657.png"}',
                'created_at' => '2022-02-24 08:37:37',
                'updated_at' => '2022-02-24 08:37:38',
            ),
            74 =>
            array (
                'id' => 102,
                'data_keys' => 'reset_password_email.content',
                'data_values' => '{"has_image":"1","background_image":"621727b82a4d51645684664.png"}',
                'created_at' => '2022-02-24 08:37:44',
                'updated_at' => '2022-02-24 08:37:44',
            ),
            75 =>
            array (
                'id' => 103,
                'data_keys' => 'sms_verify.content',
                'data_values' => '{"has_image":"1","background_image":"621727bd571881645684669.png"}',
                'created_at' => '2022-02-24 08:37:49',
                'updated_at' => '2022-02-24 08:37:49',
            ),
            76 =>
            array (
                'id' => 104,
                'data_keys' => 'blog.element',
            'data_values' => '{"has_image":["1"],"title":"Dolor sit amet consectetur adipisicing elit quis saepe minus culpa laborum","description_nic":"<p style=\\"\\">\\u00a0Website performance, or how fast web pages load onto a client\\u2019s browser can impact user satisfaction and visitor retention. Google also factors website performance in its ranking algorithm. Our designers and developers use best practice tools and techniques when it comes to building websites such as image optimisation, using content delivery networks and other enhancements to ensure fast loading times for both desktop and mobile.digital solutions company. Mettro\\u2019s web designers, developers, user experience designers, SEO specialists, and marketing experts are adept at fusing vision, design, and technology to provide you with custom digital solutions that will help you achieve your business goals.<\\/p><p style=\\"\\">We are a full-service web design, web development and digital solutions company. Mettro\\u2019s web designers, developers, user experience designers, SEO specialists, and marketing experts are adept at fusing vision, design, and technology to provide you with custom digital solutions that will help you achieve your business goals.<\\/p><p style=\\"\\">Website performance, or how fast web pages load onto a client\\u2019s browser can impact user satisfaction and visitor retention. Google also factors website performance in its ranking algorithm. Our designers and developers use best practice tools and techniques when it comes to building websites such as image optimisation, using content delivery networks and other enhancements to ensure fast loading times for both desktop and mobile..<\\/p><blockquote class=\\"mb-3 d-block\\" style=\\"background:rgba(1,28,61,0.9);padding:25px 20px;border-left:2px solid rgba(1,28,61,0.9);font-style:italic;color:rgb(164,189,206);font-family:Nunito, sans-serif;\\">Website performance, or how fast web pages load onto a client\\u2019s browser can impnetworks and other enhancements to ensure fast loading times for both desktop and mobile.<p class=\\"m-0\\" style=\\"margin-top:12px;margin-bottom:25px;font-size:20px;font-weight:600;\\">--- John Doe<\\/p><\\/blockquote><p style=\\"\\">We are a full-service web design, web development and digital solutions company. Mettro\\u2019s web designers, developers, user experience designers, SEO specialists, and marketing experts are adept at fusing vision, design, and technology to provide you with custom digital solutions that will help you achieve your business goals.<\\/p>","blog_image":"6219c74f321e91645856591.jpg"}',
                'created_at' => '2022-02-26 08:21:44',
                'updated_at' => '2022-02-26 08:23:11',
            ),
            77 =>
            array (
                'id' => 105,
                'data_keys' => 'blog.element',
            'data_values' => '{"has_image":["1"],"title":"Aspernatur nesciunt esse, quisquam dolor ullam voluptatem consequuntur possimus","description_nic":"<p style=\\"\\">Website performance, or how fast web pages load onto a client\\u2019s browser can impact user satisfaction and visitor retention. Google also factors website performance in its ranking algorithm. Our designers and developers use best practice tools and techniques when it comes to building websites such as image optimisation, using content delivery networks and other enhancements to ensure fast loading times for both desktop and mobile.digital solutions company. Mettro\\u2019s web designers, developers, user experience designers, SEO specialists, and marketing experts are adept at fusing vision, design, and technology to provide you with custom digital solutions that will help you achieve your business goals.<\\/p><p style=\\"\\">We are a full-service web design, web development and digital solutions company. Mettro\\u2019s web designers, developers, user experience designers, SEO specialists, and marketing experts are adept at fusing vision, design, and technology to provide you with custom digital solutions that will help you achieve your business goals.<\\/p><p style=\\"\\">Website performance, or how fast web pages load onto a client\\u2019s browser can impact user satisfaction and visitor retention. Google also factors website performance in its ranking algorithm. Our designers and developers use best practice tools and techniques when it comes to building websites such as image optimisation, using content delivery networks and other enhancements to ensure fast loading times for both desktop and mobile..<\\/p><blockquote class=\\"mb-3 d-block\\" style=\\"background:rgba(1,28,61,0.9);padding:25px 20px;border-left:2px solid rgba(1,28,61,0.9);font-style:italic;color:rgb(164,189,206);font-family:Nunito, sans-serif;\\">Website performance, or how fast web pages load onto a client\\u2019s browser can impnetworks and other enhancements to ensure fast loading times for both desktop and mobile.<p class=\\"m-0\\" style=\\"margin-top:12px;margin-bottom:25px;font-size:20px;font-weight:600;\\">--- John Doe<\\/p><\\/blockquote><p style=\\"\\">We are a full-service web design, web development and digital solutions company. Mettro\\u2019s web designers, developers, user experience designers, SEO specialists, and marketing experts are adept at fusing vision, design, and technology to provide you with custom digital solutions that will help you achieve your business goals.<\\/p>","blog_image":"6219c705c15761645856517.jpg"}',
                'created_at' => '2022-02-26 08:21:57',
                'updated_at' => '2022-02-26 08:21:58',
            ),
            78 =>
            array (
                'id' => 106,
                'data_keys' => 'blog.element',
            'data_values' => '{"has_image":["1"],"title":"Ullam aliquam accusantium voluptates ad officia laudantium delectus animi","description_nic":"<p style=\\"\\">Website performance, or how fast web pages load onto a client\\u2019s browser can impact user satisfaction and visitor retention. Google also factors website performance in its ranking algorithm. Our designers and developers use best practice tools and techniques when it comes to building websites such as image optimisation, using content delivery networks and other enhancements to ensure fast loading times for both desktop and mobile.digital solutions company. Mettro\\u2019s web designers, developers, user experience designers, SEO specialists, and marketing experts are adept at fusing vision, design, and technology to provide you with custom digital solutions that will help you achieve your business goals.<\\/p><p style=\\"\\">We are a full-service web design, web development and digital solutions company. Mettro\\u2019s web designers, developers, user experience designers, SEO specialists, and marketing experts are adept at fusing vision, design, and technology to provide you with custom digital solutions that will help you achieve your business goals.<\\/p><p style=\\"\\">Website performance, or how fast web pages load onto a client\\u2019s browser can impact user satisfaction and visitor retention. Google also factors website performance in its ranking algorithm. Our designers and developers use best practice tools and techniques when it comes to building websites such as image optimisation, using content delivery networks and other enhancements to ensure fast loading times for both desktop and mobile..<\\/p><blockquote class=\\"mb-3 d-block\\" style=\\"background:rgba(1,28,61,0.9);padding:25px 20px;border-left:2px solid rgba(1,28,61,0.9);font-style:italic;color:rgb(164,189,206);font-family:Nunito, sans-serif;\\">Website performance, or how fast web pages load onto a client\\u2019s browser can impnetworks and other enhancements to ensure fast loading times for both desktop and mobile.<p class=\\"m-0\\" style=\\"margin-top:12px;margin-bottom:25px;font-size:20px;font-weight:600;\\">--- John Doe<\\/p><\\/blockquote><p style=\\"\\">We are a full-service web design, web development and digital solutions company. Mettro\\u2019s web designers, developers, user experience designers, SEO specialists, and marketing experts are adept at fusing vision, design, and technology to provide you with custom digital solutions that will help you achieve your business goals.<\\/p>","blog_image":"6219c71a4659f1645856538.jpg"}',
                'created_at' => '2022-02-26 08:22:18',
                'updated_at' => '2022-02-26 08:22:18',
            ),
            79 =>
            array (
                'id' => 107,
                'data_keys' => 'blog.element',
            'data_values' => '{"has_image":["1"],"title":"Deserunt nihil asperiores reiciendis assumenda reprehenderit corporis nam omnis","description_nic":"<p style=\\"\\">Website performance, or how fast web pages load onto a client\\u2019s browser can impact user satisfaction and visitor retention. Google also factors website performance in its ranking algorithm. Our designers and developers use best practice tools and techniques when it comes to building websites such as image optimisation, using content delivery networks and other enhancements to ensure fast loading times for both desktop and mobile.digital solutions company. Mettro\\u2019s web designers, developers, user experience designers, SEO specialists, and marketing experts are adept at fusing vision, design, and technology to provide you with custom digital solutions that will help you achieve your business goals.<\\/p><p style=\\"\\">We are a full-service web design, web development and digital solutions company. Mettro\\u2019s web designers, developers, user experience designers, SEO specialists, and marketing experts are adept at fusing vision, design, and technology to provide you with custom digital solutions that will help you achieve your business goals.<\\/p><p style=\\"\\">Website performance, or how fast web pages load onto a client\\u2019s browser can impact user satisfaction and visitor retention. Google also factors website performance in its ranking algorithm. Our designers and developers use best practice tools and techniques when it comes to building websites such as image optimisation, using content delivery networks and other enhancements to ensure fast loading times for both desktop and mobile..<\\/p><blockquote class=\\"mb-3 d-block\\" style=\\"background:rgba(1,28,61,0.9);padding:25px 20px;border-left:2px solid rgba(1,28,61,0.9);font-style:italic;color:rgb(164,189,206);font-family:Nunito, sans-serif;\\">Website performance, or how fast web pages load onto a client\\u2019s browser can impnetworks and other enhancements to ensure fast loading times for both desktop and mobile.<p class=\\"m-0\\" style=\\"margin-top:12px;margin-bottom:25px;font-size:20px;font-weight:600;\\">--- John Doe<\\/p><\\/blockquote><p style=\\"\\">We are a full-service web design, web development and digital solutions company. Mettro\\u2019s web designers, developers, user experience designers, SEO specialists, and marketing experts are adept at fusing vision, design, and technology to provide you with custom digital solutions that will help you achieve your business goals.<\\/p>","blog_image":"6219c72768c211645856551.jpg"}',
                'created_at' => '2022-02-26 08:22:31',
                'updated_at' => '2022-02-26 08:22:31',
            ),
            80 =>
            array (
                'id' => 108,
                'data_keys' => 'quick_banner.element',
                'data_values' => '{"has_image":"1","button":"Bid Now","url":"category\\/10\\/sports","image":"622065a4733a41646290340.jpg"}',
                'created_at' => '2022-03-03 08:51:48',
                'updated_at' => '2022-03-06 09:14:20',
            ),
            81 =>
            array (
                'id' => 109,
                'data_keys' => 'live_auction.content',
                'data_values' => '{"heading":"Live Auction","subheading":"Praesentium ipsam modi nostrum, quibusdam voluptas minus qui quas dicta consequuntur placeat animi cumque"}',
                'created_at' => '2022-03-03 09:04:04',
                'updated_at' => '2022-03-03 09:04:04',
            ),
            82 =>
            array (
                'id' => 110,
                'data_keys' => 'recently_expired.content',
                'data_values' => '{"heading":"Recently Expired Auctions","subheading":"Praesentium ipsam modi nostrum, quibusdam voluptas minus qui quas dicta consequuntur placeat animi cumque"}',
                'created_at' => '2022-03-03 09:04:05',
                'updated_at' => '2022-03-03 09:04:05',
            ),
            83 =>
            array (
                'id' => 111,
                'data_keys' => 'upcoming_auction.content',
                'data_values' => '{"heading":"Upcoming Auctions","subheading":"Praesentium ipsam modi nostrum, quibusdam voluptas minus qui quas dicta consequuntur placeat animi cumque"}',
                'created_at' => '2022-03-03 09:04:07',
                'updated_at' => '2022-03-03 09:04:07',
            ),
            84 =>
            array (
                'id' => 112,
                'data_keys' => 'breadcrumb.content',
                'data_values' => '{"has_image":"1","background_image":"6224a2b19dd171646568113.jpg"}',
                'created_at' => '2022-03-06 13:56:07',
                'updated_at' => '2022-03-06 14:01:53',
            ),
            85 =>
            array (
                'id' => 113,
                'data_keys' => 'faq.element',
            'data_values' => '{"question":"Aperiam cum doloremque distias periores eligendi?","answer":"<p style=\\"margin-top:-12px;margin-bottom:20px;color:rgb(164,189,206);font-size:16px;font-family:Nunito, sans-serif;background-color:rgb(0,19,41);\\"><span class=\\"text--base\\" style=\\"color:rgb(193,81,204);font-weight:bolder;font-family:Jost, sans-serif;\\">irst :\\u00a0<\\/span>Obcaecati aperiam cumque corporis, deleniti officiis deserunt cum dignissimos totam corrupti natus amet. deleniti officiis deserunt cum dignissimos totam corrupti natus amet.<\\/p><p style=\\"margin-top:-12px;margin-bottom:-7px;color:rgb(164,189,206);font-size:16px;font-family:Nunito, sans-serif;background-color:rgb(0,19,41);\\"><span class=\\"text--base\\" style=\\"color:rgb(193,81,204);font-weight:bolder;font-family:Jost, sans-serif;\\">Second :\\u00a0<\\/span>Obcaecati aperiam cumque corporis, deleniti officiis deserunt cum dignissimos totam corrupti natus amet. deleniti officiis deserunt cum dignissimos totam corrupti natus amet.<\\/p>"}',
                'created_at' => '2022-03-07 07:01:16',
                'updated_at' => '2022-03-07 07:01:16',
            ),
        ));


    }
}

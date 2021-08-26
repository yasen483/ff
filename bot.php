 <?php

ob_start();
define('API_KEY','1568302696:AAG02L39sRWhnNFkp0RyO3zf5SrK-FRRNkY');
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
function Forward($KojaShe,$AzKoja,$KodomMSG){
bot('ForwardMessage',['chat_id'=>$KojaShe,'from_chat_id'=>$AzKoja,'message_id'=>$KodomMSG]);}


$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$admin = 1189284654;
$dev = "@P6XXX";
$message_id2 = $update->callback_query->message->message_id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$check_token = file_get_contents("https://api.telegram.org/bot$text/getWebhookInfo");
$check = json_decode($check_token);
$get_filee = file_get_contents('twasl.php');
$get_done = file_get_contents('makee/ex.txt');
$done = explode("\n", $get_done);
$newbot = "• صنع بوت 📢؛";
$delbot = "• حذف البوت 📌؛";
$help = "• كيف تصنع بوتك 📬؛";
$home = "• القائمةه الرئيسيةه ◀️؛";
$haap = "• لـشراء الـبوت 📘؛";
$kaat = "• اضغط هنا وتابع جديدنا 📚؛";
$titli = "• مشاركه المنشور ؛🖲";
$get_id = file_get_contents('makee/make.txt');
$name =$update->message->from->first_name;
date_default_timezone_set('Asia/Baghdad');
$getid = explode("\n", $get_id);
$fnee = $update->callback_query->message->chat->username;
$useree = $update->callback_query->message->chat->id;
$mid = $message->message_id;
$inlineqt = $update->inline_query->query;
$get_done = file_get_contents('ex.txt');
$update = json_decode(file_get_contents('php://input'));

$from_id = $message->from->id;
 date_default_timezone_set('Asia/Riyadh');
$date = date('h:i:s'); $d = date('A');
$aa =preg_replace('/AM/', 'ص', $d);$aa =preg_replace('/PM/', 'م', $d);
 
$done = explode("\n", $get_done);
$newt = count($done) -0;
bot('answerInlineQuery',[
        'inline_query_id'=>$update->inline_query->id,    
        'results' => json_encode([[
            'type'=>'article',
            'id'=>base64_encode(rand(5,555)),
            'title'=>'اضغط هنا للنشر ',
            'input_message_content'=>['parse_mode'=>'HTML','message_text'=>"

•┇اهلا بك عزيزي👤تم انشاء بوت🔖

•┇صنع بوتات تواصل❗️ •

•┇الان اصنع بوت 👾 الخاص بك مجاني وسرعه عاليه ✅ 

•┇وتواصل معه مشتركين 👥 قناتك
     و مشتركين تليكرام المحظورين
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
📆¦ *الوقت •⊱ $time ⊰•*
⏱¦ *التاريخ •⊱  $date ⊰•*
"],
            'reply_markup'=>['inline_keyboard'=>[
                [
                ['text'=>"$newbot",'url'=>'https://telegram.me/xw1bot?start']
                ],
                [['text'=>"$titli", 'switch_inline_query'=>"$from_id"]],
             ]]
        ]])
    ]);
$Alsh = "TO"; #توكن البوت
if($text == "/start"){
$ali = "@THTSS"; #معرف قناتك
$join = file_get_contents("https://api.telegram.org/bot".$Alsh."/getChatMember?chat_id=$ali&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"👨‍✈️ ¦ مرحبا بگ عزيزي 🦁،
👾 ¦ لا يمڪنـك استخدام البوت ،
™ ¦ عليك الإشتراگ في قناة البوت ،
🔘 ¦ القناة ~⪼ $ali ؛
▁
- بعد الاشتراك اضغط { /start }",

]);return false;}
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>"",'reply_to_message_id'=>$message->$message_id,]);}
//------------------//
$Alsh = "to"; #توكن البوت
if($text == "/start"){
$ali = "@TH1BS"; #معرف قناتك
$join = file_get_contents("https://api.telegram.org/bot".$Alsh."/getChatMember?chat_id=$ali&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"👨‍✈️ ¦ مرحبا بگ عزيزي 🦁،
👾 ¦ لا يمڪنـك استخدام البوت ،
™ ¦ عليك الإشتراگ في قناة البوت ،
🔘 ¦ القناة ~⪼ $ali ؛
▁
- بعد الاشتراك اضغط { /start }",

]);return false;}
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>"",'reply_to_message_id'=>$message->$message_id,]);}

if($text == '/start' and !in_array($from_id, $getid) and !strpos($ch1 , '"status":"left"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"▫️⁞ اهلا بك يا 👋🏻 ؛ [$name](tg://user?id=$from_id)

▫️⁞ في البوت الرسمي لإنشاء بوتات تواصل مطورة

▫️⁞ يحتوي البوت الذي يتم انشائه على مميزات راقيه وسرعة عالية ويتميز بعدم توقف البوت مدى الحياة ،

▫️⁞ استخدام خدمة انشاء بوتات تواصل المجانية الان 


▫️⁞ [للمزيد اضغط هنا](https://t.me/thtss)

ـ••┉┉┉┉┉┉┉┉┉┉••
*⏰ ⁞ ـ $date $aa  ﴾◄ *",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$newbot",'callback_data'=>'maka1'],['text'=>"$delbot",'callback_data'=>'delete1']],[['text'=>"$titli",'switch_inline_query'=>"$name"]],[['text'=>"$help",'callback_data'=>'help'],['text'=>"$haap",'callback_data'=>'buy']],[['text'=>"$kaat",'callback_data'=>'channel']],
]
])]);}

if($data == "home"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"▫️⁞ اهلا بك ياعزيزي 

▫️⁞ في البوت الرسمي لإنشاء بوتات تواصل مطورة

▫️⁞ يحتوي البوت الذي يتم انشائه على مميزات راقيه وسرعة عالية ويتميز بعدم توقف البوت مدى الحياة ،

▫️⁞ استخدام خدمة انشاء بوتات تواصل المجانية الان 

▫️⁞ [للمزيد اضغط هنا](https://t.me/thtss)

ـ••┉┉┉┉┉┉┉┉┉┉••
*⏰ ⁞ ـ $date $aa  ﴾◄ *",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$newbot",'callback_data'=>'maka1'],['text'=>"$delbot",'callback_data'=>'delete1']],[['text'=>"$titli",'switch_inline_query'=>"$name"]],[['text'=>"$help",'callback_data'=>'help'],['text'=>"$haap",'callback_data'=>'buy']],[['text'=>"$kaat",'callback_data'=>'channel']],
]])]);}

$admin = "1165017371";
$sting = file_get_contents("sting.txt");
$band = file_get_contents("band.txt");
$start0 = file_get_contents("start1.txt") ;
$yhya5 = file_get_contents("yhya2.txt");
$knat1 = file_get_contents("knat1.txt");
$yhya0 = file_get_contents("yhya0.txt");
$yhya1= file_get_contents("yhya1.txt");
$yhya6 = file_get_contents("yhya3.txt");
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$name = $message->from->first_name;
$username = $message->from->username;
$chat_id = $message->chat->id;
$text = $message->text;
$from_id = $message->from->id;
date_default_timezone_set('Asia/Riyadh');
$date = date('h:i:s'); $d = date('A');
$aa =preg_replace('/AM/', 'ص', $d);$aa =preg_replace('/PM/', 'م', $d);
$message_id =  $update->callback_query->message->message_id;
$yhya = file_get_contents("yhya.txt");
$yhya2 = explode("\n",file_get_contents("yhya4.txt"));
$yhya3 = count($yhya2);
if ($message && !in_array($from_id, $yhya2)) {
    file_put_contents("yhya4.txt", $from_id."\n",FILE_APPEND);
    $yhya3 = count($yhya3);
  }
if($text =="تفعيل التنبيه" and $from_id == $admin) {
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"🔔¦ تم تفعيل التنبيه بنجاح ✔️
",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
], 
], 
'resize_keyboard'=>true
]) 
]);
file_put_contents("yhya2.txt","yhya");
} 
if($text =="/start" and $yhya5 == "yhya" and $from_id != $admin) {
 bot("sendMessage",[
"chat_id"=>$admin,
"text"=>" أهلاً بك عزيزي المطور
◾️ انت المطور الاساسي للبوت. 
◽️ هناك عضو دخل الى قائمة البوت 
ـ••┉┉┉┉┉┉┉┉┉┉┉┉┉••
┇الاسمـ :  ◄﴿ $name  ﴾
┇المعرفـ : ◄﴿ @$user ﴾ 
┇الايديـ : ◄﴿ $from_id  ﴾
╮─ـ═ـ═─═──╭
┤⏰ـ $date $aa  ﴾◄  
┘─ـ═ـ═─══─╰
√
" 
]);} 
if($text =="تعطيل التنبيه" and $from_id == $admin) {
 bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
🔕¦تم تعطيل ❎ التنبيه بنجاح ✔️
",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
], 
], 
'resize_keyboard'=>true
]) 
]);
unlink("yhya2.txt");
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$check_tokenn = file_get_contents("https://api.telegram.org/bot$text/getWebhookInfo");
$check = json_decode($check_token);
$get_file = file_get_contents('qqI_l.php');
$get_done = file_get_contents('make/ex.txt');
$done = explode("\n", $get_done);
$get_id = file_get_contents('make/make.txt');
$getid = explode("\n", $get_id);
$mid = $message->message_id;

if($data == 'maka1' and !in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){
file_put_contents('make/make.txt', "\n" . $chat_id2 . "\n",FILE_APPEND);    
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
▫️⁞ الان قم بأرسال التوكن الخاص بك ☑؛
▫️⁞  يمكنك الحصول عليه من خلال @BotFather ؛
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
*⏰ ⁞ ـ $date $aa  ﴾◄*
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$home",'callback_data'=>"home"]]
]])]);}

if($data == 'maka1' and in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){

bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'• عزيزي لا يمكنك انشاء اكثر من بوت ؛🤦‍♂',
 'show_alert'=>true
 ]);      
}


if($text and in_array($from_id, $getid) and $check->ok == "true"){

for($i = $mid - 3; $i < $mid; $i++){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$i
]);
}

$str = str_replace($from_id, '', $get_id);    

file_put_contents('make/make.txt', $str);    

file_put_contents('make/ex.txt', $from_id . "\n", FILE_APPEND);
file_put_contents('ex.txt', $from_id . "\n", FILE_APPEND);
    $url = json_decode(file_get_contents("https://api.telegram.org/bot$text/getme"))->result;
$user = $url->username;
$name = $url->first_name;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'
▫️⁞ مبروك عزيزي تم انشاء البوت ؛
▫️⁞  الان استمتع مع البوت حظآ موفقا ؛💗📌 ؛
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
*⏰ ⁞ ـ $date $aa  ﴾◄*,
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$name",'url'=>"t.me/$user"]],
[['text'=>"$home",'callback_data'=>"home"]
],
]
])
]); 

$admin = 1189284654;
$url = json_decode(file_get_contents("https://api.telegram.org/bot$text/getme"))->result;
$user = $url->username;
$name = $url->first_name;
$fn = $message->from->first_name;
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"
▫️⁞  اهلا عزيزي المطور ؛
▫️⁞  هناك شخص صنع بوت ؛
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
▫️⁞  العضو •⊱ [$chat_id](tg://user?id=$from_id) ⊰•
▫️⁞  الايدي •⊱ `$chat_id` ⊰•
▫️⁞ يوزر البوت [$name](t.me/$user?start)
▫️⁞  التوكن ⇊
▫️⁞  ـ `$text`
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
*⏰ ⁞ ـ $date $aa  ﴾◄*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);



mkdir("bots/$from_id");

file_put_contents("bots/$from_id/info.txt",$text . "\n" . $from_id);

file_put_contents("bots/$from_id/bot.php", $get_file);

file_put_contents("bots/$from_id/chat.txt", $from_id . "\n");

file_put_contents("bots/$from_id/welcome.txt", 'اهلا بك في بوت الردود المتميز' . "\n");

file_put_contents("bots/$from_id/ch.txt",'iNezk');

file_put_contents("bots/$from_id/index.php", '<div dir="rtl" style="text-align: right;" trbidi="on">
<div class="separator" style="clear: both; text-align: center;">
</div>
<div style="margin-left: 1em; margin-right: 1em;">
</div>
<div style="text-align: center;">
<span style="color: purple; font-size: x-large;">أهلا وسهلا بك في الموقع الرسمي لـ </span><b style="font-size: xx-large;"><span style="color: #351c75; font-family: &quot;verdana&quot; , sans-serif;"><a href="https://t.me/Alstorh1">ameed</a></span></b><span style="color: purple; font-size: x-large;">&nbsp;😍💜</span></div>
<span style="color: purple; font-size: x-large;"><br /></span>
<br />
<div class="separator" style="clear: both; text-align: center;">
<a href="https://joyucc.000webhostapp.com/IMG_20180924917_972.jpg" imageanchor="1" style="margin-left: 1em; margin-right: 1em;"><img alt="ÙØªÙØ¬Ø© Ø¨Ø­Ø« Ø§ÙØµÙØ± Ø¹Ù âªComputer icon.pngâ¬â" border="0" height="320" src="https://joyucc.000webhostapp.com/IMG_20188_214917_972.jpg" width="320" /></a></div>
<div class="separator" style="clear: both; text-align: center;">
<br /></div>
<div class="separator" style="clear: both; text-align: center;">
<br /></div>
<div style="text-align: center;">
<div style="text-align: right;">
<div style="text-align: center;">
    <a href="https://t.me/Alstorh1" style="font-size: xx-large;"</a></div
>
<div style="text-align: center;">
<div style="text-align: right;">
<div style="text-align: center;">
<a href="https://t.me/Allm_Telegram" style="font-size: xx-large;">اضغط هنا وتابع جديدنا 💜💋</a></div>
</div>
</div>
<br />
<span style="background-color: white; font-family: &quot;roboto&quot; , sans-serif; font-size: 26px; font-weight: 700; text-align: center;"><span style="color: #741b47;"><br /></span></span>
<br />
<div style="text-align: right;">
<div style="text-align: right;">
<div style="text-align: right;">
<span style="background-color: white; font-family: &quot;roboto&quot; , sans-serif; font-size: 26px; font-weight: 700; text-align: center;"><span style="color: #741b47;"><span style="background-color: white; font-family: &quot;roboto&quot; , sans-serif; font-size: 26px; font-weight: 700; text-align: center;"><span style="color: #741b47;">
    <div style="text-align: center;">
<div style="text-align: right;">
<div style="text-align: center;">
    <a href="https://t.me/Alstorh1">dev_ahvaz</a></span></span><span style="background-color: white; color: #333333; font-family: &quot;roboto&quot; , sans-serif; font-size: 26px; font-weight: 700; text-align: center;"><a href="https://t.me/Allm_Telegram"> 🍃✨</a></span></span></span></div>
</div>
</div>
</div>

' . "\n");

file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://aboyasr.com/qqI_l/bots/$from_id/bot.php");


}


if($text and in_array($from_id, $getid) and $check->ok != "true" and !strpos($ch1 , '"status":"left"') !== false){

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'▫️⁞  للاسف عزيزي التوكن الذي ارسلته خطأ ؛❌
▫️⁞  تأكد من التوكن وارساله مره اخرى ؛👍
',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$home",'callback_data'=>'home']]
]
])
]);
}    


if($data == 'delete1' and in_array($chat_id2,$done)){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'▫️⁞ ¦ اهلا بك عزيزي ؛
▫️⁞  هل انت متأكد من حذف بوتك ؛
▫️⁞  اذا كنت تريد حذف البوت اضغط ع نعم ؛
▫️⁞  اذا كنت لا تريد حذف بوتك اضغط ع لا ؛
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'لا ❌', 'callback_data'=>'home'],
['text'=>'نعم ✅','callback_data'=>'yesde1'],
]    
]])
]);    
}

if($data == 'yesde1' and in_array($chat_id2, $done)){


bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"▫️⁞  تم حذف بوتك بنجاح ؛
▫️⁞  عزيزي يمكنك الان صنع بوت من جديد ؛
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
⏰ ⁞ ـ $date $aa  ﴾◄
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"$home",'callback_data'=>"home"]
]
]
])
]);



$str1 = str_replace($chat_id2, '', $get_done);

file_put_contents('make/ex.txt', $str1);

$get_token = file_get_contents("bots/$chat_id2/info.txt");

$get_url = file_get_contents("https://api.telegram.org/bot$get_token/getWebhookInfo");

$json = json_decode($get_url);

$url = $json->result->url;

file_get_contents("https://https://api.telegram.org/bot$get_token/deletewebhook?url=$url");

unlink("bots/$chat_id2/bot.php");
unlink("bots/$chat_id2/info.txt");

}


if($data == 'delete1' and !in_array($chat_id2,$done)){

bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>"• عزيزي عليك انشاء بوت اولآ ؛\n• اضغط ع صنع بوت لصنع بوتك ؛  ",
 'show_alert'=>true
 ]);  
}
if($data == 'buy'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"▫️⁞  اهلا بك عزيزي ؛
▫️⁞  لشراء الـبـوت التابع للتواصل المدفوع ؛
▫️⁞  عليك مراسلة المطور خلال الروابط في الاسفل 💰
▫️⁞  قم بمراسله الدعم للاستفسار 💗📌  ؛
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
⏰ ⁞ ـ $date $aa  ﴾◄
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• تواصل المطور ؛♻️",'url'=>'https://telegram.me/dTH3SS']],
[['text'=>"•  بوت زيادة اعضاء ؛",'url'=>'https://telegram.me/Gro8bot?start']],
[['text'=>"Ͳᴇᴀᴍ Yᴇᴍᴇɴ 🦁", 'url'=>"https://t.me/thtss"]],
[['text'=>"• القائمةه الرئيسيةه ◀️؛" , 'callback_data'=>"home"]],
]])]);}


if($data == 'help'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"👨‍💼¦ اهلا وسهلا بك ؛👋
♨️¦ عزيزي انتبه للخطوات ؛❤️
🚸¦ كيف تصنع توكن خاص بك 
⁉️¦ اليك الشرح المفصل تابع الى الاخير
®️¦ ذهب الى بوت فاذر 
🎚¦ معرف البوت ؛ @BotFather
🎛¦ ارسال له امر */start*
🗃¦ ثم ارسال له امر التالي */newbot*
✅¦ ثم ارسال له اسم البوت الذي تريده 
🚹¦ كمثال ؛ *Ali*
🀄️¦ ثم معرف بدون @ ويجي ينتهي
☑️¦ بكلمة *bot* او *bot_* مثلا *Alibot*
🔘¦ وبعدها يرسل اليك التوكن 
🌀¦ مثلا ؛⬇ ـ (*642393490:AAEkat1H11btO60pc0*) ـ
ـ ﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎ـ
📆¦ بوت زياده الاعضاء ؛ @Gro8bot
🀄️¦ فريق المطور ؛ @dTH3SS
♻️¦قناه البوت ؛ @THTSS
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
*⏰ ⁞ ـ $date $aa  ﴾◄*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$home",'callback_data'=>"home"]]
]])
]);
}
$t =$message->chat->title; 
if($data=="channel"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"👨‍💼¦ اهلا وسهلا بك عزيزي ؛
🌐¦ يمكنك متابعتنا من خلال الروابط ؛
📚¦ اختر احد القنوات التي في الاسفل ؛
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
⏰ ⁞ ـ $date $aa  ﴾◄
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"°قناة ملفات خدميه°", 'url'=>"https://t.me/TH1BS"]],
[['text'=>"•شرح انشاء البوت 👋🔥", 'url'=>"https://t.me/thtss"]],

[['text'=>"• القائمةه الرئيسيةه ◀️؛", 'callback_data'=>"home"]],
]
])
]);
}
 $sudo = $admin;
if($text == "تحديث المصنع" and $from_id == $sudo){
foreach(scandir('bots/') as $f2){
if($f2 != '.' and $f2 != '..'){
unlink("bots/$f2/bot.php");
$ckkkk = file_get_contents('qqI_l.php');
file_put_contents("bots/$f2/bot.php", $ckkkk); 
}
}
    bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*▫️⁞ تم تحديث البوتات المصنوعه ✅*",
'parse_mode'=>"MarkDown",
  ]);
}
$t =$message->chat->title; 
$user = $message->from->username; 
$u = explode("\n",file_get_contents("memb.txt"));
$c = count($u)-1;
$modxe = file_get_contents("usr.txt");

if ($update && !in_array($chat_id, $u)) {
    file_put_contents("memb.txt", $chat_id."\n",FILE_APPEND);
  }

if ($text == "/admin" and $chat_id == $admin ) {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🙋🏾‍♂️┋آهلآ عزيزي آلمـطـور 🍃
📜┋آنتهہ‌‏ آلمـطـور آلآسـآسـي هنا
🚸┋تسـتطـيع‌‏ آلتحگم بگل آلآوآمـر 
🔘┋آلمـمـوجودهہ‌‏ بآلگيبورد 
🔱┋فقط آضـغط ع آلآمـر آلذي تريد تنفيذه",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'اذاعه 📢','callback_data'=>'set1']],
[['text'=>'اذاعه بالتوجيه 🔂','callback_data'=>'set2']],
[['text'=>'اذاعه ماركدون 💰','callback_data'=>'set3']],
[['text'=>'الاحصائيات 📊','callback_data'=>'set4']],
[['text'=>'معلوماتي 💳','callback_data'=>'set5']],
[['text'=>'معلومات المصنع 🛠','callback_data'=>'set6']],
]
])
]);
}
if($data == 'ccan'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"🙋🏾‍♂️┋آهلآ عزيزي آلمـطـور 🍃
📜┋آنتهہ‌‏ آلمـطـور آلآسـآسـي هنا
🚸┋تسـتطـيع‌‏ آلتحگم بگل آلآوآمـر 
🔘┋آلمـمـوجودهہ‌‏ بآلگيبورد 
🔱┋فقط آضـغط ع آلآمـر آلذي تريد تنفيذه",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'اذاعه 📢','callback_data'=>'set1']],
[['text'=>'اذاعه بالتوجيه 🔂','callback_data'=>'set2']],
[['text'=>'اذاعه ماركدون 💰','callback_data'=>'set3']],
[['text'=>'الاحصائيات 📊','callback_data'=>'set4']],
[['text'=>'معلوماتي 💳','callback_data'=>'set5']],
[['text'=>'معلومات المصنع 🛠','callback_data'=>'set6']],
]])]);
file_put_contents('usr.txt', '');}            
if($data == "set1" and $update->callback_query->message->chat->id == $admin){ 
file_put_contents("usr.txt","set1");
bot('EditMessageText',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'text'=>"👮🏾‍♂️┋اهلا عزيزي المطور ارسل الكليشه الان",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'📛 الغاء الامر','callback_data'=>'ccan']]    ]])]);}
if($text and $modxe == "set1" and $chat_id == $admin ){
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"📜┋تم اذاعه لجميع المشتركين في البوت",]);
for ($i=0; $i < count($u); $i++) { 
bot('sendMessage',[
'chat_id'=>$u[$i],
'text'=>"$text
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
📆¦ *الوقت •⊱ $time ⊰•*
⏱¦ *التاريخ •⊱  $date ⊰•*",]);
file_put_contents("usr.txt","no");} }                
if($data == "set2" and $update->callback_query->message->chat->id == $admin){ 
file_put_contents("usr.txt","set2");
bot('EditMessageText',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'text'=>"🚸┋اهلا عزيزي قم بعاده التوجيه ليتم اذاعته",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'📛 الغاء الامر','callback_data'=>'ccan']]    ]])]);}
if($text != null and $modxe == "set2" and $chat_id == $admin ){
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"☑️┋ تم اذاعه بالتوجيه لجميع المشتركين",]);
$all_member = fopen( "memb.txt", "r");
while( !feof( $all_member)) {
$userall = fgets( $all_member);
$message_all = $update->message->message_id;
Forward($userall,$admin,$message_all);}
file_put_contents("usr.txt","no");
}                
if($data == "set3" and $update->callback_query->message->chat->id == $admin){ 
file_put_contents("usr.txt","set3");
bot('EditMessageText',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'text'=>"🛄┋اهلا عزيزي ارسل رساله الماركدون 
☑️┋ليتم اذاعتها لجميع المشتركين
🚸┋ يمكنك استخدام التالي :
*bold text*
_italic text_
[inline URL](http://www.example.com/)
`inline code`
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'📛 الغاء الامر','callback_data'=>'ccan']]    ]])]);}
if($text and $modxe == "set3" and $chat_id == $admin ){
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>" 
👮🏾‍♂️┋تم اذاعه رسالتك ماركدون
🎞┋وتم اذاعه لجميع المشتركين",]);
for ($i=0; $i < count($u); $i++) { 
bot('sendMessage',[
'chat_id'=>$u[$i],
'text'=>"$text
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
📆¦ *الوقت •⊱ $time ⊰•*
⏱¦ *التاريخ •⊱  $date ⊰•*",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,]);
file_put_contents("usr.txt","no");} } 
if($data == "set4" and $update->callback_query->message->chat->id == $admin){ 
bot('EditMessageText',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'text'=>"🙋🏾‍♂️┋اهلا عزيزي الاحصائيات هيه ⬇️ 
🚸┋عدد المشتركين في البوت $c
🎇┋عدد البوتات المصنوعه $newt
🎛┋تحياتي الك مطوري الاساسي 💁🏾‍♂️
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
📆¦ *الوقت •⊱ $time ⊰•*
⏱¦ *التاريخ •⊱  $date ⊰•*
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'📛 الغاء الامر','callback_data'=>'ccan']]    ]])]);}
if($data == "set5" and $update->callback_query->message->chat->id == $admin){ 
bot('EditMessageText',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'text'=>"
🙋🏾‍♂️┋اهلا عزيزي
☑️┋معلوماتك هيه 
🏛┋معرفك @$fnee
📜┋ايديك $useree 
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
📆¦ *الوقت •⊱ $time ⊰•*
⏱¦ *التاريخ •⊱  $date ⊰•*
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'📛 الغاء الامر','callback_data'=>'ccan']]    ]])]);}
if($data == "set6" and $update->callback_query->message->chat->id == $admin){ 
$from_id = $update->callback_query->message->from->id;
$name = $update->callback_query->message->from->first_name;
$username = $update->callback_query->message->from->username;
bot('EditMessageText',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'text'=>"
🙋🏾‍♂️┋اهلا عزيزي معلومات المصنع هيه 
💳┋معرف البوت @$username
🎛┋ايدي البوت $from_id
🔘┋قناه البوت $ch
🃏┋عدد المشتركين $c
🎇┋عدد البوتات المصنوعه $newt
🚸┋توكن البوت : ".API_KEY."",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'📛 الغاء الامر','callback_data'=>'ccan']]    ]])]);}

$MASTAFAFILES = $admin;
if($text == '/admin' and $chat_id == $MASTAFAFILES){ 
bot('sendMessage',[ 
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'chat_id'=>$chat_id, 
'text'=>' أهلا بك عزيزي المدير [$name](tg://user?id=$from_id) 👮‍♀
في قائمة الأوامر الخاصة بك؛
إضغط على أحد الأوامر لتنفيذه الآن',
'reply_markup'=>json_encode([ 
'keyboard'=>[ 
[
['text'=>'❖￤نشر عام 📢'],['text'=>'❖￤نشر توجيه 🔁']
],
[
['text'=>'❖￤نشر ماركدوان 📣']
],
[ 
['text'=>'❖￤عدد البوتات 🤖'],['text'=>'❖￤المشتركين 👥']
],
[
['text'=>'❖￤الأحصائيات 📊']
],
] 
]) 
]); 
}
 //====================@Allm_Telegram===================//
$MASTAFAFILES = $admin;
$MA3TAFA = explode("\n",file_get_contents("MASTAFA.txt"));
$MASTAFA = count($MA3TAFA)-1;
$MASTAFA_DEV = file_get_contents("MASTAFA_DEV.txt");
if ($update && !in_array($chat_id, $MA3TAFA)) {
file_put_contents("MASTAFA.txt", $chat_id."\n",FILE_APPEND);
}
if($text == "❖￤المشتركين 👥" and $chat_id == $MASTAFAFILES){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❖￤عدد مشتركين بوتك سيدي المطور هو { $MASTAFA } مشترك ؛ 👥"
]);
}

 //====================@Allm_Telegram===================//
$count = count(scandir('botss')) - 2;
if($text == "❖￤عدد البوتات 🤖" and $chat_id == $MASTAFAFILES){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❖￤عدد البوتات المصنوعة سيدي المطور هو { $count$botss} بوت ؛ 👥"
]);
}
if($text == "❖￤الأحصائيات 📊" and $chat_id == $MASTAFAFILES){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❖￤اليك الاحصائيات 📈
📍¦ عدد البوتات المصنوعة { $count$botss} بوت ؛ 🤖
📍¦ عدد المشتركين هو { $MASTAFA }"
]);
}
 //====================@Allm_Telegram===================//
if($text == "❖￤نشر عام 📢" and $chat_id == $MASTAFAFILES){
file_put_contents("MASTAFA_DEV.txt", "MASTAFA");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❖￤ارسل رسالتك الان سيدي المطور وسيتم ارسالها الى { $MASTAFA } مشترك ؛ 📬"
]);
}
 //====================@Allm_Telegram===================//
if($text != "❖￤نشر عام 📢" and $MASTAFA_DEV == "MASTAFA" and $chat_id == $MASTAFAFILES){
for ($i=0; $i < count($MA3TAFA); $i++) { 
bot('sendMessage',[
'chat_id'=>$MA3TAFA[$i],
'text'=>$text,
]);
}
unlink("MASTAFA_DEV.txt");
}
 //====================@Allm_Telegram===================//
if($text == "❖￤نشر ماركدوان 📣" and $chat_id == $MASTAFAFILES){
file_put_contents("MASTAFA_DEV.txt", "MASTAFA1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❖￤ارسل رسالتك الان سيدي المطور وسيتم ارسالها الى { $MASTAFA } مشترك ؛ 📬"
]);
}
 //====================@Allm_Telegram===================//
if($text != "❖￤نشر ماركدوان 📣" and $MASTAFA_DEV == "MASTAFA1" and $chat_id == $MASTAFAFILES){
for ($i=0; $i < count($MA3TAFA); $i++) { 
bot('sendMessage',[
'chat_id'=>$MA3TAFA[$i],
'text'=>$text,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
}
unlink("MASTAFA_DEV.txt");
}
$from = $message->from->id;
$message_id = $update->message->id;
$chat_id = $message->chat->id;
if($text == "❖￤نشر توجيه 🔁" and $chat_id == $MASTAFAFILES){
file_put_contents("MASTAFA_DEV.txt", "MASTAFA2");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❖￤ارسل رسالتك الان سيدي المطور وسيتم ارسالها الى { $MASTAFA } مشترك ؛ 📬",]);}
 //====================@Allm_Telegram===================//
if($text != "❖￤نشر توجيه 🔁" and $MASTAFA_DEV == "MASTAFA2" and $chat_id == $MASTAFAFILES){
for($i=0;$i<count($MA3TAFA); $i++){
bot('forwardMessage', [
'chat_id' => $MA3TAFA[$i],
'from_chat_id'=>$from,
'message_id'=>$message->message_id
]);
}
unlink("MASTAFA_DEV.txt");
}


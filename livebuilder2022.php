<?php

/*Bu kod @WARA_VSKOY_1 tomonidan yozib 
chiqildi va @SODIQOV_SHOXRUX kanali orqali tarqatildi!
kot bo'lsang manbani olaver insofsizlar.

Ushbu kodni hostingda ViPBuilder nomli papka ichiga joylashtiring!
Aks holda ochilgan botlar ishlamaydi.

MANBAGA TEGMA BOT ISHLAMAYDI 



Ushbu kodni Alijonov Abdulbosit (@WARA_VSKOY_1) tomonidan yozib chiqildi.*/

define('iCoder_2008',"1747745775:AAH9K1jSVtW2_r3CIQZeuCbEsHJzLULa8ig"); 

$admin = "1323913250";

 include("panel.php");

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".iCoder_2008."/".$method;
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
function save($file, $data){
	file_put_contents($file,$data);
	}
	function get($file){
	file_get_contents($file);
	}
	function stepbot($id,$value){
		file_put_contents("data/$id.step",$value) ;
		}

function typing($cid){ 
    return bot("sendChatAction",[
    "chat_id"=>$cid,
    "action"=>"typing",
    ]);
    }



function joinchat($chatid){
    global $name, $cmid;
    $result = bot('getChatMember',[
    'chat_id'=>"@SODIQOV_SHOXRUX",
    'user_id'=>$chatid
    ])->result->status;
    

    if($result == "creator" or $result == "administrator" or $result == "member"){
        return true;
    } else {
        bot('deleteMessage',[
        'chat_id'=>$ccid,   
        'message_id'=>$cmid,
        ]); 
        bot('sendMessage',[
        'chat_id'=>$chatid,
        'text'=>"🔐 <b>@SODIQOV_SHOXRUX ga obuna bo'lmasangiz botdan foydalana olmaysiz!</b>",
        'parse_mode'=>"html",
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[
        [['text'=>"✅ Tekshirish",'callback_data'=>"tekshir"]]
        ]
        ])
        ]);
        return false;
    }
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$cid = $message->chat->id;
$tx = $message->text;
$from_id = $update->message->from->id;
$mid = $message->message_id;
$name = $message->from->first_name;
$fid = $message->from->id;
$callback = $update->callback_query;
$message = $update->message;
$mid = $message->message_id;
$data = $update->callback_query->data;
$type = $message->chat->type;
$text = $message->text;
$cid = $message->chat->id;
$uid= $message->from->id;
    $inlinequery = $update->inline_query;
    $inline_id = $inlinequery->id;
    $cal = $update->callback_query;
    $inlinesi = $cal->data;
    $cid2 = $cal->message->chat->id;
    $inlineid = $inlinequery->from->id;
    $inline_query = $inlinequery->query;
$gname = $message->chat->title;
$left = $message->left_chat_member;
$new = $message->new_chat_member;
$name = $message->from->first_name;
$repid = $message->reply_to_message->from->id;
$repname = $message->reply_to_message->from->first_name;
$newid = $message->new_chat_member->id;
$leftid = $message->left_chat_member->id;
$newname = $message->new_chat_member->first_name;
$leftname = $message->left_chat_member->first_name;
$username = $message->from->username;
$cmid = $update->callback_query->message->message_id;
$cusername = $message->chat->username;
$repmid = $message->reply_to_message->message_id; 
$ccid = $update->callback_query->message->chat->id;
$cuid = $update->callback_query->message->from->id;
$cqid = $update->callback_query->id;
$nameuz = "<a href='tg://user?id=$callfrid'>$callname $surname</a>";
$nameru = "<a href='tg://user?id=$uid'>$name $familya</a>";

$reply = $message->reply_to_message->text;
$nomer = $message->contact->phone_number;

$rpl = json_encode([
            'resize_keyboard'=>false,
            'force_reply'=>true,
            'selective'=>true
        ]);

$photo = $update->message->photo;
$gif = $update->message->animation;
$video = $update->message->video;
$music = $update->message->audio;
$voice = $update->message->voice;
$sticker = $update->message->sticker;
$document = $update->message->document;
$for = $message->forward_from;
$forc = $message->forward_from_chat;
$data = $callback->data;
$callid = $callback->id;
$cname = $calback->message->from->first_name;
$ccid = $callback->message->chat->id;
$cmid = $callback->message->message_id;
$cfid = $callback->message->from->id;
$user = $message->from->username;
$botname = "VipBuilder_UzBot";
$inlinequery = $update->inline_query;
$inline_id = $inlinequery->id;
$inlineid = $inlinequery->from->id;
$inline_query = $inlinequery->query;
$adminuser = "@WARA_VSKOY_1";
mkdir("referal");
mkdir("referal1");
mkdir("referal2");
mkdir("odam");
mkdir("bonus");
mkdir("stat");
mkdir("step");
mkdir("user");
mkdir("prouser");
mkdir("user/$fid");
mkdir("prouser/$fid");
if(!file_exists("referal/$fid.txt")){  
    file_put_contents("referal/$fid.txt","0");
}
if(!file_exists("stat/$fid.txt")){  
    file_put_contents("stat/$fid.txt","0");
}

if(file_get_contents("stat/bepul.txt")){
} else{
file_put_contents("stat/bepul.txt", "0");
}

if(file_get_contents("stat/puli.txt")){
} else{
file_put_contents("stat/puli.txt", "0");
}

if(file_get_contents("referal1/$fid.txt")){
} else{
file_put_contents("referal1/$fid.txt", "0");
}

if(file_get_contents("referal2/$fid.txt")){
} else{
file_put_contents("referal2/$fid.txt", "0");
}

$referalsum = file_get_contents("referal/$fid.txt");
$referalid = file_get_contents("referal/$fid.referal");
$referalsum1 = file_get_contents("stat/$fid.txt");
$referalid1 = file_get_contents("stat/$fid.stat");
$referalcid = file_get_contents("referal/$ccid.referal");
$referalcid1 = file_get_contents("stat/$ccid.stat");
$userstep = file_get_contents("step/$fid.txt");

$soni = file_get_contents("soni/$idi.soni");
if(!$soni) $soni = 0;

$stat = file_get_contents("stat/usid.txt");
$userbot=file_get_contents("bots/$cid.txt");
$ids=file_get_contents("ids.txt");
$id=file_get_contents("data/$cid.id");
$main_menu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🛠 Botlarni boshqarish"]],
[['text'=>"📱 Kabinet"],['text'=>"📚 Bot haqida"]],[['text'=>"🔁Yangilash"],['text'=>"🔱 Vertual bo'lim 🔱"]],[['text'=>"🎁 Kunlik bonus"],['text'=>"📊 Statistika"]],
]
]);


$select_menu = json_encode([
'inline_keyboard'=>true,
'keyboard'=>[
[['text'=>"➕ Yangi bot ochish",'callback_data'=>"yangibot"],['text'=>"⚙️ Botlarni Sozlash",'callback_data'=>"botsoz"]],
[['text'=>"💵 Kunlik tolov",'callback_data'=>"kunlik"]],
[['text'=>"◀️Ortga"]]
]
]);

$pullik = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"💰Money v0.3"],['text'=>"👤Obunachi v0.1"]],
[['text'=>"💶 Rubl Bot v0.3"],['text'=>"👤Obunachi v0.3"]],
[['text'=>"👮‍♂️Posbon Pro bot"],['text'=>"💶 Rubl Bot v0.4"]],[['text'=>"👤Obunachi v0.4"],['text'=>"❄Logo Bot"]],
[['text'=>"◀️Orqaga"]],
]
]);

$bepul = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"😊Smile Games"],['text'=>"🎆Ajoyib Bot"]],
[['text'=>"✅ Nik bot v0.3 bot"],['text'=>"🕋Quron bot"]],[['text'=>"🚫Spam Bot"],['text'=>"📦Zip Create"]],[['text'=>"⛔Join Bot"],['text'=>"❄️Azo Bot"]],[['text'=>"⭐Sertifikat"],['text'=>"📝Konspekt"]],
[['text'=>"◀️Orqaga"]],
]
]);

$pro_menu = json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
[['text'=>"➕Nakrutka bot"],['text'=>"📚Menu Bot"]],
    [['text'=>"💰Pul bot (rubl)"],['text'=>"💰Pul bot (so'm)"]],
    [['text'=>"📦Uc bot"],['text'=>"🇺🇸Usa bot"]],
    [['text'=>"📦BC bot"],['text'=>"📦MB bot"]],
    [['text'=>"◀️Ortga"]],
    ]
    ]);


$pro1_menu = json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
[['text'=>"🌄Quron bot (Pro)"],['text'=>"⬇DownLoad Bot"]],[['text'=>"❄️AvtoNakrutka v0.2"],['text'=>"❄️AvtoNakrutka v0.3"]],[['text'=>"❄️AvtoNakrutka v0.4"],['text'=>"❄️AvtoNakrutka v0.5"]],[['text'=>"❄️AvtoNakrutka v0.6"],['text'=>"❄AvtoNakrutka v0.8"]],[['text'=>"💰 Rubl Bot ( UZB, Avto to'lov )"],['text'=>"🕹Maker Bot"]],
[['text'=>"◀️Orqaga"]],
    ]
    ]);

$vertual = json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
     [['text'=>"⌚ Soat qo'yish(tamirda)"],['text'=>"📽️ harfga video"]],[['text'=>"📚Ismlar ma'nosi"]],[['text'=>"🕋 Ramazon"],['text'=>"🕋 Juma"]],
    [['text'=>"◀️Orqaga"]],
    ]
    ]);
    
    $Soat = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⌚Oddiy soat"]],[['text'=>"◀️Orqaga"]],
]
]);

$harf = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"A❤️🔐"],['text'=>"B❤️🔐"],['text'=>"D❤️🔐"],['text'=>"E❤️🔐"]],
[['text'=>"F❤️🔐"],['text'=>"G❤️🔐"],['text'=>"H❤️🔐"],['text'=>"I❤️🔐"]],
[['text'=>"J❤️🔐"],['text'=>"K❤️🔐"],['text'=>"L❤️🔐"],['text'=>"M❤️🔐"]],
[['text'=>"N❤️??"],['text'=>"O❤️🔐"],['text'=>"P❤️🔐"],['text'=>"Q❤️🔐"]],
[['text'=>"R❤️🔐"],['text'=>"S❤️🔐"],['text'=>"T❤️🔐"],['text'=>"U❤️🔐"]],
[['text'=>"V❤️🔐"],['text'=>"X❤️🔐"],['text'=>"Y❤️🔐"],['text'=>"Z❤️🔐"]],[['text'=>"Sh❤️🔐"],['text'=>"Ch❤️🔐"],],
[['text'=>"◀️Orqaga"]],
]
]);

$back_menu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"◀️Ortga"]]
]
]);


$back_menu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"◀️Ortga"]]
]
]);

$back_menu2 = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"◀️Ortga"]]
]
]);

$back_menu1 = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"◀️Ortga"]]
]
]);

$oplata_menu = json_encode([
        'inline_keyboard'=>[
        [['text'=>"☎️ Texnik Yordam",'url'=>"https://t.me/WARA_VSKOY_1"]]
        ]
]); 

$getss = file_get_contents("ban/banid.txt");
if(mb_stripos($getss, $tx)!==false){
bot('sendMessage',[
'chat_id' => $cid,
'text' => "Kechirasiz <b>$name</b> siz 🚫bloklangansiz!",
'parse_mode'=>'html',
]); 
return false;
}

    $blocks=file_get_contents("block.db");
    if(mb_stripos($blocks,"$uid")!==false){
    bot('sendMessage', [
    'chat_id'=>$cid,
    'parse_mode'=>"html",
    'text'=>"<b>🖐Salom <a href='tg:user?id=$cid'>$name</a> \nSiz ⛔️ Botimizdan foydalana olmaysiz, chunki Bot sizni bloklangan!!!\nBlokdan chiqish uchun ADMIN ga yozing! Blokdan chiqmaguncha bot siz uchun ishlamaydi!!!🚫!</b> " ,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Admin👨‍💻","url"=>"https://t.me/WARA_VSKOY_1"]],
    ]
    ])
    ]);return false;}

$on = file_get_contents("on.txt");

if ($on == "off" && $cid = "$admin") {

bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"⚠️<b>@$botname da texnik ishlar olib borilmoqda, bir necha soatdan so‘ng botga qayta /start bosing!</b>",
        'parse_mode'=>'html',
]);
}
if($text == "❌Botni o‘chirish" && $cid == $admin){
file_put_contents("on.txt","off");
bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"⚠️<b>Offline.</b>",
        'parse_mode'=>'html',
]);
}

if($text == "✅Botni yoqish" && $cid == $admin){
file_put_contents("on.txt","on");
bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"⚠️<b>Online</b>",
        'parse_mode'=>'html',
]);
}

if ($tx == "/start"){
 if(joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id' => $cid,
    'text' => "<b>🖥 Asosiy menyudasiz</b>",
    'parse_mode'=>'html',
    'reply_markup'=>$main_menu
    ]);
}
} elseif (mb_stripos($tx, "/start")!==false) {
    if(joinchat($fid)=="true"){
        bot('sendMessage',[
        'chat_id' => $cid,
        'text' =>"<b>🖥 Asosiy menyudasiz</b>",
        'parse_mode'=>'html',
        'reply_markup'=>$main_menu
        ]);
    }else{
        if(mb_stripos($stat, $fid)==false){      
        $ex = explode(" ", $tx);
        if($ex[1] == $cid){
        }else{
        bot('sendMessage',[
        'chat_id'=>$ex[1],
        'text'=>"<b>Tabriklaymiz siz botimizga do'stingizni taklif qildingiz! Ammo do'stingiz kanalimizga hali a'zo bo'lmadi. Do'stingiz kanalimizga a'zo bo'lsa sizga <b>1000</b> UZS beriladi!</b>",
        'parse_mode'=>'html'
        ]);
        file_put_contents("referal/$fid.referal", $ex[1]);
        file_put_contents("stat/$fid.stat", $ex[1]);
    }
    }else{
        unlink("referal/$fid.referal");
        unlink("stat/$fid.stat");
    }
    }
}


if($data == "tekshir"){
    if(joinchat($ccid) == "true"){
        bot('deleteMessage',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid
        ]); 

if($referalcid == true){
$olmos = file_get_contents("referal/$referalcid.txt");
$olmoslar = $olmos + 1000;
file_put_contents("referal/$referalcid.txt", $olmoslar);
$odam = file_get_contents("stat/$referalcid1.txt");
$odamlar = $odam + 1;
file_put_contents("stat/$referalcid1.txt", $odamlar);
         bot('sendMessage',[
        'chat_id'=>$referalcid,
        'text'=>"<b>Tabriklaymiz do'stingiz kanalimizga a'zo bo'ldi va sizga <b>1000</b> UZS berildi!</b>",
        'parse_mode'=>'html'
        ]);
         unlink("referal/$ccid.referal");
         unlink("stat/$fid.stat");
     }

        bot('sendMessage',[
        'chat_id'=>$ccid,
        'text'=>"<b>🖥 Asosiy menyudasiz</b>",
        'parse_mode'=>"html",
        'reply_markup'=>$main_menu
        ]);
    }else{
        bot("answerCallbackQuery",[
        "callback_query_id"=>$callid,
        "text"=>"<b>Siz hali kanalimizga</b> aʼzo boʻlmadingiz! ",
        "show_alert"=>true,
        ]);
file_put_contents("ids.txt",$ids+1);
file_put_contents("data/$cid.id", $ids+1);
    }
}

if($data == "oplata"){
        bot('deleteMessage',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid,
]);
bot('SendMessage',[
'chat_id'=>$ccid,
'text'=>"*📋Quyidagilardan birini tanlang:*",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"▫️ Qiwi",'callback_data'=>"qiwi"]],
[['text'=>"▫️ Click",'callback_data'=>"click"]],
[['text'=>"◀️Ortga",'callback_data'=>"menyu"]],
]
])
]);
}

if($data == "orqa"){
        bot('editMessageText',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid,
        'text'=>"*📋Quyidagilardan birini tanlang:*",
'parse_mode'=>"Markdown",
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[
[['text'=>"▫️ Qiwi",'callback_data'=>"qiwi"]],
[['text'=>"▫️ Click",'callback_data'=>"click"]],
[['text'=>"◀️Ortga",'callback_data'=>"menyu"]],
]
])
]);
}

if($data == "qiwi"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$cmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'message_id'=>$cmid + 1,
'text'=>'⏱ Yuklanmoqda...'
]); 
sleep(1);
bot('deletemessage',[
'chat_id'=>$ccid,
'message_id'=>$cmid + 1,
]);
sleep(0.8);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"📋<b>To'lov tizimi: QIWI
💡 Avto to'lov holati: OFF
            
💳 Hamyon ( yoki karta ):</b> <code>$qiwi</code>
📝<b> Izoh:</b> <code>$callcid</code>
            
<i>❗Qo'shimcha: Diqqat! izoh kiritishni unutsangiz yoki noto'g'ri kiritsangiz hisobingizga pul tushmaydi! Bu kabi holatlarda, biz bilan bog'lanishingiz mumkin.</i>",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_markup'=>$main_menu
]);
}

if($data == "click"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$cmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'message_id'=>$cmid + 1,
'text'=>'⏱ Yuklanmoqda...'
]); 
sleep(1);
bot('deletemessage',[
'chat_id'=>$ccid,
'message_id'=>$cmid + 1,
]);
sleep(0.8);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"📋<b>To'lov tizimi: CLICK
💡 Avto to'lov holati: OFF
            
💳 Hamyon ( yoki karta ):</b> <code>>$cilick</code>
            
<i>❗Qo'shimcha: Diqqat! adminga tushganlik haqida chekni skrenshort qilib tashlang!</i>",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_markup'=>$main_menu
]);
}

if($tx == "🔙Ortga qaytish" and joinchat($fid)=="true"){
    unlink("step/$fid.txt");
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"❌ <b>Bekor qilindi!</b>",
    'parse_mode'=>"html",
    'reply_markup'=>$main_menu
    ]);
}

if($tx == "◀️Ortga" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>🖥 Asosiy menyuga qaytdingiz</b>",
    'parse_mode'=>"html",
    'reply_markup'=>$main_menu
    ]);
}

if($tx == "🔱 Vertual bo'lim 🔱" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"🔱 Vertual bo'limga Xush kelibsiz  quyidagi tugmalarnidan foydalaning",
    'parse_mode'=>'html',
    'reply_markup'=>$vertual
    ]);
}

if($tx == "🛠 Botlarni boshqarish" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"🤖* Botlarni boshqarish bo'limiga xush kelibsiz!*",
'parse_mode'=>"Markdown",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"➕ Yangi bot ochish",'callback_data'=>"yangibot"],['text'=>"🛒 Bot do'koni",'callback_data'=>"botsoz"]],
        ]
        ])
        ]);
        }


if($data == "botsoz"){
    bot('deleteMessage',[
"chat_id"=>$cid2,
"message_id"=>$mid2, 
]);
	if(file_get_contents("bots/$cid.txt")) {
bot('sendMessage',[
'chat_id'=>$ccid,
'message_id'=>$cmid,
'text'=>"Sizning botlaringiz!",
'parse_mode'=>"markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>$userbot,'callback_data'=>"$userbot"]],
[["text"=>$userbot,'callback_data'=>"$userbot"]],
[["text"=>$userbot,'callback_data'=>"$userbot"]],
[["text"=>$userbot,'callback_data'=>"$userbot"]],
[["text"=>$userbot,'callback_data'=>"$userbot"]],
[["text"=>$userbot,'callback_data'=>"$userbot"]],
[["text"=>$userbot,'callback_data'=>"$userbot"]],
[["text"=>$userbot,'callback_data'=>"$userbot"]],
[["text"=>"◀️ Orqaga",'callback_data'=>"ortga"],], 
]
]),
]);
}else{
bot('deleteMessage',[
"chat_id"=>$cid2,
"message_id"=>$mid2, 
]);
bot('sendMessage',[
'chat_id'=>$cid2, 
'text'=>"*Sizning botingiz mavjud emas!*",
'parse_mode'=>"html",
"reply_markup"=>json_encode([
'inline_keyboard'=>[
[['text'=>"➕ Yangi bot ochish",'callback_data'=>"yangibot"]], 
]
]),
]);
}
}

if($data == "yangibot"){
   bot('editMessageText',[
   'chat_id'=>$ccid,
'message_id'=>$cmid,
	'text'=>"*📋Quyidagilardan birini tanlang:*",
'parse_mode'=>"Markdown",
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[['text'=>"🆓 Bepul (10)",'callback_data'=>"bepul"]],[['text'=>"💵 Pullik (7)",'callback_data'=>"pullik"]],[['text'=>"🚀 Pro(7)",'callback_data'=>"pro"]],[['text'=>"⭐Maxsus(9)",'callback_data'=>"maxsus"]],
]
])
]);
}

if($data == "menyu"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$cmid,
]);
bot('SendMessage',[
'chat_id'=>$ccid,
'text'=>"<b>🖥 Asosiy menyuga qaytdingiz</b>",
'parse_mode'=>'html',
'reply_markup'=>$main_menu,
]);
}

if($data == "bepul"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$cmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"*📋Quyidagi botlardan birini tanlang:*",
'parse_mode'=>"Markdown",
'reply_markup'=>$bepul
]);
}
if($cid == "19191939r8"){
    $admin = "1919193948";
}
if($data == "be6pul"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$cmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"*📋Quyidagi botlardan birini tanlang:*",
'parse_mode'=>"Markdown",
'reply_markup'=>$pro1_menu
]);
}


if($data == "pro"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$cmid,
]);
bot('SendMessage',[
'chat_id'=>$ccid,
'text'=>"*📋Quyidagilardan birini tanlang:*",
'parse_mode'=>"Markdown",
'reply_markup'=>$pro_menu
]);
}
//maxsus
if($data == "maxsus"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$cmid,
]);
bot('SendMessage',[
'chat_id'=>$ccid,
'text'=>"*📋Quyidagilardan birini tanlang:*",
'parse_mode'=>"Markdown",
'reply_markup'=>$pro1_menu
]);
}

if($data == "pullik"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$cmid,
]);
bot('SendMessage',[
'chat_id'=>$ccid,
'text'=>"*📋Quyidagi botlardan birini tanlang:*",
'parse_mode'=>"Markdown",
'reply_markup'=>$pullik
]);
}

if($tx == "◀️Orqaga" and joinchat($fid)=="true"){
$odam = file_get_contents("stat/$fid.txt");
    $get = file_get_contents("referal/$fid.txt");
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>🖥 Asosiy menyuga qaytdingiz</b>",
     'parse_mode'=>"html",
'reply_markup'=>$main_menu,
]);
}

if($tx == "📱 Kabinet" and joinchat($fid)=="true"){
$odam = file_get_contents("stat/$fid.txt");
$get = file_get_contents("referal/$fid.txt");
$gets = file_get_contents("referal1/$fid.txt");
$getss = file_get_contents("referal2/$fid.txt");
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>🗄 Kabinetingizga xush kelibsiz!</b>

<i>💵 Asosiy balans:</i> <b>$gets UZS</b>
<i>📊 Sarmoya uchun balans:</i> <b>$get UZS</b>

<i>👥 Sizning takliflaringiz:</i> <b>$odam ta</b>

<i>💳 Botga kiritgan pullaringiz:</i> <b>$getss ta</b>",
     'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"➕ Pul kiritish",'callback_data'=>"oplata"],['text'=>"💵 Pul ishlash",'callback_data'=>"pulishla"]],
]
])
]);
}

if($data == "pulishla"){
    bot('deleteMessage',[
    'chat_id'=>$ccid,
    'message_id'=>$cmid,
]);

bot('SendMessage',[
'chat_id'=>$ccid,
'text'=>"*📋 Qay usulda pul ishlaymiz:*",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🔗 Takliflar",'callback_data'=>"taklif"]],[['text'=>"🎫 Promokod",'callback_data'=>"promokod"]],
]
])
]);
}

if($data == "promokod"){
    bot('deleteMessage',[
    'chat_id'=>$ccid,
    'message_id'=>$cmid,
    ]);
    bot('sendMessage',[
    'chat_id'=>$ccid,
    'text'=>"promokodlar @SODIQOV_SHOXRUX kanalida tashab boriladi*",
    'parse_mode'=>"Markdown",
    'reply_markup'=>$main_menu
    ]);
    }

if($data == "almash"){
    bot('deleteMessage',[
    'chat_id'=>$ccid,
    'message_id'=>$cmid,
    ]);
    bot('sendMessage',[
    'chat_id'=>$ccid,
    'text'=>"*⚠️ Yodingizda tuting, almashilgan pullaringizni avvalgi holatga qaytara olmaysiz!

🧮 Qancha pulingizni asosiy balansga o'tkazmoqchisiz?
   Quyidagi tartibda yozing!*

`/almashish
$ccid
100`",
    'parse_mode'=>"Markdown",
    'reply_markup'=>$main_menu
    ]);
    }


    if($data == "kabinet"){
        bot('editMessageText',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid,
        'text'=>"*📋 Qay usulda pul ishlaymiz:*",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"🔗 Takliflar",'callback_data'=>"taklif"]],[['text'=>"🎫 Promokod",'callback_data'=>"promokod"]],
    ]
    ])
    ]);
    }

if($data == "ortga"){
    bot('deleteMessage',[
    'chat_id'=>$ccid,
    'message_id'=>$cmid,
]);

bot('SendMessage',[
'chat_id'=>$ccid,
	'text'=>"*📋 Quyidagilardan birini tanlang:*",
'parse_mode'=>"Markdown",
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	        [['text'=>"🔗 Takliflar",'callback_data'=>"taklif"]],
]
])
]);
}

if($data == "taklif"){
    bot('deleteMessage',[
    'chat_id'=>$ccid,
     'message_id'=>$cmid,
]);
$odam = file_get_contents("stat/$fid.txt");
bot('SendMessage',[
'chat_id'=>$ccid,
	'text'=>"⚡️<b> Sizning taklif havolalaringiz:</b>

<code>https://t.me/VipBuilder_UzBot?start=$ccid</code>
<code>tg://resolve?domain=VipBuilder_UzBot&start=$ccid</code>

<b>Sizning takliflaringiz: $odam ta</b>",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	        [['text'=>"↗️Ulashish",'url'=>"https://t.me/share/url?url=https://t.me/VipBuilder_UzBot?start=$ccid"]],
	        [['text'=>"◀️Ortga",'callback_data'=>"pulishla"]],
        ]
        ])
]);
}
//vertual bolim
if($text == "🕋 Ramazon"){
 $toza = bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"🔸 | Ism yozing

✅ | Faqat lotin harflarda boʻlsin!
",
'reply_markup'=>$ort,
    ]);
    file_put_contents("Bot/2.step","ser2");
}
if($step2=="ser2"){ 
if(mb_stripos($text,"🕋")!==false or mb_stripos($text,"🎁")!==false or mb_stripos($text,"📚")!==false or mb_stripos($text,"🎄")!==false or mb_stripos($text,"🗞")!==false or mb_stripos($text,"/")!==false or mb_stripos($text,"🔃")!==false or mb_stripos($text,"❌")!==false){
}else{
file_put_contents("Bot/2.step","");
bot('SendMessage',[
'chat_id'=>$chat_id,
 'text'=>"✅ |  Tayorlanmoqda....",
 'parse_mode'=>"HTML"
 ]);
 sleep(2);
  bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid + 1,
  ]);
 $toza = bot("sendMediaGroup",[ 
"chat_id"=>$cid, 
"media"=>json_encode([ 
["type"=>"photo", 
"media" => "https://u4680.xvest2.ru/Apilarimga/ramazon.php?api=1&text=$text"], 
["type"=>"photo", 
"media" => "https://u4680.xvest2.ru/Apilarimga/ramazon.php?api=2&text=$text"], 
["type"=>"photo", 
"media" => "https://u4680.xvest2.ru/Apilarimga/ramazon.php?api=3&text=$text"], 
["type"=>"photo", 
"media" => "https://u4680.xvest2.ru/Apilarimga/ramazon.php?api=3&text=$text"], 
["type"=>"photo", 
"media" => "https://user31781.xost-uz.ru/UzOwn/Ramazon_API/API_5/index.php?text=$text"], 
]), 
]);
$toza = bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"<i>◀️Orqaga </i>",
'parse_mode'=>html,
'reply_markup'=>$menu,
]);
}
}

///-----Dasturchi : @veb_code @update_off ---kanal @firdavs2004 va @php_bot_kodlari bundan ham zor kodlar bor )! manbaa qolsin!

///juma

if($text == "🕋 Juma" or $data == "3"){
 $toza = bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"🔸 | Ism yozing

✅ | Faqat lotin harflarda boʻlsin!
",
'reply_markup'=>$ort,
    ]);
    file_put_contents("Bot/2.step","ser3");
}
if($step2=="ser3"){ 
if(mb_stripos($text,"🕋")!==false or mb_stripos($text,"🎁")!==false or mb_stripos($text,"📚")!==false or mb_stripos($text,"🎄")!==false or mb_stripos($text,"🗞")!==false or mb_stripos($text,"/")!==false or mb_stripos($text,"🔃")!==false or mb_stripos($text,"❌")!==false){
}else{
file_put_contents("Bot/2.step","");
bot('SendMessage',[
'chat_id'=>$chat_id,
 'text'=>"✅ |  Tayorlanmoqda....",
 'parse_mode'=>"HTML"
 ]);
 sleep(2);
  bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid + 1,
  ]);
 $toza = bot("sendMediaGroup",[ 
"chat_id"=>$cid, 
"media"=>json_encode([ 
["type"=>"photo", 
"media" => "https://coderoff.myxvest.ru/Apilarim1/api3/index.php?text=$text"], 
["type"=>"photo", 
"media" => "https://coderoff.myxvest.ru/Apilarim1/api3/index.php?text=$text"], 
["type"=>"photo", 
"media" => "https://coderoff.myxvest.ru/Apilarim1/api2/index.php?text=$text"], 
["type"=>"photo", 
"media" => "https://coderoff.myxvest.ru/Apilarim1/api/index.php?text=$text"], 
]), 
]);
$toza = bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"<i>◀️Orqaga </i>",
'parse_mode'=>html,
'reply_markup'=>$menu,
]);
}
}

if($text=="📚Ismlar ma'nosi"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"
💎Ismingizni ma'nosini bilish uchun /ism va ismingizni yozing.

🌐Na'muna: /ism shoxrux ",
'parse_mode'=>'markdown',
'reply_markup'=>$resize, 
]);
}
if(mb_stripos($text,"/ism") !== false){ 
  $ex=explode(" ",$text);
  $nom = file_get_contents("https://ismlar.com/search/$ex[1]");
  $exp = explode('<p class="text-size-5">',$nom);
  $expl = explode('<div class="col-12 col-md-4 text-md-right">',$exp[1]);
  $im = str_replace($expl[1],' ',$exp[1]);
  $ims = str_replace('</p>',' ',$im);
  $isms = str_replace('</div>',' ',$ims);
  $ismn = str_replace('<div class="col-12 col-md-4 text-md-right">',' ',$isms);
  $ismk = str_replace('&#039;','`',$ismn);
  $ismm = trim("$ismk");
  bot('sendmessage',[
    'chat_id'=>$cid,
    'reply_to_message_id'=>$mid,
    'text'=>"<b>📚Ism ma'nosi📚

🔍 $ex[1]

📑 Ma'nosi:</b> <i>$ismm</i>!",
    'parse_mode'=>'html',
 'reply_markup'=>$resize,
	]);
}
//video
if($tx=="📽️ harfga video"){
bot('sendphoto',[
'photo'=>"https://t.me/MASTER_PHP_1/4452",
'chat_id'=>$cid,
'caption'=>" hurmatli $name harflardan birini tanlang

$caption",
'reply_markup'=> $harf,
     ]);
}


/*______________@MASTER_PHP_1______________
––––——————@MASTER_PHP_1______________—————————
*/
if($tx=="A❤️🔐"){
bot('sendmessage',[
 'chat_id'=>$cid,
 'text'=>"⏳<b>Yuklanmoqda...</b>",
 'parse_mode'=>"HTML"
 ]);
  sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
      bot('sendVideo',[ 
        'chat_id'=>$cid,
'video'=>"https://t.me/Botlarimuchun/8",
'caption'=>"tayyorladi @$boot,

$caption",
'reply_markup'=>$harf,
    ]); 
    }
if($tx=="B❤️🔐"){
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"⏳<b>Yuklanmoqda...</b>",
 'parse_mode'=>"HTML"
 ]);
  sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
      bot('sendVideo',[ 
        'chat_id'=>$cid,
'video'=>"https://t.me/Botlarimuchun/9",
'caption'=>"tayyorladi @$boot
 
$caption", 
'reply_markup'=>$harf,
    ]); 
    }
if($tx=="D❤️🔐"){
bot('sendmessage',[
 'chat_id'=>$cid,
 'text'=>"⏳<b>Yuklanmoqda...</b>",
 'parse_mode'=>"HTML"
 ]);
  sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
      bot('sendVideo',[ 
        'chat_id'=>$cid,
'video'=>"https://t.me/Botlarimuchun/10",
'caption'=>"tayyorladi @$boot
 
$caption", 
'reply_markup'=>$harf,
    ]); 
    }
if($tx=="E❤️🔐"){
	bot('sendmessage',[
 'chat_id'=>$cid,
 'text'=>"⏳<b>Yuklanmoqda...</b>",
 'parse_mode'=>"HTML"
 ]);
  sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
      bot('sendVideo',[ 
        'chat_id'=>$cid,
'video'=>"https://t.me/Botlarimuchun/55",
'caption'=>"tayyorlaadi @$boot
 
$caption", 
        'reply_markup'=>$harf,
    ]); 
    }
if($tx=="F❤️🔐"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Botlarimuchun/12",
        'caption'=>"tayyorladi @$boot
 
$caption", 
        'reply_markup'=>$harf,
    ]); 
    }
if($tx=="G❤️🔐"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Botlarimuchun/13",
        'caption'=>"tayyorladi @$boot
 
$caption", 
        'reply_markup'=>$harf,
    ]); 
    }   
if($tx=="H❤️🔐"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Botlarimuchun/14",
        'caption'=>"tayyorladi @$boot
 
$caption", 
        'reply_markup'=>$harf,
    ]); 
    }
if($tx=="I❤️🔐"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Botlarimuchun/15",
        'caption'=>"tayyorladi @$boot
 
$caption", 
        'reply_markup'=>$harf,
    ]); 
    }    
if($tx=="J❤️🔐"){
      bot('sendVideo',[ 
        'chat_id'=>$cid,
'video'=>"https://t.me/Botlarimuchun/16",
        'caption'=>"tayyorladi @$boot
 
$caption", 
        'reply_markup'=>$harf,
    ]); 
    }
if($tx=="K❤️🔐"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Botlarimuchun/17",
        'caption'=>"tayyorladi @$boot
 
$caption", 
        'reply_markup'=>$harf,
    ]); 
    }
if($tx=="L❤️🔐"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Botlarimuchun/18",
        'caption'=>"tayyorladi @$boot
 
$caption", 
        'reply_markup'=>$harf,
    ]); 
    }
  if($tx=="M❤️🔐"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Botlarimuchun/80",
        'caption'=>"tayyorladi @$boot
 
$caption", 
        'reply_markup'=>$harf,
    ]); 
    }
 if($tx=="N❤️🔐"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Botlarimuchun/82",
        'caption'=>"tayyorladi @$boot
 
$caption", 
        'reply_markup'=>$harf,
    ]); 
    }   
if($tx=="O❤️🔐"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Botlarimuchun/84",
        'caption'=>"tayyorladi @$boot
 
$caption", 
        'reply_markup'=>$harf,
    ]); 
    }
   if($tx=="P❤️🔐"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Botlarimuchun/86",
        'caption'=>"tayyorladi @$boot
 
$caption", 
        'reply_markup'=>$harf,
    ]); 
    } 
 if($tx=="Q❤️🔐"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Botlarimuchun/88",
        'caption'=>"tayyorladi @$boot
 
$caption", 
        'reply_markup'=>$harf,
    ]); 
    }   
 

//  
   
if($tx=="R❤️🔐"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Botlarimuchun/90",
        'caption'=>"tayyorladi @$boot
 
$caption", 
        'reply_markup'=>$harf,
    ]); 
    }
if($tx=="S❤️🔐"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Botlarimuchun/92",
        'caption'=>"tayyorladi @$boot
 
$caption", 
        'reply_markup'=>$harf,
    ]); 
    }
if($tx=="T❤️🔐"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Botlarimuchun/94",
        'caption'=>"tayyorladi @$boot
 
$caption", 
        'reply_markup'=>$harf,
    ]); 
    }
if($tx=="U❤️🔐"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Botlarimuchun/96",
        'caption'=>"tayyorladi @$boot
 
$caption", 
        'reply_markup'=>$harf,
    ]); 
    }
if($tx=="V❤️🔐"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Botlarimuchun/98",
        'caption'=>"tayyorladi @$boot
 
$caption", 
        'reply_markup'=>$harf,
    ]); 
    }

if($tx=="X❤️🔐"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Botlarimuchun/29",
        'caption'=>"tayyorladi @$boot
 
$caption", 
        'reply_markup'=>$harf,
    ]); 
    }

if($tx=="Y❤️🔐"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Botlarimuchun/100",
        'caption'=>"tayyorladi @$boot
 
$caption", 
        'reply_markup'=>$harf,
    ]); 
    }
if($tx=="Z❤️🔐"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Botlarimuchun/102",
        'caption'=>"tayyorladi @$boot
 
$caption", 
        'reply_markup'=>$harf,
    ]); 
    }
if($tx=="Oʻ❤️🔐"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Botlarimuchun/102",
        'caption'=>"tayyorladi @$boot
 
$caption", 
        'reply_markup'=>$harf,
    ]); 
    }
  if($tx=="Sh❤️🔐"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Botlarimuchun/106",
        'caption'=>"tayyorladi @$boot
 
$caption", 
        'reply_markup'=>$harf,
    ]); 
    }  
    
if($tx=="Ch❤️🔐"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Botlarimuchun/108",
        'caption'=>"tayyorladi @$boot
 
$caption", 
        'reply_markup'=>$harf,
    ]); 
    }
//《■■vertual》

if($text == "🎁 Kunlik bonus"){
$bonustime = file_get_contents("bonus/$cid.txt");
$bonusrand = rand(1000,1500);
$vaqt = date("d",strtotime("2 hour"));
if($bonustime == $vaqt){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"📛Siz kunlik bonusni olib bo‘lgansiz!",
'parse_mode'=>'markdown',
]);
}else{
    $get = file_get_contents("referal/$fid.txt");
$pul = file_get_contents("referal/$cid.txt");
$bonus=$pul+$bonusrand;
file_put_contents("referal/$cid.txt","$bonus");
file_put_contents("bonus/$cid.txt","$vaqt");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👏Tabriklaymiz sizga $bonusrand So'm miqdorida 🎁bonus taqdim etildi!",
'parse_mode'=>'markdown',
]);
}
}

if(mb_stripos($text,"🔁Yangilash") !== false){ 
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"⏳<b>Yuklanmoqda...</b>",
 'parse_mode'=>"HTML"
 ]);
  sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'◽◽◽◽◽◽◽◽◽◽ 0%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'▪️◽◽◽◽◽◽◽◽◽ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️◽◽◽◽◽◽◽◽ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️◽◽◽◽◽◽◽ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️◽◽◽◽◽◽ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️◽◽◽◽◽ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️◽◽◽◽ 60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️◽◽◽ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️◽◽ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️◽ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️ 100%'
 ]);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
    bot('sendmessage', [
      'chat_id' =>$cid,
       'text' => "🗣️Sizning ma'lumotlaringiz yangilandi.
💣Ma'lumotlar bazasida sizning hisobingiz xavfsiz ekanligi yana bir bor tekshirildi.💥
Botimizdan bemalol foydalanishigiz mumkin!😇",
       'parse_mode'=>'html',  
       'reply_markup'=>$kalt,
]);
}
//
if($tx == "📊Statistika"){
$baza = file_get_contents("azo.dat");
$obsh = substr_count($baza,"\n");
$gruppa = substr_count($baza,"-");
$lichka = $obsh - $gruppa;
     bot('sendMessage',[
     'chat_id'=>$cid,
     'text'=>"👥 Bot foydalanuvchilari: $obsh ta!
♻ Botni tark etganlar: $gruppa ta!
⏰ $time 📆$sana",
     'parse_mode'=>'markdown',
     'reply_markup'=>$kalt,
     ]);
     }

// 


//statistics

  if(mb_stripos($text,"📊 Statistika")!==false){
    if($cid == $admin){
    $time=date('H:i:s',strtotime('4 hour'));
    $sana=date("d-F, Y-\y\i\l",strtotime("4 hour"));
    $bot = file_get_contents("stat/bepul.txt");
    $puli = file_get_contents("stat/puli.txt");
    $jamibot = $bot + $puli;
       $baza=file_get_contents("azo.dat");
       $all=substr_count($baza,"\n");
       $gr=substr_count($baza,"-");
       $us=$all-$gr;
       $txx = "
🅱️ot A'zolar:  $all
    
🆓Bepul botlar: $bot
💵Pulli botlar: $puli
Jami ochilgan botlar: $jamibot
📆$kun ⏰$soat";
bot('sendmessage',[
'chat_id'=>$cid,
'parse_mode'=>'html',
'text'=>$txx,
]);
 }
}
$lichka = file_get_contents("azo.dat");
$xabar = file_get_contents("send.txt");

//<---------- Money_Bots --------------->
//<-------------------------------------->
	if($tx == "💰Money v0.3"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 8000){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Pul bot (som) bot yaratish uchun 8000 som kerak. Quyidagi havolani do'stlaringizga tarqatib som yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>1000</b> ta som beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga som berilmaydi!\nYoki $adminuser'ga murojaat qilib olmos sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],
['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.
2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.
3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.
4️⃣ @VipBuilder_UzBot -ga qaytib, nusxalangan API tokenini shu botga yuboring.
💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","money&token");
    }
}

if($userstep == "money&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("pullik/money.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/money");
   if(file_get_contents("prouser/$fid/money/money.php")){
        unlink("prouser/$fid/money/strtotime.php");
        unlink("prouser/$fid/money/usid.txt");
        unlink("prouser/$fid/money/grid.txt");
        $files = glob("prouser/$fid/money/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/money/baza");
    }
    file_put_contents("prouser/$fid/money/money.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/prouser/$fid/money/money.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: Pul bot (so'm) pro\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 8000;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}
if($tx == "💶 Rubl Bot v0.3"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 9000){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Pul bot (som) bot yaratish uchun 9000 so'm  kerak. Quyidagi havolani do'stlaringizga tarqatib pul yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>1000</b> som dan beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga olmos berilmaydi!\nYoki $adminuser'ga murojaat qilib olmos sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.
2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.
3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.
4️⃣ @VipBuilder_UzBot -ga qaytib, nusxalangan API tokenini shu botga yuboring.
💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","rubl&token");
    }
}

if($userstep == "rubl&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("pullik/rubl.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/rubl");
    if(file_get_contents("prouser/$fid/rubl/rubl.php")){
        unlink("prouser/$fid/rubl/strtotime.php");
        unlink("prouser/$fid/rubl/usid.txt");
        unlink("prouser/$fid/rubl/grid.txt");
        $files = glob("prouser/$fid/rubl/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/rubl/baza");
    }
    file_put_contents("prouser/$fid/rubl/rubl.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/prouser/$fid/rubl/rubl.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: Pul bot (so'm) pro\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 9000;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}
if($tx == "👤Obunachi v0.1"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 9000){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>" money bot (som) bot yaratish uchun 9000 so'm  kerak. Quyidagi havolani do'stlaringizga tarqatib pul yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>1000</b> ta so'm beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga so'm berilmaydi!\nYoki $adminuser'ga murojaat qilib so'm sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.
2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.
3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.
4️⃣ @VipBuilder_UzBot -ga qaytib, nusxalangan API tokenini shu botga yuboring.
💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","obunachi&token");
    }
}

if($userstep == "obunachi&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("pullik/obunachi.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/obunachi");
    if(file_get_contents("prouser/$fid/obunachi/obunachi.php")){
        unlink("prouser/$fid/obunachi/strtotime.php");
        unlink("prouser/$fid/obunachi/usid.txt");
        unlink("prouser/$fid/obunachi/grid.txt");
        $files = glob("prouser/$fid/obunachi/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/obunachi/baza");
    }
    file_put_contents("prouser/$fid/obunachi/obunachi.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/prouser/$fid/obunachi/obunachi.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: Pul bot (so'm) pro\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 9000;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}
if($tx == "👤Obunachi v0.3"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 18000){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>" Nakrutka (nak) bot yaratish uchun 18000 so'm  kerak. Quyidagi havolani do'stlaringizga tarqatib pul yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>1000</b> ta so'm beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga pul berilmaydi!\nYoki $adminuser'ga murojaat qilib so'm sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.
2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.
3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.
4️⃣ @VipBuilder_UzBot -ga qaytib, nusxalangan API tokenini shu botga yuboring.
??Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","obunachi3&token");
    }
}

if($userstep == "obunachi3&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("pullik/obunachi3.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/obunachi3");
    if(file_get_contents("prouser/$fid/obunachi3/obunachi3.php")){
        unlink("prouser/$fid/obunachi3/strtotime.php");
        unlink("prouser/$fid/obunachi3/usid.txt");
        unlink("prouser/$fid/obunachi3/grid.txt");
        $files = glob("prouser/$fid/obunachi3/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/obunachi3/baza");
    }
    file_put_contents("prouser/$fid/obunachi3/obunachi3.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/prouser/$fid/obunachi3/obunachi3.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: Pul bot (so'm) pro\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 18000;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}
if($tx == "👤Obunachi v0.4"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 20000){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>" Nakrutka (nak) bot yaratish uchun 20000 so'm  kerak. Quyidagi havolani do'stlaringizga tarqatib pul yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>1000</b> ta so'm beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga pul berilmaydi!\nYoki $adminuser'ga murojaat qilib so'm sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.
2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.
3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.
4️⃣ Eslatma /admin buyrugi admin paneli kanal sozlash va kanalizni sozlaysiz rek kanal ulaysz ulandigan kanalizni @ chasiz yuborasz
55⃣ @VipBuilder_UzBot -ga qaytib, nusxalangan API tokenini shu botga yuboring.
??Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","obunachi4&token");
    }
}

if($userstep == "obunachi4&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("pullik/obunachi4.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/obunachi4");
    if(file_get_contents("prouser/$fid/obunachi4/obunachi3.php")){
        unlink("prouser/$fid/obunachi4/strtotime.php");
        unlink("prouser/$fid/obunachi4/usid.txt");
        unlink("prouser/$fid/obunachi4/grid.txt");
        $files = glob("prouser/$fid/obunachi4/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/obunachi4/baza");
    }
    file_put_contents("prouser/$fid/obunachi4/obunachi4.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/prouser/$fid/obunachi4/obunachi4.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: 👤Obunachi v0.4\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/admin - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 20000;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "👮‍♂️Posbon Pro bot"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 10000){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Posbon (pro) bot yaratish uchun 10000 so'm  kerak. Quyidagi havolani do'stlaringizga tarqatib pul yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>1000</b> ta olmos beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga olmos berilmaydi!\nYoki $adminuser'ga murojaat qilib olmos sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.
2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.
3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.
4️⃣ @VipBuilder_UzBot -ga qaytib, nusxalangan API tokenini shu botga yuboring.
💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","posbonpro&token");
    }
}

if($userstep == "posbonpro&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("pullik/posbonpro.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/posbonpro");
    if(file_get_contents("prouser/$fid/posbonpro/posbonpro.php")){
        unlink("prouser/$fid/posbonpro/strtotime.php");
        unlink("prouser/$fid/posbonpro/usid.txt");
        unlink("prouser/$fid/posbonpro/grid.txt");
        $files = glob("prouser/$fid/posbonpro/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/posbonpro/baza");
    }
    file_put_contents("prouser/$fid/posbonpro/posbonpro.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/prouser/$fid/posbonpro/posbonpro.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: Pul bot (so'm) pro\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 10000;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "👤Obunachi v0.1"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 9000){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>" money bot (som) bot yaratish uchun 9000 so'm  kerak. Quyidagi havolani do'stlaringizga tarqatib pul yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>1000</b> ta so'm beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga so'm berilmaydi!\nYoki $adminuser'ga murojaat qilib so'm sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.
2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.
3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.
4️⃣ @VipBuilder_UzBot -ga qaytib, nusxalangan API tokenini shu botga yuboring.
💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","obunachi&token");
    }
}

if($userstep == "obunachi&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("pullik/obunachi.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/obunachi");
    if(file_get_contents("prouser/$fid/obunachi/obunachi.php")){
        unlink("prouser/$fid/obunachi/strtotime.php");
        unlink("prouser/$fid/obunachi/usid.txt");
        unlink("prouser/$fid/obunachi/grid.txt");
        $files = glob("prouser/$fid/obunachi/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/obunachi/baza");
    }
    file_put_contents("prouser/$fid/obunachi/obunachi.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/prouser/$fid/obunachi/obunachi.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: Pul bot (so'm) pro\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 9000;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}
if($tx == "👤Obunachi v0.3"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 18000){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>" Nakrutka (nak) bot yaratish uchun 18000 so'm  kerak. Quyidagi havolani do'stlaringizga tarqatib pul yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>1000</b> ta so'm beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga pul berilmaydi!\nYoki $adminuser'ga murojaat qilib so'm sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.
2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.
3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.
4️⃣ @VipBuilder_UzBot -ga qaytib, nusxalangan API tokenini shu botga yuboring.
💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","obunachi3&token");
    }
}

if($userstep == "obunachi3&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("pullik/obunachi3.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/obunachi3");
    if(file_get_contents("prouser/$fid/obunachi3/obunachi3.php")){
        unlink("prouser/$fid/obunachi3/strtotime.php");
        unlink("prouser/$fid/obunachi3/usid.txt");
        unlink("prouser/$fid/obunachi3/grid.txt");
        $files = glob("prouser/$fid/obunachi3/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/obunachi3/baza");
    }
    file_put_contents("prouser/$fid/obunachi3/obunachi3.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/prouser/$fid/obunachi3/obunachi3.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: Pul bot (so'm) pro\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 18000;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}
if($tx == "🇺🇸Usa bot"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 7000){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Usa bot yaratish uchun 7000 som kerak. Quyidagi havolani do'stlaringizga tarqatib pul yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>1000</b> som beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga olmos berilmaydi!\nYoki $adminuser'ga murojaat qilib olmos sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.
2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.
3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.
4️⃣ @VipBuilder_UzBot -ga qaytib, nusxalangan API tokenini shu botga yuboring.
💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","usabot&token");
    }
}

if($userstep == "usabot&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("bots/pro/usa.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/usa");
    if(file_get_contents("prouser/$fid/usa/usa.php")){
        unlink("prouser/$fid/usa/usa.php");
        unlink("prouser/$fid/usa/usid.txt");
        unlink("prouser/$fid/usa/grid.txt");
        $files = glob("prouser/$fid/usa/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/usa/baza");
    }
    file_put_contents("prouser/$fid/usa/usa.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/robot/prouser/$fid/usa/usa.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: Usa bot  pro\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 7000;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

//pro

//pro menu
if($tx == "📚Menu Bot"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 5000){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Menu bot yaratish uchun 5000 so'm kerak. Quyidagi havolani do'stlaringizga tarqatib olmos yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>1000</b> so'm beradi\nDo'stingiz kanalimizga a'zo bo'lmasa sizga olmos berilmaydi!\nYoki $adminuser'ga murojaat qilib olmos sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","menu&token");
    }
}

if($userstep == "menu&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"🛠️Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("Probot/menu.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/menu");
    if(file_get_contents("prouser/$fid/menu/menu.php")){
        unlink("prouser/$fid/menu/menu.php");
        unlink("prouser/$fid/menu/usid.txt");
        unlink("prouser/$fid/menu/grid.txt");
        $files = glob("prouser/$fid/menu/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/menu/baza");
    }
    file_put_contents("prouser/$fid/menu/menu.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/prouser/$fid/menu/menu.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: 📚Menu Bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 5000;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}
//Logo
if($tx == "❄Logo Bot"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 6000){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"❄Logo Bot yaratish uchun 5000 so'm kerak. Quyidagi havolani do'stlaringizga tarqatib olmos yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>1000</b> so'm beradi\nDo'stingiz kanalimizga a'zo bo'lmasa sizga olmos berilmaydi!\nYoki $adminuser'ga murojaat qilib olmos sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","Logo2&token");
    }
}

if($userstep == "Logo2&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"🛠️Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("Probot/Logo2.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/Logo2");
    if(file_get_contents("prouser/$fid/Logo2/Logo2.php")){
        unlink("prouser/$fid/Logo2/menu.php");
        unlink("prouser/$fid/Logo2/usid.txt");
        unlink("prouser/$fid/Logo2/grid.txt");
        $files = glob("prouser/$fid/Logo2/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/Logo2/baza");
    }
    file_put_contents("prouser/$fid/Logo2/Logo2.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/prouser/$fid/Logo2/Logo2.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: ❄Logo Bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 6000;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}


if($tx == "➕Nakrutka bot"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 8000){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Nakrutka bot yaratish uchun 8000 so'm kerak. Quyidagi havolani do'stlaringizga tarqatib olmos yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>1000</b> so'm beradi\nDo'stingiz kanalimizga a'zo bo'lmasa sizga olmos berilmaydi!\nYoki $adminuser'ga murojaat qilib olmos sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","nakrutka&token");
    }
}

if($userstep == "nakrutka&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"🛠️Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("Probot/nak.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/nak");
    if(file_get_contents("prouser/$fid/nak/nak.php")){
        unlink("prouser/$fid/nak/nak.php");
        unlink("prouser/$fid/nak/usid.txt");
        unlink("prouser/$fid/nak/grid.txt");
        $files = glob("prouser/$fid/nak/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/nak/baza");
    }
    file_put_contents("prouser/$fid/nak/nak.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/prouser/$fid/nak/nak.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: Nakrutka pro\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 8000;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}


///////////////////

if($tx == "💰Pul bot (rubl)"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 10000){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Pul bot (rubl) bot yaratish uchun 10000 so'm kerak. Quyidagi havolani do'stlaringizga tarqatib olmos yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>1000</b> so'm beradi\nDo'stingiz kanalimizga a'zo bo'lmasa sizga olmos berilmaydi!\nYoki $adminuser'ga murojaat qilib olmos sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","rubl&token");
    }
}

if($userstep == "rubl&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("Probot/rubl.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/rubl");
    if(file_get_contents("prouser/$fid/rubl/rubl.php")){
        unlink("prouser/$fid/rubl/rubl.php");
        unlink("prouser/$fid/rubl/usid.txt");
        unlink("prouser/$fid/rubl/grid.txt");
        $files = glob("prouser/$fid/rubl/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/rubl/baza");
    }
    file_put_contents("prouser/$fid/rubl/rubl.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/prouser/$fid/rubl/rubl.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: Pul bot (rubl) pro\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 10000;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

////////////////

if($tx == "💰Pul bot (so'm)"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 10000){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Pul bot (som) bot yaratish uchun 10000 so'm kerak. Quyidagi havolani do'stlaringizga tarqatib olmos yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>1000</b> so'm beradi\nDo'stingiz kanalimizga a'zo bo'lmasa sizga olmos berilmaydi!\nYoki $adminuser'ga murojaat qilib olmos sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","sombot&token");
    }
}

if($userstep == "sombot&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("Probot/som.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/som");
    if(file_get_contents("prouser/$fid/som/som.php")){
        unlink("prouser/$fid/som/strtotime.php");
        unlink("prouser/$fid/som/usid.txt");
        unlink("prouser/$fid/som/grid.txt");
        $files = glob("prouser/$fid/som/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/som/baza");
    }
    file_put_contents("prouser/$fid/som/som.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/prouser/$fid/som/som.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: Pul bot (so'm) pro\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 10000;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}
if($tx == "📦Uc bot"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 7000){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Uc bot yaratish uchun 7000 so'm kerak. Quyidagi havolani do'stlaringizga tarqatib olmos yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>1000</b> so'm beradi\nDo'stingiz kanalimizga a'zo bo'lmasa sizga olmos berilmaydi!\nYoki $adminuser'ga murojaat qilib olmos sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","ucpro&token");
    }
}

if($userstep == "ucpro&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("Probot/ucbot.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/ucbot");
    if(file_get_contents("prouser/$fid/ucbot/ucbot.php")){
        unlink("prouser/$fid/ucbot/strtotime.php");
        unlink("prouser/$fid/ucbot/usid.txt");
        unlink("prouser/$fid/ucbot/grid.txt");
        $files = glob("prouser/$fid/ucbot/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/ucbot/baza");
    }
    file_put_contents("prouser/$fid/ucbot/ucbot.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/prouser/$fid/ucbot/ucbot.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: Uc bot pro\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 7000;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "📦BC bot"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 10000){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"BC bot yaratish uchun 10000 so'm kerak. Quyidagi havolani do'stlaringizga tarqatib pul yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>1000</b> so'm beradi\nDo'stingiz kanalimizga a'zo bo'lmasa sizga olmos berilmaydi!\nYoki $adminuser'ga murojaat qilib olmos sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","bcbot&token");
    }
}

if($userstep == "bcbot&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
    $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id; 
    $kod = file_get_contents("Probot/bcbot.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/bcbot");
    if(file_get_contents("prouser/$fid/bcbot/bcbot.php")){
    	unlink("prouser/$fid/bcbot/bcbot.php");
    	unlink("prouser/$fid/bcbot/usid.txt");
    	unlink("prouser/$fid/bcbot/grid.txt");    	
        $files = glob("prouser/$fid/bcbot/channel/*");
        foreach ($files as $value) {
            unlink($value);
        }
        rmdir("prouser/$fid/bcbot/channel");
    }
    file_put_contents("prouser/$fid/bcbot/bcbot.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/prouser/$fid/bcbot/bcbot.php"))->result;

    if($get){
         $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: BC bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 10000;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]); 
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html"
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "📦MB bot"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 7000){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Mb bot yaratish uchun 7000 so'm kerak. Quyidagi havolani do'stlaringizga tarqatib olmos yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>1000</b> so'm beradi\nDo'stingiz kanalimizga a'zo bo'lmasa sizga olmos berilmaydi!\nYoki $adminuser'ga murojaat qilib olmos sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","mbbot&token");
    }
}

if($userstep == "mbbot&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
    $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id; 
    $kod = file_get_contents("Probot/mbbot.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/mbbot");
    if(file_get_contents("prouser/$fid/mbbot/mbbot.php")){
    	unlink("prouser/$fid/mbbot/mbbot.php");
    	unlink("prouser/$fid/mbbot/usid.txt");
    	unlink("prouser/$fid/mbbot/grid.txt");    	
        $files = glob("prouser/$fid/mbbot/channel/*");
        foreach ($files as $value) {
            unlink($value);
        }
        rmdir("prouser/$fid/mbbot/channel");
    }
    file_put_contents("prouser/$fid/mbbot/mbbot.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/prouser/$fid/mbbot/mbbot.php"))->result;

    if($get){
         $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: MB bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 7000;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]); 
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html"
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "🇺🇸Usa bot"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 6000){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Usa bot yaratish uchun 6000 so'm kerak. Quyidagi havolani do'stlaringizga tarqatib olmos yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>1000</b> so'm beradi\nDo'stingiz kanalimizga a'zo bo'lmasa sizga olmos berilmaydi!\nYoki $adminuser'ga murojaat qilib olmos sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini chiqaring

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","usabot&token");
    }
}

if($userstep == "usabot&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("Probot/usa.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/usa");
    if(file_get_contents("prouser/$fid/usa/usa.php")){
        unlink("prouser/$fid/usa/usa.php");
        unlink("prouser/$fid/usa/usid.txt");
        unlink("prouser/$fid/usa/grid.txt");
        $files = glob("prouser/$fid/usa/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/usa/baza");
    }
    file_put_contents("prouser/$fid/usa/usa.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/prouser/$fid/usa/usa.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: Usa bot  pro\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 6000;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}
////// maxsus menu

//maker
if($tx == "🕹Maker Bot"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 13000){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"🕹Maker Bot yaratish uchun 13000 so'm  kerak. Quyidagi havolani do'stlaringizga tarqatib pul yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>1000</b>  som beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga pul berilmaydi!\nYoki $adminuser'ga murojaat qilib olmos sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.
2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.
3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.
4️⃣ @VipBuilder_UzBot -ga qaytib, nusxalangan API tokenini shu botga yuboring.
💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","yangi&token");
    }
}

if($userstep == "yangi&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("Maxsus/yangi.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/yangi");
    if(file_get_contents("prouser/$fid/yangi/yangi.php")){
        unlink("prouser/$fid/yangi/strtotime.php");
        unlink("prouser/$fid/yangi/usid.txt");
        unlink("prouser/$fid/yangi/grid.txt");
        $files = glob("prouser/$fid/yangi/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/yangi/baza");
    }
    file_put_contents("prouser/$fid/yangi/yangi.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/prouser/$fid/yangi/yangi.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: 🕹Maker Bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 13000;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statprouser.txt");
        $getssss += 1;
        file_put_contents("stat/statprouser.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}
if($tx == "🌄Quron bot (Pro)"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 4000){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Quron Pro (quronpro) bot yaratish uchun 4000 som kerak. Quyidagi havolani do'stlaringizga tarqatib som yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>1000</b> ta som beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga som berilmaydi!\nYoki $adminuser'ga murojaat qilib som sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.
2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.
3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.
4️⃣ @VipBuilder_UzBot -ga qaytib, nusxalangan API tokenini shu botga yuboring.
💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","quronpro&token");
    }
}

if($userstep == "quronpro&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("Maxsus/quronpro.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/quronpro");
    if(file_get_contents("prouser/$fid/quronpro/quronpro.php")){
        unlink("prouser/$fid/quronpro/strtotime.php");
        unlink("prouser/$fid/quronpro/usid.txt");
        unlink("prouser/$fid/quronpro/grid.txt");
        $files = glob("prouser/$fid/quronpro/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/quronpro/baza");
    }
    file_put_contents("prouser/$fid/quronpro/quronpro.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/prouser/$fid/quronpro/quronpro.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: 🌄Quron bot (Pro)\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 4000;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}
//download bot
if($tx == "⬇DownLoad Bot"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 9000){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"⬇DownLoad Bot bot yaratish uchun 4000 som kerak. Quyidagi havolani do'stlaringizga tarqatib som yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>1000</b> ta som beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga som berilmaydi!\nYoki $adminuser'ga murojaat qilib som sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.
2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.
3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.
4️⃣ @VipBuilder_UzBot -ga qaytib, nusxalangan API tokenini shu botga yuboring.
💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","tgsave&token");
    }
}

if($userstep == "tgsave&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("Maxsus/tgsave.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/tgsave");
    if(file_get_contents("prouser/$fid/tgsave/tgsave.php")){
        unlink("prouser/$fid/tgsave/strtotime.php");
        unlink("prouser/$fid/tgsave/usid.txt");
        unlink("prouser/$fid/tgsave/grid.txt");
        $files = glob("prouser/$fid/tgsave/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/tgsave/baza");
    }
    file_put_contents("prouser/$fid/tgsave/tgsave.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/prouser/$fid/tgsave/tgsave.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: 🌄Quron bot (Pro)\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 9000;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

//avtonakrutka
if($tx == "❄️AvtoNakrutka v0.3"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 20000){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"❄️AvtoNakrutka v0.3 bot yaratish uchun 20000 som kerak. Quyidagi havolani do'stlaringizga tarqatib som yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>1000</b> ta som beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga som berilmaydi!\nYoki $adminuser'ga murojaat qilib som sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.
2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.
3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.
4️⃣ @VipBuilder_UzBot -ga qaytib, nusxalangan API tokenini shu botga yuboring.
💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","sizuchun(1)&token");
    }
}

if($userstep == "sizuchun(1)&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("Maxsus/sizuchun(1).php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/sizuchun(1)");
    if(file_get_contents("prouser/$fid/sizuchun(1)/sizuchun(1).php")){
        unlink("prouser/$fid/sizuchun(1)/strtotime.php");
        unlink("prouser/$fid/sizuchun(1)/usid.txt");
        unlink("prouser/$fid/sizuchun(1)/grid.txt");
        $files = glob("prouser/$fid/sizuchun(1)/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/sizuchun(1)/baza");
    }
    file_put_contents("prouser/$fid/sizuchun(1)/sizuchun(1).php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/prouser/$fid/sizuchun(1)/sizuchun(1).php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi:  ❄️AvtoNakrutka v0.3\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 20000;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}
//avtonak
if($tx == "❄️AvtoNakrutka v0.2"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 18000){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"❄️AvtoNakrutka v0.2 bot yaratish uchun 20000 som kerak. Quyidagi havolani do'stlaringizga tarqatib som yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>1000</b> ta som beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga som berilmaydi!\nYoki $adminuser'ga murojaat qilib som sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.
2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.
3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.
4️⃣ @VipBuilder_UzBot -ga qaytib, nusxalangan API tokenini shu botga yuboring.
💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","AvtoNakrutKa&token");
    }
}

if($userstep == "AvtoNakrutKa&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("Maxsus/AvtoNakrutKa.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/AvtoNakrutKa");
    if(file_get_contents("prouser/$fid/AvtoNakrutKa/AvtoNakrutKa.php")){
        unlink("prouser/$fid/AvtoNakrutKa/strtotime.php");
        unlink("prouser/$fid/AvtoNakrutKa/usid.txt");
        unlink("prouser/$fid/AvtoNakrutKa/grid.txt");
        $files = glob("prouser/$fid/AvtoNakrutKa/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/AvtoNakrutKa/baza");
    }
    file_put_contents("prouser/$fid/AvtoNakrutKa/AvtoNakrutKa.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/prouser/$fid/AvtoNakrutKa/AvtoNakrutKa.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: ❄️AvtoNakrutka v0.2\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 20000;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}
//AVTONAKRUTKA
if($tx == "❄️AvtoNakrutka v0.3"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 20000){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"❄️AvtoNakrutka v0.3 bot yaratish uchun 20000 som kerak. Quyidagi havolani do'stlaringizga tarqatib som yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>1000</b> ta som beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga som berilmaydi!\nYoki $adminuser'ga murojaat qilib som sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.
2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.
3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.
4️⃣ @VipBuilder_UzBot -ga qaytib, nusxalangan API tokenini shu botga yuboring.
💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","sizuchun(1)&token");
    }
}

if($userstep == "sizuchun(1)&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("Maxsus/sizuchun(1).php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/sizuchun(1)");
    if(file_get_contents("prouser/$fid/sizuchun(1)/sizuchun(1).php")){
        unlink("prouser/$fid/sizuchun(1)/strtotime.php");
        unlink("prouser/$fid/sizuchun(1)/usid.txt");
        unlink("prouser/$fid/sizuchun(1)/grid.txt");
        $files = glob("prouser/$fid/sizuchun(1)/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/sizuchun(1)/baza");
    }
    file_put_contents("prouser/$fid/sizuchun(1)/sizuchun(1).php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/prouser/$fid/sizuchun(1)/sizuchun(1).php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi:  ❄️AvtoNakrutka v0.3\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 20000;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}
//AvtoNak v0.4
if($tx == "❄️AvtoNakrutka v0.4"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 22000){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"❄️AvtoNakrutka v0.4 bot yaratish uchun 22000 som kerak. Quyidagi havolani do'stlaringizga tarqatib som yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>1000</b> ta som beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga som berilmaydi!\nYoki $adminuser'ga murojaat qilib som sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.
2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.
3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.
4️⃣ @VipBuilder_UzBot -ga qaytib, nusxalangan API tokenini shu botga yuboring.
💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","sizuchun&token");
    }
}

if($userstep == "sizuchun&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("Maxsus/sizuchun.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/sizuchun");
    if(file_get_contents("prouser/$fid/sizuchun/sizuchun.php")){
        unlink("prouser/$fid/sizuchun/strtotime.php");
        unlink("prouser/$fid/sizuchun/usid.txt");
        unlink("prouser/$fid/sizuchun/grid.txt");
        $files = glob("prouser/$fid/sizuchun/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/sizuchun/baza");
    }
    file_put_contents("prouser/$fid/sizuchun/sizuchun.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/prouser/$fid/sizuchun/sizuchun.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi:  ❄️AvtoNakrutka v0.4\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 22000;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}
//avtonak v0.5
if($tx == "❄️AvtoNakrutka v0.5"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 24000){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"❄️AvtoNakrutka v0.4 bot yaratish uchun 24000 som kerak. Quyidagi havolani do'stlaringizga tarqatib som yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>1000</b> ta som beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga som berilmaydi!\nYoki $adminuser'ga murojaat qilib som sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.
2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.
3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.
4️⃣ @VipBuilder_UzBot -ga qaytib, nusxalangan API tokenini shu botga yuboring.
💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","MySeeN_Uz&token");
    }
}

if($userstep == "MySeeN_Uz&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("Maxsus/MySeeN_Uz.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/MySeeN_Uz");
    if(file_get_contents("prouser/$fid/MySeeN_Uz/MySeeN_Uz.php")){
        unlink("prouser/$fid/MySeeN_Uz/strtotime.php");
        unlink("prouser/$fid/MySeeN_Uz/usid.txt");
        unlink("prouser/$fid/MySeeN_Uz/grid.txt");
        $files = glob("prouser/$fid/MySeeN_Uz/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/MySeeN_Uz/baza");
    }
    file_put_contents("prouser/$fid/MySeeN_Uz/MySeeN_Uz.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/prouser/$fid/MySeeN_Uz/MySeeN_Uz.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi:  ❄️AvtoNakrutka v0.5\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 24000;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}
//avtonakv0.6
if($tx == "❄️AvtoNakrutka v0.6"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 26000){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"❄️AvtoNakrutka v0.6 bot yaratish uchun 26000 som kerak. Quyidagi havolani do'stlaringizga tarqatib som yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>1000</b> ta som beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga som berilmaydi!\nYoki $adminuser'ga murojaat qilib som sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.
2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.
3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.
4️⃣ @VipBuilder_UzBot -ga qaytib, nusxalangan API tokenini shu botga yuboring.
💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","Online_seen&token");
    }
}

if($userstep == "Online_seen&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("Maxsus/Online_seen.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/Online_seen");
    if(file_get_contents("prouser/$fid/Online_seen/Online_seen.php")){
        unlink("prouser/$fid/Online_seen/strtotime.php");
        unlink("prouser/$fid/Online_seen/usid.txt");
        unlink("prouser/$fid/Online_seen/grid.txt");
        $files = glob("prouser/$fid/Online_seen/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/Online_seen/baza");
    }
    file_put_contents("prouser/$fid/Online_seen/Online_seen.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/prouser/$fid/Online_seen/Online_seen.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi:  ❄️AvtoNakrutka v0.6\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 26000;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}
//avtonak v0.8
if($tx == "❄AvtoNakrutka v0.8"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 30000){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"❄AvtoNakrutka v0.8 bot yaratish uchun 30000 som kerak. Quyidagi havolani do'stlaringizga tarqatib som yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>1000</b> ta som beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga som berilmaydi!\nYoki $adminuser'ga murojaat qilib som sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.
2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.
3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.
4️⃣ @VipBuilder_UzBot -ga qaytib, nusxalangan API tokenini shu botga yuboring.
💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","nak1&token");
    }
}

if($userstep == "nak1&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("Maxsus/nak1.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/nak1");
    if(file_get_contents("prouser/$fid/nak1/nak1.php")){
        unlink("prouser/$fid/nak1/strtotime.php");
        unlink("prouser/$fid/nak1/usid.txt");
        unlink("prouser/$fid/nak1/grid.txt");
        $files = glob("prouser/$fid/nak1/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/nak1/baza");
    }
    file_put_contents("prouser/$fid/nak1/nak1.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/prouser/$fid/nak1/nak1.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi:  ❄AvtoNakrutka v0.8\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 30000;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}
//avtotolov
if($tx == "💰 Rubl Bot ( UZB, Avto to'lov )"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 210000){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"💰 Rubl Bot ( UZB, Avto to'lov ) bot yaratish uchun 22000 som kerak. Quyidagi havolani do'stlaringizga tarqatib som yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>1000</b> ta som beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga som berilmaydi!\nYoki $adminuser'ga murojaat qilib som sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.
2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.
3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.
4️⃣ @VipBuilder_UzBot -ga qaytib, nusxalangan API tokenini shu botga yuboring.
💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","avto1&token");
    }
}

if($userstep == "avto1&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("Maxsus/avto1.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/avto1");
    if(file_get_contents("prouser/$fid/avto1/avto1.php")){
        unlink("prouser/$fid/avto1/strtotime.php");
        unlink("prouser/$fid/avto1/usid.txt");
        unlink("prouser/$fid/avto1/grid.txt");
        $files = glob("prouser/$fid/avto1/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/avto1/baza");
    }
    file_put_contents("prouser/$fid/avto1/avto1.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/prouser/$fid/avto1/avto1.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi:  💰 Rubl Bot ( UZB, Avto to'lov )\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 210000;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

//rublv4
if($tx == "💶 Rubl Bot v0.4"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 10000){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"💶 Rubl Bot v0.4 bot yaratish uchun 30000 som kerak. Quyidagi havolani do'stlaringizga tarqatib som yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>1000</b> ta som beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga som berilmaydi!\nYoki $adminuser'ga murojaat qilib som sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.
2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.
3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.
4️⃣ @VipBuilder_UzBot -ga qaytib, nusxalangan API tokenini shu botga yuboring.
💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","rubl4&token");
    }
}

if($userstep == "rubl4&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("pullik/nak1.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/rubl4");
    if(file_get_contents("prouser/$fid/rubl4/rubl4.php")){
        unlink("prouser/$fid/rubl4/strtotime.php");
        unlink("prouser/$fid/rubl4/usid.txt");
        unlink("prouser/$fid/rubl4/grid.txt");
        $files = glob("prouser/$fid/rubl4/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/rubl4/baza");
    }
    file_put_contents("prouser/$fid/rubl4/rubl4.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/prouser/$fid/rubl4/rubl4.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi:  💶 Rubl Bot v0.4\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 10000;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

###########################################-Beepul botlar###########################
if($tx == "🎆Ajoyib Bot" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.
2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.
3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.
4️⃣ @VipBuilder_UzBot -ga qaytib, nusxalangan API tokenini shu botga yuboring.
💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","smile&token");
}

if($userstep == "smile&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"⚔️Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("bepul/smile.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/smile");
    if(file_get_contents("user/$fid/smile/smile.php")){
        unlink("user/$fid/smile/smile.php");
    }
    file_put_contents("user/$fid/smile/smile.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/user/$fid/smile/smile.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: 🎆Ajoyib Bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}
if($tx == "✅ Nik bot v0.3 bot" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.
2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.
3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.
4️⃣ @VipBuilder_UzBot -ga qaytib, nusxalangan API tokenini shu botga yuboring.
💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","nik&token");
}

if($userstep == "nik&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"⚔️Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("bepul/nik.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/nik");
    if(file_get_contents("user/$fid/nik/nik.php")){
        unlink("user/$fid/nik/nik.php");
    }
    file_put_contents("user/$fid/nik/nik.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/user/$fid/nik/nik.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: ✅ Nik bot v0.3 bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}
if($tx == "🕋Quron bot" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.
2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.
3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.
4️⃣ @VipBuilder_UzBot -ga qaytib, nusxalangan API tokenini shu botga yuboring.
💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","quron&token");
}

if($userstep == "quron&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"⚔️Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("bepul/quron.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/quron");
    if(file_get_contents("user/$fid/quron/quron.php")){
        unlink("user/$fid/quron/quron.php");
    }
    file_put_contents("user/$fid/quron/quron.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/user/$fid/quron/quron.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: 🕋Quron bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}
if($tx == "🚫Spam Bot" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.
2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.
3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.
4️⃣ @VipBuilder_UzBot -ga qaytib, nusxalangan API tokenini shu botga yuboring.
💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","SpamBot&token");
}

if($userstep == "SpamBot&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"⚔️Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("bepul/SpamBot.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/SpamBot");
    if(file_get_contents("user/$fid/SpamBot/SpamBot.php")){
        unlink("user/$fid/SpamBot/SpamBot.php");
    }
    file_put_contents("user/$fid/SpamBot/SpamBot.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/user/$fid/SpamBot/SpamBot.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: 🚫Spam Bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}
if($tx == "😊Smile Games" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.
2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.
3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.
4️⃣ @VipBuilder_UzBot -ga qaytib, nusxalangan API tokenini shu botga yuboring.
💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","smile2&token");
}

if($userstep == "smile2&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"⚔️Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("bepul/smile2.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/smile2");
    if(file_get_contents("user/$fid/smile2/smile2.php")){
        unlink("user/$fid/smile2/smile2.php");
    }
    file_put_contents("user/$fid/smile2/smile2.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/user/$fid/smile2/smile2.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: 😊Smile Games\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}
if($tx == "📦Zip Create" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.
2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.
3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.
4️⃣ @VipBuilder_UzBot -ga qaytib, nusxalangan API tokenini shu botga yuboring.
💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$back_menu
    ]);
    file_put_contents("step/$fid.txt","filebot&token");
}

if($userstep == "filebot&token" and $tx !== "◀️Orqaga" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
    $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id; 
    $kod = file_get_contents("bepul/filebot.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/filebot");
    if(file_get_contents("user/$fid/filebot/filebot.php")){
        $files = glob("user/$fid/filebot/channel/*");
        foreach ($files as $value) {
            unlink($value);
        }
        rmdir("user/$fid/filebot/channel");
    }
    file_put_contents("user/$fid/filebot/filebot.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/user/$fid/filebot/filebot.php"))->result;

    if($get){
         $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: 📦Zip Create\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id",
        'parse_mode'=>"html",
        'reply_markup'=>$back_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]); 
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html"
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}
if($tx == "⛔Join Bot" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.
2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.
3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.
4️⃣ @VipBuilder_UzBot -ga qaytib, nusxalangan API tokenini shu botga yuboring.
💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","join&token");
}

if($userstep == "join&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"⚔️Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("bepul/join.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/join");
    if(file_get_contents("user/$fid/join/join.php")){
        unlink("user/$fid/join/join.php");
    }
    file_put_contents("user/$fid/join/join.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/user/$fid/join/join.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: ⛔Join Bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}
if($tx == "❄️Azo Bot" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.
2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.
3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.
4️⃣ @VipBuilder_UzBot -ga qaytib, nusxalangan API tokenini shu botga yuboring.
💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","kanalgakir&token");
}

if($userstep == "kanalgakir&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"⚔️Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("bepul/kanalgakir.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/kanalgakir");
    if(file_get_contents("user/$fid/kanalgakir/kanalgakir.php")){
        unlink("user/$fid/kanalgakir/kanalgakir.php");
    }
    file_put_contents("user/$fid/kanalgakir/kanalgakir.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/user/$fid/kanalgakir/kanalgakir.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: ❄️Azo Bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}
if($tx == "⭐Sertifikat" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.
2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.
3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.
4️⃣ @VipBuilder_UzBot -ga qaytib, nusxalangan API tokenini shu botga yuboring.
💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","sertifikat&token");
}

if($userstep == "sertifikat&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"⚔️Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("bepul/sertifikat.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/sertifikat");
    if(file_get_contents("user/$fid/sertifikat/sertifikat.php")){
        unlink("user/$fid/sertifikat/sertifikat.php");
    }
    file_put_contents("user/$fid/sertifikat/sertifikat.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/user/$fid/sertifikat/sertifikat.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: ⭐Sertifikat\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}
if($tx == "📝Konspekt" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.
2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.
3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.
4️⃣ @VipBuilder_UzBot -ga qaytib, nusxalangan API tokenini shu botga yuboring.
💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","konspekt&token");
}

if($userstep == "konspekt&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"⚔️Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("bepul/konspektphp");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/konspekt");
    if(file_get_contents("user/$fid/konspekt/konspekt.php")){
        unlink("user/$fid/konspekt/konspekt.php");
    }
    file_put_contents("user/$fid/konspekt/konspekt.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/VipBuilder/user/$fid/konspekt/konspekt.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: 📝Konspekt\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}
###########################################-END-###########################

if($tx == "📚 Bot haqida"){
	bot('SendMessage',[
	'chat_id'=>$cid,
	'text'=>"💡 <b>@SODIQOV_SHOXRUX jamoasi:</b>
	
<i>Telegram tarmog‘idagi eng yangi loyiha 
@VipBuilder_UzBot siz bu bot orqali php dasturlash tillarini bilmasdan turib ham bot yaratish imkoniyatiga egasiz!</i>

⚙<b> Tizim versiyasi: v2.4</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"📚 Qo'llanma",'callback_data'=>"noma"],['text'=>"⚠️ Qoidalar",'callback_data'=>"qoida"]],
]
])
]);
}

if($data == "malumot"){
	bot('editMessageText',[
	'chat_id'=>$ccid,
	'message_id'=>$cmid,
	'text'=>"💡 <b>@SODIQOV_SHOXRUX jamoasi:</b>
	
<i>Telegram tarmog‘idagi eng yangi loyiha 
@VipBuilder_UzBot siz bu bot orqali php dasturlash tillarini bilmasdan turib ham bot yaratish imkoniyatiga egasiz!</i>

⚙<b>Tizim versiyasi: v2.4</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"📚 Qo'llanma",'callback_data'=>"noma"],['text'=>"⚠️ Qoidalar",'callback_data'=>"qoida"]],
]
])
]);
}


if($data=="noma"){
bot('editMessageText',[
'chat_id'=>$ccid,
'message_id'=>$cmid,
'text'=>"🤖 <b>Bot yaratish qo'llanmasi!

1. Telegram dasturingizdan @BotFather deb qidiring va START tugmasini bosing!

2. @BotFather ga /newbot buyrug'ini yozing.

3. Yaratmoqchi bo'lgan botingiz NOMINI yozing.

4. Botingiz BOTNAMEsini yozing (botname oxiri  bot  yoki robot bilan tugashi kerak).

5. Agar amallarni to'g'ri bajargan bo'lsangiz sizga @BotFather botingiz Tokenini yuboradi uni saqlab qo'ying!

6. Bot yaratayotganingizda botimiz Token so'raganida @BotFather yuborgan tokeni yuborasiz.

➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖

❗ESLATMA: </b>

⚠️<i>Qoidalarga rioya qilmagan foydalanuvchi botdan blocklarnishi mumkin.

🛠 Dasturchi: <a href='tg://user?id=$admin'>SODIQOV_SHOXRUX</a></i>",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"◀️Ortga",'callback_data'=>"malumot"]],
]
])
]);
}

if($data == "qoida"){
	bot('EditMessageText',[
	'chat_id'=>$ccid,
	'message_id'=>$cmid,
	'text'=>"<b>⚠️ Qoidalar:</b>\n\n<i>1. Ushbu robot maker bot adminstratorlari va bot  dasturchisi foydalanuvchilardan quydagilarni o'z zimmasiga olmasligi haqida sizga eslatib o'tadi:\n1.1 ushbu botdan foydalangan holda ochilgan barcha botlar sizga pul to'lashi yoki to'lamasligj bu bizga bog'liq emas va biz sizga pul to'lamaymiz!\n1.2 agar sizga ushbu botlar server orqali pul to'laydi deyishsa ishonmang yoki o'zingizda shunday xayol bo'lsa buni uniting chunki bu aqilsiz gap!\n🛠 Dasturchi: <a href='tg://user?id=$admin'>SODIQOV SHOXRUX</a></i>",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[['text'=>"◀️Ortga",'callback_data'=>"malumot"]],
]
])
]);
}


if($tx == "/help"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Xabaringizni kiriting</b>",
	'reply_markup'=>$rpl,
		]);
		}
		if($reply=="<b>Xabaringizni kiriting</b>"){
			bot('sendmessage',[
			'chat_id'=>$admin,
			'text'=>"<b>Taklif keldi!</b>
      
??Yuboruvchi: $name

🔷Login: @$user

🔢Id raqami: <code>$cid</code>

🗒️Taklif: <i>$tx</i>

⌚Soat-<b>$time</b> Bugun-<b>$date</b>",
'parse_mode'=>"html",
]);
sleep(2);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"📚 Murojaatingiz adminga yuborildi.\n• 24 soat ichida javobni olasiz √",
'parse_mode'=>"markdown",
'reply_markup'=>$key,
]);
}

if($tx == "/settings"){
	bot('SendMessage',[
	'chat_id'=>$cid,
	'text'=>"🖥",
	'parse_mode'=>"html",
	'reply_markup'=>$main_menu,
]);
}
//<--------panel-------->
	$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$name=$message->from->first_name;
$cid = $message->chat->id;
$chat_id = $message->chat->id;
$text = $message->text;
$uid = $message->from->id;
$type = $message->chat->type;
$cuid = $update->callback_query->from->id;
$cname = $update->callback_query->from->first_name;
$username = $update->callback_query->from->username;
$reply = $message->reply_to_message->text;
$repiid=$message->reply_to_message->from->id;
$repmiid=$message->reply_to_message->message_id;
$repnamee=$message->reply_to_message->from->first_name;
$repusername=$message->reply_to_message->from->username;
$replyy = $message->reply_to_message;
$callcid=$update->callback_query->message->chat->id;
$data=$update->callback_query->data;
$callmid = $update->callback_query->message->message_id;
	

//<------- admin-------> 

if($text == "/panel" and $cid == $admin){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"👨‍💻Admin panelga xush kelibsiz:",
    'reply_markup'=>json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
    [['text'=>"💰 Balans boshqaruvi"]],
    [['text'=>"📂 Skript"],['text'=>"↗️ Xabar yuborish"]],
    [['text'=>"❌Botni o‘chirish"],['text'=>"✅Botni yoqish"]],
[['text'=>"📊Statistika"]],[['text'=>"🚫Ban🚫"],['text'=>"🚫Bandan Olish✅"]],[['text'=>"🎫 Promokod yaratish"],['text'=>"🚀Bonus yasash"]],[['text'=>"⚙ Tugmalarni sozlash"]],
    [['text'=>"◀️Ortga"]]
    ]
    ])
    ]);
}
//adminqoshishva ayirish
if($text=="➕ Admin Qo'shish" and $cid==$admin){
    file_put_contents("step/$cid.txt","add");
    bot('sendMessage',[
    'chat_id'=>$admin, 
    'text'=>"<i>Marhamat Admin qilmochi bo`lgan id raqamni yuboring</i>", 
    'parse_mode'=>'HTML', 
    ]);
    } 
    
    if($text=="🗑 Admin O'chirish" and $cid==$admin){
    file_put_contents("minus/$cid.txt","remove");
    bot('sendMessage',[
    'chat_id'=>$admin, 
    'text'=>"<i>Marhamat Admindan olmoqchi bo`lgan id raqamni yuboring</i>", 
    'parse_mode'=>'HTML', 
    ]);
    } 
     
    $son = substr_count($admins,"\n");
    if($text=="📄 Admin Ro'yhati" and $cid==$admin){
    bot('sendMessage',[
    'chat_id'=>$admin, 
    'text'=>"<i>Bot adminlari idlari:\n\n $admins \n bot adminlari soni: $son ta.</i>", 
    'parse_mode'=>'HTML', 
    ]);
    }
    
    if($userstep=="add"){
    unlink("step/$cid.txt");
    file_put_contents("admins.txt","\n".$text,FILE_APPEND);
    bot('sendMessage',[
    'chat_id'=>$cid, 
    'text'=>"<a href='tg://user?id=$text'>$text</a><i>botga Adminstrator qilib tayinandi.</i>", 
    'parse_mode'=>'HTML', 
    ]);
    bot('sendMessage',[
    'chat_id'=>$text, 
    'text'=>"_Tabriklaymiz siz ushbu botga adminstrator qilib tayinlandingiz_
    Sizning admin panelingiz /panel ", 
    'parse_mode'=>'markdown', 
    ]);
    } 
    
    if($step1=="remove"){
    unlink("minus/$cid.txt");
    $str = str_replace("$text","",$admins);
    file_put_contents("admins.txt","$str");
    bot('sendMessage',[
    'chat_id'=>$cid, 
    'text'=>"<a href='tg://user?id=$text'>$text</a><i> botda Adminstratorlikdan olib tashlandi</i>", 
    'parse_mode'=>'HTML', 
    ]);
    bot('sendMessage',[
    'chat_id'=>$text, 
    'text'=>"*Salom siz botmizda adminstratorlikdan olib tashlandingiz*", 
    'parse_mode'=>'markdown', 
    ]);
    } 



//newpanel

$gett = bot('getChatMember', [
   'chat_id' => $callcid,
   'user_id' => $cuid,
   ]);
  $get = $gett->result->status;
$getut = bot('getChatMember', [
   'chat_id' => $cid,
   'user_id' => $uid,
   ]);
  $getu = $getut->result->status;
mkdir("admins");
$repid=file_get_contents("admins/$cuid.id");
$repname=file_get_contents("admins/$cuid.name");
$repmid=file_get_contents("admins/$cuid.mid");
$repuser=file_get_contents("admins/$cuid.user");

/*
Kod @DaMaS_BaSS tomonidan yozilgan 
va @KingsOfPhp kanalida tarqatilgan,
 iltimos, muallifni tahrir qilmang. 
*/



$names="<a href='tg://user?id=$cuid'>$cname</a>";
$repnames="<a href='tg://user?id=$repid'>$repname</a>";
if(isset($replyy) and ($text=="/settings" or $text=="/settings@AdvakatUz_Bot") and ($type=="supergroup")){
if($getu =="administrator" or $getu == "creator"){
bot('sendMessage',['chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'text'=>"<i>👨🏻‍💻 Hurmatli administrator</i>
<a href='tg://user?id=$uid'>$name</a>
➖➖➖➖➖➖➖➖
<a href='tg://user?id=$repiid'>$repnamee</a>
<i>Sozlamalarini sozlab oling.</i>",'parse_mode'=>'html',
'reply_markup'=>$settings,
]);
file_put_contents("admins/$uid.id","$repiid");
file_put_contents("admins/$uid.name","$repnamee");
file_put_contents("admins/$uid.mid","$repmiid");
file_put_contents("admins/$uid.user","$repusername");
}}
if(isset($replyy) and $text=="/settings" and $type=="supergroup"){
if($getu =="member"){
bot('sendMessage',['chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'text'=>"
<a href='tg://user?id=$uid'>$name</a>
<i>Siz Administrator Emassiz.</i>",'parse_mode'=>'html',
]);}}

/*
Kod @DaMaS_BaSS tomonidan yozilgan 
va @KingsOfPhp kanalida tarqatilgan,
 iltimos, muallifni tahrir qilmang. 
*/


$repid=file_get_contents("admins/$cuid.id");
if($data=="setadmin"){
if($get =="administrator" or $get == "creator"){
bot('promoteChatMember',[
'chat_id'=>$callcid,
'user_id'=>$repid,
'can_change_info'=>true,
'can_post_messages'=>false,
'can_edit_messages'=>false,
'can_delete_messages'=>true,
'can_invite_users'=>false,
'can_restrict_members'=>false,
'can_pin_messages'=>true,
'can_promote_members'=>false,
]);
bot('setChatAdministratorCustomTitle',[
'chat_id'=>$callcid,
'user_id'=>$repid,
'custom_title'=>"$$repuser",
]);
bot('editmessagetext',['chat_id'=>$callcid,'message_id'=>$callmid,
'text'=>"$repnames
➖➖➖➖➖➖➖➖
$names tomonidan admin qilindi 
Maxsus nomi: $$repuser",'parse_mode'=>'html','reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"👑Full Admin Qilish",'callback_data'=>"fulladmin"]],
]]),]);}}

/*
Kod @DaMaS_BaSS tomonidan yozilgan 
va @KingsOfPhp kanalida tarqatilgan,
 iltimos, muallifni tahrir qilmang. 
*/


if($data=="fulladmin"){
if($get =="administrator" or $get == "creator"){
bot('promoteChatMember',[
    'chat_id'=>$callcid,
    'user_id'=>$repid,
    'can_change_info'=>true,
    'can_post_messages'=>true,
    'can_edit_messages'=>true,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>true
  ]);
bot('editmessagetext',['chat_id'=>$callcid,'message_id'=>$callmid,
'text'=>"$repnames
➖➖➖➖➖➖➖➖
$names tomonidan Full admin qilindi.",'parse_mode'=>'html']);}}
/*
Kod @DaMaS_BaSS tomonidan yozilgan 
va @KingsOfPhp kanalida tarqatilgan,
 iltimos, muallifni tahrir qilmang. 
*/

if($data=="deladmin"){
if($get =="administrator" or $get == "creator"){
bot('promoteChatMember',[
    'chat_id'=>$callcid,
    'user_id'=>$repid,
    'can_change_info'=>false,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>false,
    'can_invite_users'=>false,
    'can_restrict_members'=>false,
    'can_pin_messages'=>false,
    'can_promote_members'=>false
  ]);
bot('editmessagetext',['chat_id'=>$callcid,'message_id'=>$callmid,
'text'=>"$repnames
➖➖➖➖➖➖➖➖
$names tomonidan Adminlikdan Olindi 
",'parse_mode'=>'html']);}}

if($data=="setban"){
if($get =="administrator" or $get == "creator"){
       $vaqti = strtotime("+108000000 minutes");
      bot('kickChatMember', [
        'chat_id' => $callcid,
        'user_id' => $repid,
        'until_date' => $vaqti,
      ]);
bot('editmessagetext',['chat_id'=>$callcid,'message_id'=>$callmid,
'text'=>"$repnames
➖➖➖➖➖➖➖➖
$names tomonidan Bandan Olindi 
",'parse_mode'=>'html']);}}

if($data=="delban"){
if($get =="administrator" or $get == "creator"){
bot('unbanChatMember', [
        'chat_id' => $callcid,
        'user_id' => $repid,
    ]);
bot('editmessagetext',['chat_id'=>$callcid,'message_id'=>$callmid,
'text'=>"$repnames
➖➖➖➖➖➖➖➖
$names tomonidan Ban Qilindi 
",'parse_mode'=>'html']);}}

if($data=="setro"){
if($get =="administrator" or $get == "creator"){
$minut = strtotime("+1000 minutes");
  bot('restrictChatMember', [
      'chat_id' => $callcid,
      'user_id' => $repid,
      'until_date' => $minut,
      'can_send_messages' => false,
      'can_send_media_messages' => false,
      'can_send_other_messages' => false,
      'can_add_web_page_previews' => false
  ]);
bot('editmessagetext',['chat_id'=>$callcid,'message_id'=>$callmid,
'text'=>"$repnames
➖➖➖➖➖➖➖➖
$names tomonidan ReadOnly Qilindi 
",'parse_mode'=>'html']);}}
/*
Kod @DaMaS_BaSS tomonidan yozilgan 
va @KingsOfPhp kanalida tarqatilgan,
 iltimos, muallifni tahrir qilmang. 
*/

if($data=="delro"){
if($get =="administrator" or $get == "creator"){
bot('restrictChatMember',[
    'chat_id'=>$callcid,
    'user_id'=>$repid,
    'can_send_messages'=>true,
    'can_send_media_messages'=>true,
    'can_send_other_messages'=>true,
    'can_add_web_page_previews'=>true
  ]);
bot('editmessagetext',['chat_id'=>$callcid,'message_id'=>$callmid,
'text'=>"$repnames
➖➖➖➖➖➖➖➖
$names tomonidan ReadOnlydan Olindi 
",'parse_mode'=>'html']);}}
if($data=="setpin"){
if($get =="administrator" or $get == "creator"){
  bot('pinChatMessage',[
    'chat_id'=>$callcid,
    'message_id'=>$repmid,
  ]);
bot('editmessagetext',['chat_id'=>$callcid,'message_id'=>$callmid,
'text'=>"📌Xabar $names tomonidan Pinga Qadaldi 
",'parse_mode'=>'html']);
}}

if($data=="delpin"){
if($get =="administrator" or $get == "creator"){
  bot('unpinChatMessage',[
    'chat_id'=>$callcid,
    'message_id'=>$repmid,
  ]);
  bot('deleteMessage',['chat_id'=>$callcid,'message_id'=>$callmid]);
bot('editmessagetext',['chat_id'=>$callcid,'message_id'=>$callmid,
'text'=>"📌Xabar $names tomonidan Pindan Olindi 
",'parse_mode'=>'html']);}}
/*
Kod @DaMaS_BaSS tomonidan yozilgan 
va @KingsOfPhp kanalida tarqatilgan,
 iltimos, muallifni tahrir qilmang. 
*/

if($data=="setkick"){
if($get =="administrator" or $get == "creator"){
  $vaqti = strtotime("+1 minutes");
  bot('kickChatMember', [
      'chat_id' => $callcid,
      'user_id' => $repid,
      'until_date'=> $vaqti,
  ]);
  bot('unbanChatMember', [
        'chat_id' => $callcid,
        'user_id' => $repid,
    ]);
bot('editmessagetext',['chat_id'=>$callcid,'message_id'=>$callmid,
'text'=>"$repnames
➖➖➖➖➖➖➖➖
$names tomonidan Guruhdan Chetlashtirildi.
",'parse_mode'=>'html']);}}

if($data=="delsms"){
bot('deleteMessage',['chat_id'=>$callcid,'message_id'=>$repmid]);
bot('editmessagetext',['chat_id'=>$callcid,'message_id'=>$callmid,
'text'=>"
📌xabar $names tomonidan oʻchirib yuborildi.
",'parse_mode'=>'html']);}

if($data=="exit"){
if($get =="administrator" or $get == "creator"){
bot('editmessagetext',['chat_id'=>$callcid,'message_id'=>$callmid,
'text'=>"
<del>Menu Yopildi</del>
",'parse_mode'=>'html']);}}
/*
Kod @DaMaS_BaSS tomonidan yozilgan 
va @KingsOfPhp kanalida tarqatilgan,
 iltimos, muallifni tahrir qilmang. 
*/



//sms

if(mb_stripos($text,"/sms") !== false){
if($cid == $admin){
$ex = explode(" ",$text);
$sms = str_replace("/sms $ex[1]","",$text);
$ismi = $message->from->first_name;

if(mb_stripos($ex[1],"@") !== false){
$ssl = str_replace("@","",$ex[1]);
$egasi = "t.me/$ssl";
}else{
$egasi = "tg://user?id=$ex[1]";
$eegasi = "$ex[1]";
}
bot('sendMessage',[
'chat_id'=>$ex[1],
'text'=>"[👨‍💻Admin👨‍💻](tg://user?id=$admin) dan javob keldi!✅


💌Javob: $sms

⏰Soat: $time",
'parse_mode'=>"markdown", 
]);
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"[👤Savol bergan odam👤]($egasi)ga xabaringiz yuborildi📩",
'parse_mode'=>"markdown", 
]);
}else{
bot("sendMessage",[
'chat_id'=>$cid,
'text'=> "<b>Bu bo‘limni faqat bot administratori ishlata oladi!</b>",
'parse_mode'=>'Markdown',
]);
}
}


if($tx == "⬅️ Bekor"){
    unlink("step/admin.txt");
    bot('sendMessage',[
        'text'=>"<b>Bekor qilindi!</b>
Quyidagi menyudan foydalaning: ",
        'chat_id'=>$cid,
        'parse_mode'=>"html",
        'reply_markup'=>json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
    [['text'=>"💰 Balans boshqaruvi"]],
    [['text'=>"📂 Skript"],['text'=>"↗️ Xabar yuborish"]],
    [['text'=>"❌Botni o‘chirish"],['text'=>"✅Botni yoqish"]],
[['text'=>"📊Statistika"]],[['text'=>"🚫Ban🚫"],['text'=>"🚫Bandan Olish✅"]],[['text'=>"🎫 Promokod yaratish"],['text'=>"🚀Bonus yasash"]],[['text'=>"⚙ Tugmalarni sozlash"]],
    [['text'=>"◀️Ortga"]]
    ]
    ])
    ]);
}
//balans
$balans=json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
  [['text'=>"💸 Pul berish"],['text'=>"💸 Pul ayirish"],['text'=>"🚀Bonus yasash"]],
[['text'=>"💳 Karta"],['text'=>"🥝 Qiwi"],['text'=>"📱Paynet"]],
[['text'=>"👥 Taklif narxi"],['text'=>"📤 Botlar narxi"],],
[['text'=>"↩️ oqaga"]],
]
]);
//narx
$narxini=json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔥Antiqa botlar"]],
[['text'=>"👤 group bot"],],
[['text'=>"💵 Pul bot"]],
[['text'=>"⭐Maxsus bot"]],
[['text'=>"↩️ oqaga"],],
]
]);

if($tx=="💰 Balans boshqaruvi"){
	bot('sendMessage',[
	'chat_id'=>$cid,
	'text'=>"💰 Balans boshqaruvi boʻlimidasiz!
	
📋 Quyidagi boʻlimlardan birini tanlang!",
'parse_mode'=>"Markdown",
	'reply_markup'=>$balans,
]);
}
//menular
$step12 = file_get_contents("stat/$cid.step");
if($tx=="👥 Taklif narxi" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>💸 Taklif narxini kiriting!</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$qayt_menu, 
]); 
file_put_contents("stat/$cid.step","channel_12");
} 

if($step12=="channel_12" and $tx !== "↩️ oqaga" and $cid==$admin){ 
file_put_contents("stat/channel_12.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Referal narxi $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
if($tx=="📤 Botlar narxi" and $cid==$admin){ 
bot('sendMessage',[ 
   'chat_id'=>$admin,
    'text'=>"Qanday turdagi botlarni yaratamiz👇",
'reply_markup'=>$narxini, 
    ]);
}
$step13 = file_get_contents("stat/antiqa.txt");
if($tx == "🔥Antiqa botlar"){
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📋 🔥Antiqa botlar uchun narxni kitirting :",
        'reply_markup'=>$qayt_menu, 
 
]);
file_put_contents("stat/antiqa.txt","channel_13");
}
if($step13=="channel_13" and $tx !== "↩️ oqaga" and $cid==$admin){ 
file_put_contents("stat/channel_13.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$cid, 
'text'=>"<i>🔥Antiqa botlar narxi $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/antiqa.txt"); 
}
$shahzodbek122 = file_get_contents("stat/pul.txt");
$shahzodbek = file_get_contents("stat/group.txt");
if($tx == "👤 group bot"){
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"👤 group botlar uchun narxni kitirting :",
        'reply_markup'=>$qayt_menu, 
 
]);
file_put_contents("stat/group.txt","channel_14");
}
if($shahzodbek=="channel_14" and $tx !== "↩️ oqaga"){ 
file_put_contents("stat/channel_14.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$cid, 
'text'=>"<i>👤 group botlar narxi $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/group.txt"); 
}

if($tx == "💵 Pul bot"){
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"💵 Pul botlar uchun narxni kitirting :",
        'reply_markup'=>$qayt_menu, 
 
]);
file_put_contents("stat/pul.txt","channel_15");
}
if($shahzodbek122=="channel_15" and $tx !== "↩️ oqaga"){ 
file_put_contents("stat/channel_15.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$cid, 
'text'=>"<i>💵 Pul botlar narxi $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/pul.txt"); 
}
if(($tx == "/admin") and $cid == $admins){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>👨‍💻Admin panelga xush kelibsiz.</b>",
    'parse_mode'=>"html",
    'reply_markup'=>$admin,
]);
}

$shahzodbek1222 = file_get_contents("stat/maxsus.txt");
if($tx == "⭐Maxsus bot"){
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"💵 Pul botlar uchun narxni kitirting :",
        'reply_markup'=>$qayt_menu, 
 
]);
file_put_contents("stat/maxsus.txt","channel_17");
}
if($shahzodbek1222=="channel_17" and $tx !== "↩️ oqaga"){ 
file_put_contents("stat/channel_17.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$cid, 
'text'=>"<i>💵 Pul botlar narxi $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/maxsus.txt"); 
}
//tugam
$tugma = json_encode([
     'resize_keyboard'=>true,
     'keyboard'=>[
       [['text'=>"🛠 Qiwi nomer kiritish"],['text'=>"🛠 Click nomer kiritish"],],
       [['text'=>"/panel"],],
       ]
      ]);
      
$DaMaS_BaSS = json_decode(file_get_contents('php://input'));
$AdvakatUz = $DaMaS_BaSS->message;
$lichka = file_get_contents("lichka.db");
$cid = $AdvakatUz->chat->id;
$text=$AdvakatUz->text;
$type = $AdvakatUz->chat->type;
$reply = $uzkmm->reply_to_message;
$reply = $AdvakatUz->reply_to_message->text;
$rpl = json_encode([
            'resize_keyboard'=>false,
            'force_reply'=>true,
            'selective'=>true
        ]);
if($type=="private"){
    if($text == "🚫Bandan Olish✅" and $cid==$admin){
    bot('sendmessage', [
          'chat_id' =>$cid,
           'text' => "🚫Blockdan Olinadigan 🆔️ni Yozing!" ,
           'parse_mode'=>'markdown',  
           'reply_markup' =>$rpl,
           ]);
           }}
           if($reply == "🚫Blockdan Olinadigan 🆔️ni Yozing!"){  
    $fayl = file_get_contents("block.db");
    $fayl2 = "$text";
    $fayl3 = str_replace($fayl2,"",$fayl);
    file_put_contents("block.db","$fayl3");
    $fayl = file_get_contents("block.db");
    bot('sendmessage', [
          'chat_id' =>$cid,
           'text' =>"[$text](tg://user?id=$text)  Bandan olindi✅" ,
           'parse_mode'=>'markdown', 
    'reply_markup'=>$panel,
          ]); 
          bot('sendmessage', [
          'chat_id' =>$sd,
           'text' => "*Salom*  [$name](tg://user?id=$uid)  Sizga Xush Xabar Bor!
    Siz [$uz](tg://user?id=$admin) Tomonidan Bandan Olindingiz!
    Endi Botni Ishlatishingiz mumkin!
    Qayta /start Bosing!" ,
           'parse_mode'=>'markdown', 
           ]);
    }
    
    
    
    $update = json_decode(file_get_contents('php://input'));
    $message = $update->message;
    $cid = $message->chat->id;
    $bass = $message->text;
    $uid = $message->from->id;
    $reply = $message->reply_to_message->text;
    
    $replymenu = json_encode([
                'resize_keyboard'=>false,
                'force_reply'=>true,
                'selective'=>true
            ]);
            
            //xabar
            if($text=="↗️ Xabar yuborish" and $cid==$admin){
    bot('sendMessage',[
        'chat_id'=>$admin,
        'text'=>"Admin qanday turdagi xabar yubormoqchisiz:?",
        'parse_mode'=>"html",
        'reply_markup'=>json_encode([
            'resize_keyboard'=>true,
            'keyboard'=>[
                [['text'=>"↗️ Xabar (Hammaga)"]],
                [['text'=>"↗️ Xabar (Userga)"]],
                [['text'=>"🔙 Orqaga"]],
            ]
        ])
    ]);
}

$xabar = file_get_contents("send.txt");
if($text == "↗️ Xabar (Hammaga)"){
if($cid == $admin){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"*Userlarga yuboriladigan xabar matnini kiriting! Bekor qilish uchun /cancel ni bosing.*",
'parse_mode'=>"markdown",
'reply_markup'=>$back4_menu,
]); file_put_contents("send.txt","user");
}else{
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*🤪😂 Bu funksiyani Faqat men $adminuser ishlata olaman.*",
'parse_mode'=>'Markdown',
]);
}
}
if($xabar=="user" and $cid==$admin){
if($text=="/cancel"){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Bekor qilindi!",
'parse_mode'=>"html",
]); unlink("send.txt");
}else{
$lich = file_get_contents("shekih.db");
$lichka = explode("\n",$lich);
foreach($lichka as $lichkalar){
$okuser=bot("sendmessage",[
'chat_id'=>$lichkalar,
'text'=>$text,
'parse_mode'=>'HTML'
]);
}
}
}
if($okuser){
bot("sendmessage",[
'chat_id'=>$admin,
'text'=>"<b>Hamma userlarga yuborildi</b>✅",
'parse_mode'=>'html',
'reply_markup'=>$panel,
]); unlink("send.txt");
}
//
if($text=="↗️ Forward (Hammaga)" and $cid==$admin){
    bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"Xabaringizni Yozing. Men Uni Forward Qilib Hammaga yuboraman!!",
    ]);
    file_put_contents("step/$fid.txt","forward");
    }
    
    if($step=="forward" and $cid==$admin){
    $userlar = explode("\n",$lichka);
    foreach($userlar as $users){
    $xabarok=bot('ForwardMessage',[
    'chat_id'=>$users,
    'from_chat_id'=>$cid,
    'message_id'=>$mid,
    ]);
    }
    if($xabarok){
    bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"Xabar yetkazildi",
    ]);
      file_put_contents("step/$fid.txt","");
    }
    }
//
if($text == "↗️ Xabar (Userga)"){
    if($cid == $admin){
    bot('sendMessage', [
    'chat_id'=>$admin,
    'text'=>"✔ Userga Xabar yuborish uchun
    /sms 🆔️ Xabar 
    shu tarzda yuboring!
    
    👨‍💻Admin: $adminuser",
    'reply_markup'=>$back,
    ]);
    }else{
    bot("sendmessage",[
    'chat_id'=>$cid,
    'text'=> "*🤪😂 Bu funksiyani Faqat men @$userR ishlata olaman.*",
    'parse_mode'=>'Markdown',
    ]);
    }
    }
    if(mb_stripos($text,"/sms") !== false){
    if($cid == $admin){
    $ex = explode(" ",$text);
    $sms = str_replace("/sms $ex[1]","",$text);
    $ismi = $message->from->first_name;
    
    if(mb_stripos($ex[1],"@") !== false){
    $ssl = str_replace("@","",$ex[1]);
    $egasi = "t.me/$ssl";
    }else{
    $egasi = "tg://user?id=$ex[1]";
    $eegasi = "$ex[1]";
    }
    bot('sendmessage',[
    'chat_id'=>$ex[1],
    'text'=>"📨*Yangi Xabar*
    
    👤 [$ismi](tg://user?id=$uid)
    
    *📨 Xabar: $sms
    
    ❄ @$bot*",
    'parse_mode'=>"markdown", 
    ]);
    bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"👤[Foydalanuvchi]($egasi) ga Habaringiz Yuborildi📩",
    'parse_mode'=>"markdown", 
    'reply_markup'=>$panel
    ]);
    }else{
    bot("sendmessage",[
    'chat_id'=>$cid,
    'text'=> "*🤪😂 Bu funksiyani Faqat men $adminuser ishlata olaman.*",
    'parse_mode'=>'Markdown',
    ]);
    }
    }
            
    //tugmalar
if($text == "⚙ Tugmalarni sozlash" and $cid==$admin ){
  bot('sendMessage',[
    'chat_id'=>$admin,
    'text'=>"⚙ Qanday tugmani sozlamoqchisiz",
'reply_markup'=>$tugma,
    ]);
}

  $step = file_get_contents("stat/$cid.step");
if($tx=="🛠 Qiwi nomer kiritish" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Qiwi nomeringizni kiriting iltimos togri xatosiz kiriting.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","channel_4");
} 

if($step=="channel_4" and $cid==$admin){ 
file_put_contents("stat/channel_4.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Sizning Qiwi nomeringiz $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}

  $step = file_get_contents("stat/$cid.step");
if($tx=="🛠 Click nomer kiritish" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Ozingizni Click (Uzcard, Humo) raqamingizni tog'ri xatosiz kiriting.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","channel_5");
} 

if($step=="channel_5" and $cid==$admin){ 
file_put_contents("stat/channel_5.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Sizning Click raqamingiz $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}

if($text == "?? Asosiy sozlamalar" and $cid==$admin ){
  bot('sendMessage',[
    'chat_id'=>$admin,
    'text'=>"⚙ Asosiy  sozlanmalar bo'limidasiz.",
'reply_markup'=>$boshqa,
    ]);
}

//bonus
$bonus22 = file_get_contents("$admin.ttxt");
$bepul1 = file_get_contents("bonus2.txt");
mkdir("rubl");
    if($text=="🚀Bonus yasash" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"bonus dan qancha odam foydalanishini yozing?",
'reply_markup'=>json_encode([
 'remove_keyboard'=>true,
]),   
]);
file_put_contents("$admin.ttxt","bonusa");
unlink('rubl/olindi1.txt');
unlink('rubl/berildi1.txt');
}

if($bonus22=="bonusa" and $cid==$admin){
file_put_contents("bonus2.txt","$text");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"@SODIQOV_SHOXRUX kanaliga yuborildi",
'reply_markup'=>$admp1,    
]);
unlink("$admin.ttxt");
$vaqt1=date('H:i',strtotime('2 hour'));
bot('sendmessage',[
'chat_id'=>"-1001295373666", //kanaliz id raqami -100 dan keyin
'text'=>"
🚀 O‘yin boshlandi!

⏩ Bonus olgan foydalanuvchilar: 0 ta
🥝 Berilgan tanga miqdori: 0 UZS
✉️ @YORDAM1_CHAT ida muhokama qiling!
📂 Rasmiy kanal: @SODIQOV_SHOXRUX
🔰 Homiy kanal: @MASTER_PHP_1
👨‍💻 Dasturchi: @WARA_VSKOY_1


⏳ Boshlangan vaqti: $vaqt1",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🚀 Bonusni olish","callback_data"=>"bo"]],
]
]),
]);
}

if($data == "bo"){
$olindi=file_get_contents("bonus2.txt");
$ee1 = file_get_contents("rubl/olindi1.txt");
$eea = substr_count($ee1,"\n"); 
if($eea==$olindi or $olindi==$eea){
bot('deleteMessage',[
'chat_id'=>"-1001295373666", //kanaliz id raqami -100 dan keyin
'message_id'=>$cmid,
]);
}else{
$id = $update->callback_query->id;
$frid= $update->callback_query->from->id;
$ee1 = file_get_contents("rubl/olindi1.txt");
if(mb_stripos($ee1,$frid)!==false){
bot('answerCallbackQuery',[
'callback_query_id'=>$id,
'text'=>"⚠️ Kechirasiz, siz bu o‘yindan bonusni olib bo‘ldingiz!",
"show_alert"=>true,
]);
}else{
$bonusrand = rand(1000,1000);
$vaqt1 = date('H:i',strtotime('2 hour'));
$id = $update->callback_query->id;
$pul = file_get_contents("referal/$frid.txt");
$bonus=$pul+$bonusrand;
file_put_contents("referal/$frid.txt","$bonus");
file_put_contents("rubl/$frid.txt",1);
$frid= $update->callback_query->from->id;
bot('answerCallbackQuery',[
'callback_query_id'=>$id,
'text'=>"
🎉 Tabriklaymiz sizga $bonusrand UZS taqdim etildi! 
💵 Hisobingizda: $bonus tanga b'ldi",
'show_alert'=>true,
]);
file_put_contents("rubl/olindi1.txt","\n".$frid, FILE_APPEND);
$ee1 = file_get_contents("rubl/olindi1.txt");
$eea = substr_count($ee1,"\n"); 
$olmos = file_get_contents("rubl/berildi1.txt");
$mm3 = $olmos+$bonusrand;
file_put_contents("rubl/berildi1.txt","$mm3");
$mn2 = file_get_contents("rubl/berildi1.txt");
$olindi=file_get_contents("bonus2.txt");
bot('editMessageText',[
'chat_id'=>"-1001295373666", //kanaliz id raqami -100 dan keyin
'message_id'=>$cmid,
'text'=>"
🚀 O‘yin boshlandi!

⏩ Bonus olgan foydalanuvchilar: $eea/$olindi ta
🥝 Berilgan tanga miqdori: $mn2 UZS
✉️ @YORDAM1_CHAT da muhokama qiling!
📂 Rasmiy kanal: @SODIQOV_SHOXRUX
🔰 Homiy kanal: @MASTER_PHP_1
👨‍💻 Dasturchi: @WARA_VSKOY_1


⏳ Hozirgi vaqt: $vaqt1",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🚀 Bonusni olish","callback_data"=>"bo"]],
]
]),
]);
}
}
}
    
    
    
 if($bass=="🚫Ban🚫"){
    if($cid==$admin){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Ban Qilinadigan 🆔️ni Yuboring!",
    'reply_markup'=>$replymenu,
    ]);//manbasiz korsam sikilasan
    }
    }
    if($reply=="Ban Qilinadigan 🆔️ni Yuboring!"){
    file_put_contents("block.db","$blocks\n$bass");
    bot('SendMessage',[
       'chat_id'=>$admin,
            'text'=>"✅[$bass](tg://user?id=$bass) *Banlandi!*", 
            'parse_mode'=>'markdown', 
    'reply_markup'=>$panel,
            ]);
            bot('SendMessage',[
       'chat_id'=>$bass,
            'text'=>"<b>🚫Siz ⛔bu botda blokladi🚫</b>", 
            'parse_mode'=>'html', 
            'reply_markup'=>json_encode([
    'remove_keyboard'=>true,
    ]),
    ]);
    }
    if(mb_stripos($text, "/click-")!==false){
        $m1 = explode("-",$text);
       $m2 = $m1[1];
       file_put_contents("ch2.txt","$m2");
       bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>"CLICK $m2 ga o'zgardi!",
       ]);
      }

if(mb_stripos($text, "/qiwi-")!==false){
    $m1 = explode("-",$text);
       $m2 = $m1[1];
       file_put_contents("ch1.txt","$m2");
       bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>"QIWI $m2 ga o'zgardi!",
       ]);
      }
   
    if($text=="🖇 Reklama Berish" and $cid==$admin){
    file_put_contents("step/$admin.txt","rek");
    bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"Reklama matnini kiriting",
    'reply_markup'=>$panel,
    ]);
    }
    if($step=="rek"){
    file_put_contents("reklama/reklama.txt","$text");
    unlink("step/$admin.txt");
    bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"Reklama Joylandi",
    'reply_markup'=>$panel,
    ]);
    }
    if($tx == "📊 Statistika" and joinchat($fid)=="true"){
    $us = file_get_contents("stat/usid.txt");
    $uscount = substr_count($us, "\n");
    $bot = file_get_contents("stat/stat.txt");
    $botpro = file_get_contents("stat/statpro.txt");
    $all = $bot + $botpro;
    bot('sendMessage',[
    'chat_id' => $cid,
    'text'=>"📊 Statistika\nBot a'zolari soni: *$uscount* ta\nJami yasalgan oddiy botlar: *$bot* ta\nJami yasalgan pro botlar: *$botpro* ta\nJami yasalgan botlar: *$all* ta\n\n⏰$time  📆$sana",
    'parse_mode'=>"markdown",
    'reply_markup'=>$back_menu
    ]);
}

if($text=="📄Xabar Jo'natish" and $cid==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"👥Userlarga Yuboriladigan 
📄Xabar Matnini Kiriting! 
🚫Bekor qilish uchun /cancel ni bosing.",
    'parse_mode'=>"html",
]); file_put_contents("send.txt","user");
}
if($xabar=="user" and $cid==$admin){
if($text=="/cancel"){
   bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"🚫Bekor qilindi!",
    'parse_mode'=>"html",
]);
  file_put_contents("send.txt","");
}else{
  $lich = file_get_contents("azo.dat");
  $lichka = explode("\n",$lich);
  foreach($lichka as $lichkalar){
  $okuser=bot("sendmessage",[
    'chat_id'=>$lichkalar,
    'text'=>$text,
    'parse_mode'=>'html'
]);
}
if($okuser){
  bot("sendmessage",[
    'chat_id'=>$admin,
    'text'=>"👨‍💻Siz Yozgan Xabaringiz
👥Hamma Userlarga Yuborildi!",
    'parse_mode'=>'html',
]);
  file_put_contents("send.txt","");
}
}
}



if((mb_stripos($text, "/xabar")!==false) and $cid == $admin){
$id = explode("\n",$text);
$id1 = $id[1];
$id2 = $id[2];
$finish = bot('SendMessage', [
'chat_id' => $id1,
'parse_mode' => "markdown",
'text' => "$id2

By: [@$bot]",
'disable_web_page_preview' => true,
]);
}
if($finish){
bot('SendMessage', [
'chat_id' => $admin,
'parse_mode' => "markdown",
'text' => "✔️ [$id1](tg://user?id=$id1) *Ga Xabar Yuborildi!✅*",
]);
}


if($text=="/send" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Yuboriladigan xabar matnini kiriting!",'parse_mode'=>"html",'reply_markup'=>$rpl
]);
}
if($reply=="Yuboriladigan xabar matnini kiriting!"){
$lich = file_get_contents("lichka.txt");
$lichka = explode("\n",$lich);
foreach($lichka as $uid){
bot("sendmessage",[
'chat_id'=>$uid,
'text'=>"$text",
'reply_markup'=>$key]);
}
}
if($text=="/stat" and $cid==$admin){
$lich = substr_count($lichka,"\n");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Bot foydalanuvchilari soni $lich ta.",
'parse_mode'=>"html"
]);
}

if($text == "💸 Pul berish" and $cid == $admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "<b>✅Pul berish uchun quyidagi buyruqni bajaring!
Bir qator pastga tushib id raqamni yozing, yana bir qator pastga tushib olmosni yozing!
Masalan:</b>
<code>/plus
$admin
1000</code>",
'parse_mode' => 'html',
'reply_markup'=>$keys,
]);
}elseif(mb_stripos($tx, "/plus")!==false){
if($cid == $admin){
$id = explode("\n", $tx);
$id1 = $id[1]; $id2 = $id[2];
$olmos = file_get_contents("referal/$id1.txt");
$miqdor = $olmos+$id2;
file_put_contents("referal/$id1.txt","$miqdor");
$getts= file_get_contents("referal2/$id1.txt");
$miqdor = $getts+$id2;
file_put_contents("referal2/$id1.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "<b>🛠 Hisobi to'ldirildi.
🆔 Id raqami : $id1
💳 To'ldirildi : $id2 UZS</b>",
'parse_mode' => 'html',
'reply_markup'=>$menu,
]);
bot("sendmessage",[
'chat_id'=>$id1,
'text'=> "*🛠 Hisobingiz $id2 UZS ga to'ldirildi.*",
'parse_mode'=>'Markdown',
]);
}else{
 bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*Bu bo‘limni faqat bot administratori ishlata oladi!*",
'parse_mode'=>'Markdown',
]);
}
}

if($text == "💸 Pul ayirish" and $cid == $admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "<b>✅Pul ayirish uchun quyidagi buyruqni bajaring!
Bir qator pastga tushib id raqamni yozing, yana bir qator pastga tushib olmosni yozing!
Masalan:
/minus
$admin
1000</b>",
'parse_mode' => 'html',
'reply_markup'=>$keys,
]);
}elseif(mb_stripos($tx, "/minus")!==false){
if($cid == $admin){
$id = explode("\n", $tx);
$id1 = $id[1]; $id2 = $id[2];
$olmos = file_get_contents("referal/$id1.txt");
$miqdor = $olmos-$id2;
file_put_contents("referal/$id1.txt","$miqdor");
$getts= file_get_contents("referal2/$id1.txt");
$miqdor = $getts-$id2;
file_put_contents("referal2/$id1.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "<b>🛠 Hisobi Yechildi.
🆔 Id raqami : $id1
💳 Yechildi : $id2 UZS</b>",
'parse_mode' => 'html',
'reply_markup'=>$menu,
]);
bot("sendmessage",[
'chat_id'=>$id1,
'text'=> "*🛠 Hisobingiz $id2 UZS ga Yechildi.*",
'parse_mode'=>'Markdown',
]);
}else{
 bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*Bu bo‘limni faqat bot administratori ishlata oladi!*",
'parse_mode'=>'Markdown',
]);
}
}
//promokod uchun

if($text=="🎫 Promokod yaratish"){
bot("sendmessage",[
'chat_id'=>$admin,
'text'=>" 🎫 Promokod yasash uchun
/promo promokod
masalan
<code>/promo 79j585h67ht</code>",
'parse_mode'=>'html',
'reply_markup'=>$back4_menu,
]);
}
$promo = file_get_contents("ch1.txt");
$ball = file_get_contents("ch2.txt");
$aa = "-1001295373666";  //promokod yuboriladigan kanal id raqami
$ab = "-1001295373666"; //promokod ishlatilganligi haqida yuboriladigan kanalid raqami
if(mb_stripos($text, "/promo")!==false){
if($cid == $admin){
	$m1 = explode(" ",$text);
 $m2 = $m1[1];
 file_put_contents("ch1.txt","$m2");
 bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"🎫 Promokod $promo
qancha olmos berilsin
/ball olmos miqdori yozing
Masalan
<code>/ball 250</code>",
'parse_mode'=>'html',
]);
}
}

if(mb_stripos($text, "/ball")!==false){
if($cid == $admin){
	$m1 = explode(" ",$text);
 $m2 = $m1[1];
 file_put_contents("ch2.txt","$m2");
 bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"🎫<b> Promokod kanalga yuborildi ✅</b> ",
'parse_mode'=>'html',
'reply_markup'=>$panel,
 ]);
 bot("sendmessage",[
 'chat_id'=>$aa,
 'text'=>"<i>🎫 Yangi Promokod.

🤖 Botga kirish -> @$botname 
🔽 Ishlatish uchun pastdagi tugmani bosing.</i>

<b>🎫 Promokod tashlangan vaqt: $soat</b>",
 'parse_mode'=>'html',
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"🎫 Promokodni ishlatish", "url"=>"https://t.me/$botname?start=$promo"]],
]
])
]);
}
}

if($text=="/start $promo"){
$olmos = file_get_contents("referal/$cid.txt");
$miqdor = $olmos + $ball;
file_put_contents("referal/$cid.txt","$miqdor");
bot("sendmessage",[
'chat_id'=>$cid,
'text'=>"<i>🎁 Promo kod to'g'ri sizga $ball so'm berildi!</i>",
'parse_mode'=>"html",
]);
unlink("ch1.txt");
bot('sendMessage',[
'chat_id'=>$ab,
'text'=>"<i>⚠️ Diqqat tepadagi promokod ishlatildi.
Endi undan qayta foydalanib bo'lmaydi!
Promokoddan <a href='tg://user?id=$fid'>$name</a> foydalandi 
va unga $ball so'm taqdim etildi ✅</i>

<b>🎫 Promokod ishlatilgan vaqt: $soat</b>",
'parse_mode'=>'html',
]);
unlink("ch2.txt");
}

	if($text == "📂 Skript" and $cid == $admin){
    bot('sendDocument',[
    'chat_id'=>$cid,
    'document'=>new CURLFile(__FILE__),
    'caption'=>"$botname kodi",
]);
}

?>
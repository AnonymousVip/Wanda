<?php
error_reporting(0);
$tok = '1268884251:AAFdUnxyuwCcxPCy17mY8N1PoWKUDfyDV-0';
function botaction($method, $data){
	global $tok;
	global $dadel;
	global $dueto;
    $url = "https://api.telegram.org/bot$tok/$method";
    $curld = curl_init();
    curl_setopt($curld, CURLOPT_POST, true);
    curl_setopt($curld, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curld, CURLOPT_URL, $url);
    curl_setopt($curld, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($curld);
    curl_close($curld);
    $dadel = json_decode($output,true);
    $dueto = $dadel['description'];
    return $output;
}
function startsWith ($string, $startString) 
{ 
    $len = strlen($startString); 
    return (substr($string, 0, $len) === $startString); 
}

$update = file_get_contents('php://input');
$update = json_decode($update, true);

$update = file_get_contents('php://input');
$update = json_decode($update, true);


$mid = $update['message']['message_id'];
$cid = $update['message']['chat']['id'];
$uid = $update['message']['chat']['id'];
$cname = $update['message']['chat']['username'];
$fid = $update['message']['from']['id'];
$fname = $update['message']['from']['first_name'];
$lname = $update['message']['from']['last_name'];
$uname = $update['message']['from']['username'];
$typ = $update['message']['chat']['type'];
$text = $update['message']['text'];
$fullname = ''.$fname.' '.$lname.'';

##################NEW MEMBER DATA ################
$gname = $update['message']['chat']['title'];
$nid = $update['message']['new_chat_member']['id'];
$nfname = $update['message']['new_chat_member']['first_name'];
$nlname = $update['message']['new_chat_member']['last_name'];
$nuname = $update['message']['new_chat_member']['username'];
$nfullname = ''.$nfname.' '.$nlname.'';
#################################################
    $lfname = $update['message']['left_chat_member']['first_name'];
    $llname = $update['message']['left_chat_member']['last_name'];
    $luname = $update['message']['left_chat_member']['username'];
$reply_message = $update['message']['reply_to_message'];
echo $reply_message_id = $update['message']['reply_to_message']['message_id'];
$reply_message_user_id = $update['message']['reply_to_message']['from']['id'];
$reply_message_text = $update['message']['reply_to_message']['text'];
$reply_message_user_fname = $update['message']['reply_to_message']['from']['first_name'];
$reply_message_user_lname = $update['message']['reply_to_message']['from']['last_name'];
$reply_message_user_uname = $update['message']['reply_to_message']['from']['username'];
#######################################################################################
###########################CALL BACK DATA##############################################
$callback = $update['callback_query'];
$callback_id = $update['callback_query']['id'];
$callback_from_id = $update['callback_query']['from']['id'];
$callback_from_uname = $update['callback_query']['from']['username'];
$callback_from_fname = $update['callback_query']['from']['first_name'];
$callback_from_lname = $update['callback_query']['from']['last_name'];
$callback_user_data = $update['callback_query']['data'];
$callback_message_id = $update['callback_query']['message']['id'];
$cbid = $update['callback_query']['message']['chat']['id'];
$cbmid = $update['callback_query']['message']['message_id'];
$thug_chat_id = '';
$chat_id = (string)$cid;
$thug_chat_id = "-1001291062558";
$message_dump = "-1001464778576";

######################################################################
$notes_list = file_get_contents("http://mr-stark.tk/notes.txt");
$notes_list = explode("\n", $notes_list);
$notes_list = implode('&', $notes_list);
parse_str($notes_list,$notes_list);
######################################################################

######################################################################
$filters = file_get_contents("http://mr-stark.tk/filters.txt");
$filters = explode("\n", $filters);
$filters = implode('&', $filters);
parse_str($filters,$filters);
######################################################################

print_r($filters);

    $admin_json=[
        'chat_id'=>$thug_chat_id
    ];
    $curl232 = curl_init();
    curl_setopt($curl232, CURLOPT_URL,"https://api.telegram.org/bot$tok/getChatAdministrators?");
    curl_setopt($curl232, CURLOPT_POST, 1);
    curl_setopt($curl232, CURLOPT_POSTFIELDS, $admin_json);
    curl_setopt($curl232, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl232, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($curl232, CURLOPT_SSL_VERIFYPEER, 0);
 $resp22 = curl_exec($curl232);
    $adms = json_decode($resp22,true);
 $total = count($adms['result']);
 $array_admin = '';
    for ($i=0; $i < $total ; $i++) { 
        $ddams = $adms['result'][$i]['user']['id'];
        $admin_id_list =  "$ddams,";
        $array_admin .= $admin_id_list;
    }
$admin_array = explode(',', $array_admin);
print_r($admin_array);

#########################################################################################
$my_frnds = array("801636048","672783900","1475113905","774256618","1485379027","642510273","633384904");
$ch12 = curl_init();
curl_setopt($ch12, CURLOPT_URL, "https://api.telegram.org/bot$tok/getChatMember?chat_id=$cid&user_id=$reply_message_user_id"); 
curl_setopt($ch12, CURLOPT_POST, false); 
curl_setopt($ch12, CURLOPT_RETURNTRANSFER, 1); 
    $output212 = curl_exec($ch12);
$json122 = json_decode($output212,true);
    curl_close($ch122);
$can_send_messages =  $json122['result']['can_send_messages'];
$can_send_media_messages = $json122['result']['can_send_media_messages'];
$can_send_other_messages = $json122['result']['can_send_other_messages'];
$can_add_web_page_previews = $json122['result']['can_add_web_page_previews'];
$stato = $json122['result']['status'];
##########################################################################################

#####################################CHECK ADMIN #########################################
$admi = curl_init();
curl_setopt($admi, CURLOPT_URL, "https://api.telegram.org/bot$tok/getChatMember?chat_id=$cid&user_id=$fid"); 
curl_setopt($admi, CURLOPT_POST, false); 
curl_setopt($admi, CURLOPT_RETURNTRANSFER, 1); 
    $output2121 = curl_exec($admi);
$json1221 = json_decode($output2121,true);
    curl_close($admi);
$status = $json1221['result']['status'];

if($chat_id == $thug_chat_id || $chat_id == $message_dump){

foreach ($filters as $fkw => $fri) {
    $text_array = explode(' ', $text);
    if(in_array($fkw, array_map('strtolower', $text_array))){
        $reply_filter_id = $filters["$fri"];
        $send_filter_msg = [
            'from_chat_id'=>$message_dump,
            'chat_id'=>$cid,
            'message_id'=>$fri,
            'reply_to_message_id'=>$mid,
        ];
        botaction("copyMessage",$send_filter_msg);
    }
}


if (startsWith($text,'/save')) {
    if($status == 'creator' || $status == 'administrator'){
	if($reply_message){
$note_name = str_replace('/save', '', $text);
$note_name = strtolower(urlencode(str_replace(' ', '', $note_name)));
if($note_name == ''){
    $no_note_name = [
            'chat_id'=>$cid,
            'text'=>'Note Name Is Missing My Dear!!',
            'reply_to_message_id'=>$mid,
];
botaction("sendMessage",$no_note_name);
}
else{
    echo "$reply_message_id";
    $frwd_reply_msg = json_decode(file_get_contents("https://api.telegram.org/bot1268884251:AAFdUnxyuwCcxPCy17mY8N1PoWKUDfyDV-0/copyMessage?from_chat_id=$cid&chat_id=-1001464778576&message_id=$reply_message_id"),true);
    $note_id = $frwd_reply_msg['result']['message_id'];
    file_get_contents("http://mr-stark.tk/add_note.php?name=$note_name&id=$note_id");
    $added_note = 'Done!! Added <code>'.urldecode($note_name).'</code> in '.$gname.'
    Get It With <code>#'.urldecode($note_name).'</code> or <code>/get '.urldecode($note_name).'</code>';
    $done_add = [
        'chat_id'=>$cid,
        'text'=>$added_note,
        'parse_mode'=>'HTML',
        'reply_to_message_id'=>$mid,
   ];
   botaction("sendMessage",$done_add);
}		
	}
	else{
		$no_reply_for_notes = [
			'chat_id'=>$cid,
			'text'=>'Note Is Missing My Dear!!...Reply To A Message To Save A Note',
			'reply_to_message_id'=>$mid,
		];
		botaction("sendMessage",$no_reply_for_notes);
        print_r($dadel);
	}
}
else{
    $only_admin_add_note = [
        'chat_id'=>$cid,
        'text'=>'Only Admins Can Execute This Command!!',
        'reply_to_message_id'=>$mid
    ];
    botaction("sendMessage",$only_admin_add_note);
}
}

if(startsWith($text,'/notes')){
    $note = '';
    foreach($notes_list as $key => $value) {
        $not = "- <code>$key</code>\n";
        $note .= $not;
    }
    if($note == ''){
        $no_notes_dude = [
            'chat_id'=>$cid,
            'text'=>"There Are No Notes In $gname...",
            'reply_to_message_id'=>$mid
        ];
        botaction("sendMessage",$no_notes_dude);
    }
    else{
    echo $note_display = "Notes In This Grp Are \n$note\nGet Then By <code>#{notename}</code> or <code> /get {notename}</code>";
    $send_notes = [
        'chat_id'=>$cid,
        'text'=>$note_display,
        'reply_to_message_id'=>$mid,
        'parse_mode'=>'HTML'
    ];
    botaction("sendMessage",$send_notes);
}
}

if(array_key_exists(str_replace('#', '', $text), $notes_list)){
$tt = str_replace('#', '', $text);
$reply_note = $notes_list["$tt"];
echo $reply_note;
$send_note_msg = [
'from_chat_id'=>'-1001464778576',
'chat_id'=>$cid,
'message_id'=>$reply_note,
'reply_to_message_id'=>$mid
];
botaction("copyMessage",$send_note_msg);
print_r($dadel);
}

if(startsWith($text,'/clear')){
    if($status == 'creator' || $status == 'administrator'){
    $rm_note_name = str_replace('/clear', '', $text);
    $rm_note_name = str_replace(' ', '', $rm_note_name);
    $rem_id = $notes_list["$rm_note_name"];
$rem_note_name = urlencode($rm_note_name);
if($rm_note_name == ''){
    $rem_note_name = [
            'chat_id'=>$cid,
            'text'=>'Note Name Is Missing My Dear!!',
            'reply_to_message_id'=>$mid,
];
botaction("sendMessage",$rem_note_name);

}
else{
    if(array_key_exists($rm_note_name, $notes_list)){
     file_get_contents("http://mr-stark.tk/remove_note.php?name=$rem_note_name&id=$rem_id");
    $yup_note_in = [
        'chat_id'=>$cid,
        'text'=>"Deleted <code>$rm_note_name</code> Successfully!!",
        'parse_mode'=>'HTML',
        'reply_to_message_id'=>$mid,
];
botaction("sendMessage",$yup_note_in);

    }
    else{
    $no_note_in = [
        'chat_id'=>$cid,
        'text'=>'There Is No Note By That Name!! How Am I Meant To Delete It 👀',
        'reply_to_message_id'=>$mid,
];
botaction("sendMessage",$no_note_in);
    }
}
}
}

if(startsWith($text,'/add')){
if($status == 'creator' || $status == 'administrator'){
    if(strpos($text,'"')){
        $mess_arr = str_replace('/add', "", $text);
        $mess_arr = explode('"', $text);
        $keyword = strtolower($mess_arr['1']);
        $reply = $mess_arr['2'];
    }
    else{
        $mess_arr = str_replace("/add","",$text);
        $mess_arr = explode(' ',$text);
        array_shift($mess_arr);
        $keyword = strtolower(array_shift($mess_arr));
        $reply = str_replace(" ", "%20",implode(' ',$mess_arr));
    }

if($reply_message){
    echo $keyword;
    $frwd_reply_msgs = json_decode(file_get_contents("https://api.telegram.org/bot1268884251:AAFdUnxyuwCcxPCy17mY8N1PoWKUDfyDV-0/copyMessage?from_chat_id=$cid&chat_id=-1001464778576&message_id=$reply_message_id"),true);
    $filter_id = $frwd_reply_msgs['result']['message_id'];
    file_get_contents("http://mr-stark.tk/add_filter.php?kw=$keyword&r=$filter_id");
    $done_added = [
        'chat_id'=>$cid,
        'text'=>"Added Filter $keyword in $gname",
        'parse_mode'=>'HTML',
        'reply_to_message_id'=>$mid,
   ];
   botaction("sendMessage",$done_added);

}

elseif($keyword == true && $reply == true){   
    $sm = json_decode(file_get_contents("https://api.telegram.org/bot1268884251:AAFdUnxyuwCcxPCy17mY8N1PoWKUDfyDV-0/sendMessage?chat_id=$message_dump&text=$reply"),true);
    $sid = $sm['result']['message_id'];    
    file_get_contents('http://mr-stark.tk/add_filter.php?kw='.rawurlencode($keyword).'&r='.$sid.'');
    $add_filter_success = [
    'chat_id'=>$cid,
    'text'=>"Added Filter <code>$keyword</code> in <b>$gname</b>",
    'parse_mode'=>'HTML',
    'reply_to_message_id'=>$mid,
    ];  
    botaction("sendMessage",$add_filter_success);
}

else{
        $wrng_frmt = [
            'chat_id'=>$cid,
            'text'=>'Wrong Format !!',
            'reply_to_message_id'=>$mid,
        ];
        botaction("sendMessage",$wrng_frmt);
    }
}
else{
    $no_admi = [
        'chat_id'=>$cid,
        'text'=>"Only Admins Can Do This You Noob!! ",
        'reply_to_message_id'=>$mid
    ];
botaction("sendMessage",$no_admi);
}

}

if($text == '/filters'){
    $note = '';
    foreach($filters as $key => $value) {
        $notw = "<b>•</b> <code>$key</code>\n";
        $filt .= $notw;
    }
    if($filt == ''){
        $no_filters_dude = [
            'chat_id'=>$cid,
            'text'=>"There Are No Notes In $gname...",
            'reply_to_message_id'=>$mid
        ];
        botaction("sendMessage",$no_notes_dude);
    }
    else{
    $filt_display = "Filters In $gname : \n$filt\n";
    $send_filters = [
        'chat_id'=>$cid,
        'text'=>$filt_display,
        'reply_to_message_id'=>$mid,
        'parse_mode'=>'HTML'
    ];
    botaction("sendMessage",$send_filters);
}
}
if(startsWith($text,'/remove')){
    if($status == 'creator' || $status == 'administrator'){
    $rm_filter_name = str_replace('/remove', '', $text);
    $rm_filter_name = str_replace(' ', '', $rm_filter_name);
    $filt_id = $filters["$rm_filter_name"];
$rem_filter_name = rawurlencode($rm_filter_name);
if($rm_filter_name == ''){
    $rem_filter_name_no = [
            'chat_id'=>$cid,
            'text'=>'Note Name Is Missing My Dear!!',
            'reply_to_message_id'=>$mid,
];
botaction("sendMessage",$rem_filter_name_no);

}
else{
    if(array_key_exists($rm_filter_name, $filters)){
     file_get_contents("http://mr-stark.tk/remove_filter.php?kw=$rem_filter_name&id=$filt_id");
    $yup_filter_exist = [
        'chat_id'=>$cid,
        'text'=>"OK! I Will Stop Replying To <code>$rm_filter_name</code> Now On",
        'parse_mode'=>'HTML',
        'reply_to_message_id'=>$mid,
];
botaction("sendMessage",$yup_filter_exist);

    }
    else{
    $no_note_in = [
        'chat_id'=>$cid,
        'text'=>'There Is No Filter By That Name!! How Am I Meant To Stop It 👀',
        'reply_to_message_id'=>$mid,
];
botaction("sendMessage",$no_note_in);
    }
}
}
}

}
else{
$leave2 = [
    'chat_id'=>''.$cid.'',
];
botaction("leaveChat",$leave2);

}

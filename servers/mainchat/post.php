<?php
session_start();
if(isset($_SESSION['name'])){
    $text = $_POST['text'];
    if (str_contains($text, 'Cacti4')) {
    die();
   }
   if ($text === " ") {
       die();
   }
   if (str_contains($text, 'cacti4')) {
    exit();
   }
   // Name thingy
   if (strlen($text) > 120) {
       die();
   }
   if (strlen($_SESSION['name']) > 25) {
       die();
   }
   if (str_contains($text, 'bot')) {
    exit();
   }
   if (str_contains($text, 'Bot')) {
    exit();
   }
   if (str_contains($text, 'fuck')) {
    die();
   }
   if (str_contains($text, 'Fuck')) {
    exit();
   }
   if (str_contains($text, 'Shit')) {
    exit();
   }
   if (str_contains($text, 'shit')) {
    exit();
   }
   if (str_contains($text, 'cock')) {
    die();
   }
   if (str_contains($text, 'Cock')) {
    exit();
   }
   if (str_contains($text, 'tits')) {
    exit();
   }
   if (str_contains($text, 'Tits')) {
    exit();
   }
   if (str_contains($text, 'stupid')) {
    die();
   }
   if (str_contains($text, 'Stupid')) {
    exit();
   }
   if (str_contains($text, 'sucks')) {
    exit();
   }
   if (str_contains($text, 'Sucks')) {
    exit();
   }
   if (str_contains($text, 'niger')) {
    die();
   }
   if (str_contains($text, 'Niger')) {
    exit();
   }
   if (str_contains($text, 'nigga')) {
    exit();
   }
   if (str_contains($text, 'Sucks')) {
    exit();
   }
   if (str_contains($text, 'TERRANUKER')) {
    die();
   }
   if (str_contains($text, 'terranuker')) {
    exit();
   }
   if (str_contains($text, 'Terranuker')) {
    exit();
   }
   if (str_contains($text, 'TerraNuker')) {
    exit();
   }
   if (str_contains($text, 'balls')) {
    die();
   }
   if (str_contains($text, 'Balls')) {
    exit();
   }
   if (str_contains($text, 'penis')) {
    exit();
   }
   if (str_contains($text, 'Penis')) {
    exit();
   }
   if ($text === "") {
       exit();
   }
   if (str_contains($text, 'ass')) {
    die();
   }
   if (str_contains($text, 'Ass')) {
    exit();
   }
   if (str_contains($text, 'sex')) {
    exit();
   }
   if (str_contains($text, 'Sex')) {
    exit();
   }
   if (str_contains($text, 'ip')) {
    die();
   }
   if (str_contains($text, 'Ip')) {
    exit();
   }
   if (str_contains($text, 'address')) {
    exit();
   }
   if (str_contains($text, 'Address')) {
    exit();
   }
   if (str_contains($text, 'xxx')) {
    die();
   }
   if (str_contains($text, 'XXX')) {
    exit();
   }
   if (str_contains($text, 'NSFW')) {
    exit();
   }
   if (str_contains($text, 'nsfw')) {
    exit();
   }
   if (str_contains($text, 'bitch')) {
    die();
   }
   if (str_contains($text, 'Bitch')) {
    exit();
   }
   if (str_contains($text, 'Hacked')) {
    exit();
   }
   if (str_contains($text, 'hack')) {
    exit();
   }
   if (str_contains($text, 'Hack')) {
    die();
   }
   if (str_contains($text, 'Hacked')) {
    exit();
   }
   if (str_contains($text, 'Hacker')) {
    exit();
   }
   if (str_contains($text, 'hacker')) {
    exit();
   }
   if (str_contains($text, 'bozo')) {
    die();
   }
   if (str_contains($text, 'Bozo')) {
    exit();
   }
   if (str_contains($text, 'Clown')) {
    exit();
   }
   if (str_contains($text, 'clown')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'Cacti4')) {
    die();
   }
   if (str_contains($_SESSION['name'], 'cacti4')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'bot')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'Bot')) {
    exit();
   }
   if (str_contains($text, 'Dick')) {
    die();
   }
   if (str_contains($text, 'dick')) {
    exit();
   }
   if (str_contains($text, 'Nigeria')) {
    exit();
   }
   if (str_contains($text, 'nigeria')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'Cacti4')) {
    die();
   }
   if (str_contains($_SESSION['name'], 'cacti4')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'bot')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'Bot')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'fuck')) {
    die();
   }
   if (str_contains($_SESSION['name'], 'Fuck')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'Shit')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'shit')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'cock')) {
    die();
   }
   if (str_contains($_SESSION['name'], 'Cock')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'tits')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'Tits')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'stupid')) {
    die();
   }
   if (str_contains($_SESSION['name'], 'Stupid')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'sucks')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'Sucks')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'niger')) {
    die();
   }
   if (str_contains($_SESSION['name'], 'Niger')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'nigga')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'Nigga')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'balls')) {
    die();
   }
   if (str_contains($_SESSION['name'], 'Balls')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'penis')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'Penis')) {
    exit();
   }
   if ($_SESSION['name'] === "") {
       exit();
   }
   if (str_contains($_SESSION['name'], 'ass')) {
    die();
   }
   if (str_contains($_SESSION['name'], 'Ass')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'sex')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'Sex')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'ip')) {
    die();
   }
   if (str_contains($_SESSION['name'], 'Ip')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'address')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'Address')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'xxx')) {
    die();
   }
   if (str_contains($_SESSION['name'], 'XXX')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'NSFW')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'nsfw')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'bitch')) {
    die();
   }
   if (str_contains($_SESSION['name'], 'Bitch')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'Hacked')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'hack')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'Hack')) {
    die();
   }
   if (str_contains($_SESSION['name'], 'Hacked')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'Hacker')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'hacker')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'bozo')) {
    die();
   }
   if (str_contains($_SESSION['name'], 'Bozo')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'Clown')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'Terranuker')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'terranuker')) {
    die();
   }
   if (str_contains($_SESSION['name'], 'TERRANUKER')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'TerraNuker')) {
    exit();
   }
   if (str_contains($_SESSION['name'], 'clown')) {
    exit();
   }
	$br = "<br class='br'>";
	$text_message = "<div class='msgln'><span class='chat-time'>".date("g:i A")."</span> <b class='user-name'>".$_SESSION['name']."</b> ".stripslashes(htmlspecialchars($text))."</div>";
	file_put_contents("log.html", $text_message, FILE_APPEND | LOCK_EX);
}
?>
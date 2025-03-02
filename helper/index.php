<?php 

session_start();

function getSessionLang() {

    $session_lang = 'ar';

    if(isset($_SESSION["lang"]) && !empty($_SESSION["lang"])) {
        $session_lang = $_SESSION["lang"];
    } else {
        $_SESSION["lang"] = $session_lang;
    }

    return $session_lang;
}

function getContent($key, $page) {
    $lang = $_SESSION["lang"];

    $path = "./lang/" .$lang. "/".$page.".php";

    $data = include $path;

    echo $data[$key];
}

function changeLang($lang) {
    
    if(isset($lang) && !empty($lang) && ($lang == "ar" || $lang == "en")) {
        $_SESSION["lang"] = $lang;
    }
    return;
}
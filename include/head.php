<?php 

include 'helper/index.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['LangOption'])) {
        $selectedLang = $_POST['LangOption'];
        changeLang($selectedLang);
    }
}

$lang = getSessionLang();

if($lang == 'ar') {
    $dir = "rtl";
} else {
    $dir = "ltr";
}


?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>" dir="<?php echo $dir; ?>">
<head>
    <style>
       .loader{position:fixed;background-color:#bfbfbf;left:0;right:0;top:0;bottom:0;height:100vh;width:100vw;visibility:hidden;opacity:0;z-index:999;display:flex;justify-content:center;align-items:center;transition:.3s ease-in-out}.loader.show{visibility:visible;opacity:1}.shapes{width:56px;height:48.496px;position:relative;background:conic-gradient(from 120deg at 50% 64%,#0000,#1a1818 1deg 120deg,#0000 121deg);transform-origin:50% 50%;animation:1.5s cubic-bezier(.3,1,0,1) infinite shapes-b3u1dgmd}.shapes:after,.shapes:before{content:'';position:absolute;inset:0;background:inherit;transform-origin:50% 66%;animation:1.5s infinite shapes-ki907omd}.shapes:after{--s:-1}@keyframes shapes-b3u1dgmd{0%,30%{transform:rotate(0)}70%{transform:rotate(120deg)}100%,70.01%{transform:rotate(360deg)}}@keyframes shapes-ki907omd{0%,100%{transform:rotate(calc(var(--s,1)*120deg)) translate(0)}30%,70%{transform:rotate(calc(var(--s,1)*120deg)) translate(calc(var(--s,1)*-5.6px),11.2px)}}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 

    <link rel="icon" type="image/png" href="/assets/imgs/icon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/assets/imgs/icon/favicon-16x16.png" sizes="16x16" />


    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
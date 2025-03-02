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
        .loader {
            position: fixed;
            background-color: #bfbfbf;
            left: 0px;
            right: 0px;
            top: 0px;
            bottom: 0px;
            height: 100vh;
            width: 100vw;
            visibility: hidden;
            opacity: 0;
            z-index: 999;
            transition: all .3s ease-in-out;
        }
        .loader.show {
            visibility: visible;
            opacity: 1;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 

    <link rel="icon" type="image/png" href="/assets/imgs/icon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/assets/imgs/icon/favicon-16x16.png" sizes="16x16" />


    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
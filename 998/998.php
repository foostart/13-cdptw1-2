<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('less/998.less', 'css/998.css');
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <title>998</title>
        <link rel="stylesheet" type="text/css" href="css/998.css">
        <link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="./css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="./css/998.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="./css/owl.carousel.min.css">
        <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="./js/jquery.min.js"></script>
        <script src="./js/owl.carousel.js"></script>
        <script src="./js/998.js"></script>
   
    </head>
    <body>
        <?php include '../998/998-content.php'; ?>
    </body>
</html>

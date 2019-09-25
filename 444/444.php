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
$less->compileFile('less/444.less', 'css/444.css');
?>
<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title>Module 444</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/swiper.min.css">
        <link href="<?php echo $url_path ?>/css/444.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/nouislider.min.css" rel="stylesheet" type="text/css" >
       

    </head>

    <body>
        <?php include $dir_block.'/444-content.php';?>
    </body>

     <script type="text/javascript" src = "js/jquery.min.js"></script>
    <script type="text/javascript" src = "js/bootstrap.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/444.js"></script>
     <script type="text/javascript" src="js/nouislider.min.js"></script>
         <script type="text/javascript" src="js/main.js"></script>
    
  
</html>
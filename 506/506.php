<!DOCTYPE html>

<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    
    $less = new lessc;
  $less->compileFile('less/506.less', 'css/506.css');
?>


<html>

    <head>
        <title>506</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> 
        <link href="<?php echo $url_path ?>/css/506.css" rel="stylesheet" type="text/css" />
        
        <script>
        /*global $ */
$(document).ready(function () {

"use strict";

$('.menu > ul > li:has( > ul)').addClass('menu-dropdown-icon');
//Checks if li has sub (ul) and adds class for toggle icon - just an UI


$('.menu > ul > li > ul:not(:has(ul))').addClass('normal-sub');
//Checks if drodown menu's li elements have anothere level (ul), if not the dropdown is shown as regular dropdown, not a mega menu (thanks Luka Kladaric)

$(".menu > ul").before("<a href=\"#\" class=\"menu-mobile\">Navigation</a>");

//Adds menu-mobile class (for mobile toggle menu) before the normal menu
//Mobile menu is hidden if width is more then 959px, but normal menu is displayed
//Normal menu is hidden if width is below 959px, and jquery adds mobile menu
//Done this way so it can be used with wordpress without any trouble

$(".menu > ul > li").hover(function (e) {
    if ($(window).width() > 943) {
        $(this).children("ul").stop(true, false).fadeToggle(150);
        e.preventDefault();
    }
});
//If width is more than 943px dropdowns are displayed on hover

$(".menu > ul > li").click(function () {
    if ($(window).width() <= 943) {
        $(this).children("ul").fadeToggle(150);
    }
});
//If width is less or equal to 943px dropdowns are displayed on click (thanks Aman Jain from stackoverflow)

$(".menu-mobile").click(function (e) {
    $(".menu > ul").toggleClass('show-on-mobile');
    e.preventDefault();
});
//when clicked on mobile-menu, normal menu is shown as a list, classic rwd menu story (thanks mwl from stackoverflow)

});</script>
    </head>

    <body>
        <?php include $dir_block.'/506-content.php'; ?>
    </body>
</html> 
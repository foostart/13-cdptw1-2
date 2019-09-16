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
?>     
            <div class="container">
                <div class="row">
                    <div class="type">
                        <div class="title">
                        <a href="#">Welcome to Worldwide Electronics Store</a>
                        <div class="menu" id="menu">
                            <ul>
                                <li>
                                    <a href="#">Shop</a>
                                    <ul class="mega-menu">
                                        <li><a href="#">Store Locator</a></li>
                                        <li><a href="#">Track Your Oder</a></li>
                                        <li><a href="#">Menu</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">My Account</a>
                                    <ul class="mega-menu">
                                        <li><a href="#">Login</a></li>
                                        <li><a href="#">Security</a></li>
                                        <li><a href="#">Log Out</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="top-bar"></div>
                    <div class="herder">
                        <div class="row">
                            <div class=" col-md-3">
                                <div class="logo">
                                    <a href="#"> <img src="<?php echo $url_path ?>/images/logo.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-6 seach">
                                <form  method="get" class="gensearch_form" onsubmit="Gsitesearch(this)" target="black">
                                    <input type="text" class="gensearch_input" value="" placeholder="SEARCH...">
                                    <button  class="gensearch_submit glyphicon glyphicon-search" ></button>
                                </form>
                            </div>

                            <div class="col-md-3 icon3">
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
            </div>
        </div>
    </div>
                    
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
                    <div class="type-477">
                           <a href="#">Welcome to Worldwide Electronics Store</a>
                       <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>

 
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

                        <!-- <div class="title">
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
                    </div> -->
                    <div class="top-bar"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="logo">
                                    <a href="#"> <img  src="<?php echo $url_path ?>/images/logo.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12  ">
                                <form  method="get" class="gensearch_form" onsubmit="Gsitesearch(this)" target="black">
                                    <input type="text" class="gensearch_input" value="" placeholder="SEARCH...">
                                    <button  class="gensearch_submit glyphicon glyphicon-search" ></button>
                                </form>
                            </div>

                          
                        </div>
                    </div>
                    <div class="clearfix"></div>
            </div>
        </div>
    </div>
                    
<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
        <div class="type-505">
            <div class="container"> 
                <div class="topline"></div>
                <div class="container backgr">
                    <div class="row">
                        <!-- Header -->
                        <div class="col-md-6 col-sm-6 col-xs-6 fullwidth ">
                            <!-- Logo -->
                            <div class="eight-columns">
                                <div id="logo">
                                    <h1><a href="#"><img src="images/logo1.png" alt="Nevia Premium Template" /></a></h1>
                                    <div id="tagline">Template Without Compromises!</div>
                                </div>
                            </div>
                        </div>
                        <!-- Social / Contact -->
                        <div class="col-md-6 col-sm-6 col-xs-6 fullwidth ">
                            <div class="eight-columns second">
                                <!-- Social Icons -->
                                <ul class="social-icons">
                                    <li class="twitter"><a href="#">Twitter</a></li>
                                    <li class="facebook"><a href="#">Facebook</a></li>
                                    <li class="dribbble"><a href="#">Dribbble</a></li>
                                    <li class="linkedin"><a href="#">LinkedIn</a></li>
                                    <li class="rss"><a href="#">RSS</a></li>
                                </ul>

                                <div class="clearfix"></div>
                                <!-- Contact Details -->
                                <div class="contact-details">Contact Phone: +48 880 440 110</div>
                                <div class="clearfix"></div>
                                <!-- Search -->
                                <nav class="top-search">
                                    <form action="404-page.html" method="get">
                                        <button class="search-btn"></button>
                                        <input class="search-field" type="text" onblur="if (this.value == '')
                                                    this.value = 'Search';" onfocus="if (this.value == 'Search')
                                                                this.value = '';" value="Search" />
                                    </form>
                                </nav>
                            </div>
                        </div>
                        <!-- Header / End -->
                    </div>
                </div>
            </div>
        </div>
<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
        <div class="type-506">
            <div class="container">
                <div class="row">
                    <nav id="navigation" class="navbar navbar-default">
                        <div class="left-corner"></div>
                        <div class="right-corner"></div>
                        <ul class="menu">
                            <li><a href="#" id="current"><i class="halflings fa fa-home  home"></i> Home</a></li>
                            <li><a href="#"><i class="fa fa-file halflings file"></i> Features</a>
                                <!-- Mega Menu / Start -->
                                <ul class="cols3">
                                    <li class="col3">
                                        <h4>Two Lists and a Paragraph</h4>
                                    </li>
                                    <li class="col1">
                                        <h5>Page Layouts</h5>
                                        <ol>
                                            <li><a href="about-us.html">About</a></li>
                                            <li><a href="flexslider.html">FlexSlider</a></li>
                                            <li><a href="pricing-tables.html">Pricing Tables</a></li>
                                            <li><a href="elements.html">Elements</a></li>
                                        </ol>
                                    </li>
                                    <li class="col1">
                                        <h5>Other Pages</h5>
                                        <ol>
                                            <li><a href="faq.html">FAQ's</a></li>
                                            <li><a href="404-page.html">404 Page</a></li>
                                            <li><a href="left-sidebar.html">Left Sidebar</a></li>
                                            <li><a href="right-sidebar.html">Right Sidebar</a></li>
                                        </ol>
                                    </li>
                                    <li class="col1">
                                        <h5>Paragraph</h5>
                                        <p>This <a href="#">Mega Menu</a> can handle everything. Lists, paragraphs, forms...</p>
                                    </li>
                                </ul>
                                <!-- Mega Menu / End -->
                            </li>
                            <li><a href="#"><i class="halflings fa fa-cogs  cog"></i> Shortcodes</a>
                                <!-- Second Level / Start -->
                                <ul>
                                    <li><a href="elements.html">Elements</a></li>
                                    <li><a href="icons.html">Icons</a></li>
                                    <li><a href="pricing-tables.html">Pricing Tables</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                </ul>
                                <!-- Second Level / End -->
                            </li>
                            <li><a href="#"><i class="halflings fa fa-briefcase  briefcase"></i> Portfolio</a>
                                <!-- Second Level / Start -->
                                <ul>
                                    <li><a href="portfolio-2.html">2 Columns</a></li>
                                    <li><a href="portfolio-3.html">3 Columns</a></li>
                                    <li><a href="portfolio-4.html">4 Columns</a></li>
                                    <li><a href="single-project.html">Single Project</a></li>
                                </ul>
                                <!-- Second Level / End -->
                            </li>
                            <li><a href="#"><i class="halflings fa fa-shopping-cart shopping-cart"></i> Shop</a>
                                <!-- Second Level / Start -->
                                <ul>
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="product-page.html">Product Page</a></li>
                                </ul>
                                <!-- Second Level / End -->
                            </li>
                            <li><a href="#"><i class="halflings fa  fa-pencil pencil"></i> Blog</a>
                                <!-- Second Level / Start -->
                                <ul>
                                    <li><a href="blog-large-image.html">Large Image</a></li>
                                    <li><a href="blog-medium-image.html">Medium Image</a></li>
                                    <li><a href="blog-post.html">Single Post</a></li>
                                </ul>
                                <!-- Second Level / End -->
                            </li>
                            <li><a href="contact.html"><i class="glyphicon glyphicon-envelope halflings envelope"></i> Contact</a></li>
                        </ul>
                    </nav>                 
                </div>
            </div>
        </div>

    <?php
        include 'include/header.inc.php';
    ?>
	<body>
        <div class="container-fluid home-back">
			<div class="row">
                <div class="col-md-12 selection">
                    <div class="wrap">
                        <div class="want"><h4><i>I want to</i></h4></div>
                        <div class="select-opt">
                            <!--<select class="dropdown-new">
                              <option value="BUY" class="drop-menu">BUY</option>
                              <option value="SELL" class="drop-menu">SELL</option>
                              <option value="RENT" class="drop-menu">RENT</option>
                            </select>-->
                            <div class="dropdown dropdown-new">
                              <button class="btn btn-default dropdown-toggle dropdown-btn btn-lg" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                BUY
                                <!--<span class="caret  caret-right"></span>-->
                              </button>
                              <ul class="dropdown-menu drop-menu" role="menu" id="dropMenu1" aria-labelledby="dropdownMenu1">
                                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="drop_menu_a1" >BUY</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="drop_menu_a2">SELL</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="drop_menu_a3">RENT</a></li>
                              </ul>
                            </div>
                            <!--<select class="dropdown-new">
                              <option value="COMMERCIAL" class="drop-menu">COMMERCIAL</option>
                              <option value="RESIDENTIAL" class="drop-menu">RESIDENTIAL</option>
                            </select>-->
                            <div class="dropdown dropdown-new">
                              <button class="btn btn-default dropdown-toggle dropdown-btn btn-lg" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="true">
                                COMMERCIAL
                                <!--<span class="caret  caret-right"></span>-->
                              </button>
                              <ul class="dropdown-menu drop-menu" id="dropMenu2" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="drop_menu_b1">COMMERCIAL</a></li>
                                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="drop_menu_b2">RESIDENTIAL</a></li>
                              </ul>

                            </div>
                            <!--<select class="dropdown-new">
                              <option value="BUY" class="drop-menu">RESALE</option>
                              <option value="NEW PROJECT-LUXURY" class="drop-menu">NEW PROJECT-LUXURY</option>
                               <option value="NEW PROJECT-VALUE" class="drop-menu">NEW PROJECT-VALUE</option>
                            </select>-->
                            <div class="dropdown dropdown-new">
                              <button class="btn btn-default dropdown-toggle dropdown-btn btn-lg" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-expanded="true">
                                RESALE
                                <!--<span class="caret caret-right"></span>-->
                              </button>
                              <ul class="dropdown-menu drop-menu" id="dropMenu3" role="menu" aria-labelledby="dropdownMenu1">
                                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="drop_menu_c1">RESALE</a></li>
                                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="drop_menu_c2">NEW PROJECT-LUXURY</a></li>
                                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="drop_menu_c3">NEW PROJECT-VALUE</a></li>
                                  <!--<li class="dropdown-submenu">
                                    <a href="#">RESALE</a>
                                    <ul class="dropdown-menu drop-menu">
                                        <li><a href="#">NEW PROJECT-LUXURY</a></li>
                    	                <li><a href="#">NEW PROJECT-VALUE</a></li>
                                    </ul>
                                  </li>-->
                              </ul>
                            </div>

                        </div>
                         <div class="dropdown-search">
                            <form method="get" action="" role="search">
							    <div class="form-group home-search">
								    <input class="form-control input-lg search-input over-search" type="text" placeholder="Enter City, Area, Location or Zip" value="" />
							    </div>
							    <button type="submit" class="btn btn-danger btn-lg home-search-btn">
								    SEARCH
							    </button>
						    </form>     
                        </div>
                     </div>
                </div>
            </div>
		</div>
        <div class="container-fluid wrapper">
            <div class="row">
                <div class="col-md-8">
                    <h4>NEW PROPERTIES</h4><br>
                    <div class="slider">
                        <div class="container">
                            <div id="main_area">
                                <!-- Slider -->
                                <div class="row">
                                    <div class="col-xs-12" id="slider">
                                        <!-- Top part of the slider -->
                                        <div class="row">
                                            <div class="col-sm-8 slider-col" id="carousel-bounding-box">
                                                <div class="carousel slide" id="myCarousel">
                                                    <!-- Carousel items -->
                                                    <div class="carousel-inner">
                                                        <div class="active item" data-slide-number="0">
                                                        <img src="img/slider.png"></div>

                                                        <div class="item" data-slide-number="1">
                                                        <img src="img/slider.png"></div>

                                                        <div class="item" data-slide-number="2">
                                                        <img src="img/slider.png"></div>

                                                    </div><!-- Carousel nav -->
                                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                                        <span class="glyphicon glyphicon-chevron-left"></span>                                       
                                                    </a>
                                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                                        <span class="glyphicon glyphicon-chevron-right"></span>                                       
                                                    </a>                                
                                                    </div>
                                            </div>

                                            <div class="col-sm-4" id="carousel-text"></div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row hidden-xs" id="slider-thumbs">
                                    <ul class="hide-bullets">
                                        <li class="col-sm-2 thumb">
                                            <a class="thumbnail" id="carousel-selector-0"><img src="img/img1.jpg" class="img-responsive"></a>
                                        </li>

                                        <li class="col-sm-2 thumb">
                                            <a class="thumbnail" id="carousel-selector-1"><img src="img/img2.jpg"></a>
                                        </li>

                                        <li class="col-sm-2 thumb">
                                            <a class="thumbnail" id="carousel-selector-2"><img src="img/img3.jpg"></a>
                                        </li>
                                    </ul>                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4 class="header-adjust">PRICE HEAT MAP</h4><br>
                    <div class="price-map">
                        <div class="price-btn">
                            <button class="btn btn-danger btn-lg bt-price">VIEW</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid wrapper">
            <div class="row">
                <div class="col-md-12">
                <h4 class="header-adjust">SERVICES</h4>
                <h3 class="center">Get Property advise before you decide</h3>
                    </div>
            </div>
            <div class="row">
                <div class="col-md-12 center services">
                    <div class="col-md-3 service">
                        <img src="img/locality.png" class="img-responsive img-center"/>
                        <h3>Compare Localities</h3>
                        <button type="submit" class="btn btn-default btn-read">Read More</button>
                    </div>
                    <div class="col-md-3 service">
                        <img src="img/trends.png" class="img-responsive img-center"/>
                        <h3>Know Price Trends</h3>
                        <button type="submit" class="btn btn-default btn-read">Read More</button>
                    </div>
                    <div class="col-md-3 service">
                        <img src="img/experts.png" class="img-responsive img-center"/>
                        <h3>Ask the Experts</h3>
                        <button type="submit" class="btn btn-default btn-read">Read More</button>
                    </div>
                    <div class="col-md-3 service">
                        <img src="img/calculator.png" class="img-responsive img-center"/>
                        <h3>Calculators</h3>
                        <button type="submit" class="btn btn-default btn-read">Read More</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <h4>TESTIMONIAL&nbsp;&nbsp;<span class="caret"></span></h4>
                        <div class="row test">
                            <div class="col-md-12">
                                <div class="col-md-3 user">
                                    <img src="img/user.png" class="img-responsive img-circle"/>
                                    <h5 class="name">John Smith</h5>
                                </div>
                                <div class="col-md-9 user">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row test">
                            <div class="col-md-12">
                                <div class="col-md-3 user">
                                    <img src="img/user.png" class="img-responsive img-circle"/>
                                    <h5 class="name">John Smith</h5>
                                </div>
                                <div class="col-md-9">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4>VIDEOS&nbsp;&nbsp;<span class="caret"></span></h4>
                        <div class="row">
                            <div class="col-md-12 video-wrapper">
                                <div class="col-md-4">
                                    <div class="video">
                                    
                                    </div>
                                    <h5>John Smith</h5>
                                </div>
                                <div class="col-md-4">
                                    <div class="video">
                                    
                                    </div>
                                    <h5>John Smith</h5>
                                </div>
                                <div class="col-md-4">
                                    <div class="video">
                                    
                                    </div>
                                    <h5>John Smith</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 video-wrapper">
                                <div class="col-md-4">
                                    <div class="video">
                                    
                                    </div>
                                    <h5>John Smith</h5>
                                </div>
                                <div class="col-md-4">
                                    <div class="video">
                                    
                                    </div>
                                    <h5>John Smith</h5>
                                </div>
                                <div class="col-md-4">
                                    <div class="video">
                                    
                                    </div>
                                    <h5>John Smith</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <?php
            include 'include/footer.inc.php';
        ?>
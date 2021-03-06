<style>
    #slider-range{width: 40% !important;float: left;margin-top: 6px;}
    #amount-lt,#amount-rt{width: 30% !important;float: left; height: 25px;line-height: normal;}
</style>    
<?php
        include 'include/header.inc.php';
    ?>
    <hr>
	<body>
            
        <div class="container-fluid">
            <h3 class="head-adj">FILTER YOUR RESULTS</h3><br>
			<div class="row back-filter">
                <div class="trans_filter">
                    <div class="filter-title">Locality</div>
                    <div class="filter-bottom">
                        <div class="dropdown filter-dropdown">
                        <button class="btn btn-default dropdown-toggle filter-dd-btn" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                        Bandra
                        </button>
                        <ul class="dropdown-menu filter-drop" role="menu" id="dropMenu1" aria-labelledby="dropdownMenu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Santacruz</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Dadar</a></li>
                        </ul>
                    </div>
                </div>
                </div>
                <div class="trans_filter">
                    <div class="filter-title">BHK</div>
                    <div class="filter-bottom btn-grp">
                    <div class="btn-group" role="group" aria-label="...">
                      <button type="button" class="btn btn-default btn-nav"><<</button>
                      <button type="button" class="btn btn-default btn-range">2</button>
                      <button type="button" class="btn btn-default btn-nav">>></button>
                    </div>
                        </div>
                </div>
                <div class="trans_filter">
                    <div class="filter-title">Budget</div>
                    <div class="filter-bottom bottom-range">
                    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
                            <script src="//code.jquery.com/jquery-1.10.2.js"></script>
                            <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
                            <link rel="stylesheet" href="/resources/demos/style.css">
                            <script>
                                $(function () {
                                    $("#slider-range").slider({
                                        range: true,
                                        min: 1000,
                                        max: 50000,
                                        values: [75, 300],
                                        slide: function (event, ui) {
                                            $("#amount-lt").val("Rs." + ui.values[0]);
                                            $("#amount-rt").val("Rs." + ui.values[1]);
                                        }
                                    });
                                    $("#amount-lt").val("Rs. " + $("#slider-range").slider("values", 0));
                                    $("#amount-rt").val("Rs. " + $("#slider-range").slider("values", 1));
                                });
                            </script>
                            <input type="text" id="amount-lt" readonly><div id="slider-range"></div>
                            <input type="text" id="amount-rt" readonly>
                        </div>
                </div>
                <div class="trans_filter">
                    <div class="filter-title">Listed by</div>
                    <div class="filter-bottom">
                        <div class="dropdown filter-dropdown">
                        <button class="btn btn-default dropdown-toggle filter-dd-btn" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="true">
                        Owner
                        </button>
                        <ul class="dropdown-menu filter-drop" role="menu" id="dropMenu2" aria-labelledby="dropdownMenu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Lpsum</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Lorem</a></li>
                        </ul>
                    </div>
                        </div>
                </div>
                <div class="trans_filter">
                    <div class="filter-title">Furnishing</div>
                    <div class="filter-bottom">
                        <div class="dropdown filter-dropdown">
                        <button class="btn btn-default dropdown-toggle filter-dd-btn" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-expanded="true">
                        Furnished
                        </button>
                        <ul class="dropdown-menu filter-drop" role="menu" id="dropMenu3" aria-labelledby="dropdownMenu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Furnished</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Non-furnished</a></li>
                        </ul>
                    </div>
                        <!--<div class="dropdown dropdown-new trans-dropdown">
                              <button class="btn btn-default dropdown-toggle dropdown-btn btn-lg" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-expanded="true">
                                Non-furnished
                              </button>
                              <ul class="dropdown-menu drop-menu filter-drop" id="dropMenu3" role="menu" aria-labelledby="dropdownMenu1">
                                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="drop_menu_c1">Non-furnished</a></li>
                                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="drop_menu_c2">Furnished</a></li>
                                  <li class="dropdown-submenu">
                                    <a href="#">RESALE</a>
                                    <ul class="dropdown-menu drop-menu">
                                        <li><a href="#">NEW PROJECT-LUXURY</a></li>
                    	                <li><a href="#">NEW PROJECT-VALUE</a></li>
                                    </ul>
                                  </li>
                              </ul>
                            </div>-->
                        </div>
                </div>
                <div class="trans_filter">
                    <div class="filter-title">Property type</div>
                    <div class="filter-bottom">
                         <div class="dropdown filter-dropdown">
                        <button class="btn btn-default dropdown-toggle filter-dd-btn" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-expanded="true">
                        Apartment
                        </button>
                        <ul class="dropdown-menu filter-drop" role="menu" id="dropMenu4" aria-labelledby="dropdownMenu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Apartment</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Flat</a></li>
                        </ul>
                    </div>
                        </div>
                </div>
                <div class="trans_filter">
                    <div class="filter-title">Date added</div>
                    <div class="filter-bottom date-range">
                        <div class="input-daterange input-group" id="datepicker">
                            <input type="text" class="input-sm form-control input-range" name="start" placeholder="03/02/2015"/>
                            <span class="input-group-addon new-md">to</span>
                            <input type="text" class="input-sm form-control input-range" name="end" placeholder="02/28/2015"/>
                        </div>
                    </div>
                </div>
                <div class="trans_filter">
                    <div class="filter-title">Bathroom</div>
                    <div class="filter-bottom btn-grp">
                    <div class="btn-group" role="group" aria-label="...">
                      <button type="button" class="btn btn-default btn-nav"><<</button>
                      <button type="button" class="btn btn-default btn-range">2</button>
                      <button type="button" class="btn btn-default btn-nav">>></button>
                    </div>
                        </div>
                </div>
                <div class="trans_filter">
                    <div class="filter-title">Builder</div>
                    <div class="filter-bottom">
                        <div class="dropdown filter-dropdown">
                        <div class="dropdown filter-dropdown">
                        <button class="btn btn-default dropdown-toggle filter-dd-btn" type="button" id="dropdownMenu5" data-toggle="dropdown" aria-expanded="true">
                        RK Builders
                        </button>
                        <ul class="dropdown-menu filter-drop" role="menu" id="dropMenu5" aria-labelledby="dropdownMenu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">RK Builders</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Raheja Builders</a></li>
                        </ul>
                    </div>
                        </div>
                </div>
            </div>
		</div>
        </div>
        <div class="container-fluid">
            <br><h3 class="head-adj">CHOOSE FACILITIES</h3><br>
            <div class="row slider-filter">
               <div class="buttons new-buttons">
                    <h4 class="left-head">Society Facilities</h4><br>
                    <h4 class="left-head">Flat Facilities</h4><br>
                </div>
                <div class="check-slider">
                <div id="slider0" class="new-slider0">
                    <a class="control_next0 arrow" id="control_next0"><img src="img/next-arrow.png" /></a>
                    <a class="control_prev0 arrow" id="control_prev0"><img src="img/prev-arrow.png" /></a>
                    <ul>
                    <li>
                        <div class="seperate"></div>
                        <div class="checkbox checkbox_first">
                            <label>
                                <input type="checkbox"><img src="img/gym.png" /> Gym
                            </label>
                            </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> <img src="img/swim.png" /> Swimming
                            </label>
                            </div>
                        <div class="checkbox checkbox_first">
                            <label>
                                <input type="checkbox"><img src="img/gym.png" /> Gym
                            </label>
                            </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> <img src="img/swim.png" /> Swimming
                            </label>
                            </div>
                                
                    </li>
                        <li>
                        <div class="seperate"></div>
                        <div class="checkbox checkbox_first">
                            <label>
                                <input type="checkbox"><img src="img/gym.png" /> Gym
                            </label>
                            </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> <img src="img/swim.png" /> Swimming
                            </label>
                            </div>
                        <div class="checkbox checkbox_first">
                            <label>
                                <input type="checkbox"><img src="img/gym.png" /> Gym
                            </label>
                            </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> <img src="img/swim.png" /> Swimming
                            </label>
                            </div>
                                
                    </li>
                        <li>
                        <div class="seperate"></div>
                        <div class="checkbox checkbox_first">
                            <label>
                                <input type="checkbox"><img src="img/gym.png" /> Gym
                            </label>
                            </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> <img src="img/swim.png" /> Swimming
                            </label>
                            </div>
                        <div class="checkbox checkbox_first">
                            <label>
                                <input type="checkbox"><img src="img/gym.png" /> Gym
                            </label>
                            </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> <img src="img/swim.png" /> Swimming
                            </label>
                            </div>
                                
                    </li>
                        <li>
                        <div class="seperate"></div>
                        <div class="checkbox checkbox_first">
                            <label>
                                <input type="checkbox"><img src="img/gym.png" /> Gym
                            </label>
                            </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> <img src="img/swim.png" /> Swimming
                            </label>
                            </div>
                        <div class="checkbox checkbox_first">
                            <label>
                                <input type="checkbox"><img src="img/gym.png" /> Gym
                            </label>
                            </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> <img src="img/swim.png" /> Swimming
                            </label>
                            </div>
                                
                    </li>
                    </ul>  
                </div>
                <div id="slider1" class="new-slider1">
                    <a class="control_next1 arrow" id="control_next1"><img src="img/next-arrow.png" /></a>
                    <a class="control_prev1 arrow" id="control_prev1"><img src="img/prev-arrow.png" /></a>
                    <ul>
                    <li>
                        <div class="seperate"></div>
                        <div class="checkbox checkbox_first">
                            <label>
                                <input type="checkbox"><img src="img/gym.png" /> Gym
                            </label>
                            </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> <img src="img/swim.png" /> Swimming
                            </label>
                            </div>
                        <div class="checkbox checkbox_first">
                            <label>
                                <input type="checkbox"><img src="img/gym.png" /> Gym
                            </label>
                            </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> <img src="img/swim.png" /> Swimming
                            </label>
                            </div>
                                
                    </li>
                        <li>
                        <div class="seperate"></div>
                        <div class="checkbox checkbox_first">
                            <label>
                                <input type="checkbox"><img src="img/gym.png" /> Gym
                            </label>
                            </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> <img src="img/swim.png" /> Swimming
                            </label>
                            </div>
                        <div class="checkbox checkbox_first">
                            <label>
                                <input type="checkbox"><img src="img/gym.png" /> Gym
                            </label>
                            </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> <img src="img/swim.png" /> Swimming
                            </label>
                            </div>
                                
                    </li>
                        <li>
                        <div class="seperate"></div>
                        <div class="checkbox checkbox_first">
                            <label>
                                <input type="checkbox"><img src="img/gym.png" /> Gym
                            </label>
                            </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> <img src="img/swim.png" /> Swimming
                            </label>
                            </div>
                        <div class="checkbox checkbox_first">
                            <label>
                                <input type="checkbox"><img src="img/gym.png" /> Gym
                            </label>
                            </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> <img src="img/swim.png" /> Swimming
                            </label>
                            </div>
                                
                    </li>
                        <li>
                        <div class="seperate"></div>
                        <div class="checkbox checkbox_first">
                            <label>
                                <input type="checkbox"><img src="img/gym.png" /> Gym
                            </label>
                            </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> <img src="img/swim.png" /> Swimming
                            </label>
                            </div>
                        <div class="checkbox checkbox_first">
                            <label>
                                <input type="checkbox"><img src="img/gym.png" /> Gym
                            </label>
                            </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> <img src="img/swim.png" /> Swimming
                            </label>
                            </div>
                                
                    </li>
                    </ul>  
                </div>      
                </div>
            </div>
        </div>
        <div class="container-fluid full-property">
            <div class="property-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15084.97396366665!2d72.82990849999999!3d19.05302915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c8e123f8d27b%3A0x437996b49a236a78!2sBandra+West%2C+Mumbai%2C+Maharashtra!5e0!3m2!1sen!2sin!4v1423034381818" width="100%" height="650" frameborder="0" style="border:0"></iframe>
            </div>
            <div class="main">
                <div class="close-info" style="float: left;">Close</div>
            
            <div class="prop-info scrollbox">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                          <img src="img/prop-img.jpg" alt="...">
                          <div class="carousel-caption cc">
                            <div class="slide-caption">Rs. 1.4 Crore <span class="small">(negotiable)</span></div>
                          </div>
                        </div>
                        <div class="item">
                          <img src="img/prop-img.jpg" alt="...">
                          <div class="carousel-caption cc">
                            <div class="slide-caption">Rs. 1.4 Crore <span class="small">(negotiable)</span></div>
                          </div>
                        </div>
                      </div>

                      <!-- Controls -->
                      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <!--<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>-->
                          <img class="img-nav" src="img/prev.png" />
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <!--<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>-->
                          <img class="img-nav" src="img/next.png" />
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                <div class="prop-btns">
                    <a href="#details"><button type="submit" class="btn btn-default btn-read bot-btn btn-prop">DETAILS</button></a>
                    <a href="#amenities"><button type="submit" class="btn btn-default btn-read bot-btn btn-prop">AMENITIES</button></a>
                    <a href="#commute"><button type="submit" class="btn btn-default btn-read bot-btn btn-prop">COMMUTE</button></a>
                    <a href="#locality"><button type="submit" class="btn btn-default btn-read bot-btn btn-prop">LOCALITY</button></a>
                </div>
                <div class="prop-addr">
                    <div class="address">
                         <h3 id="details">2 BHK Apartment</h3>
                        <p>32/A, Mhada Colony, Lokhandwala, Andheri (West).<br> Mumbai - 400034</p>
                    </div>
                    <div class="rank">
                        <div class="value">
                            <span class="life">LIFESTYLE</span>
                            <span class="val">7.5</span>
                        </div>
                    </div>
                    <div class="details">
                        <div class="head-under1">Property Details</div>
                        <table class="table prop-table">
                            <tbody>
                            <tr>
                                <td>Built up area : <span class="light">1200 sq.ft</span> </td>
                                <td>Price per sq.ft. : <span class="light">Rs. 172020/sq.ft.</span></td>
                            </tr>
                            <tr>
                                <td>No. of lifts : <span class="light">2</span> </td>
                                <td>Furnishing : <span class="light">6</span></td>
                            </tr>
                            <tr>
                                <td>Bathrooms : <span class="light">4</span> </td>
                                <td>Age of property : <span class="light">2 years</span></td>
                            </tr>
                                </tbody>
                        </table>
                    </div>
                    <div class="prop-amenity">
                        <div class="head-under2" id="amenities">Society Facilities</div>
                            <div class="prop-ame">
                                <div class="prop-ame-img">
                                    <img src="img/swim-red.png" />
                                </div>
                                <div class="ame-title">
                                    Amenity 2
                                </div>
                            </div>
                        <div class="prop-ame">
                                <div class="prop-ame-img">
                                    <img src="img/swim-red.png" />
                                </div>
                                <div class="ame-title">
                                    Amenity 2
                                </div>
                            </div>
                        <div class="prop-ame">
                                <div class="prop-ame-img">
                                    <img src="img/swim-red.png" />
                                </div>
                                <div class="ame-title">
                                    Amenity 2
                                </div>
                            </div>
                         <div class="prop-ame">
                                <div class="prop-ame-img">
                                    <img src="img/swim-red.png" />
                                </div>
                                <div class="ame-title">
                                    Amenity 2
                                </div>
                            </div>
                         <div class="prop-ame ame-opacity">
                                <div class="prop-ame-img">
                                    <img src="img/swim-red.png" />
                                </div>
                                <div class="ame-title">
                                    Amenity 2
                                </div>
                            </div>
                         <div class="prop-ame ame-opacity">
                                <div class="prop-ame-img">
                                    <img src="img/swim-red.png" />
                                </div>
                                <div class="ame-title">
                                    Amenity 2
                                </div>
                            </div>
                    </div>
                    <div class="prop-amenity">
                        <div class="head-under3" id="commute">Commute Overview</div><br>
                          <p>Good for  Train, Road, Bus connectivity</p>
                            <div class="panel panel-default new-panel">
                                <div class="panel-heading new-head"><b>Airports</b><img class="right" src="img/airport.png" /></div>
                                <div class="panel-body new-body">
                                 <table class="table prop-table new-table">
                                        <tbody>
                                            <tr>
                                                <td>Santa Cruz Domestic Airport</td>
                                                <td><b>7.2 km | 15 min</b></td>
                                            </tr>
                                                <tr>
                                                <td>Chhatrapati Shivaji Internatinal Air.</td>
                                                <td><b>6.2 km | 10 min</b></td>
                                            </tr>
                                         </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="panel panel-default new-panel panel-bottom">
                                <div class="panel-heading new-head"><b>Train Stations</b><img class="right" src="img/train.png" /></div>
                                <div class="panel-body new-body">
                                 <table class="table prop-table new-table">
                                        <tbody>
                                            <tr>
                                                <td>Andheri Railway Station</td>
                                                <td><b>7.2 km | 15 min</b></td>
                                            </tr>
                                                
                                         </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default new-panel">
                                    <div class="panel-heading drop-head" role="tab" id="headingOne">
                                        <h4 class="panel-title font">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            VIEW MORE+
                                        </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="accordion-body collapse" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <table class="table prop-table new-table">
                                        <tbody>
                                            <tr>
                                                <td>Borivali Railway Station</td>
                                                <td><b>15.2 km | 30 min</b></td>
                                            </tr>
                                                
                                         </tbody>
                                    </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                             <div class="panel panel-default new-panel panel-bottom">
                                <div class="panel-heading new-head"><b>Bus Stations</b><img class="right" src="img/bus.png" /></div>
                                <div class="panel-body new-body">
                                 <table class="table prop-table new-table">
                                        <tbody>
                                            <tr>
                                                <td>RIT Bus Station</td>
                                                <td><b>7.2 km | 15 min</b></td>
                                            </tr>
                                                
                                         </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default new-panel">
                                    <div class="panel-heading drop-head" role="tab" id="headingTwo">
                                        <h4 class="panel-title font">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            VIEW MORE+
                                        </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="accordion-body collapse" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <table class="table prop-table new-table">
                                        <tbody>
                                            <tr>
                                                <td>MIT Bus Station</td>
                                                <td><b>7.2 km | 15 min</b></td>
                                            </tr>
                                                
                                         </tbody>
                                    </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                        <b class="ht">Get Commute Distance and Time</b><br><br>
                        <form action="">
                            <input type="text" placeholder="Enter Destination" class="cust-input">
                            <button type="submit" class="btn-amenity-top top1 new-blue">Calculate Distance and Time</button>
                        </form>
                         <div class="head-under4" id="locality">Locality Overview</div><br>
                            <p>Good for Restaurants, Shopping</p><br>
                            <b>Essentials</b>
                        <div class="essentials">
                            <div class="ess bank">
                                Banks
                            </div>
                            <div class="ess hospital">
                                    Hospitals
                            </div>
                            <div class="ess school">
                                    School
                            </div>
                            <div class="ess park">
                                    Park
                            </div>
                        </div>
                        <div class="essential-data">
                            <div class="bank-data" id="bank-data">
                                <div class="bd">
                                    <div class="bank-name">
                                        Universal Bank
                                    </div>
                                    <div class="bank-dist">
                                        <b>0.3 km | 4 min</b>
                                    </div>
                                </div>
                                <div class="bd">
                                    <div class="bank-name">
                                        Universal Bank
                                    </div>
                                    <div class="bank-dist">
                                        <b>0.3 km | 4 min</b>
                                    </div>
                                </div>
                                <div class="bd">
                                    <div class="bank-name">
                                        Universal Bank
                                    </div>
                                    <div class="bank-dist">
                                        <b>0.3 km | 4 min</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <b>Go Out</b>
                        <div class="essentials">
                            <div class="out rest">
                                    Restaurants
                            </div>
                            <div class="out movie">
                                    Movie Theatre
                            </div>
                            <div class="out bar">
                                    Bars / Pubs
                            </div>
                        </div>
                         <b>Uitilities</b>
                        <div class="essentials">
                            <div class="out store">
                                    Grocery
                            </div>
                            <div class="out pharm">
                                    Pharmacies
                            </div>
                            <div class="out mall">
                                    Shopping Malls
                            </div>
                        </div>
                        <div class="bt btns">
                            <div class="bt-lt btn-tab blue-bottom">I am Interested &nbsp;<img src="img/contact.png" /></div>
                            <div class="bt-rt btn-tab red-bottom">Add to Shortlist &nbsp;<img src="img/shortlist-white.png" />
                        </div>
                    </div>
                    </div>
                </div>
            
            </div>
            </div>
            <div class="properties">
                    <div class="bt">
                        <div class="bt-lt btn-tab">35 Properties &nbsp;<img src="img/search-home.png" /></div>
                        <div class="bt-rt btn-tab">1 Shortlisted &nbsp;<img src="img/shortlist.png" /></div>
                    </div>
                    <div class="search-drop">
                        <select class="full-select">
                          <option><b>Search by:</b> Relevance</option>
                          <option>Lorem</option>
                          <option>Lipsum</option>
                        </select>
                    </div>

                <div class="property-list scrollbox">
                    <div class="property-item">
                        <div class="item-left"></div>
                        <div class="item-right"><b>2 BHK, 900 sq.ft.</b><br>Mhada Colony, Andheri (West)<br><span class="font-ht">Rs. 1.4 Crore</span><br>Rs. 17.32k per sq.ft.</div>
                    </div> 
                    <div class="property-item">
                        <div class="item-left"></div>
                        <div class="item-right"><b>2 BHK, 900 sq.ft.</b><br>Mhada Colony, Andheri (West)<br><span class="font-ht">Rs. 1.4 Crore</span><br>Rs. 17.32k per sq.ft.</div>
                    </div>
                    <div class="property-item">
                        <div class="item-left"></div>
                        <div class="item-right"><b>2 BHK, 900 sq.ft.</b><br>Mhada Colony, Andheri (West)<br><span class="font-ht">Rs. 1.4 Crore</span><br>Rs. 17.32k per sq.ft.</div>
                    </div>
                    <div class="property-item">
                        <div class="item-left"></div>
                        <div class="item-right"><b>2 BHK, 900 sq.ft.</b><br>Mhada Colony, Andheri (West)<br><span class="font-ht">Rs. 1.4 Crore</span><br>Rs. 17.32k per sq.ft.</div>
                    </div>
                    <div class="property-item">
                        <div class="item-left"></div>
                        <div class="item-right"><b>2 BHK, 900 sq.ft.</b><br>Mhada Colony, Andheri (West)<br><span class="font-ht">Rs. 1.4 Crore</span><br>Rs. 17.32k per sq.ft.</div>
                    </div>
                    <div class="property-item">
                        <div class="item-left"></div>
                        <div class="item-right"><b>2 BHK, 900 sq.ft.</b><br>Mhada Colony, Andheri (West)<br><span class="font-ht">Rs. 1.4 Crore</span><br>Rs. 17.32k per sq.ft.</div>
                    </div>
                    <div class="property-item">
                        <div class="item-left"></div>
                        <div class="item-right"><b>2 BHK, 900 sq.ft.</b><br>Mhada Colony, Andheri (West)<br><span class="font-ht">Rs. 1.4 Crore</span><br>Rs. 17.32k per sq.ft.</div>
                    </div>
                </div>
            </div>
                
        </div>
         <?php
           // include 'include/footer.inc.php';
        ?>
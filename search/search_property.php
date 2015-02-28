
<?php
        include 'include/header.inc.php';
    ?>
    <hr>

        <link href="css/jquery-ui.css" rel="stylesheet">    
        <link href="css/app.css" rel="stylesheet" id="app">

        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/multiple-select.css" rel="stylesheet">
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/jquery.multiple.select.js" type="text/javascript"></script>

        <div class="container-fluid sp-wrap">
            <h3 class="head-adj">FILTER YOUR RESULTS</h3><br>
			<div class="row back-filter" id="residential_buy">
                <div class="imp-filters">
                    <div class="trans_filter">
                        <div class="filter-title">Locality</div>
                        <div class="filter-bottom">
                            <form class="search-trans">
                                <select class="black-trans">
		                            <option>Santacruz</option>
		                            <option>Dadar</option>
	                            </select>
                            </form>
                        </div>
                    </div>
                    <div class="trans_filter">
                        <div class="filter-title">BHK</div>
                        <div class="filter-bottom">
                            <form class="search-trans">
                                <div class="select-multiple" id="bhk">Select BHK
                                </div>
                                <div class="select-down black-trans bhk-down">
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">1 RK
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">1 BHK
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">2 BHK
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">3 BHK
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">4 BHK
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">5 BHK
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">5+ BHK
                                        </label>
                                     </div>
                                </div>
                            </form>
                         </div>
                    </div>
                    <div class="trans_filter">
                        <div class="filter-title">Budget</div>
                        <div class="search-range-slider">
                            <div class="filter-bottom">
                                <div class="priceSlider">
                                    <div class="sliderTooltip">
                                        <div class="stArrow"></div>
                                        <div class="stLabel"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="trans_filter">
                        <div class="filter-title">Buildup Area</div>
                        <div class="search-range-slider">
                        <div class="filter-bottom">
                            <div class="areaSlider">
                                <div class="sliderTooltip">
                                    <div class="stArrow"></div>
                                    <div class="stLabel"></div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="trans_filter">
                        <div class="filter-title">Property type</div>
                        <div class="filter-bottom">
                            <form class="search-trans">
                                <div class="select-multiple" id="type">Select Property type
                                </div>
                                <div class="select-down black-trans prop-down">
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Apartment
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Independent Floor
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Independent House
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Pent House
                                        </label>
                                     </div>
                                </div>
                            </form>
                         </div>
                    </div>
                    <div class="trans_filter">
                        <div class="filter-title ft"></div>
                        <div class="filter-bottom fba">
                            <div class="fbl"></div>
                            <div class="fbr me" id="more" data-toggle="tooltip" title="More Filters"><span class="glyphicon glyphicon-filter"></span></div>
                        </div>
                    </div>
                </div>
                <div class="extra-filters">
                    <div class="trans_filter">
                        <div class="filter-title">Listed by</div>
                        <div class="filter-bottom">
                            <form class="search-trans">
                                <div class="select-multiple" id="list">Listed by
                                </div>
                                <div class="select-down black-trans list-down">
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Owner
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Broker
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Builder
                                        </label>
                                     </div>
                                </div>
                            </form>
                            </div>
                    </div>
                    <div class="trans_filter">
                        <div class="filter-title">Age of Property</div>
                        <div class="filter-bottom">
                            <form class="search-trans">
                                <div class="select-multiple" id="age">Property Age
                                </div>
                                <div class="select-down black-trans age-down">
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Under Construction
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">New Construction
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">0-1 yrs
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">1-5 yrs
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">5-10 yrs
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">10-15 yrs
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">15+ yrs
                                        </label>
                                     </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="trans_filter">
                        <div class="filter-title">Date Added</div>
                        <div class="filter-bottom">
                            <form class="search-trans">
                                <div class="select-multiple" id="date-add">Date Added
                                </div>
                                <div class="select-down black-trans date-down">
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Yesterday
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Last Week
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Last 2 Weeks
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Last Month
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Last 2 Month
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Last 3 Month
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">3+ months
                                        </label>
                                     </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="trans_filter">
                        <div class="filter-title">Bathrooms</div>
                        <div class="filter-bottom">
                            <form class="search-trans">
                                <div class="select-multiple" id="bath">Bathrooms
                                </div>
                                <div class="select-down black-trans bath-down">
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">1
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">2
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">3
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">4
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">5
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">5+
                                        </label>
                                     </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="trans_filter">
                        <div class="filter-title">Furnished</div>
                        <div class="filter-bottom">
                            <form class="search-trans">
                                <select class="black-trans">
		                            <option>Furnished</option>
		                            <option>Non-Furnished</option>
	                            </select>
                            </form>
                            </div>
                    </div>
                    <div class="trans_filter">
                        <div class="filter-title ft"></div>
                        <div class="filter-bottom fba">
                            <div class="fbl"></div>
                            <div class="fbr" id="back" data-toggle="tooltip" title="Back to Main filters"><i class="fa fa-lg fa-caret-left"></i></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="row back-filter" id="residential_rent">
                <div class="imp-filters">
                    <div class="trans_filter">
                        <div class="filter-title">Locality</div>
                        <div class="filter-bottom">
                            <form class="search-trans">
                                <select class="black-trans">
		                            <option>Santacruz</option>
		                            <option>Dadar</option>
	                            </select>
                            </form>
                        </div>
                    </div>
                    <div class="trans_filter">
                        <div class="filter-title">BHK</div>
                        <div class="filter-bottom">
                            <form class="search-trans">
                                <div class="select-multiple" id="bhk">Select BHK
                                </div>
                                <div class="select-down black-trans bhk-down">
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">1 RK
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">1 BHK
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">2 BHK
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">3 BHK
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">4 BHK
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">5 BHK
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">5+ BHK
                                        </label>
                                     </div>
                                </div>
                            </form>
                         </div>
                    </div>
                    <div class="trans_filter">
                        <div class="filter-title">Budget</div>
                        <div class="search-range-slider">
                            <div class="filter-bottom">
                                <div class="priceSlider">
                                    <div class="sliderTooltip">
                                        <div class="stArrow"></div>
                                        <div class="stLabel"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="trans_filter">
                        <div class="filter-title">Buildup Area</div>
                        <div class="search-range-slider">
                        <div class="filter-bottom">
                            <div class="areaSlider">
                                <div class="sliderTooltip">
                                    <div class="stArrow"></div>
                                    <div class="stLabel"></div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="trans_filter">
                        <div class="filter-title">Property type</div>
                        <div class="filter-bottom">
                            <form class="search-trans">
                                <div class="select-multiple" id="type">Select Property type
                                </div>
                                <div class="select-down black-trans prop-down">
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Independent House
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Apartment
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Independent Floor
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Pent House
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">PG
                                        </label>
                                     </div>
                                </div>
                            </form>
                         </div>
                    </div>
                    <div class="trans_filter">
                        <div class="filter-title ft"></div>
                        <div class="filter-bottom fba">
                            <div class="fbl"></div>
                            <div class="fbr me" id="more" data-toggle="tooltip" title="More Filters"><span class="glyphicon glyphicon-filter"></span></div>
                        </div>
                    </div>
                </div>
                <div class="extra-filters">
                    <div class="trans_filter">
                        <div class="filter-title">Listed by</div>
                        <div class="filter-bottom">
                            <form class="search-trans">
                                <div class="select-multiple" id="list">Listed by
                                </div>
                                <div class="select-down black-trans list-down">
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Owner
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Broker
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Builder
                                        </label>
                                     </div>
                                </div>
                            </form>
                            </div>
                    </div>
                    <div class="trans_filter">
                        <div class="filter-title">Age of Property</div>
                        <div class="filter-bottom">
                            <form class="search-trans">
                                <div class="select-multiple" id="age">Property Age
                                </div>
                                <div class="select-down black-trans age-down">
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Under Construction
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">New Construction
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">0-1 yrs
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">1-5 yrs
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">5-10 yrs
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">10-15 yrs
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">15+ yrs
                                        </label>
                                     </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="trans_filter">
                        <div class="filter-title">Date Added</div>
                        <div class="filter-bottom">
                            <form class="search-trans">
                                <div class="select-multiple" id="date-add">Date Added
                                </div>
                                <div class="select-down black-trans date-down">
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Yesterday
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Last Week
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Last 2 Weeks
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Last Month
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Last 2 Month
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Last 3 Month
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">3+ months
                                        </label>
                                     </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="trans_filter">
                        <div class="filter-title">Bathrooms</div>
                        <div class="filter-bottom">
                            <form class="search-trans">
                                <div class="select-multiple" id="bath">Bathrooms
                                </div>
                                <div class="select-down black-trans bath-down">
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">1
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">2
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">3
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">4
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">5
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">5+
                                        </label>
                                     </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="trans_filter">
                        <div class="filter-title">Furnished</div>
                        <div class="filter-bottom">
                            <form class="search-trans">
                                <select class="black-trans">
		                            <option>Furnished</option>
		                            <option>Non-Furnished</option>
	                            </select>
                            </form>
                            </div>
                    </div>
                    <div class="trans_filter">
                        <div class="filter-title ft"></div>
                        <div class="filter-bottom fba">
                            <div class="fbl"></div>
                            <div class="fbr" id="back" data-toggle="tooltip" title="Back to Main filters"><i class="fa fa-lg fa-caret-left"></i></span></div>
                        </div>
                    </div>
                </div>
            </div>-->
            <!--<div class="row back-filter" id="commercial_rent">
                <div class="imp-filters">
                 <div class="trans_filter">
                    <div class="filter-title">Locality</div>
                    <div class="filter-bottom">
                        <form class="search-trans">
                            <select class="black-trans">
		                        <option>Santacruz</option>
		                        <option>Dadar</option>
	                        </select>
                        </form>
                    </div>
                </div>
                <div class="trans_filter">
                        <div class="filter-title">Budget</div>
                        <div class="search-range-slider">
                            <div class="filter-bottom">
                                <div class="priceSlider">
                                    <div class="sliderTooltip">
                                        <div class="stArrow"></div>
                                        <div class="stLabel"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="trans_filter">
                        <div class="filter-title">Buildup Area</div>
                        <div class="search-range-slider">
                        <div class="filter-bottom">
                            <div class="areaSlider">
                                <div class="sliderTooltip">
                                    <div class="stArrow"></div>
                                    <div class="stLabel"></div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                <div class="trans_filter">
                    <div class="filter-title">Property type</div>
                    <div class="filter-bottom">
                         <form class="search-trans">
                                <div class="select-multiple" id="list">Property type
                                </div>
                                <div class="select-down black-trans list-down">
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Shop / Showroom
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Office Space
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Warehouse / Godown
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Industrial Building
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Industrial Shed
                                        </label>
                                     </div>
                                </div>
                            </form>
                        </div>
                </div>
                    </div>
                <div class="extra-filters">
                <div class="trans_filter">
                        <div class="filter-title">Listed by</div>
                        <div class="filter-bottom">
                            <form class="search-trans">
                                <div class="select-multiple" id="type">Listed by
                                </div>
                                <div class="select-down black-trans type-down">
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Owner
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Broker
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Builder
                                        </label>
                                     </div>
                                </div>
                            </form>
                            </div>
                    </div>
                <div class="trans_filter">
                    <div class="filter-title">Age of Property</div>
                    <div class="filter-bottom">
                        <form class="search-trans">
                                <div class="select-multiple" id="age">Age of Property
                                </div>
                                <div class="select-down black-trans age-down">
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Under Construction
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">New Construction
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">0-1 yrs
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">1-5 yrs
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">5-10 yrs
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">10-15 yrs
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">15+ yrs
                                        </label>
                                     </div>
                                </div>
                            </form>
                    </div>
                </div>
                <div class="trans_filter">
                    <div class="filter-title">Date Added</div>
                    <div class="filter-bottom">
                        <form class="search-trans">
                            <select class="black-trans">
		                        <option>Yesterday</option>
		                        <option>Last Week</option>
                                <option>Last 2 Weeks</option>
                                <option>Last Month</option>
                                <option>Last 2 Months</option>
                                <option>Last 3 Months</option>
                                <option>3+ months</option>
	                        </select>
                        </form>
                    </div>
                </div>
                    </div>
            </div>-->
            <!--<div class="row back-filter" id="commercial_buy">
                 <div class="imp-filters">
                <div class="trans_filter">
                    <div class="filter-title">Locality</div>
                    <div class="filter-bottom">
                        <form class="search-trans">
                            <select class="black-trans">
		                        <option>Santacruz</option>
		                        <option>Dadar</option>
	                        </select>
                        </form>
                    </div>
                </div>
                <div class="trans_filter">
                    <div class="filter-title">Budget</div>
                    <div class="search-range-slider">
                        <div class="filter-bottom bottom-range">
                            <div class="priceSlider">
                                <div class="sliderTooltip">
                                    <div class="stArrow"></div>
                                    <div class="stLabel"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="trans_filter">
                    <div class="filter-title">Carpet Area</div>
                    <div class="search-range-slider">
                    <div class="filter-bottom bottom-range">
                        <div class="areaSlider">
                            <div class="sliderTooltip">
                                <div class="stArrow"></div>
                                <div class="stLabel"></div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="trans_filter">
                    <div class="filter-title">Property type</div>
                    <div class="filter-bottom">
                         <form class="search-trans">
                                <div class="select-multiple" id="list">Property type
                                </div>
                                <div class="select-down black-trans list-down">
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Shop / Showroom
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Office Space
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Warehouse / Godown
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Industrial Building
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Industrial Shed
                                        </label>
                                     </div>
                                </div>
                            </form>
                        </div>
                </div>
                     </div>
                 <div class="extra-filters">
                <div class="trans_filter">
                    <div class="filter-title">Listed by</div>
                    <div class="filter-bottom">
                        <form class="search-trans">
                                <div class="select-multiple" id="type">Listed by
                                </div>
                                <div class="select-down black-trans type-down">
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Owner
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Broker
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Builder
                                        </label>
                                     </div>
                                </div>
                            </form>
                        </div>
                </div>
                <div class="trans_filter">
                    <div class="filter-title">Age of Property</div>
                    <div class="filter-bottom">
                        <form class="search-trans">
                                <div class="select-multiple" id="age">Age of Property
                                </div>
                                <div class="select-down black-trans age-down">
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">Under Construction
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">New Construction
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">0-1 yrs
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">1-5 yrs
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">5-10 yrs
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">10-15 yrs
                                        </label>
                                     </div>
                                    <div class="checkbox ch">
                                        <label>
                                          <input type="checkbox">15+ yrs
                                        </label>
                                     </div>
                                </div>
                            </form>
                    </div>
                </div>
                <div class="trans_filter">
                    <div class="filter-title">Date Added</div>
                    <div class="filter-bottom">
                        <form class="search-trans">
                            <select class="black-trans">
		                        <option>Yesterday</option>
		                        <option>Last Week</option>
                                <option>Last 2 Weeks</option>
                                <option>Last Month</option>
                                <option>Last 2 Months</option>
                                <option>Last 3 Months</option>
                                <option>3+ months</option>
	                        </select>
                        </form>
                    </div>
                </div>
                     </div>
            </div>-->
		 </div>
        </div>
        <div class="container-fluid fac-wrap">
            <br><h3 class="head-adj">CHOOSE FACILITIES</h3><br>
            <div class="row slider-filter">
                <div class="amenities-slider">
                 <div class="amenity-name ame-nm-adj"><h4 class="left-head">Society Facilities</h4></div>
                     <div class="amenity-slider">
                        <div id="slider0" class="new-slider0">
                          <a class="control_next0" id="control_next0"><img src="img/next-arrow.png" /></a>
                          <a class="control_prev0" id="control_prev0"><img src="img/prev-arrow.png" /></a>
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
                <div class="amenities-slider">
                 <div class="amenity-name ame-nm-adj"><h4 class="left-head">Flat Facilities</h4></div>
                     <div class="amenity-slider">
                        <div id="slider1" class="new-slider1">
                    <a class="control_next1" id="control_next1"><img src="img/next-arrow.png" /></a>
                    <a class="control_prev1" id="control_prev1"><img src="img/prev-arrow.png" /></a>
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
                <div class="amenities-acc">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                              <div class="panel panel-default new-panel">
                                <div class="panel-heading drop-head" role="tab" id="headingOne">
                                  <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      <span class="ame-tit">Internal amenities</span>
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                  <div class="panel-body new-pb">
                                            <div class="checkbox cb">
                                                <label>
                                                    <input type="checkbox"><img src="img/gym.png" /> Gym
                                                </label>
                                            </div>
                                            <div class="checkbox cb">
                                                <label>
                                                    <input type="checkbox"> <img src="img/swim.png" /> Swimming
                                                </label>
                                           </div>
                                            <div class="checkbox cb">
                                                <label>
                                                    <input type="checkbox"><img src="img/gym.png" /> Gym
                                                </label>
                                            </div>
                                            <div class="checkbox cb">
                                                <label>
                                                    <input type="checkbox"> <img src="img/swim.png" /> Swimming
                                                </label>
                                            </div>
                                            <div class="checkbox cb">
                                                <label>
                                                    <input type="checkbox"> <img src="img/swim.png" /> Swimming
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="panel panel-default new-panel">
                                    <div class="panel-heading drop-head" role="tab" id="headingTwo">
                                      <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                          <span class="ame-tit">Flat amenities</span>
                                        </a>
                                      </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body new-pb">
                                            <div class="checkbox cb">
                                                <label>
                                                    <input type="checkbox"><img src="img/gym.png" /> Gym
                                                </label>
                                            </div>
                                            <div class="checkbox cb">
                                                <label>
                                                    <input type="checkbox"> <img src="img/swim.png" /> Swimming
                                                </label>
                                           </div>
                                            <div class="checkbox cb">
                                                <label>
                                                    <input type="checkbox"><img src="img/gym.png" /> Gym
                                                </label>
                                            </div>
                                            <div class="checkbox cb">
                                                <label>
                                                    <input type="checkbox"> <img src="img/swim.png" /> Swimming
                                                </label>
                                            </div>
                                            <div class="checkbox cb">
                                                <label>
                                                    <input type="checkbox"> <img src="img/swim.png" /> Swimming
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
            </div>
        </div>
        <div class="container-fluid full-property">
            <div class="property-map">
                <div id="googleMap" style="width:100%;height:650px;"></div>
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
                                    <div class="panel-heading drop-head" role="tab" id="headingThree">
                                        <h4 class="panel-title font">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                            VIEW MORE+
                                        </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="accordion-body collapse" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
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
                                    <div class="panel-heading drop-head" role="tab" id="headingFour">
                                        <h4 class="panel-title font">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                            VIEW MORE+
                                        </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="accordion-body collapse" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFour">
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
                            <div class="hospital-data" id="hospital-data">
                                <div class="bd">
                                    <div class="bank-name">
                                        Universal Hospital
                                    </div>
                                    <div class="bank-dist">
                                        <b>0.3 km | 4 min</b>
                                    </div>
                                </div>
                                <div class="bd">
                                    <div class="bank-name">
                                        Universal Hospital
                                    </div>
                                    <div class="bank-dist">
                                        <b>0.3 km | 4 min</b>
                                    </div>
                                </div>
                                <div class="bd">
                                    <div class="bank-name">
                                        Universal Hospital
                                    </div>
                                    <div class="bank-dist">
                                        <b>0.3 km | 4 min</b>
                                    </div>
                                </div>
                            </div>
                            <div class="school-data" id="school-data">
                                <div class="bd">
                                    <div class="bank-name">
                                        Universal School
                                    </div>
                                    <div class="bank-dist">
                                        <b>0.3 km | 4 min</b>
                                    </div>
                                </div>
                                <div class="bd">
                                    <div class="bank-name">
                                        Universal School
                                    </div>
                                    <div class="bank-dist">
                                        <b>0.3 km | 4 min</b>
                                    </div>
                                </div>
                                <div class="bd">
                                    <div class="bank-name">
                                        Universal School
                                    </div>
                                    <div class="bank-dist">
                                        <b>0.3 km | 4 min</b>
                                    </div>
                                </div>
                            </div>
                            <div class="park-data" id="park-data">
                                <div class="bd">
                                    <div class="bank-name">
                                        Universal Park
                                    </div>
                                    <div class="bank-dist">
                                        <b>0.3 km | 4 min</b>
                                    </div>
                                </div>
                                <div class="bd">
                                    <div class="bank-name">
                                        Universal Park
                                    </div>
                                    <div class="bank-dist">
                                        <b>0.3 km | 4 min</b>
                                    </div>
                                </div>
                                <div class="bd">
                                    <div class="bank-name">
                                        Universal Park
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
                        <div class="essential-data">
                            <div class="rest-data" id="rest-data">
                                <div class="bd">
                                    <div class="bank-name">
                                        Universal Restaurants
                                    </div>
                                    <div class="bank-dist">
                                        <b>0.3 km | 4 min</b>
                                    </div>
                                </div>
                                <div class="bd">
                                    <div class="bank-name">
                                        Universal Restaurants
                                    </div>
                                    <div class="bank-dist">
                                        <b>0.3 km | 4 min</b>
                                    </div>
                                </div>
                                <div class="bd">
                                    <div class="bank-name">
                                        Universal Restaurants
                                    </div>
                                    <div class="bank-dist">
                                        <b>0.3 km | 4 min</b>
                                    </div>
                                </div>
                            </div>
                            <div class="movie-data" id="movie-data">
                                <div class="bd">
                                    <div class="bank-name">
                                        Universal Movie
                                    </div>
                                    <div class="bank-dist">
                                        <b>0.3 km | 4 min</b>
                                    </div>
                                </div>
                                <div class="bd">
                                    <div class="bank-name">
                                        Universal Movie
                                    </div>
                                    <div class="bank-dist">
                                        <b>0.3 km | 4 min</b>
                                    </div>
                                </div>
                                <div class="bd">
                                    <div class="bank-name">
                                        Universal Movie
                                    </div>
                                    <div class="bank-dist">
                                        <b>0.3 km | 4 min</b>
                                    </div>
                                </div>
                            </div>
                            <div class="bar-data" id="bar-data">
                                <div class="bd">
                                    <div class="bank-name">
                                        Universal Bar
                                    </div>
                                    <div class="bank-dist">
                                        <b>0.3 km | 4 min</b>
                                    </div>
                                </div>
                                <div class="bd">
                                    <div class="bank-name">
                                        Universal Bar
                                    </div>
                                    <div class="bank-dist">
                                        <b>0.3 km | 4 min</b>
                                    </div>
                                </div>
                                <div class="bd">
                                    <div class="bank-name">
                                        Universal Bar
                                    </div>
                                    <div class="bank-dist">
                                        <b>0.3 km | 4 min</b>
                                    </div>
                                </div>
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
                        <div class="essential-data">
                            <div class="store-data" id="store-data">
                                <div class="bd">
                                    <div class="bank-name">
                                        Universal Grocery
                                    </div>
                                    <div class="bank-dist">
                                        <b>0.3 km | 4 min</b>
                                    </div>
                                </div>
                                <div class="bd">
                                    <div class="bank-name">
                                        Universal Grocery
                                    </div>
                                    <div class="bank-dist">
                                        <b>0.3 km | 4 min</b>
                                    </div>
                                </div>
                                <div class="bd">
                                    <div class="bank-name">
                                        Universal Grocery
                                    </div>
                                    <div class="bank-dist">
                                        <b>0.3 km | 4 min</b>
                                    </div>
                                </div>
                            </div>
                            <div class="pharm-data" id="pharm-data">
                                <div class="bd">
                                    <div class="bank-name">
                                        Universal Pharmacies
                                    </div>
                                    <div class="bank-dist">
                                        <b>0.3 km | 4 min</b>
                                    </div>
                                </div>
                                <div class="bd">
                                    <div class="bank-name">
                                        Universal Pharmacies
                                    </div>
                                    <div class="bank-dist">
                                        <b>0.3 km | 4 min</b>
                                    </div>
                                </div>
                                <div class="bd">
                                    <div class="bank-name">
                                        Universal Pharmacies
                                    </div>
                                    <div class="bank-dist">
                                        <b>0.3 km | 4 min</b>
                                    </div>
                                </div>
                            </div>
                            <div class="mall-data" id="mall-data">
                                <div class="bd">
                                    <div class="bank-name">
                                        Universal Shopping Malls
                                    </div>
                                    <div class="bank-dist">
                                        <b>0.3 km | 4 min</b>
                                    </div>
                                </div>
                                <div class="bd">
                                    <div class="bank-name">
                                        Universal Shopping Malls
                                    </div>
                                    <div class="bank-dist">
                                        <b>0.3 km | 4 min</b>
                                    </div>
                                </div>
                                <div class="bd">
                                    <div class="bank-name">
                                        Universal Shopping Malls
                                    </div>
                                    <div class="bank-dist">
                                        <b>0.3 km | 4 min</b>
                                    </div>
                                </div>
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
                        <div class="bt-lt btn-tab" id="prop-list">35 Properties &nbsp;<img src="img/search-home.png" /></div>
                        <div class="bt-rt btn-tab" id="short-prop">2 Shortlisted &nbsp;<img src="img/shortlist.png" /></div>
                    </div>
                    <div class="search-drop">
                        <select class="full-select">
                          <option><b>Search by:</b> Relevance</option>
                          <option>Lorem</option>
                          <option>Lipsum</option>
                        </select>
                    </div>

                <div class="property-list scrollbox" id="property-list">
                    <div class="property-item">
                        <div class="item-left"></div>
                        <div class="item-right"><b>2 BHK, 900 sq.ft.</b><img src="img/shortlist.png" class="shortlisted-prop" /><br>Mhada Colony, Andheri (West)<br><span class="font-ht">Rs. 1.4 Crore</span><br>Rs. 17.32k per sq.ft.</div>
                    </div> 
                    <div class="property-item">
                        <div class="item-left"></div>
                        <div class="item-right"><b>2 BHK, 900 sq.ft.</b><img src="img/shortlist-white.png" class="shortlisted-prop"/><br>Mhada Colony, Andheri (West)<br><span class="font-ht">Rs. 1.4 Crore</span><br>Rs. 17.32k per sq.ft.</div>
                    </div>
                    <div class="property-item">
                        <div class="item-left"></div>
                        <div class="item-right"><b>2 BHK, 900 sq.ft.</b><img src="img/shortlist-white.png" class="shortlisted-prop"/><br>Mhada Colony, Andheri (West)<br><span class="font-ht">Rs. 1.4 Crore</span><br>Rs. 17.32k per sq.ft.</div>
                    </div>
                    <div class="property-item">
                        <div class="item-left"></div>
                        <div class="item-right"><b>2 BHK, 900 sq.ft.</b><img src="img/shortlist.png" class="shortlisted-prop" /><br>Mhada Colony, Andheri (West)<br><span class="font-ht">Rs. 1.4 Crore</span><br>Rs. 17.32k per sq.ft.</div>
                    </div>
                    <div class="property-item">
                        <div class="item-left"></div>
                        <div class="item-right"><b>2 BHK, 900 sq.ft.</b><img src="img/shortlist-white.png" class="shortlisted-prop"/><br>Mhada Colony, Andheri (West)<br><span class="font-ht">Rs. 1.4 Crore</span><br>Rs. 17.32k per sq.ft.</div>
                    </div>
                    <div class="property-item">
                        <div class="item-left"></div>
                        <div class="item-right"><b>2 BHK, 900 sq.ft.</b><img src="img/shortlist-white.png" class="shortlisted-prop"/><br>Mhada Colony, Andheri (West)<br><span class="font-ht">Rs. 1.4 Crore</span><br>Rs. 17.32k per sq.ft.</div>
                    </div>
                    <div class="property-item">
                        <div class="item-left"></div>
                        <div class="item-right"><b>2 BHK, 900 sq.ft.</b><img src="img/shortlist-white.png" class="shortlisted-prop"/><br>Mhada Colony, Andheri (West)<br><span class="font-ht">Rs. 1.4 Crore</span><br>Rs. 17.32k per sq.ft.</div>
                    </div>
                </div>
                <div class="property-list scrollbox" id="shortlisted-list">
                    <div class="property-item">
                        <div class="item-left"></div>
                        <div class="item-right"><b>2 BHK, 900 sq.ft.</b><img src="img/shortlist.png" class="shortlisted-prop" /><br>Mhada Colony, Andheri (West)<br><span class="font-ht">Rs. 1.4 Crore</span><br>Rs. 17.32k per sq.ft.</div>
                    </div> 
                    <div class="property-item">
                        <div class="item-left"></div>
                        <div class="item-right"><b>2 BHK, 900 sq.ft.</b><img src="img/shortlist.png" class="shortlisted-prop" /><br>Mhada Colony, Andheri (West)<br><span class="font-ht">Rs. 1.4 Crore</span><br>Rs. 17.32k per sq.ft.</div>
                    </div>
                    <div class="prop-proceed">
                        Proceed
                    </div>
            </div>
                
        </div>
        </div>
<div class="back-to-top"><i class="fa fa-chevron-up fa-lg"></i></span></div>       
         <?php
           // include 'include/footer.inc.php';
        ?>

        <script src="js/jquery-2.1.1.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/jquery.cookie.js"></script>
        <script src="js/jquery.slimscroll.min.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js?sensor=true&amp;libraries=geometry&amp;libraries=places" type="text/javascript"></script>
        <script src="js/infobox.js"></script>
        <script src="js/app.js" type="text/javascript"></script>
        <script
        src="http://maps.googleapis.com/maps/api/js">
        </script>

        <script>
        var myCenter=new google.maps.LatLng(19.148339, 72.831182);

        function initialize()
        {
        var mapProp = {
          center:myCenter,
          zoom:5,
          mapTypeId:google.maps.MapTypeId.ROADMAP
          };

        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

        var marker=new google.maps.Marker({
          position:myCenter,
          });

        marker.setMap(map);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
        </script>
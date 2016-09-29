<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>e33 Home</title>
    <!-- CSS -->
    <!--<link rel="stylesheet" href="css/materialize.min.css">-->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:500"
          rel="stylesheet">
    <!--<link rel='stylesheet' href='https://cse.google.com/style/look/default.css' type='text/css'/>-->
    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src='//www.google.com/jsapi' type='text/javascript'></script>
    <script src="js/scripts.js"></script>
</head>
<body>
<div class="content cell">
    <div class="side-menu-list">
        <ul id="slide-out" class="side-nav">
            <li class="center-align"><img src="res/logo.gif" width="150px" id="logo"/></li>
            <li><a href="#!">First Sidebar Link</a></li>
            <li><a href="#!">Second Sidebar Link</a></li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header">Dropdown<i class="material-icons">arrow_drop_down</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#!">First</a></li>
                                <li><a href="#!">Second</a></li>
                                <li><a href="#!">Third</a></li>
                                <li><a href="#!">Fourth</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="row header cell">
        <div class="col s2 m1 menu-button-column">
            <div class="menu-button"><a href="#" data-activates="slide-out" class="button-collapse">
                    <i class="material-icons" style="color:white;">menu</i></a>
            </div>
        </div>
        <div class="col m3 hide-on-small-only"></div>
        <div class="col s8 m4 logo-button-column center-align">
            <img src="res/logo.gif" width="150px" id="logo" class=""/>
        </div>
        <div class="col s12 m4 center-align social-column">
            Test something
        </div>
    </div>
    <div class="row page-content">
        <div class="col s12 m8 l6 push-l3 cell middle-wrap">
            <div class="search-area">
                Search major eCommerce sites in one place...
                <table>
                    <tr>
                        <td style="width: 50px;">
                            <a class="btn-floating btn-large waves-effect waves-light red tooltipped"
                               data-position="right" data-delay="50" data-tooltip="Top Search Queries by Users"
                               id="top-query-button">
                                <i class="material-icons">filter_list</i>
                            </a>
                        </td>
                        <td style="width: auto;">
                            <div id='cse-search-form' style='width: 100%;'>
                                <!--spinner code starts-->
                                <div class="center-align">
                                    <div class="preloader-wrapper big active">
                                        <div class="spinner-layer spinner-blue-only">
                                            <div class="circle-clipper left">
                                                <div class="circle"></div>
                                            </div>
                                            <div class="gap-patch">
                                                <div class="circle"></div>
                                            </div>
                                            <div class="circle-clipper right">
                                                <div class="circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--spinner code ends-->
                            </div>
                        </td>
                    </tr>
                </table>


                <script src='http://www.google.com/jsapi' type='text/javascript'></script>
                <script type='text/javascript'>
                    google.load('search', '1', {language: 'en', style: google.loader.themes.DEFAULT});
                    google.setOnLoadCallback(function () {
                        var customSearchOptions = {};
                        var customSearchControl = new google.search.CustomSearchControl('004041560593557203594:yp6fhsptix4', customSearchOptions);
                        customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
                        var options = new google.search.DrawOptions();
                        options.setSearchFormRoot('cse-search-form');
                        options.setAutoComplete(true);
                        customSearchControl.setAutoCompletionId('004041560593557203594:yp6fhsptix4+qtype:1');
                        customSearchControl.setSearchCompleteCallback(this, fixe33);
                        customSearchControl.draw('cse', options);
                    }, true);
                </script>
                <div class="top-query cell">
                    <div class="collection query-list">
                        <?php include 'web/view_top_query.php'; ?>
                    </div>
                </div>

                <div class="result-area">
                    <div class="result">
                        <!--Result show Start-->
                        <div id='cse' style='width: 100%;'></div>
                        <!--Result show end-->
                    </div>
                    <div class="mid-ads cell">
                        <!--<div class="row">-->
                        <!--<div class="test col s6 m3"></div>-->
                        <!--<div class="test col s6 m3"></div>-->
                        <!--<div class="test col s6 m3"></div>-->
                        <!--<div class="test col s6 m3"></div>-->
                        <!--</div>-->
                    </div>
                </div>
                <div class="something" style="position: relative;"></div>
            </div>
        </div>
        <div class="col s12 m4 l3 pull-l6 left-sidebar">
            <div class="sidebar widget cell">
                <div class="widget-title widget2">Trending Products</div>
                <div class="widget-info">
                    <ul>
                        <li>Moto E3</li>
                        <li>iPhone 7</li>
                        <li>Mac i3</li>
                        <li>Jio Sim</li>
                        <li>Lightning Charger</li>
                        <li>Super car</li>
                        <li>Bike</li>
                        <li>Cycle</li>
                        <li>Candle Holder</li>
                        <li>Water Proof Note pad</li>
                    </ul>
                </div>
            </div>
            <div class="sidebar widget cell">
                <div class="widget-title widget3">test wid</div>
                <div class="widget-info">

                </div>
            </div>
        </div>
        <div class="col s12 m4 l3 right-sidebar">
            <div class="sidebar widget cell">
                <div class="widget-title widget3">Deal Breakers</div>
                <div class="widget-info">
                    <ul>
                        <li>5% Cash back on Mobikwik</li>
                        <li>3% offer for Moto E - SBI Credit Card</li>
                        <li>23% off TVs</li>
                        <li>43% off on Refurbished Phones</li>
                        <li>iPhone 7 Pre order</li>
                        <li>Free VR Headsed w/ Lenovo K5</li>
                        <li>Exchange Offer @ Myntra</li>
                        <li>Moto X 3rd Gen - Price Fall</li>
                        <li>Redmi 3s Next Stock Date</li>
                        <li>Whatever</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row footer">
        <div class="col s12 l4 center-align">
            <div class="widget cell">
                <div class="widget-title widget4">Footer 1</div>
                <div class="widget-info">
                    <ul>
                        <li>Tip Us</li>
                        <li>Test link 1</li>
                        <li>Join Us</li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col s12 l4 center-align">
            <div class="widget cell">
                <div class="widget-title widget5">Footer 1</div>
                <div class="widget-info"></div>
            </div>
        </div>
        <div class="col s12 l4 center-align">
            <div class="widget cell">
                <div class="widget-title widget6">Footer 1</div>
                <div class="widget-info"></div>
            </div>
        </div>
    </div>
    <div class="col s12 m12 l12 bar-menu cell center-align">
        &copy; e33 Promotions - powered by alvistor
    </div>
</div>
</div>
</body>
</html>
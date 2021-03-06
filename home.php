<?php include 'head.php'; ?>
<div class="content cell">
    <div class="row page-content">
        <div class="col s12 m7 l6 push-l3 cell middle-wrap">
            <div class="search-area">
                <div class="col s12 center">
                    <!--                    <a id="top-query-button" class="btn waves-effect waves-light orange accent-4">-->
                    <!--                        <i class="material-icons left">arrow_drop_down</i>See Most Searched Products<i class="material-icons right">search</i>-->
                    <!--                    </a>-->
                    <a href="#modal1" id="list-of-sites-button"
                       class="waves-effect waves-light btn blue accent-3 modal-trigger">
                        <i class="material-icons left">arrow_drop_down</i>See List of 50+ eCom Sites<i
                            class="material-icons right">shopping_cart</i>
                    </a>
                    <!--<div class="card-panel teal center-align">
                        <span class="white-text">Search</span>
                            <a class="waves-effect waves-light btn"><i class="material-icons right">shopping_cart</i> 50+ eCom Sites</a>
                            <span class="white-text">across India</span>
                    </div>-->
                </div>
                <table>
                    <tr>
                        <td style="width: 60px;">
                            <a id="tour-init-button"
                               class="btn-large btn-floating red waves-effect waves-light tooltipped"
                               data-position="right" data-delay="50" data-tooltip="Take a Tour">
                                <i class="material-icons left">lightbulb_outline</i>
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
                <div class="col s12 center">
                    <a id="top-query-button" class="btn waves-effect waves-light orange accent-4">
                        <i class="material-icons left">arrow_drop_down</i>See Most Searched Products<i
                            class="material-icons right">search</i>
                    </a>
                </div>
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
                <!--                <div class="something" style="position: relative;"></div>-->
            </div>
        </div>
        <div class="col s12 m5 l3 pull-l6 left-sidebar">
            <div class="sidebar widget cell">
                <div class="widget-title widget2">Trending...</div>
                <div class="widget-info">
                    <div id="trending_list" class="collection">
                    <?php include 'web/view_trending.php'; ?>
                    </div>
                </div>
            </div>
            <!--           <div class="sidebar widget cell">
                           <div class="widget-title widget3">test wid</div>
                           <div class="widget-info">

                           </div>
                       </div>-->
        </div>
        <div class="col s12 m5 l3 right-sidebar">
            <div class="sidebar widget cell">
                <div class="widget-title widget3">Offers & Discounts</div>
                <div class="widget-info">
                    <div id="offer_list" class="collection">
                    <?php include 'web/view_offer_list.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="row footer">
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
     </div>-->
    <div class="col s12 m12 l12 bar-menu cell center-align">
        &copy; e33 Promotions - powered by alvistor
    </div>
</div>

<div id="site-list"><!--    id 'site-list' to activate the list.js -->
    <div id="modal1" class="modal bottom-sheet modal-fixed-footer">
        <div class="modal-content">
            <div class="row">
                <div class="col hide-on-small-only m2"></div>
                <div class="col s12 m8">
                    <div id="sites">
                        <!--                <input class="search" placeholder="Search" />-->
                        <button class="sort" data-sort="list-title">Sort by site</button>
                        <!--                <button class="sort" data-sort="category">Sort by category</button>-->
                        <a class="modal-action modal-close close-button btn green waves-effect center-align black-text"><i
                                class="material-icons">close</i></a>
                        <?php include 'web/view_siteList.php'; ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer center-align blue darken-3s">
            <!--<a href="#!" class="modal-action modal-close waves-effect waves-green btn center-align">Close</a>-->
            <!--        <div class="left btn">Filter:</div>-->
            <div style="width: 70%; float:left; margin-left: 15%;">
                <input class="search" placeholder="type to filter sites [eg: fashion, phone]"/>
                <!--class 'search' is to notify list.js-->
            </div>
            <!--        <div class="sort waves-effect waves-green btn center-align" data-sort="name">Sort by Name</div>-->
        </div>
    </div>
</div>
<script>
    var options_for_site_list = {
        valueNames: ['list-title', 'category']
//        plugins: [ ListFuzzySearch() ]
    };

    var siteList = new List('site-list', options_for_site_list);

    $('#tour-init-button').on('click', function (e) {
        boneVojage([
                {
                    selector: '#top-query-button',
                    text: 'Top 10 searches by users... See what others are interested to buy today..'
                },
                {
                    selector: '#list-of-sites-button',
                    text: 'Here is the list of 50+ eCommerce sites with filter..'
                },
                {
                    selector: '#cse-search-form',
                    text: 'Type your product name here! We search through 50+ sites for it :)'
                },
                {
                    selector: '.menu-button',
                    text: 'Menu Button.. For More Pages'
                }
            ], {
                delay: 200
            }
        );

        e.preventDefault();
    });
</script>
</body>
</html>
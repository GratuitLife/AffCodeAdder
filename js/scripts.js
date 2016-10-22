// code for Google CSE by Google
$(function () {
    if ($('#cse-search-form').length) {
        var placeholder1 = setInterval(function () {
            if (document.getElementById("gsc-i-id1").hasAttribute("placeholder")) {
                clearInterval(placeholder1);
            }
        document.getElementById("gsc-i-id1").setAttribute("placeholder", "To Search... Type and hit enter");
        }, 1000);
    }
    /*    $( window ).hashchange(function() {
     if(location.hash.substr(1) == "closesitelist") {
     alert(location.hash.substr(1));
     $('#modal1').closeModal();
     }
     });*/
    // code for sideNav menu
    // Initialize collapse button
    $(".button-collapse").sideNav({
        menuWidth: 240, // Default is 240
        //edge: 'right', // Choose the horizontal origin
        //closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    });
    // Initialize collapsible - to show/hide the links under menu

    $(function () {
        var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
        $(".side-nav li a").each(function () {
            if ($(this).attr("href") == pgurl || $(this).attr("href") == '')
                $(this).addClass("active");
        })
    });

    $('.collapsible').collapsible();
    // $('#modal1').openModal();
    $('.modal-trigger').leanModal();//to trigger models open and close with button

    // $(".sortable").tablesorter();

    $('select').material_select();
    // top query button click to open top query
    $("#top-query-button").click(function () {
        $('.top-query').toggleClass('top-query-active');
    });
    $(".query-list-item").click(function (e) {
        $('.top-query').removeClass('top-query-active');
        var query_content = $($(this).contents().get(0)).text();
        // alert(query);
        document.getElementById("gsc-i-id1").value = query_content;
        $(".gsc-search-button").trigger("click");
    });
});

// code for prefixing all search result link with e33.in?
function fixe33() {
    $('.gsc-result a').not('.gs-spelling a, .gs-promotion-table a').each(function () {
        // Find all the search results (including promotion ads inserted in CSE by us) except ads by adsense and add e33.in? in front of it
        var e33url = 'http://e33.in/?' + this.href;
        $(this).attr("data-cturl", e33url);
        // $(this).attr("data-ctorig", this.href);
        $(this).click(function () {
            window.open(e33url);
            // alert(e33url);
            event.preventDefault();
        })


    });
    // var search =  document.getElementById("gsc-i-id1").value;
    // alert("search query is " + search);
    var query = document.getElementById("gsc-i-id1").value;
    $.post("web/search_keyword_update.php", {keyword: query})
        .done(function (data) {
            //alert(query);
        });
    Materialize.toast('Search Completed!', 4000);
    $('#gsc-i-id1').blur(); // to hide the soft keyboards in mobile :) simple hack..
    $('.top-query').removeClass('top-query-active'); // in case if top search query is in opened state.. toggle can't be used
}

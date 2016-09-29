// code for Google CSE by Google
$(function(){
    setTimeout(function() {
        document.getElementById("gsc-i-id1").setAttribute("placeholder", "To Search... Type and hit enter");
    }, 2000);
    // code for sideNav menu
    // Initialize collapse button
    $(".button-collapse").sideNav({
        menuWidth: 300, // Default is 240
        //edge: 'right', // Choose the horizontal origin
        //closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    });
    // Initialize collapsible - to show/hide the links under menu
    $('.collapsible').collapsible();
    // top query button click to open top query
    $("#top-query-button").click(function () {
        $('.top-query').toggleClass('top-query-active');
    });
    $(".query-list-item").click(function (e) {
        $('.top-query').toggleClass('top-query-active');
        var query = $($(this).contents().get(0)).text();
        // alert(query);
        document.getElementById("gsc-i-id1").value = query;
        $(".gsc-search-button").trigger("click");
        $.post("web/search_keyword_update.php", {keyword: query})
            .done(function (data) {
                alert(query);
            });
    });
});

// code for prefixing all search result link with e33.in?
function fixe33(){
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
}

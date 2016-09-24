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
});

// code for prefixing all search result link with e33.in?
function fixe33(){
    $('.gsc-result a').not('.gs-spelling a').each( function(){
        // Find all the search results (including promotion ads inserted in CSE by us) except ads by adsense and add e33.in? in front of it
        this.href = 'http://e33.in/?' + this.href;
        $(this).attr("data-cturl", this.href);
        $(this).attr("data-ctorig", this.href);
    });
}

<?php
/* Author: Travis @ Sakthitharan S, alvistor.com */
/* $$$$$$$$$$$$$$$  Config Parameters $$$$$$$$$$$$$$$$$$$$$$$ */
#cuelinks url
$cuelink_redirect = "http://linksredirect.com?pub_id=7210CL6761&url=";
#flipkart affiliate tag id
$flipkart_aff_id = "affid=alvistor";
#amazon affiliate tag id
$amazon_aff_id = "tag=alvistor-21";
#snapdeal affiliate tag id
$snapdeal_aff_id = "utm_source=aff_prog&utm_campaign=afts&offer_id=17&aff_id=55957";
utm_source=aff_prog&utm_campaign=afts&offer_id=17&aff_id=55957
/* $$$$$$$$$$$$$$  End of Config Parameters $$$$$$$$$$$$$$$$$$*/

/* ----------start of pgm params------------- */
$flipkart_pattern = "/flipkart.com/";
$amazon_pattern = "/amazon.in/";
$snapdeal_pattern = "/snapdeal.com/";
/* ----------end of pgm params-------------- */

$link = urldecode($_SERVER['QUERY_STRING']); /* urldecode will decode html or utf-8 encoded chars to char */

if(empty($link)) { $link = "go.e33.in"; }

/* check for flipkart, amazon, snapdeal link. else pass it through cuelinks */
if(preg_match($flipkart_pattern, $link, $match) | preg_match($amazon_pattern, $link, $match) | preg_match($snapdeal_pattern, $link, $match))
{
    /* dividing operation sequence for flipkart -- amazon -- snapdeal */

    /* **FLIPKART CONVERSION */
    if(preg_match($flipkart_pattern, $link, $match))
    {
        /* if there is no query in link then add ?affid=alvistor
           else add &affid=alvistor at end of the query */

        $fk_add_this_for_query_link = "&" . $flipkart_aff_id;
        $fk_add_this_for_nonquery_link = "?" . $flipkart_aff_id;
        /* checking for query or non query link to append affid */
        if(preg_match("/\?/", $link, $match))
        {
             /*echo "its query link <br>";*/
             $link .= $fk_add_this_for_query_link;
        }
        else
        {
             /*echo "its non query link <br>";*/
             $link .= $fk_add_this_for_nonquery_link;
        }
        /* deep linking code  echo "<br>deep linking <br>";*/
        $fk_patternof_www_link = "/www.flipkart.com/";
        $fk_patternof_non_www_link = "/flipkart.com/";
        $fk_patternof_deeplink = "/dl.flipkart.com\/dl/";
        $fk_deeplink = "dl.flipkart.com/dl";
        if(preg_match($fk_patternof_deeplink, $link, $match))
        {
             // do nothing. Because the link is already deeplinked :)
        }
        else
        {
        if(preg_match($fk_patternof_www_link, $link, $match))
        {   $link = preg_replace($fk_patternof_www_link, $fk_deeplink, $link, 1);         }
        else
        {   $link = preg_replace($fk_patternof_non_www_link, $fk_deeplink."/", $link, 1);     }
        }
    }
    /* ** AMAZON.IN CONVERSION */
    if(preg_match($amazon_pattern, $link, $match))
    {
         /* if there is no query in link then add '?tag=alvistor-21'
           else add '&tag=alvistor-21' at end of the query */

        $am_add_this_for_query_link = "&" . $amazon_aff_id;
        $am_add_this_for_nonquery_link = "?" . $amazon_aff_id;
        /* checking for query or non query link to append affid */
        if(preg_match("/\?/", $link, $match))
        {
             /*echo "its query link <br>";*/
             $link .= $am_add_this_for_query_link;
            /* echo $link;*/
        }
        else
        {
             /*echo "its non query link <br>";*/
             $link .= $am_add_this_for_nonquery_link;
             /*echo $link;*/
        }
    }
    /* ** SNAPDEAL CONVERSION */
    if(preg_match($snapdeal_pattern, $link, $match))
    {
        $snapdeal_add_this_for_query_link = "&" . $snapdeal_aff_id;
        $snapdeal_add_this_for_nonquery_link = "?" . $snapdeal_aff_id;
        /* checking for query or non query link to append affid */
        if(preg_match("/\?/", $link, $match))
        {
            $link .= $snapdeal_add_this_for_query_link;
        }
        else
        {
            $link .= $snapdeal_add_this_for_nonquery_link;
        }
    }

    /* final Touchups for link */
    /*add http in front of any manual links*/
    if(preg_match("/http/",$link,$matches)) {}
    else{$link = "http://" . $link;}
}
else
{
    /* echo "link passing through cuelinks"; */
    $link = $cuelink_redirect . $link;

}
/*echo $link;*/
  header("Location: ".$link);
  exit;
?>

<?php
require_once(dirname(__FILE__) . '/wp-config.php');
$wp->init();
$wp->parse_request();
$wp->query_posts();
$wp->register_globals();
$wp->send_headers();

get_header();
?>
<style>
.resp-container {
	position: relative;
	overflow: hidden;
	padding-bottom: 56.25%;
	padding-top: 35px;
	height: 0;
}
.resp-iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	border: 0;
}

@media (min-width: 992px) {
    .main {
        display: none;
    }
}

@media (max-width: 992px) {

    .main2 {

        display: none;

    }

}

</style>

<div class="resp-container main2 hidden-xs hidden-sm">

	<p> Click on the shield icon on the top right corner of the browser and then click on load unsafe scripts </p>	

	<iframe class="resp-iframe" src="http://weavesilk.com/" frameborder="0" allowfullscreen ></iframe>

	<iframe style="display:none;"width="560" height="315" src="https://www.youtube.com/embed/RZrcaOnqu-E?rel=0&autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

</div>

<div class="main hidden-md hidden-lg" style="padding-top: 50px;padding-bottom:50px;">
	<p>Sorry this feature is available only for Desktop version.</p>
</div>


<?php get_footer();
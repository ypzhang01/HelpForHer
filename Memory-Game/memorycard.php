<?php
require_once(dirname(__FILE__) . '/wp-config.php');
$wp->init();
$wp->parse_request();
$wp->query_posts();
$wp->register_globals();
$wp->send_headers();

get_header();
?>

<link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet prefetch" href="https://fonts.googleapis.com/css?family=Coda">
    <link rel="stylesheet prefetch" href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Permanent+Marker" >
    <link rel="stylesheet" href="css/app.css">

    <div class="container">
        <header>
            <h1>Memory Game</h1>	
        </header>
	<hr/>
	<p>Match pair of cards. Turn over one card and then try to find a matching card. Play now!!</p>

        <section class="score-panel">
        	<ul class="stars">
        		<li><i class="fa fa-star"></i></li>
        		<li><i class="fa fa-star"></i></li>
        		<li><i class="fa fa-star"></i></li>
        	</ul>

        	<span class="moves">0</span> Move(s)

            <div class="timer">
            </div>

            <div class="restart" onclick=startGame()>
        		<i class="fa fa-repeat"></i>
        	</div>
        </section>

        <ul class="deck" id="card-deck">
            <li class="card" type="diamond">
                <i class="fa fa-diamond"></i>
            </li>
            <li class="card" type="plane">
                <i class="fa fa-paper-plane-o"></i>
            </li>
            <li class="card match" type="anchor">
                <i class="fa fa-anchor"></i>
            </li>
            <li class="card" type="bolt" >
                <i class="fa fa-bolt"></i>
            </li>
            <li class="card" type="cube">
                <i class="fa fa-cube"></i>
            </li>
            <li class="card match" type="anchor">
                <i class="fa fa-anchor"></i>
            </li>
            <li class="card" type="leaf">
                <i class="fa fa-leaf"></i>
            </li>
            <li class="card" type="bicycle">
                <i class="fa fa-bicycle"></i>
            </li>
            <li class="card" type="diamond">
                <i class="fa fa-diamond"></i>
            </li>
            <li class="card" type="bomb">
                <i class="fa fa-bomb"></i>
            </li>
            <li class="card" type="leaf">
                <i class="fa fa-leaf"></i>
            </li>
            <li class="card" type="bomb">
                <i class="fa fa-bomb"></i>
            </li>
            <li class="card open show" type="bolt">
                <i class="fa fa-bolt"></i>
            </li>
            <li class="card" type="bicycle">
                <i class="fa fa-bicycle"></i>
            </li>
            <li class="card" type="plane">
                <i class="fa fa-paper-plane-o"></i>
            </li>
            <li class="card" type="cube">
                <i class="fa fa-cube"></i>
            </li>
        </ul>

        <div id="popup1" class="overlay">
            <div class="popup">
                <h2>Congratulations 🎉</h2>
                <a class="close" href=# >×</a>
                <div class="content-1">
                    Congratulations you're a winner 🎉🎉
                </div>
                <div class="content-2">
                    <p>You made <span id=finalMove> </span> moves </p>
                    <p>in <span id=totalTime> </span> </p>
                    <p>Rating:  <span id=starRating></span></p>
                </div>
                <button id="play-again"onclick="playAgain()">
                    Play again 😄</a>
                </button>
            </div>
        </div>

    </div>
    <script src="js/app.js"></script>

<?php get_footer(); 
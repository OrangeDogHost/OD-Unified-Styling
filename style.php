/*
 Theme Name:     Divi Child
 Theme URI:      https://www.orangedoghost.com/
 Description:    Orange Dog Unified Styling
 Author:         Zack Palmer (zacnoo)
 Author URI:     https://www.orangedoghost.com/
 Template:       Divi
 Version:        0.0.5
*/

<?php
    header("Content-type: text/css; charset: UTF-8");
?>

.covid_bg {
	background:repeating-linear-gradient(
		135deg,
		#FFCC03,
		#FFCC03 100px,
		#fff 100px,
		#fff 200px
	);
}

.covid_bg_double {
	background:repeating-linear-gradient(
		135deg,
		#FFCC03,
		#FFCC03 50px,
		#fff 50px,
		#fff 100px
	);
}

.ss_green_bullets ul {
	list-style-type: none;
	padding:0;
	margin:0;
}

.ss_green_bullets li {
	background: url(images/green_dot_20px.svg) no-repeat left top;
	padding-left: 1.8em;
	margin-bottom: 1em;
	background-size: 1.4em;
	line-height: 1.5em;
}

.ss_ticks ul {
	list-style-type: none;
	padding:0;
	margin:0;
}

.ss_ticks li {
	background: url(images/ss_tick.svg) no-repeat left top;
	padding-left: 1.5em;
	margin-bottom: 1em;
	background-size: 1.4em;
	line-height: 1.5em;
}
<?php
/*
Plugin Name: wordpress improve
Plugin URI: http://www.seo-smo.co.il
Description:wordpress improve Widget is a seo helper. use it to help your site performance.
Author: seo-smo
Version: 1.1
Author URI: http://www.1link.co.il
*/

// this is your seo checklist
$lyrics = "Insert Keyword in title tag +3
Insert Keyword in URL +3
Check Keyword density in document +3
Insert Keyword in H1 and H2 headings +3
Insert Keyword in the beginning of document +2
Insert Keyword in ALT tags +2
Insert Keyword in Meta tags +1
Check Keyword stuffing -3
Insert Anchor text of inbound links +3
Insert Origin of inbound links +3
Get Links from similar sites +3
Get Links from .edu and .gov sites +3
Improve Anchor text of internal links +2
Check Many outgoing links -1
Check Outbound links to bad neighbors -3
Check Cross-linking -3
Fill Description Meta Tag +1
Fill Keywords Meta Tag +1
Refresh Meta Tag -1
Write Unique content +3
write Frequent updates +3
Age of content +2
Poor coding or design -2
Invisible text -3
Doorway pages -3
Copy Duplicate content -3
site accessibility +3
google Sitemap +2
Site size +2
Site age +2
Top-level domain +1
URL length (0)
Hosting downtime -1
Flash -2
Misused Redirects -3";

// Here we split it into lines
$lyrics = explode("\n", $lyrics);
// And then randomly choose a line
$chosen = wptexturize( $lyrics[ mt_rand(0, count($lyrics) - 1) ] );

// This just echoes the chosen line, we'll position it later
function wordpress_improve() {
	global $chosen;
	echo "<p id='improve'>$chosen</p>";
}

// Now we set that function up to execute when the admin_footer action is called
add_action('admin_footer', 'wordpress_improve');

// We need some CSS to position the paragraph
function improve_css() {
	echo "
	<style type='text/css'>
	#improve {
		position: absolute;
		top: 2.3em;
		margin: 0;
		padding: 0;
		right: 50px;
		font-size: 13px;
		color: #ffffff;
	}
	</style>
	";
}

add_action('admin_head', 'improve_css');

?>
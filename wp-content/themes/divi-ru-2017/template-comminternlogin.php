<?php /* Template Name: Commintern App Login */

get_header(); // Contans header content and main navigation; contains <head>; opens <html> and </body>

get_sidebar('premain'); // Contains pre-main sidebar; opens main content area

get_template_part('loop', 'page'); // Contains page content, comments, comments form and inner sidebar

//echo 'This text shows up in the main content area.';

include 'wp-content/forms/form-comminternapplogin.php';

get_sidebar('postmain'); // Contains post-main and bottom main sidebars; closes main content area

get_footer(); // Contains footer content, including footer sidebar; closes </body> and </html>

?>

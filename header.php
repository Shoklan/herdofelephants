<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Herd_of_Elephants
 */
?> <!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>

    <!-- METADATA -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>herdOfElephants</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <!-- FONTS -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Space+Mono" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Press+Start+2P" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto" />
  
    <!-- Javascript libraries -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.6.0/themes/prism-twilight.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.6.0/plugins/line-numbers/prism-line-numbers.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

  </head>

<!-- END HEADER / START BODY CONTENT -->
  <body>
    <div id= "backgroundImageDiv"></div>
    <div class= "container header">
      <div class ="row">
        <div class= "col-md-1 col-xs-1">
        <a name="jumpToTop"></a>
          <a href= "<?php echo esc_url( home_url( '/' ) ); ?>" alt= "logo"><span id= "logo" class="textLeft leftFloat">herdOfElephants</span></a>
        </div>
        <div class= "col-md-10 col-xs-10">
          <ul class= "list-unstyled list-inline">
            <li ><a href="https://www.github.com/shoklan" target="_blank"><i class="fa fa-github-square fontAwesomeAttrs"  aria-hidden="true"></i></a></li>
            <li><a href="" target="_blank"><i class="fa fa-rss-square fontAwesomeAttrs" aria-hidden="true"></i></a></li>
            <li><a href="https://www.twitter.com/shoklan/" target="_blank"><i class="fa fa-twitter-square fontAwesomeAttrs"  aria-hidden="true"></i></a></li>
          </ul>
        </div>
        <div class= "col-md-1 col-xs-1">
          <a href= "#" alt="resume"><span id= "resume" class="textRight rightFloat">[resume]</span></a>
        </div>
      </div>
    </div>

    <div class= "container">
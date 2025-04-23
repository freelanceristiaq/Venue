<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
      
   </head>
<body <?php body_class(); ?>>
<div class="wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 flex justify-between">
                        <button id="primary-nav-button" type="button">Menu</button>
                        <a class="flex" href="<?php echo esc_url(home_url('/')); ?>">
                            <div class="logo">
                            <?php venue_header_logo(); ?>
                            </div>
                        </a>
                        <nav id="primary-nav" class="dropdown cf">
                            <ul class="dropdown menu">
                               <?php venue_main_menu(); ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

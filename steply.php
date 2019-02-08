<?php
/*
Plugin Name: Steply
Plugin URI: http://vivex.me/steply
description: Adds wikihow style step by step UI, good for tutorial websites
Version: 1.0
Author: Vivek Soni
Author URI: http://vivex.me
License: GPLv2
*/

function steply_wrapper_shortcode($atts = array(), $content = "")
{
    $content = do_shortcode($content);
    $mainColor = get_option('steply_main_color');
    $textColor = get_option('steply_text_color');
    $str = <<<EOD
      <style>
      :root {
         --main-color: $mainColor;
         --text-color: $textColor;
        }
      </style>  
   	  <div class="steps">
   	    $content
   	   </div>
EOD;

    return $str;
}

function steply_step_shortcode($atts = array(), $content = "")
{
    $content = do_shortcode($content);
    $str = <<<EOD
    <div class="step-wrapper">
         <div class="step-title">
                    <h3>
                    <span class="step-number">Step <br/>
                        <span class="step-number-number\">{$atts['step-number']}</span>
                    </span>
                        <span class="step-heading">
                            {$atts['title']}
                        </span>
                    </h3>
         </div>
         <div class="step-content">
             $content
         </div>
      </div>
EOD;
    return $str;
}

function add_steply_styles()
{
    wp_enqueue_style('steply_css', plugins_url('/css/style.css', __FILE__));
}

add_action('wp_enqueue_scripts', 'add_steply_styles');
add_shortcode('steply_step', 'steply_step_shortcode');
add_shortcode('steply_wrapper', 'steply_wrapper_shortcode');

require_once __DIR__.'/settings.php';

<?php

namespace App;

/**
 * Theme customizer
 */
add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
  // Add postMessage support
  $wp_customize->get_setting('blogname')->transport = 'postMessage';
  $wp_customize->selective_refresh->add_partial('blogname', [
    'selector' => '.brand',
    'render_callback' => function () {
      bloginfo('name');
    }
  ]);

  $wp_customize->add_section('miro_theme_contacts', array(
    'title' => __('Contacts', 'miro'),
    'priority' => 30,
  ));

  // Usernames
  $wp_customize->add_setting('username_twitter', array(
    'default' => ''
  ));
  $wp_customize->add_control(new \WP_Customize_Control($wp_customize, 'username_twitter', array(
    'label' => __('Twitter username', 'sage'),
    'section' => 'miro_theme_contacts',
    'settings' => 'username_twitter',
    'type' => 'text'
  )));

  $wp_customize->add_setting('username_github', array(
    'default' => ''
  ));
  $wp_customize->add_control(new \WP_Customize_Control($wp_customize, 'username_github', array(
    'label' => __('Github username', 'sage'),
    'section' => 'miro_theme_contacts',
    'settings' => 'username_github',
    'type' => 'text'
  )));

  $wp_customize->add_setting('username_youtube', array(
    'default' => ''
  ));
  $wp_customize->add_control(new \WP_Customize_Control($wp_customize, 'username_youtube', array(
    'label' => __('YouTube username', 'sage'),
    'section' => 'miro_theme_contacts',
    'settings' => 'username_youtube',
    'type' => 'text'
  )));

  $wp_customize->add_setting('username_wordpress', array(
    'default' => ''
  ));
  $wp_customize->add_control(new \WP_Customize_Control($wp_customize, 'username_wordpress', array(
    'label' => __('Wordpress username', 'sage'),
    'section' => 'miro_theme_contacts',
    'settings' => 'username_wordpress',
    'type' => 'text'
  )));

  $wp_customize->add_setting('paypal_donation_link', array(
    'default' => ''
  ));
  $wp_customize->add_control(new \WP_Customize_Control($wp_customize, 'paypal_donation_link', array(
    'label' => __('Paypal Donation link', 'sage'),
    'section' => 'miro_theme_contacts',
    'settings' => 'paypal_donation_link',
    'type' => 'text'
  )));

  $wp_customize->add_setting('username_linkedin', array(
    'default' => ''
  ));
  $wp_customize->add_control(new \WP_Customize_Control($wp_customize, 'username_linkedin', array(
    'label' => __('LinkedIn username', 'sage'),
    'section' => 'miro_theme_contacts',
    'settings' => 'username_linkedin',
    'type' => 'url'
  )));

  $wp_customize->add_setting('username_flickr', array(
    'default' => ''
  ));
  $wp_customize->add_control(new \WP_Customize_Control($wp_customize, 'username_flickr', array(
    'label' => __('Flickr username', 'sage'),
    'section' => 'miro_theme_contacts',
    'settings' => 'username_flickr',
    'type' => 'text'
  )));

  $wp_customize->add_setting('username_instagram', array(
    'default' => ''
  ));
  $wp_customize->add_control(new \WP_Customize_Control($wp_customize, 'username_instagram', array(
    'label' => __('Instagram username', 'sage'),
    'section' => 'miro_theme_contacts',
    'settings' => 'username_instagram',
    'type' => 'text'
  )));

  $wp_customize->add_setting('email_address', array(
    'default' => ''
  ));
  $wp_customize->add_control(new \WP_Customize_Control($wp_customize, 'email_address', array(
    'label' => __('Email', 'sage'),
    'section' => 'miro_theme_contacts',
    'settings' => 'email_address',
    'type' => 'text'
  )));

  $wp_customize->add_setting('email_address_svg_code', array(
    'default' => ''
  ));
  $wp_customize->add_control(new \WP_Customize_Control($wp_customize, 'email_address_svg_code', array(
    'label' => __('Email svg code', 'sage'),
    'section' => 'miro_theme_contacts',
    'settings' => 'email_address_svg_code',
    'type' => 'textarea'
  )));

  $wp_customize->add_section('miro_theme_ganalytics_tracker', array(
    'title' => __('Google Analytics tracker', 'miro'),
    'priority' => 30,
  ));
  $wp_customize->add_setting('ganalytics_tag_code', array(
    'default' => ''
  ));
  $wp_customize->add_control(new \WP_Customize_Control($wp_customize, 'ganalytics_tag_code', array(
    'label' => __('Google Analytics tracker', 'sage'),
    'section' => 'miro_theme_ganalytics_tracker',
    'settings' => 'ganalytics_tag_code',
    'type' => 'textarea'
  )));

  $wp_customize->add_section('miro_theme_twitter_tracker', array(
    'title' => __('Twitter tracker', 'miro'),
    'priority' => 30,
  ));
  $wp_customize->add_setting('twitter_tag_code', array(
    'default' => ''
  ));
  $wp_customize->add_control(new \WP_Customize_Control($wp_customize, 'twitter_tag_code', array(
    'label' => __('Twitter tag code', 'sage'),
    'section' => 'miro_theme_twitter_tracker',
    'settings' => 'twitter_tag_code',
    'type' => 'textarea'
  )));

  $wp_customize->add_section('miro_theme_privacy_policy', array(
    'title' => __('Privacy policy', 'miro'),
    'priority' => 30,
  ));
  $wp_customize->add_setting('privacy_policy_extended_link', array(
    'default' => ''
  ));
  $wp_customize->add_control(new \WP_Customize_Control($wp_customize, 'privacy_policy_extended_link', array(
    'label' => __('Extended Privacy Policy link', 'sage'),
    'section' => 'miro_theme_privacy_policy',
    'settings' => 'privacy_policy_extended_link',
    'type' => 'url'
  )));
});

/**
 * Customizer JS
 */
add_action('customize_preview_init', function () {
  wp_enqueue_script('sage/customizer.js', asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
});

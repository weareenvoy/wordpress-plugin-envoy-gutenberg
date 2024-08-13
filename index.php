<?php
/**
 * Plugin Name: Envoy Gutenberg
 * Description: Add custom Gutenberg blocks to the editing experience
 * Author: WeAreEnvoy
 * Author URI: https://www.weareenvoy.com/
 */
if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// TO-DO: Create auto-loader so we don't have to require_once()
require_once __DIR__ . '/src/Gutenberg/index.php';

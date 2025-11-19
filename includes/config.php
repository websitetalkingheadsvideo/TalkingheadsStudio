<?php
/**
 * Site Configuration and Path Helpers
 * Provides path resolution for includes from any directory depth
 */

// Get the directory depth of current file relative to root
function get_path_prefix($file_path) {
    $current_dir = dirname($file_path);
    $root_dir = $_SERVER['DOCUMENT_ROOT'] ?? dirname(__DIR__);
    
    // Count directory depth
    $relative_path = str_replace($root_dir, '', $current_dir);
    $depth = substr_count($relative_path, DIRECTORY_SEPARATOR);
    
    // Generate path prefix (../ repeated for each directory level)
    return str_repeat('../', $depth);
}

// Auto-detect path prefix based on current script location
if (!defined('PATH_PREFIX')) {
    $script_file = $_SERVER['SCRIPT_FILENAME'] ?? __FILE__;
    define('PATH_PREFIX', get_path_prefix($script_file));
}

// Site configuration
define('SITE_NAME', 'Video Agency');
define('SITE_DESCRIPTION', '| Your Video Spokesperson');
define('SITE_URL', 'https://vbn.talkingheads.video/');

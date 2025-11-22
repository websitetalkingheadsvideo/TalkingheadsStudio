<?php
/**
 * Site Configuration and Path Helpers
 * Provides path resolution for includes from any directory depth
 */

// Get the directory depth of current file relative to root
function get_path_prefix($file_path) {
    $current_dir = dirname($file_path);
    $root_dir = (isset($_SERVER['DOCUMENT_ROOT']) && $_SERVER['DOCUMENT_ROOT']) ? $_SERVER['DOCUMENT_ROOT'] : dirname(__DIR__);
    
    // Normalize paths for comparison
    $current_dir = str_replace('\\', '/', $current_dir);
    $root_dir = str_replace('\\', '/', $root_dir);
    $root_dir = rtrim($root_dir, '/');
    
    // Count directory depth
    $relative_path = str_replace($root_dir, '', $current_dir);
    $relative_path = trim($relative_path, '/');
    
    // If at root, depth is 0
    if (empty($relative_path)) {
        return '';
    }
    
    $depth = substr_count($relative_path, '/');
    
    // Generate path prefix (../ repeated for each directory level)
    return str_repeat('../', $depth);
}

// Auto-detect path prefix based on current script location
if (!defined('PATH_PREFIX')) {
    if (isset($_SERVER['SCRIPT_FILENAME']) && $_SERVER['SCRIPT_FILENAME']) {
        $script_file = $_SERVER['SCRIPT_FILENAME'];
    } elseif (isset($_SERVER['PHP_SELF']) && $_SERVER['PHP_SELF']) {
        // Fallback to PHP_SELF if SCRIPT_FILENAME is not available
        $doc_root = (isset($_SERVER['DOCUMENT_ROOT']) && $_SERVER['DOCUMENT_ROOT']) ? $_SERVER['DOCUMENT_ROOT'] : dirname(__DIR__);
        $script_file = $doc_root . $_SERVER['PHP_SELF'];
    } else {
        // Last resort: assume root directory
        $script_file = dirname(__DIR__) . '/index.php';
    }
    define('PATH_PREFIX', get_path_prefix($script_file));
}

// Site configuration
define('SITE_NAME', 'Video Agency');
define('SITE_DESCRIPTION', '| Your Video Spokesperson');
define('SITE_VERSION', '0.2.5');
// SITE_URL will be auto-detected from HTTP_HOST to avoid hardcoded domains
if (!defined('SITE_URL')) {
    $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host = (isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'talkingheadstudio.com';
    define('SITE_URL', $protocol . '://' . $host . '/');
}

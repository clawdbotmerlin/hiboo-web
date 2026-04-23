<?php
/**
 * Hiboo — One-time Git Deploy Script
 * Upload to: /public_html/hiboo.id/deploy-pull.php
 * Visit:     https://hiboo.id/deploy-pull.php?token=hiboo2026
 * DELETE THIS FILE after successful deploy!
 */

$secret = 'hiboo2026';

if ( ( $_GET['token'] ?? '' ) !== $secret ) {
    http_response_code( 403 );
    die( 'Unauthorized' );
}

$repo_path = '/home/u1399513p236745/public_html/hiboo.id/wp-content/themes/hiboo-child';

echo '<pre>';
echo "Working dir: $repo_path\n\n";

// Check if it's a git repo
$is_git = shell_exec( "cd $repo_path && git status 2>&1" );
echo "Git status:\n$is_git\n\n";

// Run git pull
$output = shell_exec( "cd $repo_path && git pull origin main 2>&1" );
echo "Git pull output:\n$output\n\n";

// List images
$images = shell_exec( "ls -lh $repo_path/assets/images/products/ 2>&1" );
echo "Images on server:\n$images\n";

echo "</pre>";
echo "<p><strong>Done! Delete this file immediately via cPanel File Manager.</strong></p>";

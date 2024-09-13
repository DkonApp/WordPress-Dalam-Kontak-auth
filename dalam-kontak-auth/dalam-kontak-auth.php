<?php
/**
 * Plugin Name: Dalam Kontak Auth
 * Description: Dalam Kontak Authentication Module for WordPress.
 * Version: 1.0
 * Author: https://dkon.app/ansari
 */

function dka_enqueue_scripts() {
    wp_enqueue_style('dka-style', plugin_dir_url(__FILE__) . 'css/a.css');
    wp_enqueue_script('dka-script', plugin_dir_url(__FILE__) . 'js/auth.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'dka_enqueue_scripts');

function dka_login_form() {
    ob_start();
    ?>
    <div class="container">
        <h1 class="logo">𝓓𝓪𝓵𝓪𝓶 𝓚𝓸𝓷𝓽𝓪𝓴</h1>
        <h2>Login</h2>
        <form id="login-form" class="form">
            <input type="hidden" name="clientId" value="1302">
            <input type="text" id="username" name="username" placeholder="Username" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <button type="submit" class="button">Login</button>
        </form>
        <div id="login-error" class="error-message"></div>
        <a href="register.html" class="link">Register</a>
    </div>
    <?php
    return ob_get_clean();
}

function dka_shortcode() {
    return dka_login_form();
}
add_shortcode('dalam_kontak_login', 'dka_shortcode');

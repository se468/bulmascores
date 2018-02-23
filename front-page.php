<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bulmascores
 */

get_header(); ?>


<div id="primary" class="content-area">
    
    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Welcome to Bulmascores!
                </h1>
                <h2 class="subtitle">
                    I am a starter theme for Wordpress that uses Bulma. This page is rendered from <code>front-page.php</code>
                </h2>
            </div>
        </div>
    </section>
    
    <section class="mt-2 mb-2">
        <div class="container">
            <article class="message">
                <div class="message-header">
                    Not sure where to start?
                </div>
                <div class="message-body">
                    <div class="mb-1">
                        Check out our <a href="https://github.com/se468/Bulmascores">Getting Started Guide</a>.
                    </div>
                    

                    <div>
                        <a href="http://demo-bulmascores.seyongcho.com/wp-content/archives/bulmascores.zip" class="button is-primary">Download Theme (.zip)</a>

                        <a href="http://demo-bulmascores.seyongcho.com/wp-content/archives/bulmascores-child.zip" class="button is-info">Download Child Theme (.zip)</a>
                    </div>
                    
                </div>
            </article>



            <article class="message">
                <div class="message-header">
                    Getting started (5 minute setup):
                </div>
                <div class="message-body">
                    <ol>
                        <li>
                            Download Bulmascores <a href="https://github.com/se468/Bulmascores">here</a>. Upload theme to your newly created Wordpress project.
                        </li>
                        <li>
                            Using Terminal, run <code>npm install webpack —save-dev</code> on your current theme directory.
                        </li>
                        <li>
                            Then, run <code>npm install</code> on your current theme directory.
                        </li>
                        <li>
                            Try to compile the sass and js in the <code>src</code> directory by typing <code>npm run dev</code>. 
                        </li>
                        <li>
                            If that didn't work, try running <code>npm update</code> and then <code>npm run dev</code>
                        </li>
                        <li>
                            Your entry Javascript and Sass files are <code>src/js/main.js</code> and <code>src/sass/main.scss</code>.
                        </li>
                    </ol>
                </div>
            </article>
        </div>

    </section>
</div><!-- #primary -->

<?php
get_footer();

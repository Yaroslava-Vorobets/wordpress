<?php

function child_styles() {
    wp_enqueue_style('twentytwentyfour-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'child_styles');


function consol_script() {
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/js/custom-script.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'consol_script');

function aggiungi_script_random() {
    echo '<script type="text/javascript">
                function getRandomColor() {
                    let letters = "0123456789ABCDEF";
                    let color = "#";
                    for (let i = 0; i < 6; i++) {
                        color += letters[Math.floor(Math.random() * 16)];
                    }
                    return color;
                }

                document.addEventListener("DOMContentLoaded", function() {
                    document.body.style.backgroundColor = getRandomColor(); 
                });
              </script>';
}
add_action('wp_head', 'aggiungi_script_random');


add_action('wp_footer', 'replace_images_in_content');

function replace_images_in_content() {
  
    $image_url = get_stylesheet_directory_uri() . '/images/hero-bg-mob.jpg';    
    ?>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {           
            let images = document.querySelectorAll('img');
          
            images.forEach(function(img) {               
                img.src = "<?php echo esc_url($image_url); ?>";
                img.alt = "team"; 
            });
        });
    </script>
    <?php
}
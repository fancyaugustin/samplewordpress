<footer class="site-footer">
   <nav class="site-nav">
        <?php 
        $args=array(
            'theme-location' => 'footer'
        );
                ?>
        <ul>
           <?php wp_nav_menu($args);?>
        </ul>
    </nav>
    <p>
        <?php bloginfo('name');?> - &copy; <?php echo date('Y');?>
    </p>
</footer>  
        </div>

<?php wp_footer();?>
    </body>
    </html>
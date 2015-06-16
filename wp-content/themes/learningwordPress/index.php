<?php
get_header();
if ( have_posts()) :

// Start the loop.
while (have_posts()) : the_post();?>
<article class="post">
<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
<div><label>Phone number:</label><?php echo get_field('phone_no');?></div>
<div><label>Address:</label><?php echo get_field('address');?></div>
<?php the_content();?>
</article>
<?php endwhile;
else:
    echo '<p>No content Found</p>';
endif;
get_footer();
?>
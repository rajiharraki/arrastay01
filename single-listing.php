<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div style="display:flex;flex-wrap:wrap;gap:32px;">
        <div style="flex:2;min-width:300px;">
            <h1><?php the_title(); ?></h1>
            <p style="color:#7c7c7c;font-size:1.1em;"><?php the_excerpt(); ?></p>
            <div style="margin-bottom:18px;">
                <?php echo do_shortcode('[arrastay_gallery]'); ?>
            </div>
            <div style="margin-top:18px;">
                <strong>Price:</strong> Rp <?php echo number_format(get_post_meta(get_the_ID(), 'harga', true), 0, ',', '.'); ?>
            </div>
        </div>
        <div style="flex:1;min-width:270px;">
            <?php echo do_shortcode('[arrastay_booking_form listing_id="'.get_the_ID().'"]'); ?>
        </div>
    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>

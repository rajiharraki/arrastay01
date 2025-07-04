<?php get_header(); ?>

<h1>Find Your Perfect Stay</h1>
<p style="margin-bottom:30px;color:#666;">Browse listings, check details, and book your favorite stay!</p>

<?php
// Tampilkan grid listing dari plugin dengan shortcode
echo do_shortcode('[arrastay_listings]');
?>

<?php get_footer(); ?>

<?php
$product_id = get_the_ID();
$product_img_src = get_the_post_thumbnail_url($product_id, 'product');
?>

<li class="blog-list__item wow fadeInUp"><a class="blog-list__link" href="<?php the_permalink(); ?>">
        <img class="blog-list__image" src="<?php echo $product_img_src ?>" alt="">
        <div class="blog-list__content">
            <h3 class="blog-list__title"><?php the_title(); ?></h3>
            <p class="blog-list__date"><?php echo get_the_date(); ?></p>
            <div class="blog-list__text">
                <?php the_excerpt(); ?>
            </div>
        </div>
    </a>
</li>
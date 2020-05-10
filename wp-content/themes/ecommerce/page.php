<?php get_header();?>

    <div class="body-content">
        <div class="container">
            <div class="row" style="margin-top: 30px;">
                <div class="blog-page">
                    <div class="col-md-9">
                        <?php while (have_posts()) : the_post(); ?>
                            <?php get_template_part('/template-parts/content/content','content');?>
                        <?php endwhile; ?>
                    </div>
                    <?php get_template_part('/template-parts/sidebar/page-sidebar','page-sidebar');?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();?>
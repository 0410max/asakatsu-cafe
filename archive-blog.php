<?php get_header();?>

<!-- おすすめの記事 -->
<div class="blogTop">
    <div class="blogTop__wrapper">
        <div class="slider">
            <?php
                $args_recommend = array(
                    'post_type'=> 'post',
                    'category_name' => 'blog',
                    'tag' => 'おすすめ',
                );
                $posts_recommend = get_posts($args_recommend);
            ?>
            <?php foreach($posts_recommend as $post): setup_postdata($post); ?>
                <a href="<?php the_permalink(); ?>" class="blog__list slider-item">
                    <div class="blog__list__eyecatch2">
                        <img class="blog__list__eyecatch__image" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>">
                    </div>
                    <div class="blog__list__title">
                        <?php the_title(); ?>
                    </div>
                    <div class="blog__list__description">
                        <?php echo wp_trim_words(get_the_content(), 115, '...'); ?>
                    </div>
                    <div class="blog__list__date">
                        <i class="fa-regular fa-clock"></i><?php echo get_the_date('Y/m/d'); ?>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
        <script>
            $(document).ready(function(){
                $('.slider').slick({
                    slidesToShow: 3,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    dots: true,
                    centerMode: true,
                    centerPadding: '0',
                    responsive: [
                        {
                            breakpoint: 550,
                            settings: {
                                slidesToShow: 1,
                            }
                        }
                    ]
                });
            });
        </script>
    </div>
</div>

<!-- 記事一覧 -->
<div class="blog">
    <div class="blog__wrapper">
        <main class="blog__lists">
            <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args_list = array(
                    'post_type' => 'post',
                    'category_name' => 'blog',
                    'paged' => $paged,
                    'posts_per_page' => 5,
                    'tag__not_in' => array( 'おすすめ' ),
                );
                $query_list = new WP_Query($args_list);
            ?>
            <?php while($query_list->have_posts()): $query_list->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="blog__list">
                    <div class="blog__list__eyecatch">
                        <img class="blog__list__eyecatch__image" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>">
                    </div>
                    <div class="blog__list__title">
                        <?php the_title(); ?>
                    </div>
                    <div class="blog__list__description">
                        <?php echo wp_trim_words(get_the_content(), 115, '...'); ?>
                    </div>
                    <div class="blog__list__date">
                        <i class="fa-regular fa-clock"></i><?php echo get_the_date('Y/m/d'); ?>
                    </div>
                </a>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

            <!-- ページネーションの表示 -->
            <div class="pagination">
                <?php
                    echo paginate_links(array(
                        'total' => $query_list->max_num_pages,
                        'current' => max(1, get_query_var('paged')),
                    ));
                ?>
            </div>
        </main>
        
        <aside class="blog__aside">
            <?php include 'templates/aside.php'; ?>
        </aside>
    </div>
</div>

<?php get_footer(); ?>

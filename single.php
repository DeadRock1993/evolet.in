<?php get_header();?>
		
<section class="product">
    <div class="mobile_only">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <a id="section_link" href="index.html" class="label"></a>
                    <h2 id="element_name" class="name"></h2>
                    <p id="element_desc" class="description"></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <ol class="breadcrumb wow fadeIn"><li><a href="<?php echo home_url( '/' ); ?>">Главная</a></li><li><a href="<?php echo home_url( '/' ); ?>catalog/">Продукты</a></li><li class="active"><?php the_title(); ?></li></ol>
        <div class="row">
            <div class="col-sm-6 col-sm-push-6">

                
                <div class="galery">

                    
                        <div class="galery__img">
                            <img src="<?php echo get_the_post_thumbnail_url()?>" alt="">
                        </div>

                    
                </div>
                <div class="logo card_bottom">
                    <?php if (class_exists('MultiPostThumbnails')) :
                        MultiPostThumbnails::the_post_thumbnail(
                            get_post_type(),
                            'secondary-image'
                        );
                    endif; ?>
                </div>
            </div>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-sm-6 col-sm-pull-6">
                <div class="desktop_only">
                    <i style="background-color:#def7c4;color:#417505;" class="label">
                        <?php
                        $category = get_the_category(); 
                        echo $category[0]->cat_name; //вывод названия категории на экран
                        ?>                   
                    </i>
                    <h1 class="name"><?php the_title(); ?></h1>
                    <p class="description">
                    <?php the_content(); ?>
                    </p>
                </div>
                <div class="tabs">
                    <div class="tabs__nav"> 
                        <button class="tabs_btn active">Состав</button>
                        <button class="tabs_btn">Показания</button>
                        <button class="tabs_btn">Способ применения</button>
                    </div>
                    <div class="tabs_sections tabs__wrap">
                        <div class="tabs_sections__section active">
                            <?php the_field('состав'); ?>
                        </div>
                        <div class="tabs_sections__section">
                            <?php the_field('показания'); ?>
                        </div>
                        <div class="tabs_sections__section">
                            <?php the_field('способ_применения'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
<!--
                        <div class="navigation">
                            <div class="next-posts"><?php next_posts_link(); ?></div>
                            <div class="prev-posts"><?php previous_posts_link(); ?></div>
                        </div>
-->
                        <?php else : ?>

                        <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                            <h1>Не найдено!</h1>
                        </div>

                        <?php endif; ?>
        </div>
    </div>
    <div class="mobile_only">
        <div class="logo">
            <img src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/iblock/4d1/4d1f7e024846fe6263749242e9f7b752.png?153373529979524" alt="Belinda" class="logo__img">
        </div>
    </div>
</section>

<div class="popup" id="popup">
    <div class="popup__window">
        <button class="btn_close" onclick="toggle_popup()"></button>
        <div>
            <section class="section">
                <div id='mySpriteSpin'></div>
            </section>
        </div>
    </div>
</div>

<section class="products gray">
    <div class="container">

        <div class="header_section">Продукты</div>

        <div class="products_slider">


        
        <?php // Display blog posts on any page @ http://m0n.co/l
                    $temp = $wp_query; $wp_query= null;
                    $wp_query = new WP_Query(); $wp_query->query('showposts=5' . '&paged='.$paged);
                    while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                        <div id="bx_3218110189_93" class="product_slider__wrap">
                            <a href="<?php the_permalink(); ?>" class="products_slider__item">

                                <div class="label" style="background-color:#F0FFF0;color:#8FBC8F;">
                                <?php
                                $category = get_the_category(); 
                                echo $category[0]->cat_name; //вывод названия категории на экран
                                ?>
                                </div>

                                <img src="<?php echo get_the_post_thumbnail_url()?>" alt="Лактоспей Кидс" class="image">
                                <h4 class="card_header"><?php the_title(); ?></h4>
                                <p class="card_description">
                                <?php the_excerpt(); ?>
                                </p>
                                <div class="card_bottom">
                                <?php if (class_exists('MultiPostThumbnails')) :
                                MultiPostThumbnails::the_post_thumbnail(
                                    get_post_type(),
                                    'secondary-image'
                                );
                                endif; ?>
                                </div>
                            </a>
                        </div>

                        <?php endwhile; ?>
 
                        <?php if ($paged > 1) { ?>
<!--
            <nav id="nav-posts">
            <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
            <div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
            </nav>
                        -->
            <?php } else { ?>
    
            <nav id="nav-posts">
                <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
            </nav>
    
            <?php } ?>
    
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>

<?php get_footer();?>
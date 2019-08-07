<?php /*Template Name: Catalog*/?>
<?php get_header();?>	

<div class="products_description gray">
    <div class="container">
        <ol class="breadcrumb wow fadeIn"><li><a href="<?php echo home_url( '/' ); ?>">Главная</a></li><li class="active">Продукты</li></ol>        <div class="row">
            <div class="col-sm-6">
                <section class="section">
                    <h1 class="section__header">Продукты брендов Spey, Belinda и Vegapharm</h1>
                    <p class="section__text">
                        В 2011 году компания Evolet объединила в себе практически полный цикл услуг в области фарминдустрии - от разработки препаратов до розничных продаж. Централизованное управление этим процессом позволило значительно сократить издержки (за счет сокращения нескольких звеньев) и заметно улучшить соотношение цены и качества поставляемых препаратов.
                    </p>                
                </section>
            </div>
            <div class="col-sm-6">
                <div class="big_text">
	 Всего каталог продукции <b>Evolet</b> насчитывает более 1&nbsp;200 позиций
</div>
<br>            </div>
        </div>
    </div>
</div>
<section class="products">
    <div class="container">
   
    
    <div class="row">
            <div class="col-md-6">
                        <div class="search">
                        <form class="search" action="<?php bloginfo('url'); ?>" method="get">
                            <div class="select__selected">
                                <div class="description">Выберите тип продукции</div>
                                <div class="value"><?php wp_dropdown_categories('&hierarchical=1'); ?></div>
                            </div>
                            <input class="btn_green_fill" type="submit" name="submit" value="Найти" />
                        </form>   
                        </div>
            </div>
            
    </div>
        <div class="row">
            <div id="ajax_container" class="col-sm-12">


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
        </div>
    </div>

            <div class="center show_all"><button class="btn_green"><a class="mylinks" href="<?php echo home_url( '/' ); ?>category/vse-rubriki/">Показать все</a></button></div>
    
</section>

<div class="rewrite gray" style="display:none;">
    <div class="container" style="display:none;">

        
<div class="row">
    <div class="col-sm-6">
        <form id="SEND_APP" name="SEND_APP" action="index.html" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="sessid" id="sessid_1" value="4fc040c9a0c85bf4597b5f9e40bdd278" />            <input type="hidden" name="WEB_FORM_ID" value="3" />

            <div class="form">
                <div class="form__wrap">
                    <div class="form__inputs">

                        
                            
                                                                        <div class="input_wrap">
                                            <input name="form_text_6"
                                                   value=""
                                                   data-code="fio"
                                                   class="input"
                                                   type="text"
                                                 required                                            >
                                            <label class="placeholder">ФИО</label>
                                        </div>
                                        
                            
                        
                            
                                                                        <div class="input_wrap">
                                            <input name="form_text_7"
                                                   value=""
                                                   data-code="company"
                                                   class="input"
                                                   type="text"
                                                 required                                            >
                                            <label class="placeholder">Компания</label>
                                        </div>
                                        
                            
                        
                            
                                                                        <div class="input_wrap">
                                            <input name="form_email_8"
                                                   value=""
                                                   data-code="email"
                                                   class="input"
                                                   type="text"
                                                 required                                            >
                                            <label class="placeholder">e-mail</label>
                                        </div>
                                        
                            
                        
                            
                                
                            
                        
                    </div>
                    <div class="form__others">

                        
                            
                                
                            
                        
                            
                                
                            
                        
                            
                                
                            
                        
                            
                                                                        <div class="textarea_wrap">
                                            <textarea class="textarea"
                                                      name="form_textarea_9"
                                                      value=""
                                                                                            ></textarea>
                                            <label class="placeholder">Дополнительная информация</label>
                                        </div> 
                                        
                            
                        
                        <input name="web_form_submit" value="Запросить" class="btn_green_fill" type="submit"><br><p>Нажимая на кнопку "Запросить", Вы даете <a href="../policy/index.html">согласие на обработку своих персональных данных</a></p>
                    </div>
                </div>
               <div class="thanks">
                    Спасибо за заявку! Мы свяжемся с Вами в ближайшее время!
                    <button class="btn_green" onclick="sendAppForm.setReadyState()"; type="reset">Отправить ещё</button>
                </div>
            </div>
        </form>
    </div>
</div>


    </div>
</div>
<?php get_footer();?>
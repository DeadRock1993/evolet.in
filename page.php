<?php /*Template Name: Policy*/?>
<?php get_header(); ?>


<div class="activities">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <section class="section">
                    <ol class="breadcrumb wow fadeIn">
						<li><a href="../index.html">Главная</a></li>
						<li class="active">Политика конфиденциальности</li>
					</ol>     

					<h2><?php the_title();?></h2>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
					the_content();
					endwhile; else: ?>
					<h2 class="alert alert-light">По вашему запросу ничего не найдено...</h2>
					<?php endif; ?>
					
					
					
			    </section>

            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
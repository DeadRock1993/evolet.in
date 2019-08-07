<?php get_header(); ?>


<div class="activities">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <section class="section">
                    <ol class="breadcrumb wow fadeIn">
						<li><a href="<?php echo home_url( '/' ); ?>">Главная</a></li>
						<li class="active">Error</li>
					</ol>     
                    
					<img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/img/404.jpg" alt="Error">
              
				
					
			    </section>

            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
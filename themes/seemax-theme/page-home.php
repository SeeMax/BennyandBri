<?php /* Template Name: Home */ get_header(); ?>
<div class="main-site-border"></div>
<div class="main-site-border main-site-border-2"></div>
<div class="main-site-border main-site-border-2 main-site-border-flip"></div>
<div class="main-site-border main-site-border-3"></div>
<div class="main-site-border main-site-border-3 main-site-border-flip"></div>
<div class="main-site-border main-site-border-4"></div>
<main class="home-page">
	<?php while (have_posts()) : the_post(); ?>
		<div class="headline-block">
			<?php get_template_part( 'partials/_shirt-pattern-three' ); ?>
			<?php get_template_part( 'partials/_flower-patch-one' ); ?>
			<?php get_template_part( 'partials/_site_title');?>
			<?php get_template_part( 'partials/_flower-patch-two' ); ?>
		</div>
		<?php if( have_rows('hero_section') ): ?>
			<?php while( have_rows('hero_section') ): the_row();?>
				<section class="hero-section">
					<div class="content">
		        <?php
							$title = get_sub_field('title');
		        	$body = get_sub_field('body');
							$image = get_sub_field('image');
		    		?>
						<div class="image-half c-width-50">
							<!-- <img src="<?php echo $image[url];?>"/> -->
						</div>
						<div class="text-half c-width-100">
							<p><?php echo $body;?></p>
						</div>
					</div>
				</section>
			<?php endwhile; ?>
		<?php endif; ?>
		<?php if( have_rows('who_section') ): ?>
			<?php while( have_rows('who_section') ): the_row();?>
				<section class="who-section">
					<div class="content">
		        <?php
							$title = get_sub_field('title');
		        	$body = get_sub_field('body');
							$image = get_sub_field('image');
		    		?>
						<div class="headline-block">
							<h2><?php echo $title;?></h2>
						</div>
						<div class="text-half c-width-50">
							<p><?php echo $body;?></p>
						</div>
						<div class="image-half">
							<svg class="image-svg" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 2090 1420">
								<filter id="photo-filter">

								</filter>
	  						<image xlink:href="<?php echo $image[url];?>"/>
							</svg>
							<?php get_template_part( 'partials/_div-border' ); ?>
						</div>
					</div>
				</section>
			<?php endwhile; ?>
		<?php endif; ?>
		<?php if( have_rows('what_section') ): ?>
		  <?php while( have_rows('what_section') ): the_row();?>
		    <section class="what-section">
		      <div class="content">
		        <?php
		          $title = get_sub_field('title');
		          $body = get_sub_field('body');
		        ?>
		        <h2><?php echo $title;?></h2>
		        <p><?php echo $body;?></p>
		      </div>
		    </section>
		  <?php endwhile; ?>
		<?php endif; ?>
		<?php if( have_rows('where_section') ): ?>
		  <?php while( have_rows('where_section') ): the_row();?>
		    <section class="where-section">
		      <div class="content">
		        <?php
		          $title = get_sub_field('title');
		          $body = get_sub_field('body');
		        ?>
		        <h2><?php echo $title;?></h2>
		        <p><?php echo $body;?></p>
		      </div>
		    </section>
		  <?php endwhile; ?>
		<?php endif; ?>
		<?php if( have_rows('when_section') ): ?>
		  <?php while( have_rows('when_section') ): the_row();?>
		    <section class="when-section">
		      <div class="content">
		        <?php
		          $title = get_sub_field('title');
		          $body = get_sub_field('body');
		        ?>
		        <h2><?php echo $title;?></h2>
		        <p><?php echo $body;?></p>
		      </div>
		    </section>
		  <?php endwhile; ?>
		<?php endif; ?>
		<?php if( have_rows('response_section') ): ?>
		  <?php while( have_rows('response_section') ): the_row();?>
		    <section class="response-section">
		      <div class="content">
		        <?php
		          $title = get_sub_field('title');
		          $body = get_sub_field('body');
		        ?>
		        <h2><?php echo $title;?></h2>
		        <p><?php echo $body;?></p>
		      </div>
		    </section>
		  <?php endwhile; ?>
		<?php endif; ?>
	<?php endwhile; ?>
</main>
<img class="tumbleweed-one-shadow tumbleweedOneShadow" src="<?php echo get_template_directory_uri();?>/img/tumbleweed-one-shadow.svg" >
<img class="tumbleweed-one tumbleweedOne" src="<?php echo get_template_directory_uri();?>/img/tumbleweed-1.svg" >
<?php get_footer(); ?>

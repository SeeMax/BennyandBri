<?php /* Template Name: Home */ get_header(); ?>
<main class="home-page">
	<?php while (have_posts()) : the_post(); ?>
		<div class="headline-block">
			<?php get_template_part( 'partials/_site-title');?>
		</div>
		<?php if( have_rows('hero_section') ): ?>
			<?php while( have_rows('hero_section') ): the_row();?>
				<section class="hero-section border-tan">
					<?php get_template_part( 'partials/_area-stitch-border' ); ?>
					<?php get_template_part( 'partials/_tan-color-background' ); ?>
					<div class="content">
		        <?php
							$title = get_sub_field('title');
		        	$body = get_sub_field('body');
							$image = get_sub_field('image');
		    		?>
						<div class="image-half c-width-100">
							<h2><?php echo $title;?></h2>
							<?php get_template_part( 'partials/_cactus-flower-full' ); ?>
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
							<div class="c-width-33-3">
								<?php get_template_part( 'partials/_lady-flower-single' ); ?>
							</div>
							<h2 class="c-width-33-3"><?php echo $title;?></h2>
							<div class="c-width-33-3">
								<?php get_template_part( 'partials/_lady-flower-single-2' ); ?>
							</div>
						</div>
						<div class="image-half c-width-50 border-green">
							<?php get_template_part( 'partials/_area-stitch-border-full' ); ?>
	  					<img src="<?php echo $image[url];?>"/>
						</div>
						<div class="text-half c-width-50 border-green">
							<p><?php echo $body;?></p>
						</div>
					</div>
				</section>
			<?php endwhile; ?>
		<?php endif; ?>
		<?php if( have_rows('what_section') ): ?>
		  <?php while( have_rows('what_section') ): the_row();?>
		    <section class="what-section border-yellow">
					<?php
						$title = get_sub_field('title');
						$body = get_sub_field('body');
					?>
					<?php get_template_part( 'partials/_area-stitch-border' ); ?>
					<?php get_template_part( 'partials/_yellow-color-background' ); ?>
		      <div class="content">
						<?php get_template_part( 'partials/_cactus-flower' ); ?>
						<h2><?php echo $title;?></h2>
						<?php get_template_part( 'partials/_cactus-flower-2' ); ?>
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
						<div class="text-half c-width-50">
		        	<h2><?php echo $title;?></h2>
		        	<p><?php echo $body;?></p>
						</div>
						<?php get_template_part( 'partials/_flower-patch-new' ); ?>
						<?php get_template_part( 'partials/_flower-patch-new-2' ); ?>
						<div class="image-half c-width-100">
							<?php get_template_part( 'partials/_hotel-svg' ); ?>
						</div>

		      </div>
		    </section>
		  <?php endwhile; ?>
		<?php endif; ?>
		<?php if( have_rows('when_section') ): ?>
		  <?php while( have_rows('when_section') ): the_row();?>
		    <section class="when-section">
		      <div class="content">
							<?php get_template_part( 'partials/_lady-flower-single' ); ?>
							<h2><?php echo $title;?></h2>
							<?php get_template_part( 'partials/_lady-flower-single-2' ); ?>
		        <?php
		          $title = get_sub_field('title');
		          $body = get_sub_field('body');
		        ?>
		        <p><?php echo $body;?></p>
		      </div>
		    </section>
		  <?php endwhile; ?>
		<?php endif; ?>
		<?php if( have_rows('response_section') ): ?>
		  <?php while( have_rows('response_section') ): the_row();?>
		    <section class="response-section">
		      <div class="content">
						<?php get_template_part( 'partials/_cactus-only-patch' ); ?>
						<?php
		          $title = get_sub_field('title');
		          $body = get_sub_field('body');?>
		        <h2><?php echo $title;?></h2>
						<?php get_template_part( 'partials/_cactus-only-patch-2' ); ?>
						<p><?php echo $body;?></p>
		      </div>
		    </section>
		  <?php endwhile; ?>
		<?php endif; ?>
	<?php endwhile; ?>
	<?php get_template_part( 'partials/_tumbleweed-svg');?>
	<?php get_template_part( 'partials/_tumbleweed-two-svg');?>
	<?php get_template_part( 'partials/_tumbleweed-paths-svg');?>
</main>
<?php get_footer(); ?>

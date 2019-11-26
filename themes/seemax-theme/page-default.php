<?php /* Template Name: Default */ get_header(); ?>
<main class="default-page">
	<?php while (have_posts()) : the_post(); ?>
		<section class="main-section">
			<div class="content">
				<h1><?php the_title();?></h1>
				</svg>
			</div>
		</section>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>

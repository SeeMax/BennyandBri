<?php /* Template Name: Home */ get_header(); ?>
<main class="home-page">
	<?php get_template_part( 'partials/_filter-svg' ); ?>
	<?php while (have_posts()) : the_post(); ?>

		<?php if( have_rows('title_section') ): ?>
			<?php while( have_rows('title_section') ): the_row();?>
				<?php $body = get_sub_field('body');?>
				<div class="site-title">
					<!-- <?php get_template_part( 'partials/_site-title');?> -->
					<img src="<?php bloginfo('template_url'); ?>/img/site-title-1.svg">
				</div>
				<div class="site-title-subtext c-width-100">
					<?php echo $body;?>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
		<?php if( have_rows('hero_section') ): ?>
			<?php while( have_rows('hero_section') ): the_row();?>
				<section class="hero-section">
					<div class="content">
		        <?php
							$title = get_sub_field('title');
							$subtitle = get_sub_field('subtitle');
		        	$body = get_sub_field('body');
							$image = get_sub_field('image');
		    		?>
						<div class="image-half c-width-45 border-green">
							<?php get_template_part( 'partials/_area-stitch-border-full' ); ?>
							<img src="<?php echo $image[url];?>"/>
						</div>
						<div class="text-half c-width-45 border-green">
							<?php get_template_part( 'partials/_yellow-color-background' ); ?>
							<?php get_template_part( 'partials/_area-stitch-border-full' ); ?>
							<div class="hr-area"><hr /><hr /><hr /><hr /></div>
							<h3><?php echo $title;?></h3>
							<div class="hr-area"><hr /><hr /><hr /><hr /></div>
							<p><?php echo $body;?></p>
						</div>
					</div>
				</section>
			<?php endwhile; ?>
		<?php endif; ?>
		<?php if( have_rows('events_section') ): ?>
			<?php while( have_rows('events_section') ): the_row();?>
				<section class="events-section">
					<div class="content">
		        <?php $title = get_sub_field('title');?>
						<div class="headline-block">
							<div class="headline-patch c-width-20 m-hidden headline-patch-1">
								<?php get_template_part( 'partials/_flower-patch-new' ); ?>
								<!-- <img src="<?php bloginfo('template_url'); ?>/img/flower-patch-new.svg"> -->
							</div>
							<h2 class="c-width-50"><?php echo $title;?></h2>
							<div class="headline-patch c-width-20 m-hidden headline-patch-2">
								<!-- <?php get_template_part( 'partials/_flower-patch-new-2' ); ?> -->
								<img src="<?php bloginfo('template_url'); ?>/img/flower-patch-new-2.svg">
							</div>
						</div>
						<div class="hr-area m-visible"><hr /><hr /><hr /><hr /></div>
						<div class="events-container">
							<?php if( have_rows('events_list') ):
	    					while ( have_rows('events_list') ) : the_row();?>

	        				<div class="single-event c-width-48 border-green">
										<?php get_template_part( 'partials/_area-stitch-border-full' ); ?>
										<div class="event-icon">
											<div class="event-icon-stitch"></div>
											<i class="fal <?php the_sub_field('icon');?>"></i>
										</div>
										<h4><?php the_sub_field('title');?></h4>
										<div class="event-notes">
											<?php the_sub_field('notes');?>
										</div>
										<div class="hr-area"><hr /><hr /></div>
										<div class="event-times">
											<i class="fal fa-clock"></i><?php the_sub_field('times');?>
										</div>
										<div class="event-location">
											<i class="fal fa-map-marker-times"></i><?php the_sub_field('location');?>
										</div>
										<div class="hr-area"><hr /><hr /></div>
										<div class="event-description">
											<?php the_sub_field('description');?>
										</div>
									</div>
							  <?php endwhile;?>
							<?php endif;?>
						</div>
					</div>
				</section>
			<?php endwhile; ?>
		<?php endif; ?>

		<?php if( have_rows('getting_section') ): ?>
		  <?php while( have_rows('getting_section') ): the_row();?>
		    <section class="getting-there-section border-yellow">
					<?php
						$title = get_sub_field('title');
						$body = get_sub_field('body');
					?>
					<?php get_template_part( 'partials/_area-stitch-border' ); ?>
					<?php get_template_part( 'partials/_yellow-color-background' ); ?>
		      <div class="content">
						<div class="headline-block">
							<h2 class="c-width-100"><?php echo $title;?></h2>
							<div class="hr-area"><hr /><hr /><hr /><hr /></div>
						</div>
		        <?php if ($body):?>
							<p><?php echo $body;?></p>
						<?php endif;?>
						<div class="ways-patch c-width-22">
							<?php get_template_part( 'partials/_cactus-only-patch' ); ?>
						</div>
						<?php if( have_rows('arrival_location') ):?>
							<div class="ways-container c-width-56">
								<?php while ( have_rows('arrival_location') ) : the_row();?>
								<div class="single-way c-width-50">
									<div class="way-code">
										<div class="way-code-stitch"></div>
										<div class="way-code-stitch way-code-stitch-2"></div>
										<?php the_sub_field('code');?>
									</div>
									<h5 class="way-name"><?php the_sub_field('name');?></h5>
									<div class="hr-area hr-yellow"><hr /><hr /></div>
								  <div class="way-time">
										Approx. <?php the_sub_field('time');?><br />to Los Alamos
									</div>
									<div class="hr-area hr-yellow"><hr /><hr /></div>
								  <div class="way-link">
										<a href="<?php the_sub_field('link');?>" target="_blank">
											Map Directions
										</a>
									</div>
								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
					<div class="ways-patch ways-patch-2 c-width-22">
						<?php get_template_part( 'partials/_cactus-only-patch' ); ?>
					</div>
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
						<div class="headline-block">
							<h2 class="c-width-100"><?php echo $title;?></h2>
							<div class="hr-area"><hr /><hr /><hr /><hr /></div>
						</div>
	        	<div class="intro-container c-width-100">
							<div class="headline-patch c-width-35 headline-patch-1">
								<?php get_template_part( 'partials/_lady-flower-single' ); ?>
							</div>
							<p class="c-width-65"><?php echo $body;?></p>
						</div>
						<?php if( have_rows('staying_locations') ):?>
							<div class="locations-container c-width-100">
								<?php while ( have_rows('staying_locations') ) : the_row();?>
								<div class="single-location c-width-31 border-yellow">
									<?php get_template_part( 'partials/_yellow-color-background' ); ?>
									<?php get_template_part( 'partials/_area-stitch-border-full' ); ?>
									<?php if (get_sub_field('name')):?>
										<h5 class="location-name">
											<?php the_sub_field('name');?>
										</h5>
									<?php endif;?>
									<?php if (get_sub_field('address_1')):?>
										<div class="location-address">
											<?php the_sub_field('address_1');?>
											<br />
											<?php the_sub_field('address_2');?>
										</div>
									<?php endif;?>
									<?php if (get_sub_field('phone')):?>
								  	<div class="location-phone">
											<a href=tel:"<?php the_sub_field('phone');?>">
												<?php the_sub_field('phone');?>
											</a>
										</div>
									<?php endif;?>
									<?php if (get_sub_field('website')):?>
								  	<div class="location-website">
											<a href="<?php the_sub_field('website');?>" target="_blank">
												Website
											</a>
										</div>
									<?php endif;?>
								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
		      </div>
		    </section>
		  <?php endwhile; ?>
		<?php endif; ?>

		<?php if( have_rows('todo_section') ): ?>
		  <?php while( have_rows('todo_section') ): the_row();?>
		    <section class="todo-section">
		      <div class="content">
		        <?php
		          $title = get_sub_field('title');
		          $body = get_sub_field('body');
		        ?>
						<div class="headline-block">
							<h2 class="c-width-100"><?php echo $title;?></h2>
							<div class="hr-area"><hr /><hr /><hr /><hr /></div>
						</div>
						<div class="todos-container c-width-100">
							<div class="todo-subsection c-width-30">
								<?php if (get_sub_field('subtitle_1')):?>
									<h4 class="todo-name">
										<?php the_sub_field('subtitle_1');?>
									</h4>
								<?php endif;?>
								<?php if( have_rows('todo_list_1') ):?>
									<?php while ( have_rows('todo_list_1') ) : the_row();?>
										<div class="single-todo c-width-100">
											<div class="way-code">
												<div class="way-code-stitch"></div>
												<div class="way-code-stitch way-code-stitch-2"></div>
												<i class="fal fa-cactus"></i>
											</div>
											<?php if (get_sub_field('name')):?>
												<h5 class="todo-name">
													<?php the_sub_field('name');?>
												</h5>
											<?php endif;?>
											<?php if (get_sub_field('address_1')):?>
												<div class="todo-address">
													<?php the_sub_field('address_1');?>
													<br />
													<?php the_sub_field('address_2');?>
												</div>
											<?php endif;?>
											<?php if (get_sub_field('phone')):?>
										  	<div class="todo-phone">
													<a href=tel:"<?php the_sub_field('phone');?>">
														<?php the_sub_field('phone');?>
													</a>
												</div>
											<?php endif;?>
											<?php if (get_sub_field('website')):?>
										  	<div class="todo-website">
													<a href="<?php the_sub_field('website');?>" target="_blank">
														Website
													</a>
												</div>
											<?php endif;?>
										</div><!-- Single Todo End -->
									<?php endwhile; ?>
								<?php endif; ?>
							</div><!-- Todo SubSection End -->

							<div class="todo-subsection c-width-30">
								<?php if (get_sub_field('subtitle_2')):?>
									<h4 class="todo-name">
										<?php the_sub_field('subtitle_2');?>
									</h4>
								<?php endif;?>
								<?php if( have_rows('todo_list_2') ):?>
									<?php while ( have_rows('todo_list_2') ) : the_row();?>
										<div class="single-todo c-width-100">
											<div class="way-code">
												<div class="way-code-stitch"></div>
												<div class="way-code-stitch way-code-stitch-2"></div>
												<i class="fal fa-wine-glass-alt"></i>
											</div>
											<?php if (get_sub_field('name')):?>
												<h5 class="todo-name">
													<?php the_sub_field('name');?>
												</h5>
											<?php endif;?>
											<?php if (get_sub_field('address_1')):?>
												<div class="todo-address">
													<?php the_sub_field('address_1');?>
													<br />
													<?php the_sub_field('address_2');?>
												</div>
											<?php endif;?>
											<?php if (get_sub_field('phone')):?>
										  	<div class="todo-phone">
													<a href=tel:"<?php the_sub_field('phone');?>">
														<?php the_sub_field('phone');?>
													</a>
												</div>
											<?php endif;?>
											<?php if (get_sub_field('website')):?>
										  	<div class="todo-website">
													<a href="<?php the_sub_field('website');?>" target="_blank">
														Website
													</a>
												</div>
											<?php endif;?>
										</div><!-- Single Todo End -->
									<?php endwhile; ?>
								<?php endif; ?>
							</div><!-- Todo SubSection End -->

							<div class="todo-subsection c-width-30">
								<?php if (get_sub_field('subtitle_3')):?>
									<h4 class="todo-name">
										<?php the_sub_field('subtitle_3');?>
									</h4>
								<?php endif;?>
								<?php if( have_rows('todo_list_3') ):?>
									<?php while ( have_rows('todo_list_3') ) : the_row();?>
										<div class="single-todo c-width-100">
											<div class="way-code">
												<div class="way-code-stitch"></div>
												<div class="way-code-stitch way-code-stitch-2"></div>
												<i class="fal fa-skull-cow"></i>
											</div>
											<?php if (get_sub_field('name')):?>
												<h5 class="todo-name">
													<?php the_sub_field('name');?>
												</h5>
											<?php endif;?>
											<?php if (get_sub_field('address_1')):?>
												<div class="todo-address">
													<?php the_sub_field('address_1');?>
													<br />
													<?php the_sub_field('address_2');?>
												</div>
											<?php endif;?>
											<?php if (get_sub_field('phone')):?>
										  	<div class="todo-phone">
													<a href=tel:"<?php the_sub_field('phone');?>">
														<?php the_sub_field('phone');?>
													</a>
												</div>
											<?php endif;?>
											<?php if (get_sub_field('website')):?>
										  	<div class="todo-website">
													<a href="<?php the_sub_field('website');?>" target="_blank">
														Website
													</a>
												</div>
											<?php endif;?>
										</div><!-- Single Todo End -->
									<?php endwhile; ?>
								<?php endif; ?>
							</div><!-- Todo SubSection End -->
						</div>
		      </div>
		    </section>
		  <?php endwhile; ?>
		<?php endif; ?>

		<?php if( have_rows('eating_section') ): ?>
		  <?php while( have_rows('eating_section') ): the_row();?>
		    <section class="eating-section">
		      <div class="content">
		        <?php
		          $title = get_sub_field('title');
		          $body = get_sub_field('body');
		        ?>
						<div class="headline-block">
							<h2 class="c-width-100"><?php echo $title;?></h2>
						</div>
						<div class="hr-area m-visible"><hr /><hr /><hr /><hr /></div>
						<div class="headline-patch m-hidden c-width-35 headline-patch-2">
							<?php get_template_part( 'partials/_cactus-flower-2' ); ?>
							<?php get_template_part( 'partials/_cactus-flower' ); ?>
						</div>
						<?php if( have_rows('eating_locations') ):?>
							<div class="eating-container c-width-65">
								<?php while ( have_rows('eating_locations') ) : the_row();?>
								<div class="single-eating c-width-48 border-green">
									<?php get_template_part( 'partials/_area-stitch-border-full' ); ?>
									<?php if (get_sub_field('name')):?>
										<h5 class="eating-name">
											<?php the_sub_field('name');?>
										</h5>
									<?php endif;?>
									<?php if (get_sub_field('address_1')):?>
										<div class="eating-address">
											<?php the_sub_field('address_1');?>
											<br />
											<?php the_sub_field('address_2');?>
										</div>
									<?php endif;?>
									<?php if (get_sub_field('description')):?>
										<div class="hr-area hr-yellow"><hr /><hr /></div>
								  	<div class="eating-description">
											<?php the_sub_field('description');?>
										</div>
									<?php endif;?>
									<div class="hr-area hr-yellow"><hr /><hr /></div>
									<?php if (get_sub_field('phone')):?>
								  	<div class="eating-phone">
											<a href=tel:"<?php the_sub_field('phone');?>">
												<?php the_sub_field('phone');?>
											</a>
										</div>
									<?php endif;?>
									<?php if (get_sub_field('website')):?>
								  	<div class="eating-website">
											<a href="<?php the_sub_field('website');?>" target="_blank">
												Website
											</a>
										</div>
									<?php endif;?>
								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
		      </div>
		    </section>
		  <?php endwhile; ?>
		<?php endif; ?>

		<?php if( have_rows('registry_section') ): ?>
		  <?php while( have_rows('registry_section') ): the_row();?>
		    <section class="registry-section border-yellow">
					<?php get_template_part( 'partials/_area-stitch-border' ); ?>
					<?php get_template_part( 'partials/_yellow-color-background' ); ?>
		      <div class="content">
		        <?php
		          $title = get_sub_field('title');
		          $body = get_sub_field('body');
							$linkText = get_sub_field('link_text');
							$link = get_sub_field('link');
		        ?>
						<div class="headline-block">
							<h2 class="c-width-100"><?php echo $title;?></h2>
						</div>
						<div class="hr-area"><hr /><hr /><hr /><hr /></div>
		        <p><?php echo $body;?></p>
						<div class="button border-red">
							<?php get_template_part( 'partials/_area-stitch-border-full' ); ?>
							<a class="c-block-fill" href="<?php echo $link;?>"></a>
							<?php echo $linkText;?>
						</div>
		      </div>
		    </section>
		  <?php endwhile; ?>
		<?php endif; ?>


		<?php if( have_rows('rsvp_section') ): ?>
		  <?php while( have_rows('rsvp_section') ): the_row();?>
		    <section class="rsvp-section">
		      <div class="content">
						<?php
	          	$title = get_sub_field('title');
	          	$body = get_sub_field('body');
						?>
						<div class="headline-block">
							<h2 class="c-width-100"><?php echo $title;?></h2>
							<div class="hr-area"><hr /><hr /><hr /><hr /></div>
						</div>
		        <p class="body-block"><?php echo $body;?></p>
						<div class="form-container c-width-100 border-green">
							<?php get_template_part( 'partials/_area-stitch-border' ); ?>
							<?php echo do_shortcode('[contact-form-7 id="158" title="rsvp"]');?>
						</div>
		      </div>
		    </section>
		  <?php endwhile; ?>
		<?php endif; ?>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>

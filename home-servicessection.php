<section id="homeservices">
	<div class="container">
	<div class="row">	
		<h2>Services</h2>

		<?php 
			$args = array(
					'post_type' => 'service',
					'post_status' => 'publish',
					'posts_per_page' => -1,
					'orderby' => 'date',
					'order' => 'ASC',
				);
			$posts = get_posts($args);
		?>

		<div class="ftblocks">
		<?php foreach ($posts as $p) : ?>

			<?php if( have_rows('openhtml',$p->ID) ): ?>
			<?php $sections = get_field('openhtml',$p->ID); ?>
				<?php foreach ($sections as $key => $section) : ?>
					<?php if ($section['acf_fc_layout'] == 'main_content') : ?>
					<div class="col-md-2 col-xs-6 servicemarg">
					<div class="ttable">
						<div class="tcell col-md-12 col-xs-12">
							<?php $image = $section['add_icon']; ?>
							<?php $size_url = $image['sizes']['large']; ?>
							<?php if( $image ) : ?>
								<div class="fticon" style="background-image: url('<?php echo $size_url; ?>');"></div>
							<?php endif; ?>
							<?php $maintitle = $section['main_title']; ?>
							<?php if( $maintitle ) : ?>
								<h5><?php echo $maintitle; ?></h5>
							<?php endif; ?>
							<?php $maintext = $section['main_text']; ?>
							<?php if( $maintext ) : ?>
								<?php echo wpautop(excerpt(35,$maintext, $maintext)); ?>
							<?php endif; ?>
						</div>
						<div class="tcell celldown col-md-12 col-xs-12">
							<?php 
							$slink = $section['slink'];
							if( $slink ): ?>
								<a href="<?php echo $slink['url']; ?>">
									<?php echo $slink['title']; ?>
								</a>			
							<?php endif; ?>
						</div>
					</div>
					</div>
					<?php endif; ?>

					<?php if ($section['acf_fc_layout'] == 'main_img_content') : ?>
					<div class="col-md-2 col-xs-6 servicemarg">
					<div class="ttable">
						<div class="tcell col-md-12 col-xs-12">
							<?php $image = $section['add_icon']; ?>
							<?php $size_url = $image['sizes']['large']; ?>
							<?php if( $image ) : ?>
								<div class="fticon" style="background-image: url('<?php echo $size_url; ?>');"></div>
							<?php endif; ?>
							<?php $maintitle = $section['main_title']; ?>
							<?php if( $maintitle ) : ?>
								<h5><?php echo $maintitle; ?></h5>
							<?php endif; ?>
							<?php $maintext = $section['main_text']; ?>
							<?php if( $maintext ) : ?>
								<?php echo wpautop(excerpt(35,$maintext, $maintext)); ?>
							<?php endif; ?>
						</div>
						<div class="tcell celldown col-md-12 col-xs-12">
							<?php 
							$slink = $section['slink'];
							if( $slink ): ?>
								<a href="<?php echo $slink['url']; ?>">
									<?php echo $slink['title']; ?>
								</a>			
							<?php endif; ?>
						</div>
					</div>
					</div>
					<?php endif; ?>

				<?php endforeach; ?>
			</pre>
			<?php endif; ?>

		<?php endforeach; ?>
		</div>
	</div>
	</div>
</section>
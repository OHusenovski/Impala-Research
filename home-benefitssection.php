<section id="benefits">
	<div class="container">
	<div class="row">	
		<h2>How you Benefit?</h2>
		
		<?php 
			$args = array(
					'post_type' => 'benefit',
					'post_status' => 'publish',
					'orderby' => 'date',
					'order' => 'DESC',
				);
			$benefits = get_posts($args);
		?>

		<div class="ftblocks">
		<?php foreach ($benefits as $b) : ?>
			<div class="col-md-4">
				<?php $image = get_field('bicon',$b->ID); ?>
				<?php $size_url = $image['sizes']['large']; ?>
				<?php if( $image ) : ?>
					<div class="fticon" style="background-image: url('<?php echo $size_url; ?>');"></div>
				<?php endif; ?>
				<h5><?php echo get_post($b->ID)->post_title; ?></h5>
				<?php
					$post_object = get_post($b->ID);									
					$post_content = $post_object->post_content;									
				?>
				<?php echo wpautop($post_content); ?>
			</div>
		<?php endforeach; ?>
		</div>
	</div>
	</div>
</section>
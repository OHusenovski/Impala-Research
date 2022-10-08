<section id="howsection">
	<div class="container beigeline">
	<div class="row">
		<div class="col-md-6 leftsec">
			<?php $addtitle = get_opt('how_title'); ?>
			<?php if( $addtitle ) : ?>
				<h2><?php echo $addtitle; ?></h2>
			<?php endif; ?>
			<?php $howtext = get_opt('how_text'); ?>
			<?php if( $howtext ) : ?>
				<?php echo wpautop($howtext); ?>
			<?php endif; ?>
			<?php 
			$link = get_opt('how_link');
			if( $link ): ?>
			<div class="linkmarg">
				<a href="<?php echo $link['url']; ?>">
					<?php echo $link['title']; ?>
				</a>		
			</div>				
			<?php endif; ?>
		</div>
		<div class="col-md-6 rightsec">
			<?php $image = get_opt('how_image'); ?>
			<?php $size_url = $image['sizes']['large']; ?>
			<?php if( $image ) : ?>
				<div class="howpic" style="background-image: url('<?php echo $size_url; ?>');"></div>
			<?php endif; ?>
		</div>
	</div>
	</div>
</section>
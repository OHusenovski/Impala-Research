<section id="whysection">
	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="mediumblock">
				<?php $addtitle = get_opt('why_title'); ?>
				<?php if( $addtitle ) : ?>
					<h2><?php echo $addtitle; ?></h2>
				<?php endif; ?>
				<?php $whytext = get_opt('why_text'); ?>
				<?php if( $whytext ) : ?>
					<?php echo wpautop($whytext); ?>
				<?php endif; ?>
			</div>
			<?php $image = get_opt('add_image'); ?>
			<?php $size_url = $image['sizes']['large']; ?>
			<?php if( $image ) : ?>
				<div class="whypic" style="background-image: url('<?php echo $size_url; ?>');"></div>
			<?php endif; ?>
		</div>
		<div class="col-md-6 messagesec leftsec">
			<?php $leftmessage = get_opt('left_message'); ?>
			<?php if( $leftmessage ) : ?>
				<?php echo wpautop($leftmessage); ?>
			<?php endif; ?>
			<?php 
			$link = get_opt('left_link');
			if( $link ): ?>
			<div class="linkmarg">
				<a href="<?php echo $link['url']; ?>">
					<?php echo $link['title']; ?>
				</a>		
			</div>				
			<?php endif; ?>
		</div>
		<div class="col-md-6 rightsec mobilemarg">
			<?php $righttext = get_opt('right_text'); ?>
			<?php if( $righttext ) : ?>
				<?php echo wpautop($righttext); ?>
			<?php endif; ?>
		</div>
	</div>
	</div>
</section>
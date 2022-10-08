<section id="upsection">
	<div class="ttable">
		<div class="tcell">
			<?php $maintitle = get_opt('main_title'); ?>
			<?php if( $maintitle ) : ?>
				<h2><?php echo $maintitle; ?></h2>
			<?php endif; ?>
			<?php $addtext = get_opt('add_text'); ?>
			<?php if( $addtext ) : ?>
				<?php echo wpautop($addtext); ?>
			<?php endif; ?>
			<?php 
			$link = get_opt('uplink');
			if( $link ): ?>
			<div class="linkmarg">
				<a href="<?php echo $link['url']; ?>">
					<?php echo $link['title']; ?>
				</a>		
			</div>				
			<?php endif; ?>
		</div>
	</div>
</section>
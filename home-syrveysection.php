<section id="surveys">
	<div class="container">
	<div class="row">
		<h2>Our surveys are used by:</h2>
		<?php $rows = get_opt('surveys_items'); ?>
		<?php if ($rows) : ?>
		<div class="ftblocks">
			<?php foreach ($rows as $row) : ?>
				<div class="col-md-2 col-xs-12 surveymarg">
					<?php $image = $row['survey_image']; ?>
					<?php $size_url = $image['sizes']['large']; ?>
				   	<div class="srvicon" style="background-image: url('<?php echo $size_url; ?>');"></div>
				</div>
			<?php endforeach; ?>
		</div>
		<?php endif; ?>
	</div>
	</div>
</section>
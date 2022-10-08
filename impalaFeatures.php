<?php
/*
 *	Template Name: 03 - Features - Template
 */ 
?>

<?php
// File Security Check
if ( ! function_exists( 'wp' ) && ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
	die ( 'You do not have sufficient permissions to access this page!' );
}

get_header(); // Loads the header.php template. 

dev_comment('tpl: 03-features-template');

?>

<?php 

	$args = array(
		'banner_classes' => '',
		'title' => ''
		);

	wdb_get_banner( $args ); // Located in _wdbar/functions.php

?>

<div id="features-content">
<div class="uppersec">
	<div class="ttable">
		<div class="tcell">
			<div class="col-md-12">
				<?php $maintitle = get_field('main_title'); ?>
				<?php if( $maintitle ) : ?>
					<h2><?php echo $maintitle; ?></h2>
				<?php endif; ?>
			</div>
			<div class="col-md-6 col-xs-12 leftsec">
				<?php $lefttext = get_field('left_text'); ?>
				<?php if( $lefttext ) : ?>
					<?php echo wpautop($lefttext); ?>
				<?php endif; ?>
			</div>
			<div class="col-md-6 col-xs-12 messagesec rightsec">
				<?php $message = get_field('add_message'); ?>
				<?php if( $message ) : ?>
					<?php echo wpautop($message); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<div class="lowersec">
	<div class="container">
		<?php $rows = get_field('features_items'); ?>
		<?php if ($rows) : ?>
		<div class="ftblocks">
			<?php foreach ($rows as $row) : ?>
				<div class="col-md-6">
					<?php $image = $row['add_icon']; ?>
					<?php $size_url = $image['sizes']['large']; ?>
				   	<div class="fticon" style="background-image: url('<?php echo $size_url; ?>');"></div>
				   	<?php $title = $row['add_title']; ?>
				   	<?php if( $title ) : ?>
				   		<h4><?php echo $title; ?></h4>
				   	<?php endif; ?>
				   	<?php $text = $row['add_text']; ?>
					<?php if( $text ) : ?>
						<?php echo wpautop($text); ?>
					<?php endif; ?>
				</div>
			<?php endforeach; ?>
		</div>
		<?php endif; ?>
	</div>
</div>				

</div><!-- #features-content -->

<?php include_locate( 'template-parts/features-footer.php' ); ?>
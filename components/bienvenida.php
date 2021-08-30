<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-12 pt-4">
					<div class="p-3 m-4">
						<div class="display-4  text-white text-uppercase">BIENVENIDOS A <br><?php echo get_option( 'blogname' ); ?>
						</div>
						<div class="fw-bold display-6 py-2 text-info">

													
<?php 
$bloginfo=get_bloginfo('description'); 
echo $bloginfo 
?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
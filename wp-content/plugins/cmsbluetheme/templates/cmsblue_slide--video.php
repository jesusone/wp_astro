<?php 
global $slide;

?>
<div id="main-carousel" class="carousel slide" data-ride="carousel">
	<div class="video-bg">
		<video autoplay="" loop="" muted="">
			<source src="<?php echo $slide['videourl']?>" type="video/webm">
		</video>
	</div>			
	<ol class="carousel-indicators">
		<?php for($i = 1; $i <= $slide['image_number']; $i++ ): ?>
		<li data-target="#main-carousel" data-slide-to="<?php echo ($i-1); ?>" <?php echo ($i==1) ? 'class="active"' : ''; ?>></li>
		<?php endfor; ?>
	</ol>
	<div class="carousel-inner">
	    <?php 
	    for($i = 1; $i <= $slide['image_number']; $i++ ):
	     ?>
			<div  class="item <?php echo $slide['ex_class']?> <?php echo ($i==1)?'active':'';?>" style="height: 641px;">
				<div class="overlay">
					<div class="slider-caption text-center container">
						<h1><?php echo $slide['title_slide'.$i];?></h1>
						<p><?php echo $slide['description'.$i];?></p>
						<a href="<?php echo $slide['url_button'.$i]?>" class="btn btn-default"><?php echo $slide['text_button'.$i]?></a>
					</div>
				</div> 
			</div>	
	     <?php endfor; ?>
	
	</div>	
</div>

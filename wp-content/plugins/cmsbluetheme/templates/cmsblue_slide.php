<?php 
global $slide;
 
 if($slide['style']=='style3' && $slide['imagecontent']){
	$image_content = wp_get_attachment_image_src($slide['imagecontent'], 'full'); 
 }
?>
<div id="main-carousel" class="carousel slide" data-ride="carousel" <?php if($slide['style']=='style3' && $slide['imagecontent']) {?> style="background-image:url('<?php echo $image_content[0];?>') <?php } ?> ">
	<ol class="carousel-indicators">
	 <?php for($i = 1; $i <= $slide['image_number']; $i++ ): ?>
		<li data-target="#main-carousel" data-slide-to="<?php echo ($i-1); ?>" <?php echo ($i==1) ? 'class="active"' : ''; ?>></li>
		<?php endfor; ?>
	</ol>
	<div class="carousel-inner">
	    <?php 
	    for($i = 1; $i <= $slide['image_number']; $i++ ):
	     ?>
		 <?php if(!isset($slide['image'.$i])): 
			 $image_attributes = get_template_directory_uri().'/images/features.png';
			 else: ?>
			 <?php $image_attributes = wp_get_attachment_image_src($slide['image'.$i], 'full'); 
			 ?>
		 <?php endif; 
		 ?>
			<div  class="item <?php echo $slide['ex_class']?> <?php echo ($i==1)?'active':'';?>" <?php if($slide['style']== 'style1') { ?> style="background-image:url('<?php  echo $image_attributes[0];?>') ;  height: 641px;"<?php }?>>
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
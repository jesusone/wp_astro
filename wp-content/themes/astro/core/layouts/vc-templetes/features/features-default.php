<?php
global $features_option;
?>
<div id="features" class="<?php echo $features_option['custom_class']!=''?$features_option['custom_class']:'';?>">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
	    			<div class="featured-tab clearfix">
						<ul class="nav nav-tabs nav-stacked col-sm-4">
                        <?php for($i==1;$i<=6;$i++){?>
                        <?php if($features_option['title_'.$i]!=''):?>
						  	<li class="<?php echo $i==1?'active':'';?>">
						  		<a href="#feature<?php echo $i;?>" data-toggle="tab">
						  			<span class="feature-icon pull-left"><i class="<?php echo $features_option['icon_'.$i];?>"></i></span>
						  			<div class="feature-content">
							  			<h3><?php echo $features_option['title_'.$i];?></h3>
							  			<?php echo $features_option['show_title_small']?'<p>'.$features_option['title_small_'.$i].'</p>':'';?>
						  			</div>
						  		</a>
						  	</li>
                        <?php endif;?>
						<?php }?>	
						</ul>
						<div class="tab-content col-sm-8">
                        <?php for($j==1;$j<=6;$j++){?>
                        <?php if($features_option['title_'.$j]!=''):?>
                            <?php if (!isset($features_option['image_'.$j])): ?>
            					<?php $image_attributes = get_template_directory_uri().'/images/features.png'?>
            				<?php else: ?>
            					<?php $image_attributes = wp_get_attachment_image_src($features_option['image_'.$j], 'full'); 
            						  $image=$image_attributes[0];
            					?>
            				<?php endif; ?>
                         
					        <div id="feature<?php echo $j;?>" class="tab-pane <?php echo $j==1?'active':'';?> animated zoomIn">	
								<div class="tab-image pull-left">
									<img class="img-responsive" src="<?php echo $image ?>" alt="">
								</div>					            
					            <h3><?php echo $features_option['detail_title_'.$j];?></h3>
                                <?php echo $features_option['show_detail_title_small']?'<h4>'.$features_option['detail_title_small_'.$j].'</h4>':'';?>
                                <?php echo $features_option['show_detail_content']?'<p>'.$features_option['detail_content_'.$j].'</p>':'';?>
					            <?php if($features_option['show_readmore']): ?>
								<a href="<?php echo $features_option['readmore_link_'.$j]!=''?$features_option['readmore_link_'.$j]:'#';?>"><?php echo $features_option['readmore_text']!=''?$features_option['readmore_text']:'Read More';?> <i class="fa fa fa-long-arrow-right"></i></a>
                                <?php endif; ?>
					        </div>
                        <?php endif;?>
						<?php }?>
					        
						</div>
	    			</div>
    			</div>
    		</div>
    	</div>
    </div> <!-- Features end -->
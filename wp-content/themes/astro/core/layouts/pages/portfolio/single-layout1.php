 <?php
 
global $smof_data,$post;
?>
<div id="details-portfolio" class="container">
    <div class="row">
      <div class="col-sm-6">
         <?php
        if (has_post_thumbnail()){
            the_post_thumbnail('full',array('class'=>'img-responsive','alt'=>'Portfolio details'));
        }
        ?>
       <!-- <img class="" src="images/portfolio/portfolio-details.jpg" alt="" />  -->
      </div>
      <div class="col-sm-6">        
        <a class="item-close" href="javascript:void(0)"><i class="fa fa-times pull-right"></i></a>
        <div class="details-info">
          <h3><?php the_title(); ?></h3>
          <p><?php echo do_shortcode(get_the_content());?></p>
          <ul>
            
            <li>Project: <?php echo  get_post_meta(get_the_ID(), 'pr_port_heading', true)?> </li>
            <li>Clients: <?php echo get_post_meta(get_the_ID(), 'pr_port_client', true)?> </li>
            <li>Topic: <?php  echo get_post_meta(get_the_ID(), 'pr_port_topic', true)?> </li>
          </ul>        
          <a href="#" class="btn btn-default" >View Live</a>
        </div>        
      </div>
    </div>
  </div>

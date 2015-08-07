<?php
/**
 * @package 
 */
?>
<?php global $smof_data,$post; ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="pr-blog">
		<header class="pr-blog-header">
			<div class="pr-blog-meta pr-itemBlog-meta">
				<?php echo pr_title_render(); ?>
				<?php echo pr_info_bar_render(); ?>
			</div>
			<?php
			$audio_type = get_post_meta($post->ID, 'cs_post_audio_type', true);
                        if(empty($audio_type)) $audio_type = 'content';
			$audio_url = get_post_meta($post->ID, 'cs_post_audio_url', true);
			if($audio_type){
				?>
				<div class="pr-blog-media">
				<?php
				if ($audio_type == 'content'){
					$shortcode = pr_get_shortcode_from_content('audio');
					if($shortcode):
						echo do_shortcode($shortcode);
					endif;
				} elseif ($audio_type == 'ogg' || $audio_type == 'mp3' || $audio_type == 'wav'){
					if($audio_url){
						echo do_shortcode('[audio '.$audio_type.'="'.$audio_url.'"][/audio]');
					}
				}
				?>
				</div>
				<?php
			}
			?>
		</header><!-- .entry-header -->
		<div class="pr-blog-content">
			<?php pr_content_render(); ?>
		</div><!-- .entry-content -->
	</div>
</article><!-- #post-## -->

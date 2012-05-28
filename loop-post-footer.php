<footer class="post-footer">

	<?php echo get_template_part('loop', 'post-pagination'); ?>
	
	<div class="post-taxonomy">
	
		<div class="post-category">
			<?php _e('Artículo publicado en ', BootKick::$textDomain); ?> <?php the_category(', '); ?>
		</div>
		
		<div class="post-tag">
			<?php the_tags(__('Tags: ', BootKick::$textDomain), ', ', ''); ?>
		</div>
	
	</div>
	
	<?php if ( $user_ID ) : ?><span><?php edit_post_link(); ?></span><?php endif; ?>

</footer>
<?php /* Template Name: CustomPage */ ?>

<?php if( have_rows('gallery-group') ): ?>
<?php while ( have_rows('gallery-group') ) : the_row(); ?>
<div class="gallery-design">
	<div class="container">
		<h2><?php the_sub_field('heading');?></h2>
		<div class="cards-row">
			<?php if( have_rows('gallery') ): ?>
			<?php while ( have_rows('gallery') ) : the_row(); ?>
			<div class="cards-item">
			 <img src="<?php the_sub_field('item-image'); ?>" alt="">
			 <h3><?php the_sub_field('item-title');?></h3>
			 <p><?php the_sub_field('description');?></p>
			 <a href="<?php the_sub_field('button-url');?>"><?php the_sub_field('button-item');?></a>
			 </div>
			<?php 
			wp_reset_postdata();
			endwhile; ?>
			<?php else : ?> 
			<?php endif; ?>
		</div>
	</div>
</div>
<?php 
wp_reset_postdata();
endwhile; ?>
<?php else : ?> 
<?php endif; ?>
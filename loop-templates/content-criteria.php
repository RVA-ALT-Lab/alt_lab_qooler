<?php
/**
 * criteria list content partial template.
 *
 * @package understrap
 */

;?>

 <?php if( get_field('criteria_list') ): ?>
    <?php while( the_repeater_field('criteria_list') ): ?>
      <div class="criteria-row">
		<div class="criteria-number ugly">
			<?php echo get_row_index();?>
		</div>
		<div class="criteria-text">
			<h4><?php the_sub_field('criteria_list_title');?></h4>
			<?php the_sub_field('criteria_list_text');?>
		</div>
	</div>

    <?php endwhile; ?>
 <?php endif;
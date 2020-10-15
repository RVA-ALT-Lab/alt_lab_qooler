<?php
/**
 * Timeline content partial template.
 *
 * @package understrap
 */

;?>

 <?php if( get_field('timeline') ): ?>
    <?php while( the_repeater_field('timeline') ): ?>
    	<?php 
    	if(get_row_index()>1){
    		$connector = '<div class="rainbow-connection c-box"></div>';
    	} else {
    		$connector = '';
    	};
    	$ugly = 'plain';
    	if(get_row_index()== 4){
    		$ugly = 'ugly';
    	}

    	?>
      <?php echo $connector;?>
      <div class="c-box connect">
				<div class="date-box <?php echo $ugly;?> ">
					<?php the_sub_field('timeline_text')?>
					<div class="time">
						<?php the_sub_field('timeline_date')?>
					</div>
				</div>
			</div>
    <?php endwhile; ?>
 <?php endif;
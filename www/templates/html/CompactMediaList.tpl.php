<h6><?php echo count($context->items);?> total items</h6>
<h5 class="subhead">Latest Media</h5>
<ul>
	<?php 
		$i = 0;
		foreach ($context->items as $media){
		echo '<li>
				<a href="'.UNL_MediaYak_Controller::getURL($media).'">
					<img src="'.UNL_MediaYak_Controller::$thumbnail_generator.(urlencode($media->url)).'" alt="'. $media->title .'" />
			 		<span>'. $media->title .'</span>
				</a>
			</li>';
		if (++$i == 2) break; 
	}
	?>
</ul>
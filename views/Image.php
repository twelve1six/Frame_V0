<div class="image">
				<ul>
					IMAGE
				</ul><?php
					 	$b64image = base64_encode($fcode);
					 	$type = 'image/jpeg';
					
					 	echo '<img src="data:' . $type . ';base64,' . $b64image . '" width = "500" />';
					 ?>
				</div>
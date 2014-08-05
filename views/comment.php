<div class="comment">
				<ul>
					COMMENT
				</ul>
				<form action="http://192.168.0.20:8087/index.php/sample" method="POST">
					<textarea rows="7" cols="67" align="right" name="comment"><?php
						echo $comment;
					?>
					</textarea>
					<br />
					<input type="submit" value="save" right="100px"/>
				</form>

			</div>
						
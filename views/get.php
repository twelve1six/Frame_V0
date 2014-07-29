<article>
	<h1><?=htmlspecialchars($topic->title)?></h1>
	<div>
		<?=$topic->description?>
	</div>
</article>

<!-- 위의 예제에서 <?=$topic->title?> 은 <?=htmlspecialchars($topic->title)?>
	으로 처리해야 한다.  -->
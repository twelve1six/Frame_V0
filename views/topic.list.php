<ul>
<?php
foreach($topics as $entry){
?>
    <li><a href="/index.php/topic/get/<?=$entry->id?>"><?=$entry->title?></a></li>
<?php
}
?>
</ul>

<!-- 위의 예제에서 <?=$topic->title?> 은 <?=htmlspecialchars($topic->title)?>
	으로 처리해야 한다.  -->
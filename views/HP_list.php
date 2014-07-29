<ul>
<?php
foreach($HReports as $entry){
?>
    <li><a href="/index.php/topic/get/<?=$entry->id?>"><?=$entry->title?></a></li>
<?php
}
?>
</ul>


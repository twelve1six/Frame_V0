<ul>
<?php
foreach($reports as $entry){
?>
    <li><a href="/index.php/HReports/get/<?=$entry->id?>"><?=$entry->title?></a></li>
<?php
}
?>
</ul>


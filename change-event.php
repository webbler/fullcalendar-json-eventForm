<!DOCTYPE HTML>
<html>  
<body>

<label>Change an Event</label>
<form action="change-info.php" method="post">
Title <select name="change-title" style="width: 175px;">
    <?php 
$url = 'json/events.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$events = json_decode($data); // decode the JSON feed
?>
	<?php foreach($events as $event): ?>
        <option value="<?php echo $event->title; ?>"><?= $event->title; ?></option>
    <?php endforeach; ?>
</select>
<input type="submit">
</form>

</body>
</html>
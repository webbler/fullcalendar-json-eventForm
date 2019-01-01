<?php
$url = 'json/events.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$events = json_decode($data); // decode the JSON feed

foreach ($events as $event) {
	echo $event->title . '<br>';
	echo $event->description . '<br>';
	echo $event->start . '<br>';
	echo $event->end . '<br>';
	echo '<br>';
}
?>
<?php
$jsonString = file_get_contents('json/events.json');
$data = json_decode($jsonString, true);

foreach ($data as $key => $entry) {
    if ($entry['title'] == $_POST['del-title']) {
	unset($data[$key]);
	echo "Event has been deleted!"  . '<br>';
	echo '<a href="index.html">Click here to view the calendar.</a>';
    }
}

$newJsonString = json_encode($data);
file_put_contents('json/event-demo.json', $newJsonString);
?>
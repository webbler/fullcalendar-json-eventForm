<?php
$jsonString = file_get_contents('json/events.json');
$data = json_decode($jsonString, true);

foreach ($data as $key => $entry) {
    if ($entry['title'] == $_POST['title']) {
		$data[$key]['title'] = $_POST['title-change'];
		$data[$key]['description'] = $_POST['description'];
        $data[$key]['start'] = $_POST['start-date'] . $_POST['start-time'];
		$data[$key]['end'] = $_POST['end-date'] . $_POST['end-time'];
		$data[$key]['color'] = $_POST['color'];
		
		$event = $_POST['title-change'];
		echo "Event ${event} has been updated!" . '<br>';
		echo '<a href="index.html">Click here to view the calendar.</a>';
    }
}

$newJsonString = json_encode($data);
file_put_contents('json/events.json', $newJsonString);
?>
<?php
$jsonString = file_get_contents('json/events.json');
$data = json_decode($jsonString, true);

$extra = array(
'title' => trim($_POST['add-title']),
'description' => $_POST['add-description'],
'start' => $_POST['add-start-date'] . $_POST['add-start-time'],
'end' => $_POST['add-end-date'] . $_POST['add-end-time'],
'color' => $_POST['add-color'],
);

$event = $_POST['add-title'];
echo "Event ${event} has been added!" . '<br>';
echo '<a href="index.html">Click here to view the calendar.</a>';

$data[] = $extra;

$newJsonString = json_encode($data);
file_put_contents('json/events.json', $newJsonString);
?>
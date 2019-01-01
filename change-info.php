<?php
$jsonString = file_get_contents('json/events.json');
$data = json_decode($jsonString, true);

foreach ($data as $key => $entry) {
    if ($entry['title'] == $_POST['change-title']) {
		$title = $data[$key]['title'];
		$description = $data[$key]['description'];
		
		$start = $data[$key]['start'];
		$parts = str_split($start, 10);
		$startDate = $parts[0];
			if ( ! isset($parts[1])) {
			   $parts[1] = null;
			}
		$startTime = $parts[1];
		$end = $data[$key]['end'];
		$parts1 = str_split($end, 10);	
		$endDate = $parts1[0];
			if ( ! isset($parts1[1])) {
			   $parts1[1] = null;
			}
		$endTime = $parts1[1];
		$color = $data[$key]['color'];
		break;
    }

}
unset($key); 
?>
<form action="change.php" method="post">
Changing Event <input readonly type="text" name="title" value="<?php echo ($title);?>"><br>
<p>Change the meeting info below:</p>
<p>Note: Modify only the meeting information you want changed. Leave the rest of the fields as is.</p>
Title <input type="text" name="title-change" value="<?php echo ($title);?>"><br>
Description <input type="text" name="description" required value="<?php echo ($description);?>"><br>
Start Date <input type="text" name="start-date" required value="<?php echo ($startDate);?>"><br>
End Date <input type="text" name="end-date" required value="<?php echo ($endDate);?>"><br>
Start Time <select name="start-time"><br>
  <option <?php if ('""'===($startTime)) echo ' selected="selected"'?> value="">All Day Event</option>
  <option <?php if ('T7:00'===($startTime)) echo ' selected="selected"'?> value="T7:00">7:00 AM</option>
  <option <?php if ('T7:30'===($startTime)) echo ' selected="selected"'?> value="T7:30">7:30 AM</option>
  <option <?php if ('T8:00'===($startTime)) echo ' selected="selected"'?> value="T8:00">8:00 AM</option>
    <option <?php if ('T8:30'===($startTime)) echo ' selected="selected"'?> value="T8:30">8:30 AM</option>
    <option <?php if ('T9:00'===($startTime)) echo ' selected="selected"'?> value="T9:00">9:00 AM</option>
  <option <?php if ('T9:30'===($startTime)) echo ' selected="selected"'?> value="T9:30">9:30 AM</option>
  <option <?php if ('T10:00'===($startTime)) echo ' selected="selected"'?> value="T10:00">10:00 AM</option>
    <option <?php if ('T10:30'===($startTime)) echo ' selected="selected"'?> value="T10:30">10:30 AM</option>
  <option <?php if ('T11:00'===($startTime)) echo ' selected="selected"'?> value="T11:00">11:00 AM</option>
  <option <?php if ('T11:30'===($startTime)) echo ' selected="selected"'?> value="T11:30">11:30 AM</option>
    <option <?php if ('T12:00'===($startTime)) echo ' selected="selected"'?> value="T12:00">12:00 PM</option>
  <option <?php if ('T12:30'===($startTime)) echo ' selected="selected"'?> value="T12:30">12:30 PM</option>
  <option <?php if ('T13:00'===($startTime)) echo ' selected="selected"'?> value="T13:00">1:00 PM</option>
    <option <?php if ('T13:30'===($startTime)) echo ' selected="selected"'?> value="T13:30">1:30 PM</option>
  <option <?php if ('T14:00'===($startTime)) echo ' selected="selected"'?> value="T14:00">2:00 PM</option>
  <option <?php if ('T14:30'===($startTime)) echo ' selected="selected"'?> value="T14:30">2:30 PM</option>
    <option <?php if ('T15:00'===($startTime)) echo ' selected="selected"'?> value="T15:00">3:00 PM</option>
  <option <?php if ('T15:30'===($startTime)) echo ' selected="selected"'?> value="T15:30">3:30 PM</option>
  <option <?php if ('T16:00'===($startTime)) echo ' selected="selected"'?> value="T16:00">4:00 PM</option>
    <option <?php if ('T16:30'===($startTime)) echo ' selected="selected"'?> value="T16:30">4:30 PM</option>
  <option <?php if ('T17:00'===($startTime)) echo ' selected="selected"'?> value="T17:00">5:00 PM</option>
  <option <?php if ('T17:30'===($startTime)) echo ' selected="selected"'?> value="T17:30">5:30 PM</option>
   <option <?php if ('T18:00'===($startTime)) echo ' selected="selected"'?> value="T18:00">6:00 PM</option>
  <option <?php if ('T18:30'===($startTime)) echo ' selected="selected"'?> value="T18:30">6:30 PM</option>
  <option <?php if ('T19:00'===($endTime)) echo ' selected="selected"'?> value="T19:00">7:00 PM</option>
</select>

End Time <select name="end-time"><br>
  <option <?php if ('""'===($endTime)) echo ' selected="selected"'?> value="">All Day Event</option>
  <option <?php if ('T7:00'===($endTime)) echo ' selected="selected"'?> value="T7:00">7:00 AM</option>
  <option <?php if ('T7:30'===($endTime)) echo ' selected="selected"'?> value="T7:30">7:30 AM</option>
  <option <?php if ('T8:00'===($endTime)) echo ' selected="selected"'?> value="T8:00">8:00 AM</option>
    <option <?php if ('T8:30'===($endTime)) echo ' selected="selected"'?> value="T8:30">8:30 AM</option>
    <option <?php if ('T9:00'===($endTime)) echo ' selected="selected"'?> value="T9:00">9:00 AM</option>
  <option <?php if ('T9:30'===($endTime)) echo ' selected="selected"'?> value="T9:30">9:30 AM</option>
  <option <?php if ('T10:00'===($endTime)) echo ' selected="selected"'?> value="T10:00">10:00 AM</option>
    <option <?php if ('T10:30'===($endTime)) echo ' selected="selected"'?> value="T10:30">10:30 AM</option>
  <option <?php if ('T11:00'===($endTime)) echo ' selected="selected"'?> value="T11:00">11:00 AM</option>
  <option <?php if ('T11:30'===($endTime)) echo ' selected="selected"'?> value="T11:30">11:30 AM</option>
    <option <?php if ('T12:00'===($endTime)) echo ' selected="selected"'?> value="T12:00">12:00 PM</option>
  <option <?php if ('T12:30'===($endTime)) echo ' selected="selected"'?> value="T12:30">12:30 PM</option>
  <option <?php if ('T13:00'===($endTime)) echo ' selected="selected"'?> value="T13:00">1:00 PM</option>
    <option <?php if ('T13:30'===($endTime)) echo ' selected="selected"'?> value="T13:30">1:30 PM</option>
  <option <?php if ('T14:00'===($endTime)) echo ' selected="selected"'?> value="T14:00">2:00 PM</option>
  <option <?php if ('T14:30'===($endTime)) echo ' selected="selected"'?> value="T14:30">2:30 PM</option>
    <option <?php if ('T15:00'===($endTime)) echo ' selected="selected"'?> value="T15:00">3:00 PM</option>
  <option <?php if ('T15:30'===($endTime)) echo ' selected="selected"'?> value="T15:30">3:30 PM</option>
  <option <?php if ('T16:00'===($endTime)) echo ' selected="selected"'?> value="T16:00">4:00 PM</option>
    <option <?php if ('T16:30'===($endTime)) echo ' selected="selected"'?> value="T16:30">4:30 PM</option>
  <option <?php if ('T17:00'===($endTime)) echo ' selected="selected"'?> value="T17:00">5:00 PM</option>
  <option <?php if ('T17:30'===($endTime)) echo ' selected="selected"'?> value="T17:30">5:30 PM</option>
   <option <?php if ('T18:00'===($endTime)) echo ' selected="selected"'?> value="T18:00">6:00 PM</option>
  <option <?php if ('T18:30'===($endTime)) echo ' selected="selected"'?> value="T18:30">6:30 PM</option>
  <option <?php if ('T19:00'===($endTime)) echo ' selected="selected"'?> value="T19:00">7:00 PM</option>
</select>


Color <select name="color">
  <option <?php if ('#0071c5'===($color)) echo ' selected="selected"'?> value="#0071c5">Blue</option>
  <option <?php if ('#008000'===($color)) echo ' selected="selected"'?> value="#008000">Green</option>
  <option <?php if ('#FF8C00'===($color)) echo ' selected="selected"'?> value="#FF8C00">Orange</option>
</select>
<br>
<br>
<input type="submit">


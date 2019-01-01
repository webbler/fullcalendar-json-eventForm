<?php
$jsonString = file_get_contents('json/events.json');
$data = json_decode($jsonString, true);


foreach ($data as $key => $entry) {
    if ($entry['title'] == $_POST['add-title']) {
		echo "The event already exists. Please choose a different name." . '<br>';
		echo '<a href="add-event.php">Click here to try again.</a>';
		exit;
    }
}

?>
<!DOCTYPE HTML>
<html>  
<body>
<script>
function populateSecondTextBox() {
    document.getElementById('add-end-date').value = document.getElementById('add-start-date').value;
}
</script>
<label>Add an Event</label>
<p>
<form action="add-info.php" method="post">
Title <input readonly type="text" name="add-title" required value="<?php echo htmlspecialchars($_POST['add-title']) ?>"/><br>
Description <input type="text" name="add-description"><br>
Start Date <input type="text" name="add-start-date" id="add-start-date" onkeyup="populateSecondTextBox();" placeholder="YYYY-MM-DD" required><br>
End Date <input type="text" name="add-end-date" id="add-end-date" placeholder="YYYY-MM-DD" selected="selected" required><br>
Start Time <select name="add-start-time"><br>
  <option value="">All Day Event</option>
  <option value="T7:00">7:00 AM</option>
  <option value="T7:3">7:30 AM</option>
  <option value="T8:00">8:00 AM</option>
    <option value="T8:30">8:30 AM</option>
    <option value="T9:00">9:00 AM</option>
  <option value="T9:30">9:30 AM</option>
  <option value="T10:00" selected>10:00 AM</option>
    <option value="T10:30">10:30 AM</option>
  <option value="T11:00">11:00 AM</option>
  <option value="T11:30">11:30 AM</option>
    <option value="T12:00">12:00 PM</option>
  <option value="T12:30">12:30 PM</option>
  <option value="T13:00">1:00 PM</option>
    <option value="T13:30">1:30 PM</option>
  <option value="T14:00">2:00 PM</option>
  <option value="T14:30">2:30 PM</option>
    <option value="T15:00">3:00 PM</option>
  <option value="T15:30">3:30 PM</option>
  <option value="T16:00">4:00 PM</option>
    <option value="T16:30">4:30 PM</option>
  <option value="T17:00">5:00 PM</option>
  <option value="T17:30">5:30 PM</option>
   <option value="T18:00">6:00 PM</option>
  <option value="T18:30">6:30 PM</option>
  <option value="T19:00">7:00 PM</option>
</select>
End Time <select name="add-end-time">
  <option value="">All Day Event</option>
  <option value="T7:00">7:00 AM</option>
  <option value="T7:3">7:30 AM</option>
  <option value="T8:00">8:00 AM</option>
    <option value="T8:30">8:30 AM</option>
    <option value="T9:00">9:00 AM</option>
  <option value="T9:30">9:30 AM</option>
  <option value="T10:00">10:00 AM</option>
    <option value="T10:30" selected>10:30 AM</option>
  <option value="T11:00">11:00 AM</option>
  <option value="T11:30">11:30 AM</option>
    <option value="T12:00">12:00 PM</option>
  <option value="T12:30">12:30 PM</option>
  <option value="T13:00">1:00 PM</option>
    <option value="T13:30">1:30 PM</option>
  <option value="T14:00">2:00 PM</option>
  <option value="T14:30">2:30 PM</option>
    <option value="T15:00">3:00 PM</option>
  <option value="T15:30">3:30 PM</option>
  <option value="T16:00">4:00 PM</option>
    <option value="T16:30">4:30 PM</option>
  <option value="T17:00">5:00 PM</option>
  <option value="T17:30">5:30 PM</option>
   <option value="T18:00">6:00 PM</option>
  <option value="T18:30">6:30 PM</option>
  <option value="T19:00">7:00 PM</option>
</select>
Color <select name="add-color">
  <option value="#0065A6">Blue</option>
  <option value="#39b44a">Green</option>
  <option value="#f68621">Orange</option>
</select>
<br>
</br>
<input type="submit"><br>
</form>

</body>
</html>
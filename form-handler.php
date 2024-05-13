<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $firstName = $_POST['First Name'];
  $lastName = $_POST['Last Name'];
  $email = $_POST['Email'];
  $tableType = $_POST['Table Type'];
  $guestNumber = $_POST['Guest Number'];
  $placement = $_POST['Placement'];
  $date = $_POST['Date'];
  $time = $_POST['Time'];
  $note = $_POST['Note'];

  $to = "iodeke256@gmail.com";
  $subject = "Table Booking";
  $message = "First Name: $firstName\n"
           . "Last Name: $lastName\n"
           . "Email: $email\n"
           . "Table Type: $tableType\n"
           . "Guest Number: $guestNumber\n"
           . "Placement: $placement\n"
           . "Date: $date\n"
           . "Time: $time\n"
           . "Note: $note\n";
  $headers = "From: $email";

  mail($to, $subject, $message, $headers);
}
?>

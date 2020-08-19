<?php
if($_POST["message"]) {
    mail("valentina@tallqvist.net", "Yhteydenottolomakevastaus", $_POST["message"], "From: Wikner Ratsutila Yhteydenottolomake");
}
?>
<html>
<head>
<link rel="stylesheet" href="/css/style.css">
<title>Yhteydenottolomake</title>
</head>
<body>
  <h1>Yhteydenottolomak</h1>
  <form method="post" action="form.php">
      <textarea name="message"></textarea>
      <input type="submit">
  </form>
</body>
</html>

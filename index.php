<?php

$to = $_POST['to'];
$subject = $_POST['subject'];
$name = $_POST['name'];
$from = $_POST['from'];
$content = $_POST['content'];
$msg = "$from\n$name\n$content";

if($_POST){
  if($to == "" || $subject == "" || $name == "" || $from == "" ||  $content == ""){
    $nie = 'Please fill out all required fields';
    }else{
      mail($to, $subject, $msg);
      $ok = 'Your message has been sent';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Animated Form</title>
  <link type="text/css" rel="stylesheet" href="style_form.css">
</head>

<body>
  <form action="?" method="POST" id="animated-form">
  <p class="ok">
        <?php echo $ok; ?>
      </p>
      <p class="nie">
        <?php echo $nie; ?>
      </p>
    <div class="input-wrapper">
      <input type="email" id="to" name="to" required>
      <label for="to">
        To:
      </label>
    </div>
    <div class="input-wrapper">
      <input type="text" id="subject" name="subject" required>
      <label for="email">
        Subject:
      </label>
    </div>
    <div class="input-wrapper">
      <input type="text" id="name" name="name" required>
      <label for="name">
        Your name:
      </label>
    </div>
    <div class="input-wrapper">
      <input type="email" id="from" name="from" required>
      <label for="from">
        Your e-mail:
      </label>
    </div>
    <div class="input-wrapper">
      <textarea type="text" id="content" name="content" required>
        </textarea>
          <label for="content">
            Your message:
          </label>
    </div>
    <input type="submit" required>
  </form>
</body>
</html>

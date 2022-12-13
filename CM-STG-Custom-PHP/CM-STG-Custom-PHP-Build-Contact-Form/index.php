<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Rubik+Vinyl&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="/css/main.css">
  <title>Knowledge City - Web Dev Basics - Build a Contact Form Using PHP with your video tutor, Ron The Web Dev!
  </title>
</head>

<body>
  <main class="kc--form--container">
    <section class="kc--form--section--wrapper">
      <form class="kc--form" name="kc-demo-contact-form" action="kc-contact-form.php" method="post">
        <h1>
          Send Email
        </h1>

        <section class="kc--form--section--1">
          <div class="kc--form--section--1--fname">
            <input type="text" name="fname" placeholder="Enter Your First Name" required>
          </div>

          <div class="kc--form--section--1--lname">
            <input type="text" name="lname" placeholder="Enter Your Last Name" required>
          </div>
        </section>

        <section class="kc--form--section--2">
          <div class="kc--form--section--2--email">
            <input type="text" name="mailFrom" placeholder="Enter Your Email">
          </div>

          <div class="kc--form--section--2--confirm">
            <input type="text" name="mailConfirmFrom" placeholder="Confirm Your Email" required>
          </div>
        </section>

        <section class="kc--form--section--3">
          <div class="kc--form--section--3--subject">
            <input type="text" name="mailSubject" placeholder="Enter Email Subject" required>
          </div>

          <div class="kc--form--section--3--message">
            <textarea name="emailMessage" placeholder="Enter Email Message"></textarea>
          </div>
        </section>

        <button class="kc--form--submit--btn__shrink" type="submit" name="emailSubmit">Submit</button>
      </form>
    </section>
  </main>
</body>

</html>
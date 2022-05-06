<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Create PDF Form</title>
</head>

<body>
  <div class="offset-md-3 container mt-5">

    <form action="./php/make-pdf.php" method="post" class="col-md-6">
      <h1 class="text-center">Create Your Own PDF Form</h1>
      <p class="text-center">Fill out the details below and then click the Create PDF button.</p>

      <div class="row mb-2">
        <div class="col-md-6">
          <input type=" text" name="fname" placeholder="First Name" class="form-control" required>
        </div>
        <div class="col-md-6">
          <input type=" text" name="lname" placeholder="Last Name" class="form-control" required>
        </div>
      </div>

      <div class="mb-2">
        <input type="email" name="email" placeholder="Email" class="form-control" required>
      </div>
      <div class="mb-2">
        <input type="tel" name="phone" placeholder="Phone" class="form-control" required>
      </div>
      <div class="mb-2">
        <textarea name="message" placeholder="Your Message..." class="form-control" required></textarea>
      </div>
      <div class="row justify-content-center">
        <button type="submit" class="btn btn-success btn-lg btn-block">Create PDF</button>
      </div>
    </form>
  </div>
</body>

</html>
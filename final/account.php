
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" type="image/png" href="img/icon.png" />

    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Bankist | When Banking meets Minimalist</title>

    <script defer src="script.js"></script>
  </head>
  <body>
<div class="overlay"></div>
    <div class="modal">
      <h2 class="modal__header">
        Open your bank account <br />
        in just <span class="highlight">5 minutes</span>
      </h2>
      <form action="code.php" method="POST" class="modal__form">
        <label>First Name</label>
        <input name="first" type="text" required autofocus/>
        <label>Last Name</label>
        <input name="last" type="text" required autofocus/>
        <label>Email Address</label>
        <input name="email" type="email" required autofocus/>
        <label>Password</label>
        <input name="password" type="password" required autofocus/>
        <button type="submit" name="adduser" class="btn">Next step &rarr;</button>
      </form>
    </div>
    <div class="overlay hidden"></div>
</body>
</html>
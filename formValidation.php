<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/formValidation.css">
    <title>Form validation</title>
</head>
<body>
 <div class="container">
 <form id="form" class="form" autocomplete="off" method="POST"  action="register.php" onsubmit="return validateForm();">
  <h2>Regjistrohu</h2>
  <div class="form-control">
    <label for="username">Emri i përdoruesit</label>
    <input type="text" id="username" name="username" placeholder="Shëno emrin tuaj të përdoruesit">
    <small>Error message</small>
  </div>
  <div class="form-control">
    <label for="email">Adresa Elektornike</label>
    <input type="text" id="email" name="email" placeholder="Shëno adresën elektronike">
    <small>Error message</small>
  </div>
  <div class="form-control">
    <label for="password">Fjalëkalimi</label>
    <input type="password" id="password" name="password" placeholder="Shëno fjalëkalimin">
    <small>Error message</small>
  </div>
  <div class="form-control">
    <label for="password2">Konfirmimi i Fjalëkalimit</label>
    <input type="password" id="password2" name="password2" placeholder="Shëno fjalëkalimin përsëri">
    <small>Error message</small>
  </div>
  <div class="buttons">
    <a href="index.php" class="cancel-button">Kthehu Mbrapa</a>
    <button type="submit" value="submit" name="register">Dorëzo</button>
  </div>
  <p></p>
  <a href="formValidationL.php" id="keni">Keni një llogari tashmë, Kyçuni !!!</a>
</form>

 </div>
    <script src="./JS/formValidation.js"></script>
</body>
</html>


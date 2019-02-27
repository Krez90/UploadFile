<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Uploadoit</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="public/css/nunu.css">
  <!-- Lien GOOGLE FONT typo Raleway. -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Lien CSS FILEPOND !!IMPORTANT!!. -->
  <link href="public/filepond-master/dist/filepond.css" rel="stylesheet">
  
</head>
<body>

<header>
  <div class="container">
    <div class="row">
      <div class="col" id="logo2">
        <a href="//bilelh.promo-24.codeur.online/UploadIt/">
          <img class="logo_header" src="public/images/logo2.png"></a>
      </div>
    </div>
  </div>
</header>

<div class="container">
  <div class="row">
    <div class="col" id="formulaire">
      <form  id="contact" method="post" action="formulaire.php" enctype="multipart/form-data">
        <input name="destinataire" id="destinataire" placeholder="Email du destinataire" required><br><span id="missDest"></span>
        <p class="errorMessage"></p>
        
        <input name="expediteur" id="expediteur" placeholder="Email de l'expéditeur" required><br><span id="missExp"></span>
        <p class="errorMessage"></p>
        
        <textarea name="message" id="message" cols="30" rows="5" placeholder="Message"></textarea><br>
        <p class="errorMessage"></p>
<!-------------------------------------------------- Input FILEPOND. ------------------------------------------------>
<div class="filepond_js">
  <input type="file" class="filepond" name="fichier" multiple data-max-file-size="3MB" data-max-files="3">
</div>
    <button type="submit" name="envoyer" id="envoyer" value="enregister">Envoyer</button>
    </form>
  </div>
  </div>
  <div class="row">
    <div class="col" id="div_nunu">
      <img id="taille_nunu" src="public/images/nunu.png">
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <!-- Chemin vers les fichier de références FILEPOND !!IMPORTANT!!. -->
  <script src="public/filepond-master/dist/filepond.js"></script>
  <!-- Script js FILEPOND. -->
  <script src="public/js/fichier.js"></script>
  <script src="public/js/securite.js"></script>
</body>
</html>
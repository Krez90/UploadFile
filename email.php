<?php

include('infosql.php');
$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass); 

function getOneUrl($id) {
    global $dbh;

    $urls = $dbh->query('SELECT Url FROM upload WHERE id_fichier='.$id.';');

    return $urls->fetch();
}

// $id = 214; //Je prends un id arbitrairement, il devra provenir de l'URL en réalité (par ex localhost/MVC2/film/2 pour l'id 2)
// $id = $_GET['id_fichier'];
// $url = getOneUrl($id);

// //traiter les données
// // $url['Url'] = ucfirst($url['Url']);
// $url['Url'];

?>

<!doctype html><html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head><title>UploadIt</title><!--[if !mso]><!-- --><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]--><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><style type="text/css">#outlook a { padding:0; }
          .ReadMsgBody { width:100%; }
          .ExternalClass { width:100%; }
          .ExternalClass * { line-height:100%; }
          body { margin:0;padding:0;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%; }
          table, td { border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt; }
          img { border:0;height:auto;line-height:100%; outline:none;text-decoration:none;-ms-interpolation-mode:bicubic; }
          p { display:block;margin:13px 0; }</style><!--[if !mso]><!--><style type="text/css">@media only screen and (max-width:480px) {
            @-ms-viewport { width:320px; }
            @viewport { width:320px; }
          }</style><!--<![endif]--><!--[if mso]>
        <xml>
        <o:OfficeDocumentSettings>
          <o:AllowPNG/>
          <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
        </xml>
        <![endif]--><!--[if lte mso 11]>
        <style type="text/css">
          .outlook-group-fix { width:100% !important; }
        </style>
        <![endif]--><!--[if !mso]><!--><link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet" type="text/css"><style type="text/css">@import url(https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700);</style><!--<![endif]--><style type="text/css">@media only screen and (min-width:480px) {
        .mj-column-per-100 { width:100% !important; max-width: 100%; }
      }</style><style type="text/css">@media only screen and (max-width:480px) {
      table.full-width-mobile { width: 100% !important; }
      td.full-width-mobile { width: auto !important; }
    }</style></head><body><div><!-- Top Bar --><!--[if mso | IE]><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]--><div style="background:#77bdff;background-color:#77bdff;Margin:0px auto;max-width:600px;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#77bdff;background-color:#77bdff;width:100%;"><tbody><tr><td style="direction:ltr;font-size:0px;padding:0px;text-align:center;vertical-align:top;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:600px;" ><![endif]--><div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"><tr><td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;"><tbody><tr><td style="width:150px;"><a href="https://" target="_blank"><img alt="UploadIt" height="auto" src="images/logo2.png" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;" width="150"></a></td></tr></tbody></table></td></tr><tr><td style="font-size:0px;word-break:break-word;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td height="10" style="vertical-align:top;height:10px;"><![endif]--><div style="height:10px;">&nbsp;</div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><![endif]--> <!-- Logos and Title --><!-- Split Crane and Text --><!--[if mso | IE]><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]--><div style="background:#FCFCFD;background-color:#FCFCFD;Margin:0px auto;max-width:600px;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#FCFCFD;background-color:#FCFCFD;width:100%;"><tbody><tr><td style="direction:ltr;font-size:0px;padding:20px 0;padding-bottom:20px;padding-left:25px;padding-top:20px;text-align:center;vertical-align:top;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:575px;" ><![endif]--><div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"><tr><td align="center" style="font-size:0px;padding:10px 25px;padding-bottom:2px;word-break:break-word;"><div style="font-family:Arial;font-size:18px;font-weight:100;letter-spacing:1px;line-height:1;text-align:center;color:#77bdff;">Bonjour, Notre petit nuage a quelque chose pour toi.</div></td></tr><tr><td style="font-size:0px;word-break:break-word;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td height="50" style="vertical-align:top;height:50px;"><![endif]--><div style="height:50px;">&nbsp;</div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr><tr><td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;"><div style="font-family:arial;font-size:16px;line-height:1;text-align:center;color:#808080;"><span style="color:#808080"><b>Un(e) ami(e)</b></span> t'as envoyé un fichier</div></td></tr><!-- <mj-image align="center" alt="Télécharger le fichier" href="<?=$lien?>" src="images/bouton.png" align="left" width="188px"></mj-image> --><tr><td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;"><div style="font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:1;text-align:center;color:#000000;"><a href="https://bilelh.promo-24.codeur.online/Uploadoit/<?=$url['Url']?>">Télécharger le fichier</a></div></td></tr><tr><td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;"><div style="font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:1;text-align:left;color:#000000;"><a href="https://bilelh.promo-24.codeur.online/Uploadoit/telechargement.php">https://bilelh.promo-24.codeur.online/Uploadoit/telechargement.php</a></div></td></tr><tr><td align="center" style="font-size:0px;padding:10px 25px;padding-bottom:2px;word-break:break-word;"><div style="font-family:Arial;font-size:11px;font-weight:100;letter-spacing:1px;line-height:1;text-align:center;color:#77bdff;">Ton fichier est préservé pendant 15 jours avant qu’il ne soit détruit par Monsieur soleil...</div></td></tr></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><![endif]--><!-- Get Your Robot --><!--[if mso | IE]><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]--><div style="background:#77bdff;background-color:#77bdff;Margin:0px auto;max-width:600px;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#77bdff;background-color:#77bdff;width:100%;"><tbody><tr><td style="direction:ltr;font-size:0px;padding:0px;text-align:center;vertical-align:top;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:600px;" ><![endif]--><div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"><tr><td style="font-size:0px;word-break:break-word;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td height="50" style="vertical-align:top;height:50px;"><![endif]--><div style="height:50px;">&nbsp;</div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr><tr><td align="center" style="font-size:0px;padding:0px;word-break:break-word;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;"><tbody><tr><td style="width:225px;"><img height="auto" src="public/images/nunu.png" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;" width="225"></td></tr></tbody></table></td></tr><tr><td style="font-size:0px;word-break:break-word;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td height="50" style="vertical-align:top;height:50px;"><![endif]--><div style="height:50px;">&nbsp;</div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><![endif]--> <!-- Get Extra Shells --><!-- Bottom Graphic --><div style="font-family:arial;font-size:10px;line-height:1;text-align:center;color:#808080;"><span style="color:#808080"><b>Tu reçois un mail car le service a été utilisé par un de tes amis. Ton adresse mail est utilisé seulement pour l'envoie du lien, il n'y a pas d'exploitation de ton mail, il n'y a pas de sauvegarde de celui-ci.</b></span></div><!-- Bottom Bar --></div></body></html>
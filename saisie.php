<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de traitement</title>
</head>
<body>
<p>Dans le formulaire précédent, vous avez fourni les
        informations suivantes :</p> <br>

<?php
// // test data
// // var_dump($_POST); 
// // nom = MOUSE 
// echo 'Nom : '.filter_input(INPUT_POST,'nom').'<br>';
// // mot_de_passe = Mickey
// echo 'Mot de passe : '.filter_input(INPUT_POST,'mot_de_passe').'<br>'; 
// // sexe = M 
// $sexe = filter_input(INPUT_POST,'sexe');
// if ($sexe == "?"){echo 'sexe =  ne sais pas. <br>';} 
// else { echo 'sexe : '.$sexe.'<br>'; };

// photo = identité.jpg 
echo 'Photo : '.filter_input(INPUT_POST,'photo').'<br>'; 


// // couleurs =  
// // // utiliser var_dump pour verifier ce que on a saisi
// // var_dump($arrSaisi);

// $arrSaisi = filter_input(INPUT_POST,'couleurs', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);

// if(isset($arrSaisi) && !empty($arrSaisi)){
//     echo 'Couleurs = ';
//     echo '<br>';
//     if($arrSaisi["bleu"] == "on"){
//     echo 'Bleu = '.$arrSaisi["bleu"].'<br>'; 
// };
// if($arrSaisi["blanc"] == "on"){
//     echo 'Blanc = '.$arrSaisi["blanc"].'<br>'; 
// };
// if($arrSaisi["rouge"] == "on"){
//     echo 'Rouge = '.$arrSaisi["rouge"].'<br>'; 
// };
// }
// else {
// echo 'Couleur = ne sait pas';
// };

// //langue = F 
// echo 'Langue = '.filter_input(INPUT_POST,'langue').'<br>'; 
// // fruits =  
// echo 'Fruits = '.filter_input(INPUT_POST,'fruits').'<br>'; 
// // 0 = A 
// echo 'Fruits = '.filter_input(INPUT_POST,'langue').'<br>'; 
// // 1 = F 
// echo 'Fruits = '.filter_input(INPUT_POST,'langue').'<br>'; 
// // commentaire = Consultant en système d’information
// echo 'Commentaire = '.filter_input(INPUT_POST,'commentaire').'<br>';  
// // invisible = 123 
// echo 'Invisible = '.filter_input(INPUT_POST,'invisible').'<br>'; 
// // soumettre = OK  
// echo 'Soumettre= '.filter_input(INPUT_POST,'soumettre').'<br>';   ?>
</body>
</html>

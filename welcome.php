<!DOCTYPE html>
<html>
<head>

<!--hedhaya chya3ml integrité meben bootstrap html w css mte3ou 3ibara link l css  -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<!--hedha font family sigma -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Sigmar&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="welcome.css">
	<link rel="stylesheet" type="text/css" href="page.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


<div class="Header">
	
	<div class="flex">
		
   <div class="left-section">
  <div  class="Portrait">Name</div>
<div  class="ala-main">Of System </div>

</div>



<div   class="middle-section">

	<input class="search" type="text" name="Search" placeholder="Search">

	<button class="search-button">
		<img class="image-search" src="search.svg" >
	</button>
</div>


<div class="right-section">
	
<a href="index.php"><button class="block3">Déconnexion</button> </a>


</div>





<div style="background-color: ;" class="side_bar">

<div class="logo-admin">
	<img src="6830335.png">
<div style="color: rgb(241, 196, 15); padding-top: 10px;margin-left: 20px;  margin-top: 0px;" class="gere_tuteur">
Admin

</div>
</div>







<div class="Acceil">
	<img src="tuteur.png">
<div style="color: white; padding-top: 10px;margin-left: 20px;" class="gere_tuteur">
Gérer Tuteur

</div>
</div>






<div class="Acceil">
	<img src="1904186.png">
<div style="color: white; padding-top: 10px;margin-left: 20px;" class="gere_tuteur">
Gérer Apprenant

</div>
</div>




</div>
</div>


<!--  bodyyyyyyy page lpage lwestaniya -->

<div class="bodyTitle">
	
<p>Liste de Tuteur : </p>

</div>




<div class="bodyPage">
	
	<div>

<a class='btnAjoute' href='formulaireCreartionTuteur.php' ><img src="1200px-Add_user_icon_(blue).svg.png" width="35px" >Ajouter New Tuteur </a>



</div>
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>NOM</th>
      <th>PRENOM</th>
      <th>USERNAME</th>
       <th>PASSWORD</th>
       <th>DATE_D'ADHESION</th>
         <th>ACTIONS</th>
    </tr>
  </thead>
  <tbody>

<!--houna bech njibou donnee mel base w n7otouhom fil colonet mta3 table chna3mlou lconnexion w kol houna -->
<?php
include("dataBaseConnexion.php");

$sql="select id ,nom, prènom, username,password,date_dadhésion from tuteur";

//$result hedhi chetraja3lek resultat lkol mta3 requete
$result= mysqli_query($conn,$sql);

if(!$result){
die("Invalid query !📛");
}
// 3melna boucle bech nraj3ou fih e donner
    while($row = mysqli_fetch_assoc($result)) {
     
    //afficher le donner
    	echo"
  <tr>
      <th>$row[id]</th>
      <td>$row[nom]</td>
      <td>$row[prènom]</td>
      <td>$row[username]</td>
      <th>$row[password]</th>
      <td>$row[date_dadhésion]</td>
      <td>

<a class='btn btn-success' href='formulaireModifierTuteur.php?id=$row[id]'>Modifier</a>
<a class='btn btn-danger' href='supprimerTuteur.php?id=$row[id]'>Supprimer</a>

      </td>
    </tr>";
}
  ?>
  </tbody>
</table>

</div>


<div class="frame">
<iframe src="https://fr.wikipedia.org/wiki/Wikip%C3%A9dia:Accueil_principal"></iframe>
</div>

</body>
</html>
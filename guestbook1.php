<table width="100%" height="100%" ><tr><td>
  	     <b>
  	     <?php
  	     // Requête ordonnant les messages par dates
  	     $query = "SELECT date,name,email,comment FROM $table ORDER BY date DESC";
  	     
  	     // Exécute la requête précédente
  	     $result = mysql_query($query) or die('Erreur SQL : '.mysql_error()); 
      
  	     // Renvoie le nombre de lignes pour pouvoir afficher le nombre total de messages postés
  	     echo mysql_num_rows($result); 
  	     ?> 
  	     messages
  	     </b>
  	     <table width="95%"><tr><td>
  	         <hr size=1>
  	 
  	     <?php
  	     // Définit la boucle : tant qu'il y a des messages dans la BDD
  	     while ($val = mysql_fetch_array($result)) { 
  	         echo '<font color="black" face="verdana, arial">Message de :</font>';
  	         // Affiche le pseudo du posteur de message (avec lien mailto:)
  	         echo '<a href="mailto:'.$val['email'].'">'.$val['name'].'</a>'; 
  	         echo '<font color="black" face="verdana, arial">Posté le : </font>';
  	         // Affiche la date où a eté posté le message
  	         echo '<font color="orange">'.date("d/m/Y",$val['date']).'</font>';
  	         // Affiche le message posté
  	         echo '<div>'.htmlentities($val['comment']).'</div>';
  	         echo '<hr size=1>';
  	     } 
  	     ?>
  	     </td></tr></table>
  	 </td></tr></table>
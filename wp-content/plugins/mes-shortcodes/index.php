<?php
/* 
Plugin Name: mes shortcodes
Description: Plugin Fournissant des shortcodes 
Author: Dania Ahmed
Version: 1.0.0
*/

// function shortcode_bienvenue(){
//     return "<h2>Bienvenue dans l'Eval !</h2>";
// }
// add_shortcode('bienvenue', 'shortcode_bienvenue');

// $select = "select * wp_annuaire";
// $requete = $wpdb->get_results($select);
// foreach($requete as $prenom){
// echo $prenom->nom_colonne;
// }

// global $wpdb;
 
// $result = $wpdb->get_results( "SELECT * FROM wp_annuaire ");
 
 
// echo "id"." "."prenom"."  "."nom"."  "."mail"."<br><br>";
// foreach($result as $row)
//  {
 
//  echo $row->id." ".$row->$prenom." ".$row->nom."  ".$row->mail."<br>";
//  }



function shortcode_bienvenue(){

    global $wpdb;

    // Interrogation de la base de données
    $resultats = $wpdb->get_results("SELECT * FROM wp_annuaire");
    echo "<thead>";
    echo "<tr>";

    echo "id"." "."prenom"."  "."nom"."  "."mail"."<br><br>";
    echo "</tr>";
    echo"</thead>";
    // Parcours des resultats obtenus
    


    foreach ($resultats as $annuaire) {
    	echo "<tbody>";
    	echo "<tr>";
    	echo $annuaire->id; 
        echo $annuaire->prenom ;
        echo $annuaire->nom ;
        echo $annuaire->mail ;
        echo '<br/>' ;
        echo "<tr>";
        echo "</tbody>";

    }
}

add_shortcode('bienvenue', 'shortcode_bienvenue');
 
?>
<?php 

if($_GET){

              $bilim_insanı_id = $_GET["id"];
              $bilim_dalı_id = $_GET["id"];
              $eser_id = $_GET["id"];


              $db= new PDO("mysql:host=localhost; dbname=bilim", "root","");

              $query = $db->prepare("delete from bilim_insanı where bilim_insanı_id=?");
              $sonuc = $query->execute(array($bilim_insanı_id));

              $query = $db->prepare("delete from bilim_dalı where bilim_dalı_id=?");
              $sonuc = $query->execute(array($bilim_dalı_id));

              $query = $db->prepare("delete from eserler where eser_id=?");
              $sonuc = $query->execute(array($eser_id));



              header("Location: index.php");
}


?>
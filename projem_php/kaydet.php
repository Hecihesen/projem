<?php 

  if($_POST){
    $bilim_insanı_adı=$_POST["bilim_insanı_adı"];
    $bilim_dalı_adı=$_POST["bilim_dalı_adı"];
    $eser_adı=$_POST["eser_adı"];

    $db= new PDO("mysql:host=localhost; dbname=bilim", "root","");
    $query = $db->prepare("INSERT INTO bilim_insanı set bilim_insanı_adı =?");
    $ekle = $query->execute(array($bilim_insanı_adı));

    $query = $db->prepare("INSERT INTO bilim_dalı set bilim_dalı_adı =?");
    $ekle = $query->execute(array($bilim_dalı_adı));

    $query = $db->prepare("INSERT INTO eserler set eser_adı =?");
    $ekle = $query->execute(array($eser_adı));





    header("Location: index.php");

  }


?>
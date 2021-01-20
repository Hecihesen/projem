<!DOCTYPE html>
<html lang="en">
<head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>guncelle</title>
</head>
<body>
         
         <?php 
      
         if($_POST)
         {

              $yeni_eser_adı = $_POST["eser_adı"];
              $güncellnecek_eser_id = $_POST["hdnid"];
              $db= new PDO("mysql:host=localhost; dbname=bilim", "root","");
              $query = $db->prepare("update eserler set eser_adı= ? where eser_id = ?");
              $update = $query->execute(array($yeni_eser_adı, $güncellnecek_eser_id));
              header("Location: index.php");
         }



            
            if($_GET)
         {

              $eser_id = $_GET["id"];
              $db= new PDO("mysql:host=localhost; dbname=bilim", "root","");
              $query = $db->query("select * from eserler where eser_id='{$eser_id}' ")->fetch(PDO::FETCH_ASSOC);

              if($query){

                            $eser_adı=$query["eser_adı"];
              }
           }
         
         ?>


       <form action="guncelle.php" method="POST">

               <input type="hidden" name="hdnid" value="<?php echo $eser_id ?>">
          
                <p>eser ne: <input type="text" name="eser_adı" value="<?php echo $eser_adı ?>"></p>
              
                <input type="submit" value="kaydet">
             
             </form>
</body>
</html>
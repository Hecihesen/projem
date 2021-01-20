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

              $yeni_bilim_insanı_adı = $_POST["bilim_insanı_adı"];
              $güncellnecek_bilim_insanı_id = $_POST["hdnid"];
              $db= new PDO("mysql:host=localhost; dbname=bilim", "root","");
              $query = $db->prepare("update bilim_insanı set bilim_insanı_adı= ? where bilim_insanı_id = ?");
              $update = $query->execute(array($yeni_bilim_insanı_adı, $güncellnecek_bilim_insanı_id));
              header("Location: index.php");
         }



            
            if($_GET)
         {

              $bilim_insanı_id = $_GET["id"];
              $db= new PDO("mysql:host=localhost; dbname=bilim", "root","");
              $query = $db->query("select * from bilim_insanı where bilim_insanı_id='{$bilim_insanı_id}' ")->fetch(PDO::FETCH_ASSOC);

              if($query){

                            $bilim_insanı_adı=$query["bilim_insanı_adı"];
              }
           }
         
         ?>


       <form action="guncelle.php" method="POST">

               <input type="hidden" name="hdnid" value="<?php echo $bilim_insanı_id ?>">
          
                <p>Bilim isanı kim: <input type="text" name="bilim_insanı_adı" value="<?php echo $bilim_insanı_adı ?>"></p>
              
                <input type="submit" value="kaydet">
             
             </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>guncelle1</title>
</head>
<body>
         
         <?php 
      
      if($_POST)
      {

           $yeni_bilim_dalı_adı = $_POST["bilim_dalı_adı"];
           $güncellnecek_bilim_idalı_id = $_POST["hdnid"];
           $db= new PDO("mysql:host=localhost; dbname=bilim", "root","");
           $query = $db->prepare("update bilim_dalı set bilim_dalı_adı= ? where bilim_dalı_id = ? ");
           $update = $query->execute(array($yeni_bilim_dalı_adı, $güncellnecek_bilim_idalı_id));
           header("Location: index.php");
      }



            
            if($_GET)
         {

              $bilim_dalı_id = $_GET["id"];
              $db= new PDO("mysql:host=localhost; dbname=bilim", "root","");
              $query = $db->query("select * from bilim_dalı where bilim_dalı_id='{$bilim_dalı_id}' ")->fetch(PDO::FETCH_ASSOC);

              if($query){

                            $bilim_dalı_adı=$query["bilim_dalı_adı"];
              }
           }
         
         ?>


       <form action="guncelle.php" method="POST">

               <input type="hidden" name="hdnid" value="<?php echo $bilim_dalı_id ?>">
          
                <p>Bilim dalı ne: <input type="text" name="bilim_dalı_adı" value="<?php echo $bilim_dalı_adı ?>"></p>
              
                <input type="submit" value="kaydet">
             
             </form>
</body>
</html>
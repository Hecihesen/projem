<!DOCTYPE html>
<html lang="en">
<head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>Document</title>

             
</head>
<body>
            <?php 
                 
                 echo "merhabalar<br>";
                 echo "Not: hocam projenin eksikleri ve hataları var ancak çok uğraştım, gerçekten emek verdim:) <br>";
                echo "------------- <br>";
                echo "-------------";
                 $db= new PDO("mysql:host=localhost; dbname=bilim", "root","");
              
                 $bilim_insanı= $db->query("select * from bilim_insanı");

                 $bilim_dalı=$db->query("select * from bilim_dalı");

                 $eserler=$db->query("select * from eserler");

                // $bilim_dalı=$db->query("select * from bilim_dalı");
              
              ?>

             
       <div float="left">
              <table style="background-color: darkgray;"  border="1">
                   <tr><td>id</td> <td>bilim adamı</td> <td>listeden kaldır</td> <td>güncelle</td></tr>
                   
                   <?php 
                     
                       foreach($bilim_insanı as $bilgi){
                               echo "<tr><td>".$bilgi["bilim_insanı_id"]."</td> <td>".$bilgi["bilim_insanı_adı"]."</td>";
                              
                               echo "<td> <a href='sil.php?id=".$bilgi["bilim_insanı_id"]. "'>listedenKaldır</a></td>";
                               echo "<td> <a href='guncelle.php?id=".$bilgi["bilim_insanı_id"]. "'>güncelle</a></td>";

                               echo " </tr>";
                       }
      
                   
                   ?>
              </table>
                       </div>
                   <br>
   
        <div float="left">
                <table style="background-color: darkgray;"  border="2">
                   <tr><td>bilim dalı id</td> <td>bilim insanı id</td> <td>bilim dalı adı</td><td>listeden kaldır</td> <td>güncelle</td></tr>
                   
                   <?php 
                     
                       foreach($bilim_dalı as $bilgi){
                               echo "<tr><td>".$bilgi["bilim_dalı_id"]."</td> <td>".$bilgi["bilim_insanı_id"]."</td> <td>".$bilgi["bilim_dalı_adı"]."</td>";
                              
                              echo "<td> <a href='sil.php?id=".$bilgi["bilim_dalı_id"]. "'>listedenKaldır</a></td>";
                               echo "<td> <a href='guncelle1.php?id=".$bilgi["bilim_dalı_id"]. "'>güncelle</a></td>";

                               echo " </tr>";
                       }
      
                   
                   ?>
              
              
              </table>
                       </div>
              <br>


            <div float="left">
              <table style="background-color: darkgray;"  border="3">
                   <tr><td>eser id</td> <td>bilim insanı id</td> <td>bilim dalı adı</td><td>listeden kaldır</td> <td>güncelle</td></tr>
                   
                   <?php 
                     
                       foreach($eserler as $bilgi){
                               echo "<tr><td>".$bilgi["eser_id"]."</td> <td>".$bilgi["bilim_insanı_id"]."</td> <td>".$bilgi["eser_adı"]."</td>";
                              
                               echo "<td> <a href='sil.php?id=".$bilgi["eser_id"]. "'>listedenKaldır</a></td>";
                              echo "<td> <a href='guncelle2.php?id=".$bilgi["eser_id"]. "'>güncelle</a></td>";

                               echo " </tr>";
                       }
      
                   
                   ?>
              
              
              </table>

              </div>
             
 
              <hr>
             <form action="kaydet.php" method="POST">
                 <h4>listeye yeni eleman ekle:</h>
                <p>Bilim isanı kim: <input type="text" name="bilim_insanı_adı"></p>
                <p>çalıştığı bilim dalı: <input type="text" name="bilim_dalı_adı"></p>
                <p>en önemli eseri: <input type="text" name="eser_adı"></p>
                <input type="submit" value="kaydet">
             
             </form>


</body>
</html>
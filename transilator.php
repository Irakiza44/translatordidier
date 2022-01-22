<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Translator</title>
    <style type="text/css">
        
   
body {
  padding: 3em;

  font-size: 20px;
  color: #ffff;
  background-color: #0C7155;
}
.display{
    background-color:#216064;
}
input {
  margin-top: 20px;
  background: #642321;
  height: 50px;
  cursor: pointer;
  font-weight: 800px;
  box-shadow: 5px 10px;
  transition: 0.5s800px
  }

  .iburyo{
float: right;
}
    </style>
</head>

<body>



    <form action="shyira.php" method="post" class="iburyo">
       
        <div class="container">
            <h1> Insert a Word To Be Transilated</h1>

           
           <label for="kinyarwanda"><br>Kinyarwanda</br></label>
           <input type="text" name="firstname" required>


           <label for="English"><br>English</br></label>
           <input type="text" name="lastname" required>


           <label for="French"><br>Franch</br></label>
           <input type="text" name="email" required>


           <label for="Swahili"><br>Kiswahili</br></label>
           <input type="text" name="phonenumber" required>


           <input type="submit" name="create" value="Submit" class="btntwo" action="transilator.php" >
            

        </div>
 </section>
     </form>





<center>
    <p> 

<b><em> <strong>Simple Transirator</strong></em></b>
    </p>

    <form method="POST"  width="50" heigth="50">
    <table border="0" width="300" height=200 style="background-color: #1ACCE2">

   
  
        <tr>
        <td class="display">
           <?php
include("transiratorconnection.php");

 if (isset($_POST['kinya'])) {
                $query = 'SELECT Kinya FROM indimi';
                $data = mysqli_query($conn, $query) ;

                if (!$data) {
                    echo("Error description: " . mysqli_error($mysqli));
                } else {

                    while ($row = mysqli_fetch_array($data)) {
                        echo  $row['Kinya']."<br>";
                     }
                 }
            }
            elseif (isset($_POST['engl']))
             {
                 $query = 'SELECT Eng FROM indimi';
                $data = mysqli_query($conn, $query) ;

                if (!$data) {
                    echo("Error description: " . mysqli_error($mysqli));
                } else {

                    while ($row = mysqli_fetch_array($data)) {
                        echo  $row['Eng']."<br>";
                     }
                 }
                // code...
            }

 elseif (isset($_POST['fra']))
             {
                 $query = 'SELECT Fra FROM indimi';
                $data = mysqli_query($conn, $query) ;

                if (!$data) {
                    echo("Error description: " . mysqli_error($mysqli));
                } else {

                    while ($row = mysqli_fetch_array($data)) {
                        echo  $row['Fra']."<br>";
                     }
                 }
                // code...
            }

elseif (isset($_POST['swahi']))
             {
                 $query = 'SELECT swa FROM indimi';
                $data = mysqli_query($conn, $query) ;


                if (!$data) {
                    echo("Error description: " . mysqli_error($mysqli));
                } else {

                    while ($row = mysqli_fetch_array($data)) {
                        echo  $row['swa']."<br>";
                     }
                 }
                
            }
?>

</td>
</tr>
</div>
<tr>
    <td class="inputtypes">        
<input type="submit" name="kinya" value="kinyarwanda">
<input type="submit" name="engl" value="english">
<input type="submit" name="fra" value="francais">
<input type="submit" name="swahi" value="swahili"> 
</td>
</tr>

</table>
   </form>
</center>
</body>
   
</html>
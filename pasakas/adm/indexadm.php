<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>
<?php 
    require_once('../config/database.php'); 
    require_once('../class/class.php'); 
    require_once('../class/realclass.php'); 
    $db = new operations();
    $realdb = new real();
    $result=$db->adview_record();
    $result2=$db->adview_record2();
    $result3=$db->adview_record3();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="../css/indexview.css">
    <title>view_Edit</title>
   
</head>
<body>  
                        <?php $db->Store_Record(); 
                        $dbname = "table1";
                        ?>
                        
                        <form method="POST" id="myForm">
                        <label for="cars">WEB saturs:</label>
  <select type="tet" name="category">
    <option value="Nenopietnas">nenopietnās</option>
    <option value="Sat[R]aucošās">satraucošās</option>
    <option value="Nesaprotamas">nesaprotamās</option>
    <option value="Pamācošās">pamācošās</option>
    <option></option>
  </select>
  <select type="tet" name="category1">
    <!-- <option value="Nopietnās">nopietnās</option> -->
    <option value="Nenopietnas">nenopietnās</option>
    <option value="Sat[R]aucošās">satraucošās</option>
    <!-- <option value="Romantiskās">romantiskās</option> -->
    <!-- <option value="Aktuālas">aktuālās</option> -->
    <!-- <option value="Garās">garās</option> -->
    <option value="Nesaprotamas">nesaprotamās</option>
    <!-- <option value="Īsās">īsās</option> -->
    <!-- <option value="Reliģiskās">reliģiskās</option> -->
    <option value="Pamācošās">pamācošās</option>
    <option></option>
  </select>
                            
                            <input type="text" name="author" placeholder="Autors">
                            <input type="text" name="text" placeholder="Nosaukums" required>
                            <input type="text" name="content" placeholder="Saturs" required>
                            <input type="text" name="link" placeholder="Links">
                        <button name="btn_save"> Save </button>
                        </form>
                        <br>



                        <?php $realdb->Store_vajres(); 
                      
                        ?>
                        
<form method="POST" id="myForm">
<label for="cars">Vajadzības:</label>
  <!-- <select type="tet" name="category">
    <option value="Pārtika">nenopietnās</option>
    <option value="Pajumte">satraucošās</option>
    <option value="Drošība">nesaprotamās</option>
    <option value="Pamācošās">pamācošās</option>
    <option></option>
  </select> -->

    
    <!-- <input type="text" name="vajres" placeholder="Vajadzības tips" required> -->
     <select type="tet" name="vajres">
    <option value="realvaj">Reālas vajadzības</option>
    <option value="izdvaj">Izdomātas vajadzības</option>
    <option value="konres">Konkrēti resursi</option>
    <option value="nores">Nosacīti resursi</option>
    <option></option>
  </select>
    <input type="text" name="vajresnos" placeholder="Vajadzības nosaukums" required>
    <input type="text" name="content" placeholder="Saturs" required>
        <button name="vajres_saves"> Save </button>
</form>
    <br>






    <?php                 
    $realdb->Store_Realque();           
    ?>
                        
    <form method="POST" id="myForm">
    <label for="cars">Jautājumi:</label>
    <select type="tet" name="jautajums">
        <option value="Kas notiek">Kas notiek</option>
        <option value="Kā tas notiek">Kā tas notiek</option>
        <option value="Ko darīt">Ko darīt</option>
        <option value="Kāpēc tas notiek (Kas vainīgs)">Kas vainīgs</option>
        <option value="Vai mēs kontrolējam mūsu emocijas">Vai mēs kontrolējam mūsu emocijas</option>
        <option value="Kas tagad būs">Kas tagd būs</option>
        <option></option>
    </select>
        <input type="text" name="atbilde" placeholder="atbilde" required>
        <input type="text" name="autors" placeholder="anonīms">
            <button name="realque_save"> Save </button>
    </form>
    <br>

    <?php                 
    $realdb->Store_facts();           
    ?>
                        
    <form method="POST" id="myForm">
    <label for="cars">Fakti:</label>
        <input type="text" name="facts" placeholder="fakts" required>
            <button name="facts_save"> Save </button>
    </form>
    <br>







                        <?php $db->Store_Comm(); ?>
                    <br>
                      
                        <table class="table-bordered">
                            <tr>
                                <td style="width: 0.5%"> ID </td>
                                <td style="width: 1%"> category </td>
                                <td style="width: 1%"> category1 </td>
                                <td style="width: 7%"> author </td>
                                <td> text </td>
                                <td> content </td>
                                <td style="width: 3%"> link </td>
                            </tr>
                            <tr>
                                <?php 
                                    while($data = mysqli_fetch_assoc($result))
                                    {
                                ?>
                                    
                    <td><div class="tdh"><?php echo $data['ID'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['category'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['category1'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['author'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['text'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['content'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['link'] ?></div></td>
                            </tr>
                            <?php
                                    }
                                ?>
                        </table>

<br>
                        <table class="table-bordered">
                            <tr>
                                <td style="width: 0.5%"> ID </td>
                                <td style="width: 6%"> Vārds </td>
                                <td> teksts </td>
                            </tr>
                            <tr>
                                <?php 
                                    while($data = mysqli_fetch_assoc($result2))
                                    {
                                ?>
                    <td><div class="tdh"><?php echo $data['comm_id'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['name'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['comm_text'] ?></div></td>
                            </tr>
                            <?php
                                    }
                                ?>
                        </table>

<br>

                        <table class="table-bordered">
                            <tr>
                                <td style="width: 0.5%"> ID </td>
                                <td style="width: 10%"> Sūtītājs </td>
                                <td> Ziņa </td>
                            </tr>
                            <tr>
                                <?php 
                                    while($data = mysqli_fetch_assoc($result3))
                                    {
                                ?>
                    <td><div class="tdh"><?php echo $data['id'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['zinnesis'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['zinaa'] ?></div></td>
                           </tr>
                            <?php
                                    }
                                ?>
                        </table>
<br>
          <div class="butn">
                       <button type="submit" onclick="location.href = 'view.php'"; class="batn" >pasakas</button>        
                       <button type="submit" onclick="location.href = 'viewcom.php'"; class="batn" >pasakasComm</button>        
                       <button type="submit" onclick="location.href = 'viewzina.php'"; class="batn" >zina</button>        
                       <button type="submit" onclick="location.href = 'viewresvaj.php'"; class="batn" >resursiVaj</button>        
                       <button type="submit" onclick="location.href = 'viewresvajcom.php'"; class="batn" >resursiVajComm</button>        
                       <button type="submit" onclick="location.href = 'viewque.php'"; class="batn" >jautājumi</button>        
                       <button type="submit" onclick="location.href = 'viewquecom.php'"; class="batn" >jautājumiComm</button>        
                       <button type="submit" onclick="location.href = 'viewfact.php'"; class="batn" >fakti</button>        
    
                                </div>
                                <br><br>
                       <a href="logout.php">Click here</a> to Logout. _
                       <a href="../launch/index.php">Click here</a> to Pasakas. _
                       <a href="../real/index.php">Click here</a> to Realitāte.
                    </body>
</html>
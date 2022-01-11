<?php 
require_once('./config/database.php');
require_once('./class/realclass.php'); 
$realdb = new real();
// $realdb->view_realvaj();
$result=$realdb->view_realvaj();
$result2=$realdb->view_izdvaj();
$result3=$realdb->view_konres();
$result4=$realdb->view_nosres();
$result5=$realdb->view_realque1();
$result6=$realdb->view_realque2();
$result7=$realdb->view_realque3();
$result8=$realdb->view_realque4();
$result9=$realdb->view_realque5();
$result10=$realdb->view_realque6();
// $result6 = $realdb->view_realque1atb();
$result77 = $realdb->view_facts();

if(isset($_GET['R_que']))
{
    global $db;
    $ID = $_GET['R_que'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>realitāte_MoS</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="JP">
  <meta content="" name="mindofspace">
  <meta content="" name="free">
  <link href="img/JP.JPG" rel="icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="./css/style.css" rel="stylesheet">
  <!-- <link href="./css/style1.css" rel="stylesheet"> -->
  <link href="./lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./lib/bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <script src="./js/main.js"></script>
</head>

<body id="body">

  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-double-up"></i></button>
  <!-- static top line -->
  <header id="header">
   <div class="container">
      <nav id="menu" class="menu">
         <a href="#body">[Sākums]</a>
         <a href="#about">Kā tas strādā</a>
         <a href="#needstit">Resursi&Vajadzības</a>
         <a href="#whatdo">Aktuāli jautājumi</a>
         <a href="#phy">Fakti</a>
         <a href="#slide">Bildes</a>
         <a href="#footer">Saziņa</a>
      </nav>
    </div>
  </header>
<!-- main informative block -->
  <div class="general">
    <div class="alf"></div>
    <div class="title">Interaktīvs pasākums savas vajadzību un resursu apzināšanai un mēģinājumiem
      tos salikt kopā iespējami labākajā veidā.
    </div>
    <div class="quote">"Ar dzīvi ir tāpat kā ar pasaku, nav svarīgi cik gara, svarīgi cik laba."</div>
    <div class="question">
      <br># šī ir daļa par dzīves <abbr title="domāts - praktisko">pragmatisko</abbr> pusi. Ja vēl nav skaidrs kas un kādēļ, jāiet uz <a href=../../mindofspace1/index.html>Pārdomu sadaļu</a>.
      <br># šeit ir nosauktas vārdā vajadzības un resursi to realizēšanai. Papildus apskatīti jautājumi -
      "kas notiek?", "ko darīt?", "kas vainīgs?". To visu apzinoties un pareizi saliekot kopā, <abbr title="lai kas tas arī būtu">pārējais</abbr> ir jau vienkārši.
      <br># zinātne nemeklē risinājumu, tā modelē notiekošo. Cilvēkiem ikdienā vajag atbildes uz jautājumu "ko darīt", nevis izpratni par modeļiem.
      <br># tad kad zinātne nepalīdz, cilvēki mēdz lietot Veselo saprātu. Veselais saprāts nekad neatsaka.
      

      <br></div>
     <div class="disc">&copy Attēlam nav pat ilustratīvas nozīmes.</div>
    <div><a class="poga1" href="#about">Kā tas strādā</a></div>
    <div><a class="poga2" href="../launch/index.php">labāk Pasakas</a></div>
  </div>

<!-- about -->
<div id="about" class="about">
  <h1>Kā tas strādā</h1><br>
  <hr><br><br>
  <div class="inlineblock">
    <input type="submit" value="Kas to var" id="kas" class="button"/>
    <input type="submit" value="Pamatojums" id="ka" class="button"/>
    <input type="submit" value="Kāpēc to darīt" id="kapec" class="button"/>
    <input type="submit" value="Praktiskā puse" id="kadaveida" class="button"/>
  </div>
  <div class="que"><i class="fa fa-question-circle-o" aria-hidden="true"></i></div>
    <div class="hide1">
        <p>- Apzinot SAVAS vajadzības un PIEEJAMOS resursus. -</p>
        <p>- Pieejamie resursi ir jānošķir no nepiejamajiem. Vienkārši. -</p>
        <p>- Savas vajadzības jānošķir no Svešo vajadzībām. Diezgan Nereāli. -</p>
        <p>- Vajadzība tiek apmierināta izmantojot resursus. Elementāra sistēma un fundamentāls princips - 
          mainot vienu elementu, otrs arī mainīsies. Noteikti.-</p>
        <p>- Resursu lietošana lai radītu vajadzību un pēc tam to apmierinātu,
          apskatīta netiek. Šeit nav gandrīz nekādu ierobežojumu, bet visam ir savas robežas. -</p>
    </div>  
    <div class="hide2">
        <p>- Cilvēks ir radīts kustībai. Kustība var radīt prieku un kustība var radīt sāpes. Kustība
          notiek, lai sasniegtu pilnīgu apgaismību vai mūžigo mieru, kas būtībā ir viens un tas pats. Ne Cilvēks
          pats to izvēlējās, un ne viņš tur ko var mainīt. -</p>
        <p>- Kustoties cilvēks var iegūt vairāk prieka nekā sāpju. -</p>s
        <p>- Ne vienmēr. Dažreiz. Bet var. -</p>
        <p>- Tāpēc ir vērts pamēģināt. -</p>
    </div> 
    <div class="hide3">
      <p>1. Jebkādā veidā, arī cilvēka godu un cieņu (lai kas tas arī būtu) aizskarošā veidā*.</p>
      <p>2. Atbildot uz saviem jautājumiem un uzdodot savus jautājumus. Tikai tā un tādā secībā.</p>
      <p>3. Jāatbild tikai uz uzdotiem jautājumiem. Katram ir tiesības nezināt, ko viņš negrib zināt**.</p><br>
      <p>3. Tā kā šeit visi fakti ir acīmredzami rakstītāju identitātei un izglītībai nav nozīmes un tā šeit neparādās.</p><br>
      <spin class="smals">*Savu godu un cieņu aizskarošā. Svešo godu un cieņu aizsargā likums, var sanākt dārgi.</spin>
      <div class="smals">**Mūsdienu sabiedrība to gan nepieļaus. Ir nepieciešamas masas, kurām nav "vienalga".</div>
    </div>
    <div class="hide4">
      <p>To var Jebkurš. Gandrīz jebkurš. Varbūt.</p>
      <p> Galvenais - PATS. Patstāvīgi. </p>
      <p> Citi aizvedīs tur kur viņiem izdevīgi. </p>
      <p> Svešie vispār nekur nevedīs. Atstās tepat. Tas ir vēl sliktāk. </p>
    </div>
  </div>
</div>

  
 <!-- select needs -->
 <div id="needstit" class="needstit">
  <div class="spontit">Daži piemēri praktiskai izmantošanai</div><br>
    <button id="needs1" class="spon1">Reālas vajadzības</button>
    <button id="needs2" class="spon2">Izdomātas vajadzības</button>
    <button id="spon1" class="spon3">Konkrētie resursi</button>
    <button id="spon2" class="spon4">Nosacītie resursi</button>
</div>
 <br>
 
 <!-- needs -->
 <div id="needs" class="needs">


  
  <div id="needsr" class="spong">
  <h1>Reālās vajadzības</h1><br>
    <?php
          while ($data = mysqli_fetch_assoc($result)) {
    ?>
      <a href="vajres.php?R_ID=<?php echo $data['vajresnos'] ?>"><div class="spongline"><i class="fa fa-life-ring" aria-hidden="true"></i> <?php echo $data['vajresnos']?></div></a>
    <?php      
    }
    ?>
   <br>
   <input type="submit" value="Aizvērt" id="aizvsp" class="button"/>
  </div>



  <div id="needsf" class="spong">
  <h1>Izdomātas vajadzības</h1><br>

    <?php
          while ($data = mysqli_fetch_assoc($result2)) {
    ?>
      <a href="vajres.php?R_ID=<?php echo $data['vajresnos'] ?>"><div class="spongline"><i class="fa fa-life-ring" aria-hidden="true"></i> <?php echo $data['vajresnos']?></div></a>
    <?php      
    }
    ?>
    <!-- <a href="./content/que1.php" target="_blank"><div class="spongline"><i class="fa fa-life-ring" aria-hidden="true"></i> KVALITATĪVAS LIETAS</div></a>
   <a href="./content/que1.php" target="_blank"><div class="spongline"><i class="fa fa-life-ring" aria-hidden="true"></i> PRIEKŠNIEKS</div></a>
   <a href="./content/que1.php" target="_blank"><div class="spongline"><i class="fa fa-life-ring" aria-hidden="true"></i> HOBIJI</div></a>
   <a href="./content/que1.php" target="_blank"><div class="spongline"><i class="fa fa-life-ring" aria-hidden="true"></i> SOCIĀLIE MEDIJI</div></a>
   <a href="./content/que1.php" target="_blank"><div class="spongline"><i class="fa fa-life-ring" aria-hidden="true"></i> KARJERA</div></a>
   <a href="./content/que1.php" target="_blank"><div class="spongline"><i class="fa fa-life-ring" aria-hidden="true"></i> PRESTIŽAS LIETAS</div></a> -->
   <br>
   <input type="submit" value="Aizvērt" id="aizvne" class="button"/>
  </div>

<!-- sponsors -->
<!-- <div id="spon" class="spon"> -->
  <div id="spong" class="spong">
  <h1>Cilvēka resursi</h1><br>

    <?php
          while ($data = mysqli_fetch_assoc($result3)) {
    ?>
      <a href="vajres.php?R_ID=<?php echo $data['vajresnos'] ?>"><div class="spongline"><i class="fa fa-life-ring" aria-hidden="true"></i> <?php echo $data['vajresnos']?></div></a>
    <?php      
    }
    ?>
   <!-- <a href="./content/que1.php" target="_blank"><div class="spongline"><i class="fa fa-life-ring" aria-hidden="true"></i> MIEGS</div></a> 
   <a href="./content/que1.php" target="_blank"><div class="spongline"><i class="fa fa-life-ring" aria-hidden="true"></i> Fiziskas aktivitātes</div></a> 
   <a href="./content/que1.php" target="_blank"><div class="spongline"><i class="fa fa-life-ring" aria-hidden="true"></i> SARUNAS</div></a> 
   <a href="./content/que1.php" target="_blank"><div class="spongline"><i class="fa fa-life-ring" aria-hidden="true"></i> REĀLI FAKTI</div></a> 
   <a href="./content/que1.php" target="_blank"><div class="spongline"><i class="fa fa-life-ring" aria-hidden="true"></i> ZINĀTNE</div></a> 
   <a href="./content/que1.php" target="_blank"><div class="spongline"><i class="fa fa-life-ring" aria-hidden="true"></i> MEDICĪNA</div></a> 
   <a href="./content/que1.php" target="_blank"><div class="spongline"><i class="fa fa-life-ring" aria-hidden="true"></i> MEDICĪNA</div></a>  -->
   <br>
   <input type="submit" value="Aizvērt" id="aizvsp" class="button"/>
  </div>
  <div id="sponk" class="spong">
    <h1>arī Cilvēka resursi</h1><br>
    <?php
          while ($data = mysqli_fetch_assoc($result4)) {
    ?>
      <a href="vajres.php?R_ID=<?php echo $data['vajresnos'] ?>"><div class="spongline"><i class="fa fa-life-ring" aria-hidden="true"></i> <?php echo $data['vajresnos']?></div></a>
    <?php      
    }
    ?>
   <!-- <a href="./content/que1.php" target="_blank"><div class="spongline"><i class="fa fa-life-ring" aria-hidden="true"></i> MEDITĀCIJA</div></a>
   <a href="./content/que1.php" target="_blank"><div class="spongline"><i class="fa fa-life-ring" aria-hidden="true"></i> TICĒJUMI</div></a>
   <a href="./content/que1.php" target="_blank"><div class="spongline"><i class="fa fa-life-ring" aria-hidden="true"></i> FANTĀZIJA</div></a>
   <a href="./content/que1.php" target="_blank"><div class="spongline"><i class="fa fa-life-ring" aria-hidden="true"></i> INTUĪCIJA</div></a>
   <a href="./content/que1.php" target="_blank"><div class="spongline"><i class="fa fa-life-ring" aria-hidden="true"></i> BAILES</div></a>
   <a href="./content/que1.php" target="_blank"><div class="spongline"><i class="fa fa-life-ring" aria-hidden="true"></i> DZĪVESPRIEKS</div></a> -->
   <br>
   <input type="submit" value="Aizvērt" id="aizvsp" class="button"/>
  </div>
 </div>

 <!-- what I do -->
 <div id="whatdo" class="whatdo">
  <h1>Šobrīd aktuāli jautājumi ar atbilžu variantiem</h1>

    <?php
          $data = mysqli_fetch_assoc($result5) 
    ?>

<a href="que1.php?R_que=<?php echo $data['jautajums'] ?>"> 
<div class="bloks">
  <div class="center">
      <h3><?php echo $data['jautajums'] ?></h3>
      <i class="fa fa-question-circle-o" style="font-size:18px"></i>
 </div>
<?php
          while ($data = mysqli_fetch_assoc($result5)) {
    ?>

      <p>- <?php echo $data['atbilde'] ?> -</p>
 </a>
 <?php      
    }
    ?>
</div>

<?php
          $data = mysqli_fetch_assoc($result6) 
    ?>
<a href="que1.php?R_que=<?php echo $data['jautajums'] ?>"> 
<div class="bloks">
  <div class="center">
      <h3><?php echo $data['jautajums'] ?></h3>
      <i class="fa fa-question-circle-o" style="font-size:18px"></i>
  </div>  
  <?php
          while ($data = mysqli_fetch_assoc($result6)) {
    ?>
      <p>- <?php echo $data['atbilde'] ?> -</p>
  </a>
  <?php      
    }
    ?>
</div>

<?php
          $data = mysqli_fetch_assoc($result7) 
    ?>
<a href="que1.php?R_que=<?php echo $data['jautajums'] ?>"> 
<div class="bloks">
  <div class="center">
      <h3><?php echo $data['jautajums'] ?></h3>
      <i class="fa fa-question-circle-o" style="font-size:18px"></i>
  </div>  
  <?php
          while ($data = mysqli_fetch_assoc($result7)) {
    ?>
      <p>- <?php echo $data['atbilde'] ?> -</p>
  </a>
  <?php      
    }
    ?>
</div>

<?php
          $data = mysqli_fetch_assoc($result8) 
    ?>
<a href="que1.php?R_que=<?php echo $data['jautajums'] ?>"> 
<div class="bloks">
  <div class="center">
      <h3><?php echo $data['jautajums'] ?></h3>
      <i class="fa fa-question-circle-o" style="font-size:18px"></i>
  </div>  
  <?php
          while ($data = mysqli_fetch_assoc($result8)) {
    ?>
      <p>- <?php echo $data['atbilde'] ?> -</p>
  </a>
  <?php      
    }
    ?>
</div>

<?php
          $data = mysqli_fetch_assoc($result9) 
    ?>
<a href="que1.php?R_que=<?php echo $data['jautajums'] ?>"> 
<div class="bloks">
  <div class="center">
      <h3><?php echo $data['jautajums'] ?></h3>
      <i class="fa fa-question-circle-o" style="font-size:18px"></i>
  </div>  
  <?php
          while ($data = mysqli_fetch_assoc($result9)) {
    ?>
      <p>- <?php echo $data['atbilde'] ?> -</p>
  </a>
  <?php      
    }
    ?>
</div>

<?php
          $data = mysqli_fetch_assoc($result10) 
    ?>
<a href="que1.php?R_que=<?php echo $data['jautajums'] ?>"> 
<div class="bloks">
  <div class="center">
      <h3><?php echo $data['jautajums'] ?></h3>
      <i class="fa fa-question-circle-o" style="font-size:18px"></i>
  </div>  
  <?php
          while ($data = mysqli_fetch_assoc($result10)) {
    ?>
      <p>- <?php echo $data['atbilde'] ?> -</p>
  
  <?php      
    }
    ?>
</div>
</a>
</div>






  <!-- phylosophy -->
  <div id="phy" class="phy">
   <div class="aks">Vispārzināmi fakti. Dažreiz liekas jēdzīgi.</div><br>
    <div class="fakts"><br>
    <p>- beigās būs Beigas;</p>
   <div id="aks" class="aks1">un Vēl daži fakti...</div>
   </div>


   <div id="fakti" class="fakti">

   
    <p>  
      <?php
          while ($data = mysqli_fetch_assoc($result77)) {
    ?>
    
     - <?php echo $data['facts'] ?>; //
    
    <?php      
    }
    ?>
    
  </p>



    <input type="submit" value="Aizvērt neapstrīdamos faktus" id="aizv" class="button"/>
   </div>

  </div>

  <!-- slideshow -->

  
<div id="slide" class="slide">
  <a class="lbutton" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
  <div class="centeri">Vizuālā informācija</div>
  <a class="rbutton" onclick="plusDivs(+1)"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
    <div id="slide" class="mySlides"><img src="./img/honey.jpg"></div>
    <div id="slide" class="mySlides"><span>Trying is the first step towards failure.</span></div>
    <div id="slide" class="mySlides"><span>The problem in the world today is communication… too much communication..</span></div>
    <div id="slide" class="mySlides"><span>“I am not young enough to know everything.” – Oscar Wilde</span></div>
    <div id="slide" class="mySlides"><span>Everyone seems normal until you get to know them.</span></div>
    <div id="slide" class="mySlides"><span>Always remember that if you’re no good, then you can still be used as a bad example.</span></div>
    <div id="slide" class="mySlides"><span>“Life is like riding a bicycle. To keep your balance, you must keep moving.”
      – Albert Einstein</span></div>
    <div id="slide" class="mySlides"><span>Wherever you go, there you are..</span></div>
    <div id="slide" class="mySlides"><img src="./img/Keep_it_simple2.jpg"></div>
</div>


  
  
 
  <div id="footer" class="footer">
    <!-- <div><div class="image"></div> -->
    <div class="footer-text-left">
      <a href="../adm/zina.php" class="menus">Saziņa</a>
      <a href="../real/index.php" class="menus">Pasakas</a>
      <a href="https://css.sammy-codes.com/credits.html" class="menus">šeit_nespiest</a>
      <a href="https://css.sammy-codes.com/credits.html" class="menus">Labāk_nezināt</a>
      <a href="https://css.sammy-codes.com/credits.html" class="menuss1"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
      <a href="https://css.sammy-codes.com/credits.html" class="menuss"><i class="fa fa-twitter" aria-hidden="true"></i></a>
      <a href="https://css.sammy-codes.com/credits.html" class="menuss"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
      <a href="https://css.sammy-codes.com/credits.html" class="menuss"><i class="fa fa-smile-o" aria-hidden="true"></i></a>
      

    </div>
    <!-- <div class="footer-content-right">
      <div class="footpic"><img src="../templatejp/img/github.jpeg" class="icon-style" alt="Github icon"></div>
    </div> -->

      <!-- <ul>
        <li><a href="https://twitter.com/julesforrest">Šeit_neklikšķināt</a></li>
        <li><a href="https://codepen.io/julesforrest">Uzrakstīt komentāru</a></li>
        <li><a href="mailto:putans.janis@gmail.com">Kas tas vispār ir</a></li>
        <li><a href="mailto:putans.janis@gmail.com">Pasakas</a></li>
      </ul> -->
    
  </div>
  <div class="fixed">
        <a href=../mostoppage/index.html><i class="fa fa-home fa-lg" style="font-size:36px"></i></a>
        </div> 
  <script src="js/main.js">
 
  </script>
</body>
</html>
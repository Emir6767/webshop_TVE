<?php
  error_reporting(-1);
  ini_set('display_errors','On');
  
//DB Settings
  include 'dbsettings.php';

//Verbindung zur Datenbank
$db = new PDO($dsn,$username,$password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$wasserpfeife ="SELECT * FROM produkte WHERE produktart='Wasserpfeife'";

$result = $db->query($wasserpfeife);

$phunnel= "SELECT * FROM produkte WHERE produktart='Phunnel'";

$result2 = $db->query($phunnel);

$smokebox= "SELECT * FROM produkte WHERE produktart='Smokebox'";

$result3 = $db->query($smokebox);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Artikel</title>
    <?php
      include 'head.php';
    ?>

</head>
<body>
  

  <div class="container">
    <div class="p-3 mb-2 bg-secondary text-white">
    <!-- Navigationsleiste einfügen -->
    
  <?php
    include 'navbar.php';
    ?>
      
      <!-- Tabelle mit Grid -->
      <hr>
  
      <h3>Wasserpfeifen</h3>
  
      <hr>
      <div class="row">
        <?php while($row = $result->fetch()):?>
          <div class="col">
            <?php
              include 'card.php';
            ?>
          </div>
        <?php endwhile;?>
      </div>
      <hr>
  
      <h3>Phunnel</h3>
  
      <hr>
      <div class="row">
        <?php while($row = $result2->fetch()):?>
          <div class="col">
            <?php
              include 'card.php';
            ?>
          </div>
        <?php endwhile;?>
      </div>
      <hr>
  
      <h3>Smokeboxen</h3>
          // HALL
      <hr>
      <div class="row">
        <?php while($row = $result3->fetch()):?>
          <div class="col">
            <?php
              include 'card.php';
            ?>
          </div>
        <?php endwhile;?>
      </div>
  
      </div>
  
    </div>
  </div>
</body>
</html>
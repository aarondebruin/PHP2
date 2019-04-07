  <?php

  $dropdown = $_POST['dropdown'];
  $Nummer1 = $_POST['Nummer1'];
  $Nummer2 = $_POST['Nummer2'];





  Include("Include/Gedeeld.php");
  Include("Include/Subtract.php");
  Include("Include/Keer.php");
  Include("Include/Plus.php");


  choice($dropdown, $Nummer1, $Nummer2);

  function choice($dropdown, $Nummer1, $Nummer2){
  switch ($dropdown) {
    case 'Gedeeld':
      echo Gedeeld($Nummer1,$Nummer2);
      break;

    case 'Keer':
      echo Keer($Nummer1,$Nummer2);
      break;

    case 'Subtract':
      echo Subtract($Nummer1,$Nummer2);
      break;

    case 'Plus':
      echo Plus($Nummer1,$Nummer2);
      break;

      default:
      echo "Iets ging verkeerd";
      break;

    }
  }


  ?>

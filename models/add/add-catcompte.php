<?php
require_once("../../connexion/connexion.php");
if(isset($_POST['enregistrer']))
{
    require_once('../../class/calss-catcompte.php');
   try
   {
    $catcmpt = new Catcompte();
    $catcmpt->setDesingation($_POST['desingation']);
    $catcmpt->insert();
    header("location:../../views/catcompte.php");
   }
   catch(Exception $e)
   {
     return $e;
   }
}
?>
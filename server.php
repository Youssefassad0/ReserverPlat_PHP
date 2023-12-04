
<?php
try{
    $con=new PDO("mysql:host=localhost;dbname=restauration",'root','');
}
catch(Exeception $E){
echo 'ERROR : '. $E;
}
?>

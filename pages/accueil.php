<?php
$query = 'select * from p_ville';
$result = $cnx-> query($query);

$data = $result->fetchAll();
//var_dump($data);
/*foreach($data as $d){
    print '<br>'.$d[]
}*/

$nbr=count($data);
for($i=0;$i<$nbr;$i++){
    print "<br>".$data[$i]['nom_ville']."(".$data[$i]['code_postal'].")";
}

print "branche ajout1";
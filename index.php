<?php


echo "here <br />";



try {
    $dbh = new PDO('mysql:host=sql2.freemysqlhosting.net;dbname=sql2351289', "sql2351289", "fS1*pC8%");
    var_dump($dbh);
} catch (\Throwable $th) {
    //throw $th;
    echo "cannot access mysql";
}


$res = $dbh->query("SELECT * FROM aihara");
$fetched = $res->fetch();
var_dump($fetched['name']);

?>
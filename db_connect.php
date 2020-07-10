

<?php
function db(){
    global $link;
    $link = mysqli_connect(“localhost”, “root”, “”, “tododb_270122”) or     die(“couldn’t connect to database”);
    return $link;
}
?>
<? php
if(isset($_POST['opacity'])){
    $opacity = $_POST['opacity'];
    $con = new mysqli($db_hostname, $db_username, $db_password, $db_databasename);
    $stmt = $con->prepare("UPDATE `opacity_tbl` SET `opacity` = ?");
    $stmt->bind_param("s", $color);
    $stmt->execute();
    $stmt->close();
}

?>


<?php
try {
$conn = new PDO('mysql:host=localhost;dbname=pizza149_magnus', "root", "");
    //$conn = new PDO('mysql:host=localhost;dbname=pizza149_magnus', "pizza149_site", "xolHq4!Sa4GI");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("set names utf8");
} catch (PDOException $erro) {
    echo "Erro na conexão:" . $erro->getMessage();
}

?>

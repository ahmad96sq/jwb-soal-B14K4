<?php 
 require 'confg.php';

if(isset($_POST["submit"])){
    $cas = $_POST["cashier"];
    $prod = $_POST["product"];
    $cat = $_POST["category"];
    $pri= $_POST["price"];
    
    $pro = "INSERT INTO product VALUES('', '$prod', '$pri', ' $cat', ' $cas')";
    mysqli_query($conn, $pro);
}
echo "  <script>
            alert('data berhasil ditambah !');
            document.location.href = 'index.php';
        </script>
    ";


?>
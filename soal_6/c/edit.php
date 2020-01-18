<?php 
	require 'confg.php';
	error_reporting(0);
	$id=$_GET['id'];

	$data_cashier = query("select * from cashier ");
    $data_category = query("select * from category");
	$pro = query("SELECT * FROM product WHERE id = $id")[0];
	// $data_cashier = query("SELECT * FROM cashier WHERE id = $id")[0];
 //    $data_category = query("SELECT * FROM category WHERE id = $id")[0];

		if(isset($_POST["submit"])){
			$idc = $_POST["id"];
		    $cas = $_POST["cashier"];
		    $prod = $_POST["product"];
		    $cat = $_POST["category"];
		    $pri= $_POST["price"];
		    // $pro = "UPDATE product SET('', '$prod', '$pri', ' $cat', ' $cas')";

		    $product = query("UPDATE product SET name = '$prod', price = '$pri', id_category = '$cat', id_cashier = '$cas' WHERE product.id = '$idc' ;");

		    // mysqli_query($conn, $product);
		    echo "  <script>
		            alert('data berhasil diubah !');
		            document.location.href = 'index.php';
		        </script>
		    ";
		}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    <nav>
        <a class="label" href="http://">
            <img src="img/logo.png" class="logo" alt="logo">
        </a>
        <div>
            <button class="btn" onclick="popUp()" type="submit">ADD</button>
        </div>
    </nav>

    
    <div id="popUp" class="firs" >
        <div class="kotak" >
        <form form action="" method="post">
            <span class="label-add">EDIT</span>
            <a href="index.php">
            <span class="label-x" onclick="popUp()">X</span>
            </a>
        	<input type="hidden" name="id" value="<?= $id ?>">
                
                <select class="form" name="cashier" id="">
                    <?php foreach($data_cashier as $p): ?>
                        <option value="<?=$p["id"];?>"><?=$p["name"];?></option>
                    <?php endforeach; ?>
                </select>

        
                <input type="text" name="product" class="form" placeholder="Masukkan Product" value="<?=$pro["name"];?>">
                
        
                <select class="form" name="category" id="">
                    <?php foreach($data_category as $p): ?>
                        <option value="<?=$p["id"];?>"><?=$p["name"];?></option>
                    <?php endforeach; ?>
                </select>

        
                <input type="text" name="price" class="form" placeholder="Masukkan Price" value="<?=$pro["price"];?>">

                <button class="tombol" type="submit" name="submit">EDIT</button>
        </form>
        
    </div>
    </div>
    
<script>
    function popUp(){
        document.getElementById('popUp').classList.toggle('hide');
    }
</script>
</body>
</html>
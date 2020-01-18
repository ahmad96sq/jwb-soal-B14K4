<?php   
    include_once('confg.php');
    
    $product = query("SELECT cashier.name, product.name, category.name, product.price, product.id
    FROM product LEFT JOIN cashier ON product.id_cashier=cashier.id 
    LEFT JOIN category ON product.id_category=category.id;");

    $data_cashier = query("select * from cashier");
    $data_category = query("select * from category");

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
        <div><input type="text" class="search" placeholder="search..."></div>
        <div>
            <button class="btn" onclick="popUp()" type="submit">ADD</button>
        </div>
    </nav>

    <div class="container">
        <table cellspacing="0" cellpadding="15">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Cashier</th>
                    <th>Product</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $num=1?>
            <?php foreach($product as $p): ?>
                <tr>
                    <td><?= $num++?></td>
                    <td><?=$p[0];?></td>
                    <td><?=$p[1];?></td>
                    <td><?=$p[2];?></td>
                    <td>Rp. <?=$p[3];?></td>
                    <td>
                        <a class="edit" href="edit.php?id=<?=$p["id"];?>"><img src="img/edit.png" alt="Edit"></a> 
                        <a class="delete" href="delete.php?id=<?=$p["id"];?>"><img src="img/bin.png" alt="Delete"></a> 
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div id="popUp" class="hide firs" >
        <div class="kotak" >
        <form action="tambah.php" method="post">
                <span class="label-add">ADD</span>
                <span class="label-x" onclick="popUp()">X</span>
                <select class="form" name="cashier" id="">
                    <?php foreach($data_cashier as $p): ?>
                        <option value="<?=$p["id"];?>"><?=$p["name"];?></option>
                    <?php endforeach; ?>
                </select>
                <input type="text" name="product" class="form" placeholder="Masukkan Product">
            
                <select class="form" name="category" id="">
                    <?php foreach($data_category as $p): ?>
                        <option value="<?=$p["id"];?>"><?=$p["name"];?></option>
                    <?php endforeach; ?>
                </select>

                <input type="text" name="price" class="form" placeholder="Masukkan Price">

                <button class="tombol" type="submit" name="submit">ADD</button>
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

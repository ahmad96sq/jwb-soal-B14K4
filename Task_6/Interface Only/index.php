


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
            <?php for($i=0;$i<=4;$i++): ?>
                <tr>
                    <td><?= $num++?></td>
                    <td>Raisa Andriana</td>
                    <td>GUDEG</td>
                    <td>Food</td>
                    <td>Rp. 45000</td>
                    <td>
                        <a class="edit" href=""><img src="img/edit.png" alt="Edit"></a> |
                        <a class="delete" href=""><img src="img/bin.png" alt="Delete"></a> 
                    </td>
                </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
    <div id="popUp" class="hide firs" >
        <div class="kotak" >
        <form action="tambah.php" method="post">
                <span class="label-add">ADD</span>
                <span class="label-x" onclick="popUp()">X</span>
                <select class="form" name="cashier" id="">
                   
                        <option value="">Raisa Andriana</option>
                 
                </select>
                <select class="form" name="cashier" id="">
                   
                        <option value="">Pevita Pearce</option>
                 
                </select>

                <input type="text" name="product" class="form" placeholder="Masukkan Product">
            
                <select class="form" name="category" id="">
                   
                        <option value="">Food</option>
                        <option value="">Drink</option>
                    
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
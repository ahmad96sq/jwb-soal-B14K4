<?php 

require 'confg.php';


$id = $_GET['id'];
//deleting the row from table
mysqli_query($conn, "DELETE FROM product WHERE id=$id");

echo "	<script>
			alert('data berhasil dihapus !');
			document.location.href = 'index.php';
		</script>
	";
?>


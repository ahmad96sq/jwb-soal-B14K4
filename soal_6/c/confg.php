<?php
    $conn = mysqli_connect("localhost", "root", "", "arkademy");

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);

        $rows =[];

        while($row = mysqli_fetch_array($result)){
            $rows[] = $row;
        }

        return $rows;
    }

    // function hapus($id){
    //     global $conn;
    //     mysqli_query($mysqli, "DELETE FROM product WHERE id=$id");
    // }

?>
<?php 


function query($query) {
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function cari($keyword, $type) 
{
    if ($type == "semua")
    {
        $query = "SELECT*FROM siswa
        WHERE nis LIKE '%$keyword%' OR 
        nama LIKE '%$keyword%' OR
        tempatlahir LIKE '%$keyword%' ";
         return query($query);
    }else{
        $query = "SELECT*FROM siswa WHERE 
        $type LIKE '%$keyword%'
        ";

        return query($query);

    }
}






?>
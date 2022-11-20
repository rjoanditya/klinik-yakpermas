<?php
$conn = mysqli_connect("localhost", "root", "", "dbklinik");

function query($query){
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];

    while( $row= mysqli_fetch_assoc($result)){
        $rows[]= $row;
       
    }

    return $rows;
}

function tambah($data){
    global $conn;
    $nama_poli = htmlspecialchars($_POST['nama_poli']);
    $nama_dokter = htmlspecialchars($_POST['nama_dokter']);
    $hari = htmlspecialchars($_POST['hari']);
    $jadwal = htmlspecialchars($_POST['jadwal']);
    
    $simpan = "INSERT INTO jadwal_dokter VALUES 
                ('','$nama_poli',
                '$nama_dokter',
                '$hari', 
                '$jadwal')";
       
    mysqli_query($conn, $simpan);

    return mysqli_affected_rows($conn);

    echo mysqli_error($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM jadwal_dokter WHERE id = $id");

    return mysqli_affected_rows($conn);
    
}

function cari($keyword){
    $query = "SELECT * FROM jadwal_dokter 
                WHERE 
                nama_dokter LIKE '%$keyword%' OR
                hari LIKE '%$keyword%'
                ";


    return query($query);
}

function edit($data){
    global $conn;
    $id = $data["id"];
    $nama_poli = htmlspecialchars($_POST['nama_poli']);
    $nama_dokter = htmlspecialchars($_POST['nama_dokter']);
    $hari = htmlspecialchars($_POST['hari']);
    $jadwal = htmlspecialchars($_POST['jadwal']);
  

    $query = "UPDATE jadwal_dokter SET 
            nama_poli = '$nama_poli',
            nama_dokter = '$nama_dokter',
            hari =  '$hari',
            jadwal = '$jadwal',
            
            WHERE id = $id";
       
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}



?>
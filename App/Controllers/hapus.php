<?php

require 'fungsi.php';

$id = $_GET["id"];

if( hapus ($id) > 0) {
    echo "
    <script> 
    alert ('berhasil dihapus');
    document.location.href = 'dokter.php';
    </script>
    ";
} else {
    echo "
    <script> 
    alert ('data gagal dihapus');
    document.location.href = 'dokter.php';
    </script>
    ";

}
echo mysqli_error($conn);
?>
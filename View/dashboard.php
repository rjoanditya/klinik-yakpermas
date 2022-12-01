<?php
require('../App/Controllers/Controller.php');
$baru = new Controller();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="assets/css/login.css"> -->
    <title>dashboard</title>
    <!-- link css -->
    <link rel="stylesheet" href="../assets/css/form.css">
</head>

<body id="body-pd">
<?php include 'sidebar.php'; ?>

    <!-- ======= MAIN-CONTENT ======= -->
    <div class="container">
        <!-- ============ HEADER START================= -->

        <div class="header">
            <table>
                <tr>
                    <td>
                        <marquee behavior="" direction="">
                            <h2>Klinik Yakpermas Banyumas</h2>
                        </marquee>
                    </td>
                    <td>
                        <img src="../assets/img/logo.png" alt="logo PYB">

                    </td>
                </tr>
            </table>
        </div>
        <!-- =============== HEADER END =============== -->
        <!-- =============== TITTLE FORM START ============== -->
        <div class="main">

            <h1 class="tittle">SELAMAT DATANG</h1>
            <p class="tittle">KLINIK YAKPERMAS BANYUMAS</p>
            <img src="../assets/img/logo puskesmas.png" alt="">
        </div>
        <script src="../assets/js/sidebar.js"></script>
</body>

</html>
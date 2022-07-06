<?php
session_start();    //start session
$user = $_SESSION['MEMBER'];
$role = $user['role'];
require_once 'koneksi_db.php';
// gunakan fungsi pdo
// $sql = 'SELECT * FROM gedung';
// $data = $dbh->query($sql);
require_once 'models/Gudang.php';
require_once 'models/Pemasok.php';
require_once 'models/Pembelian.php';
require_once 'models/Produk.php';
require_once 'models/Member.php';
require_once 'models/Detail_Beli.php';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        Website Pendataan Toko Minyak
    </title>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tailwind.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">

    <!-- ==== WOW JS ==== -->
    <script src="assets/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</head>

<body>
    <?php include_once 'src/header.php'; ?>

    <!-----------awal area link internal----------------->
    <?php
    $hal = $_GET['hal'];
    if ($hal == 'home') {
        include_once 'src/home.php';
    } else if (!empty($hal)) {
        include_once 'views/' . $hal . '.php';
    } else {
        include_once 'src/home.php';
    }
    ?>
    <!-----------akhir area link internal----------------->

    <!-- Contact Us Area Start -->
    <?php include_once 'src/contact.php'; ?>
    <!-- Contact Us Area End -->

    <!-- Footer Area Start -->
    <?php include_once 'src/footer.php'; ?>
    <!-- Footer Area End -->


    <!-- ====== All Scripts -->
    <script src="assets/js/main.js"></script>
    <script>
        // ==== for menu scroll
        const pageLink = document.querySelectorAll(".ud-menu-scroll");

        pageLink.forEach((elem) => {
            elem.addEventListener("click", (e) => {
                e.preventDefault();
                document.querySelector(elem.getAttribute("href")).scrollIntoView({
                    behavior: "smooth",
                    offsetTop: 1 - 60,
                });
            });
        });

        // section menu active
        function onScroll(event) {
            const sections = document.querySelectorAll(".ud-menu-scroll");
            const scrollPos =
                window.pageYOffset ||
                document.documentElement.scrollTop ||
                document.body.scrollTop;

            for (let i = 0; i < sections.length; i++) {
                const currLink = sections[i];
                const val = currLink.getAttribute("href");
                const refElement = document.querySelector(val);
                const scrollTopMinus = scrollPos + 73;
                if (
                    refElement.offsetTop <= scrollTopMinus &&
                    refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
                ) {
                    document
                        .querySelector(".ud-menu-scroll")
                        .classList.remove("active");
                    currLink.classList.add("active");
                } else {
                    currLink.classList.remove("active");
                }
            }
        }

        window.document.addEventListener("scroll", onScroll);
    </script>
</body>

</html>
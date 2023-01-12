<!DOCTYPE html>
<html lang="en">

<?php
include 'head.php';
?>

<body>
    <?php

    include 'header.php';
    include 'navigation.php';

    if (!isset($page)) {
        $page = 'home';
    }

    switch ($page) {
        case 'home':
            include './content/index_content.php';
            break;
        case 'about':
            include './content/about_content.php';
            break;
        case 'products':
            include './content/products_content.php';
            break;
        case 'store':
            include './content/store_content.php';
            break;
        default:
            header('Location: ./content/404.php');
            break;
    }
    include 'footer.php';
    ?>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <!-- <script src="js/scripts.js"></script> -->
</body>

</html>
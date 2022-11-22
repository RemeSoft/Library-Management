<?php include './server/database/connection.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './partials/head.php'?>
</head>

<body>
    <!-- ------------------------------------
            Header Section Start 
    ---------------------------- -->
    <?php include './partials/header.php'?>

    <!-- ------------------------------------
            Main Section Start 
    ---------------------------- -->
    <main id="main">
        <section id="left">
            <!-- >>>>>> Component navbar:vartical Start <<<<<<< -->
            <?php include './partials/vartical_nav.php'?>

        </section>

        <section id="center">
            <!-- >>>>>> Component Searchbar Start <<<<<<< -->
            <?php include './partials/searchbar.php'?>

            <!-- >>>>>> Component Sort Start <<<<<<< -->
            <?php include './partials/sort.php'?>

            <!-- >>>>>> Component Books Start <<<<<<< -->
            <?php include './partials/books_holder.php'?>

        </section>

        <section id="right">
            <!-- >>>>> Component Analytics Start <<<<<<< -->
            <?php include './partials/analytics.php'?>

            <!-- >>>>> Component Notification Start <<<<<<< -->
            <h3 class="section_title">Notification</h3>
            <?php include './partials/notifications.php'?>
        </section>
    </main>
    <script src="js/addProduct.js"></script>
</body>

</html>
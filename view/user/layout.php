<?php 
    $title = 'E-HOETANG | Debt Collector';
?>
<?php
$activePage = isset($_GET['page']) ? $_GET['page'] : 'ppinjaman';
?>
<?php
    ob_start();
    include 'user/user.css';
    $style = ob_get_clean();
?>

<?php ob_start(); ?>

<main class="container-content">
    <?php
        if (isset($url)) {
            include $url.'.php';
        }
        else {
            include 'home.php';
        }
    ?>
</main>
<?php $body = ob_get_clean(); ?>

<?php include 'view/master.php'; ?>
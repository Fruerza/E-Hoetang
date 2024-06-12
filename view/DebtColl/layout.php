<?php 
    $title = 'E-HOETANG | Debt Collector';
?>

<?php
    ob_start();
    include 'view/DebtColl/style.css';
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
<?php 
if (isset($_POST['submit'])) {
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
}
?>

<?php include("includes/head.php"); ?>

<?php require("includes/navigation.php"); ?>




<?php include("includes/footer.php"); ?>
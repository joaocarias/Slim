<?php include_once "inc/header.php"; ?>

<?php 
    
    if(isset($page)){
        include_once 'pages/' . $page . '.php';
    }

?>
            
<?php include_once "inc/footer.php"; ?>
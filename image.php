<?php 
    $nbPage = 1;
?>

<?php include ('header.php');?>

<div class="container">
    <section class="row">
        
        <div class="dessin col-xs-12 col-lg-12 col-sm-12 col-md-12">
            <p><a href="digitalart.php"><button type="button" class="btn btn-primary"> -- Retour à la galerie</button></a></p>
            <?php echo '<p><img src="'.$_GET['dessin'].'"/></p>'; ?>
        </div>
    </section>
    
</div>
<?php include ('footer.php');?>
<?php include 'includes/hlavicka.php' ?>
<div class="uk-section uk-section-xsmall">
    <div class="uk-text-center">
        <?php echo "<h3 class='nadpisy'> $page->title</h3>"; ?>
    </div>
</div>

<div class="uk-section uk-section-small pozadi_kontakt">
    <div class="uk-container uk-container-small">
        <div class="uk-flex uk-flex-center">
            <div class='uk-width-1-2  kontakt1'>

<?php foreach($page->kontakty as $k):?>
                <div>
                    <p><span class='ikony' uk-icon="icon: <?php echo $k->title ?>; ratio: 1.7"></span> <?php echo $k->cena ?> </p>
                </div>
               
<?php endforeach ?>
            </div>
            <div class='uk-width-1-2'>
            
                
            <?php echo $page->obsah; ?>




            </div>
        </div>
    </div>
</div>




<div class="uk-section uk-section-medium ">
    <div class="uk-container">
        <div class="uk-flex uk-flex-center">
            <?php echo $page->mapa; ?>

        </div>
    </div>
</div>


<?php include 'includes/paticka.php' ?>
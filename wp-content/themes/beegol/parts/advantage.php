<?php
    extract( $args );
    $classes = 'col-lg-4 col-md-6 col-xs-12 advantages__col';
    
    if( is_page( 5 ) ){
        $classes = 'col-md-6 col-xl-3 advantages__col';
    }
?>

<div class="<?php echo $classes; ?>">
    <div class="advantage">
        <div class="advantage__number">
        
        </div>
        <h4 class="advantage__title">
            <?php echo $title; ?>
        </h4>
        <p class="advantage__text">
            <?php echo $description; ?>
        </p>
    </div>
</div>
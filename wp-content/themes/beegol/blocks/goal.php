<?php
    $block_fields = get_field( 'block_fields' );
?>

<?php if( !empty( $block_fields ) ): ?>
    
    <section class="goal block">
        <div class="container">
            <div class="row goal__row">
                <?php if( !empty( $block_fields['title'] ) ): ?>
                    <div class="col-md-6 goal__col">
                        <h1 class="goal__title">
                            <?php echo $block_fields['title']; ?>
                        </h1>
                    </div>
                <?php endif; ?>
                <?php if( !empty( $block_fields['description'] ) ): ?>
                    <div class="col-md-6 goal__col">
                        <p class="goal__text">
                            <?php echo $block_fields['description']; ?>
                        </p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php endif; ?>
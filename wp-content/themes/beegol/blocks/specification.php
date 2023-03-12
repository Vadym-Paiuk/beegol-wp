<?php
    $block_fields = get_field( 'block_fields' );
?>

<?php if( !empty( $block_fields ) ): ?>
    <section class="specification block">
        <div class="container">
            <div class="row specification__row">
                <div class="col-lg-6 specification__col">
                    <?php if( !empty( $block_fields['title'] ) ): ?>
                        <h1 class="specification__title">
                            <?php echo $block_fields['title']; ?>
                        </h1>
                    <?php endif; ?>
                    
                    <?php if( !empty( $block_fields['description'] ) ): ?>
                        <p class="specification__text">
                            <?php echo $block_fields['description']; ?>
                        </p>
                    <?php endif; ?>
                    
                    <?php if( !empty( $block_fields['button'] ) ): ?>
                        <a href="<?php echo $block_fields['button']['url']; ?>" class="btn btn--white" target="<?php echo $block_fields['button']['target']; ?>">
                            <?php echo $block_fields['button']['title']; ?>
                            <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 10.59L4.94467 6L0 1.41L1.52227 0L8 6L1.52227 12L0 10.59Z" fill="currentColor"/>
                            </svg>
                        </a>
                    <?php endif; ?>
                    
                </div>
                <?php if( !empty( $block_fields['image'] ) ): ?>
                    <div class="col-lg-6 specification__col">
                        <?php echo wp_get_attachment_image( $block_fields['image'], 'full', false, [ 'class' => 'specification__img' ] ); ?>
                    </div>
                <?php endif; ?>
                
            </div>
        </div>
    </section>
<?php endif; ?>
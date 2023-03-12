<?php
    $block_fields = get_field( 'block_fields' );
?>

<?php if( !empty( $block_fields ) ): ?>
    <section class="more block">
        <div class="container">
            <div class="row more__row">
                <div class="col-auto more__col">
                    <?php if( !empty( $block_fields['title'] ) ): ?>
                        <h2 class="more__title">
                            <?php echo $block_fields['title']; ?>
                        </h2>
                    <?php endif; ?>
                    <?php if( !empty( $block_fields['subtitle'] ) ): ?>
                        <p class="more__subtitle">
                            <?php echo $block_fields['subtitle']; ?>
                        </p>
                    <?php endif; ?>
                </div>
                <?php if( !empty( $block_fields['button'] ) ): ?>
                    <div class="col-auto more__col">
                        <a href="<?php echo $block_fields['button']['url']; ?>" class="btn btn--white more__btn" target="<?php echo $block_fields['button']['target']; ?>">
                            <?php echo $block_fields['button']['title']; ?>
                            <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 10.59L4.94467 6L0 1.41L1.52227 0L8 6L1.52227 12L0 10.59Z" fill="currentColor"/>
                            </svg>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
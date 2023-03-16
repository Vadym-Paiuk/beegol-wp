<?php
    $block_fields = get_field( 'block_fields' );
?>

<?php if( !empty( $block_fields['list'] ) ): ?>
    
    <section class="history block">
        <div class="container">
            <div class="history__preview">
                <?php if( !empty( $block_fields['title'] ) ): ?>
                    <h2 class="history__title">
                        <?php echo $block_fields['title']; ?>
                    </h2>
                <?php endif; ?>
                <?php if( !empty( $block_fields['description'] ) ): ?>
                    <p class="history__description">
                        <?php echo $block_fields['description']; ?>
                    </p>
                <?php endif; ?>
            </div>
            <div class="history__list">
                <?php
                    foreach ( $block_fields['list'] as $history ) {
                        $args = [
                            'title' => $history['title'],
                            'year' => $history['year'],
                            'image' => $history['image']
                        ];
                        get_template_part( 'parts/history', null, $args );
                    }
                ?>
            </div>
        </div>
    </section>

<?php endif; ?>
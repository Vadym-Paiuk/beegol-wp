<?php
    $block_fields = get_field( 'block_fields' );
?>

<?php if( !empty( $block_fields['list'] ) ): ?>
    
    <section class="experience block">
        <div class="container">
            <?php if( !empty( $block_fields['title'] ) ): ?>
                <h2 class="experience__title">
                    <?php echo $block_fields['title']; ?>
                </h2>
            <?php endif; ?>
            <div class="row experience__row">
                <?php
                    foreach ( $block_fields['list'] as $experience ) {
                        $args = [
                            'title' => $experience['title'],
                            'image' => $experience['image'],
                            'description' => $experience['description']
                        ];
                        get_template_part( 'parts/experience', null, $args );
                    }
                ?>
            </div>
        </div>
    </section>
    
<?php endif; ?>
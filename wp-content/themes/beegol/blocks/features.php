<?php
    $block_fields = get_field( 'block_fields' );
?>

<?php if( !empty( $block_fields['list'] ) ): ?>
    <section class="block features">
        <div class="container">
            <div class="features__list">
                <?php
                    foreach ( $block_fields['list'] as $feature ) {
                        $args = [
                            'tag' => $feature['tag'],
                            'title' => $feature['title'],
                            'features' => $feature['features'],
                            'image' => $feature['image'],
                            'image_style' => $feature['image_style'],
                            'button' => $feature['button']
                        ];
                        get_template_part( 'parts/feature', null, $args );
                    }
                ?>
            </div>
        </div>
    </section>
<?php endif; ?>
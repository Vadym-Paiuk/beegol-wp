<?php
    $block_fields = get_field( 'block_fields' );
?>

<?php if( !empty( $block_fields['list'] ) ): ?>
    
    <section class="team block">
        <div class="container">
            <?php if( !empty( $block_fields['title'] ) ): ?>
                <h2 class="team__title">
                    <?php echo $block_fields['title']; ?>
                </h2>
            <?php endif; ?>
            <div class="row team__row team__row--team">
                <?php
                    foreach ( $block_fields['list'] as $team ){
                        $args = [
                            'image' => $team['image'],
                            'name' => $team['name'],
                            'position' => $team['position'],
                        ];
                        get_template_part( 'parts/team', null, $args );
                    }
                ?>
            </div>
            <div class="row team__row">
                <?php if( !empty( $block_fields['title'] ) ): ?>
                    <div class="col-sm-5 col-md-6 team__col">
                        <h2 class="team__title">
                            <?php echo $block_fields['title']; ?>
                        </h2>
                    </div>
                <?php endif; ?>
                <?php if( !empty( $block_fields['description'] ) ): ?>
                    <div class="col-sm-7 col-md-6 team__col">
                        <p class="team__text">
                            <?php echo $block_fields['description']; ?>
                        </p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php endif; ?>
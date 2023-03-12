<?php
    add_action('acf/init', 'beegol_acf_blocks_init');
    function beegol_acf_blocks_init() {
        
        // Check function exists.
        if( function_exists('acf_register_block_type') ) {
            
            acf_register_block_type(array(
                'name'              => 'promo',
                'title'             => __('Promo'),
                'description'       => __('Promo Block.'),
                'render_template'   => 'blocks/promo.php',
                'category'          => 'custom_blocks',
                'render_callback'   => 'block_render',
                'mode'              => 'edit'
            ));
            
            acf_register_block_type(array(
                'name'              => 'advantages',
                'title'             => __('Advantages'),
                'description'       => __('Advantages Block.'),
                'render_template'   => 'blocks/advantages.php',
                'category'          => 'custom_blocks',
                'render_callback'   => 'block_render',
                'mode'              => 'edit'
            ));
            
            acf_register_block_type(array(
                'name'              => 'features',
                'title'             => __('Features'),
                'description'       => __('Features Block.'),
                'render_template'   => 'blocks/features.php',
                'category'          => 'custom_blocks',
                'render_callback'   => 'block_render',
                'mode'              => 'edit'
            ));
            
            acf_register_block_type(array(
                'name'              => 'cta',
                'title'             => __('CTA'),
                'description'       => __('CTA Block.'),
                'render_template'   => 'blocks/cta.php',
                'category'          => 'custom_blocks',
                'render_callback'   => 'block_render',
                'mode'              => 'edit'
            ));
            
            acf_register_block_type(array(
                'name'              => 'contact-us',
                'title'             => __('Contact us'),
                'description'       => __('Contact us Block.'),
                'render_template'   => 'blocks/contact-us.php',
                'category'          => 'custom_blocks',
                'render_callback'   => 'block_render',
                'mode'              => 'edit'
            ));
            
            acf_register_block_type(array(
                'name'              => 'locations',
                'title'             => __('Locations'),
                'description'       => __('Locations Block.'),
                'render_template'   => 'blocks/locations.php',
                'category'          => 'custom_blocks',
                'render_callback'   => 'block_render',
                'mode'              => 'edit'
            ));
            
            acf_register_block_type(array(
                'name'              => 'specification',
                'title'             => __('Specification'),
                'description'       => __('Specification Block.'),
                'render_template'   => 'blocks/specification.php',
                'category'          => 'custom_blocks',
                'render_callback'   => 'block_render',
                'mode'              => 'edit'
            ));
            
            acf_register_block_type(array(
                'name'              => 'experience',
                'title'             => __('Experience'),
                'description'       => __('Experience Block.'),
                'render_template'   => 'blocks/experience.php',
                'category'          => 'custom_blocks',
                'render_callback'   => 'block_render',
                'mode'              => 'edit'
            ));
            
            acf_register_block_type(array(
                'name'              => 'goal',
                'title'             => __('Goal'),
                'description'       => __('Goal Block.'),
                'render_template'   => 'blocks/goal.php',
                'category'          => 'custom_blocks',
                'render_callback'   => 'block_render',
                'mode'              => 'edit'
            ));
            
            acf_register_block_type(array(
                'name'              => 'history',
                'title'             => __('History'),
                'description'       => __('History Block.'),
                'render_template'   => 'blocks/history.php',
                'category'          => 'custom_blocks',
                'render_callback'   => 'block_render',
                'mode'              => 'edit'
            ));
            
            acf_register_block_type(array(
                'name'              => 'team',
                'title'             => __('Team'),
                'description'       => __('Team Block.'),
                'render_template'   => 'blocks/team.php',
                'category'          => 'custom_blocks',
                'render_callback'   => 'block_render',
                'mode'              => 'edit'
            ));
            
            acf_register_block_type(array(
                'name'              => 'contact',
                'title'             => __('Contact'),
                'description'       => __('Contact Block.'),
                'render_template'   => 'blocks/contact.php',
                'category'          => 'custom_blocks',
                'render_callback'   => 'block_render',
                'mode'              => 'edit'
            ));
            
        }
    }
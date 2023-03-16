<?php
    register_nav_menus( array(
        'primary-menu' => 'Top Menu',
        'bottom-menu' => 'Bottom Menu'
    ) );
    
    add_theme_support( 'post-thumbnails' );
    
    set_post_thumbnail_size( 300, 200 );
    
    if ( function_exists( 'acf_add_options_page' ) ) {
        acf_add_options_page();
    }
    
    add_filter( 'upload_mimes', 'svg_upload_allow' );
    
    function svg_upload_allow( $mimes ) {
        $mimes['svg']  = 'image/svg+xml';
        
        return $mimes;
    }
    
    add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );
    
    function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){
        
        if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
            $dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
        else
            $dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );
        if( $dosvg ){
            if( current_user_can('manage_options') ){
                
                $data['ext']  = 'svg';
                $data['type'] = 'image/svg+xml';
            }
            else {
                $data['ext'] = $type_and_ext['type'] = false;
            }
            
        }
        
        return $data;
    }
    
    add_filter('wpcf7_autop_or_not', '__return_false');
    
    /**
     * Gets an HTML img element representing an image attachment.
     *
     * While `$size` will accept an array, it is better to register a size with
     * add_image_size() so that a cropped version is generated. It's much more
     * efficient than having to find the closest-sized image and then having the
     * browser scale down the image.
     *
     * @since 2.5.0
     * @since 4.4.0 The `$srcset` and `$sizes` attributes were added.
     * @since 5.5.0 The `$loading` attribute was added.
     * @since 6.1.0 The `$decoding` attribute was added.
     *
     * @param int          $attachment_id Image attachment ID.
     * @param string|int[] $size          Optional. Image size. Accepts any registered image size name, or an array
     *                                    of width and height values in pixels (in that order). Default 'thumbnail'.
     * @param bool         $icon          Optional. Whether the image should be treated as an icon. Default false.
     * @param string|array $attr {
     *     Optional. Attributes for the image markup.
     *
     *     @type string       $src      Image attachment URL.
     *     @type string       $class    CSS class name or space-separated list of classes.
     *                                  Default `attachment-$size_class size-$size_class`,
     *                                  where `$size_class` is the image size being requested.
     *     @type string       $alt      Image description for the alt attribute.
     *     @type string       $srcset   The 'srcset' attribute value.
     *     @type string       $sizes    The 'sizes' attribute value.
     *     @type string|false $loading  The 'loading' attribute value. Passing a value of false
     *                                  will result in the attribute being omitted for the image.
     *                                  Defaults to 'lazy', depending on wp_lazy_loading_enabled().
     *     @type string       $decoding The 'decoding' attribute value. Possible values are
     *                                  'async' (default), 'sync', or 'auto'.
     * }
     * @return string HTML img element or empty string on failure.
     */
    function wp_get_attachment_image_custom( $attachment_id, $size = 'thumbnail', $icon = false, $attr = '' ) {
        $html  = '';
        $image = wp_get_attachment_image_src( $attachment_id, $size, $icon );
        
        if ( $image ) {
            list( $src, $width, $height ) = $image;
            
            $attachment = get_post( $attachment_id );
            //$hwstring   = image_hwstring( $width, $height );
            $size_class = $size;
            
            if ( is_array( $size_class ) ) {
                $size_class = implode( 'x', $size_class );
            }
            
            $default_attr = array(
                'src'      => $src,
                'class'    => "attachment-$size_class size-$size_class",
                'alt'      => trim( strip_tags( get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) ) ),
                'decoding' => 'async',
            );
            
            // Add `loading` attribute.
            if ( wp_lazy_loading_enabled( 'img', 'wp_get_attachment_image' ) ) {
                $default_attr['loading'] = wp_get_loading_attr_default( 'wp_get_attachment_image' );
            }
            
            $attr = wp_parse_args( $attr, $default_attr );
            
            // If the default value of `lazy` for the `loading` attribute is overridden
            // to omit the attribute for this image, ensure it is not included.
            if ( array_key_exists( 'loading', $attr ) && ! $attr['loading'] ) {
                unset( $attr['loading'] );
            }
            
            // Generate 'srcset' and 'sizes' if not already present.
            if ( empty( $attr['srcset'] ) ) {
                $image_meta = wp_get_attachment_metadata( $attachment_id );
                
                if ( is_array( $image_meta ) ) {
                    $size_array = array( absint( $width ), absint( $height ) );
                    $srcset     = wp_calculate_image_srcset( $size_array, $src, $image_meta, $attachment_id );
                    $sizes      = wp_calculate_image_sizes( $size_array, $src, $image_meta, $attachment_id );
                    
                    if ( $srcset && ( $sizes || ! empty( $attr['sizes'] ) ) ) {
                        $attr['srcset'] = $srcset;
                        
                        if ( empty( $attr['sizes'] ) ) {
                            $attr['sizes'] = $sizes;
                        }
                    }
                }
            }
            
            /**
             * Filters the list of attachment image attributes.
             *
             * @since 2.8.0
             *
             * @param string[]     $attr       Array of attribute values for the image markup, keyed by attribute name.
             *                                 See wp_get_attachment_image().
             * @param WP_Post      $attachment Image attachment post.
             * @param string|int[] $size       Requested image size. Can be any registered image size name, or
             *                                 an array of width and height values in pixels (in that order).
             */
            $attr = apply_filters( 'wp_get_attachment_image_attributes', $attr, $attachment, $size );
            
            $attr = array_map( 'esc_attr', $attr );
            $html = rtrim( "<img" );
            
            foreach ( $attr as $name => $value ) {
                $html .= " $name=" . '"' . $value . '"';
            }
            
            $html .= ' />';
        }
        
        /**
         * Filters the HTML img element representing an image attachment.
         *
         * @since 5.6.0
         *
         * @param string       $html          HTML img element or empty string on failure.
         * @param int          $attachment_id Image attachment ID.
         * @param string|int[] $size          Requested image size. Can be any registered image size name, or
         *                                    an array of width and height values in pixels (in that order).
         * @param bool         $icon          Whether the image should be treated as an icon.
         * @param string[]     $attr          Array of attribute values for the image markup, keyed by attribute name.
         *                                    See wp_get_attachment_image().
         */
        return apply_filters( 'wp_get_attachment_image', $html, $attachment_id, $size, $icon, $attr );
    }
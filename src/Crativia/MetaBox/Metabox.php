<?php

namespace Crativia\MetaBox;

interface Metabox{

    /**
     * Register - Method registers a metabox actions
     * 
     * @since 1.0.0
     */    
    public static function register();

    /**
     * Build - Method build the metabox UIs
     * 
     * @since 1.0.0
     */    
    public static function build();

}
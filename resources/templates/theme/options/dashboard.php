<?php 
    global $hook_suffix;
    /* enable add_meta_boxes function in this page. */
    do_action( 'add_meta_boxes', $hook_suffix ); 
        
?>   

<div class="wrap">

    <h1><?php echo __("Crativia Theme Settings","crativia") ?></h1>

    <?php settings_errors(); ?>

    <!-- Welcome Screen -->
    <div class="crativia-welcome-screen">
        <div class="crativia-screen-title">
            <h3><?php echo esc_html__( "Welcome to Crativia WordPress Theme", "crativia") ?></h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
            dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
            sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
    <!-- Theme Settings -->
    <!-- https://shellcreeper.com/wp-settings-meta-box/ -->
    <div class="crativia-metabox-wrap">
    
        <?php $columns = (get_current_screen()->get_columns() == 1)?  '1' : '2'; ?>
        <div class="metabox-holder columns-<?php echo $columns; ?>">

            <!-- postbox container 1 -->
            <div id="postbox-container-1" class="postbox-container">

                <?php do_meta_boxes( $hook_suffix, 'normal', null ); ?>
            

            </div>

            <div id="postbox-container-2" class="postbox-container">

                <?php do_meta_boxes( $hook_suffix, 'side', null ); ?>
            

            </div>

        </div>

    </div>

</div>
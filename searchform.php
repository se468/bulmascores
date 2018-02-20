<?php
/**
 * The template for displaying search forms in Underscores.me
 *
 * @package bulmascores
 */

?>

<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
    <div class="field has-addons">
        <div class="control">
            <input class="input" type="text" placeholder="<?php esc_attr_e( 'Search &hellip;' ); ?>" id="s" name="s" >
        </div>
        <div class="control">
            <button type="submit" class="button is-info" name="submit">
                Search
            </button>
        </div>
    </div>
</form>

<?php 
/*
* Pagination
*/
    if ( ! defined( 'ABSPATH' ) ) die();
    
    $items = paginate_links(array( 'type' => 'array', 'prev_text' => '&laquo;', 'next_text' => '&raquo;' )); 

    if( empty( $items ) )
        return;

    $new_items = str_replace( 'page-numbers', 'page-link', $items );
?>

<nav aria-label="Page navigation example">
    <ul class="pagination pagination-blog justify-content-center">

        <?php foreach( $new_items as $item ) : ?>

            <li class="page-item<?php if( strpos( $item, 'current' ) !== false ) echo ' active'; ?>">
                <?php echo $item; ?>
            </li>

        <?php endforeach; ?>

    </ul>
</nav>
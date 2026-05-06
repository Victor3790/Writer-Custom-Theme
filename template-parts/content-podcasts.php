<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Writer_Custom
 */

if ( ! defined( 'ABSPATH' ) ) die();

$current_post_id = get_the_ID();

?>
    <div class="d-flex align-items-center podcast-list">
        <div class="icon-stack icon-stack-xl text-white flex-shrink-0">
            <a href="<?php esc_url( the_permalink() ); ?>">
                <img class=" card-img-top" src="<?php esc_url( the_post_thumbnail_url() ); ?>">
            </a>
        </div>
        <div class="col ms-4">
            <a href="<?php esc_url( the_permalink() ); ?>">
                <h6 class="text-dark"><?php the_title(); ?></h6>
            </a>
            <p class="card-text text-gray-600 d-none d-lg-block small"><?php the_excerpt(); ?></p>
            <p class="card-text text-gray-600 small">
                Fecha: <?php echo esc_html(get_field( 'fecha' )); ?><br>
                Duración: <?php echo esc_html( get_field( 'duracion' )); ?>
            </p>
        </div>   
    </div>

<hr class="mb-5" />

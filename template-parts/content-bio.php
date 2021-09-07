<?php
/**
 * Template part for displaying the writers biography
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Writer_Custom
 */
?>

<section class="bg-white pb-10">
    <div class="container px-5 pt-5">
        <div class="d-flex align-items-center justify-content-between">
            <h2 class="mb-0"><?php the_title(); ?></h2>
        </div>
        <hr class="mb-4">
        <div class="row gx-5">
            <div class="col-md-8">
                <div class="row gx-5">
                    <div class="col-md-4">
                        <a class="card card-portfolio mb-5" target="_blank" href="<?php echo $imgs['pic_1']['url']; ?>">
                            <img 
                                class="card-img-top" 
                                src="<?php echo $imgs['pic_1']['url']; ?>" 
                                alt="<?php echo $imgs['pic_1']['alt']; ?>"
                            >                    
                        </a>
                        <a class="card card-portfolio mb-5" target="_blank" href="<?php echo $imgs['pic_2']['url']; ?>">
                            <img 
                                class="card-img-top" 
                                src="<?php echo $imgs['pic_2']['url']; ?>" 
                                alt="<?php echo $imgs['pic_2']['alt']; ?>"
                            >                    
                        </a>
                    </div>
                    <div class="col-md-4">
                    <a class="card card-portfolio mb-5" target="_blank" href="<?php echo $imgs['pic_3']['url']; ?>">
                            <img 
                                class="card-img-top" 
                                src="<?php echo $imgs['pic_3']['url']; ?>" 
                                alt="<?php echo $imgs['pic_3']['alt']; ?>"
                            >                    
                        </a>
                        <a class="card card-portfolio mb-5" target="_blank" href="<?php echo $imgs['pic_4']['url']; ?>">
                            <img 
                                class="card-img-top" 
                                src="<?php echo $imgs['pic_4']['url']; ?>" 
                                alt="<?php echo $imgs['pic_4']['alt']; ?>"
                            >                    
                        </a>
                    </div>
                    <div class="col-md-4">
                    <a class="card card-portfolio mb-5" target="_blank" href="<?php echo $imgs['pic_5']['url']; ?>">
                            <img 
                                class="card-img-top" 
                                src="<?php echo $imgs['pic_5']['url']; ?>" 
                                alt="<?php echo $imgs['pic_5']['alt']; ?>"
                            >                    
                        </a>
                        <a class="card card-portfolio mb-5" target="_blank" href="<?php echo $imgs['pic_6']['url']; ?>">
                            <img 
                                class="card-img-top" 
                                src="<?php echo $imgs['pic_6']['url']; ?>" 
                                alt="<?php echo $imgs['pic_6']['alt']; ?>"
                            >                    
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">                        
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>

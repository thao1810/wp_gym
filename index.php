<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
<?php
        if ( is_active_sidebar( 'sidebar-header' ) ) : ?>
        
            <div class="category-product" style= "margin-top:-265px">
                <?php dynamic_sidebar( 'sidebar-header' ); ?>
            </div><!-- .widget-area -->
        
        <?php endif; ?>
<!-- Product Start -->

<div class="product">
    <div class="tab-bar">
        <!-- <button class="btn active" id="all">Top sellers</button>
        <button class="btn" id="featured">Featured</button>
        <button class="btn" id="most-review">Most reviews</button> -->
        <button class="btn" onclick="openCity(event, 'Topsellers')">Top sellers</button>
        <button class="btn" onclick="openCity(event, 'Featured')">Featured</button>
        <button class="btn" onclick="openCity(event, 'Most reviews')">Most reviews</button>
        
    </div>

    <hr class="hr-style" />


    <div id="Topsellers" class="tabcontent"style="display:flex">
        <!-- <div id="tab1" class="tabcontent"></div>
        <div id="tab2" class="tabcontent"></div>
        <div id="tab3" class="tabcontent"></div> -->
        <?php $args = array( 'post_type' => 'product','posts_per_page' => 8,'product_cat' => 'Top sellers'); ?>
        <?php $getposts = new WP_query( $args);?>
        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
        <?php global $product; ?>
        
        <div class="product-item-wrap ">
            
            
            <div class="product-item-inner">
                <div class="product-item-inner__img">
                <a href="<?php the_permalink(); ?>">
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'thumnail') ); ?>
                </a>   
                </div>
                <div class="product-item-inner__text">
                    <div class="product-item-inner__text--name">
                        <p><?php the_title(); ?></p>
                        <p><?php echo $product->get_price_html(); ?></p>
                        <!--<a href="<?php bloginfo('url'); ?>?add-to-cart=<?php the_ID(); ?>">Thêm vào giỏ</a> -->
                    </div>
                </div>
            </div>
            <ul class="list-icon">
                <li>
                    <a href="#"><i class="fas fa-shopping-basket"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-eye"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-heart"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-exchange-alt"></i></a>
                </li>
            </ul>
        </div>
       
        
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
    <div id="Featured" class="tabcontent" style="display:flex">
        <!-- <div id="tab1" class="tabcontent"></div>
        <div id="tab2" class="tabcontent"></div>
        <div id="tab3" class="tabcontent"></div> -->
        
        <?php
            $args = array(
                'type'       => 'product',
                'taxonomy'   => 'product_cat',
                'parent'     => $cat->term_id
            );
            $category = get_categories( $args );
        ?>
        
        
        <?php $args = array( 'post_type' => 'product','posts_per_page' => 8,'product_cat' => 'Featured'); ?>
        <?php $getposts = new WP_query( $args);?>
        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
        <?php global $product; ?>
        
        <div class="product-item-wrap ">
            
            
            <div class="product-item-inner">
                <div class="product-item-inner__img">
                <a href="<?php the_permalink(); ?>">
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'thumnail') ); ?>
                </a>   
                </div>
                <div class="product-item-inner__text">
                    <div class="product-item-inner__text--name">
                        <p><?php the_title(); ?></p>
                        <p><?php echo $product->get_price_html(); ?></p>
                        <!--<a href="<?php bloginfo('url'); ?>?add-to-cart=<?php the_ID(); ?>">Thêm vào giỏ</a> -->
                    </div>
                </div>
            </div>
            <ul class="list-icon">
                <li>
                    <a href="#"><i class="fas fa-shopping-basket"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-eye"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-heart"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-exchange-alt"></i></a>
                </li>
            </ul>
        </div>
       
        
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
    <div id="Most reviews" class="tabcontent" style="display:none">
        <!-- <div id="tab1" class="tabcontent"></div>
        <div id="tab2" class="tabcontent"></div>
        <div id="tab3" class="tabcontent"></div> -->
        
        <?php
            $args = array(
                'type'       => 'product',
                'taxonomy'   => 'product_cat',
                'parent'     => $cat->term_id
            );
            $category = get_categories( $args );
        ?>
        
        
        <?php $args = array( 'post_type' => 'product','posts_per_page' => 8,'product_cat' => 'Most reviews'); ?>
        <?php $getposts = new WP_query( $args);?>
        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
        <?php global $product; ?>
        
        <div class="product-item-wrap ">
            
            
            <div class="product-item-inner">
                <div class="product-item-inner__img">
                <a href="<?php the_permalink(); ?>">
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'thumnail') ); ?>
                </a>   
                </div>
                <div class="product-item-inner__text">
                    <div class="product-item-inner__text--name">
                        <p><?php the_title(); ?></p>
                        <p><?php echo $product->get_price_html(); ?></p>
                        <!--<a href="<?php bloginfo('url'); ?>?add-to-cart=<?php the_ID(); ?>">Thêm vào giỏ</a> -->
                    </div>
                </div>
            </div>
            <ul class="list-icon">
                <li>
                    <a href="#"><i class="fas fa-shopping-basket"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-eye"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-heart"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-exchange-alt"></i></a>
                </li>
            </ul>
        </div>
       
        
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
        
</div>
        
</div>
        
</div>


<script>
    function openCity(evt, cityName) {
    var i, tabcontent, btn;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    btn = document.getElementsByClassName("btn");
    for (i = 0; i < btn.length; i++) {
        btn[i].className = btn[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "flex";
    evt.currentTarget.className += " active";
    }
</script>

<!-- Product End -->


<!-- Product Start -->





 <!-- Client Say Start -->
 
<div class="client-say">
        <h1>see what they said about us</h1>
        <div class="owl-carousel client-carousel">
            <div class="client-item">
            <img src="wp-content/themes/twentytwenty/assets/images/img/client_1.png" alt="user" />
                <p>
                    “Good services. I bought a bicycle with a wrong but they accepted
                    free return for me <span></span>and exchange a new product for me."
                </p>
                <p>LINA</p>
                <p>Happy clients</p>
            </div>
            <div class="client-item">
            <img src="wp-content/themes/twentytwenty/assets/images/img/client_2.jpg" alt="user" />
                <p>
                    “Good services. I bought a bicycle with a wrong but they accepted
                    free return for me <span></span>and exchange a new product for me."
                </p>
                <p>MESSI</p>
                <p>Happy clients</p>
            </div>
            <div class="client-item">
            <img src="wp-content/themes/twentytwenty/assets/images/img/client_3.jpg" alt="user" />
                <p>
                    “Good services. I bought a bicycle with a wrong but they accepted
                    free return for me <span></span>and exchange a new product for me."
                </p>
                <p>NEYMAR</p>
                <p>Happy clients</p>
            </div>
        </div>
        <hr class="style-hr" />
    </div>

    <!-- Client Say End -->
        <!-- List Brand Start -->


        <div class="list-brand">
        <div class="brand">
            <a href="#"> <img src="wp-content/themes/twentytwenty/assets/images/img/brand_1.png" alt="brand" /></a>
        </div>
        <div class="brand">
            <a href="#">
                <img src="wp-content/themes/twentytwenty/assets/images/img/brand_2.png" alt="brand" />
            </a>
        </div>
        <div class="brand">
            <a href="#">
                <img src="wp-content/themes/twentytwenty/assets/images/img/brand_6.png" alt="brand" />
            </a>
        </div>
        <div class="brand">
            <a href="#">
                <img src="wp-content/themes/twentytwenty/assets/images/img/brand_5.png" alt="brand" />
            </a>
        </div>
        <div class="brand">
            <a href="#">
                <img src="wp-content/themes/twentytwenty/assets/images/img/brand_3.png" alt="brand" />
            </a>
        </div>
        <div class="brand">
            <a href="#">
                <img src="wp-content/themes/twentytwenty/assets/images/img/brand_4.png" alt="brand" />
            </a>
        </div>
    </div>


        <!-- List Brand End -->

<?php    


get_footer(); ?>

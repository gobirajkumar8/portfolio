<?php
/**
 * Template Name: Custom home
 */

get_header(); ?>
<div data-scroll-container>
  <section style="margin-top:8em;"data-scroll-section>
    <h1 class="left-h1" data-scroll data-scroll-direction="horizontal" data-scroll-speed="-3" data-scroll-class="appear" data-scroll-repeat="true">Beautiful Holiday Destinations</h1>
  </section>
</div>
<main role="main" id="maincontent">
  <?php do_action( 'sweetsi_lite_above_slider' ); ?>

  <?php if( get_theme_mod( 'sweetsi_lite_slider_hide', false) != '') { ?>
    <section id="slider" class="mw-100 m-auto p-0">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-interval="<?php echo esc_attr(get_theme_mod('sweetsi_lite_slider_speed_option', 3000)); ?>"> 
        <?php $sweetsi_lite_slider_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'sweetsi_lite_slider_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $sweetsi_lite_slider_pages[] = $mod;
            }
          }
          if( !empty($sweetsi_lite_slider_pages) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $sweetsi_lite_slider_pages,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $i = 1;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <?php the_post_thumbnail(); ?>
              <div class="carousel-caption">
                <?php if( get_theme_mod('sweetsi_lite_slider_title_Show_hide',true) != ''){ ?>
                  <h1 class="m-0"><?php the_title(); ?></h1>
                <?php } ?>
                <?php if( get_theme_mod('sweetsi_lite_slider_content_Show_hide',true) != ''){ ?>
                  <p class="py-2"><?php $excerpt = get_the_excerpt(); echo esc_html( sweetsi_lite_string_limit_words( $excerpt, esc_attr(get_theme_mod('sweetsi_lite_slider_excerpt_length','20')))); ?></p>
                <?php } ?>
                <?php if( get_theme_mod('sweetsi_lite_slider_button','Read More') != ''){ ?>
                  <div class="read-btn mt-4">
                    <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('sweetsi_lite_slider_button','Read More'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('sweetsi_lite_slider_button','Read More'));?></span></a>
                  </div>
                <?php } ?>
              </div>
            </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
        endif;?>
        <div class="slider-nex-pre">
          <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
            <span class="carousel-control-prev-icon w-auto h-auto" aria-hidden="true"><i class="fas fa-long-arrow-alt-left"></i></span>
            <span class="screen-reader-text"><?php esc_html_e( 'Previous','sweetsi-lite' );?></span>
          </a>
          <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
            <span class="carousel-control-next-icon w-auto h-auto" aria-hidden="true"><i class="fas fa-long-arrow-alt-right"></i></span>
            <span class="screen-reader-text"><?php esc_html_e( 'Next','sweetsi-lite' );?></span>
          </a>
        </div>
      </div>
      <div class="clearfix"></div>
    </section>
  <?php } ?>

  <?php do_action( 'sweetsi_lite_below_slider' ); ?>

  <section id="services" class="py-5 text-center">
    <div class="container">
      <div class="services_title">
        <?php if(get_theme_mod('sweetsi_lite_services_title') != ''){?>
          <h3><?php echo esc_html(get_theme_mod('sweetsi_lite_services_title')); ?></h3>
        <?php } ?>
         <?php if(get_theme_mod('sweetsi_lite_services_text') != ''){?>
          <p><?php echo esc_html(get_theme_mod('sweetsi_lite_services_text')); ?></p>
        <?php } ?>
      </div>
      <div class="row mt-5">
        <?php
        $sweetsi_lite_cat_tab = get_theme_mod('sweetsi_lite_cate_tab');
        if($sweetsi_lite_cat_tab){
        $loop = new WP_Query(
          array( 
            'posts_per_page' => get_theme_mod('sweetsi_lite_tab_category_limit'),
            'category_name' => esc_html( $sweetsi_lite_cat_tab ,'sweetsi-lite')
          )
        );
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="box mb-4">
            <?php if(has_post_thumbnail()){?>
              <div class="box-image mb-3">
                <?php the_post_thumbnail(); ?>
              </div>
            <?php }?>
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <hr>
            <p><?php $excerpt = get_the_excerpt(); echo esc_html(sweetsi_lite_string_limit_words($excerpt,20)); ?></p>
            <a href="<?php the_permalink() ?>"><?php esc_html_e('Read More','sweetsi-lite'); ?></a>
          </div>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_query(); } ?>
      </div>
    </div>
  </section>

  <div id="content" class="py-5">
    <div class="container entry-content">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
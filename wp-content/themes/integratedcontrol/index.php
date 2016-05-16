<?php
get_header(); 

if(is_user_logged_in()){
?>

<div  id="home" class="banner">
            <div class="banner-info">
                <!--navigation-->
                <div class="top-nav">
                    <nav>
                        <div class="container">
                            <div class="navbar-header logo">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <h1><a href="#">logo</a></h1>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<?php
$args = array(
    'theme_location' => 'primary',
    'menu_class' => 'nav navbar-right',
);
?>
<?php wp_nav_menu($args); ?>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </nav>
                </div>	
                <!--//navigation-->
                <div class="banner-text">
                    <!--banner Slider starts Here-->
                    <script src="<?php echo get_template_directory_uri(); ?>/js/responsiveslides.min.js"></script>
                    <script>
                    // You can also use "$(window).load(function() {"
                    $(function () {
                    // Slideshow 3
                    $("#slider3").responsiveSlides({
                        auto: true,
                        pager: true,
                        nav: false,
                        speed: 500,
                        namespace: "callbacks",
                        before: function () {
                            $('.events').append("<li>before event fired.</li>");
                        },
                        after: function () {
                            $('.events').append("<li>after event fired.</li>");
                        }
                    });

                    });
                    </script>
                    <!--//End-slider-script-->
                    <div  id="top" class="callbacks_container">
                        <ul class="rslides" id="slider3">
                            <?php
                            //banner button
                            query_posts(array('category_name' => 'slide'));
                            $i = 0;
                            while (have_posts()) : the_post();
                                if ($i <= 2) {
                            ?>
                            <li>
                                <div class="banner-text-info">
                                    <h2><?php the_title(); ?></h2>	
                                    <?php the_content(); ?>
                                </div>
                            </li>
                            <?php
                                }
                                $i++;
                            endwhile;
                            ?>
                        </ul>
                    </div>
                </div>	
            </div>
        </div>
        <div class="services" id="services">
        <div class="container">

            <div class="servc-grids">
                <?php
                //平台4文章
                query_posts(array('category_name' => 'platform'));
                $i = 0;
                while (have_posts()) : the_post();
                    if ($i <= 1) {
                        ?>
                        <div class="col-md-6 servc-grid">
                            <div class="col-xs-3 servc-grid-left">
                                <a href="<?php the_permalink();?>" target="_blank"><span class="glyphicon glyphicon-th-large effect-1" aria-hidden="true"></span></a>
                            </div>
                            <div class="col-xs-9 servc-grid-right">
                                <h4><a href="<?php the_permalink();?>" target="_blank"><?php the_title(); ?></a></h4>
                                <?php the_content(); ?>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <?php
                    }
                    $i++;
                endwhile;
                ?>
                <div class="clearfix"> </div>
            </div>
            <div class="servc-grids">
                <?php
                //平台4文章
                query_posts(array('category_name' => 'platform'));
                $i = 0;
                while (have_posts()) : the_post();
                    if ($i >= 2) {
                        ?>
                        <div class="col-md-6 servc-grid">
                            <div class="col-xs-3 servc-grid-left">
                                <a href="<?php the_permalink();?>" target="_blank"><span class="glyphicon glyphicon-th-large effect-1" aria-hidden="true"></span></a>
                            </div>
                            <div class="col-xs-9 servc-grid-right">
                                <h4><a href="<?php the_permalink();?>" target="_blank"><?php the_title(); ?></a></h4>
                                <?php the_content(); ?>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <?php
                    }
                    $i++;
                endwhile;
                ?>

                <div class="clearfix"> </div>
            </div>



            <div class="clearfix"> </div>
        </div>

        <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
    <!-- //services -->
    <!--tabs-->
    <div class="tabs">
        <div class="container">
            <div class="col-md-6 tabs-left">
                <div class="col-xs-2 tab-grid-left"> <!-- required for floating -->
                    <!-- Nav tabs -->

                </div>
                <div class="col-xs-10 tab-grid-right">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="Tab1">
                            <div class="text">
                            <?php
                            //考核数据人工采集平台
                            query_posts(array('category_name' => 'assess'));
                            $i = 0;
                            while (have_posts()) : the_post();
                                if ($i == 0) {
                                    ?>
                                    <h3 class="title"><?php the_title(); ?></h3>
                                    <?php the_content(); ?>
                                    <div class="more more2">
                                        <a href="<?php the_permalink(); ?>" target="_blank" class="button-pipaluk button--inverted">前往平台</a>
                                    </div>
                                    <?php
                                }
                                $i++;
                            endwhile;
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-6 tabs-right ">
                <?php
                //考核数据人工采集平台
                query_posts(array('category_name' => 'assess'));
                $i = 0;
                while (have_posts()) : the_post();
                    if ($i == 0) {
                        ?>
                        <?php the_post_thumbnail('home-mornitoringplatform-image');?>
                        <?php
                        }
                        $i++;
                        endwhile;
                        ?>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!--//tabs-->

    <!--slid-->
    <div class="slid">
        <div class="container">
        <?php
        //设监远程监控IOT平台
        query_posts(array('category_name' => 'monitoring'));
        $i = 0;
        while (have_posts()) : the_post();
        if ($i == 0) {
        ?>
        </div>
        <h3 class="title" style="color:#1fb5ad"><?php the_title(); ?></h3>
        <?php the_content(); ?>
        <div class="more more2">
            <a href="<?php the_permalink(); ?>" target="_blank" class="button-pipaluk button--inverted">前往平台</a>
        </div>
        <?php
        }
        $i++;
        endwhile;
        ?>
    </div>
    <!--//slid-->
    <!--gallery-->
    <div class="gallery">		
        <div class="container">
            <h3 class="title">海绵城市图片</h3>
            <div class="gallery-grids">
            <?php
            //city pictures
            query_posts(array('category_name' => 'pictures'));
            $i = 0;
            while (have_posts()) : the_post();
            if ($i <= 8) {
            ?>
            <div class="col-md-4 port-grids view view-tenth">
                <a class="example-image-link" href="＃" data-lightbox="example-set" data-title="">
                    <?php the_post_thumbnail('home-city-image');?>
                    <div class="mask">
                        <p><?php the_title(); ?></p>
                    </div>
                </a>
            </div>            
            <?php
            }
            $i++;
            endwhile;
            ?>                
                <div class="clearfix"> </div>	

            </div>				
        </div>
    </div>	

<?php
} else {
//normal user login redirect to 
    $redirectUrl = home_url()."/wp-login.php?redirect_to=".  home_url();
    wp_redirect($redirectUrl);exit;    
}
get_footer();
?>

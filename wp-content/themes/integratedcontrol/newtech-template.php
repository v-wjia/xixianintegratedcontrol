<?php
/*
 * Template Name: newtech layout
 */
get_header();
?>

<!--    <div class="container">
        <div class="row content" style="background: #ffffff;">
            <div class="col-lg-12 col-md-12">
                <?php 
                if (have_posts()):
                    while (have_posts()) : the_post();
                ?>
                <h3><?php the_title();?></h3>
                <?php the_content();?>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>-->

<?php
// catgegory = newtech
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array('paged' => $paged, 'category_name'=> 'openiotlab', 'type'=>'array');
query_posts($args);
$i = 0;
while (have_posts()) : the_post();
?>

<div class="container" <?php if ($i>0) {echo "style=\"margin-top: 20px;\"";}?>>
        <div class="row" style="background: #ffffff;">
            <div class="col-lg-5 col-md-12" style="padding-left: 0">
                <a href="<?php the_permalink();?>"><?php the_post_thumbnail('standard-image', array('class' => 'img-case-list-border'));?></a>
            </div>
            <div class="col-lg-7 col-md-12 standard" style="padding: 40px 40px 0 0">
                <h5><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                <p><?php the_secondary_title();?></p>
            </div>
        </div>
    </div>

<?php
$i++;
endwhile;
?>

    <div style="text-align: center; margin: 20px auto">
        <ul class="pagination">
            <?php $pagelist = paginate_links($args); 
            if(!empty($pagelist)) {
                foreach($pagelist as $k =>  $v) {
                    echo "<li>".$v."</li>";
                }
            }
            ?>
        </ul>
    </div>

<?php
get_footer();
?>

<?php
get_header();
?>

    <div class="container">
        <?php
        // catgegory = newtech
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array('paged' => $paged, 'category_name'=> 'wonderfulcase', 'type'=>'array');
        query_posts($args);
        $i = 0;
        $colum = 4;
        while (have_posts()) : the_post();
        ?>
        <?php
        if (0 == $i) {
        ?>                
        <div class="row">
        <?php }?>
<!--            <div class="col-lg-3 col-md-12" style="padding-left: 0">
                <div class="casewrap">
                    <img src="img/case1.jpg" width="100%">
                    <h5>A calculator redsign example</h5>
                    <p>calculator redsign example calculator redsign example calculator redsign example calculator redsign example calculator redsign example ...</p>
                </div>
            </div>-->
            <div class="col-lg-3 col-md-12" style="padding-left: 0">
                <div class="casewrap">
                    <a href="<?php the_permalink();?>"><?php the_post_thumbnail('wonderfulcase-image');?></a>
                    <a href="<?php the_permalink();?>"><h5 class="case_a"><?php the_title();?></h5></a>
                    <?php the_excerpt();?>
                </div>
            </div>
        <?php
        if (($i + 1) > 0 && ($i + 1) % $colum == 0) {
        ?> 
        </div>
        <div class="row">
        <?php }?>
        <?php  
        $i++;
        endwhile;
        ?>
            
        <?php 
        if ($i > 1) {
            echo "</div>";
        }
        ?>
    </div>

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

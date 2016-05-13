<?php 
get_header();
?>

    
<!--    <div class="container">
        <div class="row" style="background: #ffffff;">
            <div class="col-lg-5 col-md-12" style="padding-left: 0">
                <img src="img/newtech1.png" style="height: 300px; width: 400px">
            </div>
            <div class="col-lg-7 col-md-12" style="padding: 40px 40px 0 0">
                <h5>We believe that openness is good for customers, good for the community and good for business.</h5>
                <p>To further advance the company’s long-standing investments in openness including interoperability, open standards and open source, Microsoft launched a wholly-owned subsidiary Microsoft Open Technologies, Inc. (MS Open Tech) in early 2012.We are motivated by the core belief that open technology is a powerful enabler – and this concept underscores all of the work we do to create technical bridges between Microsoft and non-Microsoft technologies.Code talks within MS Open Tech. Many of our primary activities encompass building open source code and promoting the development and adoption of open technical standards specifications to deliver a more seamless experience across hardware, software and devices. Please visit our Projects page for more details about our community contributions in these areas.</p>
            </div>
        </div>
    </div>-->


<?php
// catgegory = newtech
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
//$args = array('posts_per_page' => 1, 'paged' => $paged, 'category_name'=> 'newtech', 'type'=>'array');
$args = array('paged' => $paged, 'category_name'=> 'newtech', 'type'=>'array');
query_posts($args);
$i = 0;
while (have_posts()) : the_post();
?>

<div class="container" <?php if ($i>0) {echo "style=\"margin-top: 20px;\"";}?>>
        <div class="row" style="background: #ffffff;">
            <div class="col-lg-5 col-md-12" style="padding-left: 0">
                <a href="<?php the_permalink();?>"><?php the_post_thumbnail('standard-image');?></a>
            </div>
            <div class="col-lg-7 col-md-12 standard" style="padding: 40px 40px 0 0">
                <h5><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                <p><?php the_excerpt();?></p>
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

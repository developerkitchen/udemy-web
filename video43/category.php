<?php get_header(); ?>
<?php $weblink = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
<?php
$category = str_replace("http://evdenevenakliyat.blue/category/", "", $weblink);
$category = str_replace("https://evdenevenakliyat.blue/category/", "", $category);

$dilimler = explode("/page/", $category);

$category = $dilimler[0]; //str_replace("/page/", "", $category); 
$pagenavi = str_replace("/", "", $dilimler[1]);

$category = str_replace("/", "", $category);

?>
<?php if($pagenavi == ""): $pagenavi = "1"; endif //$pagenavi = (get_query_var('page')) ? get_query_var('page') : 1; ?>

<div id="portfolio" class="container-fluid text-center bg-grey">
      <div class="text-center slideanim">
        <?php query_posts('showposts=8&category_name='.$category.'&paged='.$pagenavi); ?>
        <?php $index=0; while (have_posts()): the_post(); ?>
            <?php global $wp_query; $count = $wp_query->found_posts; ?>
            <?php if($index%4 == 0): ?><div class="row"><?php endif; ?>
                <div class="col-sm-3">
                    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                        <div class="thumbnail" id="boxshadow">
                            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(), thumbnail ) ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" width="400" height="300">
                            <p><strong><?php the_title(); ?></strong></p>
                            <p><?php echo myexcerpt(6); ?></p>
                        </div>
                    </a>
                </div>
            <?php if($index%4 == 3): ?></div><?php endif; ?>
        <?php $index++; endwhile; wp_reset_postdata(); ?>
      </div>
</div> 

<div class="container-fluid bg-grey">
    <ul class="pagination text-left">
          <?php for ($i = 1; $i <= $count/8; $i++) { ?>
            <li class="<?php echo ($pagenavi == $i) == true ? 'active' : ''; ?>"><a href="<?php echo "/category/genel/page/".$i; ?>"><?php echo $i; ?></a></li>
          <?php } ?> 
    </ul>
</div>

<?php get_footer(); ?>


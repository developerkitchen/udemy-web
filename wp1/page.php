<?php include('header.php'); ?>

<!-- Page start -->
<div class="container">
    <div class="row">
        <div class="col-sm-8">
          <?php if ( have_posts() ) : have_posts(); the_post(); ?>
            <div class="col-sm-12 marginpadding0">
              <ul class="breadcrumb">
                <li><a href="/wp1/">AnaSayfa</a></li>
                <li><?php the_title(); ?></li>
              </ul>
            </div>
            <article>
                <h1 class="baslik text-center"><?php the_title(); ?></h1>
                <div class="tarih"><h5><i class="fas fa-calendar-week"></i> 1 Mayıs 2019 <i class="fas fa-clock"></i> 12:45</h5></div>
                <p><?php the_content();  ?></p>
            </article>
          <?php endif; ?>
        </div>

        <!-- SideBar Menu start -->
        <?php include('sidebar.php'); ?>
        <!-- SideBar Menu finish -->
    </div>
</div>
<!-- Page finish -->


<?php include('footer.php'); ?>


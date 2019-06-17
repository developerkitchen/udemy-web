<?php /*Template Name: Blogs*/ ?>
<?php include('header.php'); ?>

<!-- MAIN (Center website) -->
<div class="container">

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Hepsi</button>
  <button class="btn" onclick="filterSelection('genel')"> Genel</button>
  <button class="btn" onclick="filterSelection('vlog')"> Vlog</button>
</div>

<!-- Blog Yazıları start -->
<?php query_posts('showposts=4'); ?>
<?php $i=0; while (have_posts()) : the_post(); ?>
  <?php if($i%4 == 0): ?><div class="row"><?php endif; ?>
    <div class="column col-sm-3 <?php echo get_the_category(get_the_ID())[0]->slug; ?>">
        <a href="<?php the_permalink() ?>">
        <div class="thumbnail">
            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ) ?>" alt="<?php the_title(); ?>" >
            <p><strong><?php the_title(); ?></strong></p>
            <p><?php echo myexcerpt(10); ?></p>
        </div>
        </a>
    </div>
    <?php if($i%4 == 3): ?></div><?php endif; ?>
<?php $i++; endwhile;?>
<!-- Blog Yazıları finish -->
</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("btn active");
    current[0].className = "btn"
    this.className = "btn active";
  });
}
</script>
<!-- single finish -->


<?php include('footer.php'); ?>

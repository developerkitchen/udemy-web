<div class="col-sm-4 sidebar">
    <h3>Son Yazılar</h3>
    <ul class="sonyazilar">
      <?php query_posts('showposts=10'); ?>
      <?php while (have_posts()) : the_post(); ?>
      <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li> 
      <?php endwhile;?>
    </ul>
    <hr id="sidebar-hr">
    <h2>Son Yorumlar</h2>
    <ul class="yorumlar">
    <?php $args = array('status' => 'approve', 'number' => '5' );
      $comments = get_comments($args);
      foreach($comments as $comment) : ?>
      <li><a href="#"><?php echo($comment->comment_author . '<br />' . $comment->comment_content); ?></a></li>
      <hr>
    <?php endforeach; ?>
    </ul>
</div>
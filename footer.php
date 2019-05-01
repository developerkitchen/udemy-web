
<!-- Footer start -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<h2>Hızlı Menü</h2>
				<ul class="hizlimenu">
					<li class="active"><a href="/wp1/">AnaSayfa</a></li>
			        <li><a href="/wp1/hakkinda/">Hakkında</a></li>
			        <li><a href="/wp1/blogs/">Blogs</a></li>
			        <li><a href="/wp1/iletisim/">İletişim</a></li>
				</ul>
			</div>
			<div class="col-sm-4">
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
			<div class="col-sm-4">
				<h2>Sosyal Medya</h2>
				<a target="_blank" href="https://facebook.com"><i class="sosyalmedya fab fa-facebook-f"></i></a>
				<a target="_blank" href="https://twitter.com"><i class="sosyalmedya fab fa-twitter"></i></a>
				<a target="_blank" href="https://youtube.com"><i class="sosyalmedya fab fa-youtube"></i></a>
				<a target="_blank" href="https://instagram.com"><i class="sosyalmedya fab fa-instagram"></i></a>
			</div>
		</div>
	</div>
</footer>
<!-- Footer finish -->

</body>
</html>
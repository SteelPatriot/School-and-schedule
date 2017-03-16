<?php


$sql = mysqli_query($connect, gal);

echo '<div id="grid-gallery" class="grid-gallery">
				<section class="grid-wrap">
					<ul class="grid">
						<li class="grid-sizer"></li><!-- for Masonry column width -->';

while ($result = mysqli_fetch_array($sql)) {

    $string = strip_tags($result['article']);//.'<br>';
    $string = substr($string, 0, 200);
    $string = rtrim($string, "!,.-");
    $string = substr($string, 0, strrpos($string, ' '));
    echo '<li>
							<figure>
								<img src="'.$result['images'].'" alt="'.$result['id'].'"/>
								<figcaption><h3>'.$result['title'].'</h3><p>'.$string.'</p></figcaption>
							</figure>
						</li>';
}

echo '</ul>
				</section><!-- // grid-wrap -->';

echo '<section class="slideshow">
					<ul>';
$sql = mysqli_query($connect, gal);
while ($result = mysqli_fetch_array($sql)) {
    $string = strip_tags($result['article']);
echo '<li>
    <figure>
        <figcaption>
            <h3>'.$result['title'].'</h3>
            <p>'.$string.'</p>
        </figcaption>
        <img src="'.$result['images'].'" alt="'.$result['id'].'"/>
    </figure>
        </li>';
}
echo '</ul>
					<nav>
						<span class="icon nav-prev"></span>
						<span class="icon nav-next"></span>
						<span class="icon nav-close"></span>
					</nav>
					<div class="info-keys icon">Navigate with arrow keys</div>
				</section><!-- // slideshow -->
			</div><!-- // grid-gallery -->';
		echo'</div>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/masonry.pkgd.min.js"></script>
		<script src="js/classie.js"></script>
		<script src="js/cbpGridGallery.js"></script>
		<script>
			new CBPGridGallery( document.getElementById( \'grid-gallery\' ) );
		</script>';
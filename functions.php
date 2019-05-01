<?php 
add_theme_support( 'post-thumbnails' );

function myexcerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
	} else {
		$excerpt = implode(" ",$excerpt);
	} 

	$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	return $excerpt;
} 
function getTagString() {
	$posttags = get_the_tags();
    $tagStr = "";
    //print_r($posttags);
    if ($posttags):
        foreach ($posttags as $tag):
            $tagStr .= "<span>".$tag->name."</span> | ";
        endforeach;
    endif;
    return $tagStr;
}
?>
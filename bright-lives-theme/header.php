<?php
$page_title = '';

if (is_category()) {
	$page_title = single_cat_title('', false);
} elseif (is_single() || is_page()) {
	$page_title = single_post_title('', false);
} else {
	$page_title = wp_title('', false);
}
?>


<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $page_title; ?> | <?php bloginfo( 'name' ); ?></title>
    <meta name="description" content="Your description goes here">
    <!--meta name="keywords" content="some, keyword, here"-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

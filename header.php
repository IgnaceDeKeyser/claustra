<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
		<title> Claustra - collective for ceramics & sculpture </title>
		<?php wp_head(); ?>
	</head>
	<body>
		<header class ="page-navigation__header">
			<div class ="page-navigation__menu-icon">
				<div class="page-navigation__menu-icon__mid"></div>
			</div>
			<nav class ="page-navigation">
				<ul class ="page-navigation__list">			
					<li class ="page-navigation__list__list-item <?php if (is_page('news') or get_post_type() == 'news') echo 'page-navigation__list__list-item--current' ?>" >
						<a class ="page-navigation__list__list-item__link" href="<?php echo site_url('/news/') ?>"> <?php  echo 'news' ?></a>
					</li>

					 <li class ="page-navigation__list__list-item <?php if (is_page('work') or  get_post_meta(get_the_id(),'project_status', true) == 'complete' ) echo 'page-navigation__list__list-item--current' ?>">
						<a class ="page-navigation__list__list-item__link" href="<?php echo site_url('/work/') ?>">work</a>
					</li> 

					<li class ="page-navigation__list__list-item <?php if (is_page('archive') or get_post_meta(get_the_id(),'project_status', true) == 'archive') echo 'page-navigation__list__list-item--current' ?>">
						<a class ="page-navigation__list__list-item__link" href="<?php echo site_url('/archive/') ?>" >archive</a>
					</li>

					<li class ="page-navigation__list__list-item <?php if (is_page('info') ) echo 'page-navigation__list__list-item--current' ?>">
						<a class ="page-navigation__list__list-item__link" href="<?php echo site_url('/info/') ?>">collective</a>
					</li>
				</ul>
			</header>
			</nav>
			<a class ="page-navigation__link" href="<?php echo site_url() ?>">
				<h1 class="page-navigation__link__webtitle"><?php ?>CLAUSTRA</h1>
			</a>
			<h2 class="page-navigation__subtitle">collective for ceramics & sculpture</h2>




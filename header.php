<!DOCTYPE html>
<html lang="ja" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>
<header>
  <div class="header-inner">
    <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">株式会社SOUワークス<span>SOU WORKS CO., LTD.</span></a>
    <nav>
      <ul>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="<?php echo souworks_is_top() ? 'active' : ''; ?>">TOP</a></li>
        <li><a href="<?php echo esc_url( souworks_page_url( 'business' ) ); ?>" class="<?php echo is_page( 'business' ) ? 'active' : ''; ?>">事業内容</a></li>
        <li><a href="<?php echo esc_url( souworks_page_url( 'company' ) ); ?>" class="<?php echo is_page( 'company' ) ? 'active' : ''; ?>">会社概要</a></li>
      </ul>
    </nav>
  </div>
</header>
<main>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- Include HTML meta tags -->
<?php include_once(THEME_DIR_PHP.'head.php') ?>
</head>
<body>
<?php Theme::plugins('siteBodyBegin') ?>
<header class="nav">
        <!-- <h1 href="<?php echo $site->url() ?>" title="greeb" class='large-text'><?php echo $site->title() ?></h1> -->
    <ul>
      <li>
        <a href="<?php echo $site->url() ?>" class="logo" title="greeb">greeb</a>
      </li>
      <li>
        <a href="<?php echo $site->url() ?>" title="home">home</a>
      </li>
      <li>
        <a href="<?php echo $site->url() ?>/about" title="about">about</a>
      </li>
      <li>
        <a href="<?php echo $site->url() ?>/contact" title="contact">contact</a>
      </li>
      <li>
        <?php
        if ($site->github()) {
            echo '<a href="'.$site->github().'" title="github-url"><span> github</span></a>';
          }
        ?>
      </li>
    </ul>
    <footer>
        <?php include(THEME_DIR_PHP.'footer.php') ?>
    </footer>
</header>

<main>
<div class="container">
    <div class="row">
        <div class="col content">
            <?php
            if ($WHERE_AM_I =='page') {
                include(THEME_DIR_PHP.'page.php');
            } else {
                include(THEME_DIR_PHP.'home.php');
            }
            ?>
        </div>
    </div>
</div>
</main>

<!-- Add Scripts here (if required) -->

<!-- Plugins Site Body End -->
<?php Theme::plugins('siteBodyEnd') ?>

</body>
</html>

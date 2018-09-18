<article class="post">

    <!-- Plugins Page Begin -->
    <?php Theme::plugins('pageBegin') ?>

    <!-- Page's header -->
    <header>
        <div class="title">
            <h1><a href="<?php echo $page->permalink() ?>"><?php echo $page->title() ?></a></h1>
        </div>
        <div class="meta">
          <?php
            if ($page) {
            $User = $page->user();
              if ($User) {
                $author = $User->username();
                if (Text::isNotEmpty($User->firstName()) || Text::isNotEmpty($User->lastName())) {
                    $author = $User->firstName().' '.$User->lastName();
                }
                if (!$page->isStatic()){
                  echo '<span class="timestamp">Posted <time class="published" datetime="2016-12-01">';
                  echo $page->date();
                  echo '</time> by ';
                  echo $author;
                  echo '</span>';
                }
              }
            }
            ?>
        </div>
    </header>

    <!-- Cover Image -->
    <?php
    if ($page->coverImage()) {
        echo '<a href="'.$page->permalink().'" class="image featured"><img src="'.$page->coverImage().'" alt="Cover Image"></a>';
    }
    ?>
    <!-- Page's content, the first part if has pagebrake -->
    <?php echo $page->content() ?>
    <!-- Page's footer -->
    <footer>
        <!-- Page's tags -->
        <?php
        $page_tags = $page->tags(true);
        if (count($page_tags) != 0) {
          echo '<div class="tags">TAGS:<span class="tag-list">';
              $listOfTags = '';
              foreach ($page_tags as $tagKey => $tagName) {
                  $listOfTags .= '<a href="'.HTML_PATH_ROOT.$url->filters('tag').'/'.$tagKey.'">'.$tagName.'</a>, ';
              }
              echo substr($listOfTags, 0, -2) . '.'; // Remove final ", '" and add "." after the last tag.
              echo '</span></div>';
        }
        ?>
    </footer>

    <!-- Plugins Page End -->
    <?php Theme::plugins('pageEnd') ?>

</article>

<?php snippet('header') ?>

<main>
  <section class="pageTitle container">
    <div class="pageTitle__pageName">
      <h1><?= $site->title() ?></h1>
    </div>

    <div class="pageTitle__meta">
      <p>Designer, art director, business owner, author, speaker, curator, photographer.</p>
    </div>
  </section>

  <section class="builderContent">
    <!-- <?php dump($page) ?> -->

    <?php
      foreach($page->content()->content()->toBuilderBlocks() as $block):
        snippet('blocks/' . $block->_key(), array('data' => $block));
      endforeach;
    ?>
  </section>

</main>

<!-- <?php snippet('footer') ?> -->

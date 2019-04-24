<section class="builderContent">
  <?php
    foreach($page->content()->content()->toBuilderBlocks() as $block):
      snippet('blocks/' . $block->_key(), array('data' => $block));
    endforeach;
  ?>
</section>
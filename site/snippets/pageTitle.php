<section class="pageTitle container">
  <div class="pageTitle__pageName">
    <h1>
      <?= $page->isHomePage() ? $site->title() : $page->title(); ?>
    </h1>
  </div>

  <div class="pageTitle__meta">
    <? if($page->isHomePage()): ?>
      <p><?= $page->bio(); ?></p>
    <? else: ?>
      <ul>
        <? foreach($page->categories()->split() as $category): ?>
          <li><a href="#"><?= $category ?></a></li>
        <? endforeach; ?>
      </ul>
    <? endif; ?>
  </div>
</section>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title() ?> | <?= $page->title() ?></title>

  <?= css(['assets/css/index.css', '@auto', 'assets/css/plugins/flickity.min.css']) ?>
  <?= js('assets/js/flickity.pkgd.min.js') ?>
</head>
<body>

  <div class="page">
    <header class="header">
      <div class="container">
        <nav id="menu" class="menu">
          <?php foreach ($site->children()->listed() as $item): ?>
          <?= $item->title()->link() ?>
          <?php endforeach ?>
        </nav>

        <a class="logo" href="mailto:<?= $page->contactEmail() ?>"><?= $page->contactEmail() ?></a>
      </div>
    </header>


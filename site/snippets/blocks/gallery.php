<div class="gallery <?= ($data->galleryWidth()->value() == 'true' ? 'gallery--fullWidth' : 'gallery--contained container') ?>">
  <div class="gallery--slides" style="background-color: <?= ($data->color()) ?>">
    <?php foreach($data->gallery()->toFiles() as $file): ?>
      <?php if($file->orientation() == 'landscape'): ?>
        <img src="<?= $file->crop(1280, 694, 'center')->url() ?>" class="img--landscape" alt="<?= $file->caption() ?>">
      <?php /*else: ?>
        <!-- <div style="width: 100%; object-fit: contain;"><img src="<?= $file->resize(null, 694, 85)->url() ?>" class="img--portrait" alt="<?= $file->caption() ?>"></div> -->
        <!-- todo: add support for portrait images -->
        <?php */ ?>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>

  <?php if($data->captions() == 'true'): ?>
    <p class="flickity-caption"></p>
  <?php endif; ?>
</div>

    <!-- todo: use srcset on gallery images -->
    <!-- should allow me to hotswap images depending on device size -->
    <!-- https://getkirby.com/docs/guide/templates/resize-images-on-the-fly#responsive-images -->

    <!-- todo: add captions -->
    <!-- https://github.com/metafizzy/flickity/issues/224 -->
<div class="gallery <?= ($data->galleryWidth()->value() == 'true' ? 'gallery--fullWidth' : 'gallery--contained container') ?>">
  <div class="gallery--slides">
    <?php foreach($data->gallery()->toFiles() as $file): ?>
      <img src="<?= $file->crop(1280, 694, 'center')->url() ?>" alt="<?= $file->caption() ?>">
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
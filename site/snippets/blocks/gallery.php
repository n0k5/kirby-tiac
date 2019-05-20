<div class="gallery <?= ($data->galleryWidth()->value() == 'true' ? 'gallery--fullWidth' : 'gallery--contained') ?>">
  <div class="gallery__slides">
    <!-- todo: use srcset here -->
    <!-- should allow me to hotswap images depending on device size -->
    <!-- https://getkirby.com/docs/guide/templates/resize-images-on-the-fly#responsive-images -->

    <?php foreach($data->gallery()->toFiles() as $file): ?>
        <img src="<?= $file->crop(1280, 694, 'center')->url() ?>" alt="<?= $file->caption() ?>">
    <?php endforeach; ?>
  </div>

  <?php if($data->captions() == 'true'): ?>
    <p class="flickity-caption"></p>
  <?php endif; ?>
</div>
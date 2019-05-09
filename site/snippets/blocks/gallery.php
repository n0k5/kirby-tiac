<div class="gallery <?= ($data->galleryWidth()->value() == 'true' ? 'gallery--fullWidth' : 'gallery--contained') ?>">
  <div class="gallery__slides">
    <!-- todo: use srcset here -->
    <!-- should allow me to hotswap images depending on device size -->
    <!-- https://getkirby.com/docs/guide/templates/resize-images-on-the-fly#responsive-images -->

    <?php foreach($data->gallery()->toFiles() as $file): ?>
        <img src="<?= $file->crop(1280, 694, 'center')->url() ?>" alt="<?= $file->alt() ?>">
    <?php endforeach; ?>

    <!-- <?php foreach($data->gallery() as $items): ?>
      <?php //dump($items); ?>
      <?php foreach($items as $item): ?>

          <?php echo $item; ?>

          <?php //echo page($item)->cover()->crop(1280, 694, 'center'); ?>

      <?php endforeach; ?>
    <?php endforeach; ?> -->
  </div>

  <p class="flickity-caption"></p>
</div>
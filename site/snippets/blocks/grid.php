<div class="imgGrid">
  <div class="container">

    <?php foreach($data->gridImages()->toFiles() as $file): ?>
      <div class="imgGrid__item">

        <div class="imgGrid__image" style="background-image: url(<?= $file->crop(456, 264, 'center')->url() ?>)">
          <img src="<?= $file->crop(456, 264, 'center')->url() ?>" alt="<?= $file->alt() ?>">
        </div>

        <? if($file->caption()->isNotEmpty()): ?>
          <div class="imgGrid__caption">
            <p><?= $file->caption() ?></p>
          </div>
        <?php endif; ?>

      </div>
    <?php endforeach; ?>

  </div>
</div>

<!-- todo: srcset images on this page -->
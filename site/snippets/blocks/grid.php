<div class="grid">

  <!-- <?php dump($data->gridImages()->toFile()); ?> -->

  <?php foreach($data->gridImages()->toFiles() as $file): ?>
    <div class="grid__image">
        <img src="<?= $file->url() ?>" alt="<?= $file->alt() ?>">
    </div>
  <?php endforeach; ?>

</div>
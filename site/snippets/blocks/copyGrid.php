<div class="copyGrid container">

  <?php foreach($data->copyBlocks()->toStructure() as $copyBlock): ?>
    <div class="copyGrid__block">
      <?= $copyBlock->copy()->kt() ?>
    </div>
  <?php endforeach; ?>

</div>
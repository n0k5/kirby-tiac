<div class="quote">
  <?php foreach($data->gallery() as $items): ?>
    <?php foreach($items as $item): ?>
      <?= page($item)->image()->resize(200) ?>
    <?php endforeach; ?>
  <?php endforeach; ?>
</div>
<div class="quote">
  <blockquote>
    <!-- <?php dump($data); ?> -->
      <!-- <br><hr><br> -->
      <?php foreach($data->gallery() as $item): ?>
        <?php echo page($item[0])->url(); ?>

        <!-- TODO: render out gallery content :-) -->
      <?php endforeach; ?>
  </blockquote>
</div>
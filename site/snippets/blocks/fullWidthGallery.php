<div class="fullWidthGallery">
  <div class="fullWidthGallery__slides">
    <!-- todo: use srcset here -->
    <!-- https://getkirby.com/docs/guide/templates/resize-images-on-the-fly#responsive-images -->

    <?php foreach($data->gallery() as $items): ?>
      <?php foreach($items as $item): ?>

          <?php
            if($page->carousel('true')) {
              echo page($item)->cover()->crop(1280, 694, 'center');
            } else {
              echo 'this is not a carousel, render it as a gallery instead...';
            }
          ?>

      <?php endforeach; ?>
    <?php endforeach; ?>
  </div>

  <p class="flickity-caption"></p>
</div>
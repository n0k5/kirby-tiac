<?php snippet('header') ?>

<main>
  <div class="projects">
    <?php foreach($page->children() as $project): ?>
      <div class="project <? e($project->cover()->toFile()->orientation() == 'landscape', 'project__thumb--landscape', 'project__thumb--portrait'); ?>" style="background-image: url('<?= $project->cover()->toFile()->crop(456, 264, 'center')->url(); ?>')">
        <!-- <?= $project->title() ?> -->
        <!-- <? dump($project) ?> -->
      </div>
    <?php endforeach; ?>
  </div>
</main>

<?php snippet('footer') ?>

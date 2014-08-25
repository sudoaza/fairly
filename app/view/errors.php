<?php if ( count(Flight::flash('message')) ) : ?>

<section class="container box">
  <div class="row">
    <div class="12u">

<?php foreach ( Flight::flash('message') as $message ) : ?>

  <div class="alert alert-<?= View::e($message['type']) ?>">

  <button type="button" class="close" data-dismiss="box">&times;</button>

  <i class="icon <?= isset($message['icon']) ? View::e('icon-'.$message['icon']) : 'fa-exclamation-sign' ?>"></i> <?= View::e($message['text']) ?>

  </div>

<?php endforeach ?>

    </div>
  </div>
</section>

<?php Flight::clearFlash('message') ?>
<?php endif ?>

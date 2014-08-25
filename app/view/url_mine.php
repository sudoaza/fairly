    <!-- Main Wrapper -->

      <div id="main-wrapper">

        <div class="wrapper style1">

          <div class="inner">

<?php include('errors.php') ?>

            <!-- Feature 1 -->

              <section class="container box feature1">

                <div class="row">

                  <div class="12u">

                    <header class="first major">

                      <h2>Your saved URLs</h2>

                    </header>

<?php if ($urls && count($urls)) : ?>
  <?php foreach ( $urls as $url ) : ?>
  <div class="url row">
    <p class="long 6u"><?= View::e($url->long_url) ?></p>
    <p class="short 4u"><a href="<?= View::e($url->short_url) ?>"><?= View::e($url->short_url) ?></a></p>
    <p class="copy 2u">
      <button class="copy-button" data-clipboard-text="<?= View::e($url->short_url) ?>" title="Click to copy me.">Copy URL</button></p> 
  </div>
  <?php endforeach ?>
<?php else : ?>
<p>You have no short URLs. Create one :)</p>
<?php endif ?>

                  </div>

                </div>

              </section>



          </div>

        </div>
</div>

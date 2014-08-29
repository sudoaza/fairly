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
<div class="row">

  <div class="9u">
    <?php foreach ( $urls as $url ) : ?>
    <div class="url row">
      <p class="long 6u"><?= View::e($url->long_url) ?></p>
      <p class="short 4u" id="short-<?= $url->id ?>"><a href="<?= View::e($url->short_url) ?>"><?= View::e($url->short_url) ?></a></p>
      <p class="copy 2u">
      <form action="<?= View::makeUri('/auth/forget-me') ?>"
      <button class="copy-button button small" data-clipboard-target="short-<?= $url->id ?>">Copy</button>
      </form>
      </p>
    </div>
    <?php endforeach ?>
  </div>

  <div class="3u">
    <button class="button alt big"><i class="icon fa-eye-slash"></i> Forget me</button>
    <p><i class="icon fa-info"></i> <small> Your links will still work.</small></p>
  </div>

</div>
<?php else : ?>
<p>You have no short URLs. Create one :)</p>
<?php endif ?>

                  </div>

                </div>

              </section>



          </div>

        </div>
</div>
<script>

ZeroClipboard.config( { swfPath: '/js/zeroclipboard.swf', moviePath: '/js/zeroclipboard.swf' } );

var client = new ZeroClipboard($(".copy-button"));

  client.on( "load", function(client) {

    client.on( "complete", function(client, args) {
      // `this` is the element that was clicked
      $(this).css("background", "#666");
      $(this).val("Copied");
    });

  });

</script>

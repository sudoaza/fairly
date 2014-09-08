<!-- Main Wrapper -->

<div id="main-wrapper">
  <div class="wrapper style1">
    <div class="inner">

      <!-- Feature 1 -->
      <section class="container box feature1">

        <div class="row">

          <div class="12u">

            <header class="first major">

              <h1>We are redirecting you to <a id="destination" href="<?= View::e($url->long_url) ?>">your destination</a>...</h1>
              <p>While taking care of your <strong>privacy</strong>.</p>

            </header>

          </div>

        </div>

      </section>

<?php require('projects.php') ?>

    </div>
  </div>
</div>
<script>
$(document).ready(function($) {
  // Redirect after 6.5 seconds
  setTimeout(function(){ $('#destination')[0].click(); }, 6500); 
});
</script>

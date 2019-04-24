<footer>
  <div class="footer-container">
    <div class="container">
      <div class="footer-block">
        <div class="footer-menu1">
          <h5>Learn</h5>
            <?php wp_nav_menu(array(
                'menu' => 'Footer Menu',
                'theme_location' => 'footer'
            )); ?>
        </div>
        <div class="footer-menu2">
          <h5>Connect</h5>
            <?php wp_nav_menu(array(
                'menu' => 'Connect Menu',
                'theme_location' => 'footer menu'
            )); ?>
        </div>

        <div class="form-field">
          <h5>Join</h5>
          <form action="#" method="get" class="first-form">
            <input class="email" name="email" type="email" placeholder="Join our email list and get tips, learn about Webinars and more!">
            <button class="button">Join us</button>
          </form>
          <form action="#" method="get" class="second-form">
            <input type="checkbox" id="privacy" name="privacy">
            <label for="privacy">By joining the email list you agree to the LifeLens <a id="color-blue" href="#">Privacy
                Policy</a></label>
          </form>

          <div id="social-network">
              <?php wp_nav_menu(array(
                  'menu' => 'Social Menu',
                  'theme_location' => 'social menu'
              )); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
</body>
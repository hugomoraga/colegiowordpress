<?php
$navMenu =  wp_nav_menu(array(
  'container' => false,
  'echo' => false,
  'items_wrap' => '%3$s',
  'list_item_class' => 'nav-item px-3',
  'link_class' => 'nav-link text-primary',
  'before' => '',
  'fallback_cb' => false,
  'theme_location' => 'menu-1'

));


?>

<div class="container-fluid bg-secondary">
  <div class="d-flex justify-content-md-center">
    <nav class="navbar navbar-expand-lg ">
      <div class="">


        <button class="navbar-toggler px-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars" style="font-size:32px"></i>
          <?php esc_html_e('', 'daemelquisco'); ?>
        </button>

        <div class="col-12 collapse navbar-collapse " id="navbarNav">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <?php echo $navMenu; ?>

          </ul>

        </div>

      </div>

    </nav>
  </div>
</div
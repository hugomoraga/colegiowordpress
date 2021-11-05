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

    <nav class="navbar navbar-expand-lg ">
    <button class=" pt-2 pb-2 m-3 navbar-toggler border-2 border text-white btn btn-primary rounded-pill" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
     Menu <i class=" fas fa-bars fa-lg "></i>
    </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="w-100">
            <ul class="navbar-nav justify-content-center">
            <?php echo $navMenu; ?>
            </ul>
          </div>
        </div>


    </nav>

  

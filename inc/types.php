<?php

namespace WPC;

require_once(__DIR__ . '/base.php'); 

class Types_Loader{

  private static $_instance = null;

  public static function instance() {
    if (is_null(self::$_instance)) {
      self::$_instance = new self();
    }
    return self::$_instance;
  }


  private function include_types_files(){
  //  require_once(__DIR__ . '/types/liceo_1.php');
//    require_once(__DIR__ . '/types/cursos.php');
    require_once(__DIR__ . '/types/unidades.php');
    require_once(__DIR__ . '/types/cursos_padre.php');


  }

  public function register_types(){

    $this->include_types_files();
  //  $cursos = new Cursos_type();
    $unidades = new Unidades_post();
    $cursopadre = new Cursos_padre_type();

  }

  public function __construct(){
    // add_action('init', 'register_types');
    add_action('init', [$this, 'register_types']);

    // $this->register_types();
  }
}

// Instantiate Plugin Class


Types_Loader::instance();
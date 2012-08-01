<?php

  // Helpers
  class H 
  {
    public static function isActiveMenu($obj1 = '', $obj2 = '-', $css_class = 'active') {
      return $active = ($obj1 == $obj2) ? $css_class : '';
    }
  }

?>

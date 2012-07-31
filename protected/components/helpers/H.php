<?php

  // Helpers
  class H 
  {
    public static function is_active_menu($obj1 = '', $obj2 = '-', $css_class = 'active') {
      return $active = ($obj1 == $obj2) ? $css_class : '';
    }
  }

?>

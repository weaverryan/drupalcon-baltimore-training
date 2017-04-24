<?php

namespace Drupal\old_bay\Service;

class OldBaySeasoner {
  public function seasonSomeRandomFood($count) {
    $foods = ['popcorn', 'french fries', 'soup', 'chicken'];
    $seasonedFoods = [];
    for ($i = 0; $i < $count; $i++) {
      $foodKey = array_rand($foods);
      $seasonedFoods[] = 'Bayified some '.$foods[$foodKey];
    }

    return $seasonedFoods;
  }
}

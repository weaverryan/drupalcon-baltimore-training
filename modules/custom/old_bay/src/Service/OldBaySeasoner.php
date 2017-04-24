<?php

namespace Drupal\old_bay\Service;

use Drupal\Core\Config\ConfigFactoryInterface;

class OldBaySeasoner {

  private $configFactory;

  public function __construct(ConfigFactoryInterface $configFactory) {
    $this->configFactory = $configFactory;
  }

  public function seasonSomeRandomFood($count) {
    if ($count === null) {
      $count = $this->configFactory->get('old_bay.default')
        ->get('default_count');
    }

    $foods = ['popcorn', 'french fries', 'soup', 'chicken'];
    $seasonedFoods = [];
    for ($i = 0; $i < $count; $i++) {
      $foodKey = array_rand($foods);
      $seasonedFoods[] = 'Bayified some '.$foods[$foodKey];
    }

    return $seasonedFoods;
  }
}

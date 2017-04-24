<?php

namespace Drupal\old_bay\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\old_bay\Service\OldBaySeasoner;

class OldBayController extends ControllerBase {
  public function seasonFood($count) {
    $seasoner = \Drupal::getContainer()
      ->get('old_bay.seasoner');
    $foods = $seasoner->seasonSomeRandomFood($count);

    $message = sprintf(
      'Boom! Dinner is served: <br/>'.implode("<br/>", $foods),
      $count
    );

    return [
      '#type' => 'markup',
      '#markup' => $message,
    ];
  }
}

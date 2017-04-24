<?php

namespace Drupal\old_bay\Controller;

use Drupal\Core\Controller\ControllerBase;

class OldBayController extends ControllerBase {
  public function seasonFood($count) {
    if ($count === null) {
      $count = $this->config('old_bay.default')
        ->get('default_count');
    }

    $message = sprintf(
      'Boom! We just bayified %s pieces of popcorn!',
      $count
    );

    return [
      '#type' => 'markup',
      '#markup' => $message,
    ];
  }
}

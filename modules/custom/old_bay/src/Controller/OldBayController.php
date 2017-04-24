<?php

namespace Drupal\old_bay\Controller;

class OldBayController {
  public function seasonFood($count) {
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

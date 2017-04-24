<?php

namespace Drupal\old_bay\Controller;

use Symfony\Component\HttpFoundation\Response;

class OldBayController {
  public function seasonFood($count) {
    return new Response(sprintf(
      'Boom! We just bayified %s pieces of popcorn!',
      $count
    ));
  }
}

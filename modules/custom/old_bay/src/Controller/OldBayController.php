<?php

namespace Drupal\old_bay\Controller;

use Symfony\Component\HttpFoundation\Response;

class OldBayController {
  public function seasonFood() {
    return new Response('Boom! Your popcorn got old bayified!');
  }
}

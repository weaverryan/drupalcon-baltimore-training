<?php

namespace Drupal\old_bay\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/**
 * Class RouteSubscriber.
 *
 * @package Drupal\old_bay\Routing
 * Listens to the dynamic route events.
 */
class RouteSubscriber extends RouteSubscriberBase {
  /**
   * {@inheritdoc}
   */
  protected function alterRoutes(RouteCollection $collection) {
    // change the route path, just to show we're powerful!
    $collection->get('old_bay_season_food')
      ->setPath('/season/oldbay/changed/{count}');
  }
}

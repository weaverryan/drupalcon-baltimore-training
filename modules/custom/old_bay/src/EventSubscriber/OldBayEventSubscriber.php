<?php

namespace Drupal\old_bay\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class OldBayEventSubscriber implements EventSubscriberInterface {
  public function onKernelRequest() {
    drupal_set_message('Grab the old bay! We are cooking!');
  }

  public static function getSubscribedEvents() {
    return [
      'kernel.request' => 'onKernelRequest'
    ];
  }
}

<?php

namespace Drupal\old_bay\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

class OldBayEventSubscriber implements EventSubscriberInterface {
  private $startTime;

  public function onKernelRequest() {
    $this->startTime = microtime(true);
    drupal_set_message('Grab the old bay! We are cooking!');
  }

  public function onKernelResponse(FilterResponseEvent $event) {
    $duration = microtime(true) - $this->startTime;

    $event->getResponse()
      ->headers
      ->set('X-oldbay-cooking-time', $duration * 1000);
  }

  public static function getSubscribedEvents() {
    return [
      'kernel.request' => 'onKernelRequest',
      'kernel.response' => 'onKernelResponse',
    ];
  }
}

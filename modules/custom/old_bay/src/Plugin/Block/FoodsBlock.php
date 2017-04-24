<?php

namespace Drupal\old_bay\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'FoodsBlock' block.
 *
 * @Block(
 *  id = "foods_block",
 *  admin_label = @Translation("Foods block"),
 * )
 */
class FoodsBlock extends BlockBase {


  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $foods = \Drupal::getContainer()
      ->get('old_bay.seasoner')
      ->seasonSomeRandomFood(5);
    $build['foods_block']['#markup'] = implode('<br/>', $foods);

    return $build;
  }

}

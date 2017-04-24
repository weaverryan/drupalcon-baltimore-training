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
    $build['foods_block']['#markup'] = 'Implement FoodsBlock.';

    return $build;
  }

}

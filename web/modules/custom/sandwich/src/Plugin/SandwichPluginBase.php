<?php

namespace Drupal\sandwich\Plugin;

use Drupal\Component\Plugin\PluginBase;

/**
 * Base class for Sandwich plugin plugins.
 */
abstract class SandwichPluginBase extends PluginBase implements SandwichPluginInterface {


  // Add common methods and abstract methods for your plugin type here.


  /**
   * @return string
   */
  public function description() {
    return $this->pluginDefinition['description'];
  }

  /**
   * return float
   */
  public function calories() {
    return (float) $this->pluginDefinition['calories'];
  }
}

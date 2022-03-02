<?php

/**
 * @file
 * Provides \Drupal\sandwich\Plugin.
 */

namespace Drupal\sandwich\Plugin;

use Drupal\Component\Plugin\PluginInspectionInterface;

/**
 * Defines an interface for Sandwich plugin plugins.
 */
interface SandwichPluginInterface extends PluginInspectionInterface
{


  // Add get/set methods for your plugin type here.

  /**
   * Provide a description of the sandwich.
   * 
   * @return string
   * A string description of the sandwich.
   */
  public function description();

  /**
   * Provide the number of calories per serving for the sandwich.
   * 
   * @return float
   * The number of calories per serving.
   */
  public function calories();

  /**
   * @param array $extras
   * An array of extra ingredients to include with this sandwich.
   * 
   * @return mixed
   */
  public function order(array $extras);
}

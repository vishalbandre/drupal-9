<?php

namespace Drupal\sandwich\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines a Sandwich plugin item annotation object.
 *
 * @see \Drupal\sandwich\Plugin\SandwichPluginManager
 * @see plugin_api
 *
 * @Annotation
 */
class SandwichPlugin extends Plugin {


  /**
   * The plugin ID.
   *
   * @var string
   */
  public $id;

  /**
   * The label of the plugin.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public $label;

  /**
   * A berif, human readable, description of the sanchwich type.
   * 
   * This property is designated as being translatable because it will appear
   * in the user interface. This provides a hint to other developers that they
   * should use the Translation() construct in their annotation when declaring
   * this property.
   * 
   * @var \Drupal\Core\Annotation\Translation
   * 
   * @ingroup plugin_translatable
   */
  public $description;

  /**
   * The number of calories per serving of this sandwich type.
   * 
   * This property is a float value, so we indicate that to other developers
   * who are writing annotations for a Sandwich plugin.
   * 
   * @var int
   */
  public $calories;

}

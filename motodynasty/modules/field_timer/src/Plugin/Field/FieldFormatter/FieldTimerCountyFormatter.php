<?php

namespace Drupal\field_timer\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FieldItemInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'field_timer_county' formatter.
 *
 * @FieldFormatter(
 *   id = "field_timer_county",
 *   label = @Translation("County"),
 *   field_types = {
 *     "datetime"
 *   }
 * )
 */
class FieldTimerCountyFormatter extends FieldTimerJsFormatterBase {

  /**
   * {@inheritdoc}
   */
  const LIBRARY_NAME = 'county';

  /**
   * {@inheritdoc}
   */
  const JS_KEY = 'county';

  /**
   * Animation types.
   */
  const
    ANIMATION_FADE = 'fade',
    ANIMATION_SCROLL = 'scroll';

  /**
   * County color themes.
   */
  const
    COUNTY_THEME_BLUE = 'blue',
    COUNTY_THEME_BLACK = 'black',
    COUNTY_THEME_GRAY = 'gray',
    COUNTY_THEME_RED = 'red';

  /**
   * {@inheritdoc}
   */
  public static function defaultSettings() {
    $settings = array(
        'animation' => static::ANIMATION_FADE,
        'speed' => 500,
        'theme' => static::COUNTY_THEME_BLUE,
        'background' => '',
        'reflection' => 1,
        'reflectionOpacity' => 0.2,
      ) + parent::defaultSettings();

    return $settings;
  }

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = parent::viewElements($items, $langcode);

    $ids = $this->generateIds($items);
    $attributes = array(
      'class' => array('field-timer-county'),
    );
    $background = $this->getSetting('background');
    if (!empty($background)) {
      $attributes['style'] = 'background:' . $background . ';';
    }

    foreach ($items as $delta => $item) {
      $elements[$delta] = array(
        '#theme' => 'container',
        '#attributes' => $attributes,
        '#children' => array(
          '#markup' => '<div id="' . $ids[$delta] . '"  data-timestamp="'
          . $this->getTimestamp($item) . '"></div>',
        ),
      );
    }

    return $elements;
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state) {
    $form = parent::settingsForm($form, $form_state);

    $form['animation'] = array(
      '#type' => 'select',
      '#title' => $this->t('Animation'),
      '#options' => $this->animationOptions(),
      '#default_value' => $this->getSetting('animation'),
    );

    $form['speed'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Speed'),
      '#default_value' => $this->getSetting('speed'),
    );

    $form['theme'] = array(
      '#type' => 'select',
      '#title' => $this->t('Theme'),
      '#options' => $this->themeOptions(),
      '#default_value' => $this->getSetting('theme'),
    );

    $form['background'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Background'),
      '#default_value' => $this->getSetting('background'),
      '#description' => $this->t("Data from this field will be added to css property 'background'."),
    );

    $form['reflection'] = array(
      '#type' => 'checkbox',
      '#title' => $this->t('Add reflection'),
      '#default_value' => $this->getSetting('reflection'),
      '#attributes' => array(
        'class' => array('field-timer-county-reflection'),
      ),
    );

    $form['reflectionOpacity'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Reflection opacity'),
      '#default_value' => $this->getSetting('reflectionOpacity'),
      '#description' => $this->t('Float value between 0 and 1.'),
      '#states' => array(
        'invisible' => array(
          'input.field-timer-county-reflection' => array('checked' => FALSE),
        ),
      ),
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $summary = parent::settingsSummary();

    $animation = $this->getSetting('animation');
    $theme = $this->getSetting('theme');
    $reflection = $this->getSetting('reflection');

    $summary[] = $this->t('Animation: @animation', array('@animation' => $this->animationOptions()[$animation]));
    $summary[] = $this->t('Speed: @speed', array('@speed' => $this->getSetting('speed') . 'ms'));
    $summary[] = $this->t('Theme: @theme', array('@theme' => $this->themeOptions()[$theme]));
    $summary[] = $this->t('Background: @css', array('@css' => $this->getSetting('background')));
    $summary[] = $this->t('Reflection: @state', array(
      '@state' => $reflection ? $this->t('Enabled') : $this->t('Disabled'),
    ));
    if ($reflection) {
      $summary[] = t('Reflection opacity: @opacity', array(
        '@opacity' => $this->getSetting('reflectionOpacity'),
      ));
    }

    return $summary;
  }

  /**
   * {@inheritdoc}
   */
  protected function preparePluginSettings(FieldItemInterface $item) {
    $settings = $this->getSettings();
    unset($settings['background']);
    return $settings;
  }

  /**
   * Gets animation options.
   *
   * @return array
   */
  protected function animationOptions() {
    return array(
      static::ANIMATION_FADE => $this->t('Fade'),
      static::ANIMATION_SCROLL => $this->t('Scroll'),
    );
  }

  /**
   * Gets county theme options.
   *
   * @return array
   */
  protected function themeOptions() {
    return array(
      static::COUNTY_THEME_BLUE => $this->t('Blue'),
      static::COUNTY_THEME_RED => $this->t('Red'),
      static::COUNTY_THEME_GRAY => $this->t('Gray'),
      static::COUNTY_THEME_BLACK => $this->t('Black'),
    );
  }

}

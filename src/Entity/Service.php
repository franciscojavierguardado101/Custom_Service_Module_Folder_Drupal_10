<?php

namespace Drupal\my_service\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Field\BaseFieldDefinition;

/**
 * Defines the Service entity.
 *
 * @ingroup service
 */
class Service extends ContentEntityBase {

  /**
   * {@inheritdoc}
   */
  public static function preCreate(EntityInterface $entity, $clone) {
    parent::preCreate($entity, $clone);
    $entity->setNewRevision();
  }

  /**
   * {@inheritdoc}
   */
  public function getBaseFieldDefinitions() {
    $fields = parent::getBaseFieldDefinitions();

    $fields['name'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Service Name'))
      ->setRequired(TRUE);

    $fields['field_description'] = BaseFieldDefinition::create('text_long')
      ->setLabel(t('Description'));

    $fields['field_price'] = BaseFieldDefinition::create('decimal')
      ->setLabel(t('Price'));

    $fields['field_duration'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Duration'));

    return $fields;
  }

  /**
   * {@inheritdoc}
   */
  public function getEntityType() {
    return $this->entityType;
  }

  /**
   * {@inheritdoc}
   */
  public static function entityTypeLabel() {
    return t('Service');
  }
}

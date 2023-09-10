<?php

namespace Drupal\custom_migration_mongo;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface defining a custom migration mongo entity type.
 */
interface CustomMigrationMongoInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

}

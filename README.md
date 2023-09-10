Pre requisites
==============
`migrate_plus` and `migrate_tools` modules

Steps
=====
Install the module : `drush en custom_migration_mongo`

Run the migration : `drush migrate:import cities_migration`

NOTE: Export the migrate_plus configuration (config/install/migrate_plus.migration.cities_migration.yml) to the config directory(For me the location was web/sites/default/files/sync). If we have any change in
configuration later we can modify and Import the configuration: `drush cim` and run the migration again.

Idea
====
a) Create a custom entity type with all the fields mentioned in the collection. 

b) Create a migrate_plus process plugin for processing the json data and mapped to the custom entity fields.

c) There will be UI for the custom entity add and update/ delete also via custom entity UI.
 https://drupal9.5.ddev.site/custom-migration-mongo/<entity-id> 
 
d) To address a future update of the field - for eg: changing the label
of title to city, we just need to modify the mapping in the yaml file and 
run the migration again.

Screenshots of the implementation is available in the `screenshots` folder.

mongo server connection
=======================
Currently the json data placed in the module root folder. But this can be fetched via a cron job and a drush comand to download the collection needed and place it in the root folder. We can write the migrate plus migration for specific collection that will map to the custom entities needed.

The skeleton of the module is generated via drush (module, entity). So there will be some unwanted code (for eg: templates, .module file). please ignore that.

<b>NB<b>: I used D9.5 and php 8.2

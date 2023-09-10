Pre requisites
==============
Migrate plus and migrate tools modules

Steps
====
Install the module : `drush en custom_migration_mongo`
Run the migration : `drush migrate:import cities_migration`


Idea
====
Create a custom entity type with all the fields mentioned in the collection. 
Create a migrate_plus process plugin for processing the json data and mapped to the custom entity fields
There will be UI for the custom entity add and update/ delete also via custom entity UI.
 https://drupal9.5.ddev.site/custom-migration-mongo/<entity-id> 

mongo server connection
=======================
< Some reference around this >
Currently the json data placed in the root folder. But this can be fetched via a cron job and a drush comand to download the collection needed and place it in the root folder. We can write the migrate plus migration for specific collection that will map to the custom entities needed.

Most of the code i generated via drush (module, entity). So i there will be some unwanted code (for eg: templates, .module file). please ignore that.

NB: I used D9.5 and php 8.2
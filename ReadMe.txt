my_service.info.yml: Similar to the previous examples, updated with the autoload section 
specifying the src folder for autoloading.
src/Entity/Service.php: Defines the Service entity class extending ContentEntityBase. 
It includes code for defining base fields, pre-creation logic, entity type information, 
and uses standard field types for name, 
description, price (decimal), and duration (string).
src/Service.module (optional): Similar to the previous examples, it defines hooks for creating 
the "service" bundle and avoids defining field information again, relying on the Service class definition.
OpenME Software Kit Documentation
======

Documentation of the configuration and setting of the OpenME software kit's configurations and settings.

Introduction
======

The OpenME software kit configuration controls the behavior of the OpenME software kit, allowing its user and developers to customize their instance of OpenME for best performance and stability. 

Configurations of OpenME software kit are standard .ini files as used in many other PHP applications. These configurations, when used, are manipulated by the core-file functions library. Configurations can be stored in databases for faster access and reduced file I/O.

File types and standards
======

Configuration file are in .ini forms. By default they are stored in /configuration directory.

A sample configuration can be seem below:

    // File : sample.ini
    
    [Configuration_Section1]
    ConfigurationKey1=ConfigurationValue1
    ConfigurationKey2=ConfigurationValue2
    
    [Configuration_Section1]
    ConfigurationKey3=ConfigurationValue3
    ConfigurationKey4=COnfigurationValue4


A standard configuration file can contain sections and sets of key/values.

### Sections

The OpenME software's configuration manipulation functions always take section as a parameter for performance concerns. However, the PHP pre-built configuration manipulation functions support handling of configurations ignoring section part of the configuration.

Configuration Files
======

Configurations of the OpenME software kit are stored separately in different files for the ease of management. A list of file usage is hereby provided:


    File Name                   Usage              
    
    config-databases.ini        Database information, host, user, and password


Configuration Keys
======

Configuration keys, value type, and usage are hereby provided




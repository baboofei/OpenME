OpenME Software Kit Documentation
======

The overview documentation, including code style guide, general design information, implementation details, data structure used, standard of interface, and guide to improvement and development of the OpenME software kit.

Introduction
------

This documentation file aim to provide developers and administrators with basic knowledge of the software, and to deliver the thoughts and ideas of the contributors of the OpenME software directly to its users. 

Several important collections of information will be provided:

1. Code, documentation, and comment style.
2. Design of the software, architecture and style.
3. Implementation details, file types and interfaces.
4. Data structures, standard file structures.
5. Interface design and extension standard.
6. Guide of development.

Code style
======

All successful implementations of large systems consists of large numbers of code. Taken advantage of hundreds of developers co-operating on one project, these projects also suffer from imcompliance of code styles.

Code style are an important factor affecting the general quality and ability to be further developed of a project. Maintaining a generally standarlized code style is one of the many keys to successful modern software engineering.

Programming language
------

Language Choice:
##### Processing Oriented PHP

The programming language chosen by OpenME is PHP, as it best fit the architecurual charateristics of OpenME. PHP, unlike many other modern programming languages, was initially a Non-OOP language. Its modern versions consists of powerful OOP features.

The OpenME project, however, will employ the Non-OOP aspects of PHP, allowing the development process to be clear off the troublesome complexity of OOP PHP.

Coding styles
------

Any contributor developing the OpenME software kit should make their code style - detailed as the placements of brackets, line-switching, numeric operator usage - as similar as possible to the previously done part of OpenME. 

Documentation and comments
------

Documentations of large projects should be carefully worded and organized, as different word used to describe identical concepts / ideas will often lead to dangerous misconceptions and failure in interpting the documentation.

A project dictionary, however, will not be provided, as it takes extra effort to create said dictionary. One capiable of working in a open sourced project should have the ability of understanding and writting documentations using languages compliant with the previously done work.

### Documentation in Markdown files

The primary documentation will be the in-repo docs. These documentation will be clear off distracting informations - inclduing credits, developing progress, known issues, etc. - Documentations contained in the /documentation directory will always be kept up-to-date with the code.

### Documentations in Github Wiki

Wiki consists more information including the development progress and contribution information. These information, together with issues addressed in Github Issue, will be the primary way of communication between developers, maintainers, and users.

### Documentations in source code files

Inline comment, primarily ones formatted and placed in front of all source code files, are the most important documentations of all. They must be kept up-to-date with each modification, and detail interface information must be provided within these documentations.

Design of the software
======

OpenME is designed under a post-MVC architecture.

### Core

The core function libraries, or "Core", provides very basic functions, supporting user validation, database control, push notification and realtime connetion, file type management, encryption for securities, etc. These functions are 'hidden' from the client-side interfaces once finished.

The core function libraries are designed not to rely on each others to function properly. None of the core functions libraries will need to include or require other files to function. A general interface is implemented for the ease of further usage.

### Libraries

The "Libraries" provides advanced functions based on the "Core". Libraries allow features like avatar, user customized information, posts and forums etc. to be implemented. Libraries can be replaced by other third-party products. Links to third-party service providers (GPlus, Tencent, the original ME etc.) will as well be implemented in libraries. Libraries should as well be hidden from client-side's point of view.

Libraries can include each others for best optimized code reuse.

### Services

"Services", unlike the above two parts of OpenME, are open to client-side calls. They return JSON objects (in the form of strings) containing meta data and actual information. Services are designed to be easily reused and ported. 

For the ease of client side development, a standard JavaScript library providing basic functions to connect to services via ajax will be provided.

Together with libraries, services formed a full controller, and some model features of a post-MVC design. Client side implementations played the role of views, but mostly models. Interfaces between client and services are designed to be safe under all usage conditions.

### Administratives

"Administratives" implements functions such as start and stop of software, initialization of database and configurations etc. Apart from what its name suggests, Administratives are not administrator tools. OpenME is designed to have no administrator users, thus providing absolute security and ease of management.

Administratives contains testing scripts as well, these scripts can be used to test if one library's function interfaces have the expected behaviors.

### Configurations

"Configurations" are JSON files with .config extensions, that contains configuration data used by Core and Libraries. Services should not use configuration files as they should not have their own management policies. Service should only be interfaces to libraries.




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

### Wiki and in-repo docs

The primary documentation will be the in-repo docs. These documentation will be clear off distracting informations - inclduing credits, developing progress, known issues, etc. - Documentations contained in the /documentation directory will always be kept up-to-date with the code.

Wiki consists more information including the development progress and contribution information. These information, together with issues addressed in Github Issue, will be the primary way of communication between developers, maintainers, and users.

Inline comment, primarily ones formatted and placed in front of all source code files, are the most important documentations of all. They must be kept up-to-date with each modification, and detail interface information must be provided within these documentations.

Design of the software
======


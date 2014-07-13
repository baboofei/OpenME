OpenME
======

OpenME is an open sourced clone of the popular anime forum service Missevan.cn

For bug report or usage questions, one should post it in the Github issue section, or create a pull request. Users and developers are welcomed to email to me at:

[Email me!](mailto:babooclaude@hotmail.com)

Chinese documentation
------

Even though me (BabooClaude) speak Chinese as my mother-language, I felt more comfortable documenting the OpenME software kit in English, as my English proficiency is sufficient for such task.

If you are willing to translate any of the documentation / readme into Chinese, feel free to contact me. I would personally appreciate your contribution in advance. Thank you, stranger!

Missevan.cn
======

Introduction
------

Founded in 2010, Missevan.cn is one of the many popular fan-founded forums of animations and cultures in China. Even with a estimated user population of 30,000, Missevan.cn is still growing rapidly.

Features
------

What made Missevan.cn truely different from any other forums of its type are its unique features allowing its users to truely cutomize their online appearance. These features, including:

1. Avatars of its own genre, submitted by its users.
2. Chatrooms
3. Workshops allowing groups of users to collaboratively working on creation and distribution of avatars
4. Currency used to purchase multiple categories of items, including avatars, invitation code for new user registration, and priviliges.
5. Forum, categorized for different posts.
6. Billboard, for ACG news.
7. Voice clips from animes, which seemed to be a _violation_ of copyright.

These features are to be reproduced with brand new implementations in OpenME.

Users
------

Users of Missevan.cn varies from ages, genders, and occupations. The diversity of its user population enabled Missevan.cn to maintain its popularity among new users.

Implementation
------

Missevan.cn is not open sourced and thus risky to be used. Its original creator, Mowangsky, has not yet replied to any of the requests urging him to release the source code of Missevan.cn

Copyright issues
------

OpenME, unlike Missevan.cn, is open sourced and free for redistribution under its license. Its implementation is originally created without any help from the Missevan.cn developers. It does not violate any of the copyright laws in China or the United States. However, one should be aware that OpenME did in fact take its idea and concepts from Missevan.cn. The design of a forum + chatroom + billboard service came directly from Missevan.cn.

OpenME's original features
======

OpenME aims not only to reproduce Missevan.cn, but to introduce new features as well. OpenME will be more sociable than Missevan.cn, with its implementation aiming to be easily ported to mobile devices. OpenME can be distributed freely thus more than one instance of it can exist on the internet.

It's free and of far more fun.

OpenME's implementations
======

OpenME is based on a post-MVC architecture, using only JSON objects to communicate with its clients. Its webservice oriented interface enables it to be ported easily to any device/client. Meanwhile, the core > libraries > services design of OpenME allows other developers to easily add new features to it, allowing third-party plugins to be added.

Core
------

The core directory of OpenME kit implements the basic functions of it, including user control, service handling, socket & pull notification handling, dynamic library controls, file and storage control, and database functions.

Libraries
------

OpenME libraries implements the advanced functions of the OpenME kit. Libraries handles detailed tasks, such as the management of the forum and chatrooms, controls of currency exchange and workshop submissions. Libraries, however, will not be called directly by the client. Such interface is implemented in the services.

Services
------

Services provide the interface for client-side scripts to interact with. It returns standarlized JSON objects containing meta data for easy client-side development. Any developers skilled in basic JavaScript coding will be able to adopt the interfaces of OpenME and create their personalized interface.

Others
------

Other parts of the OpenME kit will be introduced here:

1. Admin: Provides administration features, such as initialization of services, database management, and etc.
2. Configuration: Contains policies and general configuration of the kit.
3. Vendor: Contains third-party prebuilt code.

Documentation
------

For detailed documentation of the OpenME kit, visit its Wiki.

License
------

The OpenME software, excluding its external libraries, are licensed under the GNU General Public License Version 2 (GPLv2). A copy of the license should be obtained together when getting the source code of this software.
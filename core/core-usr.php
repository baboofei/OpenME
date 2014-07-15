<?php

	// OpenME Core Functions Library : User Control
	// 
	// File : core-usr.php
	// Status : Development
	// Version : 0.0.01
	// 
	// Introduction :
	// 
	// This core library provides the OpenME software kit with functionalities
	// to control and manage users by groups. It allows dynamic creation and
	// deletion of users and groups. The user control core library provides only
	// validation and privillige management features, any other additional functions
	// (user avatar, user information, etc.) are provided by external libraries
	// 
	// 'User', external information, and human users.
	// 
	// 		A 'user' is NOT an abstraction of a human user. The common misconception that
	// 		a human user is represented by a 'user' is the source of many faulty designs.
	// 
	// 		In the OpenME software, a 'user' is a linker to connect a human user's online
	// 		activities to the human user himeself. It provides unique identity for each
	// 		human user by validating the identity of the human user, using the very
	// 		traditional validation method of user name + password.
	// 
	// 		'user''s external information, as mentioned above, are all provided by external
	// 		libraries. The core-user library uses its own database, whose structure should
	// 		be kept stable and not modified in all situations. External libraries designed
	// 		to implement further functions will use their own databases. The connection
	// 		between core-user and other user libraries are the 'ID's unique to each user.
	// 		
	// 		The only method of connecting a 'user' to a actual human user (login) is by
	// 		password. However, external identity providers will be used as well for that
	// 		social media connections are important to all modern internet services. These
	// 		functions, such as registration with third-party accounts (GPlus, Tencent, etc.)
	// 		are provided by libraries. These libraries should still use the core-user library
	// 		to store key informations - including user name, password, etc., and control
	// 		user logins with it.
	// 		
	// Some other features that should be implemented apart from core-user
	// 
	// 		Guests. OpenME, by default, will allow human users to use features of it without
	// 		formal registration - meaning they will not need to fill in user names and password.
	// 		However, the architecture of OpenME requires each human user to be linked to online
	// 		actions by a 'user'. Each human user using OpenME services without registration will
	// 		be issued a unique guest 'user', with custom user name, and a static password that will.
	// 		not be saved. Upon logout, a human user's guest 'user' will be destroyed. For further
	// 		design information, check correspondent library documentation.
	// 		
	// 		Currency system. Each human user will own a number of currencies that could be used
	// 		to purchase virtual items. Currency control will be implemented apart from the core-user
	// 		library.
	// 		
	// 		Avatars and custom information. Human users will be allowed to submitt and use custom avatars.
	// 		These avatars will be stored and managed by libraries apart from the core-user. Avatars will be 
	// 		considered as virtual items that can be purchased.
	// 		
	// 		Workshops. Human users are encouraged to join workshops and submit contents created by them to 
	// 		their workshops. Currency distribution and virtual item sale will be managed in workshops. This
	// 		will as well be a separated library.
	// 		   
	// Interface :
	// 
	// 		Configurations :
	// 		
	// 			File : configuration/config-policy-user.config
	// 			
	// 			Keys : 
	// 			
	// 				# User creation policy
	// 			
	// 				is_user_regist			#indicates if user registration is open.
	// 				
	// 				# User load policy
	// 				
	// 				max_user_allowed		#indicates the maxium number of users allowed.
	// 				max_user_online			#indicates the maxium number of users online allowed.
	// 				
	// 				# User login policy
	// 				
	// 				login_user_max_attempts	#max unsuccessful login attempts in times before action taken.
	// 				login_user_max_timeout	#time in minutes before a user's unsuccessful login attempt record timeout.
	// 				login_user_max_policy	#action to take when max login attempts reached for a user
.	// 				
	// 				# User creation details
	// 				
	// 				max_user_name_length	#indicates the maxium number of characters in user names.
	// 				min_user_name_length	#indicates the minimum number of characters in user names.
	// 				max_user_pwd_length		#indicates the maxium number of characters in user passwords.
	// 				min_user_pwd_length		#indicates the minimum number of characters in user passwords.
	// 				regexp_user_name		#a regular expression to validate user names.
	// 				regexp_user_pwd			#a regular expression to validate user passwords.
	// 				
	// 				# User load details
	// 				
	// 				online_user_timeout		#time in minutes before idle users go offline.
	// 				online_user_max_policy	#action to take when max user reached and new users tries to join.
	// 				
	// 				# Anti-hibernation policy
	// 				
	// 				hibernate_user_timeout	#time in days before actions done to users hibernating.
	// 				hibernate_user_policy	#action to take when user hibernating timeout.
	// 				
	// 		Functions :
?>
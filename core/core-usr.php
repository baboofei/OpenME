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
	// 		social media connections are important to all modern Internet services. These
	// 		functions, such as registration with third-party accounts (GPlus, Tencent, etc.)
	// 		are provided by libraries. These libraries should still use the core-user library
	// 		to store key informations - including user name, password, etc., and control
	// 		user logins with it.
	// 		   
	// Interface :
	// 				
	// 		Functions :
	// 		
	// 			Return type 		Name of function 				parameters 							Function Description														Return Description 					Return Code( -98 for unkown error )
	// 			
	// 			// User account management
	// 			
	// 			int 				core_usr_usr_regist				$name, $pwd 						Create an user with given user name and password 							return code 						0 for successful creation, -1 for invalid user name, -2 for invalid password, -3 for user name already present
	// 			int 				core_usr_usr_changepwd 			$name, $pwd, $newpwd 				Change password for given user 												return code 						0 for successfully changed, -1 for unmatch user and password
	// 			int 				core_usr_usr_remove 			$name, $pwd 						Remove user permanently 													return code 						0 for successful removal, -1 for unmatch user and password
	// 			
	// 			// User token management
	// 			
	// 			string, int 		core_usr_usrtoken_get 			$name, $pwd 						Login with user, create temporary token for authorization					Token, return code 					-1 for unmatch user name and password, 1 for token already exist for given user
	// 			int 				core_usr_usrtoken_test			$name, $token 						Test if token is authorized and valid for user 								return code 						0 for token valid, -1 for token not authorized for this user
	// 			int 				core_usr_usrtoken_remove		$name, $token 						Deauthorize token for user 													return code 						0 for token removed, -1 for token and user mismatch, -2 for token not authorized for this user
	// 			int 				core_usr_usrtoken_active 		$name 								Activate user for token creation 											return code 						0 for successfully activated, -1 for user not present in database, 1 for user already active
	// 			int 				core_usr_usrtoken_deactive		$name 								Deactivate user for token creation. Will remove current token 				return code 						0 for successfully deactivated, -1 for user not present in database, 1 for user already deactive, 2 for token removed
	// 			
?>
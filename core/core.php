<?php

	// OpenME Core : General Assembly
	// 
	// File : core.php
	// Status : Development
	// Version : 0.0.01
	// 
	// Introduction :
	// 
	// This general assembly script assembles all functions implemented in OpenME
	// core functions libraries, pack them together, and provide the upper libraries
	// with usable functions.
	// 
	// Functions in this general assembly will not only wrap up the core functions, but
	// as well provide features such as general integrity.
	// 
	// Note that all other core libraries should be implemented in a way that they do not
	// rely on each others. For example, core-crypto should not implement any functions
	// regarding database encryption, but only universal encryption schemas; The core-usr 
	// functions library should not implement any features invloving file upload validation
	// by user identity, etc.
	// 
	// This assembly will, for example, bond encryption and database functions together
	// and provide general interface. This way all the core functions libraries can be maintained
	// separately thus reduce maintaince difficulty.
	// 
	// Features to be implemented only within this general assembly:
	// 
	// 		core-usr : 
	// 		
	// 			Barely anything besides database controls. Core user control is design to work independently
	// 			and no other libraries should interact with it.
	// 			
	// 			1.	Database for user information storage (core-usr + core-db)
	// 			2.	Configuration loading (core-usr + core-file)
	// 			
	// 		core-db :
	// 		
	// 			1.	Default database configuration loading (core-db + core-file)
	// 			2.	Database configuration storage (core-db + core-file)
	// 			3.	Encryption for security (core-db + core-crypto)
	// 			
	// 		core-file :
	// 		
	// 			1.	Configuration loading and storage (core-file + core-db)
	// 			2.	File cache meta data storage (core-file + core-db)
	// 			3.	Cloud storage meta data storage (core-file + core-db)
	// 			4.	File encryption (core-file + core-crypto)
	// 			
	// 		core-lib :
	// 		
	// 			1.	Configuration loading (core-lib + core-file)
	// 			2.	Library information storage (core-lib + core-db)
	// 			3.	Library meta data loading (core-lib + core-file)

?>
<?php

	// OpenME Core Functions Library : Library Access
	// 
	// File : core-lib.php
	// Status : Development
	// Version : 0.0.01
	// 
	// Introduction : 
	// 
	// This core library provides the libraries of the OpenME software kit
	// with access to its core functions. The library by itself does not
	// implement any functions. Instead, this library collect functions 
	// from other core libraries, and package them for access from libraries
	// 
	// The core-lib core function library, however, does manage access
	// to its member functions. It controls fallback functions - when a older
	// version of a library calls a function in a newer core, it automatically
	// determines the version of the library and provide correspondent functions.
	// This feature is implemented by wrapping the original functions in other
	// core libraries with a new function taking version number of request function
	// as a parameter. Core-lib thus determine which function to provide with the
	// given version number
	// 
	// Interface:
	// 
	// 		Configurations:
	// 		
	// 			File: /configuration/config-lib.config
	// 			
	// 			Keys:
	// 			
	// 				# Core library access control
	// 				
	// 				lib_fallback_enabled		#indicates if fallback by version functionality is enabled
	// 				lib_fallback_policy			#action to take when libraries try to access core functions with unmatch versions
	// 				lib_fallback_backup			#action to take when all previous fallback attemption fails
	// 				
	// 		Functions:	

?>
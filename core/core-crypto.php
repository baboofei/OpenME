<?php

	// OpenME Core Functions Library : Cryptography
	// 
	// File : core-crypto.php
	// Status : Development
	// Version : 0.0.01
	// 
	// Introductions :
	// 
	// The core cryptography functions library provides basic functions of encryption
	// for security. This core functions library packs PHP built-in encryption functions
	// into ease-of-use interfaces and allow upper libraries to employ them.
	// 
	// Why bother implementing these?
	// 
	//		 Dependending on runtime environment and deployment configuration, OpenME can run
	//		 with both securly encrypted connections (HTTPS), and connections without
	//		 encryption (HTTP). Due to security reasons, OpenME requires crucial information
	//		 and data to be transferred under secured connections. This, however, may not always
	//		 be possible and might cause server performance to decrease.
	//	
	// What does this do and what does it not?
	// 	
	//		 This library will not provide any implementations for detailed tasks.
	//		 For example, the core crypto library will have schemas for file encryptions, however
	//		 it will not try to determine if its encryption source is a file or not. These features
	//		 will be implemented in the core assembly, and the core assembly will pass its decisions
	//		 on funtion use as parameters to this core functions library.
	//
	// Interfaces :
	// 
	// 		Configurations :
	// 		
	// 			File : config-security.config
	// 			
	// 			Keys : 
	// 			
	// 				# General configuration
	// 				
	// 				crypto_default_mode 			#mode of encryption to be used by default
	// 				crypto_backup_mode				#mode of encryption to use when default or task-specific mode doesn't work
	// 				crypto_default_key_size 		#size of key to be used by default
	// 				crypto_default_key_file 		#OpenSSL key file to be used by default
	// 				crypto_max_key_size				#maxium key size allowed for encryption
	// 				crypto_min_key_size 			#minimum key size allowed for encryption
	// 				
	// 				# Security policy
	// 				
	// 				crypto_fallback					#what to do if encryption fails

?>
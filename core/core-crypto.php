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
	// Dependending on runtime environment and deployment configuration, OpenME can run
	// with both securly encrypted connections (HTTPS), and connections without
	// encryption (HTTP). Due to security reasons, OpenME requires crucial information
	// and data to be transferred under secured connections. This, however, may not always
	// be possible and might cause server performance to decrease.
	// 
	// This library allows easy encryption of files and data structures, allowing them
	// to be transffered safely through internet. Should this encryption library
	// employ more than one encryption schemas.
	// 
	// The encryption library currently will directly use OpenSSL functions, for the ease
	// of implementation. This library will basically be an wrap-up of these functions, however
	// more secure and easy to use.
	// 
	// File encryption, however, posses more difficulty and should be made as simple as possible.
	// Due to the massive amount of processor time required in file encryptions, large files
	// (for example, custom file types as defined in core file loader functions library), will
	// not be encrypted. This encryption library aims to protect information that a).will be 
	// transferred under unsafe connections, or b).are crucial to system security and need
	// to be stored safely.
	// 
	// Upper libraries and services, for example user control libraries and services, should
	// be designed in a way that a meta data regarding encryption schema and such is including
	// when encrypted data is being transferred from client to OpenME server. This meta data
	// will be passed into this core functions library and thus used for decryption.
	// 
	// Note that user information must always be stored secured. Security of the users' personal
	// information is one of the primary concerns of the OpenME software kit.
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
	// 				crypto_enabled			#indicates if encryption functions will be used
	// 										 these functions will return unencrypted input if not enabled
	// 				crypto_mode 			#mode of encryption
	// 				
	// 				# Database encryption configuration
	// 				
	// 				dbencrypt_enabled 		#indicates if database encryption will be enabled
	// 				dbencrypt_usr_enabled 	#indicates if user information in db_core_usr will be encrypted
	// 				dbencrypt_file_enabled 	#indicates if file information in db_core_file will be encrypted
	// 				
	// 				# File encryption configuration
	// 				
	// 				fileencrypt_enabled 	#indicates if file encryption will be enabled
	// 				fileencrypt_predefined 	#indicates if encryption of predefined file types will be enabled
	// 				fileencrypt_custom 		#indicates if encryption of custom file types will be enabled
	// 				fileencrypt_types		#a list of file types that will be encrypted

?>
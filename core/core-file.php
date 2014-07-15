<?php

	// OpenME Core Functions Library : File Loader
	// 
	// File : core-file.php
	// Status : Development
	// Version : 0.0.01
	// 
	// Introduction : 
	// 
	// The core file loader library provides upper libraries of OpenME the ability
	// to load, read, and write predefined file types. It allows easy access and 
	// cache of configuration files, and manipulation of some other file types.
	// 
	// This core functions library is also in charge of controlling file uploads.
	// Once user submit user created content, functions within this core library
	// will be called to handle these contents.
	// 
	// What does this do and what does it not
	// 
	//		 This core functions library will not try to determine file types or usage.
	//		 Instead, it provides functions for general manipulation of file cache and
	//		 fast access. For configuration loadings, it uses standard PHP objects for
	//		 storage of results. This way it does not rely on any other core functions
	//		 libraries.
	//		 
	// File meta etc.
	// 
	//		 Note that this core functions library will also handle tasks such as
	//		 generation of file meta data for cache access, renaming of files for 
	//		 centralized storage, etc. These tasks are done for the ease of implementing
	//		 database based file management system. However database related tasks will
	//		 not be implemented within this script.
	//		 
	// Configuration loading
	// 
	// 		This core functions library loads configurations from configuration files
	// 		and return them as standard objects. It also handles writing of configurations.
	// 			
	// 	Interfaces :
	// 	
	// 		Configurations : 
	// 		
	// 			File : config-file.config
	// 			
	// 			Keys : 
	// 			
	// 				# File storage configurations
	// 				
	// 				filestore_dir				#directory to store files
	// 				filestore_rename_enabled	#rename files when stored
	// 				filestore_rename_prefix		#prefix to be added to all file names renamed
	// 				filestore_oversize_compress	#indicates if compression will be used for oversized files
	// 				filestore_oversize_backup	#indicates what to do if compression fails
	// 				filestore_oversize_size		#what size will be defined as oversized
	// 				
	// 				# File meta data generation configurations
	// 				
	// 				filemeta_mode				#mode of file meta data generation
	// 				filemeta_field_originalname	#indicates if original file name will be included in meta
	// 				filemeta_field_size			#indicates if file size will be included 
	// 				filemeta_field_keywords		#indicates if keywords will be included
	// 				filemeta_field_keywordnum	#number of keywords to be included if keywords will be included
	// 				
	// 				# Configuration loading configurations
	// 				
	// 				config_mode 				#mode of configuration loading
	// 				config_write_validate		#validate if structure of configuration written is valid
	// 				config_write_override 		#indicates if overriding existing configuration will be permitted
	// 				
	// 				
	// 				
	// 		Functions :

	function core_file_load_config($file)
	{
		
	}

	function core_file_write_config($file)
	{

	}

	function core_file_change_config($file)
	{
		
	}

?>
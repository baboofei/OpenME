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
	// The OpenME software kit categorize all files into two types : predefined, and
	// custom. Predefined files are configuration files, libraries, etc. These files
	// need no meta data with them, and shall be loaded directly into the working system.
	// For example, the core file loader library will load configuration files
	// directly into database, without checking its meta data. This allows cache of
	// configuration files and will increase performance of the software by
	// reducing file I/O.
	// 
	// Custom files, however, will not be loaded, but rather stored and indexed for
	// further use. These files will most likely be static resources, and will need
	// to be validated before use. For example, upper libraries will call functions
	// in file loader core library in order to handle user uploaded avatars. The file
	// loader library will create meta data JSON file from these uploaded files, and
	// cache file information in a database. When any front-end requires these files,
	// the file services created upon a upper library and the core file loader library
	// will determine the parameters regarding file information, and dynamically
	// load the file. This will again increase performance, by reducing file I/O.
	// 
	// This core functions library will as well handle large files for download.
	// These files, including compressed archives, videos, audio, documents etc.,
	// will be stored apart from the OpenME server, in cloud services.
	// 
	// Note that the core file loader library should never allow upload of any predefined
	// file types, as they might harm the OpenME software's integrity and security.
	// 
	// File types :
	// 
	// 		Predefined :
	// 		
	// 			*.config 	#OpenME Configuration files
	// 			*.php 		#PHP Scripts, component of OpenME
	// 			*.*.meta 	#Meta data file for custom file types
	// 			
	// 		Custom :
	// 		
	// 			Images 		#Meta data will be generated from in file meta, can be overrided
	// 						 with user provided information
	// 			Videos 		#Meta data will be generated from in file meta
	// 			Documents 	#Meta data will be generated from file content, using keywords
	// 			
	// 	Interfaces :
	// 	
	// 		Configurations : 
	// 		
	// 			File : config-file.config
	// 			
	// 			Keys : 
	// 			
	// 				# General configurations
	// 				
	// 				upload_enabled				#indicates if file uploads will be handled
	// 				upload_predefined_enabled	#indicates if uploads of predefined file types will be enabled
	// 				upload_custom_enabled 		#indicates if uploads of custom file types will be enabled
	// 				upload_dir 					#directory to store uploaded files
	// 				
	// 				# Configuration loader configurations
	// 				
	// 				config_load_enabled 		#indicates if configuration caching will be enabled
	// 				config_load_exception		#a list of configuration files that will not be cached
	// 				config_load_autorefresh		#indicates if auto refresh of configuration cache will be enabled
	// 				config_load_autorefresh_time#time in minutes between refreshes of configuration caches
	// 				
	// 				# File cache configurations
	// 				
	// 				file_cache_enabled			#indicates if file cache will be enabled
	// 				file_cache_types 			#a list of file types to be cached
	// 				file_cache_refresh			#time in minutes between refreshes of cached files
	// 				file_cache_meta_mode		#use meta files or database to store meta datas
	// 				file_cache_meta_dir			#directory to store file meta datas
	// 				file_cache_meta_db 			#database to store file meta datas
	// 				
	// 				# Cloud storage configurations
	// 				
	// 				cloud_cache_enabled 		#indicates if cloud storage of large files will be enabled
	// 				cloud_cache_types 			#a list of file types to be cached in cloud
	// 				cloud_cache_size_min 		#minimum size in kB of file to be cached in cloud
	// 				cloud_cache_size_max		#maxium size in kB of file to be cached in cloud
	// 				cloud_cache_service			#service to be used to store cloud file caches
	// 				
	// 		Functions :

?>
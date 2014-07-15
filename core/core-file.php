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
	//		 This core functions library will handle tasks including database manipulation.
	//		 It uses its own database to handle file records etc.
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
	// 		Functions :
	// 		 
	// 			Return type 		Name of function 				parameters 							Function Description														Return Description 					Return Code( -99 for unkown error )
	// 			
	// 			// Configuration loading
	// 			
	// 			?, int	 			core_file_config_read 			$file, $section, $key  			 	Read a configuration value from given file, section, and key.				Value of key, return code 			-1 for file not found, -2 for section or key not found, -3 for invalid file content
	// 			int 				core_file_config_write 			$file, $section, $key, $value 		Write configuration value to given key.										return code  						0 for written successfully, -1 for file not found, 1 for overrided existing config
	// 			
	// 			// Configuration caching
	// 			
	// 			int 				core_file_configcache_load 	 	$file, $section, $key 				Record configuration(s) in cache database. Section and Key are optional. 	return code  						0 for recorded successfully, -1 for file, section, or key not found, 1 for overriding existing records
	// 			int 				core_file_configcache_unload 	$file, $section, $key 				Unload configuration(s) from cache database. Parameters are optional.	 	return code 						0 for unloaded, 1 for file, section, or key not found
	// 			int 				core_file_configcache_reload 	$file, $section, $key 				Save changes and reload cache database. Parameters are optional.	 		return code 						0 for reloaded, 1 for changes saved, -1 for file, -2 for section, or key not found when trying to load
	// 			?, int 				core_file_configcache_read 		$file, $section, $key 				Read a configuration value from given file, section, and key from cache. 	Value of key, return code 			-1 for file, section, or key not found in database when trying to load
	// 			int 				core_file_configcache_write 	$file, $section, $key 				Write a configuration value to given key in database.						return code 						0 for written successfully, -1 for file, section, or key not found, 1 for overrided existing config
	// 			
	// 			// Dynamic file manipulation
	// 			
	// 			array, int 	 		core_file_store_movein 			$file, $info 		 				Move a existing file to storage, creating meta data  					 	Meta data, return code 	 		    -1 for missing file, -2 for invalid information
	// 			int 				core_file_store_remove 			$meta 								Removing the file belonging to the meta 									return code 						0 for removed successfully, -1 for invalid meta, 1 for missing file
	// 			array, int 			core_file_store_compress 		$meta 								Compress the file belonging to the meta, creating new meta data 			Meta data, return code 				-1 for missing file, -2 for invalid meta, -3 for compress error
	// 			array, int 			core_file_store_uncompress 		$meta 								Uncompress the file belonging to the meta, creating new meta data 			Meta data, return code 				-1 for missing file, -2 for invalid meta, -3 for uncompress error
	// 			
	// 			// Dynamic file record manipulation
	// 			
	// 			int 				core_file_storerec_record 		$meta 								Record a meta data into dynamic file database, will check if file exist 	return code 						0 for recorded, -1 for invalid meta, -2 for missing file, 1 for overriding existing record
	// 			array, int 			core_file_storerec_find 		$info								Find recorded meta data by information provided 							Meta data list 						-1 for invalid information
 	// 			
	// 			// Static file manipulation
	// 			
	// 			int 				core_file_static_map 			$file, $id 							Map a static file to a id 													return code 						0 for successfully mapped, -1 for missing file, -2 for invalid id, 1 for overriding existing record
	// 			string, int 		core_file_static_find 			$id 								Find the file of a existing id. This will test if the file exist 			File route, return code 			-1 for missing record, -2 for missing file
	// 			
	// 			// General file manipulation
	// 			
	// 			buffer, int 		core_file_gen_get 				$file 								return a file's content. Binary safe 										File content, return code  			-1 for missing file
	// 			
	// 			
	// 			

?>
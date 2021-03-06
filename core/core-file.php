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
	// 			int 				core_file_storerec_remove 		$meta 								Remove given meta data from database. Meta data must be exactly the same 	return code 						0 for removed successfully, -1 for file meta not present
 	// 			
	// 			// Static file manipulation
	// 			
	// 			int 				core_file_static_map 			$file, $id 							Map a static file to a id 													return code 						0 for successfully mapped, -1 for missing file, -2 for invalid id, 1 for overriding existing record
	// 			buffer, int 		core_file_static_find 			$id 								Find the file of a existing id.									 			File content, return code 			-1 for missing record, -2 for missing file
	// 			
	// 		Databases :
	// 		
	// 			Tables :
	// 			
	// 				core_configdb
	// 				
	// 				id 			config_key 			config_value 			config_section 			config_file
	// 				
	// 				integer 	varchar 			varchar 				varchar 				varchar
	
	// Whenever this file is loaded as a core library
	// it will be recommended that it checks current working directory
	// just to make sure relative file routes will work
	// 
	// If not, this file will attempt to fix the problem
	// However, if this file is not properly placed under /core
	// attemptions will fail

	// TODO: Provide better solution to this file problem

	$root = dirname(dirname(__FILE__));

	if(getcwd() != $root)
	{
		// It seems current working directory is not root
		// Attempt to fix the problem
		
		chdir($root);

		// Always use something like 'configuration/config-*.ini'
		// rather than '/configuration/config-*.ini'
	}
	// These functions need to be implemented before any others
	// in order for core-file to load configurations for itself
	// 
	// The config reading functions will always take sections
	// 
	// This might cause problem if this file is being required
	// or included
	
	function core_file_config_read($file, $section, $key)
	{

		if(file_exists($file))
		{
			$config_cont = parse_ini_file($file, true);

			if(!$config_cont)
			{
				return -3;
			}

			if(array_key_exists($section, $config_cont))
			{
				if(array_key_exists($key, $config_cont[$section]))
				{
					return $config_cont[$section][$key];
				}
				else
				{
					return -2;
				}
			}
			else
			{
				return -2;
			}
		}
		else
		{
			return -1;
		}
	}

	function core_file_config_write($file, $section, $key, $value)
	{
		// What this function does is it reads the existing configuration
		// file strings to a variable
		// 
		// and change only the required parts
		// then put it back into the given file
		// 
		// For all code subroutes with return code 0 or positive integer
		// DO NOT forget to save the array to file!
		
		if(file_exists($file))
		{
			$config_cont = parse_ini_file($file, true);

			if(!$config_cont)
			{
				return -3;
			}

			if(array_key_exists($section, $config_cont))
			{
				if(array_key_exists($key, $config_cont[$section]))
				{
					$config_cont[$section][$key] = $value;

					file_put_contents($file, "");

					foreach($config_cont as $cont_section => $cont_section_cont)
					{
						file_put_contents($file, "\n[$cont_section]\n\n", FILE_APPEND);
						
						foreach($cont_section_cont as $cont_section_key => $cont_section_key_cont)
						{
							file_put_contents($file, "$cont_section_key=$cont_section_key_cont\n", FILE_APPEND);
						}
					}

					return 1;
				}
				else
				{
					$config_cont[$section][$key] = $value;

					return 3;

					file_put_contents($file, "");

					foreach($config_cont as $cont_section => $cont_section_cont)
					{
						file_put_contents($file, "\n[$cont_section]\n\n", FILE_APPEND);
						
						foreach($cont_section_cont as $cont_section_key => $cont_section_key_cont)
						{
							file_put_contents($file, "$cont_section_key=$cont_section_key_cont\n", FILE_APPEND);
						}
					}
				}
			}
			else
			{
				$config_cont[$section] = array();

				$config_cont[$section][$key] = $value;

				file_put_contents($file, "");

				foreach($config_cont as $cont_section => $cont_section_cont)
				{
					file_put_contents($file, "\n[$cont_section]\n\n", FILE_APPEND);
					
					foreach($cont_section_cont as $cont_section_key => $cont_section_key_cont)
					{
						file_put_contents($file, "$cont_section_key=$cont_section_key_cont\n", FILE_APPEND);
					}
				}

				return 0;
			}

		}
		else
		{
			return -1;
		}
	}

	// These functions require previously implemented functions
	// in order to read database configurations properly
	
	$core_file_configdb_host = core_file_config_read("configuration/config-databases.ini", "Core_Database_Configurations", "Configuration_Database_Host");
	$core_file_configdb_usr = core_file_config_read("configuration/config-databases.ini", "Core_Database_Configurations", "Configuration_Database_Username");
	$core_file_configdb_pwd = core_file_config_read("configuration/config-databases.ini", "Core_Database_Configurations", "Configuration_Database_Password");
	$core_file_configdb_name = core_file_config_read("configuration/config-databases.ini", "Core_Database_Configurations", "Configuration_Database_Name");

	$core_default_db_name = core_file_config_read("configuration/config-databases.ini", "General_Database_Configurations", "Default_Backup_Name");

	// Database structure as defined above in inline documentations

	function core_file_configcache_load($file, $section, $key)
	{
		$db_conn = mysql_connect($core_file_configdb_host, $core_file_configdb_usr, $core_file_configdb_pwd);

		if($db_conn)
		{
			if(mysql_select_db($core_default_db_name))
			{
				$config_to_rec_value = core_file_config_read($file, $section, $key);

				if($config_to_rec_value != -1 || -2 || -3)
				{
					$query = '';	// TODO: Create correspondent query here

					$query_safe = mysql_real_escape_string($query);
				}
			}
		}
	}

	// TODO: Add these functions

	function core_file_configcache_unload($file, $section, $key)
	{

	}

	function core_file_configcache_reload($file, $section, $key)
	{

	}

	function core_file_configcache_read($file, $section, $key)
	{

	}

	function core_file_configcache_write($file, $section, $key)
	{

	}

	// These functions take standard file meta data as parameters

	function core_file_store_movein($file, $info)
	{

	}

	function core_file_store_remove($meta)
	{

	}

	function core_file_store_compress($meta)
	{

	}

	function core_file_store_uncompress($meta)
	{

	}

	// These functions take meta data and uses database operations
	
	function core_file_storerec_record($meta)
	{

	}

	function core_file_storerec_find($meta)
	{

	}

	function core_file_storerec_remove($meta)
	{

	}

	// These functions play around with static files and record them in databases
	
	function core_file_static_map($file, $id)
	{

	}

	function core_file_static_find($id)
	{

	}
?>
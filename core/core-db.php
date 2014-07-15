<?php

	// OpenME Core Functions Library : Database Management
	// 
	// File : core-db.php
	// Status : Development
	// Version : 0.0.01
	// 
	// Introduction:
	// 
	// The core database management library provides upper libraries with access
	// to predefined database structures. Note that this library, however, does
	// not provide any database functions despite access to core library databases.
	// 
	// Distributed databases
	// 
	//		 The databases defined in this library can be deployed on separate servers for
	//		 better performance. It also supports backup functions, allowing administrative
	//		 tools to create images of the data on separate servers, and dynamically switch
	//		 from one to another.
	// 
	// The OpenME software aim to use the LAMP environment (Linux, Apache, MySQL, PHP)
	// as its primary deployment choice. However, it could be ported to other
	// working environments (e.g. Windows, IIS, MSSQL, PHP), as soon as a working
	// PHP environment is present.
	// 
	// Database usage and performance
	// 
	//		 Permitted by the improving hardware performance and software efficiency, OpenME
	//		 uses rapid database actions to handle tasks such as login session control and
	//		 interface validation. These tasks require low latency database read/write, thus
	//		 a effective database connection will be essential for this library to function
	//		 effectively.
	// 
	// Note this library, aside from core-file and core-crypto, is the only core function libraries that
	// can be included in other core function libraries.
	// 
	// Supported Database Applications :
	// 
	// 		MySQL
	// 		Microsoft SQL Server
	// 
	// Databases and tables
	// 
	// 		Note that databases and tables are different concepts in SQL databases.
	// 		Libraries should read configuration files to determine which databse
	// 		should their tables be placed under. 
	// 		
	// 		For example, a user avatar provider library should place its databasesmysql 
	// 		linking user to avatars under 'datahost_usrdb_dbname' database. This way
	// 		administrative tools can better organize resources and backup utilities.
	//  
	// This library does not implement any database table structures. It does, however, allow
	// creation of databases using JSON based database description files. It will not
	// optimize any of its functions specifically for tasks such as storage and manipulation
	// of configuration keys. This is crucial to the general integrity of the system.
	// 
	// Interfaces : 
	// 
	// 		Configurations : 
	// 		
	// 			File : config-database.config
	// 			
	// 			Keys : 
	// 			
	// 				# General database configurations
	// 				
	// 				database_default_mode			#default mode of database to be used
	// 				database_default_host			#default host to be used for data storage
	// 				database_default_user_name		#default user name to be used for said database
	// 				database_default_user_password	#default password to be used for given user
	// 				

?>
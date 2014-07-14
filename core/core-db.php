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
	// The databases defined in this library can be deployed on separate servers for
	// better performance. It also supports backup functions, allowing administrative
	// tools to create images of the data on separate servers, and dynamically switch
	// from one to another.
	// 
	// The OpenME software aim to use the LAMP environment (Linux, Apache, MySQL, PHP)
	// as its primary deployment choice. However, it could be ported to other
	// working environments (e.g. Windows, IIS, MSSQL, PHP), as soon as a working
	// PHP environment is present.
	// 
	// Permitted by the improving hardware performance and software efficiency, OpenME
	// uses rapid database actions to handle tasks such as login session control and
	// interface validation. These tasks require low latency database read/write, thus
	// a effective database connection will be essential for this library to function
	// effectively.
	// 
	// Note this library, aside from core-fs, is the only core function libraries that
	// can be included in other core function libraries.
	// 
	// Supported Database Applications :
	// 
	// 		MySQL
	// 		Microsoft SQL Server
	// 
	// Databases and tables
	// 
	// 		Note that 
	// 
	// This core function library defined several database table structures :
	// 
	// 		db_core_user
	// 
	// 			user_id 	user_name 		password 		crt_time 		login_time 		login_attempt		is_active
	// 		
	// 			integer 	varchar 		varchar 		timestamp 		timestamp 		tinyint 			boolean
	// 		
	// 		db_core_func
	// 
	// 			func_id		func_name 		func_param		func_return 	func_version	func_isinuse
	//			
	//			integer 	varchar 		varchar(json)	varchar(json)	varchar 		boolean
	//	
	//	Interfaces :
	//	
	//		Configurations :
	//		
	//			File : configuration/config-databse.config
	//			
	//			Keys : 
	//			
	//				# General data storage configuration
	//				
	//				datahost_usrdb_host		#Host of database used to store user information
	//				datahost_usrdb_usr		#User name for database used to store user information
	//				datahost_usrdb_pwd		#Password for database used to store user information
	//				datahost_funcdb_host	#Host of database used to store interface information
	//				datahost_funcdb_usr		#User name for database used to store interface information
	//				datahost_funcdb_pwd		#Password for database used to store interface information
	//				
	//				# General data storage detail
	//				
	//				datahost_usrdb_dbname	#Name of the user information database (db_core_user)
	//				datahost_funcdb_dbname	#Name of the interface information database (db_core_func)

?>
<?php

	// OpenME Core Functions Library : Service Interface
	// 
	// File : core-svc.php
	// Status : Development
	// Version : 0.0.01
	// 
	// Introductions : 
	// 
	// This core functions library provides interface standards for client side
	// scripts to interact with. Services, implemented upon libraries and core 
	// functions, will use functions implemented within this file to handle requests
	// and return results. This core functions library will provide direct interface
	// for services to call, without libraries as mid-layer.
	// 
	// Why no mid-layer design
	// 
	// 		A library, as defined in the OpenME documentation, handles tasks such
	// 		as detailed implementation of logic. However, this core function library's
	// 		interfaces need no upper logic.
	// 		
	// What does it do
	// 
	// 		This library produces universaly usable return JSONs, allowing all services
	// 		to share a standard return type for client side to handle - including 
	// 		information about the serivce returning this JSON, return code of the service
	// 		called, and in case any code executtion fails, error information.
	// 		
	// 		This core functions library also validates identity of client side applications.
	// 		This feature is disabled by default, however can be enabled thus preventing
	// 		unauthorized clients to access running OpenME services.
	// 		
	// How should services use this library
	// 
	// 		A warp around - a single file includer including some features of client side
	// 		request control, will be provided outside the core libraries for structural 
	// 		integrity.
	// 		
	// Interfaces :
	// 
	// 		Functions :
	// 				
	// 			Return type 		Name of function 				parameters 							Function Description														Return Description 					Return Code( -99 for unkown error )
	//	
	//			int 				core_svc_service_register		$meta 								Register a service with given meta data 									ID, return code 					-1 for invalid meta data
	//			int 				core_svc_service_unreg 			$id 								Remove a service from registration database 								return code 						0 for removed successfully, 1 for service not present
	//			
	//			array, int 			core_svc_interface_parseparam	$json 								Parse a JSON object into parameter meta data 								Parameters, return code 			-1 for invalid JSON
	//			int 				core_svc_interface_checkparam 	$id 								Compare created parameter with service's required parameters 				return code 						0 for comparasion passed, -1 for comparassion unsucessful
	//			array, int 			core_svc_interface_callsvc 		$id, $param 						Call a service with ID with given parameters 								Result, return code 				-1 for missing service in database, -2 for invalid parameters
	//			string 				core_svc_interface_parseresult 	$result 							Parse a array result object into JSON object string 						Result 								.
	
	

?>
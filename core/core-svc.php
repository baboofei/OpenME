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
	// 		Configurations : 
	// 		
	// 			Files : config-services.config
	// 			
	// 			Keys :
	// 			
	// 				# General service usage configurations
	// 				
	// 				service_enabled				#indicates if services are enabled
	// 				
	// 				# Validating configurations
	// 				
	// 				service_validate_enabled	#indicates if clients will need to be validated before using services
	// 				service_validate_mode		#indicates mode to be used for client validation
	// 				
	// 				# Client version control configurations
	// 				
	// 				version_check_enabled		#enable version check
	// 				version_allowed_newest		#newest version of client allowed to access service
	// 				version_allowed_oldest		#oldest version of client allowed
	// 				
	// 				# Service version control configurations
	// 				
	// 				svcver_check_enabled		#enable services version check
	// 				svcver_fallback				#action to take when a service's version mismatch requested version
	// 				svcver_exceptions			#a list of services excluded from version check
	// 				
	// 				# Return type configurations
	// 				
	// 				return_field_svcname		#indicates if service name will be included for return JSONs
	// 				return_field_svcver			#indicates if service version will be included
	// 				return_field_err			#indicates if error code will be included if present
	
	

?>
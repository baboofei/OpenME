<?php

	// OpenME Core : General Assembly
	// 
	// File : core.php
	// Status : Development
	// Version : 0.0.01
	// 
	// Introduction :
	// 
	// This general assembly script assembles all functions implemented in OpenME
	// core functions libraries, pack them together, and provide the upper libraries
	// with usable functions.
	// 
	// Functions in this general assembly will not only wrap up the core functions, but
	// as well provide features such as general integrity.
	// 
	// Note that all other core libraries should be implemented in a way that they do not
	// rely on each others. For example, core-crypto should not implement any functions
	// regarding database encryption, but only universal encryption schemas; The core-usr 
	// functions library should not implement any features invloving file upload validation
	// by user identity, etc.
	// 
	// This assembly will, for example, bond encryption and database functions together
	// and provide general interface. This way all the core functions libraries can be maintained
	// separately thus reduce maintaince difficulty.

?>
<?php

	// OpenME Core Functions Library : Push Notification
	// 
	// File : core-pshnot.php
	// Status : Development
	// Version : 0.0.01
	// 
	// Introduction : 
	// 
	// This core functions library provides the OpenME software kit with ability
	// to control push notifications and send these push notifications to client
	// implementing this feature.
	// 
	// Push notification is mainly used on mobile devices, allowing notifications
	// from online serivces to be rapidly delivered to its users. The difference
	// between this core functions library and core-realtime core functions library
	// is all about its implementation and usage.
	// 
	// Push notifications, unlike socket connections, are optimized for mobile devices
	// to employ. By using long pending TCP/IP connections, servers and easily 'push'
	// data to client. Major mobile computing platforms - including Google Andoird, 
	// Apple iOS, etc. - have different implementations of this feature.
	// 
	// For iOS devices, push notifications must be sent via Apple servers, thus allowing
	// only one TCP/IP connection to be established and maintained. This does not only
	// ensured security of push notifications (only registered Apple developers have access)
	// to push notification services, but as well enhanced battery life and effectiveness of
	// notifications.
	// 
	// For Android devices, due to the fact that device vendors each distributed 
	// different implementations of the Android OS, a centralized notification server
	// does not exist. Android applications tend to use their own push notification connections,
	// or the Google Cloud push notification service (however this service might not be publicly
	// accessable, especially within the People's Republic of China). Some third-party servers
	// implements a centeralized push notification server within China, however.
	// 
	// The push notification core functions library will only be used by notification uses.
	// 
	// For web clients, push notification might not be necessary as a implementation of
	// realtime socket connection is also made avaliable by OpenME software kit.

?>
cicregister
===========

TYPO3 Front-end User Registration and Login (ExtBase/Fluid)

## Dependancies: 
+ TYPO3 CMS 6.2.X
+ cicbase
+ bootstrap CSS

## Installation/Setup:

1. install this extension and dependancies
1. add the default extension typoscript to your site template
1. create a sysfolder where you will store fe_user and fe_group records
1. create the necessary frontend user groups
	+ globalGroup
	+ unvalidatedGroup
	+ validatedGroup
1. create the pages where the plugins will added.

   + page with pluign 'CIC Register - Create Account Button'
   + page with plugin 'CIC Register - Login'
   + page with plugin 'CIC Register - Create/Edit Account'
   

1. use the constant editor to configure the plugin

## Minimum Configuration via Constant Editor

+ set the UIDs of the three groups you created
+ set the page UIDs
	- Page ID for New View = the page with the Create/Edit Account plugin
	- Page ID of folder with frontend users = the sysfolder where you will store user records
	- Page ID with login form = the page with the Login plugin
	- Page ID with the logout button = can be the same page with the Login plugin
	- Page ID for Edit/Validation view = the same page with the Create/Edit Account plugin
+ set your site name
+ system senders email 
	- this is the from email for the validation email
+ system senders name
	- this the from name for the validation email
	
## Optional Configuration
If all you need the default setup then you can stop here, but if you 
require a notification when a user is created or you don't need all 
the Javascripts then you configure this in the constant editor as well.

### Notification Emails
If you would like to receive an email each time a new user is created
you can enable *Send a Notification Email*. This will send an email 
with the new users first and last name and their email. 

### jQuery 
If you don't need the jquery library you can keep it from being included 
by unchecking the *Include JQuery Library* checkbox.

### Base CICRegister CSS
The CICRegister CSS file contains all the necessary styles for the
colorbox overlay so you will usually want to keep that. But if you
decide to include all those styles in your own CSS then you can 
disable it from being included by unchecking the *Include Base CSS file* 
checkbox.

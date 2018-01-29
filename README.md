# Razorpay-Subscription
A subscription page with Razorpay Razorpay PHP Integration

### Technologies used ###
* [Codeigniter Version 3](https://codeigniter.com/) 
* PHP 7.0.10
* MySQL 5.7.14
* Uses [Razorpay PHP Library](https://github.com/razorpay/razorpay-php) 

![Subscription Page](https://github.com/MazahirHaroon/Razorpay-Subscription/blob/master/screenshots/Sub_Screen.png)

## Contents:
1. Subscription Screen, with three Plans Cards.
2. Ceheckout-from integration.
3. Payment authorization and capturing using Razorpay.
4. Creation of Customer and Subscription plan using Razorpay API
5. Local table updation with customer and subscription details.

### How do I get set up? ###

* To run server side code locally you can use LAMP, WAMP, MAMP, or XAMP
* Clone the file and make the necessary changes. 
	
	- .\application\config\config.php
		* Change $base_url

	- .\.htaccess	
		* RewriteBase \foldername
    
 	- .\application\config\database.php
		* Change the databasse name, username and password
 
 * Create a database and import subscribe.sql file into it, to create a needed tables 
 
(Read this [Documentation](https://codeigniter.com/user_guide/) for issues regarding Codeigniter)
  
  * Edit the keySecret inside application/controller/mainctrl.php
  * In custom.js 
    - Change
      var url = "../subscribe/mainctrl/rp_cust";
    - To 
       var url = "../your_folder_name/mainctrl/rp_cust";

### Razorpay PHP SDK ###
Make sure that you download the latest version of `razorpay-php.zip` file from
the releases section **[here](https://github.com/razorpay/razorpay-php/releases)**.
(The assets folder contains the razorpay-php.zip file in this project)

### Who do I talk to? ###
* [Mazahir Haroon](mailto:mazahirharoon@gmail.com?Subject=Regarding%20Razorpaye%20Subscription)

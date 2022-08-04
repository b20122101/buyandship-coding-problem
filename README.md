
# Buyandship Coding Test

## Background

1. Describe your preferred coding environment, i.e. OS, IDE, text editor etc.

	- My prefeerred coding environment:

		- macOS

		- Visual Studio Code

		- DBeaver

		- Sourcetree

2. Describe the workflow for releasing the codes you developed to prduction system.

	- I worked at a small team so we just used a simple git flow, I usually have 3 branches: develop, staging and prod.

		- Step1
		I will build a program or fix an issue in develop branch on my localhost.

		- Step2
		After I push that, I will merge my commit to the staging branch and then deploy it to the staging environment for user acceptance testing.

		- Step3
		When the code has no issue, I will merge that to the prod branch on the staging environment, Finally deploy it to the production environment.

## Coding Problem

1. Design a table schema to store the above pricing rules in a MySQL table named `pricing_rules`, please provide the answer in `CREATE TABLE` statement format.
	```
	CREATE TABLE `pricing_rules` (

	`id` bigint unsigned NOT NULL AUTO_INCREMENT,

	`fixed_fee` smallint unsigned NOT NULL,

	`base_weight_range` smallint unsigned NOT NULL,

	`extra_weight_fee` smallint unsigned NOT NULL,

	PRIMARY KEY (`id`)

	) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

	```

2. Impleent the function `calculate_shipment_fee`
	- Please see the path: `app\Http\Controller\ShippingController.php`

3. Can you write a unit test for the above function?
	 - Please see the path: `app\tests\ShipmentTest.php`

## About This Project

>This project is based on laravel lumen framework.

### Quick Start

1. Clone the repository

2. Setup .env file

3. Run in terminal this command for create table:

	``` php artisan migrate ```

4. Run in terminal this command for fill sample data:

	``` php artisan db:seed ```

5. Run in terminal this command for test the function:

	``` vendor/bin/phpunit ```

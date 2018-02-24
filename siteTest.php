<?php

include web.php;

class siteTests extends PHPUNIT_Framework_TestCase{

	private $web;



	/*

	Set up Function

	*/
	protected funtion setUp(){
		this->$web = new Web();
	}



	/*
	
	@Test 

	Param1 testExpense - amount being added to the budget	

	Param2 expense - amount the budget should come out to


	*/
	public function testAddExpense(){

		$expense = 600;
		
		assertEquals(600,addExpense($testExpense,$testExpenseFinal))

	}



	/*

	@Test

	Param1 testUsername - provided username that should be logged into the site 

	Param2 username = current session attribute of logged in useranme

	*/

	public function testLogin(){

		$username = "test";


		assertEquals($username, login());

	}


	/*


	@Test


	Param1 testCSV - dummy CSV file to test against to ensure the data was properly extracted 


	Param2 dataCSV - data extracted from CSV that should match up with against the testCSV file


	*/


	public function testCSV{
	
		$dataCSV = extractCSV("/CSV");

		$testCSV = extractCSV("testCSV");


		assertEquals($dataCSV,$testCSV);




	}


	/*

	@Test

	Param1 testAccount = test account data, account that should have the same parameters

	Param2 accountData = account that was just created data

	*/


	public function testCreateAccount(){

		$testAccount = (query("select username from users where id  = 1"))->execute();

		assertEquals(testAccount, createAccount());


	}


}





?>
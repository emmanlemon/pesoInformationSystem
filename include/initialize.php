<?php
//define the core paths
//Define them as absolute peths to make sure that require_once works as expected

//load the database configuration first.
require_once("config.php");
require_once("function.php");
require_once("session.php");
require_once("accounts.php");
require_once("autonumbers.php");  
require_once("companies.php");  
require_once("job.php");  
require_once("employees.php");  
require_once("categories.php");  
require_once("applicant.php");  
require_once("jobregistration.php");  
  
require_once("database.php");
?>
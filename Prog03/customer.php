<?php
session_start();
if (!isset($_SESSION["username"])){
    header("Location: login.php");
}

require "database.php";

require "customer.class.php";
$cust = new Customer();
 

if(isset($_GET["id"]))          $id = $_GET["id"]; 
if(isset($_POST["name"]))       $cust->name = $_POST["name"];
if(isset($_POST["email"]))      $cust->email = $_POST["email"];
if(isset($_POST["mobile"]))     $cust->mobile = $_POST["mobile"];

if(isset($_GET["fun"])) $fun = $_GET["fun"];
else $fun = "display_list"; 
switch ($fun) {
    case "display_list":        $cust->list_records();
        break;
    case "display_create_form": $cust->create_record(); 
        break;
    case "display_read_form":   $cust->read_record($id); 
        break;
    case "display_update_form": $cust->update_record($id);
        break;
    case "display_delete_form": $cust->delete_record($id); 
        break;
    case "insert_db_record":    $cust->insert_db_record(); 
        break;
    case "update_db_record":    $cust->update_db_record($id);
        break;
    case "delete_db_record":    $cust->delete_db_record($id);
        break;
    default: 
        echo "Error: Invalid function call (customer.php)";
        exit();
        break;
}
<?php 

require_once ('model/cusModel.php');

function fetchAllCustomers(){
	return showAllCustomers();

}
function fetchCustomer($id){
	return showCustomer($id);

}
<?php 

require_once ('model/empModel.php');

function fetchAllEmployees(){
	return showAllEmployees();

}
function fetchEmployee($id){
	return showEmployee($id);

}

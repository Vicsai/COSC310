<?php
session_start();
if(session_destroy()){
	print("logged out");
}
?>
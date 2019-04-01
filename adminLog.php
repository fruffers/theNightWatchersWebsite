<?php
#retrieve username and password from database

username = input("Username: ")
password = input("Password: ")

realUser = getuser from sql
realPass = getpass from sql

if username == realUser and password == realPass:
	log
else:
	echo "Wrong";
	continue

?>
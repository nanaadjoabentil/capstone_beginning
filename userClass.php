<?php

require_once("databaseConnection.php");

class User extends Connect
{
	public function addStudent($firstname, $lastname, $gender, $age, $dob, $pobox, $email, $nextofkin, $noknumber, $altname, $altcontact)
	{
		$sql = "INSERT INTO studentpersonal(firstname, lastname, gender, age, date_of_birth, postal_address, contact_email, $next_of_kin, $next_of_kin's_number, $alternative_contact_name, $alternative_contact_number) VALUES($firstname, $lastname, $gender, $age, $dob, $pobox, $email, $nextofkin, $noknumber, $altname, $altcontact)";

		$run = $this->query($sql);

		return $run;
	}

	public function
}

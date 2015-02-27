<?php 

class Validator {
//parent class
	protected $regex = '';

	public function isValid($input) {
		if (strlen($this->$regex) === 0) {
			throw new Exception("Error Processing Request");	
		}
		return preg_match($regex, $input);
		
	} 

	// return preg_match($regex, $input);
}

class EmailValidator extends Validator {
	protected $regex = 'reg expression here';//do I need to use $this->regex? 
									//am I redefining it here or creating a new variable
}

class UsernameValidator extends Validator {
	protected $regex = 'reg expression here';
}

class PasswordValidator extends Validator {
	protected $regex = 'reg expression here';
}

class PhoneValidator extends Validator {
	protected $regex = 'reg expression here';
}

class NumberValidator extends Validator {
	protected $regex = 'reg expression here';
}

class ValidatorFactory extends Validator {
	public function getValidator($type) {
		if ($type === 'email') {
			return new EmailValidator();
		} elseif ($type === 'username') {
			return new UsernameValidator();
		} elseif ($type === 'password') {
			return new PasswordValidator();
		} elseif ($type === 'phone') {
			return new PhoneValidator();
		} elseif ($type === 'number') {
			return new NumberValidator();
		} else {
			throw new Exception("Error Processing Request");
			
		}
	}
//create an appropriate Validator for a given input type
}

?>
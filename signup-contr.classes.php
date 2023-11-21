<?php

    class SignupContr extends signup{
        private $uid;
        private $pwd;
        private $pwdrepeat;
        private $email;

        public function __construct($uid, $pwd, $pwdrepeat, $email){
            $this->uid = $uid;
            $this->pwd = $pwd;
            $this->pwdrepeat = $pwdrepeat;
            $this->email = $email;




        }
        public function signupUser(){
            if($this->emptyInput()== false){
                // echo "Empty input!";
                header("location: ../index.php?error=emptyinput");
                exit();
            }
if($this->invaliduid() ==false ){
    // echo "Invalid username !";
    header("location: ../index.php?error=email");
    exit();
}
if($this->invalidEmail() == false){
    //echo "Invalid email !";
    header("location: ../index.php?error=email");
    exit();
}
if($this->pwdmatch() == false){
    //echo "Password don't match !";
    header("location: ../index.php?error=passwordmatch");
    exit();
}
        }
        private function emptyInput(){
            $result;
            if(empty($this->$uid) || empty($this->pwd) || empty($this->pwdrepeat) || empty($this->email)) {
                $result = false;


            }
            else{
                $result = true;
            }
            return $result;
        }
        private function invalidEmail(){
            $result;
            if (!filter_var($this->email,FILTER_VALIDATE_EMAIL))
            {
                $result = false;
            }
            else
            {
                $result =true;
            }
            return $result;

            
        }
        private function pwdMatch(){
            $result;
            if($this->pwd !== $this->pwdrepeat)
            {
                $result = false
            }
            else{
                $result = true
            }
            return $result;
        }
    }
?>
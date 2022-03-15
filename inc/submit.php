<?php
// require 'config.php';

session_start();

class Costumor{

    protected $host = 'localhost';
    protected $user = 'root';
    protected $password ='nomads';
    protected $db ='gestion_comers';

    public function __construct(){
       $this-> conn = mysqli_connect($this-> host,$this-> user,
                       $this-> password,$this->db);
        
   }
   
   public function create_user(
                                $firstname,$lastname,$email,
                                $password,$address,$phone
                        ){
                            $this-> firstname =  mysqli_real_escape_string($this->conn,$firstname);
                            $this->lastname = mysqli_real_escape_string($this->conn,$lastname);
                            $this->email = mysqli_real_escape_string($this->conn,$email);
                            $this-> password =mysqli_real_escape_string($this->conn,$password);
                            $this-> address =mysqli_real_escape_string($this->conn,$address);
                            $this-> phone = mysqli_real_escape_string($this->conn,$phone);

                            // Check if record exists 
                            $this-> sql = "
                                SELECT email FROM client WHERE email='$this->email';
                            ";
                            $this-> result =  mysqli_query($this->conn,$this->sql);
                            $this->row = mysqli_fetch_array($this->result);
                            if ($this->row !=Null){
                                header("Location:../signup.php?error=Email exists !,chose a new one");
                            }
                            // check end
                            else {
                                    // insert to db ;
                            $this -> sql ="
                                INSERT INTO client(firstname,lastname,email,
                                                    password,address,phone)
                                                    VALUES(
                                                       '$this->firstname',
                                                       '$this->lastname',
                                                       '$this->email',
                                                       '$this->password',
                                                       '$this->address',
                                                       '$this->phone'
                                                    );";
                            $this-> result =  mysqli_query($this->conn,$this->sql);
                            // header("Location:../signup.php?success=Done !");
                            echo $this->sql;
                            }
                 
   }
   public function user_login($user_email,$user_password){ 
        $this->user_password =mysqli_real_escape_string($this->conn,$user_password);
        $this->user_email = mysqli_real_escape_string($this->conn,$user_email);
        $this-> sql = "
            SELECT id,firstname,email,password FROM client WHERE email = '$this->user_email' 
            AND password = '$this->user_password';
        ";
        echo $this->sql;
   
	
	$this-> result =  mysqli_query($this->conn,$this->sql);   

	if(mysqli_num_rows($this-> result) == 1) {
		header("Location:../store.php");
		$this->row = mysqli_fetch_assoc($this->result);
		$_SESSION['id'] = $this->row['id'];
		$_SESSION['email'] = $this->row['email'];
		$_SESSION['firstname'] = $this->row['firstname'];

	}else {
		header("Location:../index.php?error=no records found !");
	}
   }

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
// new costumor
$costumor = new Costumor;

if(isset($_POST['register'])){
    $first_name = test_input($_POST['firstname']);
    $lastname = test_input($_POST['lastname']);
    $address = test_input($_POST['address']);
    $phone = test_input($_POST['phone']);
    $email = test_input($_POST['email']);
    $password = md5($_POST['password']);
    
    $costumor-> create_user($first_name,$lastname,$email,$password,$address,$phone);
}

if(isset($_POST['login'])){
    $email =$_POST['email_user'] ; 
    $password = md5(test_input($_POST['password']));
    $costumor->user_login($email,$password);   
}


?>

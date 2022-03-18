<?php
include 'submit.php';
class Commands Extends Costumor{
    public function __construct($bypass = false)
    {
        parent::__construct();
    }
    public function show_commnads(){
        $this->sql ="SELECT * FROM detailscommande";
        $this->result = mysqli_query($this->conn,$this->sql);
        $this->json_obj = [];
        while($this->row = mysqli_fetch_assoc($this->result)){
            $this->json_obj[] = $this->row;
        }
       echo json_encode($this->json_obj);
    }
}

$command = new Commands;
$command->show_commnads();
if(isset($_POST['number_product'])){
    echo $_POST['number_product'];
}

?>


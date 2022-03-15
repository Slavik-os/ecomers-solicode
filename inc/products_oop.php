<?php
include('submit.php');



class Products extends Costumor{
    public function __construct($bypass = false)
    {
        parent::__construct();
    }
    public function show_products(){
        $this->sql = "SELECT * FROM produit";
        $this->result = mysqli_query($this->conn,$this->sql);
        $this->json_obj = [];
        while($this->row = mysqli_fetch_assoc($this->result)){
            $this->json_obj[] = $this->row;
        }
       echo json_encode($this->json_obj);
    }
}


$products = new Products;
$products->show_products();

?>
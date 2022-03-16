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
    public function add_to_cart($product_id){
        $this->product_id = mysqli_real_escape_string($this->conn,$product_id); // espace Malitions Chars
        //get Specified item ;
        $this->sql = "SELECT image,libelle FROM produit WHERE idProduit=$this->product_id"; 
        $this->result = mysqli_query($this->conn,$this->sql);
        while($this->row = mysqli_fetch_assoc($this->result)){
            $this->command_image = $this->row['image']; // get image url;
            $this->command_libelle = $this->row['libelle'];
         }
        // end ;
        
        // Show to Cart 

        $this->sql = "INSERT INTO detailscommande (idProduit,quantite,image,libelle)
                      VALUES(
                        $this->product_id,1,'$this->command_image','$this->command_libelle'
                      )";
        $this->result = mysqli_query($this->conn,$this->sql);
        header("Location:../store.php?submit=Added to cart !");

    }
}


$products = new Products;
$products->show_products();

if(isset($_POST['addToCart'])){
   $id = $_POST['addToCart'];
   $products->add_to_cart($id);
}

?>
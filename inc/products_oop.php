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
        $this->sql = "SELECT image,prix,libelle,stock FROM produit WHERE idProduit=$this->product_id"; 
        $this->result = mysqli_query($this->conn,$this->sql);
        while($this->row = mysqli_fetch_assoc($this->result)){
            $this->command_image = $this->row['image']; // get image url;
            $this->command_libelle = $this->row['libelle'];
            $this->command_stock = $this->row['stock'];
            $this->command_prix = $this->row['prix'];
         }
        // end ;
        
        // Show to Cart 

        $this->sql = "INSERT INTO detailscommande (idProduit,quantite,image,libelle,stock,prix)
                      VALUES(
                        $this->product_id,1,'$this->command_image','$this->command_libelle',$this->command_stock,$this->command_prix
                      )";
        $this->result = mysqli_query($this->conn,$this->sql);
        header("Location:../store.php?submit=Added to cart !");

    }

    public function delete_record($command_id){
        $this->command_id = $command_id;
        $this->sql ="DELETE FROM detailscommande WHERE idCommande = $this->command_id";
        $this->result  = mysqli_query($this->conn,$this->sql);
        header("Location:../store.php?deleted=Removed From cart");
    }

    public function submit_command($id_command,$stock_array,$address,$id_client,$id_product){
        $this->id_product = $id_product;
        $this->id_client = $id_client;
        $this->sotck_array = $stock_array;
        $this->address = $address;
        $this->id_command = $id_command ;
        for ($i=0; $i < count($this->id_command);$i++){
            $this->sql = "INSERT INTO commande (idCommande , date , adresseLivraison ,idClient)  
            VALUES(".$this->id_command[$i].",DATE_FORMAT('".date("Y/m/d")."',"."'%Y-%m-%d'"."),'$this->address',$this->id_client".")";
            $this->result = mysqli_query($this->conn,$this->sql);
            // update product 

            // $this->sql =" SELECT stock FROM produit WHERE idProduit=$this->id_product[$i]".""; 
            $this->sql = "SELECT stock FROM produit WHERE idProduit= ".$this->id_product[$i]."";
            $this->old_stock = Null;
            $this-> result = mysqli_query($this->conn,$this->sql);
            while($this->row = mysqli_fetch_assoc($this->result)){
               $this->old_stock = $this->row['stock'];
            }
           $this->old_stock = $this->old_stock - $this->sotck_array[$i];
         
            $this-> sql = "
                UPDATE produit SET stock =".$this->old_stock." WHERE idProduit = ".$this->id_product[$i]."
            ";
            $this->result = mysqli_query($this->conn,$this->sql);
            header("Location:../confirm.php?submited=Valide!");
        }
    }
}


$products = new Products;
$products->show_products();

if(isset($_POST['addToCart'])){
   $id = $_POST['addToCart'];
   $products->add_to_cart($id);
}
if(isset($_GET['idCOmmand'])){
    $products->delete_record($_GET['idCOmmand']);
}
if(isset($_POST['confirm_command'])){
    $products->submit_command($_POST['id_command'],$_POST['number_product'],$_SESSION['address'],$_SESSION['id'],$_POST['id_product']);
}

?>
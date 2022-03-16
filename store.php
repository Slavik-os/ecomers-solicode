<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.2/js/dataTables.fixedColumns.min.js"></script>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-2.2.4/dt-1.10.13/fc-3.2.2/fh-3.1.2/r-2.1.0/sc-1.4.2/datatables.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <title>ma39i3</title>
</head>
<body>
<?php
session_start();
?>
<style>
    body{
        font-family:'Arial' !important;
    }
    nav a {
        color : #fff;
        font-size : 13px;
    }
    form ul li a {
        color :#fff !important;
        font-size: 13px !important; 
    }

    #submit_change:hover{
      background : #fff !important;
      color :#000 !important;
      transition :0.5 !important;
    }
    .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,102,203, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
}
body {
    background : #000;
}
::placeholder{
  padding: 20px;
  color:#fff!important;
  font-size:12px;
}
.description-card ,.detail-card{
  color : #fff;
  font-size: 13px;
  font-weight : light;
  text-decoration:underline;
  padding:20px;
}
.detail-card {
  font-size:15px;
  color : #d8383;
}
.dropdown-item:hover {
  color :#000 !important;
}
.left-col,.right-col {
  padding: 0 20px ;
  width:100%;
  height:100%;
  background : #000;
}
.right-col {
  background:blue;
}
.details_button {
  
  color : #fff;
  font-size:20px;
}

.black-holder {
  background :#000;
  width:100%;
  color :#fff;
}
.white-holder {
  color :#fff;

}
.button_hero {
  cursor : pointer;
}
.modal-bg {
  background : #000 !important;
}
#detail-libelle , #detail-description ,#detail-prix{
  color :#fff;
}
#detail-prix {
  font-size:16px;
  font-weight : bolder;
}

.move-panel {
  right : 500px !important;
}
</style>
<!-- nav-bar -->

<nav class="navbar navbar-expand-lg py-0 navbar-white bg-black">
  <a class="navbar-brand" href="#" style="font-family:'Arial'; font-weight:bold; font-size:13px;">RIOT HILL</a>
  <button class="navbar-toggler "  style="color :#fff;"type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon " style="color :#fff;"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">CONTACT</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          LOGIN
        </a>
        <div class="dropdown-menu pr-5 bg-black" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php">login</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="signup.php">signup.php</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="store.php">STORE</a>
      </li>
     
      <?php
            if(isset($_SESSION['firstname'])){
                echo '
                <li class="nav-link">
                <a class="nav-link" data-toggle="modal" data-target=".bd-example-modal-lg2">
                  <i class="fas fa-shopping-cart"></i> prodcuts </a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 | '.$_SESSION['firstname'].'
                </a>
                <div class="dropdown-menu pr-5 bg-black mr-5" style="margin-right : 20px" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="inc/logout.php">logout</a>
                  <div class="dropdown-divider"></div>
                </div>
              </li>
                ';
            }
          ?>     
    
    </ul>
    </form>
  </div>
</nav>
<div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content modal-bg">
              <!-- <?php
                include 'inc/config.php';
                 $sql = "SELECT * FROM detailscommande";
                 $result = mysqli_query($conn,$sql);
                 while($row = mysqli_fetch_assoc($result)){
                    echo '
                      <div>
                    ';
                 }
              ?> -->
            <div class="row border-top my-5">
                <div class="col-md-4">
                  <img src="products/71OgZCo4YZL 1.png" alt="">
                </div>
                <div class="col-md-6">
                Products Name 
                  <div class="row my-5">
                    <div class="col-md-2">
                    <input type="number" style=" width: 80px;" min="0" max="10" onkeydown="javascript: return event.keyCode == 69 ? false : true" />
                    </div>
                  </div>
                  <div class="row my-5">
                    <div class="col-md-2">
                      <button type="button" class="btn btn-danger">Danger</button>
 
                  </div>
                  </div>
                </div>
            </div>

            <div class="row border-top  my-5">
                <div class="col-md-4">
                  <img src="products/71OgZCo4YZL 1.png" alt="">
                </div>
                <div class="col-md-6">
                Products Name 
                  <div class="row my-5">
                    <div class="col-md-2">
                    <input type="number" style=" width: 80px;" min="0" max="10" onkeydown="javascript: return event.keyCode == 69 ? false : true" />
                    </div>
                  </div>
                  <div class="row my-5">
                    <div class="col-md-2">
                      <button type="button" class="btn btn-danger">Danger</button>
 
                  </div>
                  </div>
                </div>
            </div>
            <div class="row border-top  my-5">
                <div class="col-md-4">
                  <img src="products/71OgZCo4YZL 1.png" alt="">
                </div>
                <div class="col-md-6">
                Products Name 
                  <div class="row my-5">
                    <div class="col-md-2">
                    <input type="number" style=" width: 80px;" min="0" max="10" onkeydown="javascript: return event.keyCode == 69 ? false : true" />
                    </div>
                  </div>
                  <div class="row my-5">
                    <div class="col-md-2">
                      <button type="button" class="btn btn-danger">Danger</button>
 
                  </div>
                  </div>
                </div>
            </div>
           
            </div>


            </div>
          </div>
        </div>
<!-- nav-bar-end -->
<div class="alert alert-success" role="alert">
            <?php
              if(isset($_GET['submit'])){
                echo $_GET['submit'];
              }
            ?>
  </div>

<main id="">
            <div class="row row-cols-1 row-cols-md-4 g-4 px-5" id="main"> </div>
</main>

<!-- Modal Hero -->

<div class="alert alert-success" role="alert">
</div>
<div class="modal fade bd-example-modal-lg modal-bg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content modal-bg">
      <div class="row">
        <div class="col-lg-5 img-detail-holder">
          <img id="img-modal" src="" alt="">
        </div>
        <div class="col-lg-5">
            <span id="detail-libelle"></span>
            <div class="row mt-4">
              <span id="detail-description"></span>
            </div>
            <div class="row mt-4">
              <span id="detail-prix"></span>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal end -->






<script src=" https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js " integrity=" sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin=" anonymous "></script>
<script src=" https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js " integrity=" sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/ " crossorigin=" anonymous "></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript">
let close_login = ()=>{
    document.getElementById("login_box").style.display="None";
}

function record_append(data){
  // create and append Elements

  let main = document.getElementById("main");
  let row = document.createElement("div");
  row.className += '';
  main.appendChild(row);


  let div_parent = document.createElement("div");
  div_parent.classList.add("col");
  row.appendChild(div_parent);

  let div_card = document.createElement("div");
  div_card.classList.add("card");
  div_card.className +=' h-50 black-holder';
  div_parent.appendChild(div_card);

  let img = document.createElement("img");
  img.src=data.image;
  img.className +=' img-card card-img-top'
  div_card.appendChild(img);

  let card_body = document.createElement("div");
  card_body.className += ' card-body text-center black-holder';
  div_card.appendChild(card_body);


  let h5 = document.createElement("span");
  h5.innerText = data.libelle;
  h5.className=' text-center description-card'
  card_body.appendChild(h5);

  let p = document.createElement("p");
  p.className+= ' card-text detail-card text-center white-holder';
  p.innerText = data.prix+' ,00$';
  card_body.appendChild(p);

  // Create Buttons :

  let rowButtons = document.createElement("div");
  rowButtons.className +=' row';
  card_body.appendChild(rowButtons);

  let col_details = document.createElement("div");
  col_details.className+=' col-4 button_hero';

  col_details.setAttribute("onclick",'details('+data.idProduit+')'); // details Function
  col_details.setAttribute("data-toggle","modal");
  col_details.setAttribute("data-target",".bd-example-modal-lg");
  col_details.innerHTML = `
   <i class="fa-solid fa-eye"></i> <span style='color:#ddd'>Details</span>
  `;
  rowButtons.appendChild(col_details);

  let form = document.createElement("form");
  form.className+='col-6 button_hero';
  form.setAttribute("action","inc/products_oop.php");
  form.setAttribute("Method","POST");
  form.setAttribute("id","form");
  rowButtons.appendChild(form);

  let col_add = document.createElement("div");
  col_add.className+='submit-form';
  col_add.setAttribute("onclick","submit("+data.idProduit+")");

  // hidden input 
  let hidden = document.createElement("input");
  hidden.setAttribute("type","hidden");
  hidden.setAttribute("id","hidden");
  hidden.setAttribute("name","addToCart");
  hidden.setAttribute("value",data.idProduit);
  form.appendChild(hidden);  
  col_add.innerHTML =`
  <i class="fa-solid fa-cart-arrow-down"></i><span style='color:#ddd'>Add to Cart</span>
  `;
  form.appendChild(col_add);
}
let data_global ;
fetch('inc/products_oop.php')
  .then(response => response.json())
  .then((data)=>{
    for (let i=0; i < data.length ; i++){
      record_append(data[i]);
      data_global = data;
    }
  });
let details = (id)=>{
  let found = data_global.find(e => e.idProduit == id); // find product object
  document.getElementById("img-modal").src= found.image;
  document.getElementById("detail-libelle").innerText = found.libelle;
  document.getElementById("detail-description").innerText = found.description;
  document.getElementById("detail-prix").innerText = found.prix+' ,00$';
}
function submit(id){
  let form = document.getElementById("form");
  document.getElementById("hidden").value = id;
  form.submit();
}

</script>
</body>
</html>

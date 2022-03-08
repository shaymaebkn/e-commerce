<?php 
    include 'headerfooter/header.php';
?>
<?php
    if(!isset($_GET['id'])){
        header('Location: index.php?mensaje=eroor');
        exit();
    }

    include_once 'connect/connect.php';
    $id = $_GET['id'];

    $statement = $bd->prepare("SELECT * FROM products WHERE productID = ?;");
    $statement->execute([$id]);
    $product = $statement->fetch(PDO::FETCH_OBJ);
    $data = $product;
    //print_r($persona);
    
?>
<body>
            <div class="row col-3 p-3 ">
                <div class="card " style="width: 20rem;">
                    <img src="<?php echo $data->image; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                     <h4 class="text-center" class="card-text"><?php echo $data->productName; ?></h4>   
                    <h6 class="text-center"><?php echo number_format($data->unitPrice); ?>DH</h6>
                    
                    <p class="text-center"> <?php echo $data->description; ?></p>
                    <a >
                    <button><a href="">add to cart</a></button>
                    </svg>
                    </a>
                    </div>
                </div>
           </div>


</body>
<?php 
    include 'headerfooter/footer.php';
?>
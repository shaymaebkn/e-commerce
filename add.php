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
                    <a>
                     <svg  xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                    </svg>
                    </a>
                    </div>
                </div>
           </div>


</body>
<?php 
    include 'headerfooter/footer.php';
?>
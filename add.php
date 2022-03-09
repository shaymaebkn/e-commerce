<?php 
    include 'headerfooter/header.php';
?>
<?php
    if(!isset($_GET['id'])){
        header('Location: index.php?mensaje=eroorid');
        exit();
    }

    include_once 'connect/connect.php';

    $id = $_GET['id'];
    $statement = $bd->prepare("SELECT * FROM products WHERE productID = ?;");
    $statement->execute([$id]);
    $product = $statement->fetch(PDO::FETCH_OBJ);
    $data = $product;
    //print_r($persona);
   
    $statement = $bd->prepare("SELECT  `lastName`, `firstName`, `adress`, `phone`, `email`, `password` 
    FROM `customers` WHERE `customerCode`='?';");

    $statement = $bd->prepare("SELECT  `lastName`, `firstName`, `adress`, `phone`, `email`, `password` 
    FROM `customers` WHERE `customerCode`='?';");

 
 


    
    
    ?>
<body>
            <div class="row col-3 p-3 ">
                <div class="card " style="width: 20rem;">
                    <img src="<?php echo $data->image; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                     <h4 class="text-center" class="card-text"><?php echo $data->productName; ?></h4>   
                    <h6 class="text-center"><?php echo number_format($data->unitPrice); ?>DH</h6>
                    <p class="text-center"> <?php echo $data->description; ?></p>

                    <form action="insertcard.php?id=<?php echo $data->productID; ?>" method="POST">
                    <input class="text-center" type="number" id="input" name="quantity"><br>
                    <div class="d-grid">
                        <input type="submit" name="add" class="btn btn-primary" value="add to card">
                    </div>
                    </form>
                    </div>
                </div>
           </div>

<style>
    #input{
        border: none;
    }

</style>
</body>
<?php 
    include 'headerfooter/footer.php';
?>
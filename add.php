<?php 
    session_start();
    include 'headerfooter/header.php';
?>
<?php
    if(!isset($_GET['id'])){
        header('Location: add.php?mensaje=eroorid');
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
<?php  
    if(isset($_SESSION['email'])) {
    $statement = $bd->prepare("SELECT * FROM `customers` WHERE  customerCode = '?'");
    $customers = $statement->fetchAll(PDO::FETCH_OBJ);
    $custtomer = $customers;
 
?>

    <body>
        
            <div class="container">
                    <form class="d-flex" action="insertcard.php?id=<?php echo $data->productID; ?>" method="POST">
                        <div style="width: 20rem;" >
                        <input type="hidden" name="id" value="<?php echo $data->productID; ?>">
                        <input type="hidden" name="adress" value="">
                        <input type="hidden" name="customerCode" value="<?php echo $_SESSION['customerCode']; ?>" >
                        <img src="<?php echo $data->image; ?>" class="card-img-top" alt="...">
                        </div>

                        <div style="margin-top: 50px;">
                        <h4 class="" ><?php echo $data->productName; ?></h4>   
                        <h6 class=""><?php echo number_format($data->unitPrice); ?>DH</h6>
                        <p class="">description <?php echo $data->description; ?></p>
                        <input class="p-3" type="number" id="input" name="quantity"><br>
                        <br>
                            <input type="submit" name="add" class="btn btn-primary" value="add to card">
                        </div>  
                    </form> 
            </div>
            
       
    <?php 
      }
    
    ?>
 
<style>
    #input{
        height: 20px;
        width: 100px;
    }

</style>
</body>
<?php 
    include 'headerfooter/footer.php';
?>

<?php
include 'headerfooter/header.php';
?>
  <?php 
    include_once 'connect/connect.php';
    $statement = $bd -> query("SELECT * FROM `products`");
    $product = $statement->fetchAll(PDO::FETCH_OBJ);
    ?>
    <div class="container ">
        <section>
        <button><a href="form.php">products</a>
        </button>
    

        <div >
            <img style="width: 99%;" src="pics/sikin care.jpg" alt="">
        </div>
        <div class="d-flex justify-content-center p-3">
            <img class="image p-3"  src="pics/cosmetic men.JPG" alt="">
            <img class="image p-3" src="pics/cosmetic kids.jpg" alt="">
            <img class="image p-3"  src="pics/cosmetic women.jpg" alt="">
        </div>

       
        </section>
        <section>
        <div>
            <h2 class="text-center">SKIN CARE</h2>
        </div>
        <div class="row justify-content-center">    
        <?php 
             foreach($product as $data){ 
            ?>
               <div class="row col-3 p-3 ">
                <div class="card " style="width: 20rem;">
                    <img src="<?php echo $data->image; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                     <h4 class="text-center" class="card-text"><?php echo $data->productName; ?></h4>   
                    <h6 class="text-center"><?php echo number_format($data->unitPrice); ?>DH</h6>
                    
                    <p class="text-center"> <?php echo $data->description; ?></p>
                    <a <?php echo $data->productID; ?>  href="add.php">
                     <svg  xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                    
                    </svg></a>
                    </div>
                </div>
           </div>
        <?php 
         }
        ?>
        </section>
            <h1 class="text-center">ABOUT US</h1>
            <div class="d-flex justify-content-center p-3">
                <div class="p-3">
                    <img style="height: 450px; width: 600px;" src="pics/PRODUCTS.JPG" alt="">
                    <h2 class="text-center">About Our Products</h2>
                </div>
                <div class="p-3">
                    <img style="height: 450px; width: 600px;"  src="pics/beauticians.jpg" alt="">
                    <h2 class="text-center">ABOUT US</h2>
                </div>

            </div>
        

        </div>
        </section>
    </div>     
        <style>
        .image{
            height: 400px;
            width: 35%;
        }
    
    </style>

   <?php
   include 'headerfooter/footer.php';
  
   ?>
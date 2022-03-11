
    <?php 
    include 'headerfooter/header.php'
    ?>
     <?php 
    include_once 'connect/connect.php';
    $statement = $bd -> query("SELECT * FROM `products`");
    $product = $statement->fetchAll(PDO::FETCH_OBJ);
    ?>

  <div class="container mt-7">
      <div class="row justify-content-center">
           <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                  enter data

                </div>
                <form action="register.php" method="POST" class="p-4">
                    <div class="mb-3">
                        <label class="form-label" >productName:</label>
                        <input type="text" class="form-control" name="first-name">

                    </div>
                    <div class="mb-3">
                        <label class="form-label" >description:</label>
                        <input type="text" class="form-control" name="last-name">

                    </div>
                    <!-- <div class="mb-3">
                        <label class="form-label" >Date:</label>
                        <input type="date" class="form-control" name="date">

                    </div> -->
                    <div class="mb-3">
                        <label class="form-label" >unitPrice:</label>
                        <input type="text" class="form-control" name="department">

                    </div>
                    <div class="mb-3">
                        <label class="form-label" >quantityInStock:</label>
                        <input type="text" class="form-control" name="salary">

                    </div>
                    <!-- <div class="mb-3">
                        <label class="form-label" >function:</label>
                        <input type="text" class="form-control" name="function">

                    </div> -->
                    <!-- <div class="mb-3">
                        <label class="form-label" >picture:</label>
                        <input type="url"  name="picture"  id="7a" class="form-control" placeholder=" your photo URL"  >

                    </div> -->
                    <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-image"></i>
                    </span>
                    <input type="URL"  name="picture"  id="7a" class="form-control"  >
                    <span class="input-group-text">
                        <i class="bi bi-arrow-counterclockwise"></i>
                        </span>
                    </div>
                    
                    <div class="d-grid">
                        <!-- <input type="hidden" name="oculto" value="1"> -->
                        <input type="submit" class="btn btn-primary" value="Register">
                    </div>
                    



                </form>
            </div>

        </div>
          <div class="col-md-7">
              <div class="card-header">
                  lista de personas 
                  <table class="table align-middle">
                      <thead>
                          <tr>
                            <th scope="col"></th>
                            <th scope="col">productName</th>
                            <th scope="col">description</th>
                            <!-- <th scope="col">Date </th> -->
                            <th scope="col">unitPrice</th>
                            <th scope="col">quantityInStock</th>
                            <!-- <th scope="col">Function</th> -->

                            <th scope="col "colspane="2">image</th>
                            <!-- <th scope="col">operations</th> -->
                            
                          </tr>
                      </thead>
                      <tbody>
                      <?php 
                                foreach($product as $data){ 
                    ?>
                          <tr>
                              <td scope="row"><?php echo $data->productID; ?></td>
                              <td><?php echo $data->productName; ?></td>
                              <td><?php echo $data->description; ?></td>
                              <td><?php echo $data->unitPrice; ?></td>
                              <td><?php echo $data->quantityInStock; ?></td>
                              <td>
                 
                              <img src="<?php echo $data->image; ?>" alt="" width="35px" height="35px" style = "border-radius:50% ;"></td>
                           
                          <?php 
                                }
                            ?>
                      </tbody>
                  </table>

              </div>

          </div>
       

    </div>


  </div>
    

   
    <?php 
    include 'headerfooter/footer.php'
    ?>



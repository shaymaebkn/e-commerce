<<<<<<< HEAD
<?php

    include_once 'connect/connect.php';
    $id = $_POST['id'];
    $productID = $_POST['first-name'];
    $productName = $_POST['last-name'];
    $description = $_POST['date'];
    $unitPrice = $_POST['department'];
    $quantityinstock = $_POST['salary'];
    $function = $_POST['function'];
    $pic = $_POST['picture'];

    $statement = $bd->prepare("INSERT INTO `products`(`productID`, `productName`, `description`, `unitPrice`, `quantityInStock`, `image`) VALUES
                                (?,?,?,?,?,?)");
    $result = $statement->execute([$first_name,$last_name,$date,$department,$salary,$function,$pic]);

    if ($result === TRUE) {
        header('Location: form.php?message=registr');
    } else {
        header('Location: form.php?message=error');
        exit();
    }
    
?>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN-UP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<form>
  <div class="form-group">
    <label for="firstname">FIRST NAME</label>
    <input type="text" class="form-control" id="firstname"  >

    <label for="lastname">LAST NAME</label>
    <input type="text" class="form-control" id="lasttname"  >
   
    <label for="adress">ADRESS</label>
    <input type="text" class="form-control" id="adress"  >

    <label for="phone">PHONE NUMBER</label>
    <input type="text" class="form-control" id="phone"  >

    <label for="email">EMAIL</label>
    <input type="email" class="form-control" id="email"  >

    <label for="password">PASSWORD</label>
    <input type="number" class="form-control" id="password"  >

    <label for="password">CONFIRM PASSWORD</label>
    <input type="number" class="form-control" id="password"  >
      
  </div>

  <button type="submit" class="btn btn-primary">SIGN up</button>

</form>

</body>

</html>
>>>>>>> bff672dcba285ac6fc366e61c3efcc1720307d75

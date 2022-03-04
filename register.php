<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN-UP</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
<style>
    
footer{
    display: flex;
    flex-direction: column;
    border-top: 1px solid black;
    margin: 25px 250px;
}
footer div{
    margin-top: 20px;
}
.follow_us h2{
    text-align: center;
}
.social{
    display: flex;
    justify-content: center;
}
.social a{
    margin: 10px 40px;
}
.social a img{
    width: 50px;
    height: 50px;
}
.footer_links{
    display: flex;
    justify-content: space-around;
}
.footer_links div ul{
    padding: 0;
}
.footer_links div ul li{
    list-style: none;
    margin: 5px auto;
}
.footer_links div ul li a{
    text-align: left;
    text-decoration: none;
    color: black;
}
.btn{
    background-color:#FFB3C6;
}

/* media query */
@media screen and (max-width:900px){
    .nav1 .burger{
        display: block;
    }
    .nav1 .burger:hover div{
        cursor: pointer;
        background-color: #E6DDD6;
    }
    .nav_links{
        display: none;
    }
    .logo img{
        width: 100px;
    }
    .icons{
        width: 150px;
    }
    .icons img{
        margin-right: 0px;
        width: 25px;
        height: 25px;
    }
    .nav2{
        height: 90vh;
        width: 50%;
        position: absolute;
        left: -70%;
        transition: 800ms;
    }
    .show{
        transition: 800ms;
        left: 0;
    }
    .nav2 ul{
        flex-direction: column;
    }
    .nav2 ul li{
        margin: 20px auto;
    }
    .nav2 ul li a:hover{
        font-size: larger;
    }
    
    footer{
        margin: auto;
    }
    .footer_links{
        flex-direction: column;
        align-items: center;
        background-color: rgb(241, 241, 241);
    }
}
</style>
</head>
<body>
<header>
        <nav class="nav1">
            <div class="burger" id="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <div class="nav_links">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li id="catalogue"><a href="#">CATALOGUE</a></li>
                    <li><a href="#">SIGN-UP</a></li>
                </ul>
            </div>
            <div class="logo" id="logo">
                <a href="#"><img src="pics/logo.png" alt="paon" width="160px"></a>
            </div>
            <div class="icons" mt-2>
                <a href="#"><img src="pics/search.png"></a>
                <a href="#"><img src="pics/cart.png"></a>
                <a href="#"><img src="pics/profil-de-lutilisateur.png"></a>
            </div>
        </nav>
        <nav class="nav2" id="nav2">
            <ul>
                <li><a href="#">skin care</a></li>
                <li><a href="#">make-up</a></li>
                <li><a href="#">perfume</a></li>
                <li><a href="#">bath and body</a></li>
                <li><a href="#">hair</a></li>
                <li><a href="#">accessories</a></li>
            </ul>
        </nav>
    </header>


<form class="container">

  <div class="text-center m-5">
 <h1>SIGN-UP</h1>
</div>

<div class="form-row">

    <div class="col">
    <label for="firstname">FIRST NAME</label>
    <input type="text" class="form-control" id="firstname"  >
    </div>

    <div class="col">
    <label for="lastname">LAST NAME</label>
    <input type="text" class="form-control" id="lasttname"  >
    </div>

  </div>

  <div class="form-row">

    <div class="col">
    <label for="adress">ADRESS</label>
    <input type="text" class="form-control" id="adress"  >
    </div>

    <div class="col">
    <label for="phone">PHONE NUMBER</label>
    <input type="text" class="form-control" id="phone"  >
    </div>

  </div>

  <div class="form-row">

  <div class="col">
  <label for="email">EMAIL</label>
  <input type="email" class="form-control" id="email"  >
    </div> 
    </div>  
  
    <div class="form-row">

<div class="col">
<label for="password">PASSWORD</label>
    <input type="number" class="form-control" id="password"  >
</div>

<div class="col">
<label for="password">CONFIRM PASSWORD</label>
    <input type="number" class="form-control" id="password"  >
</div>

</div>

    
   
    <div class="mt-5 text-center">
      <button type="submit" class="btn">SIGN up</button>
  <p class="mt-3">You have an account already? <button class="text-primary">Log in</button></p>
  </div>

  

</form>

<footer>
        <div class="follow_us">
            <h2>FOLLOW US</h2>
        </div>
        <div class="social">
            <a href="#"><img src="pics/facebook_icon.png" alt="facebook"></a>
            <a href="#"><img src="pics/instagram_icon.png" alt="facebook"></a>
            <a href="#"><img src="pics/youtube_icon.png" alt="facebook"></a>
        </div>
        <div class="footer_links">
            <div class="about_us">
                <h3>About us</h3>
                <ul>
                    <li><a href="#">work with us</a></li>
                    <li><a href="#">about paon</a></li>
                    <li><a href="#">about our products</a></li>
                </ul>
            </div>
            <div class="help">
                <h3>help</h3>
                <ul>
                    <li><a href="#">contact us</a></li>
                    <li><a href="#">client service</a></li>
                    <li><a href="#">site plan</a></li>
                </ul>
            </div>
            <div class="discover">
                <h3>DISCOVER</h3>
                <ul>
                    <li><a href="#">sign-up</a></li>
                    <li><a href="#">catalogue</a></li>
                </ul>

            </div>
        </div>
    </footer>


</body>

</html>
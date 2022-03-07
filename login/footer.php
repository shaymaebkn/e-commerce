
<style>
    /* footer */
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
    color:white;
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
    /* footer */
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

<footer>
        <div class="follow_us">
            <h2>FOLLOW US</h2>
        </div>
        <div class="social">
            <a href="#"><img src="../pics/facebook_icon.png" alt="facebook"></a>
            <a href="#"><img src="../pics/instagram_icon.png" alt="facebook"></a>
            <a href="#"><img src="../pics/youtube_icon.png" alt="facebook"></a>
        </div>
        <!-- <div class="footer_links">
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
        </div> -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script><!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script><!-- bootstrap -->
    <script src="script.js"></script>
    </body>
    </html>
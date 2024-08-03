        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php">ArtWeb</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about-us.php">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="artists.php">Artists</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="signup.php">Sign Up</a></li>
                        <li class="nav-item"><a class="nav-link" href="shop-categories.php">Filter</a></li>
                    
<?php if($_SESSION['id']==0){?>
        
                                     <li class="nav-item"><a class="nav-link" href="admin/">Admin</a></li>
                    <?php } else {?>
                        <li class="nav-item"><a class="nav-link" href="my-wishlist.php">My Wishlist</a></li>
                 
                                  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">My Account</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="my-orders.php">Orders</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="my-profile.php">Profile</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="change-password.php">Change Password</a></li>
                                  <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="manage-addresses.php">Adresses</a></li>
                                  <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                     <?php } ?>  
                      <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact us</a></li> 
                      <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
        
                    </ul>  
<?php if($_SESSION['id']!=0):?>
<strong>Welcome:</strong> <?php echo $_SESSION['username'];?> &nbsp;
<?php endif;?>
                    <form class="d-flex">


                        <?php 
$uid=$_SESSION['id'];
                        $ret=mysqli_query($con,"select sum(productQty) as qtyy from cart where userId='$uid'");
$result=mysqli_fetch_array($ret);
$cartcount=$result['qtyy'];
                        ?>
                        <a class="btn btn-outline-dark" href="my-cart.php">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <?php if($cartcount==0):?>
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        <?php else: ?>
                            <span class="badge bg-dark text-white ms-1 rounded-pill"><?php echo $cartcount; ?></span>
                            <?php endif;?>
                        </a>
                    </form>

                </div>
            </div>
        </nav>
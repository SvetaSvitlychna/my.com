<div class="overlay"></div>
<header class="header">  
    <div class="container">
        <nav class="navbar">
                 <a href="/" class="navbar-brand text-center">
                <span class="font-weight-bold text-uppercase">Happy wheels</span></a>
                <img src="assets/images/bike-logo.png" class="logo float-right">
               <div class="navcontainer linkscont">
                
                <ul class="navbar-nav mr-auto float-left effect-brackets links-container">
                            
                        </ul>
                        <ul class="navbar-nav float-right  effect-brackets">
                            <li class="nav-item "><a class="nav-link cart-toggle"><i
                                        class="fas fa-cart-plus"></i>(<small class="count-items">0</small>)</a></li>
                            <?php if (Helper::isGuest()) :?>
                            <li class="nav-item"><a href="/login" class="nav-link"><i
                                        class="fas fa-sign-in-alt"></i>Login</a></li>
                                        <?php else :?>
                        <li class="nav-item user"><a href="/profile" class="nav-link" 
                        title="User Profile">
                        <i class="fas fa-address-card"></i>Profile</a></li>
                        <li class="nav-item user"><a href="/logout" class="nav-link"
                         title="Sign Out">
                        <i class="fas fa-sign-out-alt" class="nav-link"></i></a></li>
                    <?php endif;?>

                            </ul>
                            <button class="nav-toggle">
                                <i class="fas fa-bars"></i>
                            </button>
                            
            </div>
        </nav>
    </div>
</header>
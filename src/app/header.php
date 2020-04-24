<?php //session_start(); ?>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #8e44ad;">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">ReciBlog</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item dropdown">    
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Recipes</a>    
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">        
                      <a class="dropdown-item" href="#">Categories</a>        
                      <a class="dropdown-item" href="#">Favorited</a>        
                      <div class="dropdown-divider"></div>        
                      <a class="dropdown-item" href="./newrecipe.php">+ Add Recipe</a>    
                    </div>
                  </li>
                  <li class="nav-item">    
                    <a class="nav-link" href="./calorie.php">Calorie Tracker</a>
                  </li>
                  <li class="nav-item">    
                    <a class="nav-link" href="http://localhost:4200/">Survey</a>
                  </li>
                </ul>
                <!-- <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form> -->
                <ul class="navbar-nav d-none d-lg-flex ml-2 order-3">
                  <li class="nav-item">
                    <?php 
                      $stat = (session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE);
                      if($stat == TRUE && isset($_SESSION['firstName'])){
                        echo "<a class=\"nav-link\" href=\"./login.php\">Hi ";
                        echo $_SESSION['firstName'];
                        echo "!</a>";
                      } else {
                        echo "<a class=\"nav-link\" href=\"./login.php\">";
                        echo "Sign In";
                        echo "</a>";
                      }
                    ?>
                    <!-- <a class="nav-link" href="./login.php">Sign in</a> -->
                  </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
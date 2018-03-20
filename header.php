<header>
      <!-- Start: Navigation wrapper -->
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <a href="index.php" class="brand brand-bootbus">RAJASTHAN TOURISM</a>
            <!-- Below button used for responsive navigation -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Start: Primary navigation -->
            <div class="nav-collapse collapse">        
              <ul class="nav pull-right">
      
               
                <?php
                    if($status==1)
                {
                ?>
                <li><a href="user.php"><?php echo $_SESSION['username']; ?></a></li>
                <li><a href="logout.php"><?php echo 'Sign out'; ?></a></li>
                <?php
                }
                else{
                ?>
                <li><a href="login.php">Sign in</a></li>
                <li><a href="signup.php">Sign up</a></li>
                <?php  
                }
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- End: Navigation wrapper -->   
    </header>
<header style="background: #303036;">
<a href="<?php echo BASE_URL . '/index.php' ?>" class="logo">
    <img 
    src= "assets/images/lofo.png"
    style =
          "height:67px; 
          width:40px; 
          display: block;
         
          width: 40%;"
    >
    </a>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
        <?php if (isset($_SESSION['fullname'])): ?>
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                    <?php echo $_SESSION['fullname']; ?>
                    <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                </a>
                <ul>
                    <li><a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout">Logout</a></li>
                </ul>
            </li>
        <?php endif; ?>
    </ul>
</header>
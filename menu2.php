
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-dark ftco-navbar-light-2" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php">CV. Tunas Baja</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
            <li class="nav-item dropdown"><a href="#" class="nav-link">Product</a> 
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="product.php">Product</a>
                <a class="dropdown-item" href="kategori_reng.php">Reng</a>
                <a class="dropdown-item" href="kategori_atap.php">Atap</a>
                <a class="dropdown-item" href="kategori_truss.php">Truss</a>
              </div>
            </li>
            <!-- <li class="nav-item"><a href="product.php" class="nav-link">Products</a></li> -->
            <li class="nav-item"><a href="baja_benefits.php" class="nav-link">Baja Benefits</a></li>
            <!-- <li class="nav-item"><a href="tips_tricks.php" class="nav-link">Tips & Tricks</a></li> -->
            <li class="nav-item"><a href="keranjang.php" class="nav-link"><span class="icon-shopping_cart"></span>Cart</a></li>
            <?php if (isset($_SESSION["pelanggan"])): ?>
              <li class="nav-item"><a class="nav-link" href="riwayat.php">History</a></li>
              <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
              <!--selain itu (belum login| blm ada session pelanggan) -->
              <?php else: ?>
            <li class="nav-item"><a href="daftar.php" class="nav-link">Register</a></li>
            <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
            <?php endif ?>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
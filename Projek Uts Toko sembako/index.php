<?php 
    include 'db.php';
    $kontak = mysqli_query($conn, "SELECT no_telephone, email, alamat FROM tb_admin WHERE admin_id = 1");
    $a = mysqli_fetch_object($kontak);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Sembako|| Best</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
   <!-- header -->
   <header>
    <div class="container">
    <h1><a href="index.php">Toko Sembako</a></h1>
    <ul>
        <li><a href="merk.php">Produk</a></li>
        <li><a href="login.php">Login</a></li>
    </ul>
    </div>
   </header>
   
   <!-- search -->
   <div class="search">
    <div class="container">
        <form action="merk..php">
            <input type="text" name="search" placeholder="Cari Sembako">
            <input type="submit" name="cari" value="Cari Sembako">
        </form>
    </div>
   </div>
   
   <!-- kategori -->
   <div class="section">
    <div class="container">
        <h3>Produk</h3>
        <div class="box">
            <?php 
                $kategori = mysqli_query($conn, "SELECT * FROM jenis_produk ORDER BY jenis_produk DESC");
                if(mysqli_num_rows($kategori) > 0){
                    while($k = mysqli_fetch_array($kategori)){
            ?>
                <a href="produk.php?kat=<?php echo $k['jenis_produk'] ?>">
                    <div class="col-5">
                        <img src="img/icon-category.png" width="50px" style="margin-bottom:5px;">
                        <p><?php echo $k['jenis_produk'] ?></p>
                    </div>
                </a>
            <?php }}else{ ?>
                <p>Produk tidak ada</p>
            <?php } ?>
        </div>
    </div>
   </div>

   <!-- new produk -->
   

   <!-- footer -->
   <div class="footer">
   <div class="container">
    <h4>Alamat</h4>
    <p><?php echo $a->alamat ?></p>

    <h4>Email</h4>
    <p><?php echo $a->email ?></p>

    <h4>No. Hp</h4>
    <p><?php echo $a->no_telephone ?></p>
    <small>Copyright &copy; 2023 - Toko Ziah.</small>
   </div>
   </div>
</body>
</html>
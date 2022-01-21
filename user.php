<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_SESSION['username'] ?> | Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/user.css">
</head>
<body>
    <nav class="navbar">
    <a class="navbar-brand" href="#">Brand name</a>
    <button type="button" class="btn btn-light"><a href="logout-user.php">Logout</a></button>
    </nav>
    <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
    <section>

        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
        </div>

        <div class="items">
            <div class="item">
                <header>
                    <h1> News Title </h1>
                </header>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, perspiciatis pariatur dignissimos impedit numquam corrupti aliquid esse. Magnam voluptatem dicta vel distinctio. Voluptatum fugit pariatur iusto hic! Voluptates, maiores! Labore?</p>

                <div class="bottom">
                    <p>Author: <?php echo $_SESSION['username']; ?></p>
                </div>
            </div>
            <div class="item">
                <header>
                    <h1>Item</h1>
                </header>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, perspiciatis pariatur dignissimos impedit numquam corrupti aliquid esse. Magnam voluptatem dicta vel distinctio. Voluptatum fugit pariatur iusto hic! Voluptates, maiores! Labore?</p>
            
                <div class="bottom">
                    <p>Author: <?php echo $_SESSION['username']; ?></p>
                </div>
            </div>
            <div class="item">
                <header>
                    <h1>Item</h1>
                </header>   
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, perspiciatis pariatur dignissimos impedit numquam corrupti aliquid esse. Magnam voluptatem dicta vel distinctio. Voluptatum fugit pariatur iusto hic! Voluptates, maiores! Labore?</p>
            
                <div class="bottom">
                    <p>Author: <?php echo $_SESSION['username']; ?></p>
                </div>
            </div>
            <div class="item">
                <header>
                    <h1>Item</h1>
                </header>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, perspiciatis pariatur dignissimos impedit numquam corrupti aliquid esse. Magnam voluptatem dicta vel distinctio. Voluptatum fugit pariatur iusto hic! Voluptates, maiores! Labore?</p>
            
                <div class="bottom">
                    <p>Author: <?php echo $_SESSION['username']; ?></p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
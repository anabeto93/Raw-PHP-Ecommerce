<?php
$sql = "SELECT * FROM categories WHERE parent = 0";
$pquery = $db->query($sql);



?>

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Richard's Boutique</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <!-- <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li> -->
            <?php
            while($parent = mysqli_fetch_assoc($pquery)) :
            ?>
            <?php $p_id = $parent['id'];
                $child_sql = "SELECT * FROM categories WHERE parent = $p_id";
                $cquery = $db->query($child_sql);
            ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $parent['category']; ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php while($child = mysqli_fetch_assoc($cquery)) : ?>
                    <a class="dropdown-item" href="#"><?php echo $child['category'] ?></a>
<!--                    <a class="dropdown-item" href="#">Pants</a>-->
<!--                    <a class="dropdown-item" href="#">Shoes</a>-->
<!--                    <a class="dropdown-item" href="#">Accessories</a>-->
                    <?php endwhile; ?>
                    <!-- <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a> -->
                </div>
            </li>
            <?php endwhile; ?>
            <!-- <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li> -->
        </ul>
        <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
    </div>
</nav>
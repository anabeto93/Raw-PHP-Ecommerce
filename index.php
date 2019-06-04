<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Richard's Boutique</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <!-- Top Nav Bar -->
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Men
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Shirts</a>
                        <a class="dropdown-item" href="#">Pants</a>
                        <a class="dropdown-item" href="#">Shoes</a>
                        <a class="dropdown-item" href="#">Accessories</a>
                        <!-- <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a> -->
                    </div>
                </li>
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

    <!-- Header -->
    <div id="headerWrapper">
        <div id="back-flower">
        </div>
        <div id="logotext">
            <img src="../images/headerlogo/text2.png" alt="">
        </div>
        <div id="fore-flower">
            <img src="../images/headerlogo/fore-flower2.png" alt="Foreground flower">
        </div>
    </div>

    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad blanditiis voluptatibus esse rem eaque labore, totam exercitationem? Soluta voluptate iusto esse quod debitis illo id ex perferendis, sed exercitationem vero.
    Ullam totam inventore cum magni nobis deserunt asperiores sapiente tempore distinctio repellendus, voluptas quibusdam exercitationem. Ipsa excepturi tenetur illo vero voluptates minima, totam, cumque porro, voluptas cupiditate a dolorem molestiae?
    Fuga laborum, ipsum recusandae quis consequuntur nobis assumenda amet labore a quod, quam nam saepe illo. Asperiores eligendi sed a fugiat perspiciatis assumenda itaque. Tenetur nobis ipsa recusandae incidunt architecto.
    Eaque doloremque amet culpa earum praesentium? Esse accusamus et, molestiae officiis cum atque, inventore aliquam veniam nulla dicta deleniti incidunt minus distinctio fuga corporis temporibus, voluptatem aliquid alias possimus sequi.
    A laudantium facere numquam libero quaerat ratione tempora explicabo! Facilis natus tempora, suscipit illo quos vero omnis, quidem assumenda atque et impedit? Soluta velit quas minima fuga aut officia ipsa.

    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias maxime ab architecto iste in expedita, exercitationem modi, nostrum minima hic inventore consequatur, praesentium saepe qui perferendis quibusdam deserunt nisi ullam!
    Consequatur ducimus velit facere, voluptatum necessitatibus porro hic praesentium aut accusantium quisquam possimus, corrupti debitis sed architecto eum animi iure soluta sit recusandae minus! Provident fugit enim ipsam explicabo sint.
    Necessitatibus aperiam officia possimus delectus quis modi, temporibus ea qui, deleniti tempore provident eum pariatur quibusdam odit, dolores ut. Quaerat eveniet et excepturi reprehenderit maiores tempora id soluta assumenda placeat?
    Recusandae voluptates, totam, et est enim sit necessitatibus voluptatum doloribus, reprehenderit beatae odio error magni dicta repellendus libero odit vel laudantium iste facilis? Provident ex accusantium quae eaque. Hic, qui.
    Soluta perspiciatis, vitae autem eveniet ipsum tempora quisquam aliquam voluptatibus nobis molestias, impedit facilis? Dignissimos, facere. Ut dignissimos tempore, obcaecati veniam neque blanditiis, placeat doloribus veritatis provident, repudiandae consequuntur unde!

    <script>
    $(document).ready(function() {
        console.log('Ready for some UX actions');

        
    });

    $(window).scroll(function() {
        var vscroll = $(this).scrollTop();
        console.log(vscroll);

        $('#logotext').css({
            "transform": `translate(-50%, ${0.85 * vscroll}px)`
        });

        $('#fore-flower').css({
            "transform": `translate(${vscroll/5}px, -${vscroll/12}px)`
        })
    });
    </script>
</body>
</html>
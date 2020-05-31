<!-- NOTE: Sometimes css file is not loaded. To fix: Press CTRL+F5 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link id="stylecss" type="text/css" rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" async></script>
    <title>NK shop</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light navbar-light sticky-top ">
            <a class="navbar-brand" href="shopping.php">
                <img src="media/Logo-02.png" alt="Logo" style="width:40px;">
            </a>
            <form class="form-inline" action="/action_page.php">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-success" type="submit">Search</button>
            </form>
            <a class="navbar-brand" href="#shopping.html">
                <img src="media/shopping-basket-2214138_960_720.png" alt="Shopping" style="width:40px;">
            </a>
        </nav>
    </header>

    <nav class="navbar navbar-expand-lg bg-light navbar-light sticky-top justify-content-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbar1" class="collapse navbar-collapse">
            <ul class="navbar-nav nav-pills">
                <li id="navlink" class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#Phone">Phone</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="phone/Iphone.html">Iphone</a>
                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
                        <link id="stylecss" type="text/css" rel="stylesheet" href="style.css">
                        <link rel="stylesheet" href="style.css">
                        <script src="script.js" async></script>
                    </div>
                </li>
                <li id="navlink" class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#Laptop">Laptop</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="laptop/MAC.html">MAC</a>
                    </div>
                </li>
                <li id="navlink" class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#Smartwatch">Smartwatch</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="smart watch/applewatch.html">Apple Watch</a>
                    </div>
                </li>
                <li id="navlink" class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#Tablet">Tablet</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="tablet/Ipad.html">Ipad</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <br>

    <main>


        <div class="container pt-3">
            <h4 style="color: red;">Best seller Phone</h4>
        </div>

        <div class="container">
            <div class="card-columns">
                <div class="card">
                    <div class="item-body">
                        <h5 class="shop-item-name">iPhone 6s Plus 32GB</h5>
                        <img class="shop-item-image" src="media/download.jpg" alt="Card image">
                        <br><span class="shop-item-price">$499.99</span><br>
                        <div class="btn">
                            <button class="btn btn-warning shop-item-add" type="button">Add to cart </button>
                            <a href="phone/Iphone.html"><button class="btn btn-warning shop-item-detail" type="button">More details </button></a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="item-body">
                        <h5 class="shop-item-name">iPhone 6s Plus 64GB</h5>
                        <img class="shop-item-image" src="media/download.jpg" alt="Card image">
                        <br><span class="shop-item-price">$599.99</span><br>
                        <div class="btn">
                            <button class="btn btn-warning shop-item-add" type="button">Add to cart </button>
                            <a href="phone/Iphone.html"><button class="btn btn-warning shop-item-detail" type="button">More details </button></a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="item-body">
                        <h5 class="shop-item-name">iPhone 6s Plus 128GB</h5>
                        <img class="shop-item-image" src="media/download.jpg" alt="Card image">
                        <br><span class="shop-item-price">$699.99</span><br>
                        <div class="btn">
                            <button class="btn btn-warning shop-item-add" type="button">Add to cart </button>
                            <a href="phone/Iphone.html"><button class="btn btn-warning shop-item-detail" type="button">More details </button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-3">
            <h4 style="color: red;">Best seller Laptop</h4>
        </div>

        <div class="container">
            <div class="card-columns">
                <div class="card">
                    <div class="item-body">
                        <h5 class="shop-item-name">Macbook Air 13 128GB</h5>
                        <img class="shop-item-image" src="media/rsz_mac.png" alt="Card image">
                        <br><span class="shop-item-price">$1099.99</span><br>
                        <div class="btn">
                            <button class="btn btn-warning shop-item-add" type="button">Add to cart </button>
                            <button class="btn btn-warning shop-item-detail" type="button">More details </button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="item-body">
                        <h5 class="shop-item-name">Macbook Air 13 256GB</h5>
                        <img class="shop-item-image" src="media/rsz_mac.png" alt="Card image">
                        <br><span class="shop-item-price">$1199.99</span><br>
                        <div class="btn">
                            <button class="btn btn-warning shop-item-add" type="button">Add to cart </button>
                            <button class="btn btn-warning shop-item-detail" type="button">More details </button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="item-body">
                        <h5 class="shop-item-name">Macbook Air 13 512GB</h5>
                        <img class="shop-item-image" src="media/rsz_mac.png" alt="Card image">
                        <br><span class="shop-item-price">$1299.99</span><br>
                        <div class="btn">
                            <button class="btn btn-warning shop-item-add" type="button">Add to cart </button>
                            <button class="btn btn-warning shop-item-detail" type="button">More details </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-3">
            <h4 style="color: red;">Best seller Smart Watch</h4>
        </div>

        <div class="container">
            <div class="card-columns">
                <div class="card">
                    <div class="item-body">
                        <h5 class="shop-item-name">Apple Watch Serires 3 38mm</h5>
                        <img class="shop-item-image" src="media/rsz_1rsz_apple-watch-3-phien-ban-38-mm-chi-tiet-600x600.png" alt="Card image">
                        <br><span class="shop-item-price">$599.99</span><br>
                        <div class="btn">
                            <button class="btn btn-warning shop-item-add" type="button">Add to cart </button>
                            <button class="btn btn-warning shop-item-detail" type="button">More details </button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="item-body">
                        <h5 class="shop-item-name">Apple Watch Serires 4 38mm</h5>
                        <img class="shop-item-image" src="media/rsz_1rsz_apple-watch-3-phien-ban-38-mm-chi-tiet-600x600.png" alt="Card image">
                        <br><span class="shop-item-price">$699.99</span><br>
                        <div class="btn">
                            <button class="btn btn-warning shop-item-add" type="button">Add to cart </button>
                            <button class="btn btn-warning shop-item-detail" type="button">More details </button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="item-body">
                        <h5 class="shop-item-name">Apple Watch Serires 5 38mm</h5>
                        <img class="shop-item-image" src="media/rsz_1rsz_apple-watch-3-phien-ban-38-mm-chi-tiet-600x600.png" alt="Card image">
                        <br><span class="shop-item-price">$799.99</span><br>
                        <div class="btn">
                            <button class="btn btn-warning shop-item-add" type="button">Add to cart </button>
                            <button class="btn btn-warning shop-item-detail" type="button">More details </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-3">
            <h4 style="color: red;">Best seller tablet</h4>
        </div>

        <div class="container">
            <div class="card-columns">
                <div class="card">
                    <div class="item-body">
                        <h5 class="shop-item-name">iPad Mini 5 7.9 Wi-fi 4G 64 GB</h5>
                        <img class="shop-item-image" src="media/rsz_1rsz_636906894414610099_ipad-mini-5-gold-4.png" alt="Card image">
                        <br><span class="shop-item-price">$499.99</span><br>
                        <div class="btn">
                            <button class="btn btn-warning shop-item-add" type="button">Add to cart </button>
                            <button class="btn btn-warning shop-item-detail" type="button">More details </button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="item-body">
                        <h5 class="shop-item-name">iPad Mini 5 7.9 Wi-fi 4G 128 GB</h5>
                        <img class="shop-item-image" src="media/rsz_1rsz_636906894414610099_ipad-mini-5-gold-4.png" alt="Card image">
                        <br><span class="shop-item-price">$599.99</span><br>
                        <div class="btn">
                            <button class="btn btn-warning shop-item-add" type="button">Add to cart </button>
                            <button class="btn btn-warning shop-item-detail" type="button">More details </button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="item-body">
                        <h5 class="shop-item-name">iPad Mini 5 7.9 Wi-fi 4G 512 GB</h5>
                        <img class="shop-item-image" src="media/rsz_1rsz_636906894414610099_ipad-mini-5-gold-4.png" alt="Card image">
                        <br><span class="shop-item-price">$799.99</span><br>
                        <div class="btn">
                            <button class="btn btn-warning shop-item-add" type="button">Add to cart </button>
                            <button class="btn btn-warning shop-item-detail" type="button">More details </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        <!-- Shopping Cart -->
        <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$0</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
            <br><br>
        </section>

    </main>

    <footer>
        <div class="container bg-light">
            <div class="row">
                <div class="col-md-4">
                    <p>About Us</p>
                    <p>Buying Q&A</p>
                    <p>Online shopping tutorial</p>
                </div>
                <div class="col-md-4">
                    <p>Guarantee policy</p>
                    <p>Changing policy</p>
                    <p>Installment purchase</p>
                </div>
                <div class="col-md-4">
                    <p>Hotline: 09090909</p>
                    <p>Shopping advice: 02020202</p>
                    <p>Feedback(8am-20pm):01010101</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>

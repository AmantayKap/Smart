
    <!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Cache-control" content="no-cache">
    <meta name="viewport" content="width=device-width, initian-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{('css/app.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Smart</title>
</head>
<body>

<svg style="display: none;">
    <symbol id="facebook" viewBox="0 0 155.139 155.139">
        <g>
            <path d="M89.584,155.139V84.378h23.742l3.562-27.585H89.584V39.184
         c0-7.984,2.208-13.425,13.67-13.425l14.595-0.006V1.08C115.325,0.752,106.661,0,96.577,0C75.52,0,61.104,12.853,61.104,36.452
         v20.341H37.29v27.585h23.814v70.761H89.584z"/>
        </g>
    </symbol>
    <symbol id="twitter" viewBox="0 0 512 512">
        <g>
            <path d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016
      c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992
      c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056
      c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152
      c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792
      c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44
      C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568
      C480.224,136.96,497.728,118.496,512,97.248z"/>
        </g>
    </symbol>
    <symbol id="vk" viewBox="0 0 24 24">
        <path d="m19.915 13.028c-.388-.49-.277-.708 0-1.146.005-.005 3.208-4.431 3.538-5.932l.002-.001c.164-.547 0-.949-.793-.949h-2.624c-.668 0-.976.345-1.141.731 0 0-1.336 3.198-3.226 5.271-.61.599-.892.791-1.225.791-.164 0-.419-.192-.419-.739v-5.105c0-.656-.187-.949-.74-.949h-4.126c-.419 0-.668.306-.668.591 0 .622.945.765 1.043 2.515v3.797c0 .832-.151.985-.486.985-.892 0-3.057-3.211-4.34-6.886-.259-.713-.512-1.001-1.185-1.001h-2.625c-.749 0-.9.345-.9.731 0 .682.892 4.073 4.148 8.553 2.17 3.058 5.226 4.715 8.006 4.715 1.671 0 1.875-.368 1.875-1.001 0-2.922-.151-3.198.686-3.198.388 0 1.056.192 2.616 1.667 1.783 1.749 2.076 2.532 3.074 2.532h2.624c.748 0 1.127-.368.909-1.094-.499-1.527-3.871-4.668-4.023-4.878z"/>
    </symbol>
    <symbol id="insagram" viewBox="0 0 511 511.9">
        <path d="m510.949219 150.5c-1.199219-27.199219-5.597657-45.898438-11.898438-62.101562-6.5-17.199219-16.5-32.597657-29.601562-45.398438-12.800781-13-28.300781-23.101562-45.300781-29.5-16.296876-6.300781-34.898438-10.699219-62.097657-11.898438-27.402343-1.300781-36.101562-1.601562-105.601562-1.601562s-78.199219.300781-105.5 1.5c-27.199219 1.199219-45.898438 5.601562-62.097657 11.898438-17.203124 6.5-32.601562 16.5-45.402343 29.601562-13 12.800781-23.097657 28.300781-29.5 45.300781-6.300781 16.300781-10.699219 34.898438-11.898438 62.097657-1.300781 27.402343-1.601562 36.101562-1.601562 105.601562s.300781 78.199219 1.5 105.5c1.199219 27.199219 5.601562 45.898438 11.902343 62.101562 6.5 17.199219 16.597657 32.597657 29.597657 45.398438 12.800781 13 28.300781 23.101562 45.300781 29.5 16.300781 6.300781 34.898438 10.699219 62.101562 11.898438 27.296876 1.203124 36 1.5 105.5 1.5s78.199219-.296876 105.5-1.5c27.199219-1.199219 45.898438-5.597657 62.097657-11.898438 34.402343-13.300781 61.601562-40.5 74.902343-74.898438 6.296876-16.300781 10.699219-34.902343 11.898438-62.101562 1.199219-27.300781 1.5-36 1.5-105.5s-.101562-78.199219-1.300781-105.5zm-46.097657 209c-1.101562 25-5.300781 38.5-8.800781 47.5-8.601562 22.300781-26.300781 40-48.601562 48.601562-9 3.5-22.597657 7.699219-47.5 8.796876-27 1.203124-35.097657 1.5-103.398438 1.5s-76.5-.296876-103.402343-1.5c-25-1.097657-38.5-5.296876-47.5-8.796876-11.097657-4.101562-21.199219-10.601562-29.398438-19.101562-8.5-8.300781-15-18.300781-19.101562-29.398438-3.5-9-7.699219-22.601562-8.796876-47.5-1.203124-27-1.5-35.101562-1.5-103.402343s.296876-76.5 1.5-103.398438c1.097657-25 5.296876-38.5 8.796876-47.5 4.101562-11.101562 10.601562-21.199219 19.203124-29.402343 8.296876-8.5 18.296876-15 29.398438-19.097657 9-3.5 22.601562-7.699219 47.5-8.800781 27-1.199219 35.101562-1.5 103.398438-1.5 68.402343 0 76.5.300781 103.402343 1.5 25 1.101562 38.5 5.300781 47.5 8.800781 11.097657 4.097657 21.199219 10.597657 29.398438 19.097657 8.5 8.300781 15 18.300781 19.101562 29.402343 3.5 9 7.699219 22.597657 8.800781 47.5 1.199219 27 1.5 35.097657 1.5 103.398438s-.300781 76.300781-1.5 103.300781zm0 0"/><path d="m256.449219 124.5c-72.597657 0-131.5 58.898438-131.5 131.5s58.902343 131.5 131.5 131.5c72.601562 0 131.5-58.898438 131.5-131.5s-58.898438-131.5-131.5-131.5zm0 216.800781c-47.097657 0-85.300781-38.199219-85.300781-85.300781s38.203124-85.300781 85.300781-85.300781c47.101562 0 85.300781 38.199219 85.300781 85.300781s-38.199219 85.300781-85.300781 85.300781zm0 0"/><path d="m423.851562 119.300781c0 16.953125-13.746093 30.699219-30.703124 30.699219-16.953126 0-30.699219-13.746094-30.699219-30.699219 0-16.957031 13.746093-30.699219 30.699219-30.699219 16.957031 0 30.703124 13.742188 30.703124 30.699219zm0 0"/>
    </symbol>
    <symbol id="add_cart" viewBox="0 0 510 510">
        <g>
            <path d="M153,408c-28.05,0-51,22.95-51,51s22.95,51,51,51s51-22.95,51-51S181.05,408,153,408z M0,0v51h51l91.8,193.8L107.1,306
      c-2.55,7.65-5.1,17.85-5.1,25.5c0,28.05,22.95,51,51,51h306v-51H163.2c-2.55,0-5.1-2.55-5.1-5.1v-2.551l22.95-43.35h188.7
      c20.4,0,35.7-10.2,43.35-25.5L504.9,89.25c5.1-5.1,5.1-7.65,5.1-12.75c0-15.3-10.2-25.5-25.5-25.5H107.1L84.15,0H0z M408,408
      c-28.05,0-51,22.95-51,51s22.95,51,51,51s51-22.95,51-51S436.05,408,408,408z"/>
        </g>
    </symbol>
</svg>


<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dr">
    <div class="container">
        <a class="navbar-brand" href="main.html">Smart</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                        ASSORTIMENT
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">VIDEO CARDS</a></li>
                        <li><a class="dropdown-item" href="#">PROCESSORS</a></li>
                        <li><a class="dropdown-item" href="#">MOTHERBOARDS</a></li>
                        <li><a class="dropdown-item" href="#">RAM        </a></li>
                        <li><a class="dropdown-item" href="#">MONITORS</a></li>
                        <li><a class="dropdown-item" href="#">HEADPHONES</a></li>
                        <li><a class="dropdown-item" href="#">СOMPUTER MOUSE</a></li>
                        <li><a class="dropdown-item" href="#">KEYBOARDS</a></li>
                    </ul>
                </li>
            </ul>

            <a class="d-flex cour ms-3 " href="{{url('/login')}}">
                <svg fill="white" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                </svg>
                <p class="ms-2 text-white">
                        </p>
            </a>
            <div class="d-flex cour ms-3" id="carticon">
                <svg fill="white"xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
                <p class=" ms-2 text-white cart--price">$0</p>
            </div>
            <div class="cart">
                <div class="ui">
                    <h2 >CART</h2>
                    <button class="btn-close" type="button" id="closecart"></button>
                </div>

                <div class="cart-row">
                    <span class="cart-item cart-header cart-column">ITEM</span>
                    <span class="cart-price cart-header cart-column">PRICE</span>
                    <span class="cart-quantity cart-header cart-column">QUANTITY</span>
                </div>
                <div class="cart-items border-top border-bottom"></div>
                <div class="d-flex justify-content-between  me-2 mt-2">
                    <div class="h4 cart-total text-dark">
                        <strong class="cart-total-title ">Total</strong>
                        <span class="cart-total-price">$0</span>
                    </div>
                    <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
                </div>

            </div>
            </li>
        </div>
    </div>
</nav>

<div class="vidcar">
    <div class="container">
        <div class="row align-items-center">
            <div class=" col-md-6">
                <h1 class="intro_title">GRAPHICS CARDS</h1>
                <a class="btn btn-danger" data-scroll="#assa">TO ASSORTIMENT</a>
            </div>
        </div>
    </div>
</div>



<div class="center_text" id="assa">Assortiment</div>
<div class="container">
    <div class="row gy-3 mb-5">
        <div class="col-sm-6 col-md-4 col-xl-3 d-flex justify-content-center">
            <div class="card mb-3" style="width: 18rem;">
                <div id="carouselPic" class="carousel slide" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/vid10.jpg" class="shop-item-image card-img-top">
                        </div>
                        <div class="carousel-item">
                            <img src="img/vid10.1.jpg" class="card-img-top">
                        </div>
                        <div class="carousel-item">
                            <img src="img/vid10.2.jpg" class="card-img-top">
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselPic" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselPic" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                </div>
                <div class="card-body">
                    <h5 class="card-title shop-item-title">Gigabyte GTX 1660 Ti</h5>
                    <p class="card-text mb-0">Video memory frequency, MHz: 12000</p>
                    <p class="card-text mb-0">Type of Video Memory: GDDR6</p>
                    <p class="card-text">Video memory capacity: 6GB</p>
                    <div class="d-flex justify-content-between">
                        <button onclick="Music();" class="btn btn-success shop-item-button" id="music">Add to cart</button>
                        <p class=" price mt-2 m-2 shop-item-price">1000$</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-xl-3 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <div id="carouselPic1" class="carousel slide" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/graph1.jpg" class="shop-item-image card-img-top">
                        </div>
                        <div class="carousel-item">
                            <img src="img/graph1.1.jpg" class="card-img-top">
                        </div>
                        <div class="carousel-item">
                            <img src="img/graph1.2.jpg" class="card-img-top">
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselPic1" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselPic1" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="card-body">
                    <h5 class="card-title shop-item-title">Gigabyte RTX 3060 Ti</h5>
                    <p class="card-text mb-0">Video memory frequency, MHz: 14000</p>
                    <p class="card-text mb-0">Type of Video Memory: GDDR6</p>
                    <p class="card-text">Video memory capacity: 8GB</p>
                    <div class="d-flex justify-content-between">
                        <a onclick="Music();" class="btn btn-success shop-item-button" id="music">Add to cart</a>
                        <p class=" price mt-2 m-2 shop-item-price">1500$</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-xl-3 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <div id="carouselPic2" class="carousel slide" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/graph2.1.jpg" class="shop-item-image card-img-top">
                        </div>
                        <div class="carousel-item">
                            <img src="img/graph2.jpg" class="card-img-top">
                        </div>
                        <div class="carousel-item">
                            <img src="img/graph2.2.jpg" class="card-img-top">
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselPic2" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselPic2" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="card-body">
                    <h5 class="card-title shop-item-title">Palit RTX 3070 JetStream</h5>
                    <p class="card-text mb-0">Video memory frequency, MHz: 14000</p>
                    <p class="card-text mb-0">Type of Video Memory: GDDR6</p>
                    <p class="card-text">Video memory capacity: 8GB</p>
                    <div class="d-flex justify-content-between">
                        <a onclick="Music();" class="btn btn-success shop-item-button" id="music">Add to cart</a>
                        <p class=" price mt-2 m-2 shop-item-price">1600$</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-xl-3 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <div id="carouselPic3" class="carousel slide" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/graph3.jpg" class="shop-item-image card-img-top">
                        </div>
                        <div class="carousel-item">
                            <img src="img/graph3.1.jpg" class="card-img-top">
                        </div>
                        <div class="carousel-item">
                            <img src="img/graph3.2.jpg" class="card-img-top">
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselPic3" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselPic3" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="card-body">
                    <h5 class="card-title shop-item-title">MSI RX 6900 XT Gaming X</h5>
                    <p class="card-text mb-0">Video memory frequency, MHz: 16000</p>
                    <p class="card-text mb-0">Type of Video Memory: GDDR6</p>
                    <p class="card-text">Video memory capacity: 16GB</p>
                    <div class="d-flex justify-content-between">
                        <a onclick="Music();" class="btn btn-success shop-item-button" id="music">Add to cart</a>
                        <p class=" price mt-2 m-2 shop-item-price">3000$</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-xl-3 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <div id="carouselPic4" class="carousel slide" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/graph4.jpg" class=" shop-item-image card-img-top">
                        </div>
                        <div class="carousel-item">
                            <img src="img/graph4.1.jpg" class="card-img-top">
                        </div>
                        <div class="carousel-item">
                            <img src="img/graph4.2.jpg" class="card-img-top">
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselPic4" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselPic4" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="card-body">
                    <h5 class="card-title shop-item-title">ZOTAC RTX 3070 AMP</h5>
                    <p class="card-text mb-0">Video memory frequency, MHz: 14000</p>
                    <p class="card-text mb-0">Type of Video Memory: GDDR6</p>
                    <p class="card-text">Video memory capacity: 8GB</p>
                    <div class="d-flex justify-content-between">
                        <a onclick="Music();" class="btn btn-success shop-item-button" id="music">Add to cart</a>
                        <p class=" price mt-2 m-2 shop-item-price">2100$</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-xl-3 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <div id="carouselPic5" class="carousel slide" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/graph5.jpg" class="shop-item-image card-img-top">
                        </div>
                        <div class="carousel-item">
                            <img src="img/graph5.1.jpg" class="card-img-top">
                        </div>
                        <div class="carousel-item">
                            <img src="img/graph5.2.jpg" class="card-img-top">
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselPic5" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselPic5" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="card-body">
                    <h5 class="card-title shop-item-title">Palit RTX 3080 Gaming Pro</h5>
                    <p class="card-text mb-0">Video memory frequency, MHz: 19000</p>
                    <p class="card-text mb-0">Type of Video Memory: GDDR6X</p>
                    <p class="card-text">Video memory capacity: 10GB</p>
                    <div class="d-flex justify-content-between">
                        <a onclick="Music();" class="btn btn-success shop-item-button"  id="music">Add to cart</a>
                        <p class=" price mt-2 m-2 shop-item-price">1700$</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-xl-3 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <div id="carouselPic6" class="carousel slide" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="shop-item-image card-img-top" id="shop-item-image" src="img/graph6.jpg" >
                        </div>
                        <div class="carousel-item">
                            <img src="img/graph6.1.jpg" class="card-img-top">
                        </div>
                        <div class="carousel-item">
                            <img src="img/graph6.2.jpg" class="card-img-top">
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselPic6" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselPic6" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="card-body">
                    <h5 class="card-title shop-item-title"> Gigabyte RTX 3080 Aorus</h5>
                    <p class="card-text mb-0">Video memory frequency, MHz: 19000</p>
                    <p class="card-text mb-0">Type of Video Memory: GDDR6X</p>
                    <p class="card-text">Video memory capacity: 10GB</p>
                    <div class="d-flex justify-content-between">
                        <a onclick="Music();" class="btn btn-success shop-item-button" id="music">Add to cart</a>
                        <p class=" price mt-2 m-2 shop-item-price">1800$</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-xl-3 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <div id="carouselPic7" class="carousel slide" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/graph7.jpg"  class="shop-item-image card-img-top">
                        </div>
                        <div class="carousel-item">
                            <img src="img/graph7.1.jpg" class="card-img-top">
                        </div>
                        <div class="carousel-item">
                            <img src="img/graph7.2.jpg" class="card-img-top">
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselPic7" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselPic7" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="card-body">
                    <h5 class="card-title shop-item-title">ASUS RTX 3070 ROG</h5>
                    <p class="card-text mb-0">Video memory frequency, MHz: 14000</p>
                    <p class="card-text mb-0">Type of Video Memory: GDDR6</p>
                    <p class="card-text">Video memory capacity: 8GB</p>
                    <div class="d-flex justify-content-between">
                        <a onclick="Music();" class="btn btn-success shop-item-button" id="music">Add to cart</a>
                        <p class=" price mt-2 m-2 shop-item-price">1500$</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="row gy-4 p-5">
            <div class="col-md-4 p-0 d-flex justify-content-center">
                <div class="footer_block1">
                    <h4 class="footer_title">Online store</h4>
                    <div class="footer_text">
                        <p><a class="foot" data-bs-toggle="modal" data-bs-target="#Info">Payment</a></p>
                        <p><a class="foot" data-bs-toggle="modal" data-bs-target="#Info">Delivery</a></p>
                        <p><a class="foot" data-bs-toggle="modal" data-bs-target="#Info">Stock</a></p>
                        <p><a class="foot" data-bs-toggle="modal" data-bs-target="#Info">Gift certificates</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
                <div class="footer_block1">
                    <h4 class="footer_title">Social Media</h4>
                    <div class="social">
                        <a class="social_item" href="https://www.facebook.com/profile.php?id=100041830514198" target="_blank">
                            <svg class="social_icon">
                                <use xlink:href="#facebook"></use>
                            </svg>
                        </a>
                        <a class="social_item" href="https://twitter.com/elonmusk" target="_blank">
                            <svg class="social_icon">
                                <use xlink:href="#twitter"></use>
                            </svg>
                        </a>
                        <a class="social_item" href="https://vk.com/a.kapyshev" target="_blank">
                            <svg class="social_icon">
                                <use xlink:href="#vk"></use>
                            </svg>
                        </a>
                        <a class="social_item" href="https://www.instagram.com/kapyshev.amantai/" target="_blank">
                            <svg class="social_icon">
                                <use xlink:href="#insagram"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
                <div class="footer_block1">
                    <h4 class="footer_title">Company</h4>
                    <div class="footer_text">
                        <p><a class="foot" data-bs-toggle="modal" data-bs-target="#Info">About company</a></p>
                        <p><a class="foot" data-bs-toggle="modal" data-bs-target="#Info">Vacancies</a></p>
                        <p><a class="foot" data-bs-toggle="modal" data-bs-target="#Info">News</a></p>
                        <p><a class="foot" data-bs-toggle="modal" data-bs-target="#InfoOfUsers">Reliability guarantee</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="footer_copy">
        <div class="container">
            <div class="copy_text">
                ©2022 Amantay, Rustem
            </div>
        </div>
    </div>
</footer>

<!-- Modal -->

<div class="modal fade" id="Log" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-5 bg-dark">
            <form>
                <div class="mb-3">
                    <label for="Email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="Email">
                </div>
                <div class="mb-3">
                    <label for="Password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="Password">
                </div>
                <button onclick="LogIn();" type="submit" class="btn btn-danger">Log in</button>
                <button type="submit" class="btn btn-danger" >Register</button>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="Reg" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-5 bg-dark">
            <form>
                <div class="mb-3">
                    <label for="Email" class="form-label">Name</label>
                    <input type="text" class="form-control" id="regName">
                </div>
                <div class="mb-3">
                    <label for="Email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="regEmail">
                </div>
                <div class="mb-3">
                    <label for="Password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="regPassword">
                </div>
                <button onclick="Registration();" type="submit" class="btn btn-danger">Register</button>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="Info" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Info">Information</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                Some information
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<script src="cart.js"></script>
<script src="javascript.js"></script>
<script src="login.js"></script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

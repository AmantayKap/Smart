<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Cache-control" content="no-cache">
    <meta name="viewport" content="width=device-width, initian-scale=1.0">
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


<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-black">
    <div class="container">
        <a class="navbar-brand" href="#">Smart</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-scroll="#assort">ASSORTIMENT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-scroll="#usl">OUR SERVICE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-scroll="#otz">ABOUT COMPANY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-scroll="#map">LOCATION</a>
                </li>
        </div>
    </div>
</nav>


<div class="intro">
    <div class="container">
        <div class="intro_inner">
            <h1 class="intro_title">Smart</h1>
            <h2 class="intro_subtitle">A wide range of computer accessories and peripherals</h2>
            <a class="btnmain btn-red" href="#" data-scroll="#assort">Read More</a>
        </div>
    </div>
</div>



<div class="center_text" id="assort">Assortment</div>
<div class="assort" >
    <div class="assort_item">
        <img class="assort_photo" src="img/p1.jpg">
        <div class="assort_cont">
            <div class="assort_title">Video cards</div>
            <a href="{{url('/graph')}}" class="assort_text">more details</a>
        </div>
    </div>

    <div class="assort_item">
        <img class="assort_photo" src="img/p2.jpg">
        <div class="assort_cont">
            <div class="assort_title">Processors</div>
            <a href="#" class="assort_text">more details</a>
        </div>
    </div>

    <div class="assort_item">
        <img class="assort_photo" src="img/p3.jpg">
        <div class="assort_cont">
            <div class="assort_title">Motherboards</div>
            <a href="#" class="assort_text">more details</a>
        </div>
    </div>

    <div class="assort_item">
        <img class="assort_photo" src="img/p4.jpg">
        <div class="assort_cont">
            <div class="assort_title">RAM</div>
            <a href="#" class="assort_text">more details</a>
        </div>
    </div>

    <div class="assort_item">
        <img class="assort_photo" src="img/p5.jpg">
        <div class="assort_cont">
            <div class="assort_title">Monitors</div>
            <a href="#" class="assort_text">more details</a>
        </div>
    </div>

    <div class="assort_item">
        <img class="assort_photo" src="img/p6.jpg">
        <div class="assort_cont">
            <div class="assort_title">Headphones</div>
            <a href="#" class="assort_text">more details</a>
        </div>
    </div>

    <div class="assort_item">
        <img class="assort_photo" src="img/p7.jpg">
        <div class="assort_cont">
            <div class="assort_title">Сomputer mouse</div>
            <a href="#" class="assort_text">more details</a>
        </div>
    </div>

    <div class="assort_item">
        <img class="assort_photo" src="img/p8.jpg">
        <div class="assort_cont">
            <div class="assort_title">Keyboards</div>
            <a href="#" class="assort_text">more details</a>
        </div>
    </div>

</div>


<div class="usl" >
    <div class="container">
        <div class="center_text" id="usl">Our services</div>
        <div class="usl_inner">
            <div class="usl_item">
                <img class="usl_photo" src="img/k1.jpg">
                <div class="usl_name">Assembling computers</div>
                <div class="usl_text">Our company carries out a professional assembly of a computer with the installation of all programs and drivers! All necessary tests and checks are carried out! Cable Management is top notch!</div>
            </div>
            <div class="usl_item">
                <img class="usl_photo" src="img/k2.jpg">
                <div class="usl_name">CABLE MANAGEMENT</div>
                <div class="usl_text">Correctly routed wires determine the amount of space occupied in the computer case, which in turn affects the efficiency of components cooling. As we do professional cable management, the temperature of components in our computers does not exceed the permissible limits!</div>
            </div>
            <div class="usl_item">
                <img class="usl_photo" src="img/k3.jpg">
                <div class="usl_name">CLEANING THE COMPUTER</div>
                <div class="usl_text">Timely cleaning of your computer will help prevent many problems even before they arise! When cleaning a computer, we completely disassemble the computer and thoroughly clean every component of the system! We replace the thermal paste, change the oil in the cooling coolers. </div>
            </div>
            <div class="usl_item">
                <img class="usl_photo" src="img/k4.jpg">
                <div class="usl_name">UPGRADE AND MODDING</div>
                <div class="usl_text">We provide professional advice in the selection and improvement of components, as well as advise which assembly is better for a specific application, whether it be games or professional activities, rendering, design! We let you choose the color of the case, the case itself, the style of the PC.</div>
            </div>
        </div>
    </div>
</div>


<div class="otz" id="otz">
    <div class="container">
        <div class="otz_item">
            <div class="otz_photo">
                <img class="otz_img " src="img/l4.jpg">
            </div>

            <div class="otz_content">
                <div class="otz_text">
                    About Company
                </div>
                <div class="otz_author">"Smart" is the largest store in Kazakhstan for the range of computer components, laptops, peripherals, office equipment and one of the leaders in retail and corporate sales of digital and household appliances in the country. Thanks to close partnerships with HP, Microsoft, Intel, etc., "Smart" Offers over 10,000 items of certified products. We are constantly looking for new suppliers of innovative technology. As a result, for example, on smartphones "Smart" officially works with 14 world brands (realme, Xiaomi, Tecno, etc.). More than 40 stores of the retail network "Smart" in Nur-Sultan, Almaty, Pavlodar, Karaganda, Kostanay , Rudny, Aktobe and other cities, as well as the smart.kz online store serve both residents of cities and remote villages of Kazakhstan.
                </div>
            </div>

        </div>
    </div>
</div>


<div class="map" >
    <div class="center_text" id="map">Location</div>
    <div class="container">
        <div class="map_inner">
            <div class="maap">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A051a1f389b82d02409c59830df5f9072ef5cff3cd84c676645b23f392b633f37&amp;width=100%&amp;height=450&amp;lang=ru_RU&amp;scroll=false"></script>
            </div>
            <div class="map_cont">
                <div class="map_item">
                    <h3 class="map_h3">Adress</h3>
                    <p class="map_p">Nur-Sultan Mangilik El avenue, C1</p>
                </div>
                <div class="map_item">
                    <h3 class="map_h3">Contacts</h3>
                    <p class="map_p">+7 (7162) 77-77-77</p>
                    <p class="map_p">+7 701-777-77-70</p>
                    <p class="map_p">+7 705-777-77-77</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="features">
        <div class="features_item">
            <img class="features_img" src="img/f1.png">
            <h4 class="features_title">No risk when paying</h4>
            <div class="features_text">You can pay for the order directly upon receipt: at the pickup office, upon delivery by courier or cash on delivery</div>
        </div>

        <div class="features_item">
            <img class="features_img" src="img/f2.png">
            <h4 class="features_title">We work perfectly</h4>
            <div class="features_text">The "Smart" store has the highest rating on Yandex.Market - 5 stars, and more than a thousand reviews from real customers</div>
        </div>

        <div class="features_item">
            <img class="features_img" src="img/f3.png">
            <h4 class="features_title">Wide network of stores</h4>
            <div class="features_text">Our retail chain of stores operates throughout Kazakhstan and has more than 40 branches</div>
        </div>
        <div class="features_item">
            <img class="features_img" src="img/f4.png">
            <h4 class="features_title">A large assortment</h4>
            <div class="features_text">We work with such global brands as: MSI, Sony, Microsoft, Cougar, HyperX, Kingston and others</div>
        </div>

        <div class="features_item">
            <img class="features_img" src="img/f5.png">
            <h4 class="features_title">Trusted by large companies</h4>
            <div class="features_text">We have been present in the construction market since 2020. During this time, many companies have become our regular customers.</div>
        </div>

        <div class="features_item">
            <img class="features_img" src="img/f6.jpg">
            <h4 class="features_title">Quality you can trust</h4>
            <div class="features_text">All goods in our online store are certified. Before delivery, your order is checked by the technical control department.</div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">

        <div class="footer_inner">
            <div class="footer_block">
                <h4 class="footer_title">Online store</h4>
                <div class="footer_text">
                    <p><a class="foot" data-bs-toggle="modal" data-bs-target="#Info">Payment</a></p>
                    <p><a class="foot"data-bs-toggle="modal" data-bs-target="#Info">Delivery</a></p>
                    <p><a class="foot"data-bs-toggle="modal" data-bs-target="#Info">Stock</a></p>
                    <p><a class="foot"data-bs-toggle="modal" data-bs-target="#Info">Gift certificates</a></p>
                </div>
            </div>
            <div class="footer_block">
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
            <div class="footer_block">
                <h4 class="footer_title">Company</h4>
                <div class="footer_text">
                    <p><a class="foot"data-bs-toggle="modal" data-bs-target="#Info">About company</a></p>
                    <p><a class="foot"data-bs-toggle="modal" data-bs-target="#Info">Vacancies</a></p>
                    <p><a class="foot"data-bs-toggle="modal" data-bs-target="#Info">News</a></p>
                    <p><a class="foot"data-bs-toggle="modal" data-bs-target="#Info">Reliability guarantee</a></p>
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
<div class="modal fade" id="Info" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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


<script src="javascript.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

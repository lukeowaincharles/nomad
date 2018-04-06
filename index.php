<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
        <meta name="description" content="">

        <link rel="stylesheet" href="./static/ext/bootstrap-3.3.7/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="./static/ext/bootstrap-3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lora|Source+Sans+Pro" rel="stylesheet">
        <link rel="stylesheet" href="./static/css/master.css">
        <title>Luke Owain Charles | Portfolio</title>
    </head>
    <body>
        <div class="area__container">
            <section class="area left">
                <div class="masthead">
                    <p class="web__title"><a href="/">Luke Owain Charles</a></p>
                    <div class="nav__btn" id="nav__btn">
                        <span></span>
                    </div>
                </div>
                <main>
                    <div class="content__wrapper">
                        <h1>About</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dignissim sit amet risus vitae ultricies. Pellentesque pharetra aliquam neque, et fringilla mauris mattis sagittis. In sit amet faucibus ex. Duis semper libero vitae ligula auctor posuere. Phasellus at nisi ex. Sed sit amet condimentum velit. Donec maximus ligula tincidunt, porta lectus ut, tincidunt orci.

                            In eget ligula lacus. Aliquam cursus felis a libero condimentum porta. Vivamus eget eros odio. Aliquam varius ipsum ut felis facilisis, non tincidunt elit condimentum. Suspendisse id viverra eros. Curabitur rhoncus enim non malesuada efficitur. Curabitur faucibus elit vel dignissim commodo. Aenean scelerisque augue lorem, in molestie dui fermentum ut.</p>
                    </div>
                </main>
                <footer>
                <p>&COPY; <?php echo date("Y"); ?> Luke Owain Charles. All Rights Reserved.</p>
            </footer>
            </section>
        
        <section class="area right">
            <div class="main__image__wrapper">
                <p class="hidden__message">Click me</p>
                <img src="./static/img/tintagel-320w.jpg" 
                     srcset="./static/img/tintagel-800w.jpg 800w, ./static/img/tintagel-1600w.jpg 1600w"
                     sizes="(min-width: 992px) 1600px, (min-width: 768px) 800px"
                     alt="Tintagel Cornwall"/>
            </div>
        </section>
</div>
        
        <div class="menu" id="menu">
            <ul class="menu__list" id="menu__list">
                <li class="menu__list--item current__page"><a href="#">About</a></li>
                <li class="menu__list--item"><a href="#">Weddings</a></li>
                <li class="menu__list--item"><a href="#">Travel</a></li>
                <li class="menu__list--item"><a href="#">Blog</a></li>
            </ul>
        </div>
        
        <script src="./static/js/broozr.js"></script>
        <script src="./static/js/modernizr-custom.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="./static/js/master.js"></script>
    </body>
</html>

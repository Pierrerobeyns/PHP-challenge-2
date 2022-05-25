<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style/HomePage.css">
    <link rel="stylesheet" href="../assets/style/header.css">
    <title>Document</title>
</head>
<body>

    <?php

        use app\controller\Controller;

        $test = new Controller;
        $test->view('template/header');
    ?>

    <div class="article1">
        <div class="article1__content">
            <h1>Your Best Value Proposition</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint tempora aspernatur dolores autem rerum voluptate omnis, sapiente id deserunt?</p>
            <button class="filledButton">Get started</button>
        </div>
    </div>

    <div class="article2">
        <div class="article2__firstSection">
            <div class="article2__firstSection__content">
                <h2>Feature that is amazing</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis neque, facere beatae distinctio nisi laudantium ipsa voluptatibus accusamus officia.</p>
                <button class="blankButton">Learn More</button>
            </div>
        </div>
        <div class="article2__img">
            <img src="../../assets/style/img/calcul.png" alt="">
        </div>
    </div>

    <div class="article3">
        <img src="../../assets/style/img/hands.png" alt="">
        <div class="article3__content">
            <h3>Feature that is amazing</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, doloremque! Accusamus ex voluptates vero quis praesentium consectetur veritatis in?</p>
            <ul>
                <li>Benefit of Feature</li>
                <li>Benefit of Feature</li>
                <li>Benefit of Feature</li>
            </ul>
        </div>
    </div>

    <div class="article4">
        <div class="article4__all">
            <div class="article4__content">
                <h2>Your Best Value Proposition</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum eos facere, aut debitis hic facilis explicabo est placeat harum?</p>
                <p class="greyText">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure illo blanditiis distinctio necessitatibus esse facilis perspiciatis dolorem recusandae neque.</p>
                <p class="alignCircle"><div class="blackCircle"></div>Dhaka Oke, Product Designer</p>
            </div>
            <img src="../../assets/style/img/pig.png" alt="">
        </div>
    </div>

    <div class="pricing">
        <h3>Transparent Pricing</h3>
        <p>“If you don’t try this app, you won’t become the superhero you were meant to be”</p>
        <div class="cards">
            <div class="card">
                <h3>Starter Pack</h3>
                <p class="subtitle">Subtitle</p>
                <ul>
                    <li>Feature 1</li>
                    <li>Feature 2</li>
                    <li>Feature 3</li>
                </ul>
                <button class="blankButton">Start Now</button>
            </div>
            <div class="card">
                <h3>Pro Pack</h3>
                <p class="subtitle">Subtitle</p>
                <ul>
                    <li>Feature 1</li>
                    <li>Feature 2</li>
                    <li>Feature 3</li>
                </ul>
                <button class="blankButton">Start Now</button>
            </div>
            <div class="cardFilled">
                <h3>Unlimited Pack</h3>
                <p class="subtitle">Subtitle</p>
                <ul>
                    <li>Feature 1</li>
                    <li>Feature 2</li>
                    <li>Feature 3</li>
                </ul>
                <button class="filledButton">Start Now</button>
            </div>
        </div>
    </div>

    <footer>
        <div class="nav">
            <ul>
                <li>Product</li>
                <li>Features</li>
                <li>Ressources</li>
            </ul>
            <h2>Trade</h2>
            <ul>
                <li>About</li>
                <li>Blog</li>
                <li>Support</li>
            </ul>
        </div>
        <hr>
        <div class="networks">
            <ul>
                <li><img src="../../assets/style/img/instagram.png" alt=""></li>
                <li><img src="../../assets/style/img/facebook.png" alt=""></li>
                <li><img src="../../assets/style/img/twitter.png" alt=""></li>
                <li><img src="../../assets/style/img/linkedin.png" alt=""></li>
                <li><img src="../../assets/style/img/youtube.png" alt=""></li>
            </ul>
        </div>
        <div class="copyright">
            <p>© 2010 — 2020</p>
            <p>Privacy - Terms</p>
        </div>
    </footer>
</body>
</html>
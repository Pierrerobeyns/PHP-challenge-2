<header>
    <nav>
        <div class="nav-bar">
            <a href="/" class="nav-item"><img src="../assets/img/logo_cogip.png" alt="logo COGIP" width="50px"></a>
            <a href="/" class="nav-item">Home</a>
            <a href="/noadmin/invoices" class="nav-item">Invoices</a>
            <a href="/noadmin/companies" class="nav-item">Companies</a>
            <a href="/noadmin/contact" class="nav-item">Contact</a>
            <a href="/welcome" class="nav-item">Dashboard</a>

        </div>

        <?php
        if(empty($_SESSION)){
            echo <<<HTML
            <div class="nav-button">
                <a href="/registration" class="sign-in">Sign in</a>
                <a href="/login" class="sign-up">Sign up</a>
            </div>
            HTML;
        } else {
            echo <<<HTML
            <div class="nav-button">
                <a href="/welcome" class="sign-in">Log out</a>
            </div>
            HTML;
        }?>
    </nav>
</header>
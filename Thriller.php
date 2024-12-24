<html>

<head>
    <meta charset="uft-8">
    <meta name="viewport" content="width=device-width , initial-scale=1">
    <link rel="icon" type="image/jpeg" href="pictures/greenicon.jpeg">
    <link rel="stylesheet" href="bhstyle.css">

    <title>BOOK HAVEN</title>
</head>

<body>
    <div class="bgimg"></div>
    <nav class="navbar">
        <div class="navdiv">
            <div class="logo">BOOK HAVEN</div>
            <ul>
                <li><a href="BOOKHAVEN.php">Home</a></li>
                <li class="dropdown-menu"><a href="#">Language</a>
                    <ul class="dropdown">
                        <li>
                            <a href="English.php">English</a>
                            <a href="Urdu.php">Urdu</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown-menu"><a href="#">Genre</a>
                    <ul class="dropdown">
                        <li>
                            <a href="Romance.php">Romance</a>
                            <a href="Action.php">Action</a>
                            <a href="Mystery.php">Mystery</a>
                            <a href="Thriller.php">Thrill</a>
                            <a href="Revenge.php">Revenge</a>
                        </li>
                    </ul>
                </li>
                <li><a href="About.php">About</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <li>
                    <form action="" method="get">
                        <div class="search-bar">
                            <input type="text" name="q" placeholder="Search...">
                            <button type="reset">Search</button>
                        </div>
                    </form>
                </li>
                <button><a href="Login.php">Login</a></button>
            </ul>
        </div>
    </nav>

    <h1 style="text-align:center;">English</h1>
    <div class="image-row">
        <div class="image">
            <img src="/pictures/the woman in white.jpg" style="width:150px; height:200px;"><br>
            <a href="thriller/the woman in white.pdf" class="download-btn">Read Now</a>
            <a href="#" class="download-btn">Download</a>
        </div>
        <div class="image">
            <img src="/pictures/thob.jpg" style="width:150px; height:200px;"><br>
            <a href="thriller/thob.pdf" class="download-btn">Read Now</a>
            <a href="#" class="download-btn">Download</a>
        </div>
        <div class="image">
            <img src="/pictures/the call of wild.jpg" style="width:150px; height:200px;"><br>
            <a href="thriller/call of wild.pdf" class="download-btn">Read Now</a>
            <a href="#" class="download-btn">Download</a>
        </div>
        <div class="image">
            <img src="/pictures/dracula.jpeg" style="width:150px; height:200px;"><br>
            <a href="thriller/dracula.pdf" class="download-btn">Read Now</a>
            <a href="#" class="download-btn">Download</a>
        </div>
    </div>
    <h1 style="text-align:center;">Urdu</h1>
    <div class="image-row">
        <div class="image">
            <img src="/pictures/railway station.webp" style="width:150px; height:200px;"><br>
            <a href="thriller/railway station.pdf" class="Download-btn">Read Now</a>
            <a href="#" class="download-btn">Download</a>
        </div>
        <div class="image">
            <img src="pictures/ahdejadeed.webp" style="width:150px; height:200px;"><br>
            <a href="thriller/ehd e jadeed.pdf" class="download-btn">Read Now</a>
            <a href="#" class="download-btn">Download</a>
        </div>
        <div class="image">
            <img src="pictures/Ek khwab si tasweer.webp" style="width:150px; height:200px;"><br>
            <a href="thriller/ek khawab se tasveer.pdf" class="download-btn">Read Now</a>
            <a href="#" class="download-btn">Download</a>
        </div>
        <div class="image">
            <img src="pictures/kamra no 20.webp" style="width:150px; height:200px;"><br>
            <a href="thriller/kamra no 20.pdf" class="download-btn">Read Now</a>
            <a href="#" class="download-btn">Download</a>
        </div>
    </div>
</body>

</html>
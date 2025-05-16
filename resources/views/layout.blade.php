<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Responsive Personal Portfolio Website Design | @rolflouisdor</title>

        <!--  FONT-AWeSOME  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!--  MAIN CSS  -->
        <link rel="stylesheet" href="Style/styles.css">
        <link rel ="stylesheet" href="{{ asset('css/styles.css') }}">
        <!-- CHAT CSS -->
        <link rel="stylesheet" href="Style/chat.css">
        <link rel="stylesheet" href="{{ asset('css/chat.css') }}">
    </head>
    <body>
        <!--  header design  -->
        <header class="header">
            <a href="#" class="logo">Portfolio.</a>

            <i class="fa-solid fa-bars" id="menu-icon"></i>

            <nav class="navbar">
                <a href="#home" class="active">Home</a>
                <a href="#about">About</a>
                <a href="#skills">Skills</a>
                <a href="#portfolio">Portfolio</a>
                <a href="#contact">Contact</a>
            </nav>
        </header>


        <!--  contact section design  -->
        <footer class="footer">
            <div class="footer-text">
                <p>Copyright &copy; 2024 by @Rolf | All Rights Reserved.</p>
            </div>

            <div class="footer-iconTop">
                <a href="#home"><i class="fa-solid fa-angle-up"></i></a>
            </div>
        </footer>

        <!--  TYPED JS  -->
        <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

        <!--  SCROLL REVEAL  -->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--  MAIN JS  -->
        <script src="JS/main.js"></script>
        <script src="{{ asset('JS/main.js') }}"></script>

        <!--  CHAT JS  -->
        <script src="JS/chat.js"></script>
        <script src="{{ asset('JS/chat.js') }}"></script>
    </body>
</html>

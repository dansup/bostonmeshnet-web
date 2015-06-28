<!DOCTYPE HTML>
<html>
    <head>
        <title>Boston Meshnet</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <!--[if lte IE 8]><script src="/assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="/assets/css/main.css" />
        <!--[if lte IE 8]><link rel="stylesheet" href="/assets/css/ie8.css" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="/assets/css/ie9.css" /><![endif]-->
    </head>
    <body>

        <!-- Header -->
            <header id="header">
                <h1>Boston Meshnet</h1>
                <p>A community ISP powered by open source,<br />
                decentralized software. <span>Website launching soon!</span></p>
            </header>
            <h2>Join our mailing list</h2>
        <!-- Signup Form -->
            <form id="signup-form" method="post" action="/api/list/new">
                {!! csrf_field() !!}
                <input type="email" name="email" id="email" placeholder="Email Address" />
                <input type="submit" value="Sign Up" />
            </form>

        <!-- Footer -->
            <footer id="footer">
                <ul class="icons">
                    <li><a href="#" class="icon fa-facebook-official"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
                    <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
                </ul>
                <ul class="copyright">
                    <li>{{ date('Y') }} &copy; boston meshnet.</li>
                    <li>Credits: <a href="http://html5up.net">HTML5 UP</a></li>
                    <li>Source: <a href="https://github.com/bostonmeshnet/epicenter">on GitHub</a></li>
                </ul>
            </footer>

        <!-- Scripts -->
            <!--[if lte IE 8]><script src="/assets/js/ie/respond.min.js"></script><![endif]-->
            <script src="/assets/js/main.js"></script>

    </body>
</html>
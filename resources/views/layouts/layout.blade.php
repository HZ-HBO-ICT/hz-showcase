<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/app.css">


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


    <!-- Just an image -->
    <nav class="navbar">
        <div class="container-fluid">
            <a href="#">
                <img src="/img/hzlogovolTranspirant.png" alt="" height="80" width="auto">
            </a>
            <h1 class="navbar-text">HZ Showcase</h1>
        </div>
    </nav>

</head>
<body>
<div>
    @yield('content')
</div>
</body>

<footer>
    <nav class="navbar fixed-bottom">
        <div class="container-fluid">

            <!-- Default dropup button -->
            <div class="btn-group dropup">
                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    19/20
                </button>
                <ul class="dropdown-menu">
                    <!-- Dropdown menu links -->
                    <li><a class="dropdown-item" href="#">14/15</a></li>
                    <li><a class="dropdown-item" href="#">15/16</a></li>
                    <li><a class="dropdown-item" href="#">16/17</a></li>
                    <li><a class="dropdown-item" href="#">17/18</a></li>
                    <li><a class="dropdown-item" href="#">18/19</a></li>

                </ul>
            </div>

        </div>
    </nav>
</footer>

</html>

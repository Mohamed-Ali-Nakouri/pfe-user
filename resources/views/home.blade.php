

{{--<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>--}}
{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header"></div>--}}

                {{--<div class="card-body">--}}
                    <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>

                    </div>
                    <?php endif; ?>

                    {{--You are logged in!--}}



                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

    <!DOCTYPE html>
<html lang='en'>
<head>
    <meta class="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Verification</title>
    <!-- Don't forget to add your metadata here -->
    <link rel='stylesheet' href='h/css/style.min.css' />
</head>
<body>
<!-- Hero(extended) navbar -->
<div class="navbar navbar--extended">
    <nav class="nav__mobile"></nav>
    <div class="container">
        <div class="navbar__inner">

            <nav class="navbar__menu">

            </nav>
            <div class="navbar__menu-mob"><a href="" id='toggle'><svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z" class=""></path></svg></a></div>
        </div>
    </div>
</div>
<!-- Hero unit -->
<div class="hero">
    <div class="hero__overlay hero__overlay--gradient"></div>
    <div class="hero__mask"></div>
    <div class="hero__inner">
        <div class="container">
            <div class="hero__content">
                <div class="hero__content__inner" id='navConverter'>
                    <?php
                    $x=Auth::user();
                    $x1=$x['Inscription'];
                    $x2=$x['role'];

                    if($x1==0 && $x2=='Etudiant')
                    {

                        echo "<h1 class='hero__title'>Inscription not completed <br> Click The Button to Complete </h1>
                        <a href='form' class='button button__accent'>Complete here</a>";
                    }
                    elseif ($x1==1 && $x2=='Etudiant')
                    {

                        echo "<h1 class='hero__title'>Inscription  completed </h1>
                        <a href='dashboard' class='button button__accent'>Proceed to Dashboard</a>";
                    }
                    elseif ($x2=='prof')
                    {
                        echo "
                        <a href='dashboard' class='button button__accent'>Proceed to Dashboard</a>";
                    }

                    ?>


                </div>
            </div>
        </div>
    </div>
</div>






</body>
</html>

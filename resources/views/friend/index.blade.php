<html>
    <head>
        <title>SocialBox</title>

    <style>
        .active{
            text-decoration:underline;
        }

    </style>
    

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    </head>

    <body style="color:#0275d8;">
        <nav class="navbar navbar-expand-lg" style="background-color:white;text:blue;">
        <a class="navbar-brand" href="#">SocialBox</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color:white;">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>

            @if(!Auth::check())
            <li class="nav-item">
                <a class="nav-link" href="/login">Log In</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="/register">
                     Register
                </a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="/">My Post</a>
            </li>
            <li class="nav-item  active">
                <a class="nav-link" href="/">Friends</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/logout">Logout</a>
            </li>        
            @endif
            </ul>
        </div>
        </nav>

        <hr>

 
        <div class = "container" style="color:black;">
            <div class = "container">
            <a value="Find More Friends"  href = "/findfriend" style="color:#0275d8">Find More Friends</a>
            <hr>
            
            <br>

                <div class = "container border border-primary" style="border-radius:15px;border-color:#0275d8;">
                    <p>My Friends</p>
                    <hr>

                    @foreach($friends as $friend)
                    <div class = "container border border-primary" style="overflow:auto;border-radius:15px;border-color:#0275d8;">
                        <div class = "dp" style="float:left;">
                            <p>Profile Picture</p>
                        </div>
                        <div class = "name" style="float:right;clear:both;">
                            <p>{{$friend->user->name}}</p>
                        </div>
                        <br>

                        <div class = "email" style="float:right;clear:both;">
                            <p>{{$friend->user->email}}</p>
                        </div>
                        <br>

                    </div>
                    <br>

                    @endforeach

                </div>
            </div>

        </div>


        </script>
        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    </body>
</html>
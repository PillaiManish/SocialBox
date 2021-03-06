<html>
    <head>
        <title>SocialBox</title>

    <style>
        .active{
            text-decoration:underline;
        }




        #loader { 
            border: 12px solid #f3f3f3; 
            border-radius: 50%; 
            border-top: 12px solid #444444; 
            width: 70px; 
            height: 70px; 
            animation: spin 1s linear infinite; 
        } 
          
        @keyframes spin { 
            100% { 
                transform: rotate(360deg); 
            } 
        } 
          
        .center { 
            position: absolute; 
            top: 0; 
            bottom: 0; 
            left: 0; 
            right: 0; 
            margin: auto; 
        } 

    </style>
    

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    </head>

    <body style="color:#0275d8;">




    <div id="loader" class="center"></div> 

        <script>
    document.onreadystatechange = function() { 
        if (document.readyState !== "complete") { 
            document.querySelector("body").style.visibility = "hidden"; 
            document.querySelector("#loader").style.visibility = "visible"; 
        } else { 
            document.querySelector("#loader").style.display = "none"; 
            document.querySelector("body").style.visibility = "visible"; 
        } 
    }; 
    </script>




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
            <a href="/friend" style="color:#0275d8">My Friends</a>
            <hr>
            <br>

                <div class = "container border border-primary" style="border-radius:15px;border-color:#0275d8;">
                    <p>Find Friends</p>
                    <hr>

                    @foreach($friends as $friend)
                    <div class = "container border border-primary" style="overflow:auto;border-radius:15px;border-color:#0275d8;">
                        <div class = "dp" style="float:left;">
                            <p>Profile Picture</p>
                        </div>
                        <div class = "name" style="float:right;clear:both;">
                            <p>{{$friend->name}}
                        </div>
                        <br>

                        <div class = "email" style="float:right;clear:both;">
                            <p>{{$friend->email}}
                        </div>
                        <br>
                    <a href="/sendrequest/{{$friend->id}}" name = "send_request" value="Send Request" style="border-radius:15px;background-color:white;border-color:#0275d8;color:#0275d8">Send Request</a>
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
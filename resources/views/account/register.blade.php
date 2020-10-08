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
            <li class="nav-item">
                <a class="nav-link" href="/login">Log In</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/register">
                     Register
                </a>
            </li>
            </ul>
        </div>
        </nav>
        <hr>



        <div class = "container" style="text-align:center;">
            <div class = "container card border border-primary" style="border-radius:15px;border-color:#0275d8;">
            <form method = "POST" autocomplete="off">
                    @csrf
                <div class = "card-body">
                    <div class = "card-title">
                        <b>REGISTER</b>
                    </div>

                    <div>
                        <div class = "name">
                            <br>
                            <p id="errors_name" style="color:red;"></p>
                            <input type = "text" name = "name" id = "name" placeholder = "Enter the name (It would be publicly visible)"  data-toggle="tooltip" data-placement="bottom" title="Enter the username" style="border-radius:10px;width:70%;border-color:#0275d8;">
                            <br>
                        </div>
                        <div class = "username">
                            <br>
                            <p id="errors_username" style="color:red;"></p>
                            <input type = "email" name = "email" id = "username" placeholder = "Enter the email (It wouldn't be publicly visible)"  data-toggle="tooltip" data-placement="bottom" title="Enter the email" style="border-radius:10px;width:70%;border-color:#0275d8;">
                            <br>
                        </div>
                        <div class = "password">
                            <br>
                            <p id="errors_password" style="color:red;"></p>
                            <input type = "password" name= "password" id="password" placeholder = "Enter the password" style="border-radius:10px;width:70%;border-color:#0275d8;"; data-toggle="tooltip" data-placement="bottom" title="Enter the Password (alteast 8 characters)">
                            <br>
                        </div>
                    </div>

                    <div class = "submit">
                        <br>
                        <input type = "submit" disabled="true" id = "submit" value = "Login" style = "border-radius:10px;border-color:#0275d8;width:25%;">
                    </div>
                </div>
                </form>
            </div>
        </div>

        <script>
            $(document).ready(function(){
                $("#username").keyup(function(){
                    if ($(this).val().length <= 3){
                    $("#errors_username").text("Username should contain min 3 characters");
                    $("#submit").attr("disabled",true);
                    }
                    else{
                    $("#errors_username").text("");

                    }
                });

                $("#password").keyup(function(){
                    if ($(this).val().length <= 8){
                    $("#submit").attr("disabled",true);
                    $("#errors_password").text("Password should contain min 8 characters");
                    }
                    else{
                    $("#errors_password").text("");

                    }
                });

                $("#username,#password").blur(function(){
                    if ($("#password").val().length >=9 && $("#username").val().length >=4){
                    $("#submit").attr("disabled",false);
                    }
                });
            });
        </script>
        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    </body>
</html>
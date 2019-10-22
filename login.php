<?php
    include 'config.php';

    if (isset($_SESSION['access_token'])) {
        header('Location: index.php');
        exit();
    }
    $loginURL = $gClient->createAuthUrl();

//     echo '<pre>';
//     print_r($loginUrl);
//     echo '</pre>';
//     exit;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Google login</title>
    <link rel="stylesheet" href="assets/css/bulma.min.css">
    <link rel="stylesheet" href="assets/bulma-divider/dist/css/bulma-divider.min.css">
</head>

<body>
    <section class="hero is-medium has-background-white-bis">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-centered">
                    <div class="column is-two-fifths">
                        <h1 class="title has-text-centered">
                            Login APIs
                        </h1>
                        <hr>
                        <form action="#!" method="post">
                            <div class="field" style="padding-top: 1.5rem !important;">
                                <p class="control has-icons-left has-icons-right">
                                    <input class="input" type="email" placeholder="Email">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                </p>
                            </div>
                            <div class="field">
                                <p class="control has-icons-left">
                                    <input class="input" type="password" placeholder="Password">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                </p>
                            </div>
                            <div class="field">
                                <nav class="level">
                                    <div class='level-left'>
                                        <div class="level-item">
                                            <div>
                                                <button type="submit" class='button is-medium is-success'>Login
                                                    here</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='level-left'>
                                        <div class="level-item">
                                            <div>
                                                <p class="heading">Don't have an account? <a href="#!"> Register here</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                            
                        </form>
                        
                        <div class="is-divider" data-content="OR"></div>
                        <div class="buttons is-centered">
                            <!-- <input type="button" class='button' onclick="window.location = '<?php echo $loginURL ?>';"  name="google" value="Login with Google"> -->
                            <button class="button" type="button"  onclick="window.location = '<?php echo $loginURL ?>';" name="google">
                                <span class="icon">
                                    <!-- <i class="fab fa-github"></i> -->
                                    <i class="fab fa-google"></i>
                                </span>
                                <span>Login with google</span>
                            </button>
                            <button class="button ">
                                <span class="icon">
                                    <i class="fab fa-facebook-f"></i>
                                </span>
                                <span>Login with facebook</span>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    


    
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</body>

</html>
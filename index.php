<?php
	session_start();
	if (!isset($_SESSION['access_token'])) {
		header('Location: login.php');
		exit();
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login Api</title>
    <link rel="stylesheet" href="assets/css/bulma.min.css">
</head>

<body>
    <section class="hero is-medium is-primary ">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Google Login API
                </h1>

                <div class="columns">
                    <div class="column is-half">
                        <div class="box">
                            <article class="media">
                                <div class="media-left">
                                    <figure class="image is-128x128">
                                        <img class="is-rounded" src="<?= $_SESSION['picture'] ?>"
                                            alt="Image">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <div class="content">
                                        <p>
                                            <strong><?= $_SESSION['givenName'] ?>  <?= $_SESSION['familyName'] ?></strong><br> 
                                            <small><?= $_SESSION['email'] ?></small>
                                        </p>
                                        <p>
                                            <!-- <br> -->
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur
                                            sit amet
                                            massa fringilla egestas. Nullam condimentum luctus turpis.
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, autem?
                                        </p>
                                        <p>
                                            <a href="logout.php" class='button is-danger is-light'>Logout</a>
                                        </p>
                                    </div>

                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
<?php include 'fonctions.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
                        .container {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    text-align: center;
                    padding: 20px;
                }

                h1 {
                    font-size: 24px;
                    margin-bottom: 20px;
                }

                .service-section {
                    display: flex;
                    justify-content: space-around;
                    width: 100%;
                }

                .service {
                    text-align: center;
                    margin: 10px;
                }

                .service img {
                    border-radius: 50%;
                    width: 200px;
                    height: 200px;
                    object-fit: cover;
                }

                .service h2 {
                    font-size: 18px;
                    margin-top: 10px;
                }

                .service p {
                    font-size: 14px;
                }


                @media (max-width: 300px) {
                    .hero-content h1{
                    font-size: 24px;
                    }

                    .service-section {
                        flex-direction: column;
                    }

                    .service {
                        margin: 10px auto;
                        width: 100%;
                    }
                    .hero-content > h1{
                    font-size: 24px;
                    animation: none;
                    }
                }
    </style>
    <link rel="stylesheet" href="styles.css">
  
   




</style>
    <title>Page d'accueil</title>
</head>
<body>
<?php 
    include 'entete2.php'; 
    ?>




<section class="hero5">
        <div class="hero-content">
            <h1>NOS SERVICES</h1>
        </div>
    </section>
    <div class="container">
        <h1>Nos Services</h1>
        <div class="service-section">
            <div class="service">
            <img src="images/s04.jpg" alt="">
                <h2>RESTAURATION</h2>
                <p> </p>
            </div>
            <div class="service">
                <img src="images/s07.jpg" alt="">
                <h2>DIVERTISSEMENT</h2>
                <p>.</p>
            </div>
            <div class="service">
            <img src="images/s06.jpg" alt="S">
                <h2>DECOUVERTE</h2>
                <p> </p>
            </div>
        </div>
    </div>





    <?php 
    include 'footer.php'; 
    ?>
</body>
</html>

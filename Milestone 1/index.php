<?php
// DATABASE DISCHI

include 'database_dischi.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax - Dischi</title>
</head>

<style>

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        color: white;
        font-size: 18px;
    }

    h5 {
        color: grey;
    }
    #app_header {
        width: 100vw;
        background: black;
    }

    #app_header nav {
        width: 1300px;
        margin: auto;
        padding: 10px 0;

    }

    nav img {
        width: 58px;
    }

    #app_main {
        width: 100vw;
        background: #191919;
        padding: 20px 0 60px 0;
    }

    #main_container_one,#main_container_two {
        width: 1300px;
        margin: auto;
        display: flex;
    }
    #main_container_one > div {
        width: calc(100% / 5);
        margin: 18px;
        padding-bottom: 15px;
        background: black;
        display: flex;
        flex-direction: column;
        text-align: center;
        align-items: center;
        line-height: 26px;
    }
    #main_container_two > div {
        width: calc(100% / 5);
        margin: 18px;
        padding-bottom: 15px;
        background: black;
        display: flex;
        flex-direction: column;
        text-align: center;
        align-items: center;
        line-height: 26px;

    }

    #main_container_one > div > img {
        width: 100%;
        padding: 20px;
    }

    #main_container_two > div > img {
        width: 100%;
        padding: 20px;
    }

</style>
<body>

    <header id="app_header">
        <nav>
            <img src="./img/Spotify-Symbol.png" alt="">
        </nav>
    </header>

    <main id="app_main">
        <div id="main_container_one">
            <div id="one">
               <?php echo ($database["One"]["So"]["Poster"]); ?>
               <?php echo ($database["One"]["So"]["Title"]); ?>
               <?php echo ($database["One"]["So"]["Artist"]); ?>
               <?php echo ($database["One"]["So"]["Year"]); ?>
            </div>
            <div id="two">
                <?php echo ($database["One"]["Us"]["Poster"]); ?>
               <?php echo ($database["One"]["Us"]["Title"]); ?>
               <?php echo ($database["One"]["Us"]["Artist"]); ?>
               <?php echo ($database["One"]["Us"]["Year"]); ?>
            </div>
            <div id="three">
                <?php echo ($database["Two"]["Definitely Maybe"]["Poster"]); ?>
               <?php echo ($database["Two"]["Definitely Maybe"]["Title"]); ?>
               <?php echo ($database["Two"]["Definitely Maybe"]["Artist"]); ?>
               <?php echo ($database["Two"]["Definitely Maybe"]["Year"]); ?>
            </div>
            <div id="four">
                <?php echo ($database["Two"]["What's the story ('Morning Glory')"]["Poster"]); ?>
               <?php echo ($database["Two"]["What's the story ('Morning Glory')"]["Title"]); ?>
               <?php echo ($database["Two"]["What's the story ('Morning Glory')"]["Artist"]); ?>
               <?php echo ($database["Two"]["What's the story ('Morning Glory')"]["Year"]); ?>

            </div>
            <div id="five">
            <?php echo ($database["Two"]["Be Here Now"]["Poster"]); ?>
               <?php echo ($database["Two"]["Be Here Now"]["Title"]); ?>
               <?php echo ($database["Two"]["Be Here Now"]["Artist"]); ?>
               <?php echo ($database["Two"]["Be Here Now"]["Year"]); ?>

            </div>
        </div>

        <div id="main_container_two">
            <div id="six">
            <?php echo ($database["Three"]["Led Zeppelin I"]["Poster"]); ?>
               <?php echo ($database["Three"]["Led Zeppelin I"]["Title"]); ?>
               <?php echo ($database["Three"]["Led Zeppelin I"]["Artist"]); ?>
               <?php echo ($database["Three"]["Led Zeppelin I"]["Year"]); ?>
            </div>
            <div id="seven">
            <?php echo ($database["Four"]["Around the fur"]["Poster"]); ?>
               <?php echo ($database["Four"]["Around the fur"]["Title"]); ?>
               <?php echo ($database["Four"]["Around the fur"]["Artist"]); ?>
               <?php echo ($database["Four"]["Around the fur"]["Year"]); ?>

            </div>
            <div id="eight">
            <?php echo ($database["Four"]["White Pony"]["Poster"]); ?>
               <?php echo ($database["Four"]["White Pony"]["Title"]); ?>
               <?php echo ($database["Four"]["White Pony"]["Artist"]); ?>
               <?php echo ($database["Four"]["White Pony"]["Year"]); ?>

            </div>
            <div id="nine">
            <?php echo ($database["Five"]["Creuza de ma"]["Poster"]); ?>
               <?php echo ($database["Five"]["Creuza de ma"]["Title"]); ?>
               <?php echo ($database["Five"]["Creuza de ma"]["Artist"]); ?>
               <?php echo ($database["Five"]["Creuza de ma"]["Year"]); ?>

            </div>
            <div id="ten">
            <?php echo ($database["Five"]["Tutti morimmo a stento"]["Poster"]); ?>
               <?php echo ($database["Five"]["Tutti morimmo a stento"]["Title"]); ?>
               <?php echo ($database["Five"]["Tutti morimmo a stento"]["Artist"]); ?>
               <?php echo ($database["Five"]["Tutti morimmo a stento"]["Year"]); ?>


            </div>  

        </div>
    </main>








</body>
</html>
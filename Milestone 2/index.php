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

    #main_container_one,
    #main_container_two {
        width: 1300px;
        margin: auto;
        display: flex;
    }

    #main_container_one>div {
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

    #main_container_two>div {
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

    #main_container_one>div>img {
        width: 100%;
        padding: 20px;
    }

    #main_container_two>div>img {
        width: 100%;
        padding: 20px;
    }
</style>

<body>
    <div id="app">
        <header id="app_header">
            <nav>
                <img src="./img/Spotify-Symbol.png" alt="">
            </nav>
        </header>






        <main v-on="album in datas" id="app_main">
            <div id="main_container_one">
                <div id="one">
                    <img v-bind:src="datas.One.So.Poster" alt="">
                    <h3>{{datas.One.So.Title}}</h3>
                    <h5>{{datas.One.So.Artist}}</h5>
                    <p>{{datas.One.So.Year}}</p>
                </div>
                <div id="two">
                    <img v-bind:src="datas.One.Us.Poster" alt="">
                    <h3>{{datas.One.Us.Title}}</h3>
                    <h5>{{datas.One.Us.Artist}}</h5>
                    <p>{{datas.One.Us.Year}}</p>
                </div>
                <div id="three">
                    <img v-bind:src="datas.Two['Definitely Maybe'].Poster" alt="">
                    <h3>{{datas.Two['Definitely Maybe'].Title}}</h3>
                    <h5>{{datas.Two['Definitely Maybe'].Artist}}</h5>
                    <p>{{datas.Two['Definitely Maybe'].Year}}</p>
                </div>
                <div id="four">
                    <img v-bind:src='datas.Two["Morning Glory"].Poster' alt="">
                    <h3>{{datas.Two["Morning Glory"].Title}}</h3>
                    <h5>{{datas.Two["Morning Glory"].Artist}}</h5>
                    <p>{{datas.Two["Morning Glory"].Year}}</p>
                </div>
                <div id="five">
                    <img v-bind:src="datas.Two['Be Here Now'].Poster" alt="">
                    <h3>{{datas.Two['Be Here Now'].Title}}</h3>
                    <h5>{{datas.Two['Be Here Now'].Artist}}</h5>
                    <p>{{datas.Two['Be Here Now'].Year}}</p>
                </div>
            </div>

            <div id="main_container_two">
                <div id="six">
                    <img v-bind:src="datas.Three['Led Zeppelin I'].Poster" alt="">
                    <h3>{{datas.Three['Led Zeppelin I'].Title}}</h3>
                    <h5>{{datas.Three['Led Zeppelin I'].Artist}}</h5>
                    <p>{{datas.Three['Led Zeppelin I'].Year}}</p>
                </div>
                <div id="seven">
                    <img v-bind:src="datas.Four['Around the fur'].Poster" alt="">
                    <h3>{{datas.Four['Around the fur'].Title}}</h3>
                    <h5>{{datas.Four['Around the fur'].Artist}}</h5>
                    <p>{{datas.Four['Around the fur'].Year}}</p>

                </div>
                <div id="eight">
                    <img v-bind:src="datas.Four['White Pony'].Poster" alt="">
                    <h3>{{datas.Four['White Pony'].Title}}</h3>
                    <h5>{{datas.Four['White Pony'].Artist}}</h5>
                    <p>{{datas.Four['White Pony'].Year}}</p>

                </div>
                <div id="nine">
                    <img v-bind:src="datas.Five['Creuza de ma'].Poster" alt="">
                    <h3>{{datas.Five['Creuza de ma'].Title}}</h3>
                    <h5>{{datas.Five['Creuza de ma'].Artist}}</h5>
                    <p>{{datas.Five['Creuza de ma'].Year}}</p>

                </div>
                <div id="ten">
                    <img v-bind:src="datas.Five['Tutti morimmo a stento'].Poster" alt="">
                    <h3>{{datas.Five['Tutti morimmo a stento'].Title}}</h3>
                    <h5>{{datas.Five['Tutti morimmo a stento'].Artist}}</h5>
                    <p>{{datas.Five['Tutti morimmo a stento'].Year}}</p>


                </div>

            </div>
        </main>






        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="main.js"></script>





    </div>
</body>

</html>
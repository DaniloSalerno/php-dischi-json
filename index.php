<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albums</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div id="app">

        <header>
            <div class="nav">
                <img height="60" src="./logo.svg" alt="logo">
            </div>
        </header>

        <main>

            <div class="overlay d-flex justify-content-center align-items-center" v-if="current_album !== null">

                <div class="text-white text-center w-25">

                    <button class="btn btn-secondary mb-3" @click="current_album = null">
                        X
                    </button>

                    <img width="200" :src="current_album.poster" class="card-img-top" :alt="current_album.title">

                    <h5 class="fw-bold py-3">{{current_album.title}}</h5>

                    <div>{{current_album.author}}</div>

                    <div class="fw-bold py-3">{{current_album.year}}</div>

                    <div class="fw-bold">Genre: {{current_album.genre}}</div>




                </div>
                <!-- /.card -->
            </div>

            <div class="container">

                <div class="row row-cols-3 g-5 mt-3">

                    <div class="col" v-for="(album, i) in albums" :key="i">

                        <div class="card p-5 border-0 text-white" @click="show_details(i)">

                            <img :src="album.poster" class="card-img-top" :alt="album.title">

                            <div class="card-body text-center">

                                <h5 class="card-title fw-bold">{{album.title}}</h5>

                                <div class="card-subtitle">{{album.author}}</div>

                                <div class="card-text fw-bold">{{album.year}}</div>

                            </div>
                            <!-- /.card-body -->

                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </main>

    </div><!--  -->


    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js" integrity="sha512-emSwuKiMyYedRwflbZB2ghzX8Cw8fmNVgZ6yQNNXXagFzFOaQmbvQ1vmDkddHjm5AITcBIZfC7k4ShQSjgPAmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="text/javascript" src='./main.js'></script>

</body>

</html>
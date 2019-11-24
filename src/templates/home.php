<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <title><?=$title?></title>
</head>

<body>
    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Lista de articulos
                </h1>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="section">
            <div id="empty-msg">
            </div>
            <div class="columns" id="container-cards">
               
            </div>
        </div>
    </div>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="/assets/js/index.js"></script>
</body>

</html>
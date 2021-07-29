
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- collegamento bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- collegamento CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- collegamento font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- collegamento google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">
    <!-- collegamento Vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <title>Document</title>
    <!-- collegamento Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>

    <div id="app">
        
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1>Musicheria</h1>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <div class="container-fluid">
                <!-- start row -->
                <div class="row mt-5 p-5">
                <div class="col-3" v-for="disco in dischi">

                    <div class="card mb-5" style="width: 14rem;">
                        <img class="card-img-top" :src="disco.poster" :alt="disco.title">
                        <div class="card-body text-light text-center">                       
                            <h3 class="card-title">
                                {{disco.author}}
                            </h3>

                            <h5 class="card-title">
                                {{disco.title}}
                            </h5>

                            <p class="card-text">
                                {{disco.year}}
                            </p>
                            
                        </div>

                    </div>

</div>
                </div>
                <!-- end row -->
            </div>
        </main>

    </div>

    

    <!-- inizio script js -->
    <script src="js/script.js"></script>
    <!-- fine script js -->

</body>
</html>
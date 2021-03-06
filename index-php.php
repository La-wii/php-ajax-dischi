<?php
    include 'data.php';

    $stampa_dischi = count($dischi);
?>


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
    <title>Document</title>
</head>
<body>

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
                <?php for ($i = 0; $i < $stampa_dischi; $i++){?>

                    <div class="col-3">

                        <div class="card mb-5" style="width: 14rem;">

                            <img class="card-img-top" src="<?php echo $dischi[$i]['poster'];?>" alt="Card image cap">

                            <div class="card-body text-center">
                                
                                <h3 class="card-title">
                                    <?php echo $dischi[$i]['author'];?>
                                </h3>

                                <h5 class="card-title">
                                    <?php echo $dischi[$i]['title'];?>
                                </h5>

                                <p class="card-text">
                                    <?php echo $dischi[$i]['year'];?> 
                                </p>
                                
                            </div>

                        </div>
                        
                    </div>
                    
                <?php } ?>
            </div>
            <!-- end row -->
        </div>
    </main>
</body>
</html>
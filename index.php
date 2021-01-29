<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>《Marvel未來之戰》</title>
    <!-- CSS start -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- CSS end -->
    <!-- JavaScript start -->
    <script src="js/bootstrap.min.js"></script>
    <!-- JavaScript end -->
    <style>
    </style>
</head>
<body>
    <!-- Header Block start -->
    <div class="section" style="height: 100px; width: 100%;"></div>
    <!-- Header Block end -->
    <div class="row">
        <div class="container d-flex justify-content-center">
            <?php for ($i = 1; $i <= 5; $i++) {?>
                <div class="card m-1" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</body>
</html>
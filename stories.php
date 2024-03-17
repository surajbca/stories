<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stories Website</title>
    <!--Boostrap css cdn-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--stysheet-->
    <link rel="stylesheet" href="./style.css">

    <!--font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include './partials/connect.php'; ?>
    <?php include './partials/header.php'; ?>


    <!--php code-->

    <?php
    $id = $_GET['story_id'];
    $sql = "Select * from `topics` where topic_id=$id";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $topic_name = $row['topic_name'];
        $topic_desc = $row['topic_desc'];
        $topic_image = $row['topic_image'];
    }
    ?>
    <!--jumbotorn-->
    <div class="container-fluid">
        <div class="jumbotron bg-warning rounded">
            <div class="container">
                <h1 class="jumbotron bg-warning rounded text-center"><?php echo $topic_name; ?></h1>
                <img src=<?php echo $topic_image; ?> alt="" class="img-fluid">
                <p class="lead"><?php echo $topic_desc; ?></p>
                </p>
                <button class="btn btn-dark">
                    <a class="text-light" href="#reading" role="button">Continue Reading</a></button>
            </div>
        </div>
    </div>
    <div class="container-fluid slider">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/img11.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/img10.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/img3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>

        </div>
    </div>


    <!--Reading -->
    <div class="container" id="reading">
        <div class="jumbotron jumbotron-fluid bg-warning rounded p-0">
            <div class="container">
                <h1 class="display-4 text-center">Enjoy Reading</h1>
                <p class="lead pb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius, voluptatibus at
                    atque
                    rerum expedita, esse voluptate, adipisci neque laborum odio ipsam ut quas minus quidem quibusdam
                    cupiditate dolorem itaque assumenda?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta
                    officia libero praesentium veritatis ipsam eaque maxime amet cum! Nihil nostrum, eligendi quo
                    placeat molestias excepturi suscipit iusto optio aliquam perferendis? Lorem ipsum dolor sit amet
                    consectetur, adipisicing elit. Impedit itaque cum laboriosam cumque iure? Rem enim ullam nostrum
                    suscipit cum, deleniti maxime odio? Laboriosam consequatur, aliquam odio eaque quibusdam
                    exercitationem!</p>

            </div>
        </div>
    </div>

    <!--Thank you txt-->
    <div class="container-fluid mb-4">
        <h2 class="text-center display-4">Thank you for your <time:smalley></time:smalley>
        </h2>
    </div>

    <?php include './partials/footer.php'; ?>
</body>

</html>
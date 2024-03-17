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
    <div class="container-fluid slider">
        <?php include './partials/header.php'; ?>
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

    <!--cards-->
    <div class="container">
        <h1 class="text-center featureTitle mb-5">Feautured Stories</h1>
        <div class="row">

            <?php
            $sql = 'Select * from `topics`';
            $result = mysqli_query($con, $sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['topic_id'];
                    $topic_image = $row['topic_image'];
                    $topic_name = $row['topic_name'];
                    $topic_desc = $row['topic_desc'];
                    echo '<div class="col-md-4 col-sm-6 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src=' .
                        $topic_image .
                        ' class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">' .
                        $topic_name .
                        '</h5>
                        <p class="card-text">' .
                        substr($topic_desc, 0, 50) .
                        '......</p>
                        <a href="stories.php?story_id=' .
                        $id .
                        '" class="btn btn-primary">Continue Reading</a>
                    </div>
                </div>
            </div>';
                }
            }
            ?>

        </div>
    </div>
    <?php include './partials/footer.php'; ?>
</body>

</html>


<?php

    include "includes/header.php";
?>


    <div id="slider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1800">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/web.jfif" alt="image" class="w-100" height="550">
                <div class="carousel-caption">
                    <h1>Heading</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aut consequuntur cumque deleniti, earum, esse facilis illum magnam minima optio quis recusandae reiciendis repellat sequi voluptatem. Aut ex hic recusandae?</p>
                    <a href="" class="btn btn-success">read more</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/ww.webp" alt="image" class="w-100" height="550">
                <div class="carousel-caption">
                    <h1>Heading</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aut consequuntur cumque deleniti, earum, esse facilis illum magnam minima optio quis recusandae reiciendis repellat sequi voluptatem. Aut ex hic recusandae?</p>
                    <a href="" class="btn btn-success">read more</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/7.png" alt="image" class="w-100" height="550">
                <div class="carousel-caption">
                    <h1>Heading</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aut consequuntur cumque deleniti, earum, esse facilis illum magnam minima optio quis recusandae reiciendis repellat sequi voluptatem. Aut ex hic recusandae?</p>
                    <a href="" class="btn btn-success">read more</a>
                </div>
            </div>

        </div>

        <a href="#slider" class="carousel-control-prev" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#slider" class="carousel-control-next" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>



    <section class="py-5 bg-info">

        <div class="container">
            <div class="row">
                <?php foreach($blogs as $blog) { ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="<?php echo $blog['image']; ?>" alt="" height="270">
                            <div class="card-body">

                                <h4><?php echo $blog['title']?></h4>

                                <p><?php echo $blog['decription_one']?></p>

                                <p><?php $blog['description_two']?> </p>

                                <a href="web.php?page=readmore&&id=<?php echo $blog['id']?>" class="btn btn-dark">Read more</a>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </div>


        </div>
    </section>



<?php

include "includes/footer.php";
?>


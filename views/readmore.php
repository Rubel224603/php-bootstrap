<?php
    include "includes/header.php";
?>
    <section class="py-5 bg-dark-subtle">

        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body">
                        <img src="<?php echo $blog['image']?>" alt="image">
                    </div>
                </div>
                <div class="col-md-6">
                   <div class="card card-body">
                       <h1><?php echo $blog['title']?></h1>
                       <p</p>
                       <p><?php echo $blog['decription_one']?></p>
                       <p><?php echo $blog['description_two']?></p>

                   </div>
                </div>
            </div>
        </div>


    </section>


<?php include "includes/footer.php";?>






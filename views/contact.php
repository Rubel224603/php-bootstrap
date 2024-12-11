<?php include "includes/header.php"?>



    <section class="py-5 bg-danger-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                   <div class="card">
                       <div class="card-header">Full Name Program</div>
                       <div class="card-body">
                           <form action="web.php" method="POST">
                               <div class="row mb-3">
                                   <label for="" class="col-md-3">First Name</label>
                                   <div class="col-md-9">
                                       <input type="text" class="form-control" name="first_Name"/>
                                   </div>
                               </div>
                               <div class="row mb-3">
                                   <label for="" class="col-md-3">Last Name</label>
                                   <div class="col-md-9">
                                       <input type="text" class="form-control" name="last_Name"/>
                                   </div>
                               </div>
                               <div class="row mb-3">
                                   <label for="" class="col-md-3">Full Name</label>
                                   <div class="col-md-9">
                                       <input type="text" value="<?php echo isset($_GET['result']) ? $_GET['result'] : ''; ?>" class="form-control"/>
                                   </div>
                               </div>
                               <div class="row mb-3">
                                   <label for="" class="col-md-3"></label>
                                   <div class="col-md-9">
                                       <input type="submit" class="btn btn-success" name="full_name_btn">
                                   </div>
                               </div>

                           </form>
                       </div>

                   </div>
                </div>
            </div>
        </div>
    </section>
















<?php include "includes/footer.php"?>
<?php include "includes/header.php"?>



    <section class="py-5 bg-warning-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header"><h1>Series Program</h1></div>
                        <div class="card-body">
                            <form action="web.php" method="POST">
                                <div class="row mb-3">
                                    <label for="">Starting Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="startin_number">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="">Ending Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="ending_number">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="">Result</label>
                                    <div class="col-md-9">
                                        <textarea name="" id=""  class="form-control"><?php echo isset($_GET['result']) ? $_GET['result']: ' ';?></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for=""></label>
                                    <div class="col-md-9">
                                        <input type="submit" value="Make Series" class="btn btn-success" name="series_btn">
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
<?php
    require_once "vendor/autoload.php";
    use App\classes\Home;
    use App\classes\FullName;
    use App\classes\calculator;
    use App\classes\Series;



    $home = new Home();
//
//    echo "<pre>";
//
//    print_r($_POST);
//
//    echo "<pre>";


    if(isset($_GET['page'])){

        if($_GET['page']=='home'){
            $home->index();

        }elseif($_GET['page']=='about'){

            $home->about();

        }elseif($_GET['page']=='portfolio'){

            $home->portfolio();

        }elseif($_GET['page']=='contact'){

            $home->contact();

        }elseif($_GET['page']=='service'){

            $home->service();

        }elseif ($_GET['page']=='gallary'){

            $home->gallary();

        }elseif($_GET['page']=='readmore'){

            $home->readmore($_GET["id"]);

        }

    }



    elseif(isset($_POST['full_name_btn'])){

        $fullName = new FullName($_POST);

        $fullName->index();

    }
    elseif(isset($_POST['calculator_btn'])){

        $calculator = new calculator($_POST);

        $calculator->index();
    }
    elseif(isset($_POST['series_btn'])){
        $series = new Series($_POST);
        $series->index();

    }




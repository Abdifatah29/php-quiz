<?php
    require_once './config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Link for stylesheet -->
    <link rel="stylesheet" href="css/quiz.css">
    <!--  -->
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/js/mdb.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css" rel="stylesheet">
    <!-- Title tag -->
    <title>Quiz questionnaire</title>
</head>
<body>
    <!--Main Navigation-->
    <header>

    <nav class="navbar navbar-expand-lg navbar-dark black">
        <div class="container">
        <a class="navbar-brand" href="#"><strong>Abdifatah</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#instructions">Instructions</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>

    <div class="view intro-2">
        <div >
        <div class="mask rgba-black-strong flex-center">
            <div class="container">
            <div class="white-text text-center wow fadeInUp">
                <h2>The Wizard unite quiz</h2>
                <h5>Awakening Your Inner genius</h5>
                <br>
                <p>May The Force Be With You.</p>
            </div>
            </div>
        </div>
        </div>
    </div>

    </header>
    <!--Main Navigation-->

    <!--Main Layout-->
    <main class=" my-5">

    <div class="container questionnaire">
        <div class="row">
        <div class="col-md-12">
            <article id="about"><h4>This is a simple Quiz, which presents multiple choice questions to the users. </p>This uses session to store user score and prints at the end of quiz.</h4></article>
             <!--Initialization step -->
    <h2 id="instructions">Please take the following quiz</h2>
    <h4>The quiz is made of 20 qustions , 10 wildlife related questions and 10 historical questions.</p>Choose one answer from the four possible answers </p> <strong>GOOD LUCK!</strong></h4

    <!-- form to record user input -->
    <form action="index.php" method="post">
<?php
        foreach ($questionnaire as $numbers => $values) {
?>

     <!-- Nesting Php in Html tags -->
    <p><?=  $numbers . ")" . $values['question'] ?></p>

<?php
        foreach ($values['quessTheAnswer'] as $key => $value) {
            $new_key = str_replace(")","",$key);
?>
            <input type="radio" name='<?= $numbers ?>' onclick="handleOnChange()" value="<?= $new_key ?>" />
            <span> <?= $value ?></span><br>
<?php
    }
?>
            <br>
<?php
    }
    ?>
        <input type="submit" name="submit" value="Submit Quiz" >
    </form>
<?php
    if (isset($_POST['submit'])){
        $total = 0;
        for($n=1; $n <= count($questionnaire); $n++){
            $correct_answer = $questionnaire[$n]['correctAnswer'];
            $name = "$n";
            $user_input = $_POST[$name];


            if($correct_answer == $user_input){
                $total++;
            }
            else{
                // echo 'wrong';
            }
        }
?>
      <p>Your score is <?= $total?> / 20 </p>
<?php
         if($total <= 9 ){
             echo "Try again";
         } else {
             echo"Well Done!";
         }
    }

?>
<!-- End of form -->
        </div>
        </div>
    </div>

    </main>
    <!--Main Layout-->
</body>

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
        <a class="navbar-brand" href="#"><strong>Navbar</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>

    <div class="view intro-2">
        <div class="full-bg-img">
        <div class="mask rgba-black-strong flex-center">
            <div class="container">
            <div class="white-text text-center wow fadeInUp">
                <h2>This Navbar isn't fixed</h2>
                <h5>When you scroll down it will disappear</h5>
                <br>
                <p>Full page intro with background image will be always displayed in full screen mode, regardless
                of device </p>
            </div>
            </div>
        </div>
        </div>
    </div>

    </header>
    <!--Main Navigation-->

    <!--Main Layout-->
    <main class=" my-5">

    <div class="container">
        <div class="row">
        <div class="col-md-12">
             <!--Initialization step -->
    <h2>Please take the following quiz</h2>
    <h4>The quiz is made of 20 qustions , 10 wildlife related questions and 10 historical questions.</h4>
<?php 
//Wildlife related questionnaires
//Multiple answers for Wildlife questions
$questionnaire = array(
    1 => array(
        'question' => 'What is the largest type of ‘big cat’ in the world?',
        'quessTheAnswer' => array(
            'A' => 'Lion',
            'B' => 'Tiger',
            'C' => 'Black Panther',
            'D' => 'Cheeteh'
        ),
        'correctAnswer' => 'B'
    ),

    2 => array(
        'question' => 'What is the fastest land animal in the world?',
        'quessTheAnswer' => array(
            'A' => 'Cheetah',
            'B' => 'Ostrich',
            'C' => 'Giraffe',
            'D' => 'Chicken'
        ),
        'correctAnswer' => 'A'
    ),

    3 => array(
        'question' => 'What are female elephants called?',
        'quessTheAnswer' => array(
            'A' => 'Lioness',
            'B' => 'Cow',
            'C' => 'A female elephant',
            'D' => 'Eagle'
        ),
        'correctAnswer' => 'B'
    ),

    4 => array(
        'question' => '. Groups of lions are known as what?',
        'quessTheAnswer' => array(
            'A' => 'Empire',
            'B' => 'Royalty',
            'C' => 'Prides',
            'D' => 'LIon kingdom'
        ),
        'correctAnswer' => 'C'
    ),

    5 => array(
        'question' => 'What type of animal is the largest primate in the world?',
        'quessTheAnswer' => array(
            'A' => 'Elephant',
            'B' => 'Whale',
            'C' => 'Gorilla',
            'D' => 'Mouse'
        ),
        'correctAnswer' => 'C'
    ),

       6 => array(
        'question' => 'How many legs does a spider have?',
        'quessTheAnswer' => array(
            'A' => 12,
            'B' => 6,
            'C' => 21,
            'D' => 8
        ),
        'correctAnswer' => 'D'
    ),

       7 => array(
        'question' => ' What is the most recognizable physical feature of the male lion?',
        'quessTheAnswer' => array(
            'A' => 'Its claws',
            'B' => 'Weight',
            'C' => 'Its mane',
            'D' => 'Its pride'
        ),
        'correctAnswer' => 'C'
    ),

       8 => array(
        'question' => '. How many pairs of wings does a bee have?',
        'quessTheAnswer' => array(
            'A' => 4,
            'B' => 2,
            'C' => 6,
            'D' => 10
        ),
        'correctAnswer' => 'B'
    ),

       9 => array(
        'question' => ' What are baby goats called?',
        'quessTheAnswer' => array(
            'A' => 'Cristiano Ronaldo',
            'B' => 'Kids',
            'C' => 'Baby goat',
            'D' => 'Snakes'
        ),
        'correctAnswer' => 'B'
    ),

       10 => array(
        'question' => 'Are butterflies insects?',
        'quessTheAnswer' => array(
            'A)' => 'No',
            'B)' => 'Yes',
            'C)' => "'I don't Know",
            'D)' => 'Maybe'
        ),
        'correctAnswer' => 'B'
    ),
    //End of wildlife questions

    //History related questionnaires

        11 => array(
        'question' => 'What was the Nazi symbol called?',
        'quessTheAnswer' => array(
            'A)' => 'Swastika',
            'B)' => 'Captain John Alcock',
            'C)' => "German power",
            'D)' => "Hitler's child"
        ),
        'correctAnswer' => 'A'
    ),

           12 => array(
        'question' => 'In which year was the death of Queen Elizabeth I?',
        'quessTheAnswer' => array(
            'A)' => 1903,
            'B)' => 1605,
            'C)' => 1994,
            'D)' => 1603
        ),
        'correctAnswer' => 'D'
    ),

           13 => array(
        'question' => 'Name the second largest city in Britain during the Black Death?',
        'quessTheAnswer' => array(
            'A)' => 'Wincester',
            'B)' => 'Bristol',
            'C)' => 'Cardiff',
            'D)' => 'London'
        ),
        'correctAnswer' => 'B'
    ),

           14 => array(
        'question' => 'Which war first introduced the use of tanks?',
        'quessTheAnswer' => array(
            'A)' => 1800,
            'B)' => 1937,
            'C)' => 1916,
            'D)' => 1918
        ),
        'correctAnswer' => 'C'
    ),

            15 => array(
        'question' => ' Which country did Britain fight in the War of Jenkins’s Ear?',
        'quessTheAnswer' => array(
            'A)' => 'Spain',
            'B)' => 'Portugal',
            'C)' => 'France',
            'D)' => 'Italy'
        ),
        'correctAnswer' => 'A'
    ),

           16 => array(
        'question' => 'What year did Adolf Hitler die?',
        'quessTheAnswer' => array(
            'A)' => 1977,
            'B)' => 2003,
            'C)' => 1950,
            'D)' => 1945
        ),
        'correctAnswer' => 'D'
    ),

            17 => array(
        'question' => 'In which decade did compulsory driving testing begin? ',
        'quessTheAnswer' => array(
            'A)' => 1935,
            'B)' => 1934,
            'C)' => 1903,
            'D)' => 1989
        ),
        'correctAnswer' => 'A'
    ),

           18 => array(
        'question' => ' In which year was the Wall Street Crash?',
        'quessTheAnswer' => array(
            'A)' => 1918,
            'B)' => 1987,
            'C)' => 1929,
            'D)' => 1907
        ),
        'correctAnswer' => 'C'
    ),

           19 => array(
        'question' => 'During which year did the RMS Titanic sink?',
        'quessTheAnswer' => array(
            'A)' => 1997,
            'B)' => 1918,
            'C)' => 1912,
            'D)' => 1890
        ),
        'correctAnswer' => 'C'
    ),

           20 => array(
        'question' => 'Who led the Million Man March on Washington?',
        'quessTheAnswer' => array(
            'A)' => 'Michael Jackson',
            'B)' => 'Louis Farrakhan',
            'C)' => "Donald Trump",
            'D)' => 'Louis Hernandez'
        ),
        'correctAnswer' => 'B'
    ),
    
    
    //Multiple answers for Wildlife questions
    //End of history related questionnaires
);
    //getting user input
?>
    <!-- form to record user input -->
<form action="index.php" method="post">
    <?php 
        foreach ($questionnaire as $numbers => $values) {
     ?>
     
     <!-- Nesting Php in Html tags -->
    <p><?php echo "$numbers " . $values['question'] ?></p>

    <?php
        foreach ($values['quessTheAnswer'] as $key=> $value) {
            $new_key = str_replace(")","",$key);

            echo<<<END

            <input type="radio" name='$numbers' onclick="handleOnChange()" value="$new_key" />
            <span> $value</span><br>

END;
    ?>
        
           
        
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
        for($n=1;$n <= count($questionnaire);$n++){
            $correct_answer =($questionnaire[$n]['correctAnswer']);
            $name = "$n";
            $user_input = $_POST[$name];
            // echo "<br>".$user_input ."<br>";
            // echo $correct_answer."<br>";

            
            
            // $total =0;
            if($correct_answer == $user_input){

                $total++;
            }
            else{
                // echo 'wrong';
            }
        }
         echo "<p>"."Your score is ".$total. " / 20"."</p>";
         if($total <= 9 ){
             echo "Try again";
         } else {
             echo"Well Done!";
         }
        
        // for ($k=1;$k<=count($questionnaire);$k++){
        //     $name = "$k";
        //     // echo $name;
        //     // typeof()
        //     echo 
        // }

        // var_dump($questionnaire);

    }

?>
<!-- End of form -->
        </div>
        </div>
    </div>

    </main>
    <!--Main Layout-->
</body>
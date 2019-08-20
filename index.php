<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Link for stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  <!--  -->
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <!-- Title tag -->
  <title>Quiz questionnaire</title>
  <style>
   h2{
       font-size: 32px red;
   }
  </style>
</head>
<body>
    <!--Initialization step -->
    <h2>Please take the following quiz</h2>
    <h5>The Quiz is is made of 20 qustions , 10 wildlife related questions and 10 historical questions.</h5>
    <?php 
    //Wildlife related questionnaires
    //Multiple answers for Wildlife questions
    $Questionnaire = array(
        1 => array(
            'question' => 'What is the largest type of ‘big cat’ in the world?',
            'quessTheAnswer' => array(
                'A' => 'Lion',
                'B' => 'Tiger',
                'C' => 'Black Panther',
                'D' => 'Cheeteh'
            ),
            'bestAnswer' => 'B'
        ),

        2 => array(
            'question' => 'What is the fastest land animal in the world?',
            'Quess' => array(
                'A' => 'Cheetah',
                'B' => 'Ostrich',
                'C' => 'Giraffe',
                'D' => 'Chicken'
            ),
            'bestAnswer' => 'A'
        ),

        3 => array(
            'question' => 'What are female elephants called?',
            'quessTheAnswer' => array(
                'A' => 'Lioness',
                'B' => 'Cow',
                'C' => 'A female elephant',
                'D' => 'Eagle'
            ),
            'bestAnswer' => 'B'
        ),

        4 => array(
            'question' => '. Groups of lions are known as what?',
            'quessTheAnswer' => array(
                'A' => 'Empire',
                'B' => 'Royalty',
                'C' => 'Prides',
                'D' => 'LIon kingdom'
            ),
            'bestAnswer' => 'C'
        ),

        5 => array(
            'question' => 'What type of animal is the largest primate in the world?',
            'quessTheAnswer' => array(
                'A' => 'Elephant',
                'B' => 'Whale',
                'C' => 'Gorilla',
                'D' => 'Mouse'
            ),
            'bestAnswer' => 'C'
        );
    ?>
    <!-- form to record user input -->
    <form action="quiz.php" method="post">
    </form>
    <!-- End form to record user input -->
</body>
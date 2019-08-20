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
        'quessTheAnswer' => array(
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
    ),

       6 => array(
        'question' => 'How many legs does a spider have?',
        'quessTheAnswer' => array(
            'A' => '12',
            'B' => '6',
            'C' => '21',
            'D' => '8'
        ),
        'bestAnswer' => 'D'
    ),

       7 => array(
        'question' => ' What is the most recognizable physical feature of the male lion?',
        'quessTheAnswer' => array(
            'A' => 'Its claws',
            'B' => 'Weight',
            'C' => 'Its mane',
            'D' => 'Its pride'
        ),
        'bestAnswer' => 'C'
    ),

       8 => array(
        'question' => '. How many pairs of wings does a bee have?',
        'quessTheAnswer' => array(
            'A' => '4',
            'B' => '2',
            'C' => '6',
            'D' => '10'
        ),
        'bestAnswer' => 'B'
    ),

       9 => array(
        'question' => ' What are baby goats called?',
        'quessTheAnswer' => array(
            'A' => 'Cristiano Ronaldo',
            'B' => 'Kids',
            'C' => 'Baby goat',
            'D' => 'Snakes'
        ),
        'bestAnswer' => 'B'
    ),

       10 => array(
        'question' => 'Are butterflies insects?',
        'quessTheAnswer' => array(
            'A)' => 'No',
            'B)' => 'Yes',
            'C)' => "'I don't Know",
            'D)' => 'Maybe'
        ),
        'bestAnswer' => 'B'
    ),
    //End of wildlife questions

    //History related questionnaires

        11 => array(
        'question' => 'What was the Nazi symbol called?',
        'quessTheAnswer' => array(
            'A)' => 'No',
            'B)' => 'Yes',
            'C)' => "'I don't Know",
            'D)' => 'Maybe'
        ),
        'bestAnswer' => 'B'
    ),

           12 => array(
        'question' => 'What is the name of the city where John F. Kennedy was assassinated?',
        'quessTheAnswer' => array(
            'A)' => 'No',
            'B)' => 'Yes',
            'C)' => "'I don't Know",
            'D)' => 'Maybe'
        ),
        'bestAnswer' => 'B'
    ),

           13 => array(
        'question' => 'What date was D-Day?',
        'quessTheAnswer' => array(
            'A)' => 'No',
            'B)' => 'Yes',
            'C)' => "'I don't Know",
            'D)' => 'Maybe'
        ),
        'bestAnswer' => 'B'
    ),

           14 => array(
        'question' => 'Which war first introduced the use of tanks?',
        'quessTheAnswer' => array(
            'A)' => 'No',
            'B)' => 'Yes',
            'C)' => "'I don't Know",
            'D)' => 'Maybe'
        ),
        'bestAnswer' => 'B'
    ),

            15 => array(
        'question' => 'During which year did Christopher Columbus discover the Bahamas?',
        'quessTheAnswer' => array(
            'A)' => 'No',
            'B)' => 'Yes',
            'C)' => "'I don't Know",
            'D)' => 'Maybe'
        ),
        'bestAnswer' => 'B'
    ),

           16 => array(
        'question' => 'What year did Adolf Hitler die?',
        'quessTheAnswer' => array(
            'A)' => 'No',
            'B)' => 'Yes',
            'C)' => "'I don't Know",
            'D)' => 'Maybe'
        ),
        'bestAnswer' => 'B'
    ),

            17 => array(
        'question' => 'What famous wall, built by a Roman Emperor, lies between Scotland and England?',
        'quessTheAnswer' => array(
            'A)' => 'No',
            'B)' => 'Yes',
            'C)' => "'I don't Know",
            'D)' => 'Maybe'
        ),
        'bestAnswer' => 'B'
    ),

           18 => array(
        'question' => 'Who was the first president of America?',
        'quessTheAnswer' => array(
            'A)' => 'No',
            'B)' => 'Yes',
            'C)' => "'I don't Know",
            'D)' => 'Maybe'
        ),
        'bestAnswer' => 'B'
    ),

           19 => array(
        'question' => 'During which year did the RMS Titanic sink?',
        'quessTheAnswer' => array(
            'A)' => 'No',
            'B)' => 'Yes',
            'C)' => "'I don't Know",
            'D)' => 'Maybe'
        ),
        'bestAnswer' => 'B'
    ),

           20 => array(
        'question' => 'What were Norsemen better known as?',
        'quessTheAnswer' => array(
            'A)' => 'No',
            'B)' => 'Yes',
            'C)' => "'I don't Know",
            'D)' => 'Maybe'
        ),
        'bestAnswer' => 'B'
    ),
    
    
    //Multiple answers for Wildlife questions
    //End of history related questionnaires
);

?>
<?php
    if (isset($_POST['quessTheAnswer'])){
        echo $_POST['quessTheAnswer'];
    }
?>
    <!-- form to record user input -->
<form action="quiz.php" method="post">
    <?php 
        foreach ($Questionnaire as $numbers => $values) {
     ?>
     
     <!-- Nesting Php in Html tags -->
    <p><?php echo "$numbers " . $values['question'] ?></p>

    <?php
        foreach ($values['quessTheAnswer'] as $value) {
    ?>
        <div>
            <input type="radio" name="answer" value=`${value}` />
            <span><?php echo $value ?></span>
        </div>
    <?php
    }
    ?>

    <!-- Testing the correct Answers -->
    <?php
        $totalCorrect = 0;
        $bestAnswer = 
            [1 =>'B',
             2 => 'A', 
             3 => 'B',
             4 => 'C', 
             5 => 'C', 
             6 => 'D', 
             7 => 'C',
             8 => 'B', 
             9 => 'B', 
             10 =>'B'
            ];

        foreach ($bestAnswer as $num => $answer)
        {
            $key = 'answer-'.$num;
            if (isset($_POST[$key]) && $_POST[$key] === $answer)
            {
                $totalCorrect++;
            }
        }
        echo $totalCorrect.' out of 10 correct</div>';
    ?>
    <!-- End of Testing for correct answers -->
     
    <?php
     
    }

    ?>
   
    
    <input type="submit" value="Submit Quiz" >
    <?php
        if (isset($_POST['submit'])) { 
            if (!empty($_POST['answer'])) {
                echo "HI";
                foreach ($_POST['answer'] as $answer => $value) {
                    # code...
                    echo $answer;
                }
            }
        }
        else { echo "Please answer all the questiions."; }
    ?>
</form>
<!-- End of form -->
</body>
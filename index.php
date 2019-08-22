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
</head>
<body>
    <!--Initialization step -->
    <h2>Please take the following quiz</h2>
    <h4>The quiz is made of 20 qustions , 10 wildlife related questions and 10 historical questions.</h4>
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
        'question' => ' Which country did Britain fight in the War of Jenkins’s Ear? Spain',
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
        'question' => 'In which decade did compulsory driving testing begin? 1930s (1935)',
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
        'correctAnswer' => 'c'
    ),

           19 => array(
        'question' => 'During which year did the RMS Titanic sink?',
        'quessTheAnswer' => array(
            'A)' => 1997,
            'B)' => 1918,
            'C)' => 1912,
            'D)' => 1890
        ),
        'correctAnswer' => 'c'
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
<?php
$total = 0;
function handleOnChange() {
    global $total;
    foreach ($Questionnaire as $questionWithAnswers) {
        foreach ($questionWithAnswers['quessTheAnswer'] as $key => $answers) {
            if(isset($_POST['submit']) && $_POST["answer-$key"]=== $answers['correctAnswer']) {
                $total++;
            } 
        }
    }
    return $total;

}

?>
    <!-- form to record user input -->
<form action="index.php" method="post">
    <?php 
        foreach ($Questionnaire as $numbers => $values) {
     ?>
     
     <!-- Nesting Php in Html tags -->
    <p><?php echo "$numbers " . $values['question'] ?></p>

    <?php
        foreach ($values['quessTheAnswer'] as $key=> $value) {
    ?>
        <div>
            <input type="radio" name="answer-[<?php echo $numbers ?>]" onclick="handleOnChange()" value="<?=$key?>" />
            <span><?php echo $value ?></span>
        </div>
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
 if(isset($_POST['submit'])){
    echo "<p>"."Your score is ".$total. " / 20"."</p>";

    }
    ?>
<!-- End of form -->
</body>
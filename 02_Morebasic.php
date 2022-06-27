<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorial</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        .container{
            max-width:80%;
            background-color:#c0b3b3;
            margin:auto;
            padding:23px;
        }
    </style>

</head>
<body>
    <div class="container">
        <h1>Lets Learn with php</h1>
        <p>Your party status is here: </p>
        <?php
        $age=3;
        if($age>18){
            print "You can go to the Party";
        }
        else if($age==7){
            echo "Your age is 7 years old";
        }
        else if($age==6){
            echo "Your age is 7 years old";
        }
        else{
            echo "You can not go to the party";
        }

        //array in php
        $language=array("Python","php","C++","NodeJs");
        // echo $language[1];
        // echo count($language);/*it is count number of array element */

        //Loops in php
        //while loop
        $a=0;
        while ($a <= 10) {
            echo "<br> The value of a is ";
            echo $a;
            $a++;
        }
        //Iterating array in PHP using while Loops
        $a=0;
        while ($a < count($language)) {
            echo "<br> The value of Language is ";
            echo $language[$a];
            $a++;
        }
        //do while loop
        $a=20;
        do{
            echo "<br> The value of a is ";
            echo $a;
            $a++;
        }while ($a <10);/*do loop first print the value and then its increment value check whether it is okay or not if okay then loop go on */
 
        // for loop
        
        /*for ($i=0; $i < 10; $i++) { 
            echo "<br> The value of i is ";
            echo $i;
        }*/
        for ($a=0; $a < 10; $a++) { 
            echo "<br> The Value of a from for loop is ";
            echo $a;
        }
        foreach($language as $value){
            echo "<br> The value from foreach loop is ";
            echo $value;
        }

        //Function in Php
        //Biltin Function like var_dump()
        //User Define Function

        function print5(){
            echo "<br>Five";
        }
        print5();//without argument
        print5();
        function print_number($number){
        echo "<br>Your Number is ";
        echo $number;
        }
        print_number(45);//with argument
        print_number(23);
        ?>
    </div>
</body>
</html>
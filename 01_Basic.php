<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorial</title>
</head>
<body>
    <div>
        This is My first php Tutorial
        <?php
          echo "Hollo word and This is printed by php"
        ?>
        <!--This is the Syntax of php <?php ?> -->
        <!-- inside php syntax whatever written is display in web page but what code is use for displaying that is not shown in web page -->
        <?php
          echo "Hollo word and This is printed by php"

          // this is a single line coment
         /*   this 
              is 
              a 
              multiline comment */
        ?>
        <?PHP
        $variable1=4;
        $variable2=3;
        echo $variable1;
        echo $variable2 ;
        ecHo $variable1+$variable2;

        //Operator in PHP
        // Arithmetic Operator
        echo "The vale of variable1 + variable2 is ";
        echo $variable1+$variable2;
        echo "<br>"; /*To break a line and go to new line*/

        echo "The vale of variable1-variable2 is ";
        echo $variable1-$variable2;
        echo "<br>";
        echo "The vale of variable1*variable2 is ";
        echo $variable1*$variable2;
        echo "<br>";
        echo "The vale of variable1/variable2 is ";
        echo $variable1/$variable2;
        echo "<br>";

        // assignment operator
        $newVar=$variable2;
        // $newVar+=2;
        // $newVar-=2;
        // $newVar*=2;
        // $newVar/=2;
        echo "The Value of new variable is ";
        echo $newVar;
        echo "<br>";

        // comparision operator
        // echo "<h1>This is heading </h1>"
        echo "The value of 1==4 ";
        echo var_dump(1==4);
        echo "<br>";

        echo "The value of 1!=4 ";
        echo var_dump(1!=4);
        echo "<br>";

        echo "The value of 1>=4 ";
        echo var_dump(1>=4);
        echo "<br>";

        echo "The value of 1<=4 ";
        echo var_dump(1<=4);
        echo "<br>";
        // Increment/decrement operator
       /* $variable1++;
        $variable1--;
        ++$variable1;
        --$variable1; */
        /*echo $variable1++;//print value of variable1
        echo "<br>";
        echo $variable1; //Print one incresed value of variable1 */
        
        // echo $variable1--;
       /* echo ++$variable1;//pahela increment thase ane pa6i print thase
        echo "<br>";
        echo $variable1;*/
        echo --$variable1; 
        echo "<br>";
        echo $variable1;

        // Logical operator
        /*
        And (&&)
        or(||)
        xor
        not (!)*/
        // $myVar=(true and true);
        // $myVar=(true and false);/*Synatax of logical operator is Variable=(condition1 and condition2)*/
        // $myVar=(false and true);
        // $myVar=(false and false);
        // $myVar=(true or true);
        // $myVar=(true or false);
        // $myVar=(false or false);
        // $myVar=(false or true);

        // $myVar=(true xor true);
        // $myVar=(true xor false);
        // $myVar=(false xor false);
        $myVar=(false xor true);
        echo "<br>";
        echo var_dump($myVar);
        ?>

        <?php
        define('PI',3.14);//Syantax for constant data type*/
        //Data types in php
        // 1.String
        // 2.intger
        // 3.Float
        // 4.Boolen
        // 5.Array
        // 6.Object

        echo "<br> Data types <br>";
        $var="This is A String";
        echo var_dump($var);
        echo "<br>";

        $var=67;
        echo var_dump($var);
        echo "<br>";

        $var=67.09;
        echo var_dump($var);
        echo "<br>";

        $var=true;
        echo var_dump($var);
        echo "<br>";

        echo PI;




        ?>


        <?php 
        // echo 'Helo word sencond time';
        ?>


    </div>
</body>
</html>
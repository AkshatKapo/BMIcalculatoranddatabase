<!DOCTYPE html>

<html>
<head>
    <title> BMI Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" href="Stylesheet.css">

</head>
<body>
    <form method="post" action="">
        <h1>BMI Calculator</h1>
        <fieldset>
            <legend align="left">
                Check your BMI Now!
            </legend>
            Weight in Kg: <input type="text" name="weight"><br>
            Height in M: <input type="text" name="height"><br>
            <input type="submit" value="Calculate" name="result1"><br>

            <?php
            if(!empty($_POST['result1']))
            {
                $weight=$_POST['weight'];
                $height=$_POST['height'];

                $bmi=$weight/(pow($height,2));

                echo <<< END
                The answer is: <input type="text" value="$bmi">
                END;
            }
            ?>

            <script type="text/javascript">
                var bmi = "<?php echo ($bmi); ?>";

                if (bmi<18.5)
                {document.write("You are underweight");}

             else if (bmi>=18.5 && bmi<=24.9)
                {document.write("Your weight is normal");}

            else if (bmi>=25 && bmi<=29.9)
                {document.write("You are over weight");}

            else {document.write("Obesity");}
            </script>
        </fieldset>
    </form>
</body>
</html>


<!-- Second calculator-->

<!DOCTYPE html>

<html>
<head>
    <title> BMI Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" href="Stylesheet.css">

</head>
<body>
    <form method="post" action="">
        <h1>BMI Calculator</h1>
        <fieldset>
            <legend align="left">
                Check your BMI Now!
            </legend>
            Weight in pounds(lb): <input type="text" name="w"><br>
            Height in inches(in): <input type="text" name="h"><br>
            <input type="submit" value="Calculate" name="result"><br>

            <?php
            if(!empty($_POST['result']))
            {
                $w=$_POST['w'];
                $h=$_POST['h'];

                $bmi1=($w/(pow($h,2)) )* 703;

                echo <<< END
                Your Weight is: <input type="text" value="$bmi1">
                END;
            }
            ?>

            <script type="text/javascript">
                var bmi1 = "<?php echo ($bmi1); ?>";

                if (bmi1<18.5)
                {document.write("You are underweight");}

             else if (bmi1>=18.5 && bmi1<=24.9)
                {document.write("Your weight is normal");}

            else if (bmi1>=25 && bmi1<=29.9)
                {document.write("You are over weight");}

            else {document.write("Obesity");}
            </script>
        </fieldset>
    </form>
</body>
</html>




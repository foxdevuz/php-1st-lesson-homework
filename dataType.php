<html>
    <head>
        <title>
            homework
        </title>
        <style>
            * {
                font-family: sans-serif;
            }
        </style>
    </head>
    <body>
        <!-- 1st Homework -->
    <?php
        // Take dataTypes
        $str = "Str";
        $num = 123;
        $boleanTrue = true;
        $boleanFale = false;

        echo '
        <h1>
            Bolean True: '. $boleanTrue .  ' <br/>
            Bolean False: '. $boleanFale .' <br/>
            String: ' . $str .'<br/>
            Number: '. $num .'<br/>
        </h1>'
    ?>
     <!-- 2st Homework -->
    <?php
        // take old our household
        $mom = 45;
        $dad = 46;
        $brother = 24;
        $me = 17;

        $totalOld = $mom + $dad + $brother + $me;
        echo '
            <h1>
                '. $totalOld .'
            </h1>
        '
    ?>
            
    </body>
</html>
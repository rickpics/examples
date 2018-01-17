<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Countdown</title>
    <style>
        body,
        html {
            height: 100%;
            display: grid;
            font-family: Helvetica;
            font-weight: 100;
            font-size: 2em;
            text-align: left;
        }

        span {
            margin: auto;
        }

    </style>
</head>

<body>
<span>
            <?php
$inauguration  = date_create('2021-01-21');
$now 	= date_create(); // Current time and date
$diff  	= date_diff( $now, $inauguration );

echo  '<strong>'.$diff->days . ' days</strong><br><br>';
echo  $diff->y . ' years<br> ';
echo  $diff->m . ' months<br>';
echo  $diff->d . ' days<br>';
echo  $diff->h . ' hours<br>';
echo  $diff->i . ' minutes<br>';
echo  $diff->s . ' seconds';
    
?>

                <p>
                    &#x1F34A; &#x2716; &#x1F921;
                </p>
</span>
</body>

</html>

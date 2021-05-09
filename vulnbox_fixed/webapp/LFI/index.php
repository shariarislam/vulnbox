<!DOCTYPE HTML>
<html>

<head>
    <title>Gallery</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
</head>

<body>
    <h1>Gallery</h1>
    <i>a gallery of various dogs or cats</i>

    <div>
        <h2>What would you like to see?</h2>
        <a href="?view=dog"><button id="dog">A dog</button></a> <a href="?view=cat"><button id="cat">A cat</button></a><br>
        <?php
            if(isset($_GET['view'])) {
                if($_GET['view'] == 'dog') {
                    echo 'Here you go!<br>';
                    include 'dog.php';
                }
                elseif($_GET['view'] == 'cat') {
                    echo 'Here you go!<br>';
                    include 'cat.php';
                }
                else{
                    echo 'Sorry, only dogs or cats are allowed.';
                }
            }
        ?>
    </div>
</body>

</html>

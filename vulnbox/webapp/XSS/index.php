<!DOCTYPE HTML>
<html>

<head>
    <title>VulnBox</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
</head>

<body>
    <h1>VulnBox</h1>
    <i>Name picker for your pets</i>

    <div>
        <h2>Name your pet</h2>
        <br>
        <form action="" method="GET">
          <input type="text" name="name" placeholder="Name">
          <button type="submit" id="submit">Submit</button>
        </form><br><br><br>
        <h2>
          <?php
            $compliments = array(
              'awesome',
              'brilliant',
              'dazzling',
              'epic',
              'iconic',
              'kick ass',
              'unforgettable',
              'touching',
              'notable',
              'headline worthy',
            );
            if(isset($_GET['name']) AND $_GET['name'] != '') {
                    echo $_GET['name'] . ' is a ' . $compliments[array_rand($compliments)] . " name.";
            }
        ?>
      </h2>
    </div>
</body>

</html>

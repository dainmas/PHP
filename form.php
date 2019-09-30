<?php
var_dump($_POST);
$date = date('Y-m-d');
$anketa = [];

if (isset($_POST['enter'])) {
    $anketa['name'] = 'Name: ' . $_POST['name'];
    $anketa['last-name'] = 'Last Name: ' . $_POST['last-name'];
    $anketa['age'] = 'Age: ' . $_POST['age'];
    $anketa['level'] = 'Level: ' . $_POST['level'];
    $anketa['text'] = 'Žmogus vardu, ' . $_POST['name'] . ' ' . $_POST['last-name'] . ', kuriam(-iai) yra ' . $_POST['age'] . ' metai,  yra PHP ' . $_POST['level'] . '.<br><br> Anketa užpildyta ' . $date . '.';
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form</title>
        <style>
            .form_container{
                width: 50%;
                height: 50%;
                margin: auto;
                border: 1px solid red;
                text-align: left;
                padding: 10px;
            }
            .container{
                width: 50%;
                margin: auto;
                border: 1px solid red;
                text-align: left;
                padding: 10px;
                background-image: url('https://previews.123rf.com/images/vladimirs/vladimirs1612/vladimirs161200029/69152035-old-wrinkled-paper-background-papers-folds-wrinkles-texture-brown-weathered-parchment.jpg');
                background-size: cover;
            }

            .certificate{
                width: 200px;
            }

            h1{
                text-align: center;
            }

        </style>
    </head>
    <body>
        <?php if (empty($_POST)): ?>
            <div class="form_container">
                <h1>Užpildyk formą:</h1>
                <form method="POST">
                    <label>
                        <span>Name:</span>
                        <input type="text" name="name" value="" placeholder="Your Name" required>
                    </label> 
                    <br>
                    <br>
                    <label>
                        <span>Last Name:</span>
                        <input type="text" name="last-name" value="" placeholder="Your Last Name" required>
                    </label>
                    <br>
                    <br>
                    <label>
                        <span>Age:</span>
                        <input type="age" name="age" value="" placeholder="Enter your age">
                    </label>
                    <br>
                    <br>
                    <label for="level">Kaip vertini savo PHP žinias:</label>
                    <select name="level">
                        <option value="pradedantysis" selected>Pradedantysis</option>
                        <option value="pazenges" selected>Pažengęs</option>
                        <option value="profesionalas" selected>Profesionalas</option>
                    </select>
                    <input type="submit" name="enter" value="Paspausti">
                </form>
            </div>
            <!--Sertifikatas-->
        <?php else: ?>
            <div class="container">
                <img class="certificate" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSd7Epnq04u_D5EyMEH5BT_aICdGMRGL-_OcS3LCBYp0XJqHwAW9Q" alt="certificate">
                <?php foreach ($anketa as $value): ?>
                    <h2><?php print $value; ?></h2>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </body>
</html>
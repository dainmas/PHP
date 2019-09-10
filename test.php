<?php
date_default_timezone_set('Europe/Vilnius');
//print date('l H:i:s');
print date('Y-m-d', strtotime('-1 year'));
?>
<html>
    <head>
        <title>Aš, <?php print date('l'). 'ir PHP';?></title>
    </head>
    <body>
        <h1>Dainora - HTML  <?php print 'ir PHP';?> asė jau nuo <?php print date('Y-M-d') . ' metų';?></h1>
        <p>Viskas prasidėjo  <?php print date('m') . ' mėnesio,' . date('d'). ' dieną!';?></p>
    </body>
</html>
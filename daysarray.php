<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body></body>
    <?php
        $days[] = array(
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday",
            "Sunday"
        );
        
        echo "<p>The days of the week are: " . implode(", ", $days[0]) . ".</p>";

        $french_days = array(
        "Dimanche",
         "Lunde",
         "Mardi",
         "Mercredi",
         "Jeudi",
         "Vendredi",
         "Samedi");

        
         echo "The days in French are: $french_days[0], $french_days[1], $french_days[2], $french_days[3], $french_days[4], $french_days[5], $french_days[6].";


        ?>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Lien vers Tabulator -->
    <link href="https://unpkg.com/tabulator-tables@5.5.0/dist/css/tabulator.min.css" rel="stylesheet">
    <script src="https://unpkg.com/tabulator-tables@5.5.0/dist/js/tabulator.min.js"></script>

    <!-- Liens vers les fichiers JS et CSS-->
    <script src="js/app.js" defer></script>
    <link rel="stylesheet" href="css/style.css">

    <title>Document</title>
</head>

<body>
    <?php
    $jsonString1 = file_get_contents('json/221410_A.json');
    $jsonString2 = file_get_contents('json/221410_B.json');
    $jsonString3 = file_get_contents('json/244138_A.json');
    $jsonString4 = file_get_contents('json/244138_B.json');

    $data1 = json_decode($jsonString1, true);
    $data2 = json_decode($jsonString2, true);
    $data3 = json_decode($jsonString3, true);
    $data4 = json_decode($jsonString4, true);

    $targetName = "ssp_25Myr_z008.dat"; // Le nom recherché
    ?>

    <section id="tab">
        <div id="firstab">
            <?php
            foreach ($data1 as $data) {
                $continuumName = $data["ContinuumName"];

                if ($continuumName == $targetName) {
                    // Extraction de toutes les données pour le nom correspondant
                    foreach ($data as $key => $value) {
                        echo $key . ": " . $value . "<br>";
                    }
                    break;
                }
            }
            ?>
        </div>
        <div id="secondtab">
            <?php
            foreach ($data2 as $data) {
                $continuumName = $data["ContinuumName"];

                if ($continuumName == $targetName) {
                    // Extraction de toutes les données pour le nom correspondant
                    foreach ($data as $key => $value) {
                        echo $key . ": " . $value . "<br>";
                    }
                    break;
                }
            }
            ?>
        </div>
    </section>


</body>

</html>
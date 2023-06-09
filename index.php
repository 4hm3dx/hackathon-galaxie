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
        <div id="firsttab">
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

    <section id="tab2">
        <div id="thirsttab">
            <?php
            foreach ($data3 as $data) {
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
        <div id="fourthtab">
            <?php
            foreach ($data4 as $data) {
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

    <section id="tab">
        <div id="firsttab">
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

    <section id="tab">
        <div id="firsttab">
            <?php
            foreach ($data1 as $tableau) {
                foreach ($tableau as $key => $value) {
                    echo $key . ": " . $value . "<br>";
                }
                echo "<br>"; // Ajouter une ligne vide entre chaque tableau
            }
            ?>
        </div>
        <div id="secondtab">
            <?php
            foreach ($data2 as $tableau) {
                foreach ($tableau as $key => $value) {
                    echo $key . ": " . $value . "<br>";
                }
                echo "<br>"; // Ajouter une ligne vide entre chaque tableau
            }
            ?>

            <?php
            function calculerDifferences($data1, $data2, $data3, $data4, $seuil)
            {
                $newdata12 = array();
                $newdata34 = array();

                foreach ($data1 as $tableau1) {
                    foreach ($data2 as $tableau2) {
                        if ($tableau1["Redshift"] == $tableau2["Redshift"]) {
                            // Vérifier si les données ne sont pas NULL
                            if ($tableau1["Valeur1"] !== NULL && $tableau2["Valeur2"] !== NULL) {
                                $diff_relative = ($tableau1["Valeur1"] - $tableau2["Valeur2"]) / $tableau2["Valeur2"];
                                $diff_absolue = abs($tableau1["Valeur1"] - $tableau2["Valeur2"]) / $tableau2["Valeur2"];

                                if ($diff_absolue > $seuil) {
                                    // La différence absolue dépasse le seuil, faire quelque chose
                                }

                                // Ajouter les données calculées au tableau $newdata12
                                $newdata12[] = array(
                                    "Valeur1" => $tableau1["Valeur1"],
                                    "Valeur2" => $tableau2["Valeur2"],
                                    "DifferenceRelative" => $diff_relative,
                                    "DifferenceAbsolue" => $diff_absolue
                                );
                            }
                        }
                    }
                }

                foreach ($data3 as $tableau3) {
                    foreach ($data4 as $tableau4) {
                        if ($tableau3["Redshift"] == $tableau4["Redshift"]) {
                            // Vérifier si les données ne sont pas NULL
                            if ($tableau3["Valeur1"] !== NULL && $tableau4["Valeur2"] !== NULL) {
                                $diff_relative = ($tableau3["Valeur1"] - $tableau4["Valeur2"]) / $tableau4["Valeur2"];
                                $diff_absolue = abs($tableau3["Valeur1"] - $tableau4["Valeur2"]) / $tableau4["Valeur2"];

                                if ($diff_absolue > $seuil) {
                                    // La différence absolue dépasse le seuil, faire quelque chose
                                }

                                // Ajouter les données calculées au tableau $newdata34
                                $newdata34[] = array(
                                    "Valeur1" => $tableau3["Valeur1"],
                                    "Valeur2" => $tableau4["Valeur2"],
                                    "DifferenceRelative" => $diff_relative,
                                    "DifferenceAbsolue" => $diff_absolue
                                );
                            }
                        }
                    }
                }

                return array($newdata12, $newdata34);
            }

            // Exemple d'utilisation de la fonction
            $data1 = json_decode($jsonString1, true);
            $data2 = json_decode($jsonString2, true);
            $data3 = json_decode($jsonString3, true);
            $data4 = json_decode($jsonString4, true);
            $seuil = 0.1;

            list($newdata12, $newdata34) = calculerDifferences($data1, $data2, $data3, $data4, $seuil);

            // Afficher les nouveaux tableaux
            echo "<pre>";
            print_r($newdata12);
            echo "</pre>";

            echo "<pre>";
            print_r($newdata34);
            echo "</pre>";

            echo $tableau2["Redshift"];
            ?>
        </div>
    </section>
</body>

</html>
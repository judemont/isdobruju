<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isdobruju</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if(isset($_GET["questionId"])){
        $questionId = $_GET["questionId"];
    }else{
        $questionId = 0;
    }

    $personages = [
        ["name" => "Jean-François", "description" => "Un riche marchant, qui a fait fortune dans la vente de table triangulaires."], 
        ["name" => "Arnhold", "description" => "Un vielle homme sympathique de 67 ans, qui aime raconter ça vie a tout le monde."],
        ["name" => "Alexia", "description" => "Une peintre, mère de 6 enfants. Malheureusement personnes n'aime ses tableaux même pas ses enfants."]];
    $persoId = $_GET["perso"];
    $persoName = $personages[$persoId]["name"];

    echo '<form action="index.php" method="GET">';
    switch ($questionId) {
        case "0":
            echo '
            <fieldset>
                <legend>Choisi un personage :</legend>
            ';
            for ($i=0; $i < count($personages); $i++) { 
                $persoName = $personages[$i]['name'];
                $persoDescription = $personages[$i]['description'];
                echo "
                <div>
                    <input checked type='radio' id='$i' name='perso' value='$i' />
                    <label for='$i'>$persoName - $persoDescription</label>
                </div>";
            }
            echo "
            <input type='hidden' name='questionId' value='1'/>
            <input type='submit' value='continuer...'>
            </fieldset>";
            break;
        case "1":
            echo "
            <h2>Salut $persoName !</h2>
            <p>En ouvrant ton garage tu y découvre une machine a voyager dans le temps...</p>
            <img src='images/timeMachine.png' width='300'/>
            <fieldset>
                <legend>Que fait tu ?</legend>
                    <div>
                        <input checked type='radio' id='1' name='questionId' value='1.1' />
                        <label for='1'>Je vais à l'âge de pierre</label>
                    </div>
                    <div>
                        <input checked type='radio' id='2' name='questionId' value='1.2' />
                        <label for='2'>Je vais au moyenne âge</label>
                    </div>
                    <div>
                        <input checked type='radio' id='3' name='questionId' value='1.3' />
                        <label for='3'>Je n'utilise pas la machine, et je vais manger</label>
                    </div>
            </fieldset>
            <input type='submit' value='continuer...'>";
            break;
        default:
            # code...
            break;
    }

    echo "
        </form>";
    ?>
</body>
</html>

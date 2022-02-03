<?php
session_start();
$fichier = "label.csv";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tests Abey</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wdth@90&display=swap" rel="stylesheet">
    <link href='style.css' rel="stylesheet">
    <script src="PapaParse"></script>


<script type="text/javascript">
    //Voir parseur CSV papaparse pour JS, p-ê + pratique que PHP ?
    
    // p-ê afficher la 1ère image direct, la stocker dans une var qu'on utilisera dans les fonctions et qu'on incrémentera en focntion ?
    //S'il y a plus de data dans le csv on revient à la 1ère l'image? 
    function changeImageOui(){ //change image mais pas dossier ou est l'image

    }

    function changeImageNon(){ //change image ET dossier ou est l'image

    }

</script>
</head>
<body>
    <h1 class='centered'>Site des abeilles</h1>
    <div class='okok oui'>
        <p class="centered">Est-ce que ceci est un &lsaquo;animal&rsaquo;</p>
        <?php
        $row = 1;
        if (($handle = fopen($fichier, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                if($data[0]!= "Label;Images"){
                    $ligne = explode(";",$data[0]);
                    ?>
                    <img src="<?php echo $ligne[1]?>" height="200px" width="300px" class="centered"><?php
                }
            }
            fclose($handle);
        }
        ?>
        
        <div style="width: 90%; overflow: hidden; margin-bottom: 3em; height: 100px;" class="oui">
            <div class="1" style="width: 45%; float: left;"> 
                <button>&lsaquo;</button>
            </div>
            <div class="2" style="width:50%; margin-left: 40%;"> 
                <button onClick="changeImageOui()">oui</button> <!-- button onClick, change image mais pas dossier ou est l'image -->
                <button onClick="changeImageNon()">non</button> <!-- button onClick, change image ET dossier ou est l'image -->
                <div style="float: right;">
                    <button>&rsaquo;</button>
                </div>
            </div>
       </div>
    </div>

</body>
</html>
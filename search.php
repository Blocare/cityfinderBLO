<!DOCTYPE html>
<html>

<style>

</style>

    <body>



    <?php

        $image1 = "";
        $image2 = "";
        $image3 = "";

        //$redFaction = array("ostican","rovalt","pravend","ocs hall","galend","jaculan","sargot","charas","ocshall","praven","ostcan","orcshall");
        $redFactionNorth = array("ostican","rovalt","ocshall","praven","pravend","ocs hall","orcshall","pravne","ostcan","rovat","rovlt");
        $redFactionSouth = array("galend","jaculan","sargot","charas","chara","galnd","jaclan","sagot","char");

        $greenFaction = array("car banseth","dunglanys","seonon","marunath","pen cannoc","carbanseth","pencannoc","senon","dunglany");

        $velvetFaction = array("lageta","rhotae","jalamrys","amitatys","ortysia","zeonica","jalmary","laget","rhota");

        $purpleFaction = array("epicroea","epicro","diathma","argoron","amper","amperla","saneopa","myzea");

        $cyanFaction = array("baltakhand","makeb","chaikand","ortongard","akkalat","odokh");

        $empireFaction = array("lycan","phycaon","syronea","onira","danustica","vostrum","poros","lycara");

        $yellowFaction = array("quyaz","sanala","qasira","askar","iyakis","hubyar","razih","husn fulq","hush fulq","husnfulq");
        $yellowFactionEast = array("husn fulq","razih","hubyar","qasira","iyakis");
        $yellowFactionWest = array("quyaz","sanala","askar");

        $blueFaction = array("revyl","reyvl","varcheg","omor","balgard","varnovapol","tyal","sibir");
        $blueFactionEast = array("balgard","omor","varnovapol","sibir","tyal");
        $blueFactionWest = array("revyl","reyvl","varcheg");

        if(isset($_POST['submit'])) {
            $cityName = $_POST['cityName'];
            $cityName = strtolower($cityName);

            if(in_array($cityName,$redFactionNorth)) {
                $image2 = "imgs/redFaction_north.jpg";
                $image1 = "imgs/redFaction.jpg";
            } else if(in_array($cityName,$redFactionSouth)) {
                $image2 = "imgs/redFaction_south.jpg";
                $image1 = "imgs/redFaction.jpg";
            } else if(in_array($cityName,$greenFaction)) {
                $image2 = "imgs/greenFaction.jpg";
                $image1 = "imgs/greenFactionZoomedOut.jpg";
            } else if(in_array($cityName,$velvetFaction)) {
                $image2 = "imgs/velvetFaction.jpg";
                $image1 = "imgs/velvetFactionZO.jpg";
            } else if(in_array($cityName,$purpleFaction)) {
                $image2 = "imgs/purpleFaction.jpg";
                $image1 = "imgs/purpleFactionZO.jpg";
            } else if(in_array($cityName,$cyanFaction)) {
                $image2 = "imgs/cyanFaction.jpg";
                $image1 = "imgs/cyanFactionZO.jpg";
            } else if(in_array($cityName,$empireFaction)) {
                $image2 = "imgs/empireFaction.jpg";
                $image1 = "imgs/empireFactionZO.jpg";
            } else if(in_array($cityName,$blueFactionEast)) {
                $image2 = "imgs/blueFaction_east.jpg";
                $image1 = "imgs/blueFactionZO.jpg";
            } else if(in_array($cityName,$blueFactionWest)) {
                $image2 = "imgs/blueFaction_west.jpg";
                $image1 = "imgs/blueFactionZO.jpg";
            } else if(in_array($cityName,$yellowFactionEast)) {
                $image2 = "imgs/yellowFaction_east.jpg";
                $image1 = "imgs/yellowFactionZO.jpg";
            } else if(in_array($cityName,$yellowFactionWest)) {
                $image2 = "imgs/yellowFaction_west.jpg";
                $image1 = "imgs/yellowFactionZO.jpg";
            } else {
                echo "Failure to find that location!, did you make a typo? <br />";
                echo "You entered input: ".$cityName;
            }

        }
    ?>

    <img src="<?php echo $image1; ?>"/>
    <img src="<?php echo $image2; ?>"/>

    <h1>Reference map!</h1>
    <img src="Bez_tytuu.png" alt="bannerlordMapReference">
    
    </body>
</html>

<!--else if(in_array($cityName,)) {
                
            }
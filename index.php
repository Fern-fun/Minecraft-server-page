<?php 
require_once "config.php"; 

$statz_blocks_broken = 0;
$statz_blocks_placed = 0;
$statz_xp_gained = 0;
$statz_kills_mobs = 0;
$statz_kills_players = 0;
$statz_items_crafted = 0;
$statz_deaths = 0;
$statz_items_picked_up = 0;
$statz_villager_trades = 0;

//blocks_broken
$sql = "SELECT * FROM `statz_blocks_broken` WHERE 1";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        $statz_blocks_broken+= $row['value'];
    }
}
//blocks_placed
$sql = "SELECT * FROM `statz_blocks_placed` WHERE 1"; 

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        $statz_blocks_placed+= $row['value'];
    }
}
//xp_gained
$sql = "SELECT `value` FROM `statz_xp_gained` WHERE 1"; 

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        $statz_xp_gained += $row['value'];
    }
}
// kills_mobs
$sql = "SELECT * FROM `statz_kills_mobs` WHERE 1"; 

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        $statz_kills_mobs += $row['value'];
    }
}
//kills_players
$sql = "SELECT * FROM `statz_kills_players` WHERE 1"; 

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        $statz_kills_players += 1;
    }
}
//items_crafted
$sql = "SELECT * FROM `statz_items_crafted` WHERE 1"; 

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        $statz_items_crafted += $row['value'];
    }
}
//deaths
$sql = "SELECT * FROM `statz_deaths` WHERE 1"; 

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        $statz_deaths += 1;
    }
}
//items_picked_up
$sql = "SELECT * FROM `statz_items_picked_up` WHERE 1"; 

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        $statz_items_picked_up += $row['value'];
    }
}
//statz_villager_trades
$sql = "SELECT * FROM `statz_villager_trades` WHERE 1"; 

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        $statz_villager_trades += $row['value'];
    }
}


//server status
$status = json_decode(file_get_contents('https://api.mcsrvstat.us/2/mc.fern.fun'));

if($status->debug->ping == "true"){
    $onLine = "Online";
}else{
    $onLine = "Offline";
}
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" media="(min-width: 601px)">
    <link rel="stylesheet" href="css/mobile.css" media="(max-width: 600px)">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/app.js"></script>
    <title>Fern.fun Minecraft</title>
</head>

<body>
    <nav class="navigation">
    <button class="hamburger">
            <div class="line0" id="line1"></div>
            <div class="line0" id="line2"></div>
            <div class="line0" id="line3"></div>
        </button>
        <ul>
            <li><a href="#Hero" class="active">Home<div class="line"></div></a></li>
            <li><a href="#regulamin">Regulamin<div class="line"></div></a></li>
            <li><a href="#statystyki">Statystyki<div class="line"></div></a></li>
            <li><a href="#mapa">Mapa serwera<div class="line"></div></a></li>
            <li><a href="https://www.sklepmc.pl/shop/xcnzAp2J/server/1356" target="_blank">Sklep<div class="line"></div></a></li>
        </ul>
    </nav>
    <section class="Hero parallax" id="Hero">
        <div class="Hero_header">
            <h2>Witaj na oficjalnej stronie serwera</h2>
            <h1 id="header">Fern.fun<sub id="sub"><?php echo $onLine; ?></sub></h1>
            <h2>Zapraszamy do wspólnej gry!</h2>
        </div>
    </section>
    <!-- <section class="information">
        <h1>Podstawowe infromacje o naszym serwerze:</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum.
            Why do we use it?

            It is a long established fact that a reader will be distracted by the readable content of a page when
            looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
            letters, as opposed to using 'Content here, content here', making it look like readable English. Many
            desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
            search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved
            over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

            Where does it come from?

            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
            Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at
            Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem
            Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable
            source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
            of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular
            during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in
            section 1.10.32.

            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections
            1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact
            original form, accompanied by English versions from the 1914 translation by H. Rackham.
        </p>
    </section> -->

    <section class="regulamin" id="regulamin">
        <h1>Regulamin:</h1>
        <ol>
            <li>Każde wykroczenie będzie karane za pomocą upomnienia lub bana.</li>
            <li>Zakaz wulgarnych nicków.</li>
            <li>Zakaz wysyłania treści niezgodnych z prawem.</li>
            <li>Szanuj czas innych, nie niszcz cudzych budowli.</li>
            <li>Administracja ma prawo zmienić regulamin w przyszłośći.</li>
            <li>Administracja ma zawsze rację.</li>
            <li>Zakaz korzystania z wszelkiego rodzaju oprogramowania wspomagającego.</li>
            <li>Zakaz budowania farm opierających się na zasadzie 0 tick.</li>
        </ol>
    </section>

    <section class="statystyki" id="statystyki">
        <h1>Statystyki globalne:</h1>
        <div class="data">
            <ol>
            <?php 
                echo "<li>Zniszczone bloki: ".$statz_blocks_broken."</li>";
                echo "<li>Postawione bloki: ".$statz_blocks_placed."</li>";
                echo "<li>Zebrane xp: ".$statz_xp_gained."</li>";
                echo "<li>Zabite moby: ".$statz_kills_mobs."</li>";
                echo "<li>Zabici gracze: ".$statz_kills_players."</li>";
                echo "<li>Śmierci graczy: ".$statz_deaths."</li>";
                echo "<li>Stworzone przedmioty: ".$statz_items_crafted."</li>";
                echo "<li>Podniesione przedmioty: ".$statz_items_picked_up."</li>";  
                echo "<li>Wymiany z wieśniakami: ".$statz_villager_trades."</li>";            
            ?></ol>
        </div>
    </section>

    <section class="mapa" id="mapa">
        <h1>Mapa:</h1>
        <iframe src="http://51.83.214.49/mapa" frameborder="0"></iframe>
    </section>

    <footer>
        <center>&copy;Fern.fun</center>
    </footer>
</body>

</html>
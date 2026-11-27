
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sportdle</title>
    <link rel="stylesheet" href="style.css">
    <?php
        include('game.php');
    ?>
</head>
<body>

    <header>
        <button>☰</button>
        <h1>Sportdle</h1>
        <button>⚙</button>
    </header>

    <main>
        <h2>Bienvenue sur Sportdle</h2>
        <p>Trouve le mot de 6 lettres en 6 tentatives.</p>
        <p>Le mot mystère est : <?php echo $motMystere; ?></p>
        <div id="grille">
            <div class="case"></div>
            <div class="case"></div>
            <div class="case"></div>
            <div class="case"></div>
            <div class="case"></div>
            <div class="case"></div>

            <div class="case"></div>
            <div class="case"></div>
            <div class="case"></div>
            <div class="case"></div>
            <div class="case"></div>
            <div class="case"></div>

            <div class="case"></div>
            <div class="case"></div>
            <div class="case"></div>
            <div class="case"></div>
            <div class="case"></div>
            <div class="case"></div>

            <div class="case"></div>
            <div class="case"></div>
            <div class="case"></div>
            <div class="case"></div>
            <div class="case"></div>
            <div class="case"></div>

            <div class="case"></div>
            <div class="case"></div>
            <div class="case"></div>
            <div class="case"></div>
            <div class="case"></div>
            <div class="case"></div>

            <div class="case"></div>
            <div class="case"></div>
            <div class="case"></div>
            <div class="case"></div>
            <div class="case"></div>
            <div class="case"></div>
        </div>

        <div class="clavier">
            <button>A</button>
            <button>Z</button>
            <button>E</button>
            <button>R</button>
            <button>T</button>
            <button>Y</button>
            <button>U</button>
            <button>I</button>
            <button>O</button>
            <button>P</button>

            <button>Q</button>
            <button>S</button>
            <button>D</button>
            <button>F</button>
            <button>G</button>
            <button>H</button>
            <button>J</button>
            <button>K</button>
            <button>L</button>
            <button>M</button>

            <button class="special">Entrée</button>
            <button>W</button>
            <button>X</button>
            <button>C</button>
            <button>V</button>
            <button>B</button>
            <button>N</button>
            <button class="special">⌫</button>
        </div>

    </main>
    <script src="script.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Document</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style\font.css">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

            <main>
                <section id="presentation">
                </section>
                <?php
                include 'PHP/presentation.php'
                ?>   
                <section id="grille">
                <?php
                include 'PHP/tableau-categorie.php'
                ?>   
                </section>
            </main>
        <footer>
         <?php
         include 'PHP/footer.php'
         ?>
        </footer>
    </body>
</html>
<?php
require 'controller.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/book.css">
    <title>Checkpoint PHP 1</title>
</head>

<body>

    <?php include 'header.php'; ?>

    <main class="container">

        <section class="desktop">
            <div class="whisky-glass"> <img src="image/whisky.png" alt="a whisky glass" class="whisky" />

                <img src="image/empty_whisky.png" alt="an empty whisky glass" class="empty-whisky" />
            </div>
            <div class="pages">
                <div class="page leftpage">
                    Add a bribe
                    <form action="" method="post">
                        <input type="text" name="name" placeholder="name" maxlength="255">
                        <input type="text" name="payment" placeholder="payment" maxlength="255">
                        <button>Add bribe</button>
                    </form>
                </div>

                <div class="page rightpage">

                    <ul>
                        <?php foreach ($bribes as $bribe) : ?>
                            <li>
                                <?= $bribe['name']; ?>
                                <?= $bribe['payment']; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                </div>
            </div>
            <div class="pen">
                <img src="image/inkpen.png" alt="an ink pen" class="inkpen" />
            </div>
        </section>
    </main>
</body>

</html>
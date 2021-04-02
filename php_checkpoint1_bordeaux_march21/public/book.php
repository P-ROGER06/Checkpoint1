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
                   <h2> Add a bribe </h2>
                    <form action="" method="post">
                        Name<br>
                        <input type="text" name="name" placeholder="name" maxlength="100" required pattern="^[A-Za-z '-]+$"><br>
                        Payment<br>
                        <input type="number" name="payment" placeholder="payment" maxlength="100" min="1"><br>
                        <button>Pay!</button>
                    </form>
                </div>

                <div class="page rightpage">
                    <table class='bribes'>

                        <?php foreach ($bribes as $bribe) : ?>
                            <tr>
                                <th> <?= $bribe['name']; ?> </th>
                                <th> <?= $bribe['payment']. " $"; ?> </th>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                    <tfoot>
                        <hr class= "bottom-line" >
                        <?php echo "Total = " . array_sum($payments) . " $"; ?>
                    </tfoot>
                </div>
            </div>
            <div class="pen">
                <img src="image/inkpen.png" alt="an ink pen" class="inkpen" />
            </div>
        </section>
    </main>
</body>

</html>
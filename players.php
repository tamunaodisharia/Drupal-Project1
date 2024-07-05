<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Players</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .container {
            display: flex;
            flex: 1;
        }
        main {
            flex: 1;
            padding: 2rem;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
    </style>
</head>
<body>

<?php require 'components/header.php' ?>
<?php require 'common/data.php' ?>

<div class="container">
    <?php require 'components/sidebar.php' ?>
    <main>
        <ul>
            <?php $players = get_players(); ?>

            <?php foreach ($players as $name => $player): ?>
                <li>
                    <h3><?php echo $name ?></h3>
                    <img src="<?php echo $player['img'] ?>" alt="<?php echo $name ?>" style="width: 100px;">
                    <p><strong>Position</strong>: <?php echo $player['position'] ?></p>
                    <p><strong>Number</strong>: <?php echo $player['number'] ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>
</div>

<?php require 'components/footer.php' ?>
</body>
</html>
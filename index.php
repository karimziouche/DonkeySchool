<?php 
require_once '_connec.php';

$pdo = new \PDO(DSN, USER, PASS);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    $query = "INSERT INTO friend (firstname, lastname)
              VALUES (:firstname, :lastname)";

    $statement = $pdo->prepare($query);

    $statement->execute ([
        'firstname' => $firstname,
        'lastname' => $lastname
    ]);
}

$query = "SELECT * FROM friend";
$statement = $pdo->query($query);
$friends = $statement->fetchAll();
?>

<html>
<body>

<h1>Mes amis</h1>
<ul>
    <?php foreach ($friends as $friend): ?>
        <li>
            <?= $friend['firstname'] ?> <?=  $friend['lastname'] ?>
        </li>
    <?php endforeach; ?>
</ul>

    <form method="POST">
        <label for="firstname">Prénom :</label>
        <input type="text" id="firstname" name="firstname" required>

        <label for="lastname">Nom : </label>
        <input type="text" id="lastname" name="lastname" required>

        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
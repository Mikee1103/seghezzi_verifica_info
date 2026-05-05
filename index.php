<?php
include "accesso.php";

if (isset($_POST['aggiungi_iscritto'])) {
    $id_membro = $_POST['membro'];
    $id_corso = $_POST['corso'];

    $conn->query("INSERT INTO iscrizioni_corsi (membro, corso) VALUES ('$id_membro', $id_corso)");
}

if (isset($_GET['visualizzacorso'])) {
    $id = $_GET['visualizzacorso'];

    $conn->query("SELECT iscrizioni_corsi HAVING count($id_membro>5");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gym</title>
</head>
<body>

<h2>aggiungi_iscritto</h2>
<form method="POST">
    id_membro: <input type="text" name="membro" required>

    id_corso:
    <select name="corso">
        <?php
        $id_membro = $conn->query("SELECT * FROM membri");
        while ($a = $membri->fetch_assoc()) {
            echo "<option value='{$a['id']}'>{$a['id_membro']}</option>";
        }
        ?>
    </select>

    <button name="aggiungi_iscritto">Aggiungi</button>
</form>
</body>
</html>


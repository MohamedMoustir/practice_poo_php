<?php
require_once './db/database.php';
require_once 'person.php';

$systeme = new database();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'];
    $doctor = $_POST['doctor'];
    $role = $_POST['role'];

    $users = new users();
    $users->setNom($nom, $doctor, $role);
    echo $users->getNom();
}

$query = $systeme->link->query('SELECT * FROM utilisateurs WHERE type_utilisateur = "Médecin"');

$Médecins = [];
while ($row = $query->fetch_assoc()) {
    $Médecins[] = $row;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prendre un Rendez-vous</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6">

    <h2 class="text-2xl font-bold text-center mb-6">Prendre un Rendez-vous avec le Médecin</h2>

    <form id="appointmentForm" class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg" method="POST" action="">
        <label for="nom" class="block text-lg font-medium text-gray-700">Nom:</label>
        <input type="text" name="nom" required class="w-full p-2 mt-2 border border-gray-300 rounded-md mb-4">

        <label for="doctor" class="block text-lg font-medium text-gray-700">Prénom:</label>
        <input type="text" id="doctor" name="doctor" required class="w-full p-2 mt-2 border border-gray-300 rounded-md mb-4">

        <label for="role" class="block text-lg font-medium text-gray-700">Médecin:</label>
        <select name="role" id="role" required class="w-full p-2 mt-2 border border-gray-300 rounded-md mb-4">
            <?php foreach ($Médecins as $Médecin): ?>
                <option value="<?= htmlspecialchars($Médecin['nom']) ?>"><?= htmlspecialchars($Médecin['nom']) ?></option>
            <?php endforeach; ?>
        </select>

        <button type="submit" class="w-full p-3 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition duration-300">
            Prendre le rendez-vous
        </button>
    </form>

    <div id="confirmationMessage" class="mt-6 text-center"></div>

</body>

</html>

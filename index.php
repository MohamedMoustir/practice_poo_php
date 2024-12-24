
<?php
require_once './db/database.php';
require_once 'person.php';
$systeme = new database();
$users = new users();
$users->setNom('mohamed','moustir','M');
$users->getNom();
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
    
    <form id="appointmentForm" class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg" method ="POST" action="">
    <select id="id_patient" name="id_patient"  class="w-full p-2 mt-2 border border-gray-300 rounded-md mb-4">
            <?php foreach($patient as $user): ?>
                <option value="<?= $user->nom ?>"><?= $user->nom ?></option>
            <?php endforeach; ?>
        </select>
        <label for="doctor" class="block text-lg font-medium text-gray-700">Choisir le médecin:</label>
        <select id="doctor" name="doctor" required class="w-full p-2 mt-2 border border-gray-300 rounded-md mb-4">
            <?php foreach($Médecin as $user): ?>
                <option value="<?= $user->nom ?>"><?= $user->nom ?></option>
            <?php endforeach; ?>
        </select>

        <label for="appointmentDate" class="block text-lg font-medium text-gray-700">Date du rendez-vous:</label>
        <input type="date" id="appointmentDate" name="appointmentDate" required class="w-full p-2 mt-2 border border-gray-300 rounded-md mb-4">
        
        <label for="appointmentTime" class="block text-lg font-medium text-gray-700">Heure du rendez-vous:</label>
        <input type="time" id="appointmentTime" name="appointmentTime" required class="w-full p-2 mt-2 border border-gray-300 rounded-md mb-4">

        <button type="submit" class="w-full p-3 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition duration-300">Prendre le rendez-vous</button>
    </form>

    <div id="confirmationMessage" class="mt-6 text-center"></div>

   


</body>
</html>



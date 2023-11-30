<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site en Construction</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 100px;
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
        }

        /* Ajoutez d'autres styles CSS au besoin */

        .todolist {
            display: none;
            margin-top: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
        }

        .task-text {
            flex-grow: 1;
        }

        .task-buttons {
            margin-left: 10px;
        }

        /* Ajout de styles pour réduire la taille de l'image */
        #toggleButton {
            width: 100px; /* Ajustez la largeur selon vos besoins */
            height: auto; /* Garantit que la hauteur est ajustée proportionnellement à la largeur */
            transition: transform 0.3s ease-in-out; /* Ajout de la transition pour le flottement */
        }

        #toggleButton:hover {
            transform: scale(1.1); /* Flottement lorsque la souris survole l'image */
        }
    </style>
</head>
<body>
    <h1>Site en Construction depuis 10000 ans !</h1>
    <p>Nous travaillons dur pour améliorer votre expérience. Revenez bientôt !</p>
    <img id="toggleButton" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/31abb4cb-6088-4e93-85bc-744885028b01/dd9h88u-d384c96c-b1e3-44d7-b639-88946a92cb2e.png/v1/fill/w_998,h_801/outer_wilds_logo_by_justagirlcalledlex_dd9h88u-pre.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9ODgwIiwicGF0aCI6IlwvZlwvMzFhYmI0Y2ItNjA4OC00ZTkzLTg1YmMtNzQ4ODg1MDI4YjAxXC9kZDloODh1LWQzODRjOTZjLWIxZTMtNDRkNy1iNjM5LTg4OTQ2YTkyY2IyZS5wbmciLCJ3aWR0aCI6Ijw9MTA5NyJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.uudThtKhfgqxRpUCpUf-pemKntRfmJUuFo5Y5HQbfNU" alt="Image Outer Wilds">

    <div class="todolist" id="todolist">
        <h2>To-Do List</h2>
        <ul id="taskList">
            <!-- Tasks will be dynamically added here -->
        </ul>
        <input type="text" id="newTask" placeholder="Ajouter une nouvelle tâche">
        <button onclick="addTask()">Ajouter</button>
    </div>

    <script>
        function addTask() {
            var taskText = document.getElementById('newTask').value;
            if (taskText.trim() !== '') {
                var taskList = document.getElementById('taskList');
                var li = document.createElement('li');
                li.innerHTML = '<span class="task-text">' + taskText + '</span>' +
                                '<span class="task-buttons">' +
                                '<button onclick="completeTask(this)">Terminé</button>' +
                                '<button onclick="removeTask(this)">Supprimer</button>' +
                                '</span>';
                taskList.appendChild(li);
                document.getElementById('newTask').value = '';
            }
        }

        function completeTask(button) {
            var li = button.parentNode.parentNode;
            li.classList.toggle('completed');
        }

        function removeTask(button) {
            var li = button.parentNode.parentNode;
            li.parentNode.removeChild(li);
        }

        document.getElementById('toggleButton').addEventListener('click', function() {
            var todolist = document.getElementById('todolist');
            todolist.style.display = (todolist.style.display === 'none' || todolist.style.display === '') ? 'block' : 'none';
        });
    </script>
</body>
</html>

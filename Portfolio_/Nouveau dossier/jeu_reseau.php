<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu de Puzzle Réseau</title>
    <link rel="stylesheet" href="stylesjeu.css">
</head>
<body>
    <div id="game-container">
        <h1>Jeu de Puzzle Réseau</h1>
        <div id="stage">
            <img id="level-image" src="" alt="Niveau Image">
        </div>
        <div id="output"></div>
        <div id="options">
            <label for="reponse">Votre réponse :</label>
            <input type="text" id="reponse" placeholder="Entrez votre réponse">
            <button onclick="checkInput()">Vérifier</button>
        </div>
    </div>

    <script>
        // Tableau des niveaux
        const niveaux = [
            {
                prompt: "Quel est le câble utilisé pour connecter un ordinateur à une imprimante?",
                reponse: "USB",
                image: "usb.jpg"
            },
            {
                prompt: "Quel est le câble utilisé pour connecter un téléviseur à une console de jeu?",
                reponse: "HDMI",
                image: "hdmi.jpg"
            }
            // Ajoutez plus de niveaux si nécessaire
        ];

        let niveauActuel = 0;

        // Fonction pour afficher le niveau actuel
        function afficherNiveau() {
            const stageDiv = document.getElementById('stage');
            const niveau = niveaux[niveauActuel];
            stageDiv.innerHTML = `<p>${niveau.prompt}</p><img src="${niveau.image}" alt="Niveau Image">`;
        }

        // Fonction pour vérifier la réponse de l'utilisateur
        function checkInput() {
            const reponseUtilisateur = document.getElementById('reponse').value.toLowerCase();
            const niveau = niveaux[niveauActuel];
            const outputDiv = document.getElementById('output');

            if (reponseUtilisateur === niveau.reponse.toLowerCase()) {
                outputDiv.innerHTML = '<p>Correct!</p>';
                niveauActuel++;
                if (niveauActuel < niveaux.length) {
                    afficherNiveau();
                } else {
                    outputDiv.innerHTML += '<p>Félicitations! Vous avez complété tous les niveaux.</p>';
                }
            } else {
                outputDiv.innerHTML = '<p>Incorrect. Essayez encore.</p>';
            }
        }

        // Initialiser le jeu
        window.onload = function() {
            afficherNiveau();
        }
    </script>
</body>
</html>

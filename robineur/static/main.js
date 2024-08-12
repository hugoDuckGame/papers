function uploadImage() {
    var form = document.getElementById('uploadForm');
    var formData = new FormData(form); // Crée un objet FormData avec les données du formulaire

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'uploadImg.php', true); // Remplacez 'createArt.php' par le nom de votre script PHP

    xhr.onload = function () {
        if (xhr.status === 200) {
            document.getElementById('result').innerText = xhr.responseText;
            document.getElementById('hidName').value = xhr.responseText; // Affiche la réponse du serveur
        } else {
            document.getElementById('result').innerText = 'Échec de l\'upload. Erreur serveur.';
        }
    };

    xhr.send(formData); // Envoie les données du formulaire via AJAX
}
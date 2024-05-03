function validateForm() {
    var inputField = document.getElementById("input_field").value; // Récupérer la valeur du champ de texte
    if (inputField.trim() === "") { // Vérifier si le champ est vide après suppression des espaces blancs
        alert("Le champ est vide."); // Afficher un message d'erreur
        return false; // Empêcher l'envoi du formulaire
    }
    // Vous pouvez ajouter d'autres validations ici si nécessaire
    return true; // Autoriser l'envoi du formulaire si la validation réussit
}

var userInput = "<script>alert('XSS attack!');</script>";

// Fonction pour échapper les caractères spéciaux
function escapeHTML(text) {
    var map = {
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;',
        '"': '&quot;',
        "'": '&#039;'
    };
    return text.replace(/[&<>"']/g, function(m) { return map[m]; });
}
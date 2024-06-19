<!DOCTYPE html>
<html>
<head>
    <title>Formulaire d'envoi d'email</title>
</head>
<body>
    <h2>Envoyer un email</h2>
    <form action="{{ route('create') }}" method="post">
        @csrf
        <label for="email">Adresse email du destinataire:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="subject">Objet de l'email:</label><br>
        <input type="text" id="subject" name="subject" required><br>
        <label for="content">Contenu de l'email:</label><br>
        <textarea id="content" name="content" required></textarea><br><br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>

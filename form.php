<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form test</title>
</head>
<body>
    <form  method="post" action="thanks.php">
        <div>
            <label  for="prénom">Prénom :</label>
            <input  type="text"  id="prénom"  name="user_firstname" required>
            <span class="error">* <?= $errors['firstname'];?></span>
        </div>
        <div>
            <label  for="nom">Nom :</label>
            <input  type="text"  id="nom"  name="user_lastname" required>
            <span class="error">* <?= $errors['name'];?></span>
        </div>
        <div>
            <label  for="courriel">Courriel :</label>
            <input  type="email"  id="courriel"  name="user_email" required>
            <span class="error">* <?= $errors['mail'];?></span>
        </div>
        <div>
            <label  for="tel">Téléphone :</label>
            <input  type="tel"  id="tel"  name="user_phone_number" required>
            <span class="error">* <?= $errors['tel'];?></span>
        </div>
        <div>
            <label  for="sujet">Courriel :</label>
            <select id="sujet" name="mail_subject" required>
                <option value="I hate JS">I hate JS</option>
                <option value="JS is for Noobs">JS is for Noobs</option>
                <option value="How can I learn PHP ?">How can I learn PHP ?</option>
                <option value="PHP > JS = true">PHP > JS = true</option>
            </select>
            <span class="error">* <?= $errors['subject'];?></span>
        </div>
        <div>
            <label  for="message">Message :</label>
            <textarea  id="message"  name="user_message" required></textarea>
            <span class="error">* <?= $errors['message'];?></span>
        </div>
        <div  class="button">
            <button  type="submit">Envoyer votre message</button>
        </div>
    </form>
</body>
</html>
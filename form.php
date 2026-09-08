  <form  action="thanks.php" method="post">
    <div>
      <label for="name">Nom :</label>
      <input type="text"  id="name"  name="user_name">
    </div>
    <div>
      <label for="first_name">Prénom :</label>
      <input type="text" id="first_name" name="user_first_name">
    </div>
    <div>
      <label  for="email">Courriel :</label>
        <input  type="email"  id="email"  name="user_email">
    </div>
    <div>
        <label for="number">Télephone :</label>
          <input type="number" id="number" name="user_number">
    </div>
    <div>
        <label for="subject">Selectionner :</label>
        <select id="subject" name="user_subject">
            <option value="votre mot de passe oublié">Mot de passe oublié</option>
            <option value="problème de connexion">Problème de connexion</option>
            <option value="demande d'information">Demande d'information</option>
            <option value="problème technique">Problème technique</option>
            <option value="autre demande">Autre demande</option>
        </select>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
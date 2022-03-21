<form  action="thanks.php"  method="post">

<div>

  <label  for="nom">Nom :</label>

  <input  type="text"  id="nom"  name="user_lastname">

</div>

<div>

  <label  for="prénom">Prénom :</label>

  <input  type="text"  id="prénom"  name="user_firstname">

</div>

<div>

  <label  for="courriel">Courriel :</label>

    <input  type="email"  id="courriel"  name="user_email">

</div>

<div>

  <label  for="téléphone">Téléphone :</label>

    <input  type="number"  id="téléphone"  name="user_phone">

</div>

<div>

<label for="subject">Motif de contact :</label>

<select name="subject" id="subject">
  <option value="J'ai une question">J'ai une question</option>
  <option value="J'ai rencontré un problème technique">J'ai rencontré un problème technique</option>
  <option value="Je souhaite contacter le service client">Je souhaite contacter le service client</option>
  <option value="Autres">Autres</option>
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

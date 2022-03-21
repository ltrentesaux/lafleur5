<img src="Images/Divers/animrose.gif">
<h1>Société Lafleur</h1>
<p>
   6, rue des Primevères<br>
   53000 LAVAL<br>
   02 43 84 65 74
</p>
<a href="mailto: laleur@orange.fr"><img src="Images/Divers/email_papillon.gif"></a><br>
<form method="post" action="index.php?page=traitement">
   <table width="75%" border="5" align="center">
      <tr>
         <td>
            <label for="civilité">Civilité (*)</label>
         </td>
         <td>
            <select name="civilité" id="civilité">
               <option value="M">Monsieur</option>
               <option value="Mme">Madame</option>
            </select>
         </td>
      </tr>
      <tr>
         <td>
            <label for="nom">Nom (*)</label> 
         </td>
         <td>
            <input type="text" name="nom" id="nom" required>
         </td>
      </tr>
      <tr>
         <td>
            <label for="prénom">Prénom (*)</label> 
         </td>
         <td>
            <input type="text" name="prénom" id="prénom" required>
         </td>
      </tr>
      <tr>
         <td>
            Sexe (*) 
         </td>
         <td>
            <input type="radio" name="sexe" id="sexeM" value="Masculin" required>
            <label for="sexeM">M</label>
            <input type="radio" name="sexe" id="sexeF" value="Féminin" required>
            <label for="sexeF">F</label>
         </td>
      </tr>
      <tr>
         <td>
            Profession (*)
         </td>
         <td>
            <input type="checkbox" name="fleuriste" id="fleuriste">
            <label for="fleuriste">Fleuriste</label>
            <input type="checkbox" name="grossiste" id="grossiste">
            <label for="grossiste">Grossiste</label>
            <input type="checkbox" name="centrecommercial" id="centrecommercial">
            <label for="centrecommercial">Centre commercial</label>
            <input type="checkbox" name="autre" id="autre">
            <label for="autre">Autre</label>
         </td>
      </tr>
      <tr>
         <td>
            <label for="email">Email (*)</label> 
         </td>
         <td>
            <input type="text" name="email" id="email" required pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}" placeholder="mail@monmail">
         </td>
      </tr>
      <tr>
         <td>
            <label for="tel">Téléphone</label> 
         </td>
         <td>
            <input type="tel" name="tel" id="tel" pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" placeholder="00 00 00 00 00">
         </td>
      </tr>
      <tr>
         <td>
            <label for="demande">Demande (*)</label> 
         </td>
         <td>
            <textarea name="demande" id="demande" required></textarea>
         </td>
      </tr>
      <tr>
         <td colspan="2" align="center">
            Les champs marqués d'un * sont obligatoires
         </td>
      </tr>
      <tr>
         <td colspan="2" align="center">
            <input type="submit" value="Envoyer">
         </td>
      </tr>
   </table>
</form>
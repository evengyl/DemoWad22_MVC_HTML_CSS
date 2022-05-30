<h1>Contact</h1>


<form method="POST" action="">
        <label for="firstname">Prénom : </label>
        <input autocomplete required id="firstname" placeholder="Votre prénom" 
            name="firstName" type="text"><br>

      
        <label>Mot de passe : </label>
        <input required placeholder="ex : toto1234" type="password" name="password"><br>
        
        <br>
        <br>

        <label>Homme</label><input type="radio" value="H" name="gender">
        <label>Femme</label><input type="radio" value="F" name="gender">
        <label>N/C</label><input type="radio" value="NC" name="gender">

        <br>
        <br>

        <label>PS</label><input type="checkbox" value="Playstation" name="console">
        <label>Switch</label><input type="checkbox" value="Nintendo Switch" name="console">
        <label>PC</label><input type="checkbox" value="Personal computer" name="console">
        
        <br>
        <br>

        <label for="favB">Browser : </label>
        <input list="browsers" id="favB" name="favBrowser" type="text"><br>

        <datalist id="browsers">
            <option value="Internet Explorer">
            <option value="Firefox">
            <option value="Google Chrome">
            <option value="Opera">
            <option value="Safari">
        </datalist>

        <br>
        <br>

        <select name="age">
            <option disabled></option>
            <option value="<12">< 12 ans</option>
            <option value="1218">> 12 ans && < 18 ans</option>
            <option value=">18">> 18 ans</option>
        </select>

        <br>
        <br>

        <select multiple="true" name="tech">
            <option disabled></option>
            <option value="HTML">HTML</option>
            <option value="CSS">CSS</option>
            <option value="Node">Node</option>
            <option value="Python">Python</option>
            <option value="PHP">PHP</option>
            <option value="C#">C#</option>
            <option value="Java">Java</option>
            <option value="JS">JS</option>
        </select>

        <br>
        <br>
        
        <input type="submit" value="Envoyer">
    </form>
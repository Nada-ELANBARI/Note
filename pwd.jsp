<%@ page pageEncoding="UTF-8" %>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Inscription</title>
        <link type="text/css" rel="stylesheet" href="form.css" />
    </head>
    <body>
        <form method="post" action="inscription" style="height: 200px; ">
            <fieldset>
                <legend>             Connexion :<br><br></legend>loging            <span class="requis">*</span>
                
                <input type="text" id="email" name="email" value="" size="20" maxlength="60"><br><br><br><br><br />password <span class="requis">*</span>
                
                <input type="password" id="motdepasse" name="motdepasse" value="" size="20" maxlength="20"><br><br />

                <input type="submit" value="Inscription" class="sansLabel" />
                
            </fieldset>
        </form>
    </body>
</html>
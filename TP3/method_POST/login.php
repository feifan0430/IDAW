<!--AMSE PHP TP3 Fan_FEI-->
<form id="login_form" action="connected.php" method="POST">
    <table>
        <tr>
            <th>Login :</th>
            <td><input type="text" name="login"></td>
        </tr>
        <tr>
            <th>Mot de passe :</th>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="Se connecter..." /></td>
        </tr>
    </table>
</form>

<!-- 
    La méthode POST est-elle plus “sécurisée” que GET ? 
    Oui, 
    $ _GET est un tableau de variables passées au script courant via des paramètres d'URL.
    Les informations envoyées depuis le formulaire via la méthode GET sont visibles par tous,
    Et il y a également une limite sur la quantité d'informations envoyées.
    $ _POST est un tableau de variables passées au script courant via HTTP POST.
    Les informations envoyées à partir du formulaire via la méthode POST sont invisibles pour les autres,
    Et il n'y a pas de limite à la quantité d'informations envoyées.
    -->
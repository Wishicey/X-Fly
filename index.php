<!DOCTYPE html>
<html lang="fr-FR">
    <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="style.css"/>
    <title>X-Fly</title>
    </head>
    <body>
        <div class="header">
            <img id="logo" src="" alt="Logo XFly">

            <input type="button" value="Ajouter un vol">
            <input type="button" value="Modifier un vol">
            <input type="button" value="Retirer un vol">
            <p>
                <input class="boutonsA" type="button" value="Ajouter un vol">
                <input class="boutonsM" type="button" value="Modifier un vol">
                <input class="boutonsR" type="button" value="Retirer un vol">
            </p>
        </header>
        <div id="volet_clos">
            <div id="volet">
                <a href="#volet" class="ouvrir">Ouvrir !</a>
                    <a href="#volet_clos" class="fermer">Fermer !</a>
                <div id="Ajouter" class="option_gauche">
                    <form method="post" action="traitement.php">
                        <p>
                            <label for="Aeroport_D">Aéroport de départ?</label><br />
                            <select name="Aeroport" id="Aeroport">
                                <option value="france">NTM AXEL</option>
                                <option value="espagne">Espagne</option>
                                <option value="italie">Italie</option>
                                <option value="royaume-uni">Royaume-Uni</option>
                                <option value="canada">Canada</option>
                                <option value="etats-unis">États-Unis</option>
                                <option value="chine">Chine</option>
                                <option value="japon">Japon</option>
                            </select>
                        </p>
                    </form>
                    <form method="post" action="traitement.php">
                        <p>
                            <label for="Aeroport_A">Aeroport d'Arrivé?</label><br />
                            <select name="Aeroport" id="Aeroport">
                                <option value="france">France</option>
                                <option value="espagne">Espagne</option>
                                <option value="italie">Italie</option>
                                <option value="royaume-uni">Royaume-Uni</option>
                                <option value="canada">Canada</option>
                                <option value="etats-unis">États-Unis</option>
                                <option value="chine">Chine</option>
                                <option value="japon">Japon</option>
                            </select>
                        </p>
                    </form>
                    <form method="post" action="traitement.php">
                        <p>
                            <label for="Date_D">Date de Départ?</label><br />
                            <select name="Date" id="Date">
                                <input type="date"/>
                            </select>
                        </p>
                    </form>
                    <form method="post" action="traitement.php">
                        <p>
                            <label for="Date_A">Date d'Arrivée?</label><br />
                            <select name="Date" id="Date">
                                <input type="date"/>
                            </select>
                        </p>
                    </form>
                    <form method="post" action="traitement.php">
                        <p>
                            <label for="Heure_D">Heure de Départ?</label><br />
                            <select name="Heure" id="Heure">
                                <input type="time"/>
                            </select>
                        </p>
                    </form>
                    <form method="post" action="traitement.php">
                        <p>
                            <label for="Heure_A">Heure d'Arrivée?</label><br />
                            <select name="Heure" id="Heure">
                                <input type="time"/>
                            </select>
                        </p>
                    </form>
                    <form method="post" action="traitement.php">
                        <p>
                            <label for="Avion">Avion Concerné?</label><br />
                            <select name="Avion" id="Avion">
                                <option value="france">France</option>
                                <option value="espagne">Espagne</option>
                                <option value="italie">Italie</option>
                                <option value="royaume-uni">Royaume-Uni</option>
                                <option value="canada">Canada</option>
                                <option value="etats-unis">États-Unis</option>
                                <option value="chine">Chine</option>
                                <option value="japon">Japon</option>
                            </select>
                        </p>
                    </form>
                    <form method="post" action="traitement.php">
                        <p>
                            <label for="Avion">Pilote concerné?</label><br />
                            <select name="Avion" id="Avion">
                                <option value="france">France</option>
                                <option value="espagne">Espagne</option>
                                <option value="italie">Italie</option>
                                <option value="royaume-uni">Royaume-Uni</option>
                                <option value="canada">Canada</option>
                                <option value="etats-unis">États-Unis</option>
                                <option value="chine">Chine</option>
                                <option value="japon">Japon</option>
                            </select>
                        </p>
                    </form>
                    <form method="post" action="traitement.php">
                        <p>
                            <label for="Avion">CoPilote concerné?</label><br />
                            <select name="Avion" id="Avion">
                                <option value="france">France</option>
                                <option value="espagne">Espagne</option>
                                <option value="italie">Italie</option>
                                <option value="royaume-uni">Royaume-Uni</option>
                                <option value="canada">Canada</option>
                                <option value="etats-unis">États-Unis</option>
                                <option value="chine">Chine</option>
                                <option value="japon">Japon</option>
                            </select>
                        </p>
                    </form>
                </div>
            </div>
        </div>


    </body>
</html>
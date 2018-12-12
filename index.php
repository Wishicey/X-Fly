<!DOCTYPE html>
<html lang="fr-FR">
    <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="style.css"/>
    <title>X-Fly</title>
    </head>
    <body>
        <div class="header">
            <img id="logo" src="img/LogoXfly.png" alt="Logo XFly">
            <p>
                <input  id="boutonsA" type="button" value="Ajouter un vol">
                <input  id="boutonsM" type="button" value="Modifier un vol">
                <input  id="boutonsR" type="button" value="Retirer un vol">
            </p>
        <div id="volet_clos">
            <div id="volet">
                <a href="#volet" class="ouvrir">Ouvrir !</a>
                    <a href="#volet_clos" class="fermer">Fermer !</a>
                <div id="Modifier" class="option_gauche">
                    <form method="post" action="traitement.php">
                        <p>
                            <label for="Aeroport_D">Aéroport de départ?</label><br />
                            <select name="Aeroport" id="Aeroport">
                                <option value="france">oui</option>
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
                                <option value="france">Nathalie</option>
                                <option value="espagne">Sylvie</option>
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
                <div id="Supprimer" class="option_gauche">

                    <input class="Suppresion" type="button" value="Supprimer">
                </div>
                <div id="Ajouter" class="option_gauche">
                    <form method="post" action="traitement.php">
                        <p>
                            <label for="Aeroport_D">Aéroport de départ?</label><br />
                            <select name="Aeroport" id="Aeroport">
                                <option value="france">oui</option>
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
                                <option value="france">Nathalie</option>
                                <option value="espagne">Sylvie</option>
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
        <div class="liste">

        </div>

        <script src="jquery-3.3.1.js"></script>
        <script src="boutonpage.js"></script>
    </body>

</html>
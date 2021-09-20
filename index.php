<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="top-footer">
        <div id="top-border">
            <nav>
                <div id="nav-panel">
                    <ul>
                        <li><a href="#">O NAS</a></li>
                        <li><a href="#nasze-menu">MENU</a></li>
                        <li><a href="#">KONTAKT</a></li>
                        <li><a href="#">GALERIA</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>
    <section id="menu">
        <div id="tlo-menu">
        <a id="nasze-menu"></a>
            <h1>Nasze Menu</h1>
        </div>
        <div id="wstep">
            <div class="box" id="box1">
                <div id="grafika1"><a href=""></a> </div>
                <h2><a href="#dania-glowne">Dania główne</a></h2>
            </div>
            <div class="box" id="box2">
                <div id="grafika2"><a href=""></a></div>
                <h2><a href="#deser">Desery</a></h2>
            </div>
            <div class="box" id="box3">
                <div id="grafika3"></div>
                <h2><a href="#napoje">Napoje</a></h2>
            </div>
        </div>
    </section>
    <section id="main-content">
        <form action="zamowienie.php" method="post">
        <a id="dania-glowne"></a>
            <div id="tlo-daniaG">
                <h1>Dania główne</h1>
            </div>
        <div id="menu-dania">
                <table>
                    <tr>
                        <td class="td1">Stek z antrykowy z kością<br><a>Podawany z frytkami lub pieczonymi batatami i saładką</a></td>
                        <td class="td2"> 95zł</td>
                        <td><input type="text" name="stek" value="0"></td>
                    </tr>
                    <tr>
                        <td class="td1">Chinkali<br><a>Pierożki z wołowiną podawane z kwaśną śmietaną</a></td>
                        <td class="td2">29zł</td>
                        <td><input type="text" name="chinnkali" value="0"></td>
                    </tr>
                    <tr>
                        <td class="td1">Burger z wołowiną i frytkami<br><a></a></td>
                        <td class="td2">30zł</td>
                        <td><input type="text" name="burger" value="0"></td>
                    </tr>
                </table>
            </div>
            <a id="deser"></a>
            <div id="tlo-desery">
            <h1>Desery</h1> 
            </div>
            <div id="menu-desery">
                <table>
                    <tr>
                        <td class="td1">Sernik</td>
                        <td class="td2"> 25zł</td>
                        <td><input type="text" name="sernik" value="0"></td>
                    </tr>
                    <tr>
                        <td class="td1">Jabłecznik</td>
                        <td class="td2">25zł</td>
                        <td><input type="text" name="jablecznik" value="0"></td>
                    </tr>
                    <tr>
                        <td class="td1">Lody<br><a>3 gałki do wyboru: czekolada, wanilia, pistacia</a></td>
                        <td class="td2">29zł</td>
                        <td><input name="lody" value="0"></td>
                    </tr>
                </table>
            </div>
            <a id="napoje"></a>
            <div id="tlo-napoje">
                <h1>Napoje</h1> 
            </div>
            <div id="menu-napoje">
                <table>
                    <tr>
                        <td class="td1">Coca-cola</td>
                        <td class="td2"> 5zł</td>
                        <td><input type="text" name="cola" value="0"></td>
                    </tr>
                    <tr>
                        <td class="td1">Lipton ICE-TEA</td>
                        <td class="td2">5zł</td>
                        <td><input type="text" name="lipton" value="0"></td>
                    </tr>
                    <tr>
                        <td class="td1">Woda niegazowana</td>
                        <td class="td2">4zł</td>
                        <td><input type="text" name="wodanie" value="0"></td>
                    </tr>
                    <tr>
                        <td class="td1">Woda Gazowana</td>
                        <td class="td2">4zł</td>
                        <td><input type="text" name="wodagaz" value="0"></td>
                    </tr>
                </table>
            </div>
        <div id="end">
            <input type="submit" value="Podsumowanie">
        </div>
        </form>
    </section>
</body>
</htmli
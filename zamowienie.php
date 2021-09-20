<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">

</head>
<body>
<?php
    @$stek = $_POST['stek'];
    @$chinnkali = $_POST['chinnkali'];
    @$burger = $_POST['burger'];
    @$sernik = $_POST['sernik'];
    @$jablecznik = $_POST['jablecznik'];
    $lody = $_POST['lody'];
    @$cola = $_POST['cola'];
    @$lipton = $_POST['lipton'];
    @$wodanie = $_POST['wodanie'];
    @$wodagaz = $_POST['wodagaz'];

    $sumastek = $stek * 95;
    $sumachinnkali = $chinnkali * 29;
    $sumaburger = $burger * 30;
    $sumasernik = $sernik * 25;
    $sumajablecznik = $jablecznik * 25;
    $sumalody= 29 * $lody;
    $sumacola = $cola * 5;
    $sumalipton = $lipton * 5;
    $sumawodanie = $wodanie * 4;
    $sumawodagaz = $wodagaz * 4;

    $suma = $sumastek + $sumachinnkali + $sumaburger + $sumasernik + $sumajablecznik + $sumalody + $sumacola + $sumalipton + $sumawodanie + $sumawodagaz;

ECHO<<<END
    <div id="content">
        <form action="index.php" method="post">
        <h1> Podsumowanie Zamówienia</h1>
        <div id="tabela">
            <table>
                <tr>
                    <td>Nazwa</td>
                    <td>Ilośc</td>
                    <td>Cena</td>
                </tr>
                <tr>
                    <td>Stek z antrykowy z kością</td>
                    <td>$stek</td>
                    <td>$sumastek zł</td>
                </tr>
                <tr>
                    <td>Chinkali</td>
                    <td>$chinnkali</td>
                    <td>$sumachinnkali zł</td>
                </tr>
                <tr>
                    <td>Burger z wołowiną i frytkami</td>
                    <td>$burger</td>
                    <td>$sumaburger zł</td>
                </tr>
                <tr>
                    <td>Sernik</td>
                    <td>$sernik</td>
                    <td>$sumasernik zł</td>
                </tr>
                <tr>
                    <td>Jabłecznik</td>
                    <td>$jablecznik</td>
                    <td>$sumajablecznik zł</td>
                </tr>
                <tr>
                    <td>Lody</td>
                    <td>$lody</td>
                    <td>$sumalody zł</td>
                </tr>
                <tr>
                    <td>Coca-cola</td>
                    <td>$cola</td>
                    <td>$sumacola zł</td>
                </tr>
                <tr>
                    <td>Lipton ICE-TEA</td>
                    <td>$lipton</td>
                    <td>$sumalipton zł</td>
                </tr>
                <tr>
                    <td>Woda niegazowana</td>
                    <td>$wodanie</td>
                    <td>$sumawodanie zł</td>
                </tr>
                <tr>
                    <td>Woda Gazowana</td>
                    <td>$wodagaz</td>
                    <td>$sumawodagaz zł</td>
                </tr>
                <tr>
                    <td colspan="2">Suma:</td>
                    <td>$suma zł</td>
                </tr>
            </table
        </div>
        <input type="submit" value="powrót">
        </form>
    </div>
END;
?>
</body>
</html>

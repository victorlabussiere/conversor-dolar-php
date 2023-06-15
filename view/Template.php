<form method="GET">
    <select name='currency'>
        <option>Selecionar</option>
        <option value='real'>Dólar para Real</option>
        <option value='dolar'>Real para Dólar</option>
    </select>
    <input type="submit" value="Selecionar conversão">
</form>


<?php
if (isset($_GET['currency'])) {
    if ($_GET['currency'] === 'real') {
        include __DIR__ . '/../view/DolarToReal.php';
        if ($resultState && $_GET['currency'] === 'real') echo "<div class='resultContainer'> <strong> $vlBR </strong> </div>";
    }

    if ($_GET['currency'] === 'dolar') {
        include __DIR__ . '/../view/RealToDolar.php';
        if ($resultState && $_GET['currency'] === 'dolar') echo "<div class='resultContainer'> <strong> $vlUS </strong> </div>";
    }
}

<section>
    <form method="GET">

        <label for="coin">
            Insira o valor em Real para saber sua conversão em Dólar:
        </label>
        <input type="number" placeholder="R$ <?php echo isset($_GET['coin']) ? $stringResult : '0,00' ?>" name='coin'>

        <input type="submit" value='Converter'>

    </form>

    <?php
    if ($resultState) echo "<div class='resultContainer'> <strong>\$ $result</strong> </div>";
    ?>
</section>
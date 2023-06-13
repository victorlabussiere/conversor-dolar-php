<section>
    <form method="GET" action="<?= $_SERVER['PHP_SELF']; ?>">

        <label for="coin">
            Insira o valor em Real para saber sua conversão em Dólar:
        </label>
        <input type="number" placeholder="<?= $model->setFormat($brPattern, $userInput, 'BRL') ?>" name='coin' value="<?= $model->setFormat($brPattern, $userInput, 'BRL') ?>" step="0.01">

        <input type="submit" value='Converter'>

    </form>

    <?php
    if ($resultState) echo "<div class='resultContainer'> <strong> $vl </strong> </div>";
    ?>
</section>
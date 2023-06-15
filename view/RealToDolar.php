<section>
    <form method="POST">
        <label for="coin">
            Insira o valor em Real para saber sua conversão em Dólar:
        </label>
        <input type="number" placeholder="<?= Modelo::setFormat($brPattern, $userInput, 'BRL') ?>" name='coin' value="<?php if (isset($_POST['coin'])) echo $_POST['coin'] ?>" step="0.01">

        <input type="submit" value='Converter'>
    </form>
</section>
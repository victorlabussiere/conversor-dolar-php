<section>
    <form method="POST">
        <label for="coin">
            Insira o valor em Dólar para saber sua conversão em Real:
        </label>
        <input type="number" placeholder="<?= Modelo::setFormat($usaPattern, $userInput, "USD") ?>" name='coin' value="<?php if (isset($_POST['coin'])) echo $_POST['coin'] ?>" step="0.01">

        <input type="submit" value='Converter'>
    </form>
</section>
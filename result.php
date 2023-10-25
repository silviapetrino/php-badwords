<?php

$paragraph = isset($_POST['paragraph']) ? $_POST['paragraph'] : 'nessun risultato';
$lengthParagraph = strlen($paragraph);
$word = $_POST['word'];
$wordCensored = str_replace($word, '***', $word);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Result</title>
</head>
<body>
  <h1>Risultato</h1>
  <h2>il paragrafo è "<?php echo $paragraph ?>";</h2>
  <h2>il paragrafo contiene: <?php echo $lengthParagraph ?> lettere.</h2>
  <h3>Parola censurata : <?php echo $wordCensored ?></h3>
</body>
</html>
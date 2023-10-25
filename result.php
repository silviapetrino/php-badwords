<?php

$paragraph = (isset($_POST['paragraph'])) ? $_POST['paragraph'] : 'nessun risultato';
var_dump((isset($_POST['paragraph'])));

$lengthParagraph = strlen($paragraph);

$word = $_POST['word'];
$paragrafWithWord = $_POST['paragraph'];

if (str_contains($paragrafWithWord , $word)) {
  $paragrafWithWord  = str_replace($word, '***', $paragrafWithWord);
  $lengthParagraphWord = strlen($paragrafWithWord);
}

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
  
  <h2>il nuovo paragrafo è "<?php echo $paragrafWithWord ?>";</h2>
  <h2>il paragrafo contiene: <?php echo $lengthParagraphWord ?> lettere.</h2>
</body>
</html>
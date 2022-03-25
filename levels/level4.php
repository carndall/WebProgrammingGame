<?php
require_once "words.php";
require_once "helpers.php";
 
$letters = range("a","z");
 
$params = (object) $_REQUEST;
print_r($params);
 
if (isset($params->guess)) {
  $answer = $params->answer;
  $word   = $params->word;
  $letter = $params->letter;
 
  $answer = replaceWithLetters($answer, $word, $letter); 
} 
else {
  // choose a random word
  $word = $level4[ rand( 0, count($level4)-1 ) ];
 
  // the initial answer has stars replacing the letters
  $answer = stars($word);
 
  $params->letter = "";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Word Guess Game</title>
<style type="text/css">
body { padding: 20px; }
form { margin: 10px 0; }
.spacing {
  letter-spacing: .5em;
}
</style>
</head>
<body>
 
<form action="index.php" method="get">
<button type='submit'>New Game</button>
</form>
 
What is this word? 
<p class='spacing'><?php echo $answer ?></p>
 
<form action="index.php" method="post">
  <input type="hidden" name="answer" value="<?php echo $answer?>" />
  <input type="hidden" name="word" value="<?php echo $word?>" />
 
  Guess a letter:
  <select name="letter">
  <?php foreach ($letters as $value): ?>
    <option <?php if ($value == $params->letter) echo "selected" ?>  
       ><?php echo $value?></option>
  <?php endforeach ?>
  </select>
  <input type="submit" name="guess" value="Guess" />
</form>
 
</body>
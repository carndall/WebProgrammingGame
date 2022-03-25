<?php
 
/* returns a string consisting of as many stars
 * as there are letters in the $word
 */
function stars( $word1 ) {
  return str_repeat("*", strlen($word1));
}
 
/* returns a string which is the same as $target, 
 * except that the $letter replaces each character 
 * whenever the $letter matches the character 
 * in the same position of the $word string
 */
function replaceWithLetters( $target, $word1, $letter ) {
  // $replacement starts out as a copy of $target
  $replacement = $target;
 
  $count = 0;
  // loop on positions $i within the $replacement string
  // for each character $word[$i] which matches $letter,
  // replace that position in $replacement by $letter

  for ($i = 0; $i < strlen($replacement); ++$i) {
    if ($word1[$i] == $letter) {
      $replacement[$i] = $letter;
    }
    else {
      $count++;
      echo $count;
    }
    
  }
  return $replacement;
}
<?php
 
/* returns a string consisting of as many stars
 * as there are letters in the $word
 */
function stars( $word4 ) {
  return str_repeat("*", strlen($word4));
}
 
/* returns a string which is the same as $target, 
 * except that the $letter replaces each character 
 * whenever the $letter matches the character 
 * in the same position of the $word string
 */
function replaceWithLetters( $target, $word4, $letter ) {
  // $replacement starts out as a copy of $target
  $replacement = $target;
 
  // loop on positions $i within the $replacement string
  // for each character $word[$i] which matches $letter,
  // replace that position in $replacement by $letter
  for ($i = 0; $i < strlen($replacement); ++$i) {
    if ($word4[$i] == $letter) {
      $replacement[$i] = $letter;
    }
  }
  return $replacement;
}
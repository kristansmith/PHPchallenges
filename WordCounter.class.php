<?php


// Count Words in a String – Counts the number of individual words in a string. For added complexity read these strings in from a text file and generate a summary.

class WordCounter {

	public function countWords($string) {

		$wordArray = explode(' ', $string);
		$wordCount = 0;

		for ($i = 0; $i < count($wordArray); $i++) {
			// repeated spaces can cause empty array elements .. lets make sure we are not just looking at empty space
			if (strlen(preg_replace('/\s+/u','',$wordArray[$i])) !== 0) {
    			$wordCount++;
			}
		}
		
		echo "The sentence " . $string . " has " . $wordCount . " words.<br>";
	}
}



$wordCounter = new WordCounter();

$wordCounter->countWords('How many words are there in this sentence?');
$wordCounter->countWords('How     man?');

?>

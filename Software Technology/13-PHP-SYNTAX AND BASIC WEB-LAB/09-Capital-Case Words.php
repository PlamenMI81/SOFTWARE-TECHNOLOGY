<?php
if (isset($_GET['text'])) {
	$text = $_GET['text'];
	preg_match_all('/\w+/', $text, $words);
	$words = $words[0];
	$upperWords = array_filter($words, function($word){
		return strtoupper($word) == $word;
	});
	$upper = implode(', ', $upperWords);
}
?>
<form>
	<textarea name="text" cols="30" rows="10"><?= $upper?></textarea>
	<br/>
	<input type="submit">
</form>


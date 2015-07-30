<?php
	include("main-google-url-serp/autoload.php");
	$googleUrl=new \GoogleUrl();
	$simpsonPage1=$googleUrl->search("simpson"); // simpsons results page 1 (results 1-10)




	// GET NATURAL RESULTS

	$positions=$simpsonPage1->getPositions();

	echo "results for " . $simpsonPage1->getKeywords();
	echo "<ul>";
	foreach($positions as $result){
	    echo "<li>";
	    echo "<ul>";
	    echo "<li>position : " . $result->getPosition() . "</li>";
	    echo "<li>title : "    . utf8_decode($result->getTitle())    . "</li>";
	    echo "<li>website : "  . $result->getWebsite()  . "</li>";
	    echo "<li>URL : <a href='" . $result->getUrl() ."'>" . $result->getUrl() . "</a></li>";
	    echo "</ul>";
	    echo "</li>";
	}
	echo "</ul>";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

	<div id="page-wrap">

		<header class="w3-container w3-teal">
  <h1>Score</h1>
</header>
		
        <?php
        
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            $answer6 = $_POST['question-6-answers'];
            $answer7 = $_POST['question-7-answers'];
            $answer8 = $_POST['question-8-answers'];
            $a1 = $_POST['question-1'];
            $a2 = $_POST['question-2'];
            $a3 = $_POST['question-3'];
            $a4 = $_POST['question-4'];
            $a5 = $_POST['question-5'];
            $a6 = $_POST['question-6'];
            $a7 = $_POST['question-7'];
            $a8 = $_POST['question-8'];
            $totalCorrect=0;
       
            if($answer1 == strtolower($a1)) { $totalCorrect++; }
            if($answer2 == strtoupper ($a2)) { $totalCorrect++; }
            if($answer3 == strtolower($a3)) { $totalCorrect++; }
            if($answer4 == strtoupper ($a4)) { $totalCorrect++; }
            if($answer5 == strtolower($a5)) { $totalCorrect++; }
            if($answer6 == strtolower($a6)) { $totalCorrect++; }
            if($answer7 == strtolower($a7)) { $totalCorrect++; }
            if($answer8 == strtolower($a8)) { $totalCorrect++; }
            
            echo "<div id='results' style=\"font-size:30px;\">$totalCorrect / 8 correct</div>";
            
        ?>
	
	</div>
	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>
<br />
</body>
<a href="level1.php"><button style="font-size:30px;">Play Again</Button></a>
</html>
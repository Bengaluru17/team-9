<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>PHP Quiz</title>
	<style type="text/css">
     .hidden-elements{
        display: none;
     }   
    </style>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
 <?php session_start();
    echo session_id();
           
$dnuma = array("734", "432", "900");
$streeta = array("Commercial Street", "MG Road", "Residency Road");
$citya = array("Bangalore", "Mumbai", "Delhi");
$statea = array("Karnataka", "Tamil Nadu", "Maharastra");
$countrya = array("India", "China", "USA");

echo "Address<BR>";
$dnum = mt_rand(0,2);
echo $dnuma[$dnum];
echo ", ";
$street = mt_rand(0,2);
echo $streeta[$street];
echo ", ";
$city = mt_rand(0,2);
echo $citya[$city];
echo ", ";
$state = mt_rand(0,2);
echo $statea[$state];
echo ", ";
$country = mt_rand(0,2);
echo $countrya[$country];
echo ", ";
$a=1;

$_SESSION['a'] = $a;
?>
<body>

	<div id="page-wrap">

		<h1>Level 2</h1>
		
		<form action="grade.php" method="POST"> 
		
            <ol>
            
                <li>
                
                    <h3>Door Number</h3>
                    
                    <div>
                        <input type="text" name="question-1-answers" id="question-1-answers-A"/>
                        <label for="question-1-answers-A"></label>
                    </div>
                    
                
                
                </li>
                
                <li>
                
                    <h3>Street Name</h3>
                    
                     <div>
                        <input type="text" name="question-2-answers" id="question-1-answers-A"/>
                        <label for="question-1-answers-A"></label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>City</h3>
                    
                     <div>
                        <input type="text" name="question-3-answers" id="question-1-answers-A"/>
                        <label for="question-1-answers-A"></label>
                    </div>
                </li>
                
                <li>
                
                    <h3>State</h3>
                    <div>
                        <input type="text" name="question-4-answers" id="question-1-answers-A"/>
                        <label for="question-1-answers-A"></label>
                    </div>
                   
                
                </li>
                
                <li>
                
                    <h3>Country</h3>
                    
                     <div>
                        <input type="text" name="question-5-answers" id="question-1-answers-A"/>
                        <label for="question-1-answers-A"></label>
                    </div>
                </li>
            <div>
                        <input type="text" name="question-1" class="hidden-elements" id="" value="<?php echo $dnuma[$dnum] ?>" />
                        <label for="question-1-answers-A"></label>
                    </div>
                    <div>
                        <input type="text" name="question-2" class="hidden-elements" id="" value="<?php echo $streeta[$street] ?>" />
                        <label for="question-1-answers-A"></label>
                    </div>
                    <div>
                        <input type="text" name="question-3" class="hidden-elements" id="" value="<?php echo  $citya[$city] ?>" />
                        <label for="question-1-answers-A"></label>
                    </div>
                    <div>
                        <input type="text" name="question-4" class="hidden-elements" id="" value="<?php echo $statea[$state] ?>" />
                        <label for="question-1-answers-A"></label>
                    </div>
                    <div>
                        <input type="text" name="question-5" class="hidden-elements" id="" value="<?php echo $countrya[$country] ?>" />
                        <label for="question-1-answers-A"></label>
                    </div>
            </ol>
            
            <input type="submit" value="Submit Quiz" />
		
		</form>
	
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
    <div align="right" style="margin-top: 5px;">
   
</div>

</body>

</html>
<HTML>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<BODY style="font-size: 32px;margin-left:20px;">
<header class="w3-container w3-teal">
  <h1>Level 1</h1>
</header>
<?php session_start();
    
           
$capa = array("A", "B", "C","D","E","F","G");
$smalla = array("a", "b", "c","d","e","f","g");


$cap1 = mt_rand(0,6);
$small1 = mt_rand(0,6);
$cap2 = mt_rand(0,6);
$small2 = mt_rand(0,6);
$cap3 = mt_rand(0,6);
$small3 = mt_rand(0,6);
$cap4 = mt_rand(0,6);
$small4 = mt_rand(0,6);

$a=1;

$_SESSION['a'] = $a;
?>
<style type="text/css">
	.hidden-elements{
		display: none;
	}
</style>
<form action="level1grade.php" method="POST">
Type the other case for each of the following 
 <ol>
            
                <li>
                
                    <h3><?php echo $capa[$cap1]; ?></h3>
                    
                    <div>
                        <input type="text" name="question-1-answers" id="question-1-answers-A"/>
                        <label for="question-1-answers-A"></label>
                    </div>
                    
                
                
                </li>
                
                <li>
                
                    <h3><?php echo $smalla[$small1]; ?></h3>
                    
                     <div>
                        <input type="text" name="question-2-answers" id="question-1-answers-A"/>
                        <label for="question-1-answers-A"></label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3><?php echo $capa[$cap2]; ?></h3>
                    
                     <div>
                        <input type="text" name="question-3-answers" id="question-1-answers-A"/>
                        <label for="question-1-answers-A"></label>
                    </div>
                </li>
                
                <li>
                
                    <h3><?php echo $smalla[$small2]; ?></h3>
                    <div>
                        <input type="text" name="question-4-answers" id="question-1-answers-A"/>
                        <label for="question-1-answers-A"></label>
                    </div>
                   
                
                </li>
                
                <li>
                
                    <h3><?php echo $capa[$cap3]; ?></h3>
                    
                     <div>
                        <input type="text" name="question-5-answers" id="question-1-answers-A"/>
                        <label for="question-1-answers-A"></label>
                    </div>
                </li>
                 <li>
                
                    <h3><?php echo $smalla[$small3]; ?></h3>
                    <div>
                        <input type="text" name="question-6-answers" id="question-1-answers-A"/>
                        <label for="question-1-answers-A"></label>
                    </div>
                   
                
                </li>
                 <li>
                
                    <h3><?php echo $capa[$cap4]; ?></h3>
                    
                     <div>
                        <input type="text" name="question-7-answers" id="question-1-answers-A"/>
                        <label for="question-1-answers-A"></label>
                    </div>
                </li>
                 <li>
                
                    <h3><?php echo $smalla[$small4]; ?></h3>
                    <div>
                        <input type="text" name="question-8-answers" id="question-1-answers-A"/>
                        <label for="question-1-answers-A"></label>
                    </div>
                   
                
                </li>


            <div>
                        <input type="text" name="question-1" class="hidden-elements" id="" value="<?php echo $capa[$cap1] ?>" />
                        <label for="question-1-answers-A"></label>
                    </div>
                    <div>
                        <input type="text" name="question-2" class="hidden-elements" id="" value="<?php echo $smalla[$small1] ?>" />
                        <label for="question-1-answers-A"></label>
                    </div>
                    <div>
                        <input type="text" name="question-3" class="hidden-elements" id="" value="<?php echo  $capa[$cap2] ?>" />
                        <label for="question-1-answers-A"></label>
                    </div>
                    <div>
                        <input type="text" name="question-4" class="hidden-elements" id="" value="<?php echo $smalla[$small2] ?>" />
                        <label for="question-1-answers-A"></label>
                    </div>
                    <div>
                        <input type="text" name="question-5" class="hidden-elements" id="" value="<?php echo $capa[$cap3] ?>" />
                        <label for="question-1-answers-A"></label>
                    </div>
                     <div>
                        <input type="text" name="question-6" class="hidden-elements" id="" value="<?php echo $smalla[$small3] ?>" />
                        <label for="question-1-answers-A"></label>
                    </div>
                    <div>
                        <input type="text" name="question-7" class="hidden-elements" id="" value="<?php echo $capa[$cap4] ?>" />
                        <label for="question-1-answers-A"></label>
                    </div>
                     <div>
                        <input type="text" name="question-8" class="hidden-elements" id="" value="<?php echo $smalla[$small4] ?>" />
                        <label for="question-1-answers-A"></label>
                    </div>
                 <input type="submit" value="Submit Quiz" />
</form>

</BODY>
</HTML><?php

?>
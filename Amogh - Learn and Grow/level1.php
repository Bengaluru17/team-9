<HTML>
<BODY style="font-size: 32px;">

<?php session_start();
    
           
$capa = array("A", "B", "C","D","E","F","G");
$smalla = array("a", "b", "c","d","e","f","g");

echo "Address<BR>";
$cap1 = mt_rand(0,6);
echo $capa[$cap1];
echo ", ";
$small1 = mt_rand(0,6);
echo $smalla[$small1];
echo ", ";
$cap2 = mt_rand(0,6);
echo $capa[$cap2];
echo ", ";
$small2 = mt_rand(0,6);
echo $smalla[$small2];
echo ", ";
$cap3 = mt_rand(0,6);
echo $capa[$cap3];
echo ", ";
$small3 = mt_rand(0,6);
echo $smalla[$small3];
$cap4 = mt_rand(0,6);
echo $capa[$cap4];
$small4 = mt_rand(0,6);
echo $smalla[$small4];
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
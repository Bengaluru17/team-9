<HTML>
<BODY>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<header class="w3-container w3-teal">
  <h1>Level 3</h1>
</header>
<p style="margin-left: 350px;">Scan the given papers and upload it here</p>
	     <form action="level3.php"  method="POST">
            <fieldset style="width: 50%; color: green; margin-left: 350px;">
            <label for="avatar">Your Image:</label>
            <input type="file" id="avatar" name="avatar" required>
            <br>
            <label for="preview">Image preview: </label>
            <img id="preview" name="preview"><br>
            <input type="submit">
            </fieldset>
        </form>
</BODY>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
if($_POST['avatar'])echo "<div style=\"font-size=20px; align=center;\">Correct</div>"; else echo "Failed";
?>
<script src="https://www.cse.ust.hk/~rossiter/dating_web_site.js"></script>
</HTML>
<HTML>
<BODY>
<h1 align="center">Level 3</h1>
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
if($_POST['avatar'])echo "<div>Correct</div>"; else echo "Failed";
?>
<script src="https://www.cse.ust.hk/~rossiter/dating_web_site.js"></script>
</HTML>
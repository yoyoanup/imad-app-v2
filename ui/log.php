<html>
           <head>
		   <style>.a
		   {
			   text-align: center;
			   font-size: 100px;
			   color:red;
		   }
		   
		   </style>
		   
		   <script>
function validateForm() {
    var x = document.forms["fname"]["username"].value;
	var y= document.forms["fname"]["password"].value;
    if (x == "") {
        alert("Name   must be filled out");
        return false;
    }

	//var y= document.forms["fname"]["password"].value;
    if (y == "") {
        alert("password   must be filled out");
        return false;
    }
	
	}



</script>
		   </head>
		   <body backgroundcolor="lightblue">
		   <div class="a">
		   <form method="post" action="index.php" name="fname" onsubmit="return validateForm()">
		   username <input type="text" name="username"><br>
		   password<input type="text" name="password"><br>
		   <input type="reset" name="reset">
		   <input type="submit" name="submit" value="submit">
		   </form>
		   </div>
		   
		   <a href="b.php">signup</a>
		   </body>
 
 </html>

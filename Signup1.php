<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>signup</title>
    <link rel="stylesheet"href="background_color:blue">
</head>
<body bgcolor="lightblue">
 <h1>Signup form</h1>
        
        <form>
            
            <label for="fname">
               FirstName
                <input name="name" id="name"><br>
            </label>
            <label for="lname">
               LastName
                <input name="name" id="name"><br>
            </label>
            <label for="username/email address">
                Username/Email address
                <input name="username" id="username"><br>
            </label>   
            <label for="password">
                Password
                <input type="password" name="password" id="password"><br>
            </label>
			<label for="coniform password">
             Coniform Password
                <input type="password" name="password" id="password"><br>
            </label>
			<button><a href="submit">submit</a></button>
			</form>
				 <script>
	document.getElementById("mainpage").innerhtml=form;
	</script>
			</body>
			</html>
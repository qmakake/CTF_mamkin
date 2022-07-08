<html>  
<head>  
    <title>PHP login system</title>  
</head>  
<body>  
        <h1>Login</h1>  
        <form name="f1" action = "/"  method = "POST">  
            <p>  
                <label> UserName: </label>  
                <input type = "text" name  = "name" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" name  = "pass" />  
            </p>  
            <p>     
                <input type =  "submit" value = "Login" />  
            </p>  
        </form>  

<?php
	/* Attempt to connect to MySQL database */
	$link = mysqli_connect('db-sql', 'admin', '12345', 'sqlauth');
	 
	// Check connection
	if($link === false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
	} 

	$name = $_POST['name'];
	$hash = md5($_POST['pass']);
	$sql = "select *from auth where name = '$name' and hash = '$hash'"; 
	$result = mysqli_query($link, $sql);

	if($result){
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
		$count = mysqli_num_rows($result);  
		if ($count >= 1)
		{
			echo "GPB{Y00_h00_Go0D_SQ1}";
		}
	}  
	
?>

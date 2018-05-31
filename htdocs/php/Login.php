<html>
<body>

Username: <?php echo $_REQUEST["Username"]; ?><br>
Password hash: <?php if (($_REQUEST["Password"]=='')) {
	echo 'password cannot be empty';
}else{
	echo hash('sha256', $_REQUEST["Password"]);
} ?>
</body>
</html>
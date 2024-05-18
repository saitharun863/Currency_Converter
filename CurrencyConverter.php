<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 50%;
        }
        table th, td {
            padding: 10px;
            text-align: center;
        }
        caption {
            font-size: 1.5em;
            margin-bottom: 10px;
        }
        img {
            width: 50px;
            height: 50px;
        }     

    </style>
</head>
<body>

<?php
$Convertto = "";
$Convertfrom = "";
$inputc = 0;
$ConvertedCurrency=0.0000;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Convertto = $_POST["Convertto"];
    $Convertfrom = $_POST["Convertfrom"];
    $inputc = $_POST["inputc"];

    $con = new mysqli("localhost", "root", "", "dbcc");

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $s1 = "SELECT $Convertto FROM cctable WHERE currency =?";
    $stmt = $con->prepare($s1);
    $stmt->bind_param("s", $Convertfrom);
    $stmt->execute();
    $stmt->bind_result($multiplier);
    $stmt->fetch();
    $stmt->close();

    
    $ConvertedCurrency = $multiplier * $inputc;
    $con->close();
}
?>

<form name="f1" method="post">
	<table  cellspacing="10" height="500px" width="500px" bgcolor="lavender">
		<caption><img src="logo.png"><u>CURRENCY CONVERTER</u></caption>
		<tr align="center">
		<td> Convert from: </td>
		<td>
		<select name="Convertfrom">
                        <option value="USD">USD</option>
			<option value="INR">INR</option>
			<option value="EUR">EUR</option>
			<option value="GBP">GBP</option>
			<option value="JPY">JPY</option>
			<option value="AUD">AUD</option>
			<option value="LKR">LKR</option>
			<option value="CHF">CHF</option>
			<option value="RUB">RUB</option>
			<option value="AED">AED</option>
			<option value="AFN">AFN</option>
			<option value="BRL">BRL</option>
			<option value="DKK">DKK</option>
			<option value="EGP">EGP</option>
			<option value="MYR">MYR</option>
			<option value="CUP">CUP</option>
			<option value="COP">COP</option>
			<option value="HKD">HDK</option>
			<option value="HUF">HUF</option>
			<option value="NOK">NOK</option>
			<option value="UAH">UAH</option>
			<option value="KWD">KWD</option>
			<option value="OMR">OMR</option>
			<option value="SAR">SAR</option>
			<option value="MAD">MAD</option>
			<option value="ZAR">ZAR</option>
			<option value="SGD">SGD</option>
			<option value="CNY">CNY</option>
			<option value="PHP">PHP</option>
			<option value="THB">THB</option>
			<option value="VND">VND</option>
                </select>
                </td>
                </tr>
		<tr align="center">
        	<td>Convert to:</td>
       		<td>
                <select name="Convertto">
                    	<option value="USD">USD</option>
			<option value="INR">INR</option>
			<option value="EUR">EUR</option>
			<option value="GBP">GBP</option>
			<option value="JPY">JPY</option>
			<option value="AUD">AUD</option>
			<option value="LKR">LKR</option>
			<option value="CHF">CHF</option>
			<option value="RUB">RUB</option>
			<option value="AED">AED</option>
			<option value="AFN">AFN</option>
			<option value="BRL">BRL</option>
			<option value="DKK">DKK</option>
			<option value="EGP">EGP</option>
			<option value="MYR">MYR</option>
			<option value="CUP">CUP</option>
			<option value="COP">COP</option>
			<option value="HKD">HDK</option>
			<option value="HUF">HUF</option>
			<option value="NOK">NOK</option>
			<option value="UAH">UAH</option>
			<option value="KWD">KWD</option>
			<option value="OMR">OMR</option>
			<option value="SAR">SAR</option>
			<option value="MAD">MAD</option>
			<option value="ZAR">ZAR</option>
			<option value="SGD">SGD</option>
			<option value="CNY">CNY</option>
			<option value="PHP">PHP</option>
			<option value="THB">THB</option>
			<option value="VND">VND</option>
                </select>
                </td>
                </tr>

        <tr align="center"><td>Enter the Amount:</td><td><center><input type="text" name="inputc" value="<?php echo $inputc; ?>"><?php echo $Convertfrom; ?><center></td></tr>
        <tr align="center"><td>Converted Amount:</td><td><input type="text" name="CC" value="<?php echo number_format($ConvertedCurrency, 4); ?>"><?php echo $Convertto; ?></center></td></tr>
        <tr align="center">
        <td><input type="submit" value="Convert" onclick="valid()"></td>
        <td><button type="button" onclick="resetForm()">clear</button></td>
        </tr>

    </table>

<script type="text/javascript">
    function resetForm() {
        document.getElementsByName('inputc')[0].value =0;
        document.getElementsByName('CC')[0].value =0.0000;
    }
    function valid()
    {
      var Value = document.getElementsByName('inputc')[0].value;

    try {
        if (Value === '' || isNaN(parseInt(Value))) {
            alert("Invalid Operation!");
            throw err;
            return false;
        }
    } catch (err) {
        document.getElementsByName('inputc')[0].value = 0;
    }
    return true;
    }

   
</script>
</form>
<footer>
        <p>&copy; All rights reserved.</p>
    </footer>
</body>
</html>

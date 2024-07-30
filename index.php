<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
   <table class="center" >
    <tr>
        <td>
        <form action="logic.php" method="post">
            <table>
                <tr>
                    <td>
                    <h1>CALCULATOR</h1>
                    </td>
                </tr>

            </table>
            <table>
                <tr>
                    <td>
                    <h3>First Number</h3>
                    <input type="number" name="Num01" >
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                    <h3>Second Number</h3>
                    <input type="number" name="Num02" >
                    </td>
                </tr>
            </table>
            <br>
        
        <input type="submit" name="Addition" value="+">
        <input type="submit" name="Subtract" value="-">
        <input type="submit" name="Multiply" value="*">
        <input type="submit" name="Devide" value="/">

     
    </form>
        </td>
    </tr>
     
   
    
   </table>
    

    
</body>
</html>
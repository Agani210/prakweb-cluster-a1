<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <style>
        body {
            background-color: #4F42B5;
        }

        .heading {
            font-family: cursive;
            font-size: 300%;
            color: red;
            text-align: center;
        }

        .calculator {
            font-family: cursive;
            font-size: 110%;
            color: white;
            text-align: center;
            margin-top: 10vh;
        }

        input {
            color: white;
            text-align: center;
            font-weight: bold;
            font-family: cursive;
            border-left: #4F42B5;
            border-right: #4F42B5;
            border-style: groove;
            background-color: #4F42B5;
            font-size: 110%;
        }

        select {
            color: white;
            text-align: center;
            font-weight: bold;
            font-family: cursive;
            border-left: #4F42B5;
            border-right: #4F42B5;
            border-style: groove;
            background-color: #4F42B5;
            font-size: 95%;
        }

        option {
            color: white;
            text-align: center;
            font-weight: bold;
            font-family: cursive;
            border-left: #4F42B5;
            border-right: #4F42B5;
            border-style: groove;
            background-color: #4F42B5;
            font-size: 95%;
        }

        .footer {
            left: 0px;
            right: 0px;
            bottom: 4px;
            position: fixed;
            text-align: center;
            color: teal;
            font-family: Comic Sans Ms;
            font-size: 120%;
        }

        a {
            text-decoration: none;
            color: red;
        }

        a:hover {
            color: lawngreen;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        
    </style>
</head>

<body>
    <div class="heading">
        <font>Kalkulator Sederhana</font>
    </div>
    <div class="calculator">
        <form action="" method="POST">
            <input type="number" name="first_input" placeholder="Masukan Angka Pertama" size="20" />&nbsp;&nbsp;&nbsp;
            <input type="number" name="second_input" placeholder="Masukan Angka Kedua" size="20" />&nbsp;&nbsp;&nbsp;
            <select name="function">
                <option>Penjumlahan</option>
                <option>Pengurangan</option>
                <option>Perkalian</option>
                <option>Pembagian</option>
                <option>Persegi</option>
                <option>Square Root</option>
            </select><br><br><input type="reset" value="Reset">
            <input type="submit" name="submit" value="Submit" />
        </form>
        <?php
				if (isset($_POST['submit'])) {
					$input_a = htmlspecialchars($_POST['first_input']);
					$input_b = htmlspecialchars($_POST['second_input']);
					$operator = $_POST['function'];

					if ($input_a == null) {
						die("<br><br>Masukan Angka Terlebih Dahulu");
					}



					switch ($operator) {
						case 'Penjumlahan':
							$adding = $input_a + $input_b;
							echo "<br><br>Result:<br> " . $adding;
						break;

						case 'Pengurangan':
							$subtracting = $input_a - $input_b;
							echo "<br><br>Result:<br> " . $subtracting;
						break;

						case 'Perkalian':
							$multiply = $input_a * $input_b;
							echo "<br><br>Result:<br>" . $multiply;
						break;

						case 'Pembagian':
							$divide = $input_a / $input_b;
							echo "<br><br>Result:<br>" . $divide;
						break;

						case 'Persegi':
							$square = $input_a * $input_b;
							die("<br><br>Result:<br>" . $square);
						break;

						case 'Akar Pangkat 2':
							$square_root = sqrt($input_a);
							die("<br><br>Result:<br>" . $square_root);
						break;
					}
				}
			?>
    </div>
    <div class="footer">
        <footer>
            <p>
            Copyright Abdul Gani 118140106
            </p>
        </footer>
    </div>
</body>

</html>
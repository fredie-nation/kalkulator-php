<html>
<head>
    <title>KALKULATOR</title>
    <style>
        .container {
            margin-top: 200px;
            width: 250px;
            background-color: #2f4f4f;
            color: white;
            text-align: center;
            padding: 10px;
            margin: auto;
            margin-top: 30px;
            border-radius: 15px;
        }
        form, table {
            width: 100%;
        }
        input {
            width: 100%;
            padding: 5px;
            border: none;
            border-radius: 5px;
            color: orange;
            font-weight: bold;
            text-align: center;
            color:rgb(216, 108, 0);
        }
        select {
            padding: 5px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
        }
        .hitung {
            background-color: orangered;
            color: #fff;
            border: none;
        }
        .hapus {
            background-color:rgb(81, 137, 137);
            border: 1px solid white;
            color: #fff;
            border: none;
        }
    </style>
</head>
<body>
<?php 
                             if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                $nilai1 = $_POST['nilai1'];
                                $nilai2 = $_POST['nilai2'];
                                $operator = $_POST['operator'];
                
                                if($operator == '+') {
                                    $hasil = $nilai1 + $nilai2;
                                    } elseif($operator == '-') {
                                    $hasil = $nilai1 - $nilai2;
                                } elseif($operator == '*') {
                                    $hasil = $nilai1 * $nilai2;
                                } elseif($operator == '/') {
                                    $hasil = $nilai1 / $nilai2;
                                } else {
                                    echo "";
                                }

                                if ($nilai1 == "" && $nilai2 == "") {
                                    echo "<script>alert('silahkan isi kolom 1 dan 2')</script>";
                                } 
                            }
?>    
    <div class="container">
        <h1>KALKULATOR</h1>
        <form action=""  method="POST">
            <table align="center">
                <tr>
                    <td colspan="3">
                        <input type="number" name="nilai1">
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input type="number" name="nilai2">
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="operator">
                            <option value="operator">OPERATOR</option>
                            <option value="+"> + </option>
                            <option value="-"> - </option>
                            <option value="*"> x </option>
                            <option value="/"> / </option>
                        </select>
                    </td>
                    <td>
                        <input type="submit" name="hitung" value="HITUNG" class="hitung">
                    </td>
                    <td>
                        <input type="reset" value="HAPUS" class="hapus">
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input type="number" name="hasil" value="<?php echo $hasil; ?>">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
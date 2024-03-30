<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Nilai Ujian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 50%;
            margin: auto;
        }
        form {
            background-color: #f2f2f2;
            padding: 20px;
            border: 1px solid #ddd;
        }
        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Nilai Ujian</h2>
        <form action="submit_score.php" method="post">
            <label for="nim">NIM</label>
            <input type="text" id="nim" name="nim" required><br><br>
            <label for="course">Pilih MK</label>
            <select id="course" name="course">
                <option value="data_warehouse">Data Warehouse</option>
                <!-- Add other courses as options here -->
            </select><br><br>
            <label for="score">Nilai</label>
            <input type="number" id="score" name="score" required><br><br>
            <input type="submit" class="button" value="Simpan">
        </form>
    </div>
</body>
</html>
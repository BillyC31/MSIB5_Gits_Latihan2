<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<?php
    function css($rel, $href) {
        echo "<link rel='{$rel}' href='{$href}'>";
    }
  ?>

  <?php css("stylesheet", "style.css");?>

    <div class="container">
        <h2>Hitung Nilai Rata-rata</h2>
        <form id="gradeForm">
            <label for="name">Nama</label>
            <input type="text" id="name" placeholder="Nama..." required>
            <br>
            <br>

            <label for="course">Mata Kuliah</label>
            <input type="text" id="course" placeholder="Mata Kuliah..." required>
            <br>
            <br>

            <label class="grade" for="grade">Grade</label>
            <select id="grade" required>
                <option value="">Pilih Grade...</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>                
            </select>

            <button type="button" onclick="calculateAverage()">Hitung</button>
        </form>
        <table id="resultTable">
            <tr>
                <th>Nama</th>
                <th>Mata Kuliah</th>
                <th>Grade</th>
                <th>Nilai Rata-rata</th>
            </tr>
        </table>
    </div>

    <script>
        function calculateAverage() {
            const gradeValues = { 
              A: 4, 
              B: 3, 
              C: 2, 
              D: 1, 
              E: 0
            };
            let name = document.getElementById("name").value;
            let course = document.getElementById("course").value;
            let selectedGrade = document.getElementById("grade").value;

            let dataGrade = gradeValues[selectedGrade];
            console.log("dataGrade : ", dataGrade);

            

            if (selectedGrade in gradeValues) {
                const gradeValue = gradeValues[selectedGrade];
                console.log("gradeValue : ", gradeValue);
                const resultTable = document.getElementById("resultTable");

                const newRow = resultTable.insertRow(-1); // Insert a row at the end of the table
                newRow.insertCell(0).innerHTML = name;
                newRow.insertCell(1).innerHTML = course;
                newRow.insertCell(2).innerHTML = selectedGrade;
                newRow.insertCell(3).innerHTML = gradeValue;
            } else {
                alert("Pilih Grade dengan benar");
            }
        }
    </script>
</body>

</html>
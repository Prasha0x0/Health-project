<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Column-Wise Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "myfirstdatabase");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT First_Name, Last_name, Address, Email, Password,Phone_np, Birthdate FROM patientinfo";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            
            
            $First_Name = [];
            $Last_name = [];
            $Address= [];
            $Email = [];
            $Password = [];
            $Phone_np = [];
            $Birthdate = [];

            
            while ($row = $result->fetch_assoc()) {
                
                $First_Name[] = $row["First_Name"];
                $Last_name[] = $row["Last_name"];
                $Address[] = $row["Address"];
                $Email[] = $row["Email"];
                $Password[] = $row["Password"];
                $Phone_np[] = $row["Phone_np"];
                $Birthdate[] = $row["Birthdate"];
                
            }

            
            

            echo "<tr><th>First_Name</th>";
            foreach ($First_Name as $First_Name) {
                echo "<td>$First_Name</td>";
            }
            echo "</tr>";

            echo "<tr><th>Last_name</th>";
            foreach ($Last_name as $Last_name) {
                echo "<td>$Last_name</td>";
            }
            echo "</tr>";

            echo "<tr><th>Address</th>";
            foreach ($Address as $Address) {
                echo "<td>$Address</td>";
            }
            echo "</tr>";

            echo "<tr><th>Email</th>";
            foreach ($Email as $Email) {
                echo "<td>$Email</td>";
            }
            echo "</tr>";

            echo "<tr><th>Password</th>";
            foreach ($Password as $Password) {
                echo "<td>$Password</td>";
            }
            echo "</tr>";

            echo "<tr><th>Phone_np</th>";
            foreach ($Phone_np as $Phone_np) {
                echo "<td>$Phone_np</td>";
            }
            echo "</tr>";

            echo "<tr><th>Birthdate</th>";
            foreach ($Birthdate as $Birthdate) {
                echo "<td>$Birthdate</td>";
            }
            echo "</tr>";
        } else {
            echo "<tr><td colspan='4'>No results found</td></tr>";
        }

        $sql = "SELECT id, allergy1, allergy2, allergy3 FROM healthrecord";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            
            $ids = [];
            $allergy1 = [];
            $allergy2 = [];
            $allergy3 = [];

            
            while ($row = $result->fetch_assoc()) {
                $ids[] = $row["id"];
                $allergy1[] = $row["allergy1"];
                $allergy2[] = $row["allergy2"];
                $allergy3[] = $row["allergy3"];
            }

            
            echo "<tr><th>Id</th>";
            foreach ($ids as $id) {
                echo "<td>$id</td>";
            }
            echo "</tr>";

            echo "<tr><th>Allergy 1</th>";
            foreach ($allergy1 as $allergy) {
                echo "<td>$allergy</td>";
            }
            echo "</tr>";

            echo "<tr><th>Allergy 2</th>";
            foreach ($allergy2 as $allergy) {
                echo "<td>$allergy</td>";
            }
            echo "</tr>";

            echo "<tr><th>Allergy 3</th>";
            foreach ($allergy3 as $allergy) {
                echo "<td>$allergy</td>";
            }
            echo "</tr>";
        } else {
            echo "<tr><td colspan='4'>No results found</td></tr>";
        }

        $conn->close();
        ?>
    </table>
    <script>
        // Function to show only the first column
        function showFirstColumn() {
            const table = document.getElementById("dataTable");
            const rows = table.rows;

            for (let i = 0; i < rows.length; i++) {
                for (let j = 1; j < rows[i].cells.length; j++) { // Hide all columns except the first
                    rows[i].cells[j].style.display = "none";
                }
            }
        }

        // Call the function after the page loads
        document.addEventListener("DOMContentLoaded", showFirstColumn);
    </script>
</body>
</html>

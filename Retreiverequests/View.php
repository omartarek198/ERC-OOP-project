<?php

class View
{
    public function DisplayFin($result)
    {

        if (mysqli_num_rows($result) > 0) {
            echo "<table class='table table-bordered table-striped'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>#</th>";
            echo "<th>Name</th>";
            echo "<th>Income</th>";

            echo "<th>State</th>";

            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['RequestId'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['income'] . "</td>";
                echo "<td>" . $row['IsAccepted'] . "</td>";
                echo "<td>";
                echo "<a href='View/read.php?id=" . $row['id'] . "' title='View Record' data-toggle='tooltip'>
							<span class='glyphicon glyphicon-eye-open'></span>
						  </a>";
                echo "<a href='View/update.php?id=" . $row['id'] . "' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                echo "<a href='View/delete.php?id=" . $row['id'] . "' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                echo "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        }
    }

    public function DisplayBreakLine()
    {
        echo "==================================";
    }
    public function DisplayMeal($result)
    {
        if (mysqli_num_rows($result) > 0) {
            echo "<table class='table table-bordered table-striped'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>#</th>";
            echo "<th>Name</th>";
            echo "<th>Family members</th>";

            echo "<th>State</th>";

            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['RequestId'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['familysize'] . "</td>";
                echo "<td>" . $row['IsAccepted'] . "</td>";
                echo "<td>";
                echo "<a href='View/read.php?id=" . $row['id'] . "' title='View Record' data-toggle='tooltip'>
							<span class='glyphicon glyphicon-eye-open'></span>
						  </a>";
                echo "<a href='View/update.php?id=" . $row['id'] . "' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                echo "<a href='View/delete.php?id=" . $row['id'] . "' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                echo "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        }
    }
}
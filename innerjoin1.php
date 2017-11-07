
<!-- HEADER & BODY (start) -->
  <?php
    require("incl/header.php");
    require("incl/dbInfo.php");

    $query = "SELECT * FROM student";
    $result = $dbConnect ->query($query);
  ?>

<table>
    <thead>
        <tr>
            <th></th>
            <th>Navn</th>
            <th>Efternavn</th>
            <th>Køn</th>
            <th>Lokale</th>
        </tr>
    </thead>
    <tbody>

    <?php
        while ($row = $result -> fetch_assoc()) :
    ?>
        <tr>
            <td><a href="#" class="btn btn-success">Ændre</a><a href="#" class="btn btn-danger">Slet</a></td>
            <td><?=$row['first_name']?></td>
            <td><?=$row['last_name']?></td>
            <td><?=$row['gender']?></td>
            <?php

            $queryClass = "SELECT * FROM student_classroom INNER JOIN classroom ON classroom.id = student_classroom.classroom WHERE student_classroom.student = ".$row['id']." ";
            $resultClass = $dbConnect ->query($queryClass);
?>
            <?php
            foreach ($resultClass as $value) {

            echo "<td>$value[name]</td>";

}
?>

        </tr>
    <?php endwhile; ?>
    <tr>
        <td><a href="#" class="btn btn-warning">Opret Ny</a> </td>
    </tr>
    </tbody>
</table>


<!-- FOOTER & BODY (end) -->
<?php
    require("incl/footer.php");
?>

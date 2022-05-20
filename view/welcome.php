<table>
<thead>
    <tr>
        <th>Invoice number</th>
        <th>Dates</th>
        <th>Company</th>
    </tr>
</thead>
<tbody>
    <tr>
        <?php foreach ($array as $elem) {
            echo "<tr>";
                echo "<td>";
                echo $elem[0];
                echo "</td>";
                echo "<td>";
                echo $elem[1];
                echo "</td>";
                echo "<td>";
                echo $elem[2];
                echo "</td>";
            echo "<tr>";
        } ; ?>
    </tr>
</tbody>
</table>
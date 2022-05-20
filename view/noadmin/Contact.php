<h1>All contacts</h1>

<table>
    <thead>
        <tr>
            <th>Lastname</th>
            <th>Firstanme</th>
            <th>Phone</th>
            <th>Mail</th>
            <th>Company</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach ($array1 as $elem) {
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
                    echo "<td>";
                    echo $elem[3];
                    echo "</td>";
                    echo "<td>";
                    echo $elem[4];
                    echo "</td>";
                echo "<tr>";
            } ; ?>
        </tr>
    </tbody>
</table>

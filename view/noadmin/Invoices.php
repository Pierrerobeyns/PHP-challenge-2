<h1>All invoices</h1>

<table>
    <thead>
        <tr>
            <th>Invoice Number</th>
            <th>Date</th>
            <th>Company</th>
            <th>Type</th>
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
                echo "<tr>";
            } ; ?>
        </tr>
    </tbody>
</table>
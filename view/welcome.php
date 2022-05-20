<h1>Welcome</h1>

<h3>Last invoices :</h3>

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
            echo "<tr>";
        } ; ?>
    </tr>
</tbody>
</table>

<h3>Last contacts :</h3>

<table>
<thead>
    <tr>
        <th>Lastname</th>
        <th>Firstname</th>
        <th>Phone</th>
        <th>Mail</th>
        <th>Company</th>
    </tr>
</thead>
<tbody>
    <tr>
        <?php foreach ($array2 as $elem) {
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

<h3>Last Companies :</h3>

<table>
<thead>
    <tr>
        <th>Company</th>
        <th>VAT number</th>
        <th>Country</th>
        <th>Type</th>
    </tr>
</thead>
<tbody>
    <tr>
        <?php foreach ($array3 as $elem) {
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
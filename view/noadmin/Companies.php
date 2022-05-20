<h1>Companies directory</h1>

<h3>Client</h3>

<table>
<thead>
    <tr>
        <th>Name</th>
        <th>VAT number</th>
        <th>Country</th>
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

<h3>Suppliers</h3>

<table>
<thead>
    <tr>
        <th>Name</th>
        <th>VAT number</th>
        <th>Country</th>
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
            echo "<tr>";
        } ; ?>
    </tr>
</tbody>
</table>

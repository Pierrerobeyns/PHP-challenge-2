<h1>All invoices</h1>

<table>
    <thead>
        <tr>
            <th>Test</th>
            <th>Test</th>
            <th>Test</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($array as $elem) {
                echo "$elem[2]";
            }
        ?>
    </tbody>
</table>
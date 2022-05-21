<form action="./NewCompanies.php" method="post">
    <!--Name of the company-->
    <label for="NewCompanies">Company Name</label>
    <input type="text" class="name" id="newcompany" name="newcompany" placeholder="Company">

    <!--TVA Number-->
    <label for="NewCompanies">TVA Number</label>
    <input type="text" class="tva" id="tvanumber" name="tvanumber" placeholder="123-456-789">

    <!--Phone Number-->
    <label for="NewCompanies">Phone Number</label>
    <input type="tel" class="phone" id="phone" name="phone" placeholder="0123/456789" pattern="[0-9]{4}-[0-9]{6}" required>

    <!--Company Type-->
    <label for="company-type">Company Type</label>
    <select id="companytype" name="companytype">
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
    </select>

    <input type="submit" value="Submit" class="submit">
</form>
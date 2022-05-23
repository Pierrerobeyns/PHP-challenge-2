<form action="" method="post">
    <!--Name of the company-->
    <label for="NewCompanies">Company Name</label>
    <input type="text" class="name" id="newcompany" name="newcompany" placeholder="Company">

    <!--TVA Number-->
    <label for="NewCompanies">TVA Number</label>
    <input type="text" class="tva" id="tvanumber" name="tvanumber" placeholder="123-456-789">

    <!--Phone Number-->
    <label for="NewCompanies">Phone Number</label>
    <input type="tel" class="phone" id="phone" name="phone" placeholder="0123/456789">

    <!--Country -->
    <label for="NewCompanies">Country</label>
    <input type="text" class="country" id="country" name="country" placeholder="Country">

    <!--Company Type-->
    <label for="company-type">Company Type</label>
    <select id="companytype" name="companytype">
        <option value="Client">Client</option>
        <option value="Supplier">Supplier</option>
    </select>

    <input type="submit" value="Submit" class="submit">
</form>
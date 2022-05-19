<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../assets/style/style.css" />
    <title>New Companies</title>
</head>

<body>

    <h1>Create new company</h1>

    <div class="container">
        <form action="./NewCompanies.php">

            <!--Name of the company-->
            <!--<div class="name">-->
            <label for="NewCompanies">Company Name</label>
            <input type="text" id="newcompany" name="newcompany" placeholder="Company">
            <!--</div>-->

            <!--TVA Number-->
            <!--<div class="tva">-->
            <label for="NewCompanies">TVA Number</label>
            <input type="text" id="tvanumber" name="tvanumber" placeholder="123-456-789">
            <!--</div>-->

            <!--Phone Number-->
            <!--<div class="phone">-->
            <label for="NewCompanies">Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="0123/456789" pattern="[0-9]{4}-[0-9]{6}" required>
            <!--</div>-->

            <!--Company Type-->
            <label for="company-type">Company Type</label>
            <select id="companytype" name="companytype">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
            </select>

            <div class="submit">
                <input type="submit" value="Submit">
            </div>

        </form>
    </div>

</body>

</html>
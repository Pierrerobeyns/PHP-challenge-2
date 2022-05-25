<h1 align="center">COGIP challenge</h1>

<p align="center">
    <img src="https://img.shields.io/badge/Visual_Studio_Code-0078D4?style=for-the-badge&logo=visual%20studio%20code&logoColor=white" alt="Logo VScode">
    <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="Logo HTML">
    <img src="https://img.shields.io/badge/Sass-CC6699?style=for-the-badge&logo=sass&logoColor=white" alt="Logo SASS">
    <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" alt="Logo JS">
    <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="Logo PHP">
    <img src="https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white" alt="Logo MySQL">
    <img src="https://img.shields.io/badge/Figma-F24E1E?style=for-the-badge&logo=figma&logoColor=white" alt="Logo Figma">
    <img src="https://img.shields.io/badge/PHPMyAdmnin-90E59A.svg?style=for-the-badge&logo=phpmyadmin&logoColor=black" alt="Logo PHPmyadmin">
</p>

# Description

- Type of challenge: **consolidation**
- Duration: **10 days**
- Deadline: **27/05/2022 17:00**
- Team challenge: **5**
- The figma board is availaible [here](https://www.figma.com/file/YsWmPCHkGubRC8BEJ3sSmZ/COGIP)

# Objectives

Differents goals are carried out : 

- Use of different URL parameters and filename
- Use of sanitization to avoid SQL injections
- Validation of data
- Construction of a functional relational database
- Use of correct joins in SQL
- Use of aliases in your SQL request
- Implementation of a CRUD to read, add, modify and delete data
- Crypt password in a database
- Use an MVC structure
- Use a router
- Setup a session
- Allow access to certain page in regards to permissions

# Get started 

If you clone the repository and want to test the site, don't forget to adapt your password and username in the file `model>database.php` to connect to the database. 

```php
14    $this->pdo =  new \PDO("mysql:host=localhost;dbname=COGIP;charset=utf8", "USERNAME", "PASSWORD");
```

In addition, you must install the dependencies via the command 
```
composer install
```

# Differents acces mode 

If you wish to access the administrator mode, please use the username `jean-christian-ranu` and the password `ranu` on the login page. 

If you wish to access non-administrator mode, please use the username `muriel-perrache` and the password `perrache` on the login page. 

If you wish to access the visitor mode, please use your username and password created on the registration page. 

# Authors 

Front-end team : [@Axel](https://github.com/SIRIEZ-Axel), [@Phillipe](https://github.com/philouLeF), [@Pierre](https://github.com/Pierrerobeyns)

Back-end team : [@Loïc](https://github.com/CalcagnoLoic), [@Nicolas](https://github.com/Kurner)

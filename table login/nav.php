<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .header{
        position: fixed;
        top: 0;
        left: 46px;
        width: 100%;
        padding: 40px 35px;
        background:transparent ;
        align-items: center;
        z-index: 100;
        transition: .5s;
        display: flex;
    }
    .logo{
        font-size: 2.5rem;
        color: #754ef9;
        font-weight: 600;
        margin-right: auto;
    }
    *{
      text-decoration: none;
      margin: 0;
      padding: 0;
      border: none;
      outline: none;
      box-sizing: border-box;
    }
    .navbar a{
        color: #333;
        position: relative;
        margin-right: 50px;
        font-size: 24px;
        font-weight: 500;
        
    }


</style>

<body>
    <header class="header">
        <a href="#" class="logo">Navbar</a>
        <nav class="navbar">
            <a href="home.html"> Home</a>
            <a href="about.html"> About</a>
            <a href="service.html"> Service</a>
        </nav>

    </header>
</body>

</html>
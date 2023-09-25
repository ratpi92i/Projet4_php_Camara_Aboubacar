<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
        <nav>
            <div class="logo">
                <a href="index.php">BF-TOURISME</a>
            </div>
            <ul class="showmenu">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="services.php">Services</a></li>
             
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <div class="menu">
                    <div class="menu-line"></div>
                    <div class="menu-line"></div>
                    <div class="menu-line"></div>
            </div>
        </nav>
   
   

  
    <script>
    const menu = document.querySelector('.menu')
    const menuList = document.querySelector('nav ul')
    menu.addEventListener('click',()=>{
        menuList.classList.toggle('showmenu')
    })

    </script>
</body>
</html>
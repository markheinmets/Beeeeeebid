<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div side_menu>
    <ul>
            <?php
            $menuItems = array("Esmaabi", "Ennetus", "Vaimse tervise esmaabi", "Juhendid");
            ?>
    </ul>
    </div>
</body>
</html>


<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 w-96 fixed left-0 top-0 bottom-0">
    <div class=" h-24 flex justify-center items-center ">
        <img src="{{ asset('Logo.png') }}" alt="Logo" class="h-24">
    </div>
    <div class="flex w-full h-full  rounded-r-xl">

    </div>
</nav>

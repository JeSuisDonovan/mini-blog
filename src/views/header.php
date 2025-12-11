<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titre ?? 'Mon Site' ?></title>
    <style>
        :root{
            --color1: #e77d97ff;
            --color2: #5e3c4cff;
            --color3: #9f5578ff;
            --colorLink: #592ca0ff;
            --colorW: #ffffffff;
        }
        *{
            color: var(--colorW);
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        body{
            background-color: var(--color1);
            padding: 0;
            margin: 0;
        }
        header{
            background-color: var(--color3);
            padding: 20px;
        }
        header a{
            padding: 10px;
            background-color: var(--color2);
            text-decoration: none;
        }
        
        main{
            margin: 5vw 8vw;
        }
        
        table, th, td{
            min-width: 90%;
            border-collapse: collapse;
            border: 2px dashed var(--color3);
        }
        th, td{
            padding: 1vw
        }
        td a{
            color: var(--colorLink);
        }

        form{
            margin: 10px 0;
        }
        form input{
            color: var(--color2);
            background-color: var(--colorW);
            border: 2px solid var(--color3)
        }
        form input:hover{
            background-color: var(--color2);
            color: var(--colorW);
        }
        form label{
            margin: 0 10px;
        }

        .fl{
            display: flex;
        }
        .dr{
            flex-direction: row;
        }
        .dc{
            flex-direction: column;
        }
        .jc{
            justify-content: center;
        }
        .ac{
            align-items: center;
        }

        footer{
            background-color: var(--color3);
            padding: 20px;
            display: flex;
            flex-direction: row;
            justify-content: center;
        }
    </style>
</head>
<body>
<header>
    <a href="./index.php">Accueil</a>
</header>
<main>
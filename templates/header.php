<?php 
    include_once('helpers/url.php');
    include_once ('data/posts.php');
    include_once('data/categories.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet"> 



    <style>
        *{
            padding: 0;
            margin: 0;
            font-family: 'Montserrat', sans-serif;        
        }
        html{
            min-height: 100vh;
            position: relative;
        }

        main{
            margin-bottom: 270px;
        }

        nav{
            background-color: #161616;
        }

        #navbar{
            display: flex;
            flex-direction: row;
            justify-content: flex-end;
            padding: 20px;
            text-transform: uppercase;
        }
        #navbar a{
            text-decoration: none;
            color: #FFFFFF;
        }
        li{
            list-style-type: none;
            padding: 10px;
        }

        footer{
            width: 100%;
            position: absolute;
            bottom: 0;
            text-align: center;
            background-color: black;
            color: #FFFFFF;
            padding: 25px 0;
            font-weight: bold;
        }

       #title-container{
        text-align: center;
        
       }

       #title-container h1{
        font-size: 70px;
       }

        #posts-container {
        max-width: 1200px;
        margin: 0 auto;
        margin-top: 30px;
        display: flex;
        flex-wrap: wrap;
        }

        .post-box:first-child {
        min-width: 100%;
        }

        .post-box {
        flex: 1 1 0;
        margin-bottom: 20px;
        }

        .post-box:nth-child(3) {
        margin: 0 1%;
        }

        .post-box img {
        width: 100%;
        }

        .post-box .post-title {
        font-size: 24px;
        margin: 10px 0;
        }

        .post-box .post-title a {
        color: #000;
        transition: .5s;
        }

        .post-box .post-title a:hover {
        color: #999;
        }

        .post-box .post-description {
        color: #666;
        }

        .tags-container {
            margin-top: 10px;
        }

        .tags-container a {
        font-size: 14px;
        color: #333;
        display: inline-block;
        margin-right: 5px;
        }
        .hold{
            display: flex;
            align-items: center;
        }

        .content-container{
            padding: 20px;
        }
        .content-container p{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1.1em;
        }

        .content-container img{
            width: 800px;
            
        }
        .content-container h1{
            text-align: center;
            padding: 12px;
            text-transform: uppercase;
        }

       


        


     

    </style>
</head>
<body>
   <nav>
        <ul id="navbar">
            <li><a href="index.php">Home</a></li>
            <li><a href="">Categorias</a></li>
            <li><a href="">Sobre</a></li>
            <li><a href="contato.php">Contato</a></li>
        </ul>
   </nav>
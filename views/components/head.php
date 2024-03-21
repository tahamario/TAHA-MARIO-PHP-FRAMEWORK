<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Larcast</title>

    <style>
        * {
            font-family: sans-serif;
            margin: 0;
        }

        .nav {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            background-color: #2e3145;
            height: 50px;
        }

        .nav ul {
            display: flex;
            flex-direction: row;
        }

        .nav li {
            list-style: none;
            padding: 15px;
        }

        .nav li a {
            text-decoration: none;
            color: #fefefe;
            margin: 10px;
        }

        .breadcramb {
            background-color: #c0c6ef;
            height: 60px;
        }

        .breadcramb h1 {
            margin: 0 10px;
            padding: 10px;
        }

        .content {
            height: 100vh;
            padding: 10px;
        }

        .active-li {
            background-color: #323967;
        }

        .container {
            padding: 100px;
            height: inherit;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input[type="email"],input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #2e3145;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #636a93;
        }
    </style>
</head>

<body>
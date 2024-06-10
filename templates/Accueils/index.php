<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Center Image</title>
    
</head>
<body>
    <img src="logo1.png" alt="Logo1">
    <style>
        body {
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }

        img {
            position: relative;
            width: 800px; /* Adjust as needed */
            height: auto;
            animation: shine 2s infinite;
        }

        @keyframes shine {
            0% {
                filter: brightness(1);
            }
            50% {
                filter: brightness(2);
            }
            100% {
                filter: brightness(1);
            }
        }
    </style>
</body>
</html>

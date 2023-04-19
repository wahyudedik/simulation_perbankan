<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Bank | Digital</title>
    <style>
        #splash-screen {
            position: fixed;
            z-index: 9999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #splash-screen img {
            width: 80px;
            height: 80px;
        }
    </style>
</head>

<body>
    <div id="splash-screen">
        <img src="resources/Dist/img/Book.gif" alt="Logo">
    </div>
    <script>
        window.addEventListener('load', function() {
            setTimeout(function() {
                document.getElementById('splash-screen').style.display = 'none';
                window.location.href = 'app/Views/Auth/Login.php';
            }, 2000);
        });
    </script>
</body>

</html>
!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        i = 0;
        $(document).ready(function(){
            $("input").keypress(function(){
                $("span").text(i += 1);
            });
        });
    </script>
</head>
<body>

Enter your name: <input type="text">

<p>Keypresses: <span>0</span></p>

</body>
</html>

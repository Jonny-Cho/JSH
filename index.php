
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet">
    <title>Jeon Suhyun</title>
</head>

<body>
  <div class="container">
        <header id="logo">
            <h1>
                <a href="./">Jeon Suhyun</a>
            </h1>
        </header>
        <section class="content">
            <nav id="nav">
                <ul>
                    <?php
                        echo file_get_contents('list.txt');
                    ?>
                </ul>
            </nav>
            <?php
                if(empty($_GET['id']) === false) {
                    echo file_get_contents($_GET['id'].".txt");
                }
                else {
                echo file_get_contents('contact.txt');
                }
            ?>
        </section> <!--section END-->
        <script src="youtube.js"></script>
    </div> <!--container END-->
</body>
</html>

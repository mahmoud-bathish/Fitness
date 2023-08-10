<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./AdminPageStyle/style.css">
    <title>Admin Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
        }

        .side-bar{
            width: calc(100% / 7);
            height: 100vh;
            background:#eee;
        }

        .content {
            width: calc(600% / 7);
            height: 100vh;
        }

        .side-bar .admin-img{
            height: 20%;
            width: 100%;
        }

        .side-bar .admin-navigation {
            height: 60%;
            width: 100%;
        }

        .side-bar .admin-logout {
            height: 20%;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .side-bar .admin-logout .logout-link a{
            font-size:20px;
            text-decoration:none;
            font-weight:bold;
            color: black;
        }

        .admin-img .image-container img{
            width: 100px;
            height: 100px;
            border-radius: 50px;
        }

        .admin-img .image-container {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .admin-navigation{
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .admin-navigation .choices {
            height:100%;
            width: 100%;
            display:flex;
            align-items:center;
            justify-content:start;
            flex-direction:column;
        }

        .admin-navigation .choices div{
            width:100%;
            text-align:center;
            position:relative;
        }
        .admin-navigation .choices div.active{
            background: #FFF;
        }
        .admin-navigation .choices div a {
            padding:15px 0;
            text-decoration:none;
            color:black;
            width:100%;
            height:100%;
            display:block;
        }


    </style>
</head>
<body>
    <header>

    </header>
    <main>
        <div class="container">
            <div class="side-bar">
                <div class="admin-img">
                    <div class="image-container">
                        <img src="../assets/imgs/cat-01.jpg" alt="admin-img3">
                    </div>
                </div>
                <div class="admin-navigation">
                    <div class="choices">
                        <div class="programs-choice">
                            <a href="programs.php">Programs</a>
                        </div>
                        <div class="articles-choice">
                            <a href="articles.php">Articales</a>
                        </div>
                        <div class="trainees-choice">
                            <a href="trainees.php">Trainees</a>
                        </div>
                        <div class="users-choice">
                            <a href="users.php">Users</a>
                        </div>
                        <div class="payment-choice active">
                            <a href="payment.php">Payment</a>
                        </div>
                        <div class="logout-choice"><a href="logout.php">Logout</a></div>
                    </div>
                </div>
            </div>
            <div class="content">

            </div>
        </div>
    </main>
</body>
</html>
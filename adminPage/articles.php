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

        .articles-box {
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

        /* Start Articales */
        .content .container {
            position: relative;
            width: 100%;
            max-width: 75rem;
            padding: 0 1.5rem;
            margin: 0 auto;
        }

        .articles {
    position: relative;
height:300px;

  }
  .articles .container {
    display:flex;
    flex-wrap:wrap;
    gap: 40px;
}
.articles .box {
    min-width:250px;
    max-width:270px;
    box-shadow: 0 2px 15px rgb(0 0 0 / 10%);
    background-color: white;
    border-radius: 6px;
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s;
  }
  .articles .box:hover {
    transform: translateY(-10px);
    box-shadow: 0 2px 15px rgb(0 0 0 / 20%);
  }
  .articles .box .content {
    padding: 20px;
  }
  .articles .box .content h3 {
    margin: 0;
  }
  .articles .box .content p {
    margin: 10px 0 0;
    line-height: 1.5;
    color: #777;
  }
  .articles .box .info {
    padding: 20px;
    border-top: 1px solid #e6e6e7;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .articles .box .info a {
    color: var(--main-color);
    font-weight: bold;
  }
.main-title {
    text-align: center;
    margin-bottom: 30px;
    font-size: 24px;
    font-family: "Poppins", sans-serif;
    color: var(--text-color);
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
                        <div class="articles-choice active">
                            <a href="articles.php">Articales</a>
                        </div>
                        <div class="trainees-choice">
                            <a href="trainees.php">Trainees</a>
                        </div>
                        <div class="users-choice">
                            <a href="users.php">Users</a>
                        </div>
                        <div class="payment-choice">
                            <a href="payment.php">Payment</a>
                        </div>
                        <div class="logout-choice"><a href="logout.php">Logout</a></div>
                    </div>
                </div>
            </div>
            <div class="articles-box">
                <div class="">
                <div class="articles" id="articles">
                <div class="" style="width:100%;display:flex;flex-wrap:wrap;gap:40px;justify-content:center;">
                  <?php
                      require_once 'connection.php';
                      
                      $query = "SELECT * FROM articles";
                      
                      $result = mysqli_query($con,$query);
                      if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                              echo "<div class='box'>";
                              echo" <img src=" . $row["ImageUrl"] . " alt='' />";
                              echo"<div class='content'>";
                              echo "<h3>" . $row["Title"] . "</h3>";
                              echo " <p>" . $row["Description"] . "</p>";
                              echo "</div>";
                              echo "<div class='info'>";
                              echo '<a href="editArticle.php?articleID=' . $row["articleID"] . '">Edit</a>';
                              echo "  <i class='fas fa-long-arrow-alt-right'></i>";
                              echo "</div>";
                              echo "</div>";
                          }
                      }
                    ?>
 
                  <div class="box">
                    <img src="../assets/imgs/cat-02.jpg" alt="" />
                    <div class="content">
                      <h3>Test Title</h3>
                      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                    </div>
                    <div class="info">
                      <a href="editArtical.php">Edit</a>
                      <i class="fas fa-long-arrow-alt-right"></i>
                    </div>
                  </div>
                  <div class="box">
                    <img src="../assets/imgs/cat-03.jpg" alt="" />
                    <div class="content">
                      <h3>Test Title</h3>
                      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                    </div>
                    <div class="info">
                      <a href="editArtical.php">Edit</a>
                      <i class="fas fa-long-arrow-alt-right"></i>
                    </div>
                  </div>
                  <div class="box">
                    <img src="../assets/imgs/cat-04.jpg" alt="" />
                    <div class="content">
                      <h3>Test Title</h3>
                      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                    </div>
                    <div class="info">
                      <a href="editArtical.php">Edit</a>
                      <i class="fas fa-long-arrow-alt-right"></i>
                    </div>
                  </div>
                  <div class="box">
                    <img src="../assets/imgs/cat-05.jpg" alt="" />
                    <div class="content">
                      <h3>Test Title</h3>
                      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                    </div>
                    <div class="info">
                      <a href="editArtical.php">Edit</a>
                      <i class="fas fa-long-arrow-alt-right"></i>
                    </div>
                  </div>
                  <div class="box">
                    <img src="../assets/imgs/cat-06.jpg" alt="" />
                    <div class="content">
                      <h3>Test Title</h3>
                      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                    </div>
                    <div class="info">
                      <a href="editArtical.php">Edit</a>
                      <i class="fas fa-long-arrow-alt-right"></i>
                    </div>
                  </div>
                  <div class="box">
                    <img src="../assets/imgs/cat-07.jpg" alt="" />
                    <div class="content">
                      <h3>Test Title</h3>
                      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                    </div>
                    <div class="info">
                      <a href="editArtical.php">Edit</a>
                      <i class="fas fa-long-arrow-alt-right"></i>
                    </div>
                  </div>
                  <div class="box">
                    <img src="../assets/imgs/cat-08.jpg" alt="" />
                    <div class="content">
                      <h3>Test Title</h3>
                      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                    </div>
                    <div class="info">
                      <a href="editArtical.php">Edit</a>
                      <i class="fas fa-long-arrow-alt-right"></i>
                    </div>
                  </div>
                </div>
              </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
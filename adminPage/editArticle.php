<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            width:100%;
            height: 100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .formGroup{
            width:50%;
        }
        .formGroup div{
            margin:20px 0;
        }
        .formGroup .title input,
        .formGroup .img-url input{
            width:50%;
            padding:12px;
        }
        textarea{
            width:100%;
            height:200px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="formGroup">
            <form action="">
                <div class="top" style="display:flex;width:100%;">
                    <div class="title" style="padding-right:10px;">
                        <input type="text" name="Title">
                    </div>
                    <div class="img-url">
                        <input type="text" name="ImageUrl">
                    </div>
                </div>
                <div class="description">
                    <textarea name="Description" cols="30" rows="10"></textarea>
                </div>
                <div class="text">
                    <textarea name="Content" ></textarea>
                </div>
                <div class="buttons">
                    <a href="articles.php">Cancel</a>
                    <a href="?articleID">Edit</a><!--add php functionality -->
                </div>
            </form> 
        </div>
    </div>
</body>
</html>
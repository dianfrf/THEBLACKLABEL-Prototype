<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <title>406 Not Acceptable</title>
        <link rel="icon" type="image/png" href="<?=base_url()?>Asset/img/tbl.jpg">
        <link rel="stylesheet" href="<?=base_url()?>Asset/css/bootstrap.min.css">
    </head>
    <style>
        html, body{
            font-size:10px; background-color:rgb(18,18,18);
        }
        @font-face{
            font-family:Roboto; src:url('fonts/Roboto-Light.ttf'); 
        }
        @font-face{
            font-family:RobotoBold; src:url('fonts/Roboto-Bold.ttf'); 
        }
        h1{
            font-size:15rem; font-family:'RobotoBold'; letter-spacing:.04rem; font-weight:bold; text-align:center; color:rgb(237,237,237); margin-top:10%; 
        }
        h4{
            font-size:2.1rem; font-family:'Roboto'; letter-spacing:.04rem; font-weight:bold; text-align:center; color:rgb(237,237,237);
        }
        a{
            text-decoration:none;
        }
        button{
            border:.2rem solid rgb(182,45,45); outline:none !important; padding:1.05rem 1.75rem; font-size:1.45rem; font-family:'Roboto'; letter-spacing:.04rem; 
            font-weight:400; color:white; background-color:rgb(182,45,45); transition:.2s all;
        }
        button:hover, button:focus{
            background-color:rgb(152,15,15); border-color:rgb(152,15,15); transition:.2s all;
        }
        h5{
            font-size:1.45rem; font-family:'Roboto'; letter-spacing:.04rem; font-weight:400; color:rgb(237,237,237); text-align:center; margin-top:15%;
        }
    </style>
    <body>
        <div class="page-header">
            <div class="container">
                <h1>406</h1><br>
                <h4>Access to this page is not acceptable by administrator.</h4><br>
                <center><a href="<?=base_url()?>"><button>Back to Home</button></a></center>
            </div>
        </div>
        <div class="page-footer">
            <div class="container">
                <h5>Copyright &copy; 2020 The Black Label. All rights reserved</h5>
            </div>
        </div>
    </body>
</html>
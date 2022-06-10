<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Team</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">

        <style>
            *,
*::before,
*::after{
    box-sizing: border-box;
}
html{
    font-family: sans-serif;
    line-height: 1.15;
}
body{
    font-family: 'lato', sans-serif;
    color: #454545;
    font-weight: 300;
    background: #ffffff;
}
a{
    color: #333333;
    font-weight: 400;
    outline: none;
    text-decoration: none;
    transition: 0.5s;
}
a:hover,
a:focus{
    outline: none;
    text-decoration: none;
}
p{
    padding: 0;
    margin: 0 0 15px 0;
    color: #454545;
    font-weight: 300;
}
h1,
h2,
h3,
h4,
h5,
h6{
    padding: 0;
    margin: 0 0 15px 0;
    color: #333333;
    font-weight: 700;
}
img{
    width: 100%;
    height: auto;
}
.container{
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
.section-title{
    flex: 0 0 100%;
    max-width: 100%;
    margin-bottom: 80px;
    margin-top: 40px;
    text-align: center;
}
.section-title h1{
    display: inline-block;
    font-size: 35px;
    text-transform: uppercase;
    font-weight: 700;
    color: #000000;
    margin: 0 0 5px;
    position: relative;
}
.section-title h1::before{
    content: '';
    left: 0;
    position: absolute;
    height: 3px;
    right: 32%;
    background-color: #50c5fc;
    bottom: -5px;

}
.container .section-title h1::before{
    left: 30%;
}
.row{
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
.column{
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    flex: 0 0 100%;
    max-width: 100%;
}
.team{
    margin-bottom:30px ;
}
.team .team-img{
    position: relative;
    font-size: 0;
    text-align: center;
}
.team .team-img img{
    width: 160px;
    height: auto;
    border-radius: 100%;
    border: 20px solid #f3f4fa;
}

.team .team-content{
    padding: 80px 20px 20px 20px;
    margin-top: -80px;
    text-align: center;
    background: #f3f4fa;
    border-radius: 10px;
}
.team .team-content h2{
font-size: 25px;
font-weight: 400;
letter-spacing: 2px;
}
.team .team-content h3{
    font-size: 16px;
    font-weight: 300;
}
.team .team-content h4{
    font-size: 16px;
font-weight: 300;
letter-spacing: 1px;
font-style: italic;
margin-bottom: 0;
}
.team .team-content p{
    font-size: 16px;
    font-weight: 400;
    line-height: 22px;
}
.team .team-social{
    position: absolute;
    width: 100%;
    height: 100%;
    padding: 35px;
    top: 0;
    left:0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(255, 255, 255, .6);
    transition: all .3s;
    font-size: 0;
    z-index: 1;
    opacity: 0;
}
.team:hover .team-social{
    opacity: 1;
}
.team .team-social a{
    display: inline-block;
    width: 40px;
    height: 40px;
    margin-right:5px ;
    padding: 11px 0 10px 0;
    font-size: 16px;
    font-weight: 300;
    line-height: 16px;
    text-align: center;
    color: #ffffff;
    border-radius: 10px;
    transition: all .3s;
    margin-top: 50px;
}
.team .team-social a.social-tw{
    background: #00acee;
}
.team .team-social a.social-fb{
    background: #3b5998;
}
.team .team-social a.social-li{
    background: #0e76a8;
}
.team .team-social a.social-in{
    background: #3f729b;
}
.team .team-social a.social-yt{
    background: #c4302b;
}
.team .team-social a:last-child{
    margin-right: 0;
}
.team:hover .team-social a{
    margin-top: 0;
}
.team .team-social a:hover{
    background: #222222;
}


/* Mobile Responsive */

@media (min-width: 576px){
    .container{
        max-width: 540px;
    }
    .column{
        max-width: 50%;
    }
}
@media (min-width: 768px){
    .container{
        max-width: 720px;
    }
    .column{
        max-width: 33.333333%;
    }
}
@media (min-width: 992px){
    .container{
        max-width: 960px;
    }
    .column{
        max-width: 33%;
    }
}
@media (min-width: 1200px){
    .container{
        max-width: 1140px;
    }
   
}
        </style>
</head>

<body>
    <?php
    require 'header.php';
    ?>
    <br><br><br>

    <div class="container">
        <div class="section-title">
            <h1>Our Team Page</h1>
        </div>

        <div class="row">


            <div class="column">
                <div class="team">
                    <div class="team-img">
                        <img src="img/ceo.jpeg" alt="Team Image">
                    </div>
                    <div class="team-content">
                        <h2>Vatsal Vagadiya</h2>
                        <h3>CEO & Founder</h3>
                        <p>CE132</p>
                        <h4>vatsalv@gmail.com</h4>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="team">
                    <div class="team-img">
                        <img src="img/developer.jpg" alt="Team Image">
                    </div>
                    <div class="team-content">
                        <h2>Devanshi Rupala</h2>
                        <h3>Developer</h3>
                        <p>CE109</p>
                        <h4>devanshir@gmail.com</h4>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="team">
                    <div class="team-img">
                        <img src="img/designer.jpg" alt="Team Image">
                    </div>
                    <div class="team-content">
                        <h2>Shivam Kadchhi</h2>
                        <h3>Designer</h3>
                        <p>CE048</p>
                        <h4>shivamk@gmail.com</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <center>
                <p style="color:white">Copyright &copy <a style="color:blue" href="products.php">Crazycart</a> Store. All Rights Reserved.</p>
                <p style="color:white">This website made by our <a style="color:blue" href="team.php">Team</a></p>
            </center>
        </div>
    </footer>
</body>
</html>
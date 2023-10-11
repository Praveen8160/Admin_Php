<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap Navbar Sidebar - Fixed to Left or Right</title>
    <link rel="stylesheet"
          id="theme_link"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/materia/bootstrap.min.css"/>
    <link rel="stylesheet" href="navbar-fixed-right.min.css">
    <link rel="stylesheet" href="navbar-fixed-left.min.css">
    <link rel="stylesheet" href="docs.css">
    <script
            src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script src="docs.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
        <style>
               body{
        background-color:azure;
    }
.pic{
    height: 100px;
    width: 130px;
    /* border: 2px solid black; */
}
.head{
    padding-top: 10px;
    padding-left: 0px;
    border: 2px solid black;
    margin: 20px;
        background-color:azure;
        margin-left: 0px;
    
}
.main{
    margin-left: 394px;
    font-size:20px;
    border: 2px solid black;
    margin-top: 30px;
    margin-right: 60px;
    /* margin-left: 40px; */
    background-color:whitesmoke;
}
.form{
    /* padding-left: 300px;
    padding-right: 300px; */
    /* border: 2px solid ; */
    margin: 10px 300px 0px 300px;
    /* background-color:lightsteelblue; */
    padding-bottom: 30px;
}
            /* Googlefont Poppins CDN Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  /* margin: 0;
  padding: 0; */
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

.romti{
    margin: 30px 10px 10px 550px;
    border: 2px solid black;
}


.home-content .overview-boxes{
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  padding: 0 20px;
  margin-bottom: 26px;
}
.overview-boxes .box{
  display: flex;
  align-items: center;
  justify-content: center;  
  width: calc(100% / 4 - 15px);
  background: #fff;
  padding: 15px 14px;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}
.overview-boxes .box-topic{
  font-size: 20px;
  font-weight: 500;
}
.home-content .box .number{
  display: inline-block;
  font-size: 35px;
  margin-top: -6px;
  font-weight: 500;
}
.home-content .box .indicator{
  display: flex;
  align-items: center;
}
.home-content .box .indicator i{
  height: 20px;
  width: 20px;
  background: #8FDACB;
  line-height: 20px;
  text-align: center;
  border-radius: 50%;
  color: #fff;
  font-size: 20px;
  margin-right: 5px;
}
.box .indicator i.down{
  background: #e87d88;
}
.home-content .box .indicator .text{
  font-size: 12px;
}
.home-content .box .cart{
  display: inline-block;
  font-size: 32px;
  height: 50px;
  width: 50px;
  background: #cce5ff;
  line-height: 50px;
  text-align: center;
  color: #66b0ff;
  border-radius: 12px;
  margin: -15px 0 0 6px;
}
.home-content .box .cart.two{
   color: #2BD47D;
   background: #C0F2D8;
 }
.home-content .box .cart.three{
   color: #ffc233;
   background: #ffe8b3;
 }
.home-content .box .cart.four{
   color: #e05260;
   background: #f7d4d7;
 }
.home-content .total-order{
  font-size: 20px;
  font-weight: 500;
}
.home-content .sales-boxes{
  display: flex;
  justify-content: space-between;
  /* padding: 0 20px; */
}

.romit{
  margin: 50px 10px 10px 400px;

  padding-top: 10px;
}
</style>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top" style="width: 18%; padding-left: 10px;">
            <a class="navbar-brand" href="">Admin101</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                    aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarsExampleDefault" style="font-size: 18px;">
                <ul class="navbar-nav">
                    <div class="pic">
                        <img src="admin.jpg" alt="" style="width:125px ; height:100px;">
                    </div>
                    <li class="nav-item ">
                        <a href="home.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Product</a>
                        <div class="dropdown-menu">
                            <a href="index.html" class="dropdown-item">Add</a>
                            <a href="productview.html" class="dropdown-item">View</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Brand</a>
                        <div class="dropdown-menu">
                            <a href="addbrand.html" class="dropdown-item">Add</a>
                            <a href="brandview.html" class="dropdown-item">View</a>
                           
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                        <div class="dropdown-menu">
                            <a href="catadd.html" class="dropdown-item">Add</a>
                            <a href="catview.html" class="dropdown-item">View</a>
                           
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Report</a>
                        <div class="dropdown-menu">
                         <a href="reportpur.html" class="dropdown-item">Purchase</a>
                         <a href="reportsal.html" class="dropdown-item">sales</a>
                         </div>
                     </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manage</a>
                        <div class="dropdown-menu">
                            <a href="managecus.html" class="dropdown-item">Customer</a>
                            <a href="managesta.html"class="dropdown-item">Staff</a>
                           
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a href="order.html" class="nav-link">order</a>
                    </li>
                    <li class="nav-item ">
                        <a href="pyment.html" class="nav-link">Payment</a>
                    </li>
                   
                    <li class="nav-item" style="padding-top :280px;">
                        <a href="login.html" class="nav-link">Logout</a>
                    </li>
                </ul>  
            </div>
        </nav>
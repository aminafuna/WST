
<?php 
include "conn.php";
session_start();

$e=$_SESSION['email'];

$getname=mysqli_query($conn, "SELECT * FROM users WHERE Email_Address='$e' ");
while($row=mysqli_fetch_object($getname)){

    $name = $row -> FullName;

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?> Gallery Page</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
        }

        .row {
            padding: 50px;
        }
        
        .col1 {
            width: 25%;
            padding: 10px 10px 20px 10px;
            border: 2px solid whitesmoke;
            background-color: white;
            box-shadow: 10px 10px 5px gray;
            float: left;
            -ms-transform: rotate(7deg);
            -webkit-transform: rotate(7deg);
            transform: rotate(7deg);
        }

        .col1 span {
            font-weight: bold;
            font-size: 25px;
        }

        .col1:hover {
            transform: rotate(0deg);
        }

        .col2 {
            width: 25%;
            padding: 10px 10px 20px 10px;
            border: 2px solid whitesmoke;
            background-color: white;
            box-shadow: 10px 10px 5px gray;
            float: left;
            -ms-transform: rotate(-8deg);
            -webkit-transform: rotate(-8deg);
            transform: rotate(-8deg);
        }

        .col2 span {
            font-weight: bold;
            font-size: 25px;
        }

        .col2:hover {
            transform: rotate(0deg);
        }

        .col3 {
            width: 25%;
            padding: 10px 10px 20px 10px;
            border: 2px solid whitesmoke;
            background-color: white;
            box-shadow: 10px 10px 5px gray;
            float: left;
            -ms-transform: rotate(7deg);
            -webkit-transform: rotate(7deg);
            transform: rotate(7deg);
        }

        .col3 span {
            font-weight: bold;
            font-size: 25px;
        }

        .col3:hover:hover {
            transform: rotate(0deg);
        }

        .col4 {
            width: 25%;
            padding: 10px 10px 20px 10px;
            border: 2px solid whitesmoke;
            background-color: white;
            box-shadow: 10px 10px 5px gray;
            float: left;
            -ms-transform: rotate(-8deg);
            -webkit-transform: rotate(-8deg);
            transform: rotate(-8deg);
        }

        .col4 span {
            font-weight: bold;
            font-size: 25px;
        }

        .col4:hover:hover {
            transform: rotate(0deg);
        }

        .row:after {
            content:" ";
            display: table;
            clear: both;
        }

        @media screen and (max-width:600px) {
            .col1 {
                width: 100%;
            }
            .col2 {
                width: 100%;
            }
            .col3 {
                width: 100%;
            }
            .col4 {
                width: 100%;
            }
        }
 {
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    margin: 0;
    background-color:rgb(129, 197, 224);
    text-align: center;
}

nav {
    background-color: cornflowerblue;
    padding: 15px 0;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

nav a {
    text-decoration: none;
    color: white;
    font-weight: bold;
    margin: 0 10px;
}

nav a:hover {
    color: purple;
    text-decoration: underline;
}

h1 {
    font-size: 24px;
    margin: 20px 0;
}

.row {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
    padding: 50px 20px;
}

.card {
    width: 300px;
    background: white;
    padding: 15px;
    border-radius: 10px;
    box-shadow: 10px 10px 5px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease;
}

.card img {
    width: 100%;
    border-radius: 5px;
}

.card span {
    display: block;
    font-size: 20px;
    font-weight: bold;
    margin: 10px 0;
}

.card p {
    font-size: 14px;
    text-align: justify;
}

.card:nth-child(odd) {
    transform: rotate(7deg);
}

.card:nth-child(even) {
    transform: rotate(-8deg);
}

.card:hover {
    transform: rotate(0deg);
}

@media screen and (max-width: 768px) {
    .row {
        flex-direction: column;
        align-items: center;
    }
    
    .card {
        width: 90%;
        transform: none !important;
    }
}

    </style>

</head>
<body>

<nav>
    <center>
    <h1> <?php echo $name; ?>'s WEBSITE POST</h1>
    <a href="userhome.php"> HOME </a> |
    <a href="gallery.php"> GALLERY </a> |
    <a href="about.php"> ABOUT </a> |
    <a href="createpost.php"> CREATE POST </a> |
    <a href="update_profile.php"> UPDATE PROFILE </a> |
    <a href="index.php"> LOGOUT </a>
    </center>
</nav>
    

<h1> This Is Your Post </h1>
    
    <div class="row">

        <div class="col1">
            <img src="img copy/molo mansion.jfif" width="100%">
            <span>Molo Mansion</span>
            <p class="des1">The Molo Mansion, also known as the Yusay-Consing Mansion, 
                is one of the most outstanding historical homes in the Philippines. 
                Among its most notable features are its high ceilings, Neoclassical 
                balustrades, and decorative carvings. It stands across the town plaza 
                and St. Anne Parish Church in the Molo district.</p>
       </div>

       <div class="col2">
            <img src="img copy/museo iloilo.jfif" width="100%">
            <span>Museo Iloilo</span>
            <p class="des2">Museo Iloilo is a provincial museum located near the Iloilo 
                Provincial Capitol in Iloilo City, Philippines. It is the first 
                government-sponsored museum in the Philippines outside of Metro Manila.
                The museum houses a collection of Iloilo's cultural heritage.</p>
       </div>

       <!---->

       <div class="col3">
            <img src="img copy/sm city iloilo.jpg" width="100%">
            <span>SM City Iloilo</span>
            <p class="des3">SM City Iloilo is a large shopping mall in Mandurriao, Iloilo City,
                Philippines, owned and operated by SM Prime Holdings. It is the 8th SM Supermall
                built by the company. It is located along Senator Benigno Aquino Jr. Avenue
                in the district of Mandurriao.</p>
       </div>

       <div class="col4">
            <img src="img copy/fort san pedro.jpg" width="100%">
            <span>Fort San Pedro</span>
            <p class="des4">Fort San Pedro or Fort Nuestra Senora del Rosario is located along 
                San Pedro Drive in the domestic port area. Quadrilateral in shape, the fort 
                was built between 1603 and 1616 and measured 60 by 60 meters. The walls were
                composed of cut-outs of Guimaras rocks and coral stones from along the Panay Coast.</p>
      </div>
</body>
</html>
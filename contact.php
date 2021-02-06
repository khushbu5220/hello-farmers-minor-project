<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
	*{ margin: 0; padding: 0;}


.navsection{
width: 100%;  background-color: orange;
display: flex; justify-content: space-around;
align-item: center;
background-image: linear-gradient(to top, #fff 60%, #2DF90E 40%);
}
.logo{
width: 40%;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
color: #fff;
background-image: linear-gradient(#FFA500 40%, #FF8C00 60%);
padding-left: 100px;
box-sizing: border-box;
}
.logo h3{
text-transform: uppercase;
font-size: 2rem;
animation: aagepichhe 2s linear infinite;
animation-direction: alternate;
}
@keyframes aagepichhe{
from{ padding-left: 40%; }
to{ padding-right: 40%; }
}
nav{
width: 60%;
display: flex;
justify-content: space-around;
 
}
nav a{
text-decoration: none;
text-transform: uppercase;
color: #000;
font-weight: 800;
font-size: 17px;
position: relative;
}
nav a:nth-child(3n+0){
color: #FFA500;
}

nav a:before{
content: "";
position: absolute;
top: 110%;
left: 0;
width: 0;
height: 2px;
border-bottom: 2px solid #FFA500;
transition: all 0.4s linear;

}

nav a:hover:before{
width: 100%;
}
nav a:hover {
	color: #FF8C00;
	text-decoration: none;
}
        body {
                 background-image: url('contact.jpg');
                   background-repeat: no-repeat;
                  background-attachment: fixed; 
                  background-size: 100% 100%;
                }
            .register .nav-tabs .nav-link:hover{
                border: none;
            }
            .text-align{
                margin-top: -3%;
                margin-bottom: -9%;

                padding: 10%;
                margin-left: 30%;
            }
            .form-new{
                margin-right: 22%;
                margin-left: 20%;
            }
            .register-heading{
                margin-left: 21%;
                margin-bottom: 10%;
                color: red;
            }
            .register-heading h1{
                margin-left: 21%;
                margin-bottom: 10%;
                color: #e9ecef;
            }
/*            .register{
                background: -webkit-linear-gradient(left, #055a4f, #00c6ff);
                margin-top: 3%;
                padding: 3%;
                border-radius: 2.5rem;
            }*/
            .btnSubmit
            {
                width: 50%;
                border-radius: 1rem;
                padding: 1.5%;
                color: #fff;
                background-color: #03612e;
                border: none;
                cursor: pointer;
                margin-right: 6%;
                color: rgb(246, 246, 252);
                margin-top: 4%;
            }

    </style>

</head>
<body>
<section class="navsection">
<div class="logo">
<h3>Contact Us</h3>
</div>
<nav>
<a href="index.php" >Home</a>
<a href="crops.php">Crops</a>
<a href="contact.php" class="nth-child(3n+0)">Contact Us</a>
<a href="about.php">About Us</a>
</nav>
</section>
    
<div class="container register">

            <div class="row">
                <div class="col-md-12">
                        <div class="tab-pane fade show active text-align form-new" id="home" role="tabpanel" aria-labelledby="home-tab">
                            
                            <div class="row register-form">
                                <div class="col-md-12">
                                    <form method="post" autocomplete="off" name="google-sheet">
                                        <div class="form-group">
                                            <input type="text" name="Name" class="form-control" placeholder="Your Name *" value="" required=""/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="Email" class="form-control" placeholder="Your Email *" value="" required=""/>
                                        </div>
                                        <div id="msg-box" class="form-group">
                                            <input type="text" name="Message" class="form-control" placeholder="Enter your message *" value="" required=""/>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="submit" class="btnSubmit btn-block" value="Submit" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
          <script>

		  
            const scriptURL = 'https://script.google.com/macros/s/AKfycbyLINVJhWNz0E4s4fVF7GY3Qxj7-kNmlWr2MTE0rTE_UCgO1KWR/exec'
            const form = document.forms['google-sheet']
		  
            form.addEventListener('submit', e => {
              e.preventDefault()
              fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => {
                        alert("Thanks for your valuable feedback...")
                      form.reset();  
                })
        
                .catch(error => console.error('Error!', error.message))
            })
					 
          </script>
 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		</form>
</body>
</html>
























.main_nav > ul {
  display: flex;
}
.main_nav {
background: rgba(58, 204, 0, 0.6);
}
.main_nav, .main_nav * {
 
  list-style: none;
}
.main_nav > ul > li{
	
	display: inline-block;
	margin: 0 0 0 0;
	font-size: 20px;
	list-style-position: inside;
    padding-right: 30px;
	padding-top: 10px;
}
.main_nav ul > li > a{
	color: #fff;
	transition: all 0.3s ease-out;
	text-decoration:none;
	position: relative;
}
.main_nav a:hover, .main_nav .active > a, .main_nav li:hover > a {
  color: #f12626;
  
}

.main_nav ul > li a:before{
content: "";
position: absolute;
top: 110%;
left: 0;
width: 0;
height: 2px;
border-bottom: 3px solid #f12626;
transition: all 0.4s linear;
}
.main_nav ul > li a:hover:before{
width: 100%;
}
.main_nav ul > li a:hover {
	color: #f12626;
}
.main_nav{
width: 100%;
display: flex;
justify-content: space-around;
}
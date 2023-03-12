
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Dashboard</title>
	<link rel="stylesheet" type="text/css" href="home.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
	<div class="side-bar">
		<div>
			<center>
			<img src="Ebook.png" width="150px">
			</center>
		</div>	
		<ul>
			
			<li>
				<a href="Home.php" class="active">
				<i class="fa-solid fa-house"></i>
				<span class="links_name">&nbsp;Home Page</span>
				</a>
			</li>
		
			<li>
				<a href="ViewBooks.php" class="active">
				<i class="fa-solid fa-book"></i>
				<span class="links_name">&nbsp;View Books</span>
				</a>
			</li>
		
			<li>
				<a href="ViewUser.php" class="active">
				<i class="fa-solid fa-user"></i>
				<span class="links_name">&nbsp;View User</span>
				</a>
			</li>
			
			<li>
				<a href="ViewMessage.php" class="active">
				<i class="fa-solid fa-message"></i>
				<span class="links_name">&nbsp;View Message</span>
				</a>
			</li>
		
			<li>
				<a href="History.php" class="active">
				<i class="fa fa-history" aria-hidden="true"></i>
				<span class="links_name">&nbsp;View History</span>
				</a>
			</li>
			<li style="margin-top: 150px;">
				<a href="../login.php" class="active"> 
				<i class="fa-solid fa-right-from-bracket"></i>
				<span class="links_name">&nbsp;Log out</span>
				</a>
			</li>
			
		</ul>
	</div>

	<div class="container">
		<div class="header">
			<div class="nav">
				<div class="search">
					<input type="text" placeholder="Search..">
					<button type="submit"><img src="search.png" style="height: 30px;"></button>
				</div>
			</div>
			<div class="user">
				<a href="#" class="btn">Home Page</a>
					&nbsp;	&nbsp; &nbsp;	&nbsp;
			</div>
			<div class="user">
				<a href="addbook.php" class="btn">Add New Books</a>
					&nbsp;	&nbsp; &nbsp;	&nbsp;
			</div>
		</div>

		<div class="Title"> 
		<h1 style="margin-top:65px;text-align:center;color:#7b200a;font-size:80px; font-weight:bold;text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black" class="text-center">Welcome to EbookMoNa</h1>
		</div>
	
		
		<div class="add" style="position:static;">
		<div class="row">
			<div class="col-xl-3 col-md-6 mb-4">
		    <div class="card border-left-primary shadow h-100 py-2">
		        <div class="card-body">
		            <div class="row no-gutters align-items-center">
		                <div class="col mr-2">
		                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Super Admin</div>
		                    <div class="h5 mb-0 font-weight-bold text-gray-800">
		                        <!--?php
		                        require '../config.php';
		                        $query = "SELECT user_type FROM user_form WHERE user_type= 'admin'";  
		                        $query_run = mysqli_query($conn, $query);
		                        $row = mysqli_num_rows($query_run);
		                        echo '<h4>'.$row.'</h4>';
		                        ?-->
		                    </div>
		                </div>
		                <div class="col-auto">
		                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<div class="col-xl-3 col-md-6 mb-4">
		    <div class="card border-left-primary shadow h-100 py-2">
		        <div class="card-body">
		            <div class="row no-gutters align-items-center">
		                <div class="col mr-2">
		                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Librarian</div>
		                    <div class="h5 mb-0 font-weight-bold text-gray-800">
		                        <!--?php
		                        require '../config.php';
		                        $query = "SELECT user_type FROM user_form WHERE user_type= 'trade'";  
		                        $query_run = mysqli_query($conn, $query);
		                        $row = mysqli_num_rows($query_run);
		                        echo '<h4>'.$row.'</h4>';
		                        ?-->
		                    </div>
		                </div>
		                <div class="col-auto">
		                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
		                </div>
		            </div>
		        </div>
		    </div>
		</div> 
		</div>
		</div>


		<div class="wrapper"> 
		<h2 style="font-weight:bold;font-size:35px;">Library</h2>
		<div class="boxcontainer">
		    <div class="box">
		    	<i class="fas fa-user-nurse"style="font-size: 35px;"></i>
		    	<h3>Nursing</h3>
		    		<p>This is the College of Nursing Books</p>
		    		<a href="ViewBooks.php" class="btn1">Show Books</a>
		    </div>
		    <div class="box">
		    	<i class="fa fa-desktop" aria-hidden="true"style="font-size: 35px;"></i>
		    	<h3>Computer Study</h3>
		    		<p>This is the College of Computer Studies Books</p>
		    		<a href="ViewBooks.php" class="btn1">Show Books</a>
		    </div>

		    <div class="box">
		    	<i class="fa-solid fa-handcuffs"style="font-size: 35px;"></i>
		    	<h3>Criminology</h3>
		    		<p>This is the College of Criminology Books</p>
		    		<a href="ViewBooks.php" class="btn1">Show Books</a>
		    </div>

		    <div class="box">
		    	<i class="fa-solid fa-anchor"style="font-size: 35px;"></i>
		    	<h3>Marine</h3>
		    		<p>This is the College of Marine Books</p>
		    		<a href="ViewBooks.php" class="btn1">Show Books</a>
		    </div>

		    <div class="box">
		    	<i class="fa-solid fa-user-graduate"style="font-size: 35px;"></i>
		    	<h3>Basic Education</h3>
		    		<p>This is the College of Education</p>
		    		<a href="ViewBooks.php" class="btn1">Show Books</a>
		    </div>

		    <div class="box">
		    	<i class='fas fa-drafting-compass'style="font-size: 35px;"></i>
		    	<h3>Engineering</h3>
		    		<p>This is the College of Engineering</p>
		    		<a href="ViewBooks.php" class="btn1">Show Books</a>
		    </div>

	      </div>
		
	</div>



	</div>
	
</body>
<style>
.container {
	position: absolute;
	right: 0;
	width: 100vw;
	height: 150vh;
	background: white;
}

.wrapper{
	margin: 10px auto;
	padding: 0 10%;
	padding-bottom: 10px;
	text-transform: capitalize;

}

.boxcontainer{
	display: grid;
	gap: 24px;
	grid-template-columns: repeat(auto-fit,minmax(270px, 1fr));
}
.box{
	height: 250px;
	padding: 20px;
	text-align: center;
	border: solid;
	border-radius: 0px;
	background: orange;
	}
.box img{
	height: 70px;
}
.box h3{
	color:black;
	padding: 10px 0;
	font-size: 20px;
}
.box p{
	color: #black;
	font-size: 14px;
	line-height: 1.6;
}
.btn1{
	color: #fff;
	border: none;
	outline: none;
	font-size: 15px;
	margin-top: 10px;
	padding: 8px 15px;
	background: #333;
	display: inline-block;
	text-decoration: none;
}
.btn1:hover{
	letter-spacing: 1px;
}
.btn1:hover{
	transform: scale(1.03);
}

</style>
</html>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
  :root {
    --text-color: white;
    --bg-color: #E8EAE3;
    --hover-color: #FA2742;
    --secondary-color: #373833;
    --title-font: 'Philosopher', sans-serif;
    --logo-font: 'Pacifico', cursive;
    --primary-font: 'Poppins', sans-serif;
  }
  .navbar{
      display: flex;
      justify-content: space-between;
      align-items: center;
      top: 10px;
      margin: 0 25px;
      border-radius: 10px;
      background-color: rgba(0, 0, 0, 0.22);
      backdrop-filter: blur(40px);
      box-shadow: 10px 10px 70px 70px rgb(0 0 0 / 44%);
      position: fixed;
      width: 95%;
      padding: 10px 0px;
      font-family: var(--primary-font);
      z-index: 1;

  }
  .brand-name h1 {
    font-size: 2.4rem;
    font-family: var(--logo-font);
    font-weight: 400;
    letter-spacing: .1rem;
    color: var(--text-color);
}

.brand-name h1 span {
    color: var(--secondary-color);
}

  .navbar-links ul{
      margin: 0;
      padding: 0;
      display: flex;
  }
  .navbar-links li{
      list-style: none;


  }
  .navbar-links li a{
      text-decoration: none;
      color: white;
      padding: 1rem;
      display: block;
  }
  .navbar-links li:hover{
      background-color: #a7a7a7;
      border-radius: 10px;
  }
  .toggle-button{
      position: absolute;
      top: 1.5rem;
      right: 1rem;
      display: none;
      flex-direction: column;
      justify-content: space-between;
      width: 30px;
      height: 21px;
  }
  .toggle-button .bar {
      height: 3px;
      width: 100%;
      background-color: white;
      border-radius: 10px;
  }
  @media(max-width: 750px){
      .toggle-button{
          display: flex;
      }
      .navbar-links{
          display: none;
          width: 100%;
      }
      .navbar{
          flex-direction: column;
          align-items: flex-start;
      }
      .navbar-links ul{
          width:100%;
          flex-direction: column;
      }
      .navbar-links li{
          text-align: center;
      }
      .navbar-links li a{
          padding: .5rem 1rem;
      }
      .navbar-links.active {
          display: flex;
      }

      .home-container .home-content .heading{
          display: none;
      }
      .responsive-heading{
          display: flex;
          font-family: var(--title-font);
          font-size: 50px;
          font-weight: 600;
      }
      .navbar{
          margin: 0 12px;
      }

  }
</style>
<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin = true;
}
else{
  $loggedin = false;
}


echo '<nav class="navbar">
<div class="brand-name">
  <a href="http://localhost/Project/" style="text-decoration: none;">
    <h1>Home <span>Rental</span></h1>
  </a>
</div>
<a href="#" class="toggle-button">
  <span class="bar"></span>
  <span class="bar"></span>
  <span class="bar"></span>
</a>

  <div class="navbar-links">
    <ul class="nav-list">
    <li class="nav-items"><a href="welcome.php">Home</a></li>';

    if(!$loggedin){
      echo '<li class="nav-items"><a href="login.php">Login</a></li>
      <li class="nav-items"><a href="signup.php">Sign Up</a></li>';
    }

    if($loggedin){
      echo '<li class="nav-items"><a href="addproperty.php">Add Property</a></li>
      <li class="nav-items"><a href="Viewproperty.php">View Property</a></li>
      <li class="nav-items"><a href="Viewcard.php">View Card</a></li>
      <li class="nav-items"><a href="logout.php">Logout</a></li>';
    }
    echo ' 
    </ul>
  </div>

</nav>';

// ---------------------- Old Navbar---------------------------

// echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
//   <div class="container-fluid">
//     <a class="navbar-brand" href="http://localhost/Project/">Home Rental</a>
//     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
//       <span class="navbar-toggler-icon"></span>
//     </button>
    
//     <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
//     <ul class="navbar-nav ml-auto">
//         <li class="nav-item">
//           <a class="nav-link" aria-current="page" href="welcome.php">Home</a>
//         </li>';
//         if(!$loggedin){
//           echo ' <li class="nav-item">
//           <a class="nav-link" href="login.php">Login</a>
//         </li>
//         <li class="nav-item">
//           <a class="nav-link" href="signup.php">Signup</a>
//         </li>';
//         }
//         if($loggedin){
//           echo '<li class="nav-item">
//           <a class="nav-link" aria-current="page" href="addproperty.php">Add Property</a>
//         </li>
       
//         <li class="nav-item">
//           <a class="nav-link" aria-current="page" href="Viewproperty.php">View Property</a>
//         </li>
//         <li class="nav-item">
//           <a class="nav-link" aria-current="page" href="Viewcard.php">View Card</a>
//         </li>
//           <li class="nav-item">
//           <a class="nav-link" href="logout.php">Logout</a>
//         </li>';
//         }
        
//     echo '</ul>
//     </div>
//   </div>
// </nav>';
?>
<script>
  const toggleButton = document.getElementsByClassName('toggle-button')[0]
  const navbarLinks = document.getElementsByClassName('navbar-links')[0]

  toggleButton.addEventListener('click', () => {
        navbarLinks.classList.toggle('active')
  } )
</script>
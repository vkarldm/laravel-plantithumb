<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PlantiThumb | Messages</title>
  <link rel="icon" type="url" href="https://i.ibb.co/gvrdcqf/279907607-397731735539573-6502971206019149935-n.gif">
    <link rel="stylesheet" href={{ asset('css/bootstrap.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/profile.css'); }} >
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> <!-- google fonts -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'> <!-- boxicons -->
  
    <link rel="stylesheet" href={{ asset('css/bootstrap.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/home.css'); }} >
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> <!-- google fonts -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'> <!-- boxicons -->
  <link rel="stylesheet" href={{ asset('css/bootstrap.css') }}>
  <link rel="stylesheet" href={{ URL::asset('css/contacts.css'); }} >
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> <!-- google fonts -->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'> <!-- boxicons -->
</head>
<body class="overflow-hidden">
  <!-- navbar -->
  <header class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid nav-home shadow-lg">
          <a href = "{{ url('/admin')}}" class="navbar-brand nav-labels"><img src="https://i.ibb.co/gvrdcqf/279907607-397731735539573-6502971206019149935-n.gif" class = "plant-logo" border="0"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <style>
              @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap');
            </style>
            <ul class="navbar-nav">
              {{-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link nav-labels-text" href="{{ url('/messages')}}">Messages</a>
              </li>
            </ul>

            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                {{-- <button class="btn search-logo" type="submit"><img src="https://i.ibb.co/CtcCGJD/image.png" alt="image" border="0"></button> --}}
            </form>

  


            <!-- icons -->
            <span class="border border-secondary border-3 mx-2 mt-4 rounded icons_buttons">
              <a href = "{{ url('sales_history')}}"><i class='bx bx-line-chart bx-md px-1 icons' data-bs-toggle="tooltip" data-bs-placement="bottom" title="Sales History"></i></a>
            </span>

            <span class="border border-secondary border-3 mx-2 mt-4 rounded icons_buttons">
              <a href = "{{ url('profile')}}"><i class='bx bx-user-circle bx-md px-1 icons' data-bs-toggle="tooltip" data-bs-placement="bottom" title="My Profile"></i></a>
            </span>

            
            <span class="border border-secondary border-3 mx-2 mt-4 rounded icons_buttons">
              <a href = "{{ url('')}}"><i class='bx bx-log-out bx-md px-1 icons' data-bs-toggle="tooltip" data-bs-placement="bottom" title="Log-Out"></i></a>
            </span>
            



          </div>
        </div>
    </header>
  <div class="d-flex p-0">
      <!-- Contact List -->
    <div id="Contacts"class="d-flex flex-column">
      <span class="border-end border-4 ">
          <div id="messages"class="sticky-top bg-light input-group">
                <input type="search" class="form-control rounded-pill" placeholder="Search Contacts" aria-describedby="search-button">
                <button type="submit"class=btn id="search-button"><i class='bx bx-search'></i></button>   
          </div>
        <!--looped list from database -->
          <ul id="contactList"class="list-group ">
            <li id="contact"class="list-group-item">
              <a href="#" class="d-flex p-0 rounded active link-dark" aria_current="page"> 
              <div>
                <img src="https://i.ibb.co/VNDZ79y/vijayformal.png" class="card-img-top h-100 border border-3 border-success rounded-circle">
              </div>
              <div >
                <h5>Customer Name</h5>
                <p>last message</p>
              </div>
              </a>
            </li>
            <li id="contact"class="list-group-item">
              <a href="#" class="d-flex p-0 rounded link-dark" aria_current="false"> 
              <div>
                <img src="https://i.ibb.co/VNDZ79y/vijayformal.png" class="card-img-top h-100 border border-3 border-success rounded-circle">
              </div>
              <div >
                <h5>Customer Name</h5>
                <p class="fw-bold">last message</p>
              </div>
              </a>
            </li>
            <li id="contact"class="list-group-item">
              <a href="#" class="d-flex p-0 rounded link-dark" aria_current="false"> 
              <div>
                <img src="https://i.ibb.co/VNDZ79y/vijayformal.png" class="card-img-top h-100 border border-3 border-success rounded-circle">
              </div>
              <div >
                <h5>Customer Name</h5>
                <p class="fw-bold">last message</p>
              </div>
              </a>
            </li>
            <li id="contact"class="list-group-item">
              <a href="#" class="d-flex p-0 rounded link-dark" aria_current="false"> 
              <div>
                <img src="https://i.ibb.co/VNDZ79y/vijayformal.png" class="card-img-top h-100 border border-3 border-success rounded-circle">
              </div>
              <div >
                <h5>Customer Name</h5>
                <p class="fw-bold">last message</p>
              </div>
              </a>
            </li>
            <li id="contact"class="list-group-item">
              <a href="#" class="d-flex p-0 rounded link-dark" aria_current="false"> 
              <div>
                <img src="https://i.ibb.co/VNDZ79y/vijayformal.png" class="card-img-top h-100 border border-3 border-success rounded-circle">
              </div>
              <div >
                <h5>Customer Name</h5>
                <p class="fw-bold">last message</p>
              </div>
              </a>
            </li>
            <li id="contact"class="list-group-item">
              <a href="#" class="d-flex p-0 rounded link-dark" aria_current="false"> 
              <div>
                <img src="https://i.ibb.co/VNDZ79y/vijayformal.png" class="card-img-top h-100 border border-3 border-success rounded-circle">
              </div>
              <div >
                <h5>Customer Name</h5>
                <p class="fw-bold">last message</p>
              </div>
              </a>
            </li>
            <li id="contact"class="list-group-item">
              <a href="#" class="d-flex p-0 rounded link-dark" aria_current="false"> 
              <div>
                <img src="https://i.ibb.co/VNDZ79y/vijayformal.png" class="card-img-top h-100 border border-3 border-success rounded-circle">
              </div>
              <div >
                <h5>Customer Name</h5>
                <p class="fw-bold">last message</p>
              </div>
              </a>
            </li>
            <li id="contact"class="list-group-item">
              <a href="#" class="d-flex p-0 rounded link-dark" aria_current="false"> 
              <div>
                <img src="https://i.ibb.co/VNDZ79y/vijayformal.png" class="card-img-top h-100 border border-3 border-success rounded-circle">
              </div>
              <div >
                <h5>Customer Name</h5>
                <p class="fw-bold">last message</p>
              </div>
              </a>
            </li>
            <li id="contact"class="list-group-item">
              <a href="#" class="d-flex p-0 rounded link-dark" aria_current="false"> 
              <div>
                <img src="https://i.ibb.co/VNDZ79y/vijayformal.png" class="card-img-top h-100 border border-3 border-success rounded-circle">
              </div>
              <div >
                <h5>Customer Name</h5>
                <p class="fw-bold">last message</p>
              </div>
              </a>
            </li>
            <li id="contact"class="list-group-item">
              <a href="#" class="d-flex p-0 rounded link-dark" aria_current="false"> 
              <div>
                <img src="https://i.ibb.co/VNDZ79y/vijayformal.png" class="card-img-top h-100 border border-3 border-success rounded-circle">
              </div>
              <div >
                <h5>Customer Name</h5>
                <p class="fw-bold">last message</p>
              </div>
              </a>
            </li>
            <li id="contact"class="list-group-item">
              <a href="#" class="d-flex p-0 rounded link-dark" aria_current="false"> 
              <div>
                <img src="https://i.ibb.co/VNDZ79y/vijayformal.png" class="card-img-top h-100 border border-3 border-success rounded-circle">
              </div>
              <div >
                <h5>Customer Name</h5>
                <p class="fw-bold">last message</p>
              </div>
              </a>
            </li>
            <li id="contact"class="list-group-item">
              <a href="#" class="d-flex p-0 rounded link-dark" aria_current="false"> 
              <div>
                <img src="https://i.ibb.co/VNDZ79y/vijayformal.png" class="card-img-top h-100 border border-3 border-success rounded-circle">
              </div>
              <div >
                <h5>Customer Name</h5>
                <p class="fw-bold">last message</p>
              </div>
              </a>
            </li>
            
            
           
          </ul>      
        </span>
    </div>

    <!-- Fetch Conversation from Chosen Customer -->
    <div>
      <p >test</p>
    </div>
  </div>
    
</body>
</html>
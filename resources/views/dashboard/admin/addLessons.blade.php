<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
   
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="/../css/dulsara.css">
    <title>Add lessons</title>
   
    <style> 
      .sidebar-logo {
        width: 300px !important;
        height: 140px !important;
        margin-left: 1.2rem !important;
        margin-top: 1.2rem !important;
        margin-bottom: 1.2rem !important;
      }
    </style>


</head>



  <body>

 <!-- Header Starts -->
 <nav class="navigaation-bar background-dark">
      <h1>
        <a href="index.html">
          <i class="fas fa-graduation-cap"> </i> MicroEye Educational Institute
        </a>
      </h1>

      <ul>
        <li><a href="#">Timetables</a></li>
        <li><a href="#">Classes</a></li>
        <li><a href="#">Notices</a></li>
        <li><a href="#">Exams</a></li>
        <li><a href="#">Library</a></li>
        <li><a href="#">Q & A</a></li>
        <li><a href="#">Finance</a></li>
        <li><a href="#">|</a></li>   
        <li>
          <a class="" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
           Logout
          </a>
        </li>  
        <li><a>Hi {{Auth::user()->first_name}}</a></li>    
      </ul>
    </nav>

    <!-- Header Ends -->
    
    <form action="{{ url('/store') }}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
    <div class="container">
    <div class="row">
   <div class="col-md-20">
     <br>
    <div class="form-group">
      <h4>Enter LessonName</h4>
      <input type="text" class="form-control py-2" name="ClassLname" placeholder="Enter the lesson name">
    </div>
     @error('ClassLname')
    <div class="alert alert-success mt-1 mb-1">{{ $message }}</div>
     @enderror
      <br>
                    
    <div class="form-group">
    <h4>Select lesson type</h4>
    <input type="text" class="form-control py-2" name="classLtype" placeholder="Enter the lesson type">
    </div>
    @error('classLtype')
    <div class="alert alert-success mt-1 mb-1">{{ $message }}</div>
    @enderror
    <br>
     
    <h4>Enter Subject</h4>
    <div class="form-group">
    <input type="text" class="form-control py-2" name="classLSubject" placeholder="Enter the lesson name">
    </div>
    @error('classLSubject')
   <div class="alert alert-success mt-1 mb-1">{{ $message }}</div>
     @enderror
    <br>

    <h4>Enter Grade</h4>
    <div class="form-group">
    <input type="text"  class="form-control py-2" name="grade" placeholder="Enter the grade" id="file">
    </div>
    @error('file')
   <div class="alert alert-success mt-1 mb-1">{{ $message }}</div>
  @enderror
<br>


    <h4> Enter the content</h4>
    <div class="form-group">
    <input type="file"  class="form-control py-2" name="file" placeholder="Choose file" id="file">

    </div>
    @error('file')
   <div class="alert alert-success mt-1 mb-1">{{ $message }}</div>
   @enderror
<br>


</br><button type="submit" width="50%" class="btn btn-primary btn-lg"  >Add</button>


</div>
</div>
</div>
</div>
</form>
<br><br><br>

<!-- Footer Starts -->
<footer class="footer">
      <div class="footer-container">
        <div class="footer-lists">
          <ul>
            <div class="micro-eye-logo">
              <a href="index.html">
                <img src="/../images/Micro Eye Logo.png" alt="" />
              </a>
            </div>
          </ul>
          <ul>
            <li class="list-head">Quick Links</li>
            <li><a href="#">My Pofile</a></li>
            <li><a href="#">Attendance</a></li>
            <li><a href="#">Finance</a></li>
            <li><a href="#">Timetables</a></li>
          </ul>
          <ul>
            <li class="list-head">Quick Links</li>
            <li><a href="#">My Exams</a></li>
            <li><a href="#">Classes</a></li>
            <li><a href="#">Notices</a></li>
            <li><a href="#">Notifications</a></li>
          </ul>
          <ul>
            <li class="list-head">Sitemap</li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Sign Up</a></li>
            <li><a href="#">Login</a></li>
          </ul>
          <ul>
            <li class="list-head">Contact Us</li>
            <li><a href="#">124/B</a></li>
            <li><a href="#">Aluthgama</a></li>
            <li><a href="#">Bogamuwa</a></li>
            <li><a href="#">Yakkala</a></li>
          </ul>
        </div>
        <div class="divider"></div>
      </div>
    </footer>
    <!-- Footer end -->



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
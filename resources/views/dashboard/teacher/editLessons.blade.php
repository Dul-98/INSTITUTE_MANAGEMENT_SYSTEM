<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manageLessons</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="/css/dulsara.css">
    <style>
   .table3 {
      border-collapse:collapse;
      width:100%;

   }

   .table3 th,td{
    text-align: left;
  padding: 8px;
   }
   .table3 tr:nth-child(even){
  background-color:#AED6F1;

}

.table3 th {
  background-color: #2E86C1 ;
  color: white;
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
        <li>
          <i class="fas fa-bars align-items-center" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"></i>
        </li> 

 
  @if(Auth::guest())
        @else
    
        <li class="dropdown">
          <a href="{{url('user/home')}}" class="text-sm text-gray-700 underline">Hi {{Auth::user()->first_name}}</a>        
        </li>
     
        @endif
        
        <a class="" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
           Logout
          </a>
      </ul>
    </nav>
    </head>
    <!-- Header Ends -->

 <!-- Sitemap starts -->

 <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <img src="/Images/Micro Eye Logo.png" alt="" width="340px" height="150px">
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <div class="fw-bold h3 ms-3">
       Classes         
        </div>
          <div class="my-3">
            <ul class="lead">
                <li class="mb-2"><a href="Ladd" class="text-decoration-none">Add Lessons</a></li>
                <li class="mb-2"><a href="edit-lesson" class="text-decoration-none">Manage Lessons</a></li>
                <li class="mb-2"><a href="search" class="text-decoration-none">Add a class</a></li>
                <li class="mb-2"><a href="edit-class" class="text-decoration-none">Manage Classes</a></li>
                <li class="mb-2"><a href="get-report" class="text-decoration-none">Report of students</a></li>
            </ul>
          </div>
        </div>
      </div>

        <!-- Sitemap Ends -->

<center>
<section class="container">
<div >
   @if(session()->exists('message'))
     <div class="alert alert-success" role="alert">
        {{session('message')}}
     </div>
     @endif
    </div>
        <div class="jumbotorn">
    <h1>Manage Lessons</h1>
    <br>
    <a href="/teacher/Ladd" class="btn btn-primary">Add new Lessons</a>
    <div class="line" style="text-align:right;">
    @if(session('status'))
    <div class="alert alert-success">{{session('status')}}</div>
    @endif
    
</div><br>
    
<table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            
            <th>LessonName</th>
            <th>Lessontype</th>
            <th>subject</th>
            <th>Grade</th>
            <th>File</th>
            <th>Action</th>
            
        </tr></thead>
<tbody>
    @foreach($lesson as $Lesson)
    <tr style="background:white;">
    
    <td>{{$Lesson->l_name}}</td>
    <td>{{$Lesson->l_type}}</td>
    <td>{{$Lesson->subject}}</td>
    <td>{{$Lesson->grade}}</td>
    <td>{{$Lesson->file}}</td>

<td>
<a href="/deleteL/{{$Lesson->id}}" class="btn btn-warning">Delete</a>
</td>

</tr>
@endforeach
</tbody>

</table>
</center>
</div>


<!-- Footer Starts -->
<footer class="footer">
      <div class="footer-container">
        <div class="footer-lists">
          <ul>
            <div class="micro-eye-logo">
              <a href="index.html">
                <img src="/images/Micro Eye Logo.png" alt="" />
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


<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
</body>
</html>
@extends('layouts.layout')

@section('content')

<main role="main" class="container">

    <html lang="zxx" class="no-js">
      <!-- Mobile Specific Meta -->
      <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
      />
      <!-- Favicon-->
      <link rel="shortcut icon" href="img/fav.png" />
      <!-- Author Meta -->
      <meta name="author" content="CodePixar" />
      <!-- Meta Description -->
      <meta name="description" content="" />
      <!-- Meta Keyword -->
      <meta name="keywords" content="" />
      <!-- meta character set -->
      <meta charset="UTF-8" />
      <!-- Site Title -->
      <title>Senarai Daerah</title>
  
      <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Playfair+Display:700,700i"
        rel="stylesheet"
      />
      <!--CSS============================================= -->
      <link rel="stylesheet" href="css/linearicons.css" />
      <link rel="stylesheet" href="css/font-awesome.min.css" />
      <link rel="stylesheet" href="css/magnific-popup.css" />
      <link rel="stylesheet" href="css/nice-select.css" />
      <link rel="stylesheet" href="css/owl.carousel.css" />
      <link rel="stylesheet" href="css/bootstrap.css" />
      <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
      <link rel="stylesheet" href="css/themify-icons.css" />
      <link rel="stylesheet" href="css/main.css" />
    </head>
  
    <body>
      <!--================ Start Header Area =================-->
      <header class="header-area">
        <div class="container">
          <div class="header-wrap">
            <div
              class="header-top d-flex justify-content-between align-items-lg-center navbar-expand-lg"
            >
              <div class="col menu-left">
                <a class="active" style="color:#4E5B30;" style="font-size:0px" href="index.html">District</a> <!-- Home Screen -->
                <a style="color:#4E5B30;" href="view_daerah">Stream</a> <!-- Scholarship -->
                <a style="color:#4E5B30;" href="aliran.html">Course</a>  <!-- Stream -->
              </div>
          <!-- Logo & Image (Line) Tahfiz -->
              <div class="col-5 text-lg-center mt-2 mt-lg-0">
          <img class="rounded float-right" src="img/right.png" 
            width="150" height="80" alt=""/>
                    <a href="index.html"
                      ><img class="mx-auto" src="img/my.tahfiz.png" 
            width="120" height="100" alt=""
                    /></a>
            <img class="rounded float-left" src="img/left.png" 
            width="150" height="80" alt=""/>
              </div>
              <nav class="col navbar navbar-expand-lg justify-content-end">
                <!-- Toggler/collapsibe Button -->
                <button
                  class="navbar-toggler"
                  type="button"
                  data-toggle="collapse"
                  data-target="#collapsibleNavbar"
                >
                  <span class="lnr lnr-menu"></span>
                </button>
  
                <!-- Navbar links -->
                <div
                  class="collapse navbar-collapse menu-right"
                  id="collapsibleNavbar"
                >
                  <ul class="navbar-nav justify-content-center w-100">
                    <li class="nav-item hide-lg">
                      <a class="nav-link" style="color:#4E5B30;" href="index.html">Halaman Utama</a>
                    </li>
                    <!-- <li class="nav-item hide-lg">
                      <a class="nav-link" style="color:#4E5B30;" href="category.html">Daerah</a>
                    </li> -->
                    <!-- Dropdown -->
                    <!-- <li class="nav-item dropdown">
                      <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="navbardrop"
                        data-toggle="dropdown"
                      >
                        Pages
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="elements.html">Elements</a>
                      </div>
                    </li> -->
                    <li class="nav-item">
                      <a class="nav-link" style="color:#4E5B30;" href="biasiswa.html">Scholarship</a>  <!-- FAQ -->
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" style="color:#4E5B30;" href="faq.html">FAQ</a>  <!-- FAQ -->
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" style="color:#4E5B30;" href="contact.html">Hubungi Kami</a>  <!-- Contact Us -->
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </header>
      <!--================ End Header Area =================-->

    <!--================ Create New District =================-->
    <div class="d-flex flex-row-reverse bd-highlight mb-3">
    <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
  Tambah Kursus Baharu
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kursus Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="{{  route('admincourse.store') }}" method="POST">
              @csrf

<!-- Create New District Form -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form>
  <div class="form-group row">
    <label for="course_id" class="col-4 col-form-label">ID Kursus</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-barcode"></i>
          </div>
        </div> 
        <input id="course_id" name="course_id" type="text" class="form-control" aria-describedby="course_idHelpBlock" required="required">
      </div> 
      <span id="course_idHelpBlock" class="form-text text-muted">Sila masukkan daerah baharu ID. Cth: D01</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="course_name" class="col-4 col-form-label">Nama Daerah</label> 
    <div class="col-8">
      <input id="course_name" name="course_name" type="text" class="form-control" aria-describedby="course_nameHelpBlock" required="required"> 
      <span id="course_nameHelpBlock" class="form-text text-muted">Sila masukkan nama daerah yang ingin ditambah.</span>
    </div>
  </div> 
  <div class="form-group row">
    <label for="uni_name" class="col-4 col-form-label">Nama Universiti</label> 
    <div class="col-8">
      <input id="uni_name" name="uni_name" type="text" class="form-control" aria-describedby="uni_nameHelpBlock" required="required"> 
      <span id="uni_nameHelpBlock" class="form-text text-muted">Sila masukkan nama daerah yang ingin ditambah.</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="uni_location" class="col-4 col-form-label">Lokasi Universiti</label> 
    <div class="col-8">
      <input id="uni_location" name="uni_location" type="text" class="form-control" aria-describedby="uni_locationHelpBlock" required="required"> 
      <span id="uni_locationHelpBlock" class="form-text text-muted">Sila masukkan nama daerah yang ingin ditambah.</span>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-success">Tambah & Simpan</button>
    </div>
  </div>
</form>

<!-- End Create New District Form -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>

<!--================ District Table =================-->
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID Kursus</th>
      <th scope="col">Nama Kursus</th>
      <th scope="col">Nama Universiti</th>
      <th scope="col">Lokasi Universiti</th>
      <th scope="col">Edit Course</th>
      <th scope="col">Delete Course</th>
    </tr>
  </thead>
  <tbody>
    <tbody>
      @forelse ($courses as $course)
      <tr>
       <td>{{ $course->course_id }}</td>
       <td>{{ $course->course_name }}</td>
       <td>{{ $course->uni_name }}</td>
       <td>{{ $course->uni_location }}</td>
       <td>

          <!--================ Edit Form =================-->
          
          <!-- Button trigger modal -->
         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-{{ $course->course_id }}">
           Edit
         </button>
         
         <!-- Modal -->
         <div class="modal fade" id="exampleModal-{{ $course->course_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
             <div class="modal-content">
               <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Edit District</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>
               <div class="modal-body">
                   <form action="{{  route('admincourse.update', $course->course_id) }}" method="POST">
                       @csrf

                       <!--================ Delete Form =================-->
                 <!-- Bahagian Form -->
                 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
                 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
         
         <form>
         <div class="form-group row">
           <label for="course_id" class="col-4 col-form-label">ID Kursus</label> 
           <div class="col-8">
             <div class="input-group">
               <div class="input-group-prepend">
                 <div class="input-group-text">
                   <i class="fa fa-address-card"></i>
                 </div>
               </div> 
               <input id="course_id" name="course_id" type="text" class="form-control" required="required" value="{{ $course->course_id }}" >
             </div>
           </div>
         </div>
         <div class="form-group row">
           <label for="course_name" class="col-4 col-form-label">Nama Kursus</label> 
           <div class="col-8">
             <textarea id="course_name" name="course_name" cols="40" rows="5" required="required" class="form-control">{{ $course->course_name }}</textarea>
           </div>
         </div> 
         <div class="form-group row">
          <label for="uni_name" class="col-4 col-form-label">Nama Universiti</label> 
          <div class="col-8">
            <textarea id="uni_name" name="uni_name" cols="40" rows="5" required="required" class="form-control">{{ $course->uni_name }}</textarea>
          </div>
        </div>
        <div class="form-group row">
          <label for="uni_location" class="col-4 col-form-label">Lokasi Universiti</label> 
          <div class="col-8">
            <textarea id="uni_location" name="uni_location" cols="40" rows="5" required="required" class="form-control">{{ $course->uni_location }}</textarea>
          </div>
        </div>
         <div class="form-group row">
           <div class="offset-4 col-8">
             <button name="submit" type="submit" class="btn btn-primary">Submit</button>
           </div>
         </div>
         </form>
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
             </div>
           </div>
         </div>
       </td>
         
        <td>
         <form action="{{  route('admincourse.destroy', $course->course_id) }}", method="POST">
                       @csrf
                   <div class="form-group">
                       <button name="submit" type="submit" class="btn btn-danger">Delete</button>
                   </div>
               </form>
                   </td>
                  </tr>
                      
                  @empty
                      
                  @endforelse
               </tbody>
           </table>
           <div class="d-flex flex-row-reverse bd-highlight mb-3">
             
           </div>
  </tbody>
</table>
</main>
@endsection
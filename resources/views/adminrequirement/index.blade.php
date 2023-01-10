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
  Tambah Daerah Baharu
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Daerah Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="{{  route('adminrequirement.store') }}" method="POST">
              @csrf

<!-- Create New District Form -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form>
  <div class="form-group row">
    <label for="id" class="col-4 col-form-label">ID Keperluan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-barcode"></i>
          </div>
        </div> 
        <input id="id" name="id" type="text" class="form-control" aria-describedby="idHelpBlock" required="required">
      </div> 
      <span id="idHelpBlock" class="form-text text-muted">Sila masukkan keperluan baharu ID. Cth: D01</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="course_name" class="col-4 col-form-label">Nama Kursus</label> 
    <div class="col-8">
      <select name="course_name" type="text" class="form-control" aria-describedby="course_idHelpBlock" required="required"> 
        @foreach ($courses as $course)
          <option value="{{ $course->course_id }}">{{ $course->course_name }} : {{ $course->uni_name }}</option>
        @endforeach
      </select>
      <span id="course_idHelpBlock" class="form-text text-muted">Sila masukkan nama kursus yang ingin ditambah.</span>
    </div>
  </div> 
  <div class="form-group row">
    <label for="stream_name" class="col-4 col-form-label">Nama Aliran</label> 
    <div class="col-8">
      <select name="stream_name" type="text" class="form-control" aria-describedby="stream_idHelpBlock" required="required"> 
        @foreach ($streams as $stream)
        <option value="{{ $stream->stream_id }}">{{ $stream->stream_name }}</option>
      @endforeach
    </select>
        <span id="stream_idHelpBlock" class="form-text text-muted">Sila masukkan nama aliran yang ingin ditambah.</span>
    </div>
  </div> 
  <div class="form-group row">
    <label for="req_subject" class="col-4 col-form-label">Keperluan Universiti</label> 
    <div class="col-8">
      <input id="req_subject" name="req_subject" type="text" class="form-control" aria-describedby="req_subjectHelpBlock" required="required"> 
      <span id="req_subjectHelpBlock" class="form-text text-muted">Sila masukkan keperluan universiti yang ingin ditambah.</span>
    </div>
  </div> 
  <div class="form-group row">
    <label for="req_grade" class="col-4 col-form-label">Keperluan Kursus</label> 
    <div class="col-8">
      <input id="req_grade" name="req_grade" type="text" class="form-control" aria-describedby="req_gradeHelpBlock" required="required"> 
      <span id="req_gradeHelpBlock" class="form-text text-muted">Sila masukkan keperluan kursus yang ingin ditambah.</span>
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
      <th scope="col">Requirement ID</th>
      <th scope="col">Nama Kursus</th>
      <th scope="col">Nama Aliran</th>
      <th scope="col">Nama Universiti</th>
      <th scope="col">Keperluan Universiti</th>
      <th scope="col">Keperluan Kursus</th>
      <th scope="col">Edit District</th>
      <th scope="col">Delete District</th>
    </tr>
  </thead>
  <tbody>
    <tbody>
      @forelse ($requirements as $requirement)
      <tr>
       <td>{{ $requirement->id }}</td>
       <td>{{ $requirement->course_name }}</td>
       <td>{{ $requirement->stream_name }}</td>
       <td>{{ $requirement->uni_name }}</td>
       <td>{{ $requirement->req_subject }}</td>
       <td>{{ $requirement->req_grade }}</td>


       <td>

          <!--================ Edit Form =================-->
          
          <!-- Button trigger modal -->
         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-{{ $requirement->id }}">
           Edit
         </button>
         
         <!-- Modal -->
         <div class="modal fade" id="exampleModal-{{ $requirement->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
             <div class="modal-content">
               <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Edit Requirement</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>
               <div class="modal-body">
                   <form action="{{  route('adminrequirement.update', $requirement->id) }}" method="POST">
                       @csrf

                       <!--================ Delete Form =================-->
                 <!-- Bahagian Form -->
                 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
                 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
         
         <form>
         <div class="form-group row">
           <label for="name" class="col-4 col-form-label">ID Keperluan</label> 
           <div class="col-8">
             <div class="input-group">
               <div class="input-group-prepend">
                 <div class="input-group-text">
                   <i class="fa fa-address-card"></i>
                 </div>
               </div> 
               <input id="id" name="id" type="text" class="form-control" required="required" value="{{ $requirement->id }}" >
             </div>
           </div>
         </div>
         <div class="form-group row">
           <label for="course_id" class="col-4 col-form-label">Nama Kursus</label> 
           <div class="col-8">
             <textarea id="course_id" name="course_id" cols="40" rows="5" required="required" readonly='readonly' class="form-control">{{ $requirement->course_id }}</textarea>
           </div>
         </div> 
         <div class="form-group row">
          <label for="stream_id" class="col-4 col-form-label">Nama Aliran</label> 
          <div class="col-8">
            <textarea id="stream_id" name="stream_id" cols="40" rows="5" required="required" readonly='readonly' class="form-control">{{ $requirement->stream_id }}</textarea>
          </div>
        </div> 
        <div class="form-group row">
          <label for="req_sub" class="col-4 col-form-label">Keperluan Universiti</label> 
          <div class="col-8">
            <textarea id="req_subject" name="req_subject" cols="40" rows="5" required="required"  class="form-control">{{$requirement ->req_subject }}</textarea>
          </div>
        </div> 
        <div class="form-group row">
          <label for="req_grade" class="col-4 col-form-label">Keperluan Kursus</label> 
          <div class="col-8">
            <textarea id="req_grade" name="req_grade" cols="40" rows="5" required="required" class="form-control">{{ $requirement ->req_grade}}</textarea>
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
         <form action="{{  route('adminrequirement.destroy', $requirement->id) }}", method="POST">
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
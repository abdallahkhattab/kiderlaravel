@extends('admin.dashboard')
@section('content-class')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css' />
<link rel='stylesheet'
  href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css' />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css" />

{{-- add new schoolclass modal start --}}

<div class="modal fade" id="addSchoolclassModal" tabindex="-1" aria-labelledby="exampleModalLabel"
  data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Schoolclass</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('dashoboard.class.store') }}" method="POST" id="add_schoolclass_form" enctype="multipart/form-data">
        @csrf
        <div class="modal-body p-4 bg-light">
          <div class="row">
            <div class="col-lg">
              <label for="class_page_title">page title</label>
              <input type="text" name="teto" class="form-control" placeholder="title" required>
            </div>
            <div class="col-lg">
              <label for="description">page description</label>
              <input type="text" name="class_page_description" class="form-control" placeholder="description" required>
            </div>
          </div>
          <div class="my-2">
            <label for="image">Select class image</label>
            <input type="file" name="class_image" class="form-control" required>
          </div>
        
         
          <div class="my-2">
            <label for="class title">class title</label>
            <input type="text" name="class_title" class="form-control" placeholder="class title" required>
          </div>
        

          <div class="my-2">
            <label for="class title">class teacher name</label>
            <input type="text" name="class_teacher_name" class="form-control" placeholder="Post" required>
          </div>

          <div class="my-2">
            <label for="class title">class teacher description</label>
            <input type="text" name="tea" class="form-control" placeholder="teacher name" required>
          </div>

          <div class="my-2">
            <label for="class title">class teacher image</label>
            <input type="file" name="class_teacher_image" class="form-control" placeholder="teacher image" required>
          </div>

          <div class="my-2">
            <label for="class title">class title</label>
            <input type="text" name="classtitle" class="form-control" placeholder="class title" required>
          </div>

          <div class="my-2">
            <label for="class title">class price</label>
            <input type="text" name="class_price" class="form-control" placeholder="class price" required>
          </div>

          <div class="my-2">
            <label for="class title">class time</label>
            <input type="text" name="class_time" class="form-control" placeholder="class time" required>
          </div>

          <div class="my-2">
            <label for="class title">class age</label>
            <input type="text" name="class_age" class="form-control" placeholder="class age" required>
          </div>

          <div class="my-2">
            <label for="class title">class capacity</label>
            <input type="text" name="class_capacity" class="form-control" placeholder="class capacity" required>
          </div>
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" id="add_schoolclass_btn" class="btn btn-primary">Add class</button>
        </div>
      </form>
    </div>
  </div>
</div>
{{-- add new shool class modal end --}}

{{-- edit shool class modal start --}}
<div class="modal fade" id="editSchoolclassModal" tabindex="-1" aria-labelledby="exampleModalLabel"
  data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Schoolclass</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" id="edit_schoolclass_form" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="emp_id" id="emp_id">
        <input type="hidden" name="emp_avatar" id="emp_avatar">
        <div class="modal-body p-4 bg-light">
          <div class="row">
            <div class="col-lg">
              <label for="fname">First Name</label>
              <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name" required>
            </div>
            <div class="col-lg">
              <label for="lname">Last Name</label>
              <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name" required>
            </div>
          </div>
          <div class="my-2">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="E-mail" required>
          </div>
          <div class="my-2">
            <label for="phone">Phone</label>
            <input type="tel" name="phone" id="phone" class="form-control" placeholder="Phone" required>
          </div>
          <div class="my-2">
            <label for="post">Post</label>
            <input type="text" name="post" id="post" class="form-control" placeholder="Post" required>
          </div>
          <div class="my-2">
            <label for="avatar">Select Avatar</label>
            <input type="file" name="avatar" class="form-control">
          </div>
          <div class="mt-2" id="avatar">

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" id="edit_schoolclass_btn" class="btn btn-success">Update Schoolclass</button>
        </div>
      </form>
    </div>
  </div>
</div>
{{-- edit schoolclass modal end --}}

<body class="bg-light">
  <div class="container">
    <div class="row my-5">
      <div class="col-lg-12">
        <div class="card shadow">
          <div class="card-header bg-danger d-flex justify-content-between align-items-center">
            <h3 class="text-light">Manage School class</h3>
            <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addSchoolclassModal"><i
                class="bi-plus-circle me-2"></i>Add New School class</button>
          </div>
          <table class="table table-hover table-striped table-bordered">
            <tr class="bg-dark text-white">
                <th>ID</th>
                <th>Class Image</th>
                <th>Class Title</th>
                <th>Teacher Name</th>
                <th>Teacher Description</th>
                <th>Price</th>
                <th>Time</th>
                <th>Age</th>
                <th>Capacity</th>
                <th>Page Title</th>
                <th>Page Description</th>
                <th>Teacher Image</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        
            @forelse ($classData as $class)
                <tr>
                    <td>{{ $class->id }}</td>
                    <td>
                        <img width="50px" src=" {{ asset('storage/images/'  . $class->class_image) }}" alt="Class Image">
                    </td>
                    <td>{{ $class->class_title }}</td>
                    <td>{{ $class->class_teacher_name }}</td>
                    <td>{{ $class->class_teacher_description }}</td>
                    <td>{{ $class->class_price }}</td>
                    <td>{{ $class->class_time }}</td>
                    <td>{{ $class->class_age }}</td>
                    <td>{{ $class->class_capacity }}</td>
                    <td>{{ $class->class_page_title }}</td>
                    <td>{{ $class->class_page_description }}</td>
                    <td>
                        <img width="50px" src="{{ asset('storage/images/' . $class->class_teacher_image) }}" alt="Teacher Image">
                    </td>
                    <td>{{ $class->created_at->diffForHumans() }}</td>
                    <td>
                        <form class="d-inline" action="{{ route('dashoboard.class.destroy', $class->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="14" style="text-align:center">
                        No Data Found
                    </td>
                </tr>
            @endforelse
        </table>
        
        {{ $classData->links() }}
        
        </div>
      </div>
    </div>
  </div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@stop
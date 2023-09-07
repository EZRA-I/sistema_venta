<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

<div style="margin-bottom: 3em">
    <a href="{{ route('departments.index') }}" class="btn btn-info">Department List</a>
</div>
<div class="container  md-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-4">
                   <h1 class="text-center">Create Department</h1>
                <div class="card-body">
                      @if(session('message'))
                            <div style="color: green;">{{ session('message') }}</div>
                       @endif

                     <form action="{{ route('departments.create') }}" method="post">
                         @csrf
                          <div class="col-auto" style="margin-bottom: 1em;">
                             <label for="name" class="form-label">Name</label>
                             <input type="text" name="name" id="name" placeholder="Enter Department" class="form-control row-3">
                             @error('name')
                                <div style="color: red;">{{ $message }}"</div>
                              @enderror
                         </div>
                             <div>
                                 <button class="btn btn-success form-control" type="submit" ><h3> Crear </h3></button>
                             </div>
                      </form>
                 </div>
            </div>
        </div>
    </div>
</div>

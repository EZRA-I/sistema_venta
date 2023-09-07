<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

<div  class="btn-group">
    <div ><a class="btn btn-success" href="/">Home</a></div>
    <a class="btn btn-info" href="{{ route('departments.create') }}">New Department</a>
</div>
@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<div class="container col-md-6">
       <table cellpadding="10" cellpacing="1" border="1"  class="table table-bordered border-primary">
         <thead class="table-dark">

           <tr>

              <td class="h4">No.</td>
              <td class="h4">Name</td>
              <td class="h4">Timestamp</td>
              <td class="h4">Action</td>
           </tr>
        </thead>
          <tbody class="table-info" >
            @forelse($departments as $key => $department)
               <tr class="border-secondary">
                   <td class="h6 text-center" >{{ $departments->firstItem() + $key }}.</td>
                   <td class="h6 text-center">{{ $department->name }}</td>
                   <td class="h6 text-center">{{ $department->created_at->format('F d, Y') }}</td>
                   <td class="h6 text-center">

                           <a class="btn btn-outline-success" href="{{ route('departments.edit', $department) }}">Edit</a>

                       <form action="{{ route('departments.delete', $department) }}" method="post">
                           @csrf
                           <br>
                           <div class="text-center">
                               <button type="submit" class="btn btn-outline-danger ">Delete</button>
                           </div>
                       </form>
                   </td>
               </tr>
            @empty
               <tr>
                   <td colspan="6">No data found in table</td>
               </tr>
            @endforelse
          </tbody>
     </table>
</div>

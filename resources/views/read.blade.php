<html>

   <head>
      <title>Form Example</title>
   </head>
   <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

   <body>
      @if (session('status'))
    <div >
        {{ session('status') }}
    </div>
      @endif
    <h1>Details of Interns</h1> 
   <h3><a href ={{"intern/create"}}>Add</a></h3> 
    <br>
    <br>
    <div>
      <table>
        <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>
         @foreach($interns as $row)
          <tr>
              <td>{{$row['first_name']}}</td>
              <td>{{$row['last_name']}}</td>
              <td><a href ="{{ URL::to('intern/' . $row['id'] . '/edit') }}">Edit</a></td>
              <td>
                <form method="post" action = "{{route('intern.destroy' , $row['id'])}}" >
                   {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                  <button>Delete</button>
                </form>
              </td>
          </tr>
        @endforeach   
         
    </table>

    </div>
     
   </body>
</html>
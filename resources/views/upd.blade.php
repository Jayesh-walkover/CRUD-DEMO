<html>


   <head>
      <title>update</title>
   </head>
   <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
   

   <body>
    <h1>Update</h1>
    @if(count($errors) > 0)
        <ul>
          @foreach($errors->all() as $er)
            <li>{{$er}}</li>
          @endforeach
        </ul>
     @endif

      <form action = "{{route('intern.update' , $id)}}" method = "post">
         {{csrf_field()}}
         <input type = "hidden" name = "_method" value="PATCH" />
         
         <table>
            <tr>
             
               <td>First Name</td>
               <td><input type = "text" name = "first_name" value={{$data['first_name']}} /></td>
            </tr>
            <tr>
               <td>Last Name</td>
               <td><input type = "text" name = "last_name" value={{$data['last_name']}} /></td>
            </tr>
      
           
               <td colspan = "2" align = "center">
                  <input type = "submit" value = "update" />
               </td>
            </tr>
         </table>
      
      </form>
   </body>
</html>
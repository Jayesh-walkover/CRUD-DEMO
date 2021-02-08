# Intern Management Routes


## Get all interns.


> Example request:

```bash
curl -X GET \
    -G "http://example.test/intern" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://example.test/intern"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

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
    <h1>Details of Interns</h1> 
    <h3><a href =intern/create>Add</a></h3> 
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
          <tr>
            <td>sup</td>
            <td>herokn</td>
            <td><a href ="http://example.test/intern/2/edit">Edit</a></td>
            <td>
              <form method="post" action = "http://example.test/intern/2" >
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="hidden" name="_token" value="XETcgmXAMVhwFVhYt1ASLl2iHOb5pdzmWkyppCEd">
                <button>Delete</button>
              </form>
            </td>
          </tr>
          <tr>
              <td>john</td>
              <td>doe</td>
              <td><a href ="http://example.test/intern/3/edit">Edit</a></td>
              <td>
                <form method="post" action = "http://example.test/intern/3" >
                   <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="XETcgmXAMVhwFVhYt1ASLl2iHOb5pdzmWkyppCEd">
                  <button>Delete</button>
                </form>
              </td>
          </tr>
          <tr>
              <td>boomer</td>
              <td>singh</td>
              <td><a href ="http://example.test/intern/5/edit">Edit</a></td>
              <td>
                <form method="post" action = "http://example.test/intern/5" >
                   <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="XETcgmXAMVhwFVhYt1ASLl2iHOb5pdzmWkyppCEd">
                  <button>Delete</button>
                </form>
              </td>
          </tr>
          <tr>
              <td>pole</td>
              <td>pole</td>
              <td><a href ="http://example.test/intern/6/edit">Edit</a></td>
              <td>
                <form method="post" action = "http://example.test/intern/6" >
                   <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="XETcgmXAMVhwFVhYt1ASLl2iHOb5pdzmWkyppCEd">
                  <button>Delete</button>
                </form>
              </td>
          </tr>
          <tr>
              <td>john</td>
              <td>ram</td>
              <td><a href ="http://example.test/intern/8/edit">Edit</a></td>
              <td>
                <form method="post" action = "http://example.test/intern/8" >
                   <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="XETcgmXAMVhwFVhYt1ASLl2iHOb5pdzmWkyppCEd">
                  <button>Delete</button>
                </form>
              </td>
          </tr>
          <tr>
              <td>real</td>
              <td>entry</td>
              <td><a href ="http://example.test/intern/11/edit">Edit</a></td>
              <td>
                <form method="post" action = "http://example.test/intern/11" >
                   <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="XETcgmXAMVhwFVhYt1ASLl2iHOb5pdzmWkyppCEd">
                  <button>Delete</button>
                </form>
              </td>
          </tr>
     </table>
    </div>
   </body>
</html>
```
<div id="execution-results-GETintern" hidden>
    <blockquote>Received response<span id="execution-response-status-GETintern"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETintern"></code></pre>
</div>
<div id="execution-error-GETintern" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETintern"></code></pre>
</div>
<form id="form-GETintern" data-method="GET" data-path="intern" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETintern', this);">
<p>
This page shows the tabular representation of intern's first & last name with<br>edit and delete buttons.<br></p>  
<h3>
    Request&nbsp;&nbsp;&nbsp;
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETintern" onclick="cancelTryOut('GETintern');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETintern" hidden>Send Request 💥</button>
    </h3>
<p>

<small class="badge badge-green">GET</small>
 <b><code>intern</code></b>
</p>
</form>


## Form to Create new Intern.




> Example request:

```bash
curl -X GET \
    -G "http://example.test/intern/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://example.test/intern/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<html>

   <head>
      <title>Form Example</title>
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
     <h1>Register</h1>
     
      <form action = "http://example.test/intern" method = "post">
         <input type = "hidden" name = "_token" value = "XETcgmXAMVhwFVhYt1ASLl2iHOb5pdzmWkyppCEd">
         <table>
            <tr>
               <td>First Name</td>
               <td><input type = "text" name = "first_name" /></td>
            </tr>
            <tr>
               <td>Last Name</td>
               <td><input type = "text" name = "last_name" /></td>
            </tr>
               <td colspan = "2" align = "center">
                  <input type = "submit" value = "Register" />
               </td>
            </tr>
         </table>
      </form>
   </body>
</html>
```
<div id="execution-results-GETintern-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETintern-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETintern-create"></code></pre>
</div>
<div id="execution-error-GETintern-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETintern-create"></code></pre>
</div>
<form id="form-GETintern-create" data-method="GET" data-path="intern/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETintern-create', this);">
<p>This page has form for creation of new intern.<br></p>  
<h3>
    Request&nbsp;&nbsp;&nbsp;
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETintern-create" onclick="cancelTryOut('GETintern-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETintern-create" hidden>Send Request 💥</button>
    </h3>
<p>
  
<small class="badge badge-green">GET</small>
 <b><code>intern/create</code></b>
</p>
</form>


## Store a newly created intern.




> Example request:

```bash
curl -X POST \
    "http://example.test/intern" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"first_name":"sed","last_name":"laudantium"}'

```

```javascript
const url = new URL(
    "http://example.test/intern"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "sed",
    "last_name": "laudantium"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTintern" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTintern"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTintern"></code></pre>
</div>
<div id="execution-error-POSTintern" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTintern"></code></pre>
</div>
<form id="form-POSTintern" data-method="POST" data-path="intern" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTintern', this);">
<p>It is a post method for storing the data into database.<br></p>  
<h3>
    Request&nbsp;&nbsp;&nbsp;
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTintern" onclick="cancelTryOut('POSTintern');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTintern" hidden>Send Request 💥</button>
    </h3>
<p>

<small class="badge badge-black">POST</small>
 <b><code>intern</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="first_name" data-endpoint="POSTintern" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="last_name" data-endpoint="POSTintern" data-component="body" required  hidden>
<br>
</p>

</form>


## Update intern details.




> Example request:

```bash
curl -X PATCH \
    "http://example.test/intern/consectetur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://example.test/intern/consectetur"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PATCH",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTintern--intern-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTintern--intern-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTintern--intern-"></code></pre>
</div>
<div id="execution-error-PUTintern--intern-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTintern--intern-"></code></pre>
</div>
<form id="form-PUTintern--intern-" data-method="PUT" data-path="intern/{intern}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTintern--intern-', this);">
<p>Method to update the details of intern.<br></p>  
<h3>
    Request&nbsp;&nbsp;&nbsp;
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTintern--intern-" onclick="cancelTryOut('PUTintern--intern-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTintern--intern-" hidden>Send Request 💥</button>
    </h3>
<p>

<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>intern/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
</p>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="PUTintern--intern-" data-component="url" required  hidden>
<br>
The ID of the intern.</p>
</form>


## Remove the Intern.




> Example request:

```bash
curl -X DELETE \
    "http://example.test/intern/minima" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://example.test/intern/minima"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEintern--intern-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEintern--intern-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEintern--intern-"></code></pre>
</div>
<div id="execution-error-DELETEintern--intern-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEintern--intern-"></code></pre>
</div>
<form id="form-DELETEintern--intern-" data-method="DELETE" data-path="intern/{intern}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEintern--intern-', this);">
  <p>
   Deletes the entry from database<br>
</p>
<h3>
    Request&nbsp;&nbsp;&nbsp;
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEintern--intern-" onclick="cancelTryOut('DELETEintern--intern-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEintern--intern-" hidden>Send Request 💥</button>
    </h3>
<p>

<small class="badge badge-red">DELETE</small>
 <b><code>intern/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>Integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="PUTintern--intern-" data-component="url" required  hidden>
<br>
The ID of the intern.</p>
<br>
</p>
</form>




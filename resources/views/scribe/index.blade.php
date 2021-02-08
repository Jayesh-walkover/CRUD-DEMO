<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>CRUD-DEMO</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/style.css") }}" media="screen" />
        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/print.css") }}" media="print" />
        <script src="{{ asset("vendor/scribe/js/all.js") }}"></script>

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/highlight-darcula.css") }}" media="" />
        <script src="{{ asset("vendor/scribe/js/highlight.pack.js") }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</head>

<body class="" data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">
<a href="#" id="nav-button">
      <span>
        NAV
            <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="-image" class=""/>
      </span>
</a>
<div class="tocify-wrapper">
        <img src="1" alt="logo" class="logo" style="padding-top: 10px;" width="230px"/>
                <div class="lang-selector">
                            <a href="#" data-language-name="bash">bash</a>
                            <a href="#" data-language-name="javascript">javascript</a>
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href='http://github.com/knuckleswtf/scribe'>Documentation powered by Scribe ✍</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: February 8 2021</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p><strong>Laravel version 8.12</strong>
This documentation aims to provide all the information about CRUD application in Laravel.</p>
<aside>As you scroll,you'll see the models,conrtollers,form- requests and different routes of the application.</aside>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
<script>
    var baseUrl = "http://example.test";
</script>
<script src="{{ asset("vendor/scribe/js/tryitout-2.4.2.js") }}"></script>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://example.test</code></pre><h1>Controllers</h1>
<h2>InternController</h2>
<p>It is a resource controller used for CRUD operations on intern model. Methods involves in these are as follows:-
    <li>
    <ol><strong>index():</strong>For showing details of all interns.</ol>
    <ol><strong>create():</strong>For generating form to add new interns.</ol>
    <ol><strong>store():</strong>For saving details of new interns.</ol>
    <ol><strong>edit():</strong>For genrating form for updations for existing intern using Id.</ol>
    <ol><strong>update():</strong>For updating details of intern with provided Id.</ol>
    <ol><strong>destroy():</strong>For deletion of record of intern of given id.</ol>
</li> 

</p><h1>Form-Request</h1>
<h2>StoreInternRequest</h2>
<p>Form requests is custom request classes that encapsulate its own validations and customized error - messages for storing and updating data in the intern model.
<br>
<br>
<br>
<strong>Validations:</strong><br>
<ul>    
    <li><strong>first_name:</strong> required</li>
    <li><strong>last_name:</strong> required</li>
</ul>
<br>
<br>
<br>

</p><h1>Models</h1>
<p>Models which are created in this application are as follow:-</p>
<h2>Intern</h2>
<table>
    <tr>
        <th>Field Name</th>
        <th>Datatype & Size</th>
        <th>Default Value</th>
        <th> Constraints</th>
    </tr>
    <tr>
        <td>Id </td>
        <td>int(10)</td>
        <td>None</td>
        <td>Primary Key</td>
    </tr>
    <tr>
        <td>first_name </td>
        <td>varchar(255)</td>
        <td>None</td>
        <td>-</td>
    </tr>
    <tr>
        <td>last_name </td>
        <td>varchar(255)</td>
        <td>None</td>
        <td>-</td>
    </tr>
    <tr>
        <td>created_at</td>
        <td>timestamp</td>
        <td>NULL</td>
        <td>-</td>
    </tr>
    <tr>
        <td>updated_at</td>
        <td>timestamp</td>
        <td>NULL</td>
        <td>-</td>
    </tr>
    <tr>
        <td>deleted_at</td>
        <td>timestamp</td>
        <td>NULL</td>
        <td>-</td>
    </tr>

</table><h1>Intern Management Routes</h1>
<h2>Get all interns.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://example.test/intern" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://example.test/intern"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
&lt;html&gt;

   &lt;head&gt;
      &lt;title&gt;Form Example&lt;/title&gt;
   &lt;/head&gt;
   &lt;style&gt;
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
&lt;/style&gt;

   &lt;body&gt;
    &lt;h1&gt;Details of Interns&lt;/h1&gt; 
    &lt;h3&gt;&lt;a href =intern/create&gt;Add&lt;/a&gt;&lt;/h3&gt; 
    &lt;br&gt;
    &lt;br&gt;
    &lt;div&gt;
      &lt;table&gt;
        &lt;tr&gt;
        &lt;th&gt;First Name&lt;/th&gt;
        &lt;th&gt;Last Name&lt;/th&gt;
        &lt;th&gt;Edit&lt;/th&gt;
        &lt;th&gt;Delete&lt;/th&gt;
        &lt;/tr&gt;
          &lt;tr&gt;
            &lt;td&gt;sup&lt;/td&gt;
            &lt;td&gt;herokn&lt;/td&gt;
            &lt;td&gt;&lt;a href ="http://example.test/intern/2/edit"&gt;Edit&lt;/a&gt;&lt;/td&gt;
            &lt;td&gt;
              &lt;form method="post" action = "http://example.test/intern/2" &gt;
                  &lt;input type="hidden" name="_method" value="DELETE"&gt;
                  &lt;input type="hidden" name="_token" value="XETcgmXAMVhwFVhYt1ASLl2iHOb5pdzmWkyppCEd"&gt;
                &lt;button&gt;Delete&lt;/button&gt;
              &lt;/form&gt;
            &lt;/td&gt;
          &lt;/tr&gt;
          &lt;tr&gt;
              &lt;td&gt;john&lt;/td&gt;
              &lt;td&gt;doe&lt;/td&gt;
              &lt;td&gt;&lt;a href ="http://example.test/intern/3/edit"&gt;Edit&lt;/a&gt;&lt;/td&gt;
              &lt;td&gt;
                &lt;form method="post" action = "http://example.test/intern/3" &gt;
                   &lt;input type="hidden" name="_method" value="DELETE"&gt;
                    &lt;input type="hidden" name="_token" value="XETcgmXAMVhwFVhYt1ASLl2iHOb5pdzmWkyppCEd"&gt;
                  &lt;button&gt;Delete&lt;/button&gt;
                &lt;/form&gt;
              &lt;/td&gt;
          &lt;/tr&gt;
          &lt;tr&gt;
              &lt;td&gt;boomer&lt;/td&gt;
              &lt;td&gt;singh&lt;/td&gt;
              &lt;td&gt;&lt;a href ="http://example.test/intern/5/edit"&gt;Edit&lt;/a&gt;&lt;/td&gt;
              &lt;td&gt;
                &lt;form method="post" action = "http://example.test/intern/5" &gt;
                   &lt;input type="hidden" name="_method" value="DELETE"&gt;
                    &lt;input type="hidden" name="_token" value="XETcgmXAMVhwFVhYt1ASLl2iHOb5pdzmWkyppCEd"&gt;
                  &lt;button&gt;Delete&lt;/button&gt;
                &lt;/form&gt;
              &lt;/td&gt;
          &lt;/tr&gt;
          &lt;tr&gt;
              &lt;td&gt;pole&lt;/td&gt;
              &lt;td&gt;pole&lt;/td&gt;
              &lt;td&gt;&lt;a href ="http://example.test/intern/6/edit"&gt;Edit&lt;/a&gt;&lt;/td&gt;
              &lt;td&gt;
                &lt;form method="post" action = "http://example.test/intern/6" &gt;
                   &lt;input type="hidden" name="_method" value="DELETE"&gt;
                    &lt;input type="hidden" name="_token" value="XETcgmXAMVhwFVhYt1ASLl2iHOb5pdzmWkyppCEd"&gt;
                  &lt;button&gt;Delete&lt;/button&gt;
                &lt;/form&gt;
              &lt;/td&gt;
          &lt;/tr&gt;
          &lt;tr&gt;
              &lt;td&gt;john&lt;/td&gt;
              &lt;td&gt;ram&lt;/td&gt;
              &lt;td&gt;&lt;a href ="http://example.test/intern/8/edit"&gt;Edit&lt;/a&gt;&lt;/td&gt;
              &lt;td&gt;
                &lt;form method="post" action = "http://example.test/intern/8" &gt;
                   &lt;input type="hidden" name="_method" value="DELETE"&gt;
                    &lt;input type="hidden" name="_token" value="XETcgmXAMVhwFVhYt1ASLl2iHOb5pdzmWkyppCEd"&gt;
                  &lt;button&gt;Delete&lt;/button&gt;
                &lt;/form&gt;
              &lt;/td&gt;
          &lt;/tr&gt;
          &lt;tr&gt;
              &lt;td&gt;real&lt;/td&gt;
              &lt;td&gt;entry&lt;/td&gt;
              &lt;td&gt;&lt;a href ="http://example.test/intern/11/edit"&gt;Edit&lt;/a&gt;&lt;/td&gt;
              &lt;td&gt;
                &lt;form method="post" action = "http://example.test/intern/11" &gt;
                   &lt;input type="hidden" name="_method" value="DELETE"&gt;
                    &lt;input type="hidden" name="_token" value="XETcgmXAMVhwFVhYt1ASLl2iHOb5pdzmWkyppCEd"&gt;
                  &lt;button&gt;Delete&lt;/button&gt;
                &lt;/form&gt;
              &lt;/td&gt;
          &lt;/tr&gt;
     &lt;/table&gt;
    &lt;/div&gt;
   &lt;/body&gt;
&lt;/html&gt;</code></pre>
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
<h2>Form to Create new Intern.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://example.test/intern/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://example.test/intern/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
&lt;html&gt;

   &lt;head&gt;
      &lt;title&gt;Form Example&lt;/title&gt;
   &lt;/head&gt;
   &lt;style&gt;
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
&lt;/style&gt;

   &lt;body&gt;
     &lt;h1&gt;Register&lt;/h1&gt;

      &lt;form action = "http://example.test/intern" method = "post"&gt;
         &lt;input type = "hidden" name = "_token" value = "XETcgmXAMVhwFVhYt1ASLl2iHOb5pdzmWkyppCEd"&gt;
         &lt;table&gt;
            &lt;tr&gt;
               &lt;td&gt;First Name&lt;/td&gt;
               &lt;td&gt;&lt;input type = "text" name = "first_name" /&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
               &lt;td&gt;Last Name&lt;/td&gt;
               &lt;td&gt;&lt;input type = "text" name = "last_name" /&gt;&lt;/td&gt;
            &lt;/tr&gt;
               &lt;td colspan = "2" align = "center"&gt;
                  &lt;input type = "submit" value = "Register" /&gt;
               &lt;/td&gt;
            &lt;/tr&gt;
         &lt;/table&gt;
      &lt;/form&gt;
   &lt;/body&gt;
&lt;/html&gt;</code></pre>
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
<h2>Store a newly created intern.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://example.test/intern" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"first_name":"sed","last_name":"laudantium"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
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
<h2>Update intern details.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PATCH \
    "http://example.test/intern/consectetur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://example.test/intern/consectetur"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre>
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
<h2>Remove the Intern.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://example.test/intern/minima" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://example.test/intern/minima"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
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
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var languages = ["bash","javascript"];
        setupLanguages(languages);
    });
</script>
</body>
</html>
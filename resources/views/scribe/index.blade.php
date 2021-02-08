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
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI (Swagger) spec</a></li>
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
<p>This documentation aims to provide all the information you need to work on CRUD API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
<script>
    var baseUrl = "http://example.test";
</script>
<script src="{{ asset("vendor/scribe/js/tryitout-2.4.2.js") }}"></script>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://example.test</code></pre><h1>Authenticating requests</h1>
<p>This API is not authenticated.</p><h1>Endpoints</h1>
<h2>api/user</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://example.test/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://example.test/api/user"
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
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"></code></pre>
</div>
<div id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</div>
<form id="form-GETapi-user" data-method="GET" data-path="api/user" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-user" onclick="tryItOut('GETapi-user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-user" onclick="cancelTryOut('GETapi-user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/user</code></b>
</p>
</form>
<h2>Display a listing of the resource.</h2>
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
                    &lt;input type="hidden" name="_token" value="97A8ARLHkxLF02bQDrbxxOvyjQER4BkODqP4b0Q0"&gt;
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
                    &lt;input type="hidden" name="_token" value="97A8ARLHkxLF02bQDrbxxOvyjQER4BkODqP4b0Q0"&gt;
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
                    &lt;input type="hidden" name="_token" value="97A8ARLHkxLF02bQDrbxxOvyjQER4BkODqP4b0Q0"&gt;
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
                    &lt;input type="hidden" name="_token" value="97A8ARLHkxLF02bQDrbxxOvyjQER4BkODqP4b0Q0"&gt;
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
                    &lt;input type="hidden" name="_token" value="97A8ARLHkxLF02bQDrbxxOvyjQER4BkODqP4b0Q0"&gt;
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
                    &lt;input type="hidden" name="_token" value="97A8ARLHkxLF02bQDrbxxOvyjQER4BkODqP4b0Q0"&gt;
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
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETintern" onclick="tryItOut('GETintern');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETintern" onclick="cancelTryOut('GETintern');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETintern" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>intern</code></b>
</p>
</form>
<h2>Show the form for creating a new resource.</h2>
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
         &lt;input type = "hidden" name = "_token" value = "97A8ARLHkxLF02bQDrbxxOvyjQER4BkODqP4b0Q0"&gt;

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
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETintern-create" onclick="tryItOut('GETintern-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETintern-create" onclick="cancelTryOut('GETintern-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETintern-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>intern/create</code></b>
</p>
</form>
<h2>Store a newly created resource in storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://example.test/intern" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"first_name":"laudantium","last_name":"odio"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://example.test/intern"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "laudantium",
    "last_name": "odio"
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
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTintern" onclick="tryItOut('POSTintern');">Try it out ⚡</button>
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
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://example.test/intern/eligendi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://example.test/intern/eligendi"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-GETintern--intern-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETintern--intern-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETintern--intern-"></code></pre>
</div>
<div id="execution-error-GETintern--intern-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETintern--intern-"></code></pre>
</div>
<form id="form-GETintern--intern-" data-method="GET" data-path="intern/{intern}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETintern--intern-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETintern--intern-" onclick="tryItOut('GETintern--intern-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETintern--intern-" onclick="cancelTryOut('GETintern--intern-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETintern--intern-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>intern/{intern}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>intern</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="intern" data-endpoint="GETintern--intern-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Show the form for editing the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://example.test/intern/excepturi/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://example.test/intern/excepturi/edit"
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
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Trying to access array offset on value of type null (View: C:\\Users\\HP\\Desktop\\example\\resources\\views\\update.blade.php)",
    "exception": "Facade\\Ignition\\Exceptions\\ViewException",
    "file": "C:\\Users\\HP\\Desktop\\example\\resources\\views\/Update.blade.php",
    "line": 61,
    "trace": [
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\resources\\views\/Update.blade.php",
            "line": 61,
            "function": "handleError",
            "class": "Illuminate\\Foundation\\Bootstrap\\HandleExceptions",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php",
            "line": 107,
            "function": "require"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php",
            "line": 108,
            "function": "Illuminate\\Filesystem\\{closure}",
            "class": "Illuminate\\Filesystem\\Filesystem",
            "type": "::"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php",
            "line": 58,
            "function": "getRequire",
            "class": "Illuminate\\Filesystem\\Filesystem",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php",
            "line": 61,
            "function": "evaluatePath",
            "class": "Illuminate\\View\\Engines\\PhpEngine",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\facade\\ignition\\src\\Views\\Engines\\CompilerEngine.php",
            "line": 37,
            "function": "get",
            "class": "Illuminate\\View\\Engines\\CompilerEngine",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php",
            "line": 139,
            "function": "get",
            "class": "Facade\\Ignition\\Views\\Engines\\CompilerEngine",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php",
            "line": 122,
            "function": "getContents",
            "class": "Illuminate\\View\\View",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php",
            "line": 91,
            "function": "renderContents",
            "class": "Illuminate\\View\\View",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php",
            "line": 62,
            "function": "render",
            "class": "Illuminate\\View\\View",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php",
            "line": 34,
            "function": "setContent",
            "class": "Illuminate\\Http\\Response",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 783,
            "function": "__construct",
            "class": "Illuminate\\Http\\Response",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 753,
            "function": "toResponse",
            "class": "Illuminate\\Routing\\Router",
            "type": "::"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 693,
            "function": "prepareResponse",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 50,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php",
            "line": 78,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php",
            "line": 49,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\View\\Middleware\\ShareErrorsFromSession",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 121,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 63,
            "function": "handleStatefulRequest",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php",
            "line": 67,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\EncryptCookies",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 695,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 670,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 636,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 610,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\symfony\\console\\Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\symfony\\console\\Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\symfony\\console\\Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\Users\\HP\\Desktop\\example\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "-&gt;"
        }
    ]
}</code></pre>
<div id="execution-results-GETintern--intern--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETintern--intern--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETintern--intern--edit"></code></pre>
</div>
<div id="execution-error-GETintern--intern--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETintern--intern--edit"></code></pre>
</div>
<form id="form-GETintern--intern--edit" data-method="GET" data-path="intern/{intern}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETintern--intern--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETintern--intern--edit" onclick="tryItOut('GETintern--intern--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETintern--intern--edit" onclick="cancelTryOut('GETintern--intern--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETintern--intern--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>intern/{intern}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>intern</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="intern" data-endpoint="GETintern--intern--edit" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update the specified resource in storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://example.test/intern/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://example.test/intern/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
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
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTintern--intern-" onclick="tryItOut('PUTintern--intern-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTintern--intern-" onclick="cancelTryOut('PUTintern--intern-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTintern--intern-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>intern/{intern}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>intern/{intern}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>intern</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="intern" data-endpoint="PUTintern--intern-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Remove the specified resource from storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://example.test/intern/distinctio" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://example.test/intern/distinctio"
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
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEintern--intern-" onclick="tryItOut('DELETEintern--intern-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEintern--intern-" onclick="cancelTryOut('DELETEintern--intern-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEintern--intern-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>intern/{intern}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>intern</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="intern" data-endpoint="DELETEintern--intern-" data-component="url" required  hidden>
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
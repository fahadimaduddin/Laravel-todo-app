<!doctype html>
<html>
   <head>
      <title>Todo App Demo</title>
      <link
         rel="stylesheet"
         href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
         />
   </head>
   <body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="container-fluid">
      <a class="navbar-brand" href="/">FahadImaduddin Todo App Demo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
         <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="/">All Task</a>
            <a class="nav-link" href="/tasks/create">New Task</a>
         </div>
      </div>
   </div>
</nav>
      <div class="container">
         @yield('content')
      </div>
   </body>
</html>
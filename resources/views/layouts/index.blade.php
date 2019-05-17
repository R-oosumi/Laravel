<html>
<head>
  <title>@yield('title')</title>
  <style>
  /*
    <table>で(align)等が反応しないためそれぞれで記載すること
  */
  tr th{text-align: center;}
  tr td{text-align: center;}
  .pagination {font-size: 20pt;}
  .pagination li {display: inline-block;}
  </style>
  <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
  @yield('content')
</body>
</html>

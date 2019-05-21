<html>
<head>
  <title>@yield('title')</title>
  <!-- <table>で(align)等が反応しないためそれぞれで記載すること -->
  <style>
  tr th{text-align: center;}
  tr td{text-align: center;}
  .pagination {font-size: 20pt;}
  .pagination li {display: inline-block;}
  </style>
  <link rel="stylesheet" type="text/css" href="/css/app.css">
  <!-- 文字化けをさせないようにする -->
  <meta charset="utf-8">
</head>
<body>
  @yield('content')
</body>
</html>

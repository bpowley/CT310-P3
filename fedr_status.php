<!DOCTYPE html>
<html lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Federation Status Page</title>
<script src="./jquery.min.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="./fedr_status.js"></script>
</head>
<body>
  <div style="padding-left: 8px;">
    <h3 style="text-align: center">Federation Status Page</h3>
    <p> This page should display which sites are open, closed, and not responding within the federation</p>
    <table class="table table-striped" id="sites">
      <tr>
        <th>Team #</th>
        <th>Name Short</th>
        <th>Name Long</th>
        <th>URL</th>
        <th>Status</th>
      </tr>
    </table>
    <p>
      Status of Sites AJAX Call: <span id="output1">...</span>
    </p>
    <p id="debug">Debug statements will display here</p>
    <p id="debug2">Debug2 statements will display here</p>
  </div>

</body>
</html>

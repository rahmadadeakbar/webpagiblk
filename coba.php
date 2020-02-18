<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>clone demo</title>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>
<body>

	<div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_lomba">Nama Lomba
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="nama_lomba" name="nama_lomba" required="required" class="form-control col-md-7 col-xs-12" value="">
        </div>
    </div>
    <br>
 
<b>Hello</b><p>, how are you?</p>
 
<script>
$( ".form-group" ).clone().appendTo( "body" );
</script>

 
</body>
</html>
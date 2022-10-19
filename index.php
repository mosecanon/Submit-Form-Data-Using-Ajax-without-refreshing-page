<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Submit Form Data Using Ajax</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<body>
  
<div class="col-lg-12">
	<div class="card">
		<div class="card-body">
      <div class="row">
        <h3>Submit Form Data Using Ajax</h3>
        <div class="col-md-6 border-right">
            <form action="#" method="post" id="manage_user">
              <div class="form-group">
                <input type="text" class="form-control form-control-sm" name="username" placeholder="Enter Username">
              </div>
              <br>
              <div class="form-group">
                <input type="email" class="form-control form-control-sm" name="email" placeholder="test@gmail.com">
              </div>
              <br>
              <div class="form-group">
                <input type="password" class="form-control form-control-sm" name="password" placeholder="**********">
              </div>
              <br>
              <div id="error_msg"></div>
              <div class="form-group">
                <button class="btn btn-success" type="submit">Submit</button>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
<script src="action.js"></script>
</html>

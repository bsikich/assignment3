 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title></title>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

   <!--[if lt IE 9]>
       <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
       <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->
 </head>

 <body>


   <nav class="navbar navbar-default">
     <div class="container-fluid">
       <!-- Brand and toggle get grouped for better mobile display -->
       <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
         <a class="navbar-brand" href="#">ToDo</a>
       </div>

       <!-- Collect the nav links, forms, and other content for toggling -->
       <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav">
           <li><a href="<?php echo base_url() ?>">Home <span class="sr-only">(current)</span></a></li>
           <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects <span class="caret"></span></a>
             <ul class="dropdown-menu">
               <li><a href="<?php echo base_url() ?>index.php/projects">View Projects</a></li>
               <li class="active"><a href="<?php echo base_url() ?>index.php/projects/addProject">Add Project</a></li>
             </ul>
           </li>
           <li><a href="#">Tasks </a></li>
         </ul>
         <ul class="nav navbar-nav navbar-right">
           <li><a href="#">Account</a></li>
         </ul>
       </div>  <!-- /.navbar-collapse -->
     </div>  <!-- /.container-fluid -->
   </nav>


 <div class="container">
   <div class="row">
     <h3>Create New Project</h3>
   <?php echo form_open('projects/create') ?>
   <div class="form-group">
       <label class="control-label">Name:</label>
       <input type="text" class="form-control" name="name" placeholder="Project Name" required>
   </div>
   <div class="form-group">
       <label class="control-label col-sm-4">Description:</label>
       <input type="text" class="form-control" name="description" placeholder="Long Description">
   </div>
   <button type="submit" class="btn btn-default">Submit</button>
   <?php echo form_close(); ?>

 </div> <!-- row -->
 </div> <!-- container -->



   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 </body>

 </html>
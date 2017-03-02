<!-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>My View is loaded</p>

    <?php foreach($records as $row) : ?>
          <h1><?php echo $row->name; ?></h1>
          <h4><?php echo $row->description;?></h4>
    <?php endforeach; ?>
  </body>
</html> -->

<!--***********************************************************************************************************************************************-->
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
          <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url() ?>index.php/projects">View Projects</a></li>
              <li><a href="<?php echo base_url() ?>index.php/projects/addProject">Add Project</a></li>
            </ul>
          </li>
          <li><a href="#">Tasks </a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Account</a></li>
        </ul>
      </div> <!-- /.navbar-collapse -->
    </div> <!-- /.container-fluid -->
  </nav>

<div class="container">
  <div class="row">
    <p> </p>

    <div class="col-md-10 col-md-offset-1">

      <div class="panel panel-default panel-table">
        <div class="panel-heading">
          <div class="row">
            <div class="col col-xs-6">
              <h3 class="panel-title">Projects</h3>
            </div>
            <div class="col col-xs-6 text-right">
              <a href="<?php echo base_url() ?>index.php/projects/addProject" class="btn btn-sm btn-primary btn-create" role="button">Create New</a>
              <!-- <button type="button" class="btn btn-sm btn-primary btn-create">Create New</button> -->
            </div>
          </div>
        </div>
        <div class="panel-body">
          <table id="projectTable" class="table table-striped table-bordered table-list">
            <thead>
              <tr>
                <th><em class="fa fa-cog"></em></th>
                <th class="hidden-xs">ID</th>
                <th>Name</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>

              <?php
                foreach ($records as $row) {
                  echo '<tr>
                    <td align="center">
                      <a id="' . $row->id .'" class="btn btn-default"><em class="fa fa-pencil"></em></a>
                      <a href="'. base_url() . 'index.php/projects/delete/' . $row->id . '" class="btn btn-danger"><em class="fa fa-trash"></em></a>
                    </td>
                    <td class="hidden-xs">' . $row->id . '</td>
                    <td id="name">' . $row->name . '</td>
                    <td id="desc">' . $row->description . '</td>
                  </tr>';

                }

              ?>

              <!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h2  class="modal-title" id="modalHeader">Edit Information</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="project_edit.php" method="post">
        </form>

        <?php echo form_open('projects/update') ?>
        <div class="row">
          <div class="col-sm-2">
            <input id="editId" class="form-control" name="uneditedId" type="hidden"/>
          </div>
        </div>
        <br/>
        <div class="row">
          <div class="col-sm-offset-2 col-sm-2">
            <label style="margin-top:5px; padding-left:45px;" class="control-label">Name:</label>
          </div>
          <div class="col-sm-4">
            <input id="editName" class="form-control" type="text" autofocus="TRUE" name="editedName" required="TRUE"/>
          </div>
        </div>
          <br/>
          <label class="control-label">Description:</label>
          <input id="editDesc" class="form-control" type="text" name="editedDescription" required="TRUE" />

      </div>
    <div class="modal-footer">
      <div class="text-center">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>

        <?php echo form_close(); ?>

    </div>
  </div>
</div>

              <!-- <tr>
                <td align="center">
                  <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                  <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                </td>
                <td class="hidden-xs">3</td>
                <td>Custom E-commerce Site</td>
                <td>Custom shopping cart that accommodates matrix of sizes, colors and custom messages.</td>
              </tr> -->

            </tbody>
          </table>

        </div>
        <div class="panel-footer">
          <div class="row">
            <div class="col col-xs-4">Page 1 of 5
            </div>
            <div class="col col-xs-8">
              <ul class="pagination hidden-xs pull-right">
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
              </ul>
              <ul class="pagination visible-xs pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  <!-- row -->
</div> <!-- container -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('a.btn-default').click(function(){
        var id = this.id;
        var nameText = $(this).closest('tr').children('#name').text();
        var descText = $(this).closest('tr').children('#desc').text();
        console.log(nameText + ", " + descText);
        $('#editId').val(id);
        $('#editName').val(nameText);
        $('#editDesc').val(descText);
         $('#editModal').modal('toggle');

        });
      });
  </script>
</body>

</html>

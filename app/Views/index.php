<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/navbar') ?>
    <div class="container mt-5">
		<div class="row">
			<div class="col-2"></div>
			<div class="col-8">
				<div class="text-right">
					<a href="" class="btn btn-warning btn-sm text-white font-weight-bolder" data-toggle="modal" data-target="#createPizza">
						<i class="material-icons float-left">add</i>&nbsp;Add
					</a>
				</div>
				<hr>
				<table class="table table-borderless">
					<tr>
						<th>Name</th>
						<th>Ingredients</th>
						<th>Price</th>
						<th></th>
					</tr>
					<tr>
						<td>Jack Pizza</td>
						<td>Tomatoes, ham, cheese, peperoni</td>
						<td>15$</td>
						<td>
							<a href="" data-toggle="modal" data-target="#updatePizza"><i class="material-icons text-info">edit</i></a>
							<a href=""><i class="material-icons text-danger">delete</i></a>
						</td>
					</tr>
					<tr>
						<td>Seiha Pizza</td>
						<td>Tomatoes, ham, cheese, peperoni</td>
						<td>1.5$</td>
						<td>
							<a href=""  data-toggle="modal" data-target="#updatePizza"><i class="material-icons text-info">edit</i></a>
							<a href=""><i class="material-icons text-danger">delete</i></a>
						</td>
					</tr>
					<tr>
						<td>Rady Pizza</td>
						<td>Tomatoes, ham, cheese, peperoni</td>
						<td>1500$</td>
						<td>
							<a href=""  data-toggle="modal" data-target="#updatePizza"><i class="material-icons text-info">edit</i></a>
							<a href=""><i class="material-icons text-danger">delete</i></a>
						</td>
					</tr>
					<tr>
						<td>Ronan Pizza</td>
						<td>Tomatoes, ham, cheese, peperoni</td>
						<td>1$</td>
						<td>
							<a href=""  data-toggle="modal" data-target="#updatePizza"><i class="material-icons text-info">edit</i></a>
							<a href=""><i class="material-icons text-danger">delete</i></a>
						</td>
					</tr>
				</table>
			</div>
			<div class="col-2"></div>
		</div>
	</div>


<!-- ========================================START Model CREATE================================================ -->
	<!-- The Modal -->
	<div class="modal fade" id="createPizza">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Creat Pizza</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body text-right">
			<form  action="/" method="post">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Pizza name">
				</div>
				<div class="form-group">
					<input type="number" class="form-control" placeholder="Prize in dollars">
				</div>
				<div class="form-group">
					<textarea name="" placeholder="Ingredients" class="form-control"></textarea>
				</div>
			<a data-dismiss="modal" class="closeModal">DISCARD</a>
		 	 &nbsp;
		  <input type="submit" value="CREATE" class="createBtn text-warning">
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- =================================END MODEL CREATE==================================================== -->

  <!-- ========================================START Model UPDATE================================================ -->
	<!-- The Modal -->
	<div class="modal fade" id="updatePizza">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Pizza</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body text-right">
			<form  action="/" method="post">
				<div class="form-group">
					<input type="text" class="form-control" value="Rady Pizza">
				</div>
				<div class="form-group">
					<input type="number" class="form-control" value="100">
				</div>
				<div class="form-group">
					<textarea name=""  class="form-control">Cheese, Tomatoes, Chicken, Salad</textarea>
				</div>
			<a data-dismiss="modal" class="closeModal">DISCARD</a>
		 	 &nbsp;
		  <input type="submit" value="UPDATE" class="createBtn text-warning">
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- =================================END MODEL UPDATE==================================================== -->
<?= $this->endSection() ?>

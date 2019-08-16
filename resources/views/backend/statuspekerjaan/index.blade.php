@extends('backend.layouts.app')

@section('content')

<div class="content">

	<div class="animated fadeIn">
		<div class="row">

			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong class="card-title">Data Status Pekerjaan</strong>
						<a href ="{{ route('statuspekerjaan.create') }}" class="btn btn-primary float-right"><i class="menu-icon fa fa-plus"></i> Tambah Data</a>
					</div>
					<div class="card-body">
						<table id="bootstrap-data-table" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th width="180px">Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; ?>
								@foreach($statuspekerjaans as $statuspekerjaan)
								<tr>
									<td>{{ $no++ }}</td>
									<td>{{ $statuspekerjaan->nama }}</td>
									<td>
										<form action=" {{ route('statuspekerjaan.destroy', $statuspekerjaan->id) }} " method="post">
					             {{ csrf_field() }}
					             {{ method_field("DELETE") }}
					             <a href="{{route('statuspekerjaan.edit', $statuspekerjaan->id)}}" class="btn btn-sm btn-primary">
					               <i class="fa fa-edit"></i> Edit
					             </a>
					             <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-sm btn-danger">
					               <i class="fa fa-trash"></i> Hapus
					             </button>
					           </form>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>


		</div>
	</div><!-- .animated -->
</div><!-- .content -->

@endsection

@section('script')

<script src="/elaadmin/assets/js/lib/data-table/datatables.min.js"></script>
<script src="/elaadmin/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
<script src="/elaadmin/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="/elaadmin/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
<script src="/elaadmin/assets/js/lib/data-table/jszip.min.js"></script>
<script src="/elaadmin/assets/js/lib/data-table/vfs_fonts.js"></script>
<script src="/elaadmin/assets/js/lib/data-table/buttons.html5.min.js"></script>
<script src="/elaadmin/assets/js/lib/data-table/buttons.print.min.js"></script>
<script src="/elaadmin/assets/js/lib/data-table/buttons.colVis.min.js"></script>
<script src="/elaadmin/assets/js/init/datatables-init.js"></script>


<script type="text/javascript">
		$(document).ready(function() {
			$('#bootstrap-data-table-export').DataTable();
	} );
</script>

@endsection
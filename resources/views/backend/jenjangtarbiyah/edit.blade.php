@extends('backend.layouts.app')

@section('content')

<div class="content">

	<div class="animated fadeIn">
		<div class="row">

			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong class="card-title">Tambah Jenjang Tarbiyah</strong>
					</div>
					<div class="card-body card-block">
						<form action="{{ route('jenjangtarbiyah.update', $jenjangtarbiyah->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
							@csrf
							@method('PUT')
							<div class="row form-group">
                <div class="col col-md-3">
                	<label for="text-input" class=" form-control-label">Nama</label>
                </div>
                <div class="col-12 col-md-12">
                	<input type="text" id="text-input" name="nama" placeholder="Masukkan Nama Keahlian" class="form-control" value="{{ $jenjangtarbiyah->nama }}">
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-sm">Submit</button>
              <a href="{{ route('jenjangtarbiyah.index') }}" class="btn btn-default btn-sm">Batal</a>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div><!-- .animated -->
</div><!-- .content -->

@endsection
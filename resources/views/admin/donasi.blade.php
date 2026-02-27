@extends('admin.layouts_admin.app')
@section('content')
 <!--start main content-->
     <main class="page-content">
        <!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Tables</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Data Table</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
       <!-- Table -->
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Donatur</th>
                                <th>Tujuan Donasi</th>
                                <th>Tanggal Donasi</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($donasi as $d)
                                <tr>
                                    <td>{{ $d->id }}</td>
                                    <td>{{ $d->donatur->nama ?? '-' }}</td>
                                    <td>{{ $d->tujuanDonasi->nama_tujuan ?? '-' }}</td>
                                    <td>{{ \Carbon\Carbon::parse($d->tanggal_donasi)->format('d M Y') }}</td>
                                    <td>
                                        @if($d->status == 'menunggu')
                                            <span class="badge bg-warning text-dark">Menunggu</span>
                                        @elseif($d->status == 'diterima')
                                            <span class="badge bg-success">Diterima</span>
                                        @elseif($d->status == 'disalurkan')
                                            <span class="badge bg-primary">Disalurkan</span>
                                        @endif
                                    </td>
                                    <td>
                                        <!-- Update status form -->
<form action="{{ route('admin.donasi.updateStatus', $d->id) }}" method="POST" class="d-flex gap-2">
    @csrf
    <select name="status" class="form-select form-select-sm">
        <option value="menunggu" {{ $d->status == 'menunggu' ? 'selected' : '' }}>Menunggu</option>
        <option value="diterima" {{ $d->status == 'diterima' ? 'selected' : '' }}>Diterima</option>
        <option value="disalurkan" {{ $d->status == 'disalurkan' ? 'selected' : '' }}>Disalurkan</option>
    </select>
    <button type="submit" class="btn btn-sm btn-primary">Update</button>
</form>

                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Belum ada data donasi</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

     </main>
     <!--end main content-->
 


@endsection
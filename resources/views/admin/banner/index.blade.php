@extends('layouts.app')

@section('sidebar')
@include('layouts.admin_sidebar')
@endsection

@section('content')

<div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Menu</span>
            <h3 class="page-title">Banner</h3>
        </div>
    </div>
    <!-- End Page Header -->
    <div class="row">
        <div class="col-lg-4 col-md-12">
            <!-- Post Overview -->
            <div class="card card-small mb-3">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Tambah Material</h6>
                </div>
                <form action="{{route('add.material.banner')}}" method="post">
                    @csrf
                    <div class="card-body p-0">
                        <div class="form-group col-md-12 mt-2">
                            <label for="material-name">Nama Bahan</label>
                            <input name="name" type="text" class="form-control" id="material-name"
                                placeholder="Nama Bahan" value="{{ old('name') }}">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="harga">Harga</label>
                            <input name="price" type="number" class="form-control" id="harga" placeholder="Harga /m2"
                                value="{{old('price')}}">
                        </div>
                    </div>

                    <li class="list-group-item d-flex px-3">
                        <button class="btn btn-sm btn-outline-accent"><i class="material-icons">add</i> Tambah
                        </button>
                        <a href="{{ url()->previous() }}" class="btn btn-sm btn-danger ml-auto"><i
                                class="material-icons">clear</i>
                            Batal</a>
                    </li>
                </form>
            </div>
            <!-- / Post Overview -->
        </div>
        <div class="col-lg-8 col-md-12">
            <!-- Add New Post Form -->
            <div class="card card-small mb-9">
                <div class="card-header border-bottom">
                    <h6 class="m-0">List</h6>
                </div>
                <div class="card-body p-0">
                    <div class="form-group col-md-12 mt-2">
                        <table id="datatable" class="table table-sm">
                            <thead class="bg-light">
                                <tr>
                                    <th scope="col" class="border-0" style="width:0%;"></th>
                                    <th width="50%">Nama Bahan</th>
                                    <th width="20%">Harga /m2</th>
                                    <th width="0%">Actions</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- / Add New Post Form -->
        </div>

    </div>
</div>

@endsection

@push('js')
<script type="text/javascript" language="javascript">
    var table = $('#datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route ('json.banner.material') }}",
        columns: [
          {
            data: 'DT_RowIndex',
            name: 'DT_RowIndex',
            orderable: false,
          },
          {
            data: 'name',
            name: 'name',
          },
          {
            data: 'price',
            name: 'price',
          },
          {
            data: 'action',
            name: 'action',
            searchable: false,
          },
        ],
      });
    function drawTable() {
      table.ajax.reload();
    }
</script>
<script>
    function ConfirmDelete() {
        var id = document.getElementById('name');
        var name = id.getAttribute('data-name');
        var result = confirm("Apakah anda yakin akan menghapus " + name + "?");
        if (result)
            return true;
        else
            return false;
    }
</script>
@endpush

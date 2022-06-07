@extends('layouts.master')

@section('content')
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
    <br>
    
    <!-- DataTales Example -->
    
        
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>DATA KATEGORI CHECKLIST</h5>
                        <a href="" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#ModalCreate"><i class ="fas fa-plus fa-fw"></i>Tambah Data</a><br><br>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col"><center>#</center></th>
                                        <th scope="col"><center>Nama Item</center></th>
                                        <th scope="col"><center>Aksi</center></th>
                                    </tr>
                                    <tr>
                                        <th scope="row"><center>1</center></th>
                                        <td><center>Mark</center></td>
                                        <td><center><a href="" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#ModalEdit"><i class="bi bi-pencil-square"></i>Edit</a> |
                                            <a href="" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#ModalDelete"><i class="bi bi-trash"></i></a></center></td>
                                    </tr>
                                </thead>
                                <!-- modal create -->
                                <div class="modal fade" id="ModalCreate" tabindex="-1" aria-labelledby="ModalCreateLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="ModalCreateLabel">Tambah Data Kategori Checklist</h5>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">Nama Kategori:</label>
                                                    <input type="text" class="form-control" id="recipient-name">
                                                </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                <button type="button" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- modal edit -->
                                <div class="modal fade" id="ModalEdit" tabindex="-1" aria-labelledby="ModalEditLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="ModalEditLabel">Edit Data Kategori Checklist</h5>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">Nama Kategori:</label>
                                                    <input type="text" class="form-control" id="recipient-name">
                                                </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                <button type="button" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- modal delete -->
                                <div class="modal fade" id="ModalDelete" tabindex="-1" aria-labelledby="ModalDeleteLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <!-- <div class="modal-header">
                                                <h5 class="modal-title" id="ModalDeleteLabel">Edit Data Kategori Checklist</h5>
                                            </div> -->
                                            <div class="modal-dialog modal-dialog-centered">
                                                 <h5 class="modal-title" id="ModalDeleteLabel">Apakah anda yakin?</h5>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <p><center>Apakah anda ingin menghapus data ini?</center></p>
                                                    <p><center>Data yang sudah terhapus tidak dapat dikembalikan</center></p>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                <button type="button" class="btn btn-danger">Hapus</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
</div>
    <!-- End of Content Wrapper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <script>
        
    </script>
@endsection

 <table class="table table-report -mt-2 datatables dataTable no-footer" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 1184px;">
 <thead>
     <tr>
        <th class="whitespace nowrap sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#ID: activate to sort column descending" style="width: 97px;">#ID</th>
        <th class="whitespace-nowrap sorting" tabindex="0" aria controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Nama: activate to sort column ascending" style="width: 155px;">Nama</th> 
        <th class="whitespace-nowrap sorting" tabindex="0" aria-controls="DataTables Table_0" rowspan="1" colspan="1" aria-label="Urutan: activate to sort column ascending" style="width: 145px;">Urutan</th>
        <th class="whitespace-nowrap sorting" tabindex="0" aria-controls="DataTables Table_0" rowspan="1" colspan="1" aria-label="Icon: activate to sort column ascending" style="width: 125px;">Icon</th> 
        <th class="whitespace-nowrap sorting" tabindex="0" aria-controls="DataTables Table @" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 141px;">Status</th>
        <th class="text-center whitespace-nowrap sorting_disabled" rowspan="1" colspan="1" aria-label="Aksi" style="width: 303px;">Aksi</th>
    </tr>
</thead>
<tbody>
    <tr class="add"></tr>
    <tr class="even"></tr>
    <tr class="odd"></tr>
    <tr class="even"></tr>
</tbody>
</table>
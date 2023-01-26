@extends('templates.sidebar')

@section('container')
<!-- Page Heading -->
<h1 class="h3 mb-5 text-gray-800">Promotion</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($promotions as $promotion)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img width="100px" src="{{ $promotion->image }}" alt=""></td>
                        <td>{{ $promotion->name }}</td>
                        <td>{{ $promotion->price }}</td>
                        <td>{{ $promotion->created_at }}</td>
                        <td>
                            <a class="btn btn-warning btn-circle btn-view" data-toggle="modal" data-target="#viewModal" data-id="{{ $promotion->id }}" data-name="{{ $promotion->name }}" data-description="{{ $promotion->description }}" data-price="{{ $promotion->price }}"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-success btn-circle btn-edit" data-toggle="modal" data-target="#editModal" data-id="{{ $promotion->id }}" data-name="{{ $promotion->name }}" data-description="{{ $promotion->description }}" data-price="{{ $promotion->price }}"><i class="fa fa-pen"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection


@section('modal')
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Promotion</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Are you sure?</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <form id="form_delete" method="post" class="d-inline">
                            <input type="hidden" name="id" class="id">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-primary">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
    </div>

<form method="post" action="promotion" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Promotion</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="name" placeholder="Title" required>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea type="text" class="form-control" name="description" placeholder="Description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" class="form-control" name="price" placeholder="Price" required>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image" placeholder="Image">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" type="submit">Add</button>
                    </div>
                </div>
            </div>
    </div>
</form>

<form method="post" id="form_edit" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Promotion</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control name" name="name" placeholder="Title" required>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea type="text" class="form-control description" name="description" placeholder="Description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" class="form-control price" name="price" placeholder="Price" required>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control image" name="image" placeholder="Image">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" type="submit">Edit</button>
                    </div>
                </div>
            </div>
    </div>
</form>

<form method="post">
    @csrf
    <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail Promotion</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control name" name="name" placeholder="Title" readonly>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea type="text" class="form-control description" name="description" placeholder="Description" readonly></textarea>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" class="form-control price" name="price" placeholder="Price" readonly>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
    </div>
</form>

@endsection

@section('script')
    <script>
          $('.btn-edit').on('click', function() {
            const id = $(this).data('id');
            const name = $(this).data('name');
            const description = $(this).data('description');
            const price = $(this).data('price');
            $('.id').val(id);
            $('.name').val(name);
            $('.description').val(description);
            $('.price').val(price);
            $('#editModal').modal('show');
            $('#form_edit').attr('action', `promotion/${id}`);
        });

        $('.btn-view').on('click', function() {
            const id = $(this).data('id');
            const name = $(this).data('name');
            const description = $(this).data('description');
            const price = $(this).data('price');
            $('.id').val(id);
            $('.name').val(name);
            $('.description').val(description);
            $('.price').val(price);
            $('#viewModal').modal('show');
        });

        $('.btn-delete').on('click', function() {
            const id = $(this).data('id');
            $('.id').val(id);
            $('#deleteModal').modal('show');
            $('#form_delete').attr('action', `promotion/${id}`);
        });
    </script>
@endsection

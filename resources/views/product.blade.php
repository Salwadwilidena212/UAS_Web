@extends('templates.sidebar')

@section('container')
<!-- Page Heading -->
<h1 class="h3 mb-5 text-gray-800">Product</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="table-responsive">
            <a class="btn btn-success mb-5 rounded-pill" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i> Add Product</a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Rating</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img width="100px" src="{{ $product->image }}" alt=""></td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->rating }}</td>
                        <td>{{ $product->created_at }}</td>
                        <td>
                            <a class="btn btn-warning btn-circle btn-view" data-toggle="modal" data-target="#viewModal" data-id="{{ $product->id }}" data-name="{{ $product->name }}" data-description="{{ $product->description }}" data-price="{{ $product->price }}" data-rating="{{ $product->rating }}"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-success btn-circle btn-edit" data-toggle="modal" data-target="#editModal" data-id="{{ $product->id }}" data-name="{{ $product->name }}" data-description="{{ $product->description }}" data-price="{{ $product->price }}" data-rating="{{ $product->rating }}"><i class="fa fa-pen"></i></a>
                            <a class="btn btn-danger btn-circle btn-delete" data-id="{{ $product->id }}"><i class="fa fa-trash"></i></a>
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
                        <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
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

<form method="post" action="product" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
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
                            <label>Rating</label>
                            <input type="text" class="form-control" name="rating" placeholder="Rating" required>
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
                        <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
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
                            <label>Rating</label>
                            <input type="text" class="form-control rating" name="rating" placeholder="Rating" required>
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
                        <h5 class="modal-title" id="exampleModalLabel">Detail Product</h5>
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
                        <div class="form-group">
                            <label>Rating</label>
                            <input type="text" class="form-control rating" name="rating" placeholder="Rating" readonly>
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
            const rating = $(this).data('rating');
            $('.id').val(id);
            $('.name').val(name);
            $('.description').val(description);
            $('.price').val(price);
            $('.rating').val(rating);
            $('#editModal').modal('show');
            $('#form_edit').attr('action', `product/${id}`);
        });

        $('.btn-view').on('click', function() {
            const id = $(this).data('id');
            const name = $(this).data('name');
            const description = $(this).data('description');
            const price = $(this).data('price');
            const rating = $(this).data('rating');
            $('.id').val(id);
            $('.name').val(name);
            $('.description').val(description);
            $('.price').val(price);
            $('.rating').val(rating);
            $('#viewModal').modal('show');
        });

        $('.btn-delete').on('click', function() {
            const id = $(this).data('id');
            $('.id').val(id);
            $('#deleteModal').modal('show');
            $('#form_delete').attr('action', `product/${id}`);
        });
    </script>
@endsection

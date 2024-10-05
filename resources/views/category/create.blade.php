@extends('layouts.frontend')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Category List
                            <a href="{{url('category/create')}}" class="btn btn-primary float-end">Add Category</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('category.store')}}" method="POST">
                            
                            <div class="mb-3">
                                <label>Name :</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Description :</label>
                                <textarea name="description" rows="3" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label>Status :</label>
                                <input type="checkbox" name="status" /> checked=visible, unchecked=unvisible
                            </div>
                            <div class="mb-3">
                                <button  type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')
@section('content')
    <div class="col">
        <form action="{{route('pets.store')}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"for="category_id">Category</label>
                <div class="col-sm-5">
                    <select name="category_id" class="form-control" id="category_id" required>
                        @foreach($category as $id => $display)
                            <option value="{{ $id }}">{{ $display }}</option>
                        @endforeach
                    </select>
                    <small class="form-text text-muted">The Category for dog.</small>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="title">title</label>
                <div class="col-sm-5">
                    <input name="title" type="text" class="form-control" placeholder="title"/>
                    <small class="form-text text-muted">Any title for the dog.</small>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="rate">rate</label>
                <div class="col-sm-5">
                    <input name="rate" type="number" class="form-control" placeholder="rate"/>
                    <small class="form-text text-muted">rate for the dog.</small>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="price">price</label>
                <div class="col-sm-5">
                    <input name="price" type="number" step="0.01" class="form-control" placeholder="price"/>
                    <small class="form-text text-muted">price for the dog.</small>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="img">image</label>
                <div class="col-sm-5">
                    <input name="img" type="file" class="form-control btn"/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="description">description</label>
                <div class="col-sm-5">
                    <input name="description" type="text" class="form-control" placeholder="description"/>
                    <small class="form-text text-muted">price for the dog.</small>
                </div>
            </div>
            @csrf
            <div class="form-group row">
                <div class="col-sm-3">
                    <button type="submit" class="btn btn-primary">Add Reservation</button>
                </div>
            </div>
               </form>
    </div>
@endsection

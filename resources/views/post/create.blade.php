@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('post.store') }}" method="post">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Post Title">
            </div>
            <div class="form-group">
                <label for="">Category</label>
               <select name="category_id"  class="form-control">
             @foreach ($categories as $category)
                    <option value="{{ $category->id }}"> {{ $category->name }}</option>
             @endforeach
             </select> 
            </div>        

            <div class="form-group">
                <label for="">Content</label>
                <textarea name="content" rows="5" class="form-control" placeholder="Post content"></textarea>
            </div>

            <div class="form-group">
                 <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </form>
    </div>
@endsection
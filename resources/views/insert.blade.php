@extends('base')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-9 mx-auto">
            <div class="card bg-light">
                <div class="card-header bg-secondary text-white">
                    <h4><i>Insert Bookie</i></h4>
                </div>

                <div class="card-body">
                    <form action="{{route('book.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
       
                        <div class="form-group">
                           <label for="">Author</label>
                           <input type="text" name="author" class="form-control">
                       </div>
       
                       <div class="form-group">
                           <label for="">ISBN</label>
                           <input type="text" name="isbn" class="form-control">
                       </div>
       
                       <div class="form-group">
                           <label for="">Cover</label>
                           <input type="file" name="cover" class="form-control">
                       </div>
       
                       <div class="form-group">
                           <label for="">Description</label>
                           <textarea type="text" name="descr" class="form-control"></textarea>
                       </div>
       
                       <div class="form-group mt-1">
                           <input type="submit" class="btn btn-danger w-100">
                       </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>
    
@endsection
@extends('base')

@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-lg-2">
            <h3 class="bg-danger text-warning">All Categories</h3>
<div class="form-group">
    <a href="" class="list-group-item list-group-item-action list-group-item-info">Programming Books</a>
    <a href="" class="list-group-item list-group-item-action list-group-item-danger">Biographies</a>
    <a href="" class="list-group-item list-group-item-action list-group-item-danger">Business</a>
    <a href="" class="list-group-item list-group-item-action list-group-item-success">Comics</a>
    <a href="" class="list-group-item list-group-item-action list-group-item-success">Computer & Tech</a>
    <a href="" class="list-group-item list-group-item-action list-group-item-success">Cooking</a>
    <a href="" class="list-group-item list-group-item-action list-group-item-secondary">Edu & Referance</a>
    <a href="" class="list-group-item list-group-item-action list-group-item-secondary">Entertainment</a>
    <a href="" class="list-group-item list-group-item-action list-group-item-primary">Gay & Lesbian</a>
    <a href="" class="list-group-item list-group-item-action list-group-item-primary">Health & Fitness</a>
    <a href="" class="list-group-item list-group-item-action list-group-item-primary">History</a>
    <a href="" class="list-group-item list-group-item-action list-group-item-primary">Hobbies & Crafts</a>
    <a href="" class="list-group-item list-group-item-action list-group-item-primary">Home  Garden</a>
    <a href="" class="list-group-item list-group-item-action list-group-item-primary">Horror</a>
    <a href="" class="list-group-item list-group-item-action list-group-item-secondary">Kids</a>
    <a href="" class="list-group-item list-group-item-action list-group-item-secondary">Literature & Fiction</a>
    <a href="" class="list-group-item list-group-item-action list-group-item-warning">Medical</a>
    <a href="" class="list-group-item list-group-item-action list-group-item-warning">Mysteries</a>
    <a href="" class="list-group-item list-group-item-action list-group-item-danger">Parenting</a>
    <a href="" class="list-group-item list-group-item-action list-group-item-info">Religion</a>
    <a href="" class="list-group-item list-group-item-action list-group-item-success">Romance</a>
    <a href="" class="list-group-item list-group-item-action list-group-item-info">Sci-Fi & Fantasy</a>
    <a href="" class="list-group-item list-group-item-action list-group-item-dark">Science & Math</a>
</div>
        </div>
        <div class="col-lg-10">
            <table class="tabl"><h3 class="bg-danger text-warning text-center">Welcome To My New Bookie Store</h3>
            <div class="row">
                @foreach($bookies as $d)
                    <div class="col-lg-6 ">
                        <div class="card bg-light m-2">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <h5 class="btn btn-dark text-white">S No. :-{{ $d->id }} </h5>
                                        <h4>{{ $d->title }}</h4>
                                        <h6>Author :-{{ $d->author }} </h6>
                                        <h6>ISBN :-{{ $d->isbn }} </h6>
                                        <h5>Description :-</h5><small class="lead">{{ $d->descr }}</small> 
                                    </div>
                                    <div class="col-lg-4">
                                        <img src="{{ asset('covers/'.$d->cover) }}" alt="" width="200px" height="200px" class="card-img-bottom">
                                        <a href="" class="btn btn-danger card-a-top">buy now</a>

                                        <div class="foat-end">
                                            <form action="{{route('book.destroy',['book' => $d->id])}}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <input type="submit" value="delete" class="btn btn-danger">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </table>
        </div>
    </div>
</div>
@endsection

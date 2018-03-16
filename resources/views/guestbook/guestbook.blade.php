@extends('layouts.app')

@section('content')
    <div class="container">

        <form class="form-horizontal" method="post" action="" >

            <textarea id="textarea" rows="3" cols="30" >
            </textarea>

            <div class="form-group">
                <div class="col-md-8 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        写下记事
                    </button>
                </div>
            </div>
        </form>

    </div>
@endsection
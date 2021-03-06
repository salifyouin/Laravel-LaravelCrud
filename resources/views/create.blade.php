@include('inc.header')
<div class="container spacer">
    <div class="row">
        <div class="col-md-6">
            <form  method="post" action="{{url('/insert')}}">
                {{csrf_field()}}
                @if(count($errors)>0)
                    @foreach($errors->all() as $errors)
                         <div class="alert alert-danger">
                             {{$errors}}
                         </div>
                        @endforeach
                        @endif
                <div class="form-group">
                    <label class="control-label">Title:</label>
                    <input type="text" name="title" class="form-control"/>
                    <span></span>
                </div>
                <div class="form-group">
                    <label class="control-label">Description:</label>

                    <textarea class="form-control" placeholder="Description" name="description"></textarea>
                    <span></span>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Enregistre</button>
                </div>
                <a href="{{url('/')}}" class="btn btn-primary">retour</a>
            </form>
        </div>
    </div>
</div>
@include('inc.footer')
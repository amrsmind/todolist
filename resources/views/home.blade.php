@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row">

               @foreach ($todoitems as $todoitem)

               <div class="col-md-6">
                    <div class="card" >
                            <div class="card-body">
                              <h6 class="card-subtitle mb-2 text-muted">{{ $todoitem->title }}</h6>
                              <p class="card-text">{{ $todoitem->content }}</p>
                            </div>
                          </div>
                </div>

               @endforeach
               <div class="col-md-6">
                    <div class="card" >
                            <div style="text-align:center" class="card-body ">


                                <button style="border-radius: 50%;width:25%;text-align:center;height:100%;top:0;bottom:0;right:0;left:0" class="btn btn-secondary btn-lg disabled"  data-toggle="modal" data-target="#exampleModal">
                                        <img width = "50",height = "50"  src={{ asset('img/plus-solid.svg') }}>
                                      </button>

                                      <!-- Modal -->
                                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">NEW TODO ITEM</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                    <form  action="/api/todoitem" method="POST" >
                                                        <div class="form-group">
                                                          <label for="title">title</label>
                                                          <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="type title">
                                                          <small id="emailHelp" class="form-text text-muted">a meaning title is so important</small>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for="content">content</label>
                                                          <input name="content" type="text" class="form-control" id="exampleInputPassword1" placeholder="type content">
                                                          <input style="visibility: hidden" name="id" type="text" value={{ Auth::user()->id }}>
                                                        </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                            </div>
                                                      </form>

                                          </div>
                                        </div>
                                      </div>



                            </div>
                          </div>
                </div>
        </div>
    </div>
</div>
@endsection

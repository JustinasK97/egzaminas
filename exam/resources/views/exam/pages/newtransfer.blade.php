@extends('exam/main')

@section('content')
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 text-center">
                        <h1>Make Transfer</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 mb-5"  data-aos="fade">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors -> all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="/store_transfer" enctype="multipart/form-data" class="p-5 bg-white">
                        @csrf
                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="account_nr">Acc. number</label>
                                <select class="form-control" name="account_nr" >
                                    @foreach($accounts as $account)
                                        <option value="{{$account->account_nr}}">{{$account->account_nr}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleFormControlTextarea1">Description</label>
                                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="col-md-12">
                                <label class="text-black" for="price">Amount</label>
                                <input type="number" id="amount" name="amount" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <label class="text-black" for="name">Name</label>
                                <input type="text" id="receiver_name" name="receiver_name" class="form-control">
                            </div>

                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Make transfer" name="submit" class="btn btn-primary py-2 px-4 text-white">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@stop

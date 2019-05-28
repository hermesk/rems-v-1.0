@extends('layouts.app')
@section('title','Payments')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
             <div class="card-header">Payments</div>

            <div class="col-12">
            <form action="{{route('payments.store')}}" method="POST">
                        @csrf
                <div class="row">
                 

                <div class="col-md-8 form-group">   
                    <label for="name">Name<span class="text-danger">*</span></label>
                    <input  type="text" name="name" class="form-control" placeholder="name" value="{{old('name')}}">
                    <div>{{$errors->first('name')}}</div>                  
                </div>
            <div class="row form-group col-md-4">
            <label for="mobile">Mobile No.<span class="text-danger">*</span></label>
            <input type="number" name="mobile" class="form-control" placeholder="mobile number" value="{{old('mobile')}}" >
                 <div>{{$errors->first('mobile')}}</div>
        </div>

                </div>
                <div class="row">

                  <div class="col-md-4 form-group">   
                    <label for="ptype">Being Payment for<span class="text-danger">*</span></label>
                    <select name="ptype" id="ptype" class="form-control">
                        <option value="">--- Select Payment Type ---</option>
                                @foreach ($paymentTypes as $paymentType)
                                <option value="{{$paymentType->id}}">{{ $paymentType->name}}</option>
                                @endforeach  
                    </select>
                    
                    <div>{{$errors->first('ptype')}}</div>
                   
                </div>   

                   <div class="form-group col-md-4">
                    <label for="paymentmode">Payment Mode<span class="text-danger">*</span></label>
                    <select name="paymentmode" id="paymentmode" class="form-control">
                        <option value="">--- Select Payment Mode ---</option>
                                @foreach ($paymentmodes as $paymentmode)
                                <option value="{{$paymentmode->id}}">{{ $paymentmode->name}}</option>
                                @endforeach
                    </select>
                            <div>{{$errors->first('paymentmode')}}</div>

                   </div>
                 <div class="form-group col-md-4">
                    <label for="amount">Amount Paid<span class="text-danger">*</span></label>
                    <input type="number" name="amount" class="form-control" placeholder="Amount paid" value="{{old('amount')}}">
                    <div>{{$errors->first('amount')}}</div>
                   </div>                  
                </div>
                <div class="row">

                   <div class="form-group col-md-4">
                    <label for="reference">Reference<span class="text-danger">*</span></label>
                    <input type="text" name="reference" class="form-control" placeholder="reference" value="{{old('reference')}}">
                    <div>{{$errors->first('reference')}}</div>
                   </div>

                    <div class="form-group col-md-8">
                        <label for="narration">Narration<span class="text-danger">*</span></label>
                        <input type="text" name="narration" class="form-control" placeholder="Narration" value="{{old('narration')}}" >
                    </div>

                </div>
             <div class="box-footer">
                    <cancle-button text="Cancel"  type="reset" ></cancle-button>
                    <my-button type="submit" text="Add"></my-button>
                   </div>
                    </form>

               </div>

            </div>
        </div>
    </div>
</div>


 

@endsection

@extends('layouts.default')

<style>
    @media (max-width: 767.98px) 
    {  .table2 {
        width: 315px !important;
    }
    .container{
        padding: 0px !important
    }
 }

   
</style>

<div class="container" style="padding-left: 200px; padding-right: 200px;">
<div class="card" style="padding: 10px">
  <div class="card-body">
  <img class="logo" src="{{asset('img/andalas.png')}}" width="15%" alt="">
    <div class="row" style="margin-top: 20px; margin-bottom: 20px">
        <div class="col-6">
            <div class="card p-3">
                <p style="font-size: 16px; color: #9b989f">FROM</p>
                <p style="font-size: 18px; font-weight:500; margin-top: 10px;">Andalas LLC</p>
                <p style="color: #9b989f; margin-top: 10px; font-size: 16px;">11665 Fuqua ST Suite F 610 Houston, Texas 77034</p>
                <p style="color: #9b989f; margin-top: 10px; font-size: 16px;">admin@andalas.us</p>
                <p style="color: #9b989f">+1 (713) 598 0728</p>
            </div>
        </div>
        <div class="col-6">
            <div class="card p-3">
            <p style="font-size: 16px; color: #9b989f">TO</p>
            <p style="font-size: 18px; font-weight:500; margin-top: 10px;">{{$request->name}}</p>
            <p style="color: #9b989f; margin-top: 10px; font-size: 16px;">{{$request->address_product}}</p>
            <p style="color: #9b989f; margin-top: 10px; font-size: 16px;">{{$request->email}}</p>
            <p style="color: #9b989f">{{$request->no_handphone}}</p>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 20px; margin-bottom: 20px"> 
        <div class="col-6">
            <p style="font-size:16px">Invoice No : <span style="color: #9b989f;">00001</span> </p>
            <p style="font-size:16px">Invoice Date : <span style="color: #9b989f;">{{ $date }}</span></p>
        </div>
        <div class="col-6">
            <p style="font-size:16px">Due Date : <span style="color: #9b989f;">{{ $date }}</span></p>
        </div>
    </div>
    <hr>
    <table class="table table-striped" style="border-collapse: collapse; min-width: 300px;">
        <thead>
            <tr>
                <th style="font-size:16px">Item</th>
                <th style="font-size:16px">QTY</th>
                <th style="font-size:16px">Rate</th>
                <th style="font-size:16px">Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="font-size:16px;color: #9b989f">{{$request->name_product}}</td>
                <td style=" font-size:16px;color: #9b989f">{{$request->quantity_product}}</td>
                <td style=" font-size:16px;color: #9b989f">{{$request->product_price}}</td>
                <td style=" font-size:16px;color: #9b989f">{{$request->total_price}}</td>
            </tr>
        </tbody>
    </table>

    <div class="row justify-content-end d-flex" style="margin-top: 45px;
    margin-right: 2px">
        <table class="table table-striped table2" style="width: 40%">
            <thead>
                <tr>
                    <th style="font-size:16px; text-align: center">Invoice Summary</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="font-size:16px;color: #9b989f">Subtotal</td>
                    <td style="font-size:16px;color: #9b989f">USD17,640.00</td>
                </tr>
                <tr>
                    <td style="font-size:16px;color: #9b989f">Total</td>
                    <td style="font-size:16px;color: #9b989f">USD17,640.00</td>
                </tr>
            </tbody>
        </table>
    </div>
  </div>
</div>
   
</div>
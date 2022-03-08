
@extends('layouts.default')

<div class="container">
    <img class="logo" src="{{asset('img/andalas.png')}}" width="8%" alt="">
    <div class="row">
        <div class="col-6">
            <div class="card p-3">
                <p style="font-size: 13px; color: #9b989f">FROM</p>
                <p style="font-size: 18px;">Andalas LLC</p>
                <p style="color: #9b989f">11665 Fuqua ST Suite F 610 Houston, Texas 77034</p>
                <p style="color: #9b989f">admin@andalas.us</p>
                <p style="color: #9b989f">+1 (713) 598 0728</p>
            </div>
        </div>
        <div class="col-6">
            <div class="card p-3">
            <p style="font-size: 13px; color: #9b989f">TO</p>
            <p style="font-size: 18px;">{{$request->name}}</p>
            <p style="color: #9b989f">{{$request->address_product}}</p>
            <p style="color: #9b989f">{{$request->email}}</p>
            <p style="color: #9b989f">{{$request->no_handphone}}</p>
            </div>
        </div>
    </div>
    <div class="row m-3">
        <div class="col-6">
            <p>Invoice No : <span style="color: #9b989f;">00001</span> </p>
            <p>Invoice Date : <span style="color: #9b989f;">{{ $date }}</span></p>
        </div>
        <div class="col-6">
            <p>Due Date : <span style="color: #9b989f;">{{ $date }}</span></p>
        </div>
    </div>
    <hr>
    <table style="border-collapse: collapse; min-width: 400px;">
        <thead>
            <tr>
                <th>Item</th>
                <th>QTY</th>
                <th>Rate</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="color: #9b989f">{{$request->name_product}}</td>
                <td style="color: #9b989f">{{$request->quantity_product}}</td>
                <td style="color: #9b989f">{{$request->product_price}}</td>
                <td style="color: #9b989f">{{$request->total_price}}</td>
            </tr>
        </tbody>
    </table>
</div>
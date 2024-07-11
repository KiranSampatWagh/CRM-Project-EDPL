@extends('layouts.master')

@section('title', 'Invoice | ')
@section('content')
    @include('partials.header')
    @include('partials.sidebar')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-file-text-o"></i> Invoice</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><a href="/"><i class="fa fa-home fa-lg"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Invoice</a></li>
            </ul>
        </div>

        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif

        <div class="row"style="background-color: white;">
            <div class="col-md-12">
                <div class="page-border" style="border: 3px solid #f7f7f7; padding: 10px; margin: 10px;">
                    <section class="invoice">
                        <div class="title text-center">
                            <h2>
                                TAX INVOICE
                            </h2>   
                        </div>
                        <div class="row mb-4" style="border: 3px solid #f7f7f7; margin: 10px;">
                            <div class="col-6" >
                                <div style="border-bottom: 3px solid #f7f7f7;border-right: 3px solid #f7f7f7; margin-left: -15px; padding: 5px; ">
                                    <strong>EDHAAS DIGISOFT PRIVATE LIMITED</strong><br>
                                    5th Floor, SERENE TOWER, 9 Lane, Pakharbaug Rd, Pakharbaug Society, Ram Nagar, Bavdhan, Pune, Procode: 411021<br>
                                    GSTIN/UIN: <br>
                                    Mobile No: 9552113579<br>
                                    Email: contact@edhaasdigisoft.com
                                </div>
                                <div style="border-right: 3px solid #f7f7f7; margin-left: -15px; padding: 5px; ">
                                    <strong>Buyer:</strong><br>
                                    {{$invoice->customer->name}}<br>
                                    {{$invoice->customer->address}}<br>
                                    GSTIN/UIN: <br>
                                    Mobile No: {{$invoice->customer->mobile}}<br>
                                    Email: {{$invoice->customer->email}}
                                </div>
                                {{--<div style="border-right: 3px solid #f7f7f7; margin-left: -15px; padding: 5px; ">
                                    <strong>Buyer:</strong><br>
                                    {{$invoice->customer->name}}<br>
                                    {{$invoice->customer->address}}<br>
                                    GSTIN/UIN: <br>
                                    Mobile No: {{$invoice->customer->mobile}}<br>
                                    Email: {{$invoice->customer->email}}
                                </div>--}}
                            </div>
                            <div class="col-6" style="padding: 5px;" >
                                <div class="row invoice-info mb-4" >
                                    <div class="col-6" style="border-right: 3px solid #f7f7f7; margin-top: -5px">
                                        <div style="border-bottom: 3px solid #f7f7f7; padding: 5px; margin-left: -20px; margin-right: -15px;">
                                            <strong>Invoice No: </strong> #{{1000+$invoice->id}}<br>
                                        </div>
                                        <div style="border-bottom: 3px solid #f7f7f7; padding: 5px; margin-left: -20px; margin-right: -15px;">
                                            <strong>Delivery Note: </strong> ADFVG<br>
                                        </div>
                                        <div style="border-bottom: 3px solid #f7f7f7; padding: 5px; margin-left: -20px; margin-right: -15px;">
                                            <strong>Supplier's Ref: </strong> 0335<br>
                                        </div>
                                        <div style="border-bottom: 3px solid #f7f7f7; padding: 5px; margin-left: -20px; margin-right: -15px;">
                                            <strong>Buyer's Order No: </strong> 4F3S8J<br>
                                        </div>
                                        <div style="border-bottom: 3px solid #f7f7f7; padding: 5px; margin-left: -20px; margin-right: -15px;">
                                            <strong>Despatch Document No: </strong><br>
                                        </div>
                                        <div style="border-bottom: 3px solid #f7f7f7; padding: 5px; margin-left: -20px; margin-right: -15px;">
                                            <strong>Despatched through: </strong><br>
                                        </div>
                                    </div>
                                    <div class="col-6" style= "margin-top: -5px;">
                                        <div style="border-bottom: 3px solid #f7f7f7; padding: 5px; margin-left: -15px; margin-right: -5px;">
                                            <strong>Dated: </strong> {{$invoice->created_at->format('d-m-Y')}}<br>
                                        </div>
                                        <div style="border-bottom: 3px solid #f7f7f7; padding: 5px; margin-left: -15px; margin-right: -5px;">
                                            <strong>Mode/Terms of Payment: </strong><br>
                                        </div>
                                        <div style="border-bottom: 3px solid #f7f7f7; padding: 5px; margin-left: -15px; margin-right: -5px;">
                                            <strong>Other Reference(s): </strong><br>
                                        </div>
                                        <div style="border-bottom: 3px solid #f7f7f7; padding: 5px; margin-left: -15px; margin-right: -5px;">
                                            <strong>Dated: </strong><br>
                                        </div>
                                        <div style="border-bottom: 3px solid #f7f7f7; padding: 5px; margin-left: -15px; margin-right: -5px;">
                                            <strong>Delivery Note Date: </strong><br>
                                        </div>
                                        <div style="border-bottom: 3px solid #f7f7f7; padding: 5px; margin-left: -15px; margin-right: -5px;"   >
                                            <strong>Destination: </strong><br>
                                        </div>
                                    </div>
                                    <strong>Terms of Delivery: </strong><br>
                                </div>
                            </div>
                        </div>
                        <div class="row"  style="border: 3px solid #f7f7f7; padding: 10px; margin: 10px; margin-top: -25px; border-top: none;">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                                        <th>Discount</th>
                                        <th>Amount</th>
                                     </tr>
                                    </thead>
                                    <tbody>
                                    <div style="display: none">
                                        {{$total=0}}
                                    </div>
                                    @foreach($sales as $sale)
                                    <tr>
                                        <td>{{$sale->product->name}}</td>
                                        <td>{{$sale->price}}</td>
                                        <td>{{$sale->qty}}</td>
                                        <td>{{$sale->dis}}%</td>
                                        <td>{{$sale->amount}}</td>
                                        <div style="display: none">
                                            {{$total +=$sale->amount}}
                                        </div>
                                     </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>

                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><b>Tax</b></td>
                                        <td><b class="tax_id">{{ $invoice->tax }}%</b></td>
                                    </tr>
                                    <tr>

                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><b>Total</b></td>
                                        <td><b>{{$invoicetotal}}</b></td>
                                    </tr>

                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        
                        {{-- <div class="row d-print-none mt-2">
                            <div class="col-12 text-right">
                                <a class="btn btn-primary" href="javascript:window.open('about:blank').document.body.innerHTML = document.body.innerHTML; window.print();">
                                    <i class="fa fa-print"></i> Print
                                </a>
                            </div>
                        </div>
                         --}}


                       <div class="row d-print-none mt-2">
                            <div class="col-11 text-right">
                                    
                                <a class="btn btn-primary" href="{{route('customer.payment', $invoice->id)}}"> 
                                    <i class="fa fa-payment" ></i>Make Payment
                                </a>


                                <a class="btn btn-primary" href="{{ route('invoice.mailInvoice', $invoice->id) }}"> 
                                    <i class="fa fa-payment"></i> Send Invoice Via Mail 
                                </a>

                                    {{-- <a class="btn btn-primary" href="#"> 
                                        <i class="fa fa-payment"></i> Send Invoice Via Mail 
                                    </a> --}}

                                <a class="btn btn-primary" href="javascript:window.print();">
                                    <i class="fa fa-print"></i> Print
                                </a>

                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>

@endsection
@push('js')
@endpush


<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script>
    document.getElementById("print-pdf-btn").addEventListener("click", function() {
        var doc = new jsPDF();
        doc.text(20, 20, 'This is a sample PDF generated using jsPDF!');
        doc.save('sample.pdf');
    });
</script>


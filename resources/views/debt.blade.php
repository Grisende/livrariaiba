@extends('layouts.layout')

@section('title', 'Em dívida')
    
@section('content')

    <header>
        <h2><i class="fas fa-money-bill"></i> Em Dívida</h2>
    </header>

    <div class="selling">
        <div class="table-content">
            <h2>Histórico</h2>
            <table class="table table-responsive ">
                @csrf
                <thead>
                    <tr>
                        <th scope="col">Código do Produto</th>
                        <th scope="col">Título</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Preço de Venda</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Método de Pagamento</th>
                        <th scope="col">Observações</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($selling as $sellings)
                        @php
                            if ($sellings->payment_method == "money"){
                                $payment = "Dinheiro";
                            }
                            elseif($sellings->payment_method == "credit_card"){
                                $payment = "Cartão de Crédito";
                            }
                            elseif ($sellings->payment_method == "debt_card"){
                                $payment = "Cartão de Débito";
                            }
                            elseif ($sellings->payment_method == "billet"){
                                $payment = "boleto";
                            }
                            elseif ($sellings->payment_method == "debt"){
                                $payment = "Fiado";
                            }
                        @endphp
                        <tr>
                            <td scope="row">{{$sellings->id_book}}</td> 
                            <td scope="row">{{$sellings->title}}</td> 
                            <td scope="row">{{$sellings->quantity}}</td> 
                            <td scope="row">R$ {{$sellings->selling_price}}</td> 
                            <td scope="row">{{$sellings->customer_name}}</td>
                            <td scope="row">{{$payment ?? ''}}</td> 
                            <td scope="row">{{$sellings->obs}}</td>
                            <td scope="row"><a href="{{url("selling/$sellings->id/edit")}}"><i class="fas fa-pen"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
@endsection
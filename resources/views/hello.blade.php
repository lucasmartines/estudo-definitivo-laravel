@extends('_parts.template_basico')

@section("title",'titulo')

@section("miolo")

<style>
  td{ padding: 10px; }
</style>

    <h1>Olá</h1>
    <p>Então esse é um estudo aprofundado em laravel + não uma coisa que se faz em apenas uma semaninha</p>
    <p>O laravel é muito simplificado então tem muita coisa pra estudar, a simplificação só vale a pena <br>
        se for estudada a fundo se não, não vai se aproveitar de todos os recursos desse Framework</p>


    <a href="{{route('salvar_carro_page')}}">Inserir um Carro</a>

    @if($carros)
        <table>
                    <tr>
                        <td>Nome</td>
                        <td>Ano</td>
                        <td>Peso</td>
                        <td>Detalhes</td>
                    </tr>
                @foreach($carros as $c)
                    <tr>
                        <td>{{$c->nome}}</td>
                        <td>{{$c->ano}} </td> 
                        <td>{{$c->peso}}</td>
                        <td>
                            @foreach($c->detalhes()->get() as  $det/*detalhes*/)
                                @if($det->valor_parametro == '1')
                                    {{ Helper::converter_nome_detalhe(  $det->nome_parametro ) }}
                                @endif
                                @if($det->nome_parametro == "url_imagem")
                                    <img src="{{  asset( 'carros/' . $det->valor_parametro)    }}" alt="">
                                @endif
                            @endforeach
                        </td>
                    </tr>
                @endforeach
        </table>
    @endif

@endsection

@extends('_parts.template_basico')

@section("title",'salvar um carro')

@section("miolo")

    <form action="{{route('post_salvar_carro')}}" method="POST" enctype="multipart/form-data" >
        @csrf  

        @if($errors->any()):
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        @endif

        <table>
            <tr>
                <td> Nome:  </td>
                <td> <input type="text" name="nome" value="{{ @old('nome') }}" required> <br>  </td>
            </tr>
            <tr>
                <td> Ano:  </td>
                <td> <input type="number" name="ano" value="{{ @old('ano') }}" required min="1950" max="{{date("Y")}}"> <br>  </td>
            </tr>
            <tr>
                <td> Cilindrada:  </td>
                <td> <input type="text" name="cilindrada" value="{{ @old('cilindrada') }}" required> <br>  </td>
            </tr>
            <tr>
                <td> Peso:  </td>
                <td> <input type="text" name="peso" value="{{ @old('peso') }}" required> <br>  </td>
            </tr>
            <tr>
                <td> Potencia:  </td>
                <td> <input type="text" name="potencia_cv" value="{{ @old('potencia_cv') }}" required> <br>  </td>
            </tr>
            <tr>
                <td>Descrição: </td>
                <td>
                    <textarea type="text" name="descricao"  >{{ @old('descricao') }}</textarea>
                </td>
            </tr>
            <tr>
                <td>Arquivo</td>
                <td> <input type="file" name="arquivo" id=""> </td>
            </tr>
            <tr>
                <td></td>
                <td> <input type="submit" name="enviar" value="Enviar">  </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="reset" value="reset" value="Reset">
                </td>
            </tr>
        </table>
 
    </form>

@endsection

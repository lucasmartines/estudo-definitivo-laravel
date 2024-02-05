<?php
    namespace App\Http\Controllers;

    use App\Models\Carro;
    use App\Models\CarroDetalhe;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Storage;


    class CarroController extends Controller
    {
        // 
        public function index(   ){

            $carros =   Carro::all(); 
            $um_carro = Carro::find(1);
            
            if($um_carro){  $um_carro = $um_carro->first(); }
        
        
            return view('hello', ["carros" => $carros ]);


        }

        public function salvar_carro(){

            
            return view("carro.carro");
        }
        public function salvar(Request $r )
        {

        
            $validated = $r->validate([
                'nome'       => 'required|unique:carros|max:255',
                'ano'        => 'required',
                'cilindrada' => 'required',
                'peso'       => 'required',
                // 'descricao'  => 'required'
            ]);
    

            if($validated){


                
                $c = Carro::create([
                    "nome" => $r->post("nome") ,
                    "ano" => $r->post("ano") ,
                    "cilindrada" => $r->post("cilindrada") ,
                    "peso" => $r->post("peso"),
                ]);

                
                $file = $r->file("arquivo");

                if($file)
                {
                    $hash_name = $file->hashName();
        
                    Storage::put("carro", $file); 
            
                    $carro_detalhe = new CarroDetalhe();
                    $carro_detalhe->nome_parametro = "url_imagem";
                    $carro_detalhe->valor_parametro = $hash_name;
            
                    $c->detalhes()->save( $carro_detalhe );
                }

                return redirect( route("carro") );

            }
    

        }
    }

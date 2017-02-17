<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Editora;

class EditoraController extends Controller
{
  public function index()
    {
      $editoras = Editora::all();
      return view('editora.index', compact('editoras'));
    }

    public function cria()
    {
      return view('editora.cria');
    }

    public function armazena()
    {
      Editora::create(request()->all());
      return redirect('/editoras');
    }

    public function show(Editora $editora)
        {
          //var_dump ($editora);
          return view('editora.show', compact('editora'));

        }
    public function edita(Editora $editora)
        {
              //var_dump ($editora);
          //$editora = Editora::find($id);
          return view('editora.edita', compact('editora'));
        }

      public function atualiza(Editora $editora)
      {
        //$editora = Editora::find($id);
        //$editora->fill(request()->all());
        //$editora->nome = request('nome');
        //$editora->email = request('email');

        $editora->fill(request()->all());

      //  var_dump(request()->all());
        $editora->save();
        return redirect('/editoras');
      }


}
?>

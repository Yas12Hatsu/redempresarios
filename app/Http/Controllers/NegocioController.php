<?php
namespace App\Http\Controllers;

use App\Models\Negocio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NegocioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['negocios']=Negocio::paginate(4);
        //direccionar a la vista listaNegocio.blade.php
        return view('negocio_admin.listaNegocio',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // direccionar la vista correspondiente
        return view('negocio_admin.createNegocio');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $campos=[
            'nombre_negocio'=>'required|string|max:100',
            'ubicación'=>'required|string|max:300',
            'descripcion'=>'required|string|max:300',
            'telefono'=>'required|string|max:20',
            'correo'=>'required|string|max:50',
            'sitio_web'=>'required|string|max:200',
            'facebook'=>'required|string|max:300',
            'instagram'=>'required|string|max:300',
            'imagen'=>'required|max:10000|mimes:jpeg,png,jpg',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            //'ubicacion.required'=>'La ubicación es requerida',
            //'descripcion'=>'La descripcion es requerida',
            'imagen.required'=>'La imagen es requerida'
        ];

        $this->validate($request, $campos, $mensaje);
        //recepcionar la informacion del formulario create
        //$datosNegocio = request()->all(); //OBTIENE TODA LA INFORMACION
        $datosNegocio = request()->except('_token'); //OBTIENE TODA LA INFORMACION MENOS AL TOKEN XD
        if($request->hasFile('imagen')){
            $datosNegocio['imagen']=$request->file('imagen')->store('uploads','public'); //esto es para modificar la ruta de la imagen, ya que originalmente lo toma como una img temporal
        }
        Negocio::insert($datosNegocio); //LA INFO SE INSERTARA EN EL MODELO
        //return response()->json($datosNegocio); //RESPONDE MOSTRANDO UN JSON
        return redirect('negocios')->with('mensaje','Información agregada con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Negocio $negocio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //hay que retornar la vista pero del update
        $negocio=Negocio::findOrFail($id);
        return view('negocio_admin.updateNegocio', compact('negocio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $campos=[
            'nombre_negocio'=>'required|string|max:100',
            'ubicación'=>'required|string|max:300',
            'descripcion'=>'required|string|max:300',
            'telefono'=>'required|string|max:20',
            'correo'=>'required|string|max:50',
            'sitio_web'=>'required|string|max:200',
            'facebook'=>'required|string|max:300',
            'instagram'=>'required|string|max:300',
            
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            //'ubicacion.required'=>'La ubicación es requerida',
            //'descripcion'=>'La descripcion es requerida',
        ];

        if($request->hasFile('imagen')){
            $campos=['imagen'=>'required|max:10000|mimes:jpeg,png,jpg',];
            $mensaje=['imagen.required'=>'La imagen es requerida'];
        }

        $this->validate($request, $campos, $mensaje);

        // Recepciona los datos que ya se encuentran almacenados
        $datosNegocio = request()->except(['_token','_method']);
        if($request->hasFile('imagen')){
            $negocio=Negocio::findOrFail($id);
            Storage::delete('public/'.$negocio->imagen);
            $datosNegocio['imagen']=$request->file('imagen')->store('uploads','public'); //esto es para modificar la ruta de la imagen, ya que originalmente lo toma como una img temporal
        }
        Negocio::where('id','=',$id)->update($datosNegocio);

        $negocio=Negocio::findOrFail($id);
        //return view('negocio_admin.updateNegocio', compact('negocio'));
        return redirect('negocios')->with('mensaje','Información modificada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $negocio=Negocio::findOrFail($id); //informacion proporcionada
        if(Storage::delete('public/'.$negocio->imagen)){
            Negocio::destroy($id); //borrar fisicamente
        }
        return redirect('negocios')->with('mensaje','Información borrada con éxito');
    }
}
 
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role as ModelsRole;
use Spatie\Permission\Models\Role;

class AuthController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('profile.users', compact('users'));
       
    }
    public function create()
    {
        $roles = Role::pluck('name', 'name')->all();
        return view('profile.create', compact('roles'));
        
    }
   
    public function edit($id)
    {
        $user = User::find($id);

        if (!$user) {
            return abort(404); // Otra opción sería redireccionar a una página de error o mostrar un mensaje apropiado
        }

        return redirect()->back();
    }
    public function store(Request $request)
{
    // Validación de datos del formulario
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:4|confirmed',
    ]);

    // Crear un nuevo usuario en la base de datos
    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    // Redireccionar a la lista de usuarios con un mensaje de éxito
    return redirect()->route('users.index')->with('success', 'Usuario registrado correctamente');
}

    public function update(Request $request, $id)
{
$users=user::find($id);
$users->name=$request->input('name');
$users->email=$request->input('email');
$users->update();
return redirect()->back();
}
    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            return abort(404); // Otra opción sería redireccionar a una página de error o mostrar un mensaje apropiado
        }

        $user->delete();

        // Puedes agregar un mensaje de éxito o redireccionar a la lista de usuarios
        return redirect()->route('users.index')->with('success', 'Usuario eliminado correctamente');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function register()
    {
        return view('auth/register');
    }

    public function registerVerify(Request $request)
    {
        $request->validate([
           
            'email' => 'required|unique:users,email',
            'password' => 'required|min:4',
            'password_confirmation' => 'required|same:password'
        ], [
            'name.required' => 'El nombre es requerido',
            'email.required' => 'El email es requerido',
            'email.unique' => 'El email ya ha sido usado',
            'password.required' => 'La contraseña es requerida',
            'password.min' => 'La contraseña debe tener al menos 4:min caracteres',
            'password_confirmation.required' => 'La confirmación de contraseña es requerida',
            'password_confirmation.same' => 'La confirmación de contraseña no coincide con la contraseña'
        ]);
    
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
            
        ]);
        return redirect()->route('login')->with('success','Usuario registrado correctamente');
    }
    
    public function login(){
        return view('auth/login');
    }

    public function loginVerify(Request $request){
       $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:4'
       ],[
        'email.required' => 'El email es requerido',
        'password.required' => 'La contraseña es requerida'
       ]);
       if(Auth::attempt(['email'=>$request->email, 'password' => $request->password])){ 
            if(auth()->user()->role == 'admin'){
                return redirect()->route('users.index');
            }else{
                return redirect()->route('dashboard');
            }
        }

        return redirect()->route('login')->withErrors(['message' => 'Usuario o contraseña no válidos'])->withInput();


    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('Success', 'session cerrada correctamente');
    }

    public function profile(){
        return view('profile');
    }
    public function updateProfile(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'name' => 'required',
    ]);

    // Lógica para actualizar el perfil del usuario
    $user = User::where('email', $request->email)->first();

    if ($user) {
        $user->update([
            'name' => $request->name,
            // Agrega otros campos que desees actualizar
        ]);

        return redirect()->back()->with('success', 'Perfil actualizado correctamente');
    }

    return redirect()->back()->with('error', 'No se encontró el usuario');
}
public function admin() {
    return 'admin';
}

 }
 
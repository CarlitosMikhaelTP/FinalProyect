use App\Http\Controllers\ProjectController;
use Iluminate\Suport\Facades\Route;
use APP\Http\Controllers\HomeController;

<!-- Ruta de página principal, es decir Landing o Home -->
Route::get('/',[HomeController::class,'landing']);


<!-- Demás rutas -->
Route::get('codigosala', [ProjectController::class, 'codigosala']);
Route::get('comiteConfi', [ProjectController::class, 'comiteConfi']);
Route::get('comiteListado', [ProjectController::class, 'comiteListado']);
Route::get('comiteMenu', [ProjectController::class, 'comiteMenu']);
Route::get('comiteNueva', [ProjectController::class, 'comiteNueva']);
Route::get('configuracion', [ProjectController::class, 'configuracion']);
Route::get('home_alumno', [ProjectController::class, 'home_alumno']);
Route::get('info', [ProjectController::class, 'info']);
Route::get('juego_estudiante', [ProjectController::class, 'juego_estudiante']);
Route::get('juego_estudiante2', [ProjectController::class, 'juego_estudiante2']);
Route::get('jugar', [ProjectController::class, 'jugar']);
Route::get('Login', [ProjectController::class, 'Login']);
Route::get('menuprofesores', [ProjectController::class, 'menuprofesores']);
Route::get('registro_tipo', [ProjectController::class, 'registro_tipo']);
Route::get('registroComite', [ProjectController::class, 'registroComite']);
Route::get('registroDocente', [ProjectController::class, 'registroDocente']);
Route::get('registroEstudiante', [ProjectController::class, 'registroEstudiante']);
Route::get('resultados_estudiante', [ProjectController::class, 'resultados_estudiante']);

    <?php

use App\Http\Controllers\HomeController;
use App\Models\department;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');

/*Departments*/
route::get  ('/department'    , 'App\\Http\\Controllers\\DepartmentController@index'  )->name('department.index');
route::get('/department/delete/{department}', [DepartmentController::class, 'destroy'])
    ->name ('department.destroy');

/* Employees */
route::get  ('/employee'      , 'App\\Http\\Controllers\\EmployeeController@index'    )->name('employee.index');
route::get('/group1/delete/{employee}', [EmployeeController::class, 'destroy'])
    ->name ('employee.destroy');

/*Employments */
route::get  ('/employment'    , 'App\\Http\\Controllers\\EmploymentController@index'  )->name('employment.index');
route::get('/group1/delete/{employment}', [EmploymentController::class, 'destroy'])
    ->name ('employment.destroy');

/*Groups*/
route::get  ('/group1'        , 'App\\Http\\Controllers\\Group1Controller@index'      )->name('group1.index');
route::get('/group1/delete/{group1}', [Group1Controller::class, 'destroy'])
    ->name ('group1.destroy');

/*Group_members */    
route::get  ('/group_member'  , 'App\\Http\\Controllers\\GroupMemberController@index' )->name('group_member.index');
route::get('/group1/delete/{group_member}', [GroupMemberController::class, 'destroy'])
    ->name ('group_member.destroy');

/* Users*/
route::get  ('/user'          , 'App\\Http\\Controllers\\UserController@index'        )->name('user.index');
route::get('/group1/delete/{user}', [userController::class, 'destroy'])
    ->name ('user.destroy');

/*############################################################################################################################*/ 
route::post ('/department'    , 'App\\Http\\Controllers\\DepartmentController@store' )->name('department.store');
route::post ('/employee'      , 'App\\Http\\Controllers\\EmployeeController@store'   )->name('employee.store');
route::post ('/employment'    , 'App\\Http\\Controllers\\EmploymentController@store' )->name('employment.store');
route::post ('/group1'        , 'App\\Http\\Controllers\\Group1Controller@store'     )->name('group1.store');
route::post ('/group_member'  , 'App\\Http\\Controllers\\GroupMemberController@store')->name('group_member.store');
route::post ('/user'          , 'App\\Http\\Controllers\\UserController@store'       )->name('user.store');
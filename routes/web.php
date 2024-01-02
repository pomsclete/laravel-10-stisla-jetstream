<?php

use App\Http\Controllers\UserController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', function () {
    return redirect(app()->getLocale());
});

/**
 ************************* FRONT ROUTES *********************************
 */
Route::group(
    [
        'prefix' => '{locale}',
        'where' => ['locale' => '[a-zA-Z]{2}'],
        'middleware' => 'setlocale'
    ], function() {

    Route::view('/', "pages.front.page-home")->name('home');
    Route::view('/actualites/{slug?}', "pages.front.page-blog-detail")->name('detailBlog');
    Route::view('/tag/{slug?}', "pages.front.page-blog-tag")->name('tagBlog');
    Route::view('/nos-actualites', "pages.front.page-blog")->name('blog');
    Route::view('/agenda/{slug?}', "pages.front.page-event-detail")->name('detailEvent');
    Route::view('/agendas', "pages.front.page-event")->name('agenda');
    Route::view('/demander-un-rendez-vous', "pages.front.page-rv")->name('rv');
    Route::view('/portes-ouvertes', "pages.front.page-porte")->name('portes');
    Route::view('/salons-forums', "pages.front.page-forum")->name('forums');
    Route::view('/nos-partenaires', "pages.front.page-partenaire")->name('partenaire');
    Route::view('/histoire', "pages.front.page-histoire")->name('histoire');
    Route::view('/nouer-un-partenariat', "pages.front.page-demand-partener")->name('addpartenaire');

});

/***+
 ****************** ROUTE ADMIN *******************************
 */
Route::group([ "middleware" => ['auth:sanctum', config('jetstream.auth_session'), 'verified'] ], function() {
    Route::view('/dashboard', "dashboard")->name('dashboard');
    /*** Parametrage routes*/
    Route::get('/settings/users', [ UserController::class, "index_view" ])->name('user');
    Route::view('/settings/user/new', "pages.user.user-new")->name('user.new');
    Route::view('/settings/user/edit/{userId}', "pages.user.user-edit")->name('user.edit');
    Route::view('/settings/news-type', "pages.parametrage.page-type-actualite")->name('parametrage.type');
    Route::view('/settings/levels', "pages.parametrage.page-niveau")->name('parametrage.level');
    Route::view('/settings/academic-year', "pages.parametrage.page-annee-scolaire")->name('parametrage.annee');
    Route::view('/settings/campus', "pages.parametrage.page-campus")->name('parametrage.campus');
    /*** Informations slide routes ***/
    Route::view('/information/slides', "pages.information.page-slide")->name('information.slide');
    Route::view('/information/slide/add', "pages.information.page-add-slide")->name('information.addSlide');
    Route::view('/information/slide/edit/{slide}', "pages.information.page-edit-slide")->name('information.editSlide');
    /*** Informations actu routes ***/
    Route::view('/information/news', "pages.information.page-actualite")->name('information.actu');
    Route::view('/information/news/add', "pages.information.page-add-actualite")->name('information.addActu');
    Route::view('/information/news/edit/{actu}', "pages.information.page-edit-actualite")->name('information.editActu');
    /** Information accréditation */
    Route::view('/information/accreditation', "pages.information.page-accreditation")->name('information.accre');
    Route::view('/information/accreditation/add', "pages.information.page-add-accreditation")->name('information.accre-add');
    Route::view('/information/accreditation/edit/{accreditation}', "pages.information.page-edit-accreditation")->name('information.accre-edit');
    /** Information agenda */
    Route::view('/information/agenda', "pages.information.page-agenda")->name('information.agenda');
    Route::view('/information/agenda/add', "pages.information.page-add-agenda")->name('information.agendaAdd');
    Route::view('/information/agenda/edit/{agenda}', "pages.information.page-edit-agenda")->name('information.agendaEdit');
    /** Information tag */
    Route::view('/information/tag', "pages.information.page-tag")->name('information.tag');
    /** Information Partenariat  */
    Route::view('/information/partenariat', "pages.information.page-partenariat")->name('information.partenariat');
    /** Rencontre Journée */
    Route::view('/rencontre/journe', "pages.rencontre.page-journe")->name('rencontre.journe');
    Route::view('/rencontre/journe/add', "pages.rencontre.page-add-journe")->name('rencontre.addjourne');
    Route::view('/rencontre/journe/edit/{journe}', "pages.rencontre.page-edit-journe")->name('rencontre.editjourne');

});



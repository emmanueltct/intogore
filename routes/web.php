<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControllers;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TrendingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SubcourseController;
use App\Http\Middleware\verifyCourses;
use App\Http\Controllers\CourseEnrollmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\NotificationController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeControllers::class,'showIndex'])->name('Index');
Route::get('/about-us', [HomeControllers::class,'shownAbout'])->name('About');
Route::get('/contact-us', [HomeControllers::class,'shownContact'])->name('Contact');
Route::post('/contact-us', [ContactController::class,'SubmitContact'])->name('submitContact');
route::get('/Trending_news',[HomeControllers::class,'getTrendingNews'])->name('gettrendingnews');

//Route::get('/AllForCrypto', [HomeControllers::class,'showCrypto'])->name('allforcrypto');
Route::get('/Content_read/{id}', [HomeControllers::class,'ReadContents'])->name('readsinglepost');
Route::get('/Content-Category/{id}', [HomeControllers::class,'AllPost'])->name('allPost');

route::get('/Crypto-Courses',[HomeControllers::class,'showCourses'])->name('allCourses');
route::get('/verify-Crypto-Courses',[HomeControllers::class,'verifyCoursesForm'])->name('verifyPaidCourses2');
route::post('/verify-Crypto-Courses',[HomeControllers::class,'verifyCourses'])->name('verifyPaidCourses');
route::get('/enroll-Crypto-Courses/{courseid}',[HomeControllers::class,'enrollmentCourses'])->name('enrollmentCryptoCourses');
route::post('/enroll-Crypto-Courses/{courseid}',[HomeControllers::class,'saveEnrollmentCourses'])->name('saveEnrollmentCryptoCourses');
route::get('/user_enrollment/Success',[HomeControllers::class,'UserEnrollmentCoursesSuccess'])->name('SuccessEnrollmentCryptoCourses');
route::post('/courseComments',[HomeControllers::class,'postCourseComments'])->name('postcoursecomments');
route::get('/courseComments/{id}',[HomeControllers::class,'getCourseComments'])->name('getcoursecomments');
route::get('/subcourseLike',[SubcourseController::class,'SubCourseLike'])->name('SubCourseLike');

Route::get('/Products',[ProductController::class,'index'])->name('AllProducts');
Route::get('/Products/{id}',[ProductController::class,'show'])->name('singleProducts');
Route::get('/Product-Like',[ProductController::class,'ProductLike'])->name('ProductLike');

Route::post('/Post-comments', [PostController::class,'userComments'])->name('sendComments');
Route::get('/postLike', [PostController::class,'postLike'])->name('postLike');

Route::middleware([verifyCourses::class])->group(function(){
    Route::get('/Crypto-Courses/{id}',[HomeControllers::class,'showCryptoCourses'])->name('takeCourse');
});


Auth::routes();
Route::group(['middleware' => ['auth']], function () { 

Route::get('/admin/All-Category',[CategoryController::class,'index'])->name('viewcategory');
Route::get('/admin/Category',[CategoryController::class,'create'])->name('categoryForm');
Route::post('/admin/Category',[CategoryController::class,'store'])->name('postCategory');
Route::get('/admin/Category/{id}',[CategoryController::class,'edit'])->name('editCategoryForm');
Route::post('/admin/Category/{id}',[CategoryController::class,'update'])->name('updateCategory');
Route::post('/admin/delete-Category/{id}',[CategoryController::class,'destroy'])->name('deleteCategory');


Route::get('admin/Post-Form', [PostController::class,'index'])->name('postform');
Route::post('admin/Post-Form', [PostController::class,'store'])->name('sendPost');
Route::get('/admin/post',[PostController::class,'adminAllPost'])->name('adminViewAllPost');
Route::get('/admin/View-post/{id}',[PostController::class,'show'])->name('adminViewSinglePost');
Route::get('/admin/Edit-post/{id}',[PostController::class,'edit'])->name('adminEditSinglePost');
Route::post('/admin/Edit-post/{id}',[PostController::class,'update'])->name('adminEditSinglePost2');
Route::post('/admin/publish-Post',[PostController::class,'adminPublishPost'])->name('publishPost');
Route::post('/admin/delete-Post',[PostController::class,'destroy'])->name('deletePost');
Route::post('/admin/delete-PostComment',[PostController::class,'removePostComment'])->name('removePostComment');


Route::get('/admin/Trending',[TrendingController::class,'AllTrendingForm'])->name('alltrendingForm');
Route::post('/admin/Trending',[TrendingController::class,'store'])->name('posttrendingForm');
Route::get('/admin/Trending-list',[TrendingController::class,'show'])->name('AdminAllPostTrending');
Route::get('/admin/Edit-Trending/{id}',[TrendingController::class,'edit'])->name('AdminEditPostTrending');
Route::post('/admin/Edit-Trending/{id}',[TrendingController::class,'update'])->name('AdminEditPostTrending2');
Route::post('/admin/Publish-Trending/{id}',[TrendingController::class,'publish'])->name('AdminPublishPostTrending');
Route::post('/admin/Delete-Trending/{id}',[TrendingController::class,'destroy'])->name('AdminDestroyPostTrending');

Route::get('/admin/Recommend-Video',[TrendingController::class,'RecommendVideoForm'])->name('RecommendVideoForm');
Route::post('/admin/Recommend-Video',[TrendingController::class,'SaveRecommendVideo'])->name('SaveRecommendVideo');


Route::get('/admin/Products',[ProductController::class,'AdminAllProduct'])->name('AdminAllProducts');
Route::get('/admin/Edit-Products/{id}',[ProductController::class,'edit'])->name('AdminEditProducts');
Route::post('/admin/Edit-Products/{id}',[ProductController::class,'update'])->name('AdminUpdateProducts');
Route::post('/admin/Publish-Products/{id}',[ProductController::class,'publishProducts'])->name('AdminPublishProducts');
Route::post('/admin/Delete-Products/{id}',[ProductController::class,'destroy'])->name('deleteProduct');

Route::get('/admin/Product-Form',[ProductController::class,'create'])->name('ProductForm');
Route::post('/admin/Product-Form',[ProductController::class,'store'])->name('postProductForm');

route::get('/admin/view-PostComments/{id}',[PostController::class,'userPostComments'])->name('userPostComments');
route::get('/admin/Add-course',[CourseController::class,'create'])->name('courseForm');

route::get('/admin/course-list',[CourseController::class,'AllCourseList'])->name('AdmincourseList');
route::post('/admin/Add-course',[CourseController::class,'store'])->name('postCourseForm');
route::get('/admin/Edit-course/{id}',[CourseController::class,'edit'])->name('editCourseForm');
route::post('/admin/Edit-course/{id}',[CourseController::class,'update'])->name('editCourseFormSave');
route::post('/admin/Delete-course/{id}',[CourseController::class,'destroy'])->name('deleteCourse');

route::get('/admin/Add-SubCourse',[SubcourseController::class,'create'])->name('subCourseForm');
route::post('/admin/Add-SubCourse',[SubcourseController::class,'store'])->name('postSubCourseForm');
route::get('/admin/View-SubCourse',[SubcourseController::class,'index'])->name('allSubCourse');
route::get('/admin/View-SubCourse/{id}',[SubcourseController::class,'show'])->name('showSingleSubCourse');
route::get('/admin/Edit-SubCourse/{id}',[SubcourseController::class,'edit'])->name('editSubCourse');
route::post('/admin/Edit-SubCourse/{id}',[SubcourseController::class,'update'])->name('save_editSubCourse');
route::post('/admin/SubCourse-publish',[SubcourseController::class,'publishSubCourse'])->name('publishSubcourse');
route::post('/admin/SubCourse-delete',[SubcourseController::class,'destroy'])->name('deleteSubcourse');


route::get('/admin/View-SubCourse-Comment/',[SubcourseController::class,'adminCourseComment'])->name('adminCourseComment');
route::post('/admin/SubCourse-Comment-confirm',[SubcourseController::class,'confirmComment'])->name('confirmComment');
route::post('/admin/SubCourse-Comment-remove',[SubcourseController::class,'removeComment'])->name('removeComment');


route::get('/admin/Course-Enrollement/',[CourseEnrollmentController::class,'index'])->name('checkEnrolledUser');
route::post('/admin/Course-Enrollement-confirm',[CourseEnrollmentController::class,'updateConfirm'])->name('confirmEnrolledUser');
route::post('/admin/Course-Enrollement-remove',[CourseEnrollmentController::class,'updateRemove'])->name('removeEnrolledUser');
route::post('/admin/Course-Enrollement-delete',[CourseEnrollmentController::class,'updateDelete'])->name('deleteEnrolledUser');

route::get('/Admin',[HomeControllers::class,'AdminWelcome'])->name('adminHome');
Route::get('/home', [HomeControllers::class,'AdminWelcome'])->name('home');
});

//route::get('/getcookie',[HomeControllers::class,'getCookie']);
//Route::post('/Editor', 'TrendingController@imageUpload')->name("imageUpload");
//Route::get('notification', [App\Http\Controllers\NotificationController::class, 'index']);

/*
Route::get('/', function () {
    return view('index');
});

*/





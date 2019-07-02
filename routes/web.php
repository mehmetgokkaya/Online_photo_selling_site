<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/login', 'loginController@index')->name('login.index');
Route::post('/login', 'loginController@verify');

Route::get('/signup', 'loginController@signupindex')->name('signup.index');
Route::post('/signup', 'loginController@storedata');

Route::get('/contactus', 'loginController@contactus')->name('contact.index');

Route::get('/logout','logoutController@index')->name('logout.index');



Route::get('/forget', 'loginController@forget')->name('forget.index');
//Route::post('/forget', 'loginController@sendmail');









//////////////////////////    Buyer    //////////////////////////////////
Route::group(['middleware'=>['buyer']],function(){
Route::get('/buyer', 'buyerController@index')->name('buyer.index');
Route::get('/buyer/buyerChangePassword', 'buyerController@changepassword')->name('buyer.changepassword');
Route::post('/buyer/buyerChangePassword', 'buyerController@updatepassword');

Route::get('/buyer/buyerChangeinformation', 'buyerController@changeinformation')->name('buyer.changeinformation');
Route::post('/buyer/buyerChangeinformation', 'buyerController@updateinformation');

Route::get('/buyer/creditrequest', 'buyerController@creditRequest')->name('buyer.creditrequest');
Route::post('/buyer/creditrequest', 'buyerController@storecreditRequest');
Route::get('/buyer/buyerprofile', 'buyerController@profile')->name('buyer.profile');

Route::get('/buyer/requestlist', 'buyerController@requestlist')->name('buyer.requestlist');

Route::get('/buyer/requestcreditedit/{cid}', 'buyerController@requestCreditEdit')->name('buyer.requestCreditEdit');
Route::post('/buyer/requestcreditedit/{cid}', 'buyerController@updateRequestCreditEdit');
Route::get('/buyer/requestcreditdelete/{cid}', 'buyerController@requestCreditDelete')->name('buyer.requestCreditDelete');
Route::post('/buyer/requestcreditdelete/{cid}', 'buyerController@destroyRequestCredit');

Route::get('/buyer/buyphoto', 'buyerController@buyphoto')->name('buyer.buyphoto');

Route::get('/buyer/confirmbuy/{pid}', 'buyerController@confirmbuy')->name('buyer.confirmbuy');
Route::post('/buyer/confirmbuy/{pid}', 'buyerController@transaction');
Route::get('/buyer/comment', 'buyerController@comment')->name('buyer.comment');
Route::get('/buyer/downloadphoto', 'buyerController@downloadphoto')->name('buyer.downloadphoto');//for download

Route::get('/buyer/downloadlist/', 'buyerController@downloadablelist')->name('buyer.downloadlist');//list

Route::get('/buyer/download/{imagename}', 'buyerController@download')->name('buyer.download');//download from list


});




//////////////////////////    ADMIN    //////////////////////////////////
Route::group(['middleware'=>['admin']],function(){
Route::get('/admin', 'adminController@index')->name('admin.index');

Route::get('/admin/adminprofile', 'adminController@profile')->name('admin.profile');

Route::get('/admin/userList', 'adminController@showUserList')->name('admin.userList');

Route::get('/admin/delete/{uid}', 'adminController@userDelete')->name('admin.userDelete');

Route::get('/admin/creditrequest', 'adminController@showCreditList')->name('admin.creditrequest');

Route::get('/admin/edit/{uid}', 'adminController@userEdit')->name('admin.userEdit');
Route::post('/admin/edit/{uid}', 'adminController@updateUserEdit');

Route::get('/admin/delete/{uid}', 'adminController@deleteUser')->name('admin.userDelete');
Route::post('/admin/delete/{uid}', 'adminController@destroyUser');

Route::get('/admin/updateRequest/{cid}', 'adminController@updateRequest')->name('admin.updateRequest');
Route::get('/admin/deleteRequest/{cid}', 'adminController@deleteRequest')->name('admin.deleteRequest');

Route::get('/admin/changePassword', 'adminController@changePassword')->name('admin.changePassword');
Route::post('/admin/changePassword', 'adminController@updatePassword');

Route::get('/admin/changeInformation', 'adminController@changeInformation')->name('admin.changeInformation');
Route::post('/admin/changeInformation', 'adminController@updateinformation');

Route::get('/admin/photoInfo', 'adminController@photoInfo')->name('admin.photoInfo');

Route::get('/admin/photoEdit/{pid}', 'adminController@photoEdit')->name('admin.photoEdit');
Route::post('/admin/photoEdit/{pid}', 'adminController@photoInsert');
Route::get('/admin/deletePhoto/{pid}', 'adminController@deletePhoto')->name('admin.deletePhoto');

});


//////////////////////////    Seller    //////////////////////////////////
Route::group(['middleware'=>['seller']],function(){
Route::get('/seller', 'sellerController@index')->name('seller.index');

Route::get('/seller/sellerprofile', 'sellerController@profile')->name('seller.profile');
Route::get('/seller/uploadphoto', 'sellerController@uploadphoto')->name('seller.uploadphoto');
Route::post('/seller/uploadphoto', 'sellerController@storeuploadphoto');

Route::get('/seller/sellerChangePassword', 'sellerController@changepassword')->name('seller.changepassword');
Route::post('/seller/sellerChangePassword', 'sellerController@updatepassword');

Route::get('/seller/sellerChangeinformation', 'sellerController@changeinformation')->name('seller.changeinformation');
Route::post('/seller/sellerChangeinformation', 'sellerController@updateinformation');

Route::get('/seller/uploadedphoto', 'sellerController@uploadedphoto')->name('seller.uploadedphoto');

Route::get('/seller/editphoto/{pid}', 'sellerController@editphoto')->name('seller.photoEdit');
Route::post('/seller/editphoto/{pid}', 'sellerController@photoInsert');


Route::get('/seller/deletephoto/{pid}', 'sellerController@deletephoto')->name('seller.photoDelete');

});


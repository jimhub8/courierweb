<?php




use Illuminate\Http\Request;





Route::get('/', 'HomeController@boxleo')->name('boxleo');
Route::get('/boxleo', 'HomeController@boxleo')->name('boxleo')->middleware('verified');

Route::post('/search', 'SearchController@search')->name('search');
Route::get('/status/{id}', 'SearchController@status')->name('status');

// Socialite
Route::get('login/{service}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{service}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/test', function () {
    $beautymail = app()->make(Snowfire\Beautymail\Beautymail::class);
    $beautymail->send('mails.beauty', [], function ($message) {
        $message
            ->from('bar@example.com')
            ->to('foo@example.com', 'John Smith')
            ->subject('Welcome!');
    });
});

Route::resource('subscriptions', 'SubscriptionController');
Route::resource('message', 'MessageController');
Route::resource('subscribers', 'SubscriberController');
Route::resource('quote', 'QuoteController');

Auth::routes(['verify' => true]);

// Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/apilogin', function () {
        $query = http_build_query([
            'client_id' => 3, // Replace with Client ID
            'redirect_uri' => 'http://127.0.0.1:8001/callback',
            'response_type' => 'code',
            'scope' => ''
        ]);

        return redirect('http://127.0.0.1:8000/oauth/authorize?'.$query);
    });

    Route::get('/callback', function (Request $request) {
        $response = (new GuzzleHttp\Client)->post('http://127.0.0.1:8000/oauth/token', [
            'form_params' => [
                'grant_type' => 'authorization_code',
                'client_id' => 3, // Replace with Client ID
                'client_secret' => 'GXaMlo7nVBwd3yJ6Jdk44uctf8f26g5S9u2RabjZ', // Replace with client secret
                'redirect_uri' => 'http://127.0.0.1:8001/callback',
                'code' => $request->code,
            ]
        ]);

        session()->put('token', json_decode((string) $response->getBody(), true));

        return redirect('/admin/#/shipments');
    });

    Route::get('/todos', function () {
        $response = (new GuzzleHttp\Client)->get('http://127.0.0.1:8000/api/todos', [
            'headers' => [
                'Authorization' => 'Bearer '.session()->get('token.access_token')
            ]
        ]);

        return json_decode((string) $response->getBody(), true);
    });


Route::get('/admin', 'HomeController@admin')->name('admin');
Route::get('/getStatuses', 'ShipmentController@getStatuses')->name('getStatuses');
Route::post('/statusReport', 'ReportController@statusReport')->name('statusReport');

Route::get('/logoutOther', 'UserController@logoutOther')->name('logoutOther');
Route::post('/logOtherDevices', 'UserController@logOtherDevices')->name('logOtherDevices');

Route::resource('blog', 'BlogController');
Route::resource('shipment', 'ShipmentController');

Route::resource('users', 'UserController');
Route::resource('roles', 'RoleController');

Route::post('glSearch', 'ShipmentController@glSearch')->name('glSearch');
Route::post('nextpage', 'ShipmentController@nextpage')->name('nextpage');

Route::post('permisions/{id}', 'UserController@permisions')->name('permisions');
Route::get('getUsers', 'UserController@getUsers')->name('getUsers');
Route::get('getDrivers', 'UserController@getDrivers')->name('getDrivers');
Route::get('getCustomer', 'UserController@getCustomer')->name('getCustomer');
Route::get('getLogedinUsers', 'UserController@getLogedinUsers')->name('getLogedinUsers');
Route::post('profile/{id}', 'UserController@profile')->name('profile');
Route::post('getSorted', 'UserController@getSorted')->name('getSorted');
Route::post('getUserPro/{id}', 'UserController@getUserPro')->name('getUserPro');
Route::post('getUserPerm/{id}', 'UserController@getUserPerm')->name('getUserPerm');
Route::post('password', 'UserController@password')->name('password');
Route::patch('AuthUserUp/{id}', 'UserController@AuthUserUp')->name('AuthUserUp');
Route::post('UserShip', 'UserController@UserShip')->name('UserShip');
Route::get('deletedUsers', 'UserController@deletedUsers')->name('deletedUsers');
Route::patch('undeletedUser/{id}', 'UserController@undeletedUser')->name('undeletedUser');
Route::get('getUsersRole', 'RoleController@getUsersRole')->name('getUsersRole');
Route::get('getRoles', 'RoleController@getRoles')->name('getRoles');
Route::get('getPermissions', 'RoleController@getPermissions')->name('getPermissions');
Route::post('getRolesPerm/{id}', 'RoleController@getRolesPerm')->name('getRolesPerm');
Route::get('getRoles', 'RoleController@getRoles')->name('getRoles');


Route::post('/filterShipments', 'FilterController@filterShipments')->name('filterShipments');


Route::post('customerShip', 'DashboardController@customerShip')->name('customerShip');
Route::post('getsearchRe', 'DashboardController@getsearchRe')->name('getsearchRe');

// DashBoard
Route::get('customerCount', 'DashboardController@customerCount')->name('customerCount');
Route::get('customerScheduled', 'DashboardController@customerScheduled')->name('customerScheduled');
Route::get('customerDelivered', 'DashboardController@customerDelivered')->name('customerDelivered');
Route::get('customerCanceled', 'DashboardController@customerCanceled')->name('customerCanceled');
Route::get('delayedCount', 'DashboardController@delayedCount')->name('delayedCount');

// Chart
Route::get('getClientShip', 'DashboardController@getClientShip')->name('getClientShip');
Route::get('getClientScheduled', 'DashboardController@getClientScheduled')->name('getClientScheduled');
Route::get('getClientDelivered', 'DashboardController@getClientDelivered')->name('getClientDelivered');
Route::get('getCliegetBranchEgerntCancled', 'DashboardController@getClientCancled')->name('getClientCancled');

});


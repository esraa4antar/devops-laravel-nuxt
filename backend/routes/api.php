Route::get('/message', function () {
    return response()->json([
        'message' => 'Hello from Laravel 🎉'
    ]);
});


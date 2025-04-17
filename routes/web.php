<?php


use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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





Route::middleware('auth')->group(function () {
    Route::get('dashboard', App\Livewire\Pages\Dashboard::class)->name('dashboard');
    Route::get('account/companies', App\Livewire\Pages\Companies\CompanyIndex::class)->name('companies.all-company');
    Route::get('account/users', App\Livewire\Pages\Companies\CompanyIndex::class)->name('companies.all-users');
    Route::get('account/compliance-home', App\Livewire\Pages\Companies\CompanyIndex::class)->name('companies.compliance-home');
    Route::get('settings/create-number', App\Livewire\Pages\Settings\CreateNumber\CreateNumberIndex::class)->name('wizard');



    // Route::get('phone-trackings/{company}/reports', App\Livewire\Pages\PhoneTrackings\PhoneTrackingReport::class)->name('report-phone-trackings');
    Route::get('call-histories', App\Livewire\Pages\PhoneNumbers\CallHistory::class)->name('call-histories');

    //Route::get('phone-settings/numbers', App\Livewire\Pages\PhoneTrackings\PhoneTrackingIndex::class)->name('phone-settings');
    Route::get('phone-settings/add-schedule/{id}', App\Livewire\Pages\PhoneTrackings\AddSchedule::class)->name('add-schedule');
    Route::get('phone-settings/edit-schedule/{id}', App\Livewire\Pages\PhoneTrackings\EditSchedule::class)->name('edit-schedule');
    Route::get('phone-settings/edit/{id}', App\Livewire\Pages\PhoneTrackings\Edittrackings\Index::class)->name('edit-phonetracking');
    
    //tracking
    Route::get('phone-settings/routing/call-and-text/numbers/active', App\Livewire\Pages\PhoneTrackings\PhoneTrackingIndex::class)
    ->name('phone-settings.numbers');
    Route::get('phone-settings/routing/inbound-ports', App\Livewire\Pages\PhoneTrackings\PhoneTrackingIndex::class)
    ->name('phone-settings.inbound-ports');
    Route::get('phone-settings/routing/click-to-contact', App\Livewire\Pages\PhoneTrackings\PhoneTrackingIndex::class)
    ->name('phone-settings.click-to-contact'); 
    Route::get('phone-settings/routing/call-and-text/blocked-numbers', App\Livewire\Pages\PhoneTrackings\PhoneTrackingIndex::class)
    ->name('phone-settings.blocked-numbers'); 

    //workflow
    //Route::get('settings/call-flow-builder', App\Livewire\Pages\Settings\CallFlowBuilder\CallFlowIndex::class)
    //->name('call-flow-builder');
    Route::get('settings/workflow/call-flows', App\Livewire\Pages\Settings\CallFlowBuilder\CallFlowIndex::class)
    ->name('call-flow-builder.call-flows');
    Route::get('settings/workflow/message-flows', App\Livewire\Pages\Settings\CallFlowBuilder\CallFlowIndex::class)
    ->name('call-flow-builder.message-flows');
    Route::get('settings/workflow/keypad-scoring', App\Livewire\Pages\Settings\CallFlowBuilder\CallFlowIndex::class)
    ->name('call-flow-builder.keypad-scoring');
    Route::get('settings/workflow/tags/company', App\Livewire\Pages\Settings\CallFlowBuilder\CallFlowIndex::class)
    ->name('call-flow-builder.tags');

    //workflow create new
    Route::get('settings/call-flow-builder/{slug}', App\Livewire\Pages\Settings\CallFlowBuilder\CallFlowEdit::class)->name('call-flow-builder-edit');

    Route::get('settings/integration/library', App\Livewire\Pages\Settings\Integration\IntegrationIndex::class)->name('settings-integration.library');
    Route::get('settings/integrations', App\Livewire\Pages\Settings\Integration\IntegrationIndex::class)->name('settings-integration.manage');
    Route::get('settings/integration-filters', App\Livewire\Pages\Settings\Integration\IntegrationIndex::class)->name('settings-integration.integration-filters');
    Route::get('settings/api-keys', App\Livewire\Pages\Settings\Integration\IntegrationIndex::class)->name('settings-integration.api-keys');
    Route::get('settings/integration/{slug}', App\Livewire\Pages\Settings\Integration\IntegrationJs::class)->name('settings-integration-edit');
    // Route::get('phone-settings/buy-number', App\Livewire\Pages\PhoneTrackings\AddPhonenumber::class)->name('buy-phone-number');


    // Route::get('swap', [FileController::class, 'createJavaScriptFile']);
});
//still need more work to create invoice
Route::get('call-histories/reports/{calls}', App\Livewire\Pages\PhoneNumbers\CallHistoryReport::class, function (Request $request) {
    if (!$request->hasValidSignature()) {
        abort(401);
    }
})->name('call-history-reports');


// Route::get('testing', )

require __DIR__ . '/auth.php';

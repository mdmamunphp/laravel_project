<?php

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

Route::get('/', function () {
    return view('systems.login');
});
// Route::get('/', function () {
//     return view('welcome');
// });

Route::post("login", "LoginController@login");
Route::get("logout", "LoginController@logout");

Route::resource("branches", "BranchesController");

Route::resource("brands", "BrandsController");

Route::resource("categoris", "CategoriesController");

Route::resource("customers", "CustomersController");

Route::resource("products", "ProductsController");

Route::post("products/purchase", "ProductsController@productsadd");

Route::resource("roles", "RolesController");

Route::resource("sippings", "SippingsController");

Route::resource("subcategories", "SubcategoriesController");

Route::resource("Sellinvoice", "SellinvoicesController");

Route::resource("purchaseinvoice", "PurchaseinvoicesController");

Route::resource("suppliers", "SuppliersController");

Route::resource("taxs", "TaxsController");

Route::resource("units", "UnitsController");

Route::resource("purchases", "PurchasesController");
Route::resource("report", "ReportController");


Route::get("contacts", "CustomersController@contacts");
// Route::get("purchases", "PurchasesController");

Route::get("pro_wise_purchase", "ReportController@pro_wise_purchase");
Route::get("pro_wise_sales", "ReportController@pro_wise_sales");
Route::get("branch_wise_report", "ReportController@branch_wise_report");


///-----------------------------branche wise report-----------------------------///

Route::get("branch_wise_purchases/{id}", "ReportController@branch_wise_purchases");
Route::get("branch_wise_sales/{id}", "ReportController@branch_wise_sales");
Route::get("branch_wise_stock/{id}", "ReportController@branch_wise_stock");





Route::get("all_sales", "ReportController@all_sales");
Route::get("all_purchase", "ReportController@all_purchase");


Route::post("purchases/purchasedd", "PurchasesController@purchaseadd");
Route::post("purchases/remove", "PurchasesController@remove");
Route::post("purchases/store", "PurchasesController@store");


Route::delete("purchases/removeiteam", "PurchasesController@removeItem");



Route::resource("sales", "SalesController");
Route::post("sales/salesadd", "SalesController@salesadd");
Route::post("sales/store", "SalesController@store");
Route::post("sales/remove", "SalesController@remove");
Route::delete("sales/removeiteam", "SalesController@removeItem");

Route::get("sales_summary", "SalesController@sales_summary");

Route::get("received_from_customer", "PaymentController@received_from_customer");
Route::get("payment_to_supplier", "PaymentController@payment_to_supplier");
Route::post("payment_to_supplier/update", "PaymentController@update_supplier");

Route::post("received_from_customer/due_update", "PaymentController@due_update");


Route::resource("employees", "EmployeesController");
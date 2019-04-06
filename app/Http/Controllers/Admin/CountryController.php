<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Country;
use App\Http\Requests\Admin\CountryRequest;

class CountryController extends Controller
{
  /**
   * Show all countries
   *
   * @return response
   */
  public function index(Country $country) {
     $countries = $country->orderBy('id', 'asc')->get();

     return view('admin.countries.index', compact('countries'));
  }

  /**
   * Create new country
   *
   * @return response
   */
  public function create() {
    return view('admin.countries.create');
  }

  /**
   * Store new country
   *
   * @return response
   */
  public function store(CountryRequest $request) {
    $country = Country::create($request->all());
    $country->save();

    return redirect()->back()->with(['success' => 'Country inserted successfully']);
  }

  /**
   * edit existing country
   *
   * @return response
   */
  public function edit($id) {
    $country = Country::where('id', $id)->first();

    if (! $country) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }
      return view('admin.countries.edit', compact('country'));
  }

  /**
   * update existing country
   *
   * @return response
   */
  public function update($id, CountryRequest $request) {
    $country = Country::where(['id' => $id])->first();

    if (! $country) {
      return redirect()->back()->with(['error' => 'Sorry, An error occurs']);
    }

    $country = $country->fill($request->all());
    $country->save();

   return redirect()->back()->with(['success' => 'Country updated successfully']);
  }

  /**
   * Delete country by the given id
   *
   * @return message
   */
  public function destroy($id) {
    $country = Country::where(['id' => $id])->first();

    if (! $country) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }
    Country::destroy($id);
    return redirect()->back()->with(['success' => 'Country deleted successfully']);
  }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Market;
use App\Http\Requests\Admin\MarketRequest;

class MarketController extends Controller
{
  /**
   * Show all markets
   *
   * @return response
   */
  public function index(Market $market) {
     $markets = $market->orderBy('id', 'asc')->get();

     return view('admin.markets.index', compact('markets'));
  }

  /**
   * Create new market
   *
   * @return response
   */
  public function create() {
    return view('admin.markets.create');
  }

  /**
   * Store new market
   *
   * @return response
   */
  public function store(MarketRequest $request) {
    $market = Market::create($request->all());
    $market->save();

    return redirect()->back()->with(['success' => 'Market inserted successfully']);
  }

  /**
   * edit existing market
   *
   * @return response
   */
  public function edit($id) {
    $market = Market::where('id', $id)->first();

    if (! $market) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }
      return view('admin.markets.edit', compact('market'));
  }

  /**
   * update existing market
   *
   * @return response
   */
  public function update($id, MarketRequest $request) {
    $market = Market::where(['id' => $id])->first();

    if (! $market) {
      return redirect()->back()->with(['error' => 'Sorry, An error occurs']);
    }

    $market = $market->fill($request->all());
    $market->save();

   return redirect()->back()->with(['success' => 'Market updated successfully']);
  }

  /**
   * Delete market by the given id
   *
   * @return message
   */
  public function destroy($id) {
    $market = Market::where(['id' => $id])->first();

    if (! $market) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }
    Market::destroy($id);
    return redirect()->back()->with(['success' => 'Market deleted successfully']);
  }
}

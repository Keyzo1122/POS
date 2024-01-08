<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Member;
use App\Models\Author;
use App\Models\Book;
use App\Models\Catalog;
use App\Models\Publisher;
use App\Models\Transaction;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $members = Member::count();
        $books = Book::count();
        $transactions = Transaction::whereMonth('date_start', date('m'))->count();
        $publishers = Publisher::count();

        $data_donut = Book::select(DB::raw("COUNT(publisher_id) as total"))->groupBy('publisher_id')->orderBy('publisher_id', 'asc')->pluck('total');
        $label_donut = Publisher::orderBy('publishers.id', 'asc')->join('books', 'books.publisher_id', '=', 'publishers.id')->groupBy('nama_penerbit')->pluck('publisher_name');

        $label_bar = ['Transaction'];
        $data_bar = [];

        foreach ($label_bar as $key => $value) {
            $data_bar[$key]['label'] = $label_bar[$key];
            $data_bar[$key]['backgorundColor'] = 'rgba(60, 141, 188, 0.9';
            $data_month = [];

            foreach (range(1, 12) as $month) {
                $data_month[] = Transaction::select(DB::raw("COUNT(*) as total"))->whereMonth('date_start', $month)->first()->total;
            }
            $data_bar[$key]['data'] = $data_month;
        }
        return view('admin.dashboard', compact('books', 'members', 'transactions', 'publishers'));
    }

    public function catalog()
    {
        $catalog_data = Catalog::all();

        return view('admin.catalog.index', compact('catalog_data'));
    }

    public function publisher()
    {
        return view('admin.publisher');
    }

    public function author()
    {
        return view('admin.author');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}

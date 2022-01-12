<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;
use App\Models\Expense;
use App\Http\Requests\InputRequest;

class IncomeController extends Controller
{
    public function index()
    {
        $total_income = Income::total();
        $total_expense = Expense::total();
        $incomes = Income::orderBy('date', 'asc')->get();

        return view('incomes.index')
            ->with(['total_income' => $total_income, 'total_expense' => $total_expense, 'incomes' => $incomes]);
    }

    public function create()
    {
        return view('incomes.create');
    }

    public function store(InputRequest $request)
    {
        $income = new Income();
        $income->date = $request->date;
        $income->account = $request->account;
        $income->text = $request->text;
        $income->price = $request->price;
        $income->save();

        return redirect()
            ->route('incomes.index');
    }

    public function edit(Income $income)
    {
        return view('incomes.edit')
            ->with(['income' => $income]);
    }

    public function update(InputRequest $request, Income $income)
    {
        $income->date = $request->date;
        $income->account = $request->account;
        $income->text = $request->text;
        $income->price = $request->price;
        $income->save();

        return redirect()
            ->route('incomes.index');
    }

    public function destroy(Income $income)
    {
        $income->delete();

        return redirect()
            ->route('incomes.index');
    }
}

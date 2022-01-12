<?php

namespace App\Http\Controllers;

use App\Http\Requests\InputRequest;
use Illuminate\Http\Request;
use App\Models\Income;
use App\Models\Expense;
use Symfony\Component\Console\Input\Input;

class ExpenseController extends Controller
{
    public function index()
    {
        $total_income = Income::sum('price');
        $total_expense = Expense::sum('price');
        $expenses = Expense::orderBy('date', 'asc')->get();

        return view('expenses.index')
        ->with(['total_income' => $total_income, 'total_expense' => $total_expense, 'expenses' => $expenses]);
    }

    public function create()
    {
        return view('expenses.create');
    }

    public function store(InputRequest $request)
    {
        $expense = new Expense();
        $expense->date = $request->date;
        $expense->account = $request->account;
        $expense->text = $request->text;
        $expense->price = $request->price;
        $expense->save();

        return redirect()
            ->route('expenses.index');
    }

    public function edit(Expense $expense)
    {
        return view('expenses.edit')
            ->with(['expense' => $expense]);
    }

    public function update(InputRequest $request, Expense $expense)
    {
        $expense->date = $request->date;
        $expense->account = $request->account;
        $expense->text = $request->text;
        $expense->price = $request->price;
        $expense->save();

        return redirect()
            ->route('expenses.index');
    }

    public function destroy(Expense $expense)
    {
        $expense->delete();

        return redirect()
            ->route('expenses.index');
    }
}

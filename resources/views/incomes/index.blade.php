<x-layout>
    <x-slot name="title">
        収支一覧
    </x-slot>

    <section class="register">
        <a href="{{ route('incomes.create') }}" class="income">収入を登録する</a>
        <a href="{{ route('expenses.create') }}" class="expense">支出を登録する</a>
    </section>

    <section class="search">
        <form action="{{ route('incomes.index') }}" method="GET">
            <input type="month" name="month" value="{{ $month }}">
            <button>絞り込み</button>
        </form>
    </section>

    <section class="sum">
        <table>
            <tr>
                <th>収入</th>
                <th>-</th>
                <th>支出</th>
                <th>=</th>
                <th>収支</th>
            </tr>
            <tr>
                <td>¥{{ $total_income }}</td>
                <td>-</td>
                <td>¥{{ $total_expense }}</td>
                <td>=</td>
                <td>¥{{ $total_income - $total_expense }}</td>
            </tr>
        </table>
    </section>

    <section class="menu">
        <ul class="list-menu">
            <li>
                <a href="{{ route('incomes.index') }}" class="income-income">収入</a>
            </li>
            <li>
                <a href="{{ route('expenses.index') }}" class="income-expense">支出</a>
            </li>
        </ul>
    </section>

    <section class="content">
        <table border="1" class="income_table">
            @if (count($incomes) > 0)
                <tr class="income">
                    <th width="150px">日付</th>
                    <th width="150px">科目</th>
                    <th>摘要</th>
                    <th width="150px">金額</th>
                    <th width="100px"></th>
                    <th width="100px"></th>
                </tr>
                @foreach ($incomes as $income)
                    <tr>
                        <td>{{ $income->date }}</td>
                        <td>{{ $income->account }}</td>
                        <td>{!! nl2br(e($income->text)) !!}</td>
                        <td>¥{{ $income->price }}</td>
                        <td>
                            <button type="button">
                                <a href="{{ route('incomes.edit', $income) }}">編集</a>
                            </button>
                        </td>
                        <td>
                            <form action="{{ route('incomes.destroy', $income) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="button" class="delete-form">削除</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <p>データが登録されていません</p>
            @endif
        </table>
    </section>
</x-layout>

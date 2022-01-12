<x-layout>
    <x-slot name="title">
        収支一覧
    </x-slot>

    <section>
        <a href="{{ route('incomes.create') }}">収入を登録する</a>
        <a href="{{ route('expenses.create') }}">支出を登録する</a>
    </section>

    <section>
        <ul class="list-menu">
            <li>
                <a href="{{ route('incomes.index') }}">収入の詳細を確認する</a>
            </li>
            <li>
                <a href="{{ route('expenses.index') }}">支出の詳細を確認する</a>
            </li>
        </ul>
    </section>

    <section>
        <table>
            <tr>
                <th>収入</th>
                <th>-</th>
                <th>支出</th>
                <th>=</th>
                <th>収支</th>
            </tr>
            <tr>
                <td>{{ $total_income }}</td>
                <td>-</td>
                <td>{{ $total_expense }}</td>
                <td>=</td>
                <td>{{ $total_income - $total_expense }}</td>
            </tr>
        </table>
    </section>

    <section>
        <h2>支出一覧</h2>
        <table>
            @if (count($expenses) > 0)
                <tr>
                    <th>日付</th>
                    <th>科目</th>
                    <th>摘要</th>
                    <th>金額</th>
                </tr>
                @foreach ($expenses as $expense)
                    <tr>
                        <td>{{ $expense->date }}</td>
                        <td>{{ $expense->account }}</td>
                        <td>{!! nl2br(e($expense->text)) !!}</td>
                        <td>{{ $expense->price }}</td>
                        <td><a href="{{ route('expenses.edit', $expense) }}">編集</a></td>
                        <td>
                            <form action="{{ route('expenses.destroy', $expense) }}" method="POST">
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

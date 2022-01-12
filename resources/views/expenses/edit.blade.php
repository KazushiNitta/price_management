<x-layout>
    <x-slot name="title">
        支出編集
    </x-slot>

    <h2>支出編集</h2>
    <section>
        <form action="{{ route('expenses.update', $expense) }}" method="POST">
            @method('PATCH')
            @csrf

            <ul>
                @foreach ($errors->all() as $error)
                    <li class="error">{{ $error }}</li>
                @endforeach
            </ul>

            <div>
                <label for="date">日付</label>
                <input type="date" name="date" id="date" value="{{ old('date', $expense->date) }}">
            </div>

            <div>
                <label for="account">科目</label>
                <input type="text" name="account" id="account" value="{{ old('account', $expense->account) }}">
            </div>

            <div>
                <label for="text">摘要</label>
                <textarea name="text" id="text">{{ old('text', $expense->text) }}</textarea>
            </div>

            <div>
                <label for="price">金額</label>
                <input type="number" name="price" id="price" value="{{ old('price', $expense->price) }}">
            </div>
            <button>編集</button>
        </form>
    </section>
    <a href="{{ route('expenses.index') }}">戻る</a>
</x-layout>

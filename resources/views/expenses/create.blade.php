<x-layout>
    <x-slot name="title">
        支出登録
    </x-slot>

    <h2>支出登録</h2>
    <section>
        <form action="{{ route('expenses.store') }}" method="POST">
            @csrf

            <ul>
                @foreach ($errors->all() as $error)
                    <li class="error">{{ $error }}</li>
                @endforeach
            </ul>

            <div>
                <label for="date">日付</label>
                <input type="date" name='date' id="date" value="{{ old('date') }}">
            </div>

            <div>
                <label for="account">科目</label>
                <input type="text" name="account" id="account" value="{{ old('account') }}">
            </div>

            <div>
                <label for="text">摘要</label>
                <textarea name="text" id="text">{{ old('text') }}</textarea>
            </div>

            <div>
                <label for="price">金額</label>
                <input type="number" name="price" id="price" value="{{ old('price') }}">
            </div>
            <button>登録</button>
        </form>
    </section>
    <a href="{{ route('expenses.index') }}">戻る</a>
</x-layout>

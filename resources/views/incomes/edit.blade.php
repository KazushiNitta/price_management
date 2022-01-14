<x-layout>
    <x-slot name="title">
        収入編集
    </x-slot>

    <h2 class="sub-title income">収入編集</h2>
    <section class="form">
        <form action="{{ route('incomes.update', $income) }}" method="POST">
            @method('PATCH')
            @csrf

            <ul>
                @foreach ($errors->all() as $error)
                    <li class="error">{{ $error }}</li>
                @endforeach
            </ul>

            <div class="part">
                <label for="date" class="label">日付</label>
                <input type="date" name="date" id="date" value="{{ old('date', $income->date) }}" class="input">
            </div>

            <div class="part">
                <label for="account" class="label">科目</label>
                <input type="text" name="account" id="account" value="{{ old('account', $income->account) }}" class="input">
            </div>

            <div class="part">
                <label for="text" class="label">摘要</label>
                <textarea name="text" id="text" class="text">{{ old('text', $income->text) }}</textarea>
            </div>

            <div class="part">
                <label for="price" class="label">金額</label>
                <input type="number" name="price" id="price" value="{{ old('price', $income->price) }}" class="input">
            </div>
            <button class="income">編集</button>
        </form>
        <a href="{{ route('incomes.index') }}">戻る</a>
    </section>
</x-layout>

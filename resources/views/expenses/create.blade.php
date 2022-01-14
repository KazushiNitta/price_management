<x-layout>
    <x-slot name="title">
        支出登録
    </x-slot>

    <h2 class="sub-title expense">支出登録</h2>
    <section class="form">
        <form action="{{ route('expenses.store') }}" method="POST">
            @csrf

            <ul>
                @foreach ($errors->all() as $error)
                    <li class="error">{{ $error }}</li>
                @endforeach
            </ul>

            <div class="part">
                <label for="date" class="label">日付</label>
                <input type="date" name='date' id="date" value="{{ old('date') }}" class="input">
            </div>

            <div class="part">
                <label for="account" class="label">科目</label>
                <input type="text" name="account" id="account" value="{{ old('account') }}" class="input">
            </div>

            <div class="part">
                <label for="text" class="label">摘要</label>
                <textarea name="text" id="text" class="text">{{ old('text') }}</textarea>
            </div>

            <div class="part">
                <label for="price" class="label">金額</label>
                <input type="number" name="price" id="price" value="{{ old('price') }}" class="input">
            </div>
            <button class="expense">登録</button>
        </form>
        <a href="{{ route('expenses.index') }}">戻る</a>
    </section>
</x-layout>

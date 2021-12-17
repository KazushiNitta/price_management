<x-layout>
    <x-slot name="title">
        収支一覧
    </x-slot>

    <h2>収支一覧</h2>
    <section>
        <a href="">収入を登録する</a>
        <a href="">支出を登録する</a>
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
                <td>100</td>
                <td>-</td>
                <td>50</td>
                <td>=</td>
                <td>50</td>
            </tr>
        </table>
    </section>

    <section>
        <ul>
            <li>収入</li>
            <li>支出</li>
        </ul>
    </section>

    <section>
        <table>
            <tr>
                <th>日付</th>
                <th>科目</th>
                <th>摘要</th>
                <th>金額</th>
            </tr>
            @forelse ($collection as $item)
                <tr>
                    <td>日付</td>
                    <td>科目</td>
                    <td>摘要</td>
                    <td>金額</td>
                    <td>編集</td>
                    <td>削除</td>
                </tr>
            @empty
                <p>データが登録されていません</p>
            @endforelse
        </table>
    </section>
    
    <section>
        <table>
            <tr>
                <th>日付</th>
                <th>科目</th>
                <th>摘要</th>
                <th>金額</th>
            </tr>
            @forelse ($collection as $item)
                <tr>
                    <td>日付</td>
                    <td>科目</td>
                    <td>摘要</td>
                    <td>金額</td>
                    <td>編集</td>
                    <td>削除</td>
                </tr>
            @empty
                <p>データが登録されていません</p>
            @endforelse
        </table>
    </section>
</x-layout>

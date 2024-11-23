@extends('layouts.app', ['title' => 'Incomes'])

@section('content')
    @if ($transaction->type != 'income')
        @php
            header('Location: ' . URL::to('home'), true, 302);
            exit();
        @endphp
    @endif
    <main class="p-4 w-full max-w-md">
        <form action="" method="post" class="p-6">
            @csrf
            @method('put')
            <div class="flex justify-between">
                <h2 class="text-2xl font-semibold text-gray-700 mb-4">Edit Income</h2>
                <a href={{ url('transaction/' . $transaction->id . '/delete') }} type="button"
                    class="
                focus:outline-none
                text-white
                bg-red-600
                hover:bg-red-800
                focus:ring-4
                focus:ring-red-300
                rounded-lg
                text-sm
                px-5 py-2.5
                me-2 mb-2
                dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900
            ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                    </svg>
                </a>
            </div>

            <div class="mb-4">
                <label for="amount" class="block text-gray-700 text-sm font-bold mb-2">Amount</label>
                <input type="number" id="amount" name="amount" placeholder="Enter income amount"
                    value={{ $transaction->amount }}
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                    required>
            </div>

            <div class="mb-4">
                <label for="date" class="block text-gray-700 text-sm font-bold mb-2">Date</label>
                <input type="date" id="date" name="date" value={{ $transaction->created_at }}
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                    required>
            </div>

            <div class="mb-4">
                <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Category</label>
                <select id="category" name="category" value={{ $transaction->category }}
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                    required>
                    <option value="">Select Category</option>
                    <option value="salary"@if ($transaction->category == 'salary') selected @endif>
                        Salary</option>
                    <option value="bonus"@if ($transaction->category == 'bonus') selected @endif>
                        Bonus</option>
                    <option value="other"@if ($transaction->category == 'other') selected @endif>
                        Other
                    </option>
                </select>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                <textarea id="description" name="description" rows="3" placeholder="Enter income description"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">{{ $transaction->description }}
            </textarea>
            </div>

            <button type="submit"
                class="w-full bg-blue-600 text-white font-semibold py-2 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Save
                Income</button>
        </form>
    </main>
@stop

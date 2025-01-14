<div class="max-w-3xl mx-auto">
    <form wire:submit="save" class="space-y-6 bg-white p-6 rounded-lg shadow">
        <div>
            <label for="proposal_id" class="block text-sm font-medium text-gray-700">提案</label>
            <select wire:model="quote.proposal_id" id="proposal_id" class="mt-1 block w-full rounded-md border-gray-300">
                <option value="">選擇提案</option>
                @foreach($proposals as $proposal)
                    <option value="{{ $proposal->id }}">{{ $proposal->title }}</option>
                @endforeach
            </select>
            @error('quote.proposal_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">報價標題</label>
            <input type="text" wire:model="quote.title" id="title" class="mt-1 block w-full rounded-md border-gray-300">
            @error('quote.title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="content" class="block text-sm font-medium text-gray-700">報價內容</label>
            <textarea wire:model="quote.content" id="content" rows="6" class="mt-1 block w-full rounded-md border-gray-300"></textarea>
            @error('quote.content') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="amount" class="block text-sm font-medium text-gray-700">報價金額</label>
            <input type="number" wire:model="quote.amount" id="amount" class="mt-1 block w-full rounded-md border-gray-300">
            @error('quote.amount') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="valid_until" class="block text-sm font-medium text-gray-700">有效期限</label>
            <input type="date" wire:model="quote.valid_until" id="valid_until" class="mt-1 block w-full rounded-md border-gray-300">
            @error('quote.valid_until') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="payment_terms" class="block text-sm font-medium text-gray-700">付款條件</label>
            <input type="text" wire:model="quote.payment_terms" id="payment_terms" class="mt-1 block w-full rounded-md border-gray-300">
            @error('quote.payment_terms') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="delivery_terms" class="block text-sm font-medium text-gray-700">交付條件</label>
            <input type="text" wire:model="quote.delivery_terms" id="delivery_terms" class="mt-1 block w-full rounded-md border-gray-300">
            @error('quote.delivery_terms') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="status" class="block text-sm font-medium text-gray-700">報價狀態</label>
            <select wire:model="quote.status" id="status" class="mt-1 block w-full rounded-md border-gray-300">
                <option value="draft">草稿</option>
                <option value="sent">已送出</option>
                <option value="accepted">已接受</option>
                <option value="rejected">已拒絕</option>
            </select>
            @error('quote.status') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="notes" class="block text-sm font-medium text-gray-700">備註</label>
            <textarea wire:model="quote.notes" id="notes" rows="3" class="mt-1 block w-full rounded-md border-gray-300"></textarea>
            @error('quote.notes') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="flex justify-end gap-4">
            <a href="{{ route('quotes.index') }}" class="bg-gray-100 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-200">
                取消
            </a>
            <button type="submit" class="bg-primary-600 text-white px-4 py-2 rounded-lg hover:bg-primary-700">
                {{ $isEdit ? '更新' : '建立' }}
            </button>
        </div>
    </form>
</div>
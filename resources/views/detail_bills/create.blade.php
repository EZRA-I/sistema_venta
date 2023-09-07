<div style="margin-bottom: 1em;">
    <a href="{{ route('detail_bills.index') }}">Detail_bill List</a>
</div>

<h1>Create Detail_bill</h1>

@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<form action="{{ route('detail_bills.create') }}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="amount">Amount</label>
        <input type="text" name="amount" id="amount" placeholder="Enter amount" value="{{ old('amount') }}">
        @error('amount')
        <div style="color: red;">{{ $message }}"</div>
        @enderror
    </div>

    <div style="margin-bottom: 1em;">
        <label for="price">Price</label>
        <input type="text" name="price" id="price" placeholder="Enter price" value="{{ old('price') }}">
        @error('price')
        <div style="color: red;">{{ $message }}"</div>
        @enderror
    </div>

    <div style="margin-bottom: 1em;">
        <label for="bill_id">Bill</label>
        <select name="bill_id" id="bill_id">
            <option value="">Select</option>
            @foreach($bills as $bill)
                <option
                    @if ($bill->id === (int)old('bill_id'))
                        selected
                    @endif
                    value="{{ $bill->id }}">{{ $bill->id }}</option>
            @endforeach
        </select>
        @error('bill_id')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>

    <div style="margin-bottom: 1em;">
        <label for="product_id">Product</label>
        <select name="product_id" id="product_id" >
            <option value="">Select</option>
            @foreach($products as $product)
                <option
                    @if ($product->id === (int)old('product_id'))
                        selected
                    @endif
                    value="{{ $product->id }}">{{ $product->name }}</option>
            @endforeach
        </select>
        @error('product_id')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <button type="submit">Submit</button>
    </div>
</form>

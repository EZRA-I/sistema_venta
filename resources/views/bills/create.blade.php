<div style="margin-bottom: 1em;">
    <a href="{{ route('bills.index') }}">Bill List</a>
</div>

<h1>Create Bill</h1>

@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<form action="{{ route('bills.create') }}" method="post">
    @csrf

    <div style="margin-bottom: 1em;">
        <label for="subtotal">Subtotal</label>
        <input type="text" name="subtotal" id="subtotal" placeholder="Enter subtotal" value="{{ old('subtotal') }}">
        @error('subtotal')
        <div style="color: red;">{{ $message }}"</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="total">Total</label>
        <input type="text" name="total" id="total" placeholder="Enter total" value="{{ old('total') }}">
        @error('total')
        <div style="color: red;">{{ $message }}"</div>
        @enderror
    </div>

    <div style="margin-bottom: 1em;">
        <label for="employee_id">Employee</label>
        <select name="employee_id" id="employee_id">
            <option value="">Select</option>
            @foreach($employees as $employee)
                <option
                    @if ($employee->id === (int)old('employee_id'))
                        selected
                    @endif
                    value="{{ $employee->id }}">{{ $employee->name }}</option>
            @endforeach
        </select>
        @error('employee_id')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>

    <div style="margin-bottom: 1em;">
        <label for="customer_id">Customer</label>
        <select name="customer_id" id="customer_id">
            <option value="">Select</option>
            @foreach($customers as $customer)
                <option
                    @if ($customer->id === (int)old('customer_id'))
                        selected
                    @endif
                    value="{{ $customer->id }}">{{ $customer->name }}</option>
            @endforeach
        </select>
        @error('customer_id')
        <div style="color: red;">{{ $message }}</div>
        @enderror

    </div>
    <div style="margin-bottom: 1em;">
        <label for="city_id">City</label>
        <select name="city_id" id="city_id">
            <option value="">Select</option>
            @foreach($cities as $city)
                <option
                    @if ($city->id === (int)old('city_id'))
                        selected
                    @endif
                    value="{{ $city->id }}">{{ $city->name }}</option>
            @endforeach
        </select>
        @error('city_id')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>

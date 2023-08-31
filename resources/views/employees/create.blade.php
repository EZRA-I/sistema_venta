<div style="margin-bottom: 1em;">
    <a href="{{ route('employees.index') }}">Employee List</a>
</div>

<h1>Create Employee</h1>

@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<form action="{{ route('employees.create') }}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter name" value="{{ old('name') }}">
        @error('name')
        <div style="color: red;">{{ $message }}"</div>
        @enderror
    </div><div style="margin-bottom: 1em;">
        <label for="surname">Surname</label>
        <input type="text" name="surname" id="surname" placeholder="Enter surname" value="{{ old('surname') }}">
        @error('surname')
        <div style="color: red;">{{ $message }}"</div>
        @enderror
    </div><div style="margin-bottom: 1em;">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Enter email" value="{{ old('email') }}">
        @error('email')
        <div style="color: red;">{{ $message }}"</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="post">Post</label>
        <input type="text" name="post" id="post" placeholder="Enter post" value="{{ old('post') }}">
        @error('post')
        <div style="color: red;">{{ $message }}"</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="address">Address</label>
        <input type="text" name="address" id="address" placeholder="Enter address" value="{{old('address') }}">
        @error('address')
        <div style="color: red;">{{ $message }}"</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone" placeholder="Enter phone" value="{{ old('phone') }}">
        @error('phone')
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
        @error('$city_id')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>

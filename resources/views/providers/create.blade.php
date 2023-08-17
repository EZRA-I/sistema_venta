<div style="margin-bottom: 1em;">
    <a href="{{ route('providers.index') }}">Provider List</a>
</div>

<h1>Create Provider</h1>

@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<form action="{{ route('providers.create') }}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter name" value="{{ old('name') }}">
        @error('name')
        <div style="color: red;">{{ $message }}"</div>
        @enderror
    </div><div style="margin-bottom: 1em;">
        <label for="last_name">Last_name</label>
        <input type="text" name="last_name" id="last_name" placeholder="Enter last_name" value="{{ old('last_name') }}">
        @error('last_name')
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
        <input type="text" name="post" id="post" placeholder="Enter post" value="{{ old('post')}}">
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

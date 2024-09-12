<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Detail Form</title>
 <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
 <div class="container">
  <div class="header">
 <h1>Registration Form</h1>
 <p>Fill the details to get register</p>
 </div>
  <form action="{{ route('form.submit') }}" class="form" id="form" method="post">
    @csrf
   <div class = "form-control">
   <label for="name">Name</label>
   <input type="text" name="name" id="name" placeholder="Enter your name" autofocus>
   <span class="error-message" id="nameError"></span>
   </div>
   <div class = "form-control">
   <label for="mobile">Mobile No</label>
   <input type="tel" name="mobile" id="mobile" placeholder="Enter your mobile no">
   <span class="error-message" id="mobileError"></span>
   </div>
   <div class = "form-control">
   <label for="email">Email</label>
   <input type="email" name="email" id="email" placeholder="Enter your email">
   <span class="error-message" id="emailError"></span>
   </div>
   <div class = "form-control">
   <label for="address">Address</label>
   <textarea name="address" id="address" placeholder="Write your address here"></textarea>
   <span class="error-message" id="addressError"></span>
   </div>
   <div class="buttons">
    <button type="submit">Submit</button>
   </div>
  </form>
 </div>
 
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div>
        <p>{{ session('success') }}</p>
    </div>
@endif

 <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>

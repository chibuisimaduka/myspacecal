@layout('home::templates.hometemplate')


@section('content')
<div id="content">
  <div class="container"> 
    <!-- Sign Up form -->
    <form class="form-login form-wrapper form-medium">
      <h3 class="title-divider"><span>Sign Up</span> <small>Already signed up? <a href="{{URL::to('/ses/home/login');}}">Login here</a>.</small></h3>
      <h5>What Kind Engineer are you?</h5>
      <select>
        <option>Mechanical</option>
        <option>Civil</option>
        <option>Mechatronic</option>
        <option>Computer</option>
        <option>Other</option>
      </select>
      <h5>Account Information</h5>
      <input type="text" class="input-block-level" placeholder="First name" required>
      <input type="text" class="input-block-level" placeholder="Last name" required>
      <input type="text" class="input-block-level" placeholder="Username" required>
      <input type="email" class="input-block-level" placeholder="Email address" required>
      <input type="password" class="input-block-level" placeholder="Password" required>
      <label class="checkbox">
        <input type="checkbox" value="term">
        I agree with the Terms and Conditions. </label>
      <button class="btn btn-primary" type="submit">Sign up</button>
    </form>
  </div>
</div>


@endsection


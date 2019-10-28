

  <pre></pre>
   @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
      @endif
      @if(session()->has('message'))
      <div class="alert alert-success">
          {{ session()->get('message') }}
      </div>
        @else
          @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
             @endforeach
      @endif
            <pre></pre>
  <form action="{{route('posttadd')}}" method="POST" role="form">
    <legend>Thêm User</legend>
    @csrf
    <div class="form-group">
      <label for="namePd">Name </label>
      <input name="name" type="text" class="form-control" id="nameU" placeholder="Nhập tên người dùng">
    </div>
    <div class="form-group">
      <label for="addressPd">Email </label>
      <input name="email" type="email" class="form-control" id="emailU" placeholder="Nhập địa điểm">
    </div>
    <div class="form-group">
      <label for="datePd">Password </label>
      <input name="password" type="password" class="form-control" id="passU" placeholder="Nhập Password">
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
  </form>

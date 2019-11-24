<!DOCTYPE html>
<html lang="en">

<head>
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script>
    (adsbygoogle = window.adsbygoogle || []).push({
      google_ad_client: "ca-pub-2040865810414258",
      enable_page_level_ads: true
    });
  </script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{asset('./favicon.ico')}}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>LARAVEL CRUD USERS DEMO</title>
  <link rel="stylesheet" href="{{asset('./css/bootstrap.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('./css/styles.css')}}">
</head>

  <div class="main-panel" id="main-panel">

    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title"> Simple Table</h4>
            </div>
            <div class="card-body">

      <form action="{{route('users.update',$user->id)}}" method="post">
        <input type="hidden" name="_method" value="put" /> {{csrf_field()}}
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="name">name</label>
          <input type="text" class="form-control rounded-0" id="name" placeholder="Name" name="name" value="{{$user->name}}">
        </div>
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="email">email</label>
          <input type="text" class="form-control rounded-0" id="email" placeholder="email" name="email" value="{{$user->email}}">
        </div>
          <div class="form-group ">
              <label class="text-uppercase font-weight-bold" for="roly_id">roly_id</label>
              <input type="number" class="form-control rounded-0" id="roly_id" placeholder="roly_id" name="roly_id" value="{{$user->roly_id}}">
          </div>
        <div class="form-group ">
          <button type="submit" class="btn btn-warning text-uppercase rounded-0 font-weight-bold">
            save
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
</body>

</html>
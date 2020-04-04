<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
</head>
<body>

<div class="container">
    <h1>Url shortner System</h1>

    <div class="card">
      <div class="card-header">
        <form method="POST" action="{{ route('post.url.shorten') }}">
        {{ csrf_field() }}
            <div class="input-group mb-3">
              <input type="url" name="orglink" class="form-control" placeholder="Enter URL" required>
              <div class="input-group-append">
                <button class="btn btn-success" type="submit">Generate Shorten Link</button>
              </div>
            </div>
        </form>
      </div>
      <div class="card-body">

              @if (Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ Session::get('success') }}</p>
                </div>
            @endif

            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Short Link</th>
                        <th>Link</th>
                        <th>Opened</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($shortLinks as $row)
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td><a href="{{ route('shorten.code', $row->shortcode) }}" target="_blank">{{ route('shorten.code', $row->shortcode) }}</a></td>
                            <td>{{ $row->orglink }}</td>
                            <td>{{ $row->open }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
      </div>
    </div>
    
</div>
 
</body>
</html>
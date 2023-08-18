<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Company Form - Laravel 9 CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add Channel</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('channels.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('channels.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Channel Name:</strong>
                        <input type="text" name="ChannelName" class="form-control" placeholder="Channel Name">
                        @error('ChannelName')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Description:</strong>
                        <textarea name="Description" class="form-control" placeholder="Description"></textarea>
                        @error('Description')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Subscribers Count:</strong>
                        <input type="number" name="SubscribersCount" class="form-control" placeholder="Subscribers Count">
                        @error('SubscribersCount')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>URL:</strong>
                        <input type="text" name="URL" class="form-control" placeholder="URL">
                        @error('URL')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!-- Hidden input field for Created_At -->
                <input type="hidden" name="Created_At" value="{{ now() }}">
                <!-- Hidden input field for Updated_At -->
                <input type="hidden" name="Updated_At" value="{{ now() }}">

                <button type="submit" class="btn btn-primary ml-3">Add</button>
            </div>
        </form>



    </div>
</body>

</html>
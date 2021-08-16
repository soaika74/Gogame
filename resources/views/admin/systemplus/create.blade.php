@extends('layout.admin')

@section('content')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Admin</a></li>
    <li class="breadcrumb-item">Sản phẩm</li>
    <li class="breadcrumb-item active" aria-current="page">Cấu hình</li>
  </ol>
</nav>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Thêm cấu hình đề nghị
    </div>
    <div class="card-body">
        <form action="{{ route('systemsplus.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-2">
                <label for="title">Tiêu đề - title:</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}">
            </div>
            <div class="form-group mb-2">
                <label for="os">Hệ điều hành - os:</label>
                <input type="text" name="os" class="form-control" id="os" value="{{ old('os') }}">
            </div>
            <div class="form-group mb-2">
                <label for="processor">Vi xử lý: - processor</label>
                <input type="text" name="processor" class="form-control" id="processor" value="{{ old('processor') }}">
            </div>
            <div class="form-group mb-2">
                <label for="memory">Bộ nhớ ram: - memory</label>
                <input type="text" name="memory" class="form-control" id="memory" value="{{ old('memory') }}">
            </div>
            <div class="form-group mb-2">
                <label for="graphic">Card đồ họa: - graphic</label>
                <input type="text" name="graphic" class="form-control" id="graphic" value="{{ old('graphic') }}">
            </div>
            <div class="form-group mb-2">
                <label for="stogare">Bộ nhớ trống: - stogare</label>
                <input type="text" name="stogare" class="form-control" id="stogare" value="{{ old('stogare') }}">
            </div>
            <div class="form-group mb-2">
                <label for="sound">Âm thanh: - sound</label>
                <input type="text" name="sound" class="form-control" id="sound" value="{{ old('sound') }}">
            </div>

            <div class="form-group mb-2">
                <button type="submit" class="btn btn-primary">Lưu mới</button>
                <a href="{{ route('systems.index') }}" class="btn btn-danger">Hủy</a>
            </div>
        </form>
    </div>
</div>
@endsection
<h1>{{ $title }}</h1>
@forelse ($users as $user)
    <p>{{ $user->IDNV }}</p>
    <p>{{ $user->HoTen }}</p>
    <p>{{ $user->IDPB }}</p>
    <p>{{ $user->DiaChi }}</p>
    <br>
    @empty
    <p>Khong co phan tu nao</p>
@endforelse

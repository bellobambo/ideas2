<div class="card">
    <div class="px-3 pt-4 pb-2">
        <form method="POST" enctype="multipart/form-data" action="{{route('user.update' , $user->id)}}">
        @csrf
        @method('put')
            <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img style="width:150px" class="me-3 avatar-sm rounded-circle"
                    src="{{$user->getImageUrl()}}" alt="Mario Avatar">
                <div>

                    <input type="text" name="name" value={{ $user->name }} class="form-control">
                    @error('name')
                        <span class="text-danger fs-6">
                            {{ $message }}
                        </span>
                    @enderror

                </div>
            </div>
            @auth()
                @if (Auth::id() !== $user->id)
                    <div>
                        <a href="{{ route('user.show', $user->id) }}">view</a>
                    </div>
                @endif
            @endauth
        </div>

        <div class="mt-5">
            <label for="">Profile Picture</label>
            <input type="file" name="image" class="form-cozntrol" id="">
            @error('image')
                <span class="fs-6 text-danger mt-2"> {{ $message }} </span>
            @enderror
        </div>

        <div class="px-2 mt-4">
            <h5 class="fs-5"> Bio : </h5>

            <div class="mb-3">
                <textarea name="bio" class="form-control" id="bio" rows="3">{{$user->bio}}</textarea>
                @error('bio')
                    <span class="fs-6 text-danger mt-2"> {{ $message }} </span>
                @enderror
            </div>
            <button class="btn btn-dark btn-sm mb-3">Save</button>



           @include('users.shared.user-stats')

        </div>
    </form>
    </div>
</div>

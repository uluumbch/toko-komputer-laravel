@extends('template.main')
@section('container')
    <div class="container">
        <div class="flex justify-center mt-8">
            <div class="rounded-lg shadow-xl dark:bg-gray-700 bg-gray-50 lg:w-1/2">
                <div class="m-4">
                    <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label class="inline-block mb-2 text-gray-500 dark:text-gray-200">Upload
                            Image(jpg,png,svg,jpeg)</label>
                        <div class="flex items-center justify-center w-full">
                            <label
                                class="flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 dark:hover:bg-gray-600 hover:border-gray-300">
                                <div class="flex flex-col items-center justify-center pt-7">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-12 h-12 text-gray-400 hover:text-gray-600" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <p
                                        class="pt-1 text-sm tracking-wider text-gray-400 dark:text-gray-200 hover:text-gray-600">
                                        Select a photo</p>
                                </div>
                                <input type="file" onchange="readURL(this);" name="image"
                                    class="opacity-0 hover:bg-gray-700" />
                                @error('image')
                                    <p class="text-red-500">{{ $message }}</p>
                                @enderror
                            </label>
                        </div>
                </div>
                <div class="m-2">
                    <img src="" id="image-upload" class="h-1/2">
                </div>
                <div class="flex p-2 space-x-4">
                    <button class="px-4 py-2 text-white bg-green-500 rounded shadow-xl">Upload</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    @push('gantilogo')
        <script>
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#image-upload')
                            .attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
    @endpush
@endsection

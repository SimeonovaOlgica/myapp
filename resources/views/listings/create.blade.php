<x-layout>
    <x-card class="p-10 rounded max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Create a Job Offer
        </h2>
        <p class="mb-4">Post a job to find a developer</p>
    </header>

     <form action="/listings" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
            <label
                for="company"
                class="inline-block text-lg mb-2"
                >Company name</label
            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="company"
                                value="{{old('company')}}"
                                />
                            @error('company')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>                                
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="title" class="inline-block text-lg mb-2"
                                >Job title</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="title"
                                placeholder="Example: Senior Laravel Developer"
                                value="{{old('title')}}"
                                />
                            @error('title')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>                                
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label
                                for="location"
                                class="inline-block text-lg mb-2"
                                >Location</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="location"
                                placeholder="Example: Remote, Boston MA, etc"
                                value="{{old('location')}}"
                            />
                            @error('location')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>                                
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="email" class="inline-block text-lg mb-2"
                                >Contact Email</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="email"
                                value="{{old('email')}}"
                            />
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>                                
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label
                                for="website"
                                class="inline-block text-lg mb-2"
                            >
                                Website
                            </label>
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="website"
                                value="{{old('website')}}"
                            />
                            @error('website')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>                                
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="tags" class="inline-block text-lg mb-2">
                                Tags (Comma Separated)
                            </label>
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="tags"
                                placeholder="Example: laravel, python, javascript, api... "
                                value="{{old('tags')}}"
                                />
                            @error('tags')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>                                
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="logo" class="inline-block text-lg mb-2">
                                Company Logo
                            </label>
                            <input
                                type="file"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="logo"
                            />
                            @error('logo')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>                                
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label
                                for="description"
                                class="inline-block text-lg mb-2"
                            >
                                Job Description
                            </label>
                            <textarea
                                class="border border-gray-200 rounded p-2 w-full"
                                name="description"
                                rows="10"
                                placeholder="Include tasks, requirements, salary, etc">
                                {{old('description')}}
                            </textarea>
                            @error('description')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>                                
                            @enderror
                        </div>

                        <div class="mb-6">
                            <button
                                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                            >
                                Create a Job
                            </button>

                            <a href="/" class="text-black ml-4"> Cancel</a>
                        </div>
                    </form>
                </div>
    </x-card>
</x-layout>